@extends('partials.layout')

@section('content')
<div class="third-page">
  <div class="half-page-content mt-20">
    <h4 class="text-header text-upper">
      Ticket List
    </h4>
    <p class="text-beige col-md-6 col-center">
      Here are all the tickets made by players.
    </p>
  </div>
</div>
<div class="container col-md-6 mt-20">
<div class="row">
  <div class="col-md-12 mt-20 no-padding">
  <h5 class="border-bottom mb-10">
    Ticket List
  </h5>
</div>
@if ( Helpers::getAllTickets()->count() > 0)
<table class="table">
  <thead>
    <tr>
      <th scope="col">
        #
      </th>
      <th scope="col">
        Description
      </th>
      <th scope="col">
        Created
      </th>
      <th scope="col">
        Modified
      </th>
      <th scope="col">
        Status
      </th>
    </tr>
  </thead>
  <tbody>
    @foreach(Helpers::getAllTickets() as $ticket)
    <tr>
      <th scope="row">
          {{ $ticket->id }}
      </th>
      <td>
        <a href="{{ url('/gm/ticket/view') }}/{{ $ticket->id }}" class="ticket-status-{{ Helpers::ticketStatus($ticket->type) }}">
          {{ Helpers::limitTicketLength($ticket->description) }}
        </a>
      </td>
      <td>
        {{date('Y-m-d, H:i:s', $ticket->createTime)}}
      </td>
      <td>
        {{date('Y-m-d, H:i:s', $ticket->lastModifiedTime)}}
      </td>
      <td class="ticket-status-{{ Helpers::ticketStatus($ticket->type) }}">
        {{ Helpers::ticketStatus($ticket->type) }}
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
@else
  <p class="text-red">
    There aren't any tickets.
  </p>
@endif
</div>
</div>
@endsection
