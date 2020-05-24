<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use App\Datalist;
use App\Http\Controllers;

class ListdataController extends Controller
{
    //
    public function Datalist() {
        $data = Datalist::all();
        return view('datauser', ['data'=>$data]);
    }

    public function Data() {
        $datas = Datalist::all();
        return view('homeBD', ['datas'=>$datas]);
    }

    public function Newarrivaldata() {
        $datas = Datalist::all();
        return view('pagewedsum.Newarrival', ['datas'=>$datas]);
    }

    public function destroy($id) {
        DB::delete('DELETE FROM users WHERE id=?',[$id]);
        return redirect('dataview')->with('success', 'ลบข้อมูลเรียบร้อย'); 
    }
    
    

    
}

