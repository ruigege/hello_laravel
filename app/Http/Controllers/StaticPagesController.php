<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticPagesController extends Controller
{
      public function home()
     {
         phpinfo();
     }

     public function help()
     {
         return '帮助页';
     }

     public function about()
     {
         return '关于页';
     }
}
