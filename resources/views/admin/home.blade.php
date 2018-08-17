@extends('admin.partials.layout')
@section('content')
<main id="main-container">
    <!-- Page Content -->
    <div class="content content-full">
        <!-- Hero -->
        <div class="block block-rounded block-transparent bg-image bg-image-bottom" style="background-image: url({{asset('admin/img/photos/photo13@2x.jpg')}});">
            <div class="block-content bg-primary-dark-op">
                <div class="py-20 text-center">
                    <h1 class="font-w700 text-white mb-10">{{ env('APP_NAME') }} Admin Panel</h1>
                    <h2 class="h4 font-w400 text-white-op">Control the magics behind Pear CMS here.</h2>
                </div>
            </div>
        </div>
        <div class="row">
          <div class="col-md-4">
          <a class="block block-link-pop text-right bg-primary" href="{{ url('backend/articles') }}">
                <div class="block-content block-content-full clearfix border-black-op-b border-3x">
                    <div class="float-left mt-10 d-none d-sm-block">
                        <i class="si si-book-open fa-3x text-primary-light"></i>
                    </div>
                    <div class="font-size-h3 font-w600 text-white">{{ News::count() }}</div>
                    <div class="font-size-sm font-w600 text-uppercase text-white-op">Articles</div>
                </div>
            </a>
          </div>

          <div class="col-md-4">
          <a class="block block-link-pop text-right bg-corporate" href="{{ url('/backend/article/create') }}">
                <div class="block-content block-content-full clearfix border-black-op-b border-3x">
                    <div class="float-left mt-10 d-none d-sm-block">
                        <i class="si si-plus fa-3x text-corporate-light"></i>
                    </div>
                    <div class="font-size-h3 font-w600 text-white">Create</div>
                    <div class="font-size-sm font-w600 text-uppercase text-white-op">Article</div>
                </div>
            </a>
          </div>

          <div class="col-md-4">
          <a class="block block-link-pop text-right bg-elegance" href="{{ url('backend/comments') }}">
                <div class="block-content block-content-full clearfix border-black-op-b border-3x">
                    <div class="float-left mt-10 d-none d-sm-block">
                        <i class="si si-bubbles fa-3x text-elegance-light"></i>
                    </div>
                    <div class="font-size-h3 font-w600 text-white">{{ NewsComments::count() }}</div>
                    <div class="font-size-sm font-w600 text-uppercase text-white-op">Comments</div>
                </div>
            </a>
          </div>

        </div>
        <div class="row">
                    <div class="col-md-4">
                          <div class="block">
                              <div class="block-content block-content-full">
                                  <div class="py-20 text-center">
                                      <div class="mb-20">
                                          <i class="fa fa-users fa-4x text-primary"></i>
                                      </div>
                                      <div class="font-size-h4 font-w600">{{ Account::count() }} player accounts</div>
                                      <div class="text-muted">
                                        @if(Account::count() > 150)
                                        Your playerbase is growing steadily. :)
                                        @else
                                        Advertise more to gain players.
                                        @endif
                                      </div>
                                      <div class="pt-20">
                                          <a class="btn btn-rounded btn-alt-primary" href="{{ url('backend/accounts') }}">
                                              <i class="si si-magnifier mr-5"></i> Manage accounts
                                          </a>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class="col-md-4">
                      <div class="block">
                                <div class="block-content block-content-full">
                                    <div class="py-20 text-center">
                                        <div class="mb-20">
                                            <i class="fas fa-thermometer-full fa-4x text-success"></i>
                                        </div>
                                        <div class="font-size-h4 font-w600">Pear CMS v{{ env('APP_VER') }}</div>
                                        <div class="text-muted">Your application is up-to-date.</div>
                                        <div class="pt-20">
                                            <a class="btn btn-rounded btn-alt-warning" href="javascript:void(0)">
                                                <i class="si si-settings mr-5"></i> Check for updates
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                          </div>
                          <div class="col-md-4">
                            <div class="block">
                                      <div class="block-content block-content-full">
                                          <div class="py-20 text-center">
                                              <div class="mb-20">
                                                  <i class="fas fa-code-branch fa-4x text-success"></i>
                                              </div>
                                              <div class="font-size-h4 font-w600">Laravel v{{app()::VERSION}}</div>
                                              <div class="text-muted">Your application is up-to-date.</div>
                                              <div class="pt-20">
                                                  <a class="btn btn-rounded btn-alt-warning" href="javascript:void(0)">
                                                      <i class="si si-settings mr-5"></i> Check for updates
                                                  </a>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                                </div>
        </div>
    </div>
</main>
@endsection
@section('customjs')
<script>
$( document ).ready(function() {
  $('[data-toggle="countTo"]').countTo();
});
  </script>
@endsection
