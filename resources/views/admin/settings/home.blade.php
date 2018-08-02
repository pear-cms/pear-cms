@extends('admin.partials.layout')
@section('content')
<main id="main-container">
    <!-- Page Content -->
    <div class="content content-full">
        <!-- Hero -->
        <div class="block block-rounded block-transparent bg-image bg-image-bottom" style="background-image: url('../admin/img/photos/photo13@2x.jpg');">
            <div class="block-content bg-primary-dark-op">
                <div class="py-20 text-center">
                    <h1 class="font-w700 text-white mb-10">{{ env('APP_NAME') }} Settings</h1>
                    <h2 class="h4 font-w400 text-white-op">Control some settings from here.</h2>
                </div>
            </div>
        </div>
        <div class="row">
                    <div class="col-md-4">
                          <div class="block">
                              <div class="block-content block-content-full">
                                  <div class="py-20 text-center">
                                      <div class="mb-20">
                                          <i class="fa fa-database fa-4x text-primary"></i>
                                      </div>
                                      <div class="font-size-h4 font-w600">Core Settings</div>
                                      <div class="text-muted">
                                        Adjust realmlist, database information, enable maintenance modes and more here.
                                      </div>
                                      <div class="pt-20">
                                          <a class="btn btn-rounded btn-alt-primary" href="{{ url('backend/settings/core') }}">
                                              <i class="si si-settings mr-5"></i> Manage
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
                                            <i class="fa fa-globe fa-4x text-primary"></i>
                                        </div>
                                        <div class="font-size-h4 font-w600">Realms Settings</div>
                                        <div class="text-muted">
                                          Adjust realmlist information on the fly.
                                        </div>
                                        <div class="pt-20">
                                            <a class="btn btn-rounded btn-alt-primary" href="{{ url('backend/settings/realms') }}">
                                                <i class="si si-settings mr-5"></i> Manage
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
