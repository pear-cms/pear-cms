@extends('admin.partials.layout')
@section('content')
<div id="main-container">
    <div class="content content-full">
      <div class="block">
          <div class="block-header block-header-default">
              <h3 class="block-title">Edit {{ $account->username }}</h3>
          </div>
                                <div class="block-content">
                                    <form>
                                        <div class="row">
                                            <div class="col-md-3 pr-1">
                                                <div class="form-group">
                                                    <label>Account ID</label>
                                                    <input type="text" class="form-control" disabled= placeholder="Account ID" value="{{ $account->id}}">
                                                </div>
                                            </div>
                                            <div class="col-md-2 px-1">
                                                <div class="form-group">
                                                    <label>Username</label>
                                                    <input type="text" class="form-control" placeholder="{{ $account->username }}" value="{{ $account->username }}">
                                                </div>
                                            </div>
                                            <div class="col-md-3 pl-1">
                                                <div class="form-group">
                                                    <label>Email address</label>
                                                    <input type="email" class="form-control" placeholder="{{ $account->email }}" value="{{ $account->email }}">
                                                </div>
                                            </div>

                                            <div class="col-md-4 pl-1">
                                                <div class="form-group">
                                                    <label>Join date</label>
                                                    <input type="text" class="form-control" disabled placeholder="{{ $account->joindate }}" value="{{ $account->joindate }}">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-2 pr-1">
                                                <div class="form-group">
                                                    <label>Gold Coins</label>
                                                    <input type="text" class="form-control" placeholder="{{ $account->goldcoins}}" value="{{ $account->goldcoins}}">
                                                </div>
                                            </div>
                                            <div class="col-md-2 px-1">
                                                <div class="form-group">
                                                    <label>Silver Coins</label>
                                                    <input type="text" class="form-control" placeholder="{{ $account->silvercoins}}" value="{{ $account->silvercoins}}">
                                                </div>
                                            </div>
                                        </div>
                                        <center>
                                        <button type="submit" style="margin-bottom:20px; text-align:center;" class="btn btn-info btn-fill">Update Account</button>
                                      </center>
                                        <div class="clearfix"></div>
                                    </form>
                                </div>
                            </div>
</div>
</div>
@endsection
