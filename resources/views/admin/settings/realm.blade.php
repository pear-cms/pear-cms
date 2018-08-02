@extends('admin.partials.layout')
@section('content')
<main id="main-container">
<div class="content content-full">
    <div class="block">
        <div class="block-header block-header-default">
            <h3 class="block-title">{{ $realm->name }} Settings</h3>
        </div>
        <div class="block-content">
            <div class="row">
              <form id="settings" class="col-md-12">
                <div class="alert alert-danger" style="display:none"></div>

                <div class="form-group col-12">
                    <label>Realm Name</label>
                    <input type="text" class="form-control" name="realmName" placeholder="{{ $realm->name }}" value="{{ old('realmName', $realm->name) }}">
                    <div class="form-text text-muted small">
                      The realm name.
                    </div>
                </div>

                <div class="form-group col-12">
                    <label>Realm Address</label>
                    <input type="text" class="form-control" name="realmAddress" placeholder="{{ $realm->address }}" value="{{ old('realmAddress', $realm->address) }}">
                    <div class="form-text text-muted small">
                      The realm address.
                    </div>
                </div>

                <div class="form-group col-12">
                    <label>Realm Port</label>
                    <input type="text" class="form-control" name="realmPort" placeholder="{{ $realm->port }}" value="{{ old('realmPort', $realm->port) }}">
                    <div class="form-text text-muted small">
                      The realm port. Default: 8085
                    </div>
                </div>

                <div class="form-group col-12">
                    <label>Realm Description</label>
                    <input type="text" class="form-control" name="realmDescription" placeholder="{{ $realm->description }}" value="{{ old('realmDescription', $realm->description) }}">
                    <div class="form-text text-muted small">
                      Quick summary of experience rates or something. This is displayed at the <a href="{{ url('/status') }}" target="_blank">server status</a> page.
                    </div>
                </div>

                <div class="form-group col-12">
                    <label>Realm Icon</label>
                    <input type="text" class="form-control" name="realmIcon" placeholder="{{ $realm->icon }}" value="{{ old('realmIcon', $realm->icon) }}">
                    <div class="form-text text-muted small">
                      The realm icon. 0 = Normal | 1 = PVP | 4 = Normal | 6 = RP | 8 = RPPVP
                    </div>
                </div>

                <div class="form-group col-12">
                    <label>Realm Security Level</label>
                    <input type="text" class="form-control" name="realmSecurityLevel" placeholder="{{ $realm->allowedSecurityLevel }}" value="{{ old('realmSecurityLevel', $realm->allowedSecurityLevel) }}">
                    <div class="form-text text-muted small">
                    The minimum Gamemaster level in order to access the realm. Default: 0 (everyone can access)
                    </div>
                </div>

                <div class="form-group col-12">
                    <label>Realm Game Build</label>
                    <input type="text" class="form-control" name="realmGameBuild" placeholder="{{ $realm->gamebuild }}" value="{{ old('realmGameBuild', $realm->gamebuild) }}">
                    <div class="form-text text-muted small">
                    The minimum game build in order to access the realm. See <a href="https://trinitycore.atlassian.net/wiki/spaces/tc/pages/2130016/realmlist" target="_blank">TrinityCore realmlist Wiki</a> for more information.
                    </div>
                </div>

            <div class="col-12 text-center">
              <input type="submit" class="btn btn-primary mb-10" value="Save settings for {{ $realm->name }}" onclick="saveSettings()" />
            </div>
          </form>
            </div>
      </div>
    </div>
  </div>
</div>
</main>
@endsection

@section('customjs')
<script src="{{ asset('admin/js/plugins/sweetalert2/sweetalert2.all.min.js') }}"></script>
<script>
$( document ).ready(function() {
  $('[data-toggle="tooltip"]').tooltip();
  $('[data-toggle="popover"]').popover();
  $(".nav-tabs a").click(function(){
        $(this).tab('show');
    });
    $(".toggle-password").click(function() {
      $(this).toggleClass("fa-eye fa-eye-slash");
    var input = document.getElementById($(this).attr("toggle"));
    if (input.type === "password") {
      input.type = "text";
    } else {
      input.type = "password";
    }
    });
});

function saveSettings() {
  event.preventDefault(); // prevent form submit
          swal({
    title: "Are you sure?",
    text: "Saving will overwrite the current realm settings.",
    type: 'warning',
showCancelButton: true,
confirmButtonColor: '#26de81#fc5c65',
cancelButtonColor: '#fc5c65',
confirmButtonText: 'Save it!'
}).then((result) => {
if (result.value) {
  $.ajax(
  {
      url: "save/" + {{ $realm->id }},
      type: 'POST',
      dataType: "JSON",
      data: {
          "realmName": $("input[name='realmName']").val(),
          "realmAddress": $("input[name='realmAddress']").val(),
          "realmPort": $("input[name='realmPort']").val(),
          "realmDescription": $("input[name='realmDescription']").val(),
          "realmIcon": $("input[name='realmIcon']").val(),
          "realmSecurityLevel": $("input[name='realmSecurityLevel']").val(),
          "realmGameBuild": $("input[name='realmGameBuild']").val(),
          "_token": "{{ csrf_token() }}",
      },
      success: function (response)
      {
          //console.log(response); // see the reponse sent
          swal({
            title: "Realm settings were saved!",
            text: "Page is reloading in 3 seconds.",
            type: 'success',
          })

          setTimeout(function() {
              location.reload();
          }, 3000);
      },
      error: function(xhr) {
       console.log(xhr.responseText);
       swal({
         title: "An error occurred.",
         text: "Realm settings were not saved. Try again!",
         type: 'error',
       })
       $.each(xhr.responseJSON.errors, function (i, error) {
                var el = $(document).find('[name="'+i+'"]');
                el.after($('<span style="color: red;">'+error[0]+'</span>'));
            });
     }
  });
}
})
  }

  </script>
  @endsection
