@extends('partials.layout')

@section('content')
<div class="third-page">
  <div class="half-page-content mt-20">
    <h4 class="text-header text-upper">
      {{ $character->name }}'s tickets
    </h4>
    <p class="text-beige col-md-6 col-center">
      Here are all the tickets made by {{ $character->name }}.
    </p>
  </div>
</div>
<div class="container col-md-6 mt-20">
<div class="row">
  <div class="col-md-12 mt-20 no-padding">
  <h5 class="border-bottom mb-10">
    {{ $character->name }}'s tickets
  </h5>
</div>
@if ( Helpers::getCharacterTicketsCount($character->guid) > 0)
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
    @foreach(Helpers::GetCharacterTickets($character->guid) as $ticket)
    <tr>
      <th scope="row">
          {{ $ticket->id }}
      </th>
      <td>
        <a href="{{ url('/acp/character/ticket') }}/{{ $character->name }}/{{ $ticket->id }}" class="ticket-status-{{ Helpers::ticketStatus($ticket->type) }}">
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
    {{$character->name}} has no tickets made.
  </p>
@endif
</div>
</div>
@endsection
