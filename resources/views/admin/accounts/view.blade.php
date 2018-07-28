@extends('admin.partials.layout')
@section('content')
<main id="main-container">
<div class="content content-full">
    <div class="block">
        <div class="block-header block-header-default">
            <h3 class="block-title">Account</h3>
        </div>
        <div class="block-content">
            <div class="row">
              <div class="col-md-3">
                <div class="form-material input-group">
                    <input type="text" class="form-control" disabled="" id="material-addon-icon" name="material-addon-icon" placeholder="{{ $account->username }}">
                      <label for="material-addon-icon">Username</label>
                       <div class="input-group-append">
                        <span class="input-group-text">
                          <i class="fa fa-fw fa-user"></i>
                          </span>
                      </div>
                    </div>
              </div>

              <div class="col-md-3">
                <div class="form-material input-group">
                    <input type="text" class="form-control" disabled="" id="material-addon-icon" name="material-addon-icon" placeholder="{{ $account->email }}">
                      <label for="material-addon-icon">Email</label>
                       <div class="input-group-append">
                        <span class="input-group-text">
                          <i class="fa fa-fw fa-envelope"></i>
                          </span>
                      </div>
                    </div>
              </div>

              <div class="col-md-3">
                <div class="form-material input-group">
                    <input type="text" class="form-control" disabled="" id="material-addon-icon" name="material-addon-icon" placeholder="{{ $account->joindate }}">
                      <label for="material-addon-icon">Join date</label>
                       <div class="input-group-append">
                        <span class="input-group-text">
                          <i class="fa fa-fw fa-calendar"></i>
                          </span>
                      </div>
                    </div>
              </div>

              <div class="col-md-3">
                <div class="form-material input-group">
                    <input type="text" class="form-control" disabled="" id="material-addon-icon" name="material-addon-icon" placeholder="{{ $account->last_login }}">
                      <label for="material-addon-icon">Last login</label>
                       <div class="input-group-append">
                        <span class="input-group-text">
                          <i class="fa fa-fw fa-calendar"></i>
                          </span>
                      </div>
                    </div>
              </div>
            </div>

            <div class="row mt-20 pb-20">
              <div class="col-md-3">
                <div class="form-material input-group">
                    <input type="text" class="form-control" disabled="" id="material-addon-icon" name="material-addon-icon" placeholder="{{ $account->goldcoins }}">
                      <label for="material-addon-icon">Gold coins</label>
                       <div class="input-group-append">
                        <span class="input-group-text">
                          <i class="fa fa-fw fa-money"></i>
                          </span>
                      </div>
                    </div>
              </div>

              <div class="col-md-3">
                <div class="form-material input-group">
                    <input type="text" class="form-control" disabled="" id="material-addon-icon" name="material-addon-icon" placeholder="{{ $account->silvercoins }}">
                      <label for="material-addon-icon">Silver coins</label>
                       <div class="input-group-append">
                        <span class="input-group-text">
                          <i class="fa fa-fw fa-money"></i>
                          </span>
                      </div>
                    </div>
              </div>

              <div class="col-md-3">
                <div class="form-material input-group">
                    <input type="text" class="form-control" disabled="" id="material-addon-icon" name="material-addon-icon" placeholder="{{ $account->last_ip }}">
                      <label for="material-addon-icon js-popover-enabled" data-toggle="popover" title="" data-trigger="hover" data-placement="top" data-content="{{ Account::getIPInfo($account->last_ip) }}" data-original-title="Located in">Last IP (<a href="#">IP Information</a>)</label>
                       <div class="input-group-append">
                        <span class="input-group-text">
                          <i class="fa fa-fw fa-user-secret"></i>
                          </span>
                      </div>
                    </div>
              </div>

              <div class="col-md-3">
                <div class="form-material input-group">
                  @if($account->locked == '1')
                    <input type="text" class="form-control" disabled="" id="material-addon-icon" name="material-addon-icon" placeholder="Locked to {{ $account->last_ip }}">
                    @else
                    <input type="text" class="form-control" disabled="" id="material-addon-icon" name="material-addon-icon" placeholder="Unlocked">
                    @endif
                    <label for="material-addon-icon">Account status</label>
                       <div class="input-group-append">
                        <span class="input-group-text">
                          <i class="fa fa-fw fa-question"></i>
                          </span>
                      </div>
                    </div>
              </div>
            </div>
        </div>

        <div class="block-header block-header-default">
            <h3 class="block-title">Characters</h3>
        </div>
        <div class="row">
        @foreach($characters as $character)
        <div class="col-md-6 col-xl-4">
            <a class="block block-link-shadow text-center" href="javascript:void(0)">
                <div class="block-content block-content-full block-content-sm">
                    <div class="font-w600"><img alt="Faction" src="{{ asset('images/icons') }}/{{ Helpers::getFactionByRace($character->race) }}.png" /> {{ $character->name }}</div>
                </div>
                <div class="block-content">
                    <div class="row items-push text-center">
                      <div class="col-6">
                          <div class="item item-circle bg-success-light mx-auto mb-10">
                              <i class="fas fa-level-up-alt text-success"></i>
                          </div>
                          <div class="text-muted">Level {{ $character->level }}</div>
                        </div>
                        <div class="col-6">
                            <div class="item item-circle bg-success-light mx-auto mb-10">
                                <i class="fas fa-money text-success"></i>
                            </div>
                            <div class="text-muted">{{ floor($character->money / 10000) }}g, {{ floor($character->money % 10000 / 100) }}s, {{ floor($character->money % 100) }}c</div>
                          </div>
                        <div class="col-6">
                            <div class="item item-circle bg-info-light mx-auto mb-10">
                                <i class="fas fa-skull text-info"></i>
                            </div>
                            <div class="text-muted">{{ $character->totalKills }} kills</div>
                        </div>
                        <div class="col-6">
                            <div class="item item-circle bg-info-light mx-auto mb-10">
                                <i class="fas fa-globe text-info"></i>
                            </div>
                            <div class="text-muted">{{ Helpers::MapIdToZoneName($character->map )}}</div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        @endforeach
      </div>
    </div>
  </div>
</div>
</main>
@endsection

@section('customjs')
<script>
$( document ).ready(function() {
  $('[data-toggle="tooltip"]').tooltip();
  $('[data-toggle="popover"]').popover();
});
  </script>
  @endsection
