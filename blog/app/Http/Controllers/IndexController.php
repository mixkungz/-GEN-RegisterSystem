<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

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
      $a = DB::table('registerers')->insert(
        [
          'first_name' => $req->firstName,
          'last_name' => $req->lastName,
          'std_id'=>$req->stdId,
          'tel'=>$req->tel,
          'faculty'=>$req->faculty,
          'created_at'=>new \DateTime(),
        ]);
        return view('index');
    }

    public function thanks() {
      return view('thanks');
    }
}
