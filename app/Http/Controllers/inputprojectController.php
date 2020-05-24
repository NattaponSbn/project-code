<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Datalist;
use DB;

class inputprojectController extends Controller
{
    //
    function save(Request $req) {

        print_r($req->input());
        // $add_p = new Datalist;
        // $add_p->name_p = $req->nproject;
        // $add_p->d_project = $req->dproject;
        // echo $add_p->save();
       
    }
}
