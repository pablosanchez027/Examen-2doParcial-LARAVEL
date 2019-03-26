<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PalindromeController extends Controller
{
    public function PalindromeCheck($string) {
      if ($string == strrev($string))
          return 1;
      else
          return 0;
    }
}
