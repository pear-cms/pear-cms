<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <link rel="shortcut icon" href="{{ asset('themes/default/images/logo/favicon.ico') }}" type="image/x-icon" />
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="{{ env('META_DESCRIPTION') }}">
        <meta name="keywords" content="{{ env('META_KEYWORDS') }}">

        <title>{{ env('APP_NAME') }} @if ( isset ($title ) ) | {{ $title }} @endif</title>

        <!-- Google fonts -->
        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=PT+Sans" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=PT+Sans+Caption" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">
        <link href="{{ asset('themes/default/css/bootstrap.min.css') }}" rel="stylesheet">
        @yield('customcss')
        <link href="{{ asset('themes/default/css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('themes/default/css/buttons.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
        <script src="{{ asset('themes/default/js/jquery.min.js') }}"></script>
    </head>
    <body>
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="{{ url('/') }}">
          <img alt="logo" src="{{ asset('themes/default/images/logo/logo_64.png') }}" width="32" height="32" />
        </a>
        <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span> </span>
                    <span> </span>
                    <span> </span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item">
              <a class="nav-link" href="{{ url('/') }}">
                {{ __('translation.menu_home') }}
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">
                {{ __('translation.menu_features') }}
              </a>
            </li>
            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              {{ __('translation.menu_news') }} <span class="navbar-arrow"></span>
            </a>
            <div class="dropdown-menu fluid" aria-labelledby="navbarDropdownMenuLink">
              <p>
                {{ __('translation.menu_news_description') }}
              </p>
              <a class="dropdown-item" href="{{url('/news')}}">
                {{ __('translation.menu_view_all_news') }}
              </a>
            </div>
          </li>
          <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            {{ __('translation.menu_game') }} <span class="navbar-arrow"></span>
          </a>
          <div class="dropdown-menu fluid" aria-labelledby="navbarDropdownMenuLink2">
            <p>
              {{ __('translation.menu_game_description') }}
            </p>
            <a class="dropdown-item" href="{{url('/status')}}">
              {{ __('translation.menu_game_status') }}
            </a>
          </div>
        </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('/connection-guide') }}">
                {{ __('translation.menu_connection_guide') }}
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" href="#">
                {{ __('translation.menu_shop') }}
              </a>
            </li>
          </ul>
          <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              {{ __('translation.menu_language') }} <span class="navbar-arrow"></span>
            </a>
            <div class="dropdown-menu fluid" aria-labelledby="navbarDropdownMenuLink2">
              <p>
                {{ __('translation.menu_language_description') }}
              </p>
              @foreach (Config::get('languages') as $lang => $language)
                @if ($lang != App::getLocale())
                        <a class="dropdown-item" href="{{ route('lang.switch', $lang) }}">
                          {{ $language }}
                        </a>
                @endif
            @endforeach
            </div>
          </li>
            @if(isset(Auth::user()->id))
            <li class="nav-item red dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <div class="avatar-box">
                <div class="avatar"></div>
              </div>
                {{ Auth::user()->username }} <span class="navbar-arrow"></span>
            </a>
            <div class="dropdown-menu fluid" aria-labelledby="navbarDropdownMenuLink3">
              <p>
                {{ __('translation.menu_user_actions') }}
                <span class="float-right">
                  <span class="mr-10">
                  <img alt="silvercoins" src="{{ asset('images/icons/silvercoin.png') }}" /> {{ Auth::user()->silvercoins }}
                </span>
                  <img alt="goldcoins" src="{{ asset('images/icons/goldcoin.png') }}" /> {{ Auth::user()->goldcoins }}
                </span>
              </p>
              <a class="dropdown-item" href="{{ url('/acp') }}">
                {{ __('translation.account_panel') }}
              </a>
              @if (Helpers::checkIfGM())
              <a class="dropdown-item" href="{{ url('/gm') }}">
                {{ __('translation.gm_panel') }}
              </a>
              @endif
              <a class="dropdown-item" href="{{ url('/donate') }}">
                {{ __('translation.donate_to') }} {{ env('APP_NAME') }}
              </a>
              <a class="dropdown-item" href="{{ url('/logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                {{ __('translation.menu_log_out') }}
              </a>
            </div>
          </li>
          @else
          <li class="nav-item red mr-5">
            <a class="nav-link" href="{{ url('/login') }}">
              {{ __('translation.menu_log_in') }}
            </a>
          </li>
          <li class="nav-item red">
            <a class="nav-link" href="{{ url('/register') }}">
              {{ __('translation.menu_register') }}
            </a>
          </li>
          @endif
          </ul>
        </div>
      </nav>


      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
          {{ csrf_field() }}
      </form>
