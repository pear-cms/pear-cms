<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use Validator;
use Helpers;
use Auth;
use DB;

class AccountPanelController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      // get IP info for last ip that accessed account.
      $data = json_decode(file_get_contents("http://ip-api.com/json/" . Auth::user()->last_ip));
      return view('acp.home',
      [
        'title' => 'User Account Panel',
        'data' => $data
      ]);
    }

    public function viewCharacter($name)
    {
      if ( Helpers::CharacterBelongsToId($name, Auth::user()->id))
      {
        // Character belongs to the id accessing it.
        $data = Helpers::getCharacterDataByName($name);
        return view('acp.view-character', ['title' => 'Viewing character: ' . $name , 'character' => $data]);
      } else {
        // Character do not belong to the id attempting to access it. Redirect to acp.
        return redirect('/acp');
      }
    }

    public function viewTickets()
    {
      return view('acp.view-tickets',
      [
        'title' => 'My Tickets',
      ]);
    }
    public function viewCharacterTicket($name, $id)
    {
      if ( Helpers::CharacterBelongsToId($name, Auth::user()->id))
      {
        $data = Helpers::getCharacterDataByName($name);
        if ( $data = Helpers::getTicketInformationFromGuid($data->guid, $id)) {
          return view('acp.view-ticket',
          [
            'title' => 'Viewing ticket by ' . $name ,
            'ticket' => $data
          ]);
        } else {
          return redirect('/acp');
        }
      } else {
        // Character do not belong to the id attempting to access it. Redirect to acp.
        return redirect('/acp');
      }
    }
    public function viewCharacterTickets($name)
    {
      if ( Helpers::CharacterBelongsToId($name, Auth::user()->id))
      {
        // Character belongs to the id accessing it.
        $data = Helpers::getCharacterDataByName($name);
        //return view('acp.view-character-tickets', ['title' => $name . '\'s Tickets']);
        return view('acp.view-character-tickets',
        [
          'title' => $name . '\'s Tickets',
          'character' => $data
        ]);
      } else {
        // Character do not belong to the id attempting to access it. Redirect to acp.
        return redirect('/acp');
      }
    }

    public function changePassword(Request $request)
    {

      $validator = $request->validate([
            'current_password' => 'required',
            'password' => 'required|min:6|confirmed|max:30|alpha_num',
        ]);

            if (! DB::connection('auth')->table('account')->where(['username' => Auth::user()->username, 'sha_pass_hash' => Helpers::hashPassword($request->get('current_password')) ])->first() )
            {
                // The passwords matches
                return redirect()->back()->with("error", "Your current password does not match the password from our records. Try again.");
            }

            if(strcmp($request->get('current_password'), $request->get('password')) == 0){
                //Current password and new password are same
                return redirect()->back()->with("error", "New password cannot be same as your current password. Please choose a different password.");
            }

            //Change Password
            if(Helpers::sendSOAPCommand('acc set password '. Auth::user()->username .' ' . $request->get('password') . ' ' . $request->get('password')))
            {
              // return redirect if the password was successfully changed.
              return redirect()->back()->with("success","Password changed successfully!");
            } else {
              // return redirect if the password change was unsuccessful.
              return redirect()->back()->with("error", "Something goofed...");

            }

            return redirect()->back()->with("success","Password changed successfully!");
    }

    public function changePasswordForm()
    {
        return view('acp.change-password',
        [
          'title' => 'Change Password',
        ]);
    }
}
