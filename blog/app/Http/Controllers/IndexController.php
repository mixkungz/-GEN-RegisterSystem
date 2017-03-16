<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return Response
     */
    public function regis(){
      return view('index');
    }

    public function postRegis(Request $req) {
      dd($req);
    }
}
