<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use App\Datauser;
use App\Datalist;
use App\User;
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

    function adduser(Request $request) {
        $userdata = new User;
        $userdata->name=$request->name;
        $userdata->gender=$request->gender;
        $userdata->province=$request->province;
        $userdata->email=$request->email;
        $userdata->username=$request->username;
        $userdata->password=$request->password;
        $userdata->save();
        return redirect('dataview')->with('success', 'เพิ่มข้อมูลเรียบร้อย');

        // print_r($request->input());
    }

    public function destroy($id) {
        DB::delete('DELETE FROM users WHERE id=?',[$id]);
        return redirect('dataview')->with('success', 'ลบข้อมูลเรียบร้อย'); 
    }
    
    
    public function update(Request $request, $id) {
        // $user_name = $request->input('username');
        // $user_email = $request->input('email');
        // DB::update('UPDATE users SET username = ?, email = ? WHERE id = ?'
        // , [$user_name, $user_email, $id]);

        // return redirect('dataview')->with('success', 'อัพเดทเรียบร้อย');
        // return redirect('dataview')->with('success', 'ข้อมูลเรียบร้อย'); 
        // $update_d = Datalist::find($id);
        
        // $this->validate($request,
        // ['name' => 'required',
        // 'gender' => 'required',
        // 'province' => 'required',
        // 'email' => 'required',
        // 'username' => 'required']);

        
        // $edit_d->name = $request->name; 
        // $edit_d->gender = $request->gender;
        // $edit_d->province = $request->province;  
        // $edit_d->username = $request->username;  
        // $edit_d->save(); 
        // return redirect('dataview')->with('success', 'อัพเดทเรียบร้อย'); 

        // DB::update('UPDATE FROM users WHERE id=?',[$id]);
        // return redirect()->route('datauser')->with('success', 'อัพเดทเรียบร้อย');


    }

    
}

