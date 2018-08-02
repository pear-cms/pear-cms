@extends('admin.partials.layout')
@section('content')
<main id="main-container">
<div class="content content-full">
    <div class="block">
        <div class="block-header block-header-default">
            <h3 class="block-title">Core Settings</h3>
        </div>
        <div class="block-content">
            <div class="row">
              <form id="settings">
                <div class="alert alert-danger" style="display:none"></div>
                <div class="form-group col-12">
                    <label>Application Name</label>
                    <input type="text" class="form-control" name="appName" placeholder="App Name" value="{{ old('appName', env('APP_NAME')) }}">
                    <div class="form-text text-muted small">
                      Your application name that will be displayed in the title bar when browsing around.
                    </div>
                </div>

                <div class="form-group col-12">
                    <label>Application Url</label>
                    <input type="text" class="form-control" name="appUrl" placeholder="App Url" value="{{ old('appUrl', env('APP_URL')) }}">
                    <div class="form-text text-muted small">
                      The URL for the application, for example: <strong>https://example.com/pear-cms</strong>
                    </div>
                </div>

                <div class="form-group col-12">
                    <label>Realmlist</label>
                    <input type="text" class="form-control" name="realmlist" placeholder="Realmlist" value="{{ old('realmlist', env('realmlist')) }}">
                    <div class="form-text text-muted small">
                      This is the realmlist that will be public to your players so they know which domain or IP to connect to.
                    </div>
                </div>

              <div class="form-group col-12">
                  <label>Meta Description</label>
                  <input type="text" class="form-control" name="metaDescription" placeholder="Meta description" value="{{ old('metaDescription', env('META_DESCRIPTION')) }}">
                  <div class="form-text text-muted small">
                    <strong>Meta description</strong>s are HTML attributes that provide concise summaries of webpages. They are between one sentence to a short paragraph and appear underneath the blue clickable links in a search engine results page.
                  </div>
              </div>

              <div class="form-group col-12">
                  <label>Meta Keywords</label>
                  <input type="text" class="form-control" name="metaKeywords" placeholder="Meta Keywords" value="{{ old('metaKeywords', env('META_KEYWORDS')) }}">
                  <div class="form-text text-muted small">
                    <strong>Meta Keywords</strong> are a specific type of meta tag that appear in the HTML code of a Web page and help tell search engines what the topic of the page is.
                  </div>
              </div>

              <div class="form-group col-12">
                  <label>Application Debug</label> <br />
                  <label class="css-control css-control-primary css-radio">
                      <input type="radio" class="css-control-input" name="appDebugging" value="TRUE" {{ (env('APP_DEBUG') == TRUE) ? 'checked=""' : '' }}>
                      <span class="css-control-indicator"></span> Yes
                  </label>

                  <label class="css-control css-control-primary css-radio">
                      <input type="radio" class="css-control-input" name="appDebugging" value="FALSE" {{ (env('APP_DEBUG') == FALSE) ? 'checked=""' : '' }}>
                      <span class="css-control-indicator"></span> No
                  </label>
                  <div class="form-text text-muted small">
                    When enablning <strong>app debugging</strong>, the application will output very detailed error logs instead of showing "An error has occurred" and have it logged in <i>storage/logs/laravel.log</i>.
                    <strong>Not recommended for production</strong>!
                  </div>
              </div>

              <div class="form-group col-12">
                  <label>Site Maintenance</label> <br />
                  <label class="css-control css-control-primary css-radio">
                      <input type="radio" class="css-control-input" name="siteMaintenance" value="TRUE" {{ (env('SITE_MAINTENANCE') == TRUE) ? 'checked=""' : '' }}>
                      <span class="css-control-indicator"></span> Yes
                  </label>

                  <label class="css-control css-control-primary css-radio">
                      <input type="radio" class="css-control-input" name="siteMaintenance" value="FALSE" {{ (env('SITE_MAINTENANCE') == FALSE) ? 'checked=""' : '' }}>
                      <span class="css-control-indicator"></span> No
                  </label>
                  <div class="form-text text-muted small">
                    If you are making internal adjustments to your website that you do not wish the public to see, you should enable this setting.
                  </div>
              </div>

              <div class="form-group col-12">
                  <label>Auth Maintenance</label> <br />
                  <label class="css-control css-control-primary css-radio">
                      <input type="radio" class="css-control-input" name="authMaintenance" value="TRUE" {{ (env('AUTH_MAINTENANCE') == TRUE) ? 'checked=""' : '' }}>
                      <span class="css-control-indicator"></span> Yes
                  </label>

                  <label class="css-control css-control-primary css-radio">
                      <input type="radio" class="css-control-input" name="authMaintenance" value="FALSE" {{ (env('AUTH_MAINTENANCE') == FALSE) ? 'checked=""' : '' }}>
                      <span class="css-control-indicator"></span> No
                  </label>
                  <div class="form-text text-muted small">
                    Enabling auth maintenance will disable new registrations, logging in or accessing the account panel. Other website functions will work.
                  </div>
              </div>

              <div class="form-group col-12">
                  <label>Error Logging</label> <br />
                  <label class="css-control css-control-primary css-radio">
                      <input type="radio" class="css-control-input" name="errorLogging" value="TRUE" {{ (env('ERROR_LOGGING') == TRUE) ? 'checked=""' : '' }}>
                      <span class="css-control-indicator"></span> Yes
                  </label>

                  <label class="css-control css-control-primary css-radio">
                      <input type="radio" class="css-control-input" name="errorLogging" value="FALSE"  {{ (env('ERROR_LOGGING') == FALSE) ? 'checked=""' : '' }}>
                      <span class="css-control-indicator"></span> No
                  </label>
                  <div class="form-text text-muted small">
                    Enabling this will log every error that occurrs such as donation attempts, 404's, etc into the database. May cause a ton of logs.
                  </div>
              </div>

              <div class="col-12">
                <ul class="nav nav-tabs nav-tabs-alt js-tabs-enabled" data-toggle="tabs" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active show" href="#auth">Auth Database</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#characters">Characters Database</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#world">World Database</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#website">Website Database</a>
                    </li>
                </ul>
                <div class="block-content tab-content">
                    <div class="tab-pane active show" id="auth" role="tabpanel">
                        <div class="form-group col-12">
                            <label>Host</label>
                            <input type="text" class="form-control" name="authHost" placeholder="{{ env('DB_HOST_AUTH') }}" value="{{ old('DB_HOST_AUTH', env('DB_HOST_AUTH')) }}">
                            <div class="form-text text-muted small">
                              Domain name or IP to connect to for auth database. If using a domain name or external IP, ensure that you allowed <strong>{{ $_SERVER['SERVER_ADDR'] }}</strong> proper remote MySQL permissions.
                            </div>
                        </div>

                        <div class="form-group col-12">
                            <label>Database</label>
                            <input type="text" class="form-control" name="authDatabase" placeholder="{{ env('DB_DATABASE_AUTH') }}" value="{{ old('DB_DATABASE_AUTH', env('DB_DATABASE_AUTH')) }}">
                            <div class="form-text text-muted small">
                            Database name to use when connecting to the auth database.
                            </div>
                        </div>

                        <div class="form-group col-12">
                            <label>Username</label>
                            <input type="text" class="form-control" name="authUsername" placeholder="{{ env('DB_USERNAME_AUTH') }}" value="{{ old('DB_USERNAME_AUTH', env('DB_USERNAME_AUTH')) }}">
                            <div class="form-text text-muted small">
                            Username to use when connecting to the auth database.
                            </div>
                        </div>

                        <div class="form-group col-12">
                            <label>Password</label>
                            <div class="input-group">
                              <input type="password" class="form-control" id="authPassword" name="authPassword" placeholder="{{ env('DB_PASSWORD_AUTH') }}" value="{{ old('DB_PASSWORD_AUTH', env('DB_PASSWORD_AUTH')) }}">
                                <div class="input-group-append">
                                  <span class="btn btn-secondary toggle-password fas fa-eye" toggle="authPassword"></span>
                                </div>
                            </div>
                            <div class="form-text text-muted small">
                            Password to use when connecting to the auth database.
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="characters" role="tabpanel">
                        <div class="form-group col-12">
                            <label>Host</label>
                            <input type="text" class="form-control" name="charactersHost" placeholder="{{ env('DB_HOST_CHARACTERS') }}" value="{{ old('DB_HOST_CHARACTERS', env('DB_HOST_CHARACTERS')) }}">
                            <div class="form-text text-muted small">
                              Domain name or IP to connect to for characters database. If using a domain name or external IP, ensure that you allowed <strong>{{ $_SERVER['SERVER_ADDR'] }}</strong> proper remote MySQL permissions.
                            </div>
                        </div>

                        <div class="form-group col-12">
                            <label>Database</label>
                            <input type="text" class="form-control" name="charactersDatabase" placeholder="{{ env('DB_DATABASE_CHARACTERS') }}" value="{{ old('DB_DATABASE_CHARACTERS', env('DB_DATABASE_CHARACTERS')) }}">
                            <div class="form-text text-muted small">
                            Database name to use when connecting to the characters database.
                            </div>
                        </div>

                        <div class="form-group col-12">
                            <label>Username</label>
                            <input type="text" class="form-control" name="charactersUsername" placeholder="{{ env('DB_USERNAME_CHARACTERS') }}" value="{{ old('DB_USERNAME_CHARACTERS', env('DB_USERNAME_CHARACTERS')) }}">
                            <div class="form-text text-muted small">
                            Username to use when connecting to the characters database.
                            </div>
                        </div>

                        <div class="form-group col-12">
                            <label>Password</label>
                            <div class="input-group">
                                <input type="password" class="form-control" id="charactersPassword" name="charactersPassword" placeholder="{{ env('DB_PASSWORD_CHARACTERS') }}" value="{{ old('DB_PASSWORD_CHARACTERS', env('DB_PASSWORD_CHARACTERS')) }}">
                                  <div class="input-group-append">
                                    <span class="btn btn-secondary toggle-password fas fa-eye" toggle="charactersPassword"></span>
                                  </div>
                            </div>
                            <div class="form-text text-muted small">
                            Password to use when connecting to the characters database.
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="world" role="tabpanel">
                        <div class="form-group col-12">
                            <label>Host</label>
                            <input type="text" class="form-control" name="worldHost" placeholder="{{ env('DB_HOST_WORLD') }}" value="{{ old('DB_HOST_WORLD', env('DB_HOST_WORLD')) }}">
                            <div class="form-text text-muted small">
                              Domain name or IP to connect to for world database. If using a domain name or external IP, ensure that you allowed <strong>{{ $_SERVER['SERVER_ADDR'] }}</strong> proper remote MySQL permissions.
                            </div>
                        </div>

                        <div class="form-group col-12">
                            <label>Database</label>
                            <input type="text" class="form-control" name="worldDatabase" placeholder="{{ env('DB_DATABASE_WORLD') }}" value="{{ old('DB_DATABASE_WORLD', env('DB_DATABASE_WORLD')) }}">
                            <div class="form-text text-muted small">
                            Database name to use when connecting to the world database.
                            </div>
                        </div>

                        <div class="form-group col-12">
                            <label>Username</label>
                            <input type="text" class="form-control" name="worldUsername" placeholder="{{ env('DB_USERNAME_WORLD') }}" value="{{ old('DB_USERNAME_WORLD', env('DB_USERNAME_WORLD')) }}">
                            <div class="form-text text-muted small">
                            Username to use when connecting to the world database.
                            </div>
                        </div>

                        <div class="form-group col-12">
                            <label>Password</label>
                            <div class="input-group">
                                <input type="password" class="form-control" id="worldPassword" name="worldPassword" placeholder="{{ env('DB_PASSWORD_WORLD') }}" value="{{ old('DB_PASSWORD_WORLD', env('DB_PASSWORD_WORLD')) }}">
                                  <div class="input-group-append">
                                    <span class="btn btn-secondary toggle-password fas fa-eye" toggle="worldPassword"></span>
                                  </div>
                            </div>
                            <div class="form-text text-muted small">
                            Password to use when connecting to the world database.
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="website" role="tabpanel">
                        <div class="form-group col-12">
                            <label>Host</label>
                            <input type="text" class="form-control" name="websiteHost" placeholder="{{ env('DB_HOST_WEBSITE') }}" value="{{ old('DB_HOST_WEBSITE', env('DB_HOST_WEBSITE')) }}">
                            <div class="form-text text-muted small">
                              Domain name or IP to connect to for website database. If using a domain name or external IP, ensure that you allowed <strong>{{ $_SERVER['SERVER_ADDR'] }}</strong> proper remote MySQL permissions.
                            </div>
                        </div>

                        <div class="form-group col-12">
                            <label>Database</label>
                            <input type="text" class="form-control" name="websiteDatabase" placeholder="{{ env('DB_DATABASE_WEBSITE') }}" value="{{ old('DB_DATABASE_WEBSITE', env('DB_DATABASE_WEBSITE')) }}">
                            <div class="form-text text-muted small">
                            Database name to use when connecting to the website database.
                            </div>
                        </div>

                        <div class="form-group col-12">
                            <label>Username</label>
                            <input type="text" class="form-control" name="websiteUsername" placeholder="{{ env('DB_USERNAME_WEBSITE') }}" value="{{ old('DB_USERNAME_WEBSITE', env('DB_USERNAME_WEBSITE')) }}">
                            <div class="form-text text-muted small">
                            Username to use when connecting to the website database.
                            </div>
                        </div>

                        <div class="form-group col-12">
                            <label>Password</label>
                            <div class="input-group">
                                <input type="password" class="form-control" id="websitePassword" name="websitePassword" placeholder="{{ env('DB_PASSWORD_WEBSITE') }}" value="{{ old('DB_PASSWORD_WEBSITE', env('DB_PASSWORD_WEBSITE')) }}">
                                  <div class="input-group-append">
                                    <span class="btn btn-secondary toggle-password fas fa-eye" toggle="websitePassword"></span>
                                  </div>
                            </div>
                            <div class="form-text text-muted small">
                            Password to use when connecting to the website database.
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12">
                  <ul class="nav nav-tabs nav-tabs-alt js-tabs-enabled" data-toggle="tabs" role="tablist">
                      <li class="nav-item">
                          <a class="nav-link active show" href="#recaptcha">Recaptcha</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" href="#paypal">PayPal</a>
                      </li>
                  </ul>
                  <div class="block-content tab-content">
                      <div class="tab-pane active show" id="recaptcha" role="tabpanel">
                          <div class="form-group col-12">
                              <label>Site Key</label>
                              <input type="text" class="form-control" name="recaptchaSiteKey" placeholder="{{ env('RECAPTCHA_PUBLIC_KEY') }}" value="{{ old('recaptchaSiteKey', env('RECAPTCHA_PUBLIC_KEY')) }}">
                              <div class="form-text text-muted small">
                                The site key.
                              </div>
                          </div>


                          <div class="form-group col-12">
                              <label>Secret Key</label>
                              <div class="input-group">
                                <input type="password" class="form-control" id="recaptchaSecretKey" name="recaptchaSecretKey" placeholder="{{ env('RECAPTCHA_PRIVATE_KEY') }}" value="{{ old('recaptchaSecretKey', env('RECAPTCHA_PRIVATE_KEY')) }}">
                                  <div class="input-group-append">
                                    <span class="btn btn-secondary toggle-password fas fa-eye" toggle="recaptchaSecretKey"></span>
                                  </div>
                              </div>
                              <div class="form-text text-muted small">
                              The secret key.
                              </div>
                          </div>
                      </div>

                      <div class="tab-pane" id="paypal" role="tabpanel">
                        <div class="form-group col-12">
                            <label>Client ID</label>
                            <input type="text" class="form-control" name="paypalClientID" placeholder="{{ env('PAYPAL_CLIENT_ID') }}" value="{{ old('paypalClientID', env('PAYPAL_CLIENT_ID')) }}">
                            <div class="form-text text-muted small">
                              The client ID.
                            </div>
                        </div>


                        <div class="form-group col-12">
                            <label>Secret Key</label>
                            <div class="input-group">
                              <input type="password" class="form-control" id="paypalSecretKey" name="paypalSecretKey" placeholder="{{ env('PAYPAL_SECRET') }}" value="{{ old('paypalSecretKey', env('PAYPAL_SECRET')) }}">
                                <div class="input-group-append">
                                  <span class="btn btn-secondary toggle-password fas fa-eye" toggle="paypalSecretKey"></span>
                                </div>
                            </div>
                            <div class="form-text text-muted small">
                            The secret key.
                            </div>
                        </div>

                        <div class="form-group col-12">
                            <label>Paypal Mode</label> <br />
                            <label class="css-control css-control-primary css-radio">
                                <input type="radio" class="css-control-input" name="paypalMode" value="live" {{ (env('PAYPAL_MODE') == 'live') ? 'checked=""' : '' }}>
                                <span class="css-control-indicator"></span> Live
                            </label>

                            <label class="css-control css-control-primary css-radio">
                                <input type="radio" class="css-control-input" name="paypalMode" value="sandbox" {{ (env('PAYPAL_MODE') == 'sandbox') ? 'checked=""' : '' }}>
                                <span class="css-control-indicator"></span> Sandbox
                            </label>
                            <div class="form-text text-muted small">
                              <strong>Live</strong> = production | <strong>Sandbox</strong> = development
                            </div>
                        </div>

                          </div>
                      </div>
                  </div>
            </div>
            <div class="col-12 text-center">
              <input type="submit" class="btn btn-primary mb-10" value="Save settings" onclick="saveSettings()"/>
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
    text: "Saving will overwrite the current settings.",
    type: 'warning',
