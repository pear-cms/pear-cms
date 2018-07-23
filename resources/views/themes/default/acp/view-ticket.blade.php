@extends('partials.layout')
@section('content')
  <div class="third-page">
    <div class="half-page-content mt-20">
      <h4 class="text-header text-upper">
        {{ __('translation.viewing_ticket') }} #{{ $ticket->id }}
      </h4>
      <p class="text-beige col-md-6 col-center">
        {{ __('translation.currently_viewing_ticket') }} #{{ $ticket->id }}.
      </p>
    </div>
  </div>
  <div class="container col-md-6 text-grey mt-20">
    <div class="row">
      <div class="col-md-12">
        <h5 class="border-bottom mb-10">
          {{ __('translation.created_by') }}
          <span class="float-right">
            <a href="{{ url('/acp/character') }}/{{ $ticket->name }}">
              {{ $ticket->name }}
            </a>
          </span>
        </h5>
      </div>
      <div class="col-md-12">
        <h5 class="border-bottom mb-10">
          {{ __('translation.created_at') }}
          <span class="float-right">
            {{ date('Y-m-d, H:i:s', $ticket->createTime) }}
          </span>
        </h5>
      </div>
      <div class="col-md-12">
        <h5 class="border-bottom mb-10">
          {{ __('translation.last_modified_at') }}
          <span class="float-right">
            {{ date('Y-m-d, H:i:s', $ticket->lastModifiedTime) }}
          </span>
        </h5>
      </div>
      <div class="col-md-12">
        <h5 class="border-bottom mb-10">
          {{ __('translation.ticket_status') }}
          <span class="float-right ticket-status-{{ Helpers::ticketStatus($ticket->type) }}">
            {{ Helpers::getTicketStatus($ticket->type) }}
          </span>
        </h5>
      </div>
      @if ( $ticket->type  == 0)
        @if ( $ticket->assignedTo > 0)
          <div class="col-md-12">
            <h5 class="border-bottom mb-10">
              {{ __('translation.assigned_to') }}
              <span class="float-right">
                <img alt="gmicon" src='{{ asset('images/icons/gm.png') }}' />
                <span class="text-gamemaster">
                  {{ Helpers::getCharacterNameFromGuid($ticket->assignedTo) }}
                </span>
              </span>
            </h5>
          </div>
        @endif
      @else
      <img src='{{ asset('images/icons/gm.png') }}' />
      <span class="text-gamemaster">
        {{ Helpers::getCharacterNameFromGuid($ticket->closedBy) }}
      </span>
        @if ( $ticket->closedBy  > 0)
          <div class="col-md-12">
            <h5 class="border-bottom mb-10">
              {{ __('translation.closed_by') }}
              <span class="float-right">
                @if ($ticket->closedBy == $ticket->playerGuid)
                  {{ __('translation.creator') }} (<a href="{{ url('/acp/character') }}/{{ $ticket->name }}">{{$ticket->name}}</a>)
                @else
                  <img alt="gmicon" src='{{ asset('images/icons/gm.png') }}' />
                  <span class="text-gamemaster">
                    {{ Helpers::getCharacterNameFromGuid($ticket->closedBy) }}
                  </span>
                @endif
              </span>
            </h5>
          </div>
        @endif
      @endif
      <div class="col-md-12 mt-20">
        <h5 class="border-bottom mb-10">
            {{ __('translation.description') }}:
        </h5>
        <p>
          {!! nl2br($ticket->description) !!}
        </p>
      </div>

      @if (!$ticket->response == "")
        <div class="col-md-12 mt-20">
          <h5 class="border-bottom mb-10">
            <img alt="gmicon" src='{{ asset('images/icons/gm.png') }}' /> {{ __('translation.response') }}:
          </h5>
          <p>
            {!! nl2br($ticket->response) !!}
          </p>
        </div>
      @endif
      @if( Helpers::getTicketStatus($ticket->type) == "Open")
        <div class="col-md-12 mt-20">
          <form action="{{ route('closeTicket',$ticket->id) }}" method="POST">
            {{ csrf_field() }}
            <button type="submit" class="btn btn-sm btn-outline-danger">
              {{ __('translation.button_close_ticket') }}
            </button>
          </form>
        </div>
      @endif
    </div>
  </div>
@endsection
