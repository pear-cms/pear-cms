@extends('admin.partials.layout')
@section('content')
<div class="content">
    <div class="container-fluid">
<div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Edit {{ $account->username }}</h4>
                                </div>
                                <div class="card-body">
                                    <form>
                                        <div class="row">
                                            <div class="col-md-3 pr-1">
                                                <div class="form-group">
                                                    <label>Account ID</label>
                                                    <input type="text" class="form-control" disabled="" placeholder="Account ID" value="{{ $account->id}}">
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
                                                    <label for="exampleInputEmail1">Email address</label>
                                                    <input type="email" class="form-control" placeholder="{{ $account->email }}" value="{{ $account->email }}">
                                                </div>
                                            </div>

                                            <div class="col-md-4 pl-1">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Join date</label>
                                                    <input type="email" class="form-control" disabled="" placeholder="{{ $account->joindate }}" value="{{ $account->joindate }}">
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
                                        <button type="submit" class="btn btn-info btn-fill float-right">Update Account</button>
                                        <div class="clearfix"></div>
                                    </form>
                                </div>
                            </div>
</div>
</div>
@endsection
