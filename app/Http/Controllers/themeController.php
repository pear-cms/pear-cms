<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Session;

class themeController extends Controller
{
      public function changeTheme($themeName)
    {
          if(Theme::exists($themeName))
          {
              Theme::set($themeName);
              session([
                'theme-name' => $themeName
              ]);
              return redirect()->back();
      }
    }
}
