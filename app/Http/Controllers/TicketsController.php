<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Tickets;
use Auth;

class TicketsController extends Controller
{
  public function viewTicket($id)
  {
      if ( $ticket = Tickets::find($id) )
      {
        return view('acp.view-ticket',
        [
          'title' => 'Viewing ticket #' . $id ,
          'ticket' => Tickets::where('id', $id)->first(),
        ]);
      } else {
        return redirect('/gm');
      }
  }

  public function closeTicket($id)
  {
      if ( Tickets::find($id) ) {
          Tickets::where('id', $id)->update([
           'type' => '1',
           'closedBy' => Auth::user()->id,
           'lastModifiedTime' => time(),
          ]);
          return redirect()->route('viewTicket', $id);
      } else {
          return redirect('/gm');
      }
  }
}