showCancelButton: true,
confirmButtonColor: '#26de81#fc5c65',
cancelButtonColor: '#fc5c65',
confirmButtonText: 'Save it!'
}).then((result) => {
if (result.value) {
  $.ajax(
  {
      url: "core/save",
      type: 'POST',
      dataType: "JSON",
      data: {
          "appName": $("input[name='appName']").val(),
          "appUrl": $("input[name='appUrl']").val(),
          "realmlist": $("input[name='realmlist']").val(),
          "metaDescription": $("input[name='metaDescription']").val(),
          "metaKeywords": $("input[name='metaKeywords']").val(),
          "appDebugging": $("input[name='appDebugging']:checked").val(),
          "siteMaintenance": $("input[name='siteMaintenance']:checked").val(),
          "authMaintenance": $("input[name='authMaintenance']:checked").val(),
          "errorLogging": $("input[name='siteMaintenance']:checked").val(),

          "recaptchaSiteKey": $("input[name='recaptchaSiteKey']").val(),
          "recaptchaSecretKey": $("input[name='recaptchaSecretKey']").val(),

          "paypalClientID": $("input[name='paypalClientID']").val(),
          "paypalSecretKey": $("input[name='paypalSecretKey']").val(),
          "paypalMode": $("input[name='paypalMode']:checked").val(),

          "authHost": $("input[name='authHost']").val(),
          "authDatabase": $("input[name='authDatabase']").val(),
          "authUsername": $("input[name='authUsername']").val(),
          "authPassword": $("input[name='authPassword']").val(),

          "charactersHost": $("input[name='charactersHost']").val(),
          "charactersDatabase": $("input[name='charactersDatabase']").val(),
          "charactersUsername": $("input[name='charactersUsername']").val(),
          "charactersPassword": $("input[name='charactersPassword']").val(),

          "worldHost": $("input[name='worldHost']").val(),
          "worldDatabase": $("input[name='worldDatabase']").val(),
          "worldUsername": $("input[name='worldUsername']").val(),
          "worldPassword": $("input[name='worldPassword']").val(),

          "websiteHost": $("input[name='websiteHost']").val(),
          "websiteDatabase": $("input[name='websiteDatabase']").val(),
          "websiteUsername": $("input[name='websiteUsername']").val(),
          "websitePassword": $("input[name='websitePassword']").val(),

          "_token": "{{ csrf_token() }}",
      },
      success: function (response)
      {
          //console.log(response); // see the reponse sent
          swal({
            title: "Settings were saved!",
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
         text: "Settings were not saved. Try again!",
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
