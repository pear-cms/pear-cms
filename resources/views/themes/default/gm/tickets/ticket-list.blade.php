@extends('partials.layout')

@section('content')
<div class="third-page">
  <div class="half-page-content mt-20">
    <h4 class="text-header text-upper">
        {{ __('translation.ticket_list') }}
    </h4>
    <p class="text-beige col-md-6 col-center">
        {{ __('translation.ticket_list_page_description') }}
    </p>
  </div>
</div>
<div class="container col-md-6 mt-20">
<div class="row">
  <div class="col-md-12 mt-20 no-padding">
  <h5 class="border-bottom mb-10">
      {{ __('translation.ticket_list') }}
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
          {{ __('translation.description') }}
      </th>
      <th scope="col">
          {{ __('translation.created') }}
      </th>
      <th scope="col">
            {{ __('translation.modified') }}
      </th>
      <th scope="col">
          {{ __('translation.status') }}
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
  <tr>
    <td colspan="5">
      <div class="container">
        @php
        $links = Helpers::getAllTickets()->links();
        $links = str_replace("<ul class=\"pagination", "<ul class=\"pagination justify-content-center", $links);
        $links = str_replace("class=\"page-link", "class=\"page-link button border orange", $links);
        $links = str_replace("class=\"page-item active", "class=\"page-item list-group-item-warning", $links);
        @endphp
        {!! $links !!}
      </div>
    </td>
  </tr>
</table>
@else
  <p class="text-red">
      {{ __('translation.error_no_tickets_2') }}
  </p>
@endif
</div>
</div>
@endsection
