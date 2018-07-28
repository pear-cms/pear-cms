<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use Validator;
use Helpers;
use Auth;
use DB;
use Lang;
use Account;
use Characters;

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
      return view('acp.home',
      [
        'title' => __('translation.account_panel'),
        'characters' => Characters::where('account', Auth::user()->id)->get(),
      ]);
    }

    public function viewCharacter($name)
    {
      if ( Characters::where('name', $name)->first() || Helpers::checkIfGM())
      {
        // Character belongs to the id accessing it.
        $data = Characters::where(['name' => $name, 'account' => Auth::user()->id])->first();
        return view('acp.view-character', ['title' => __('translation.viewing_character') . ': ' . $name , 'character' => $data]);
      } else {
        // Character do not belong to the id attempting to access it. Redirect to acp.
        return redirect('/acp');
      }
    }

    public function viewTickets()
    {
      return view('acp.view-tickets',
      [
        'title' => __('translation.my_tickets'),
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
            'title' => __('translation.viewing_ticket_by') . ' ' . $name ,
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
          'title' => $name . '\'s ' . __('translation.tickets'),
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
                // The password dont match
                if ( env('ERROR_LOGGING') == true )
                {
                  Helpers::saveErrorLog('Password change failed (current password != stored password).');
                }
                return redirect()->back()->with("error", __('translation.error_current_password_no_match'));
            }

            if(strcmp($request->get('current_password'), $request->get('password')) == 0){
                //Current password and new password are same
                return redirect()->back()->with("error", __('translation.error_new_password_not_same'));
            }

            //Change Password
            if(Helpers::sendSOAPCommand('acc set password '. Auth::user()->username . ' ' . $request->get('password') . ' ' . $request->get('password')))
            {
              // return redirect if the password was successfully changed.
              return redirect()->back()->with("success", __('translation.success_password_change'));
            } else {
              // return redirect if the password change was unsuccessful.
              return redirect()->back()->with("error", __('translation.error_unknown'));

            }

            return redirect()->back()->with("success", __('translation.success_password_change'));
    }

    public function changePasswordForm()
    {
        return view('acp.change-password',
        [
          'title' => __('translation.change_password'),
        ]);
    }
}
