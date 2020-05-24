@extends('layouts.mainhomeBD')
        

        <main class="app-content">
            <div class="app-title">
                <div>
                <h1><i class="fa fa-th-list"></i> Data User</h1>
               
                </div>
                <ul class="app-breadcrumb breadcrumb side">
                <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
                <li class="breadcrumb-item">Tables</li>
                <li class="breadcrumb-item active"><a href="#">Data Table</a></li>
                
                </ul>
            </div>
            <!-- เเสดงเเจ้งเตือนว่าข้อมูลถูกลบเรียบร้อยเเล้ว -->
            <div align="right"><a href="http://" class="btn btn-success">เพิ่มข้อมูล</a></div>
            @if(\Session::has('success')) 
            <div class="alert alert-success"> 
            <p>{{ \Session::get('success') }}</p> 
            </div> 
            @endif 

            <div class="row">
                <div class="col-md-12">
                <div class="tile">
                    <div class="tile-body">
                    <div class="table-responsive">
                    
                        <table class="table table-hover table-bordered" id="sampleTable">
                        <thead>
                            <tr>
                                <th>ลำดับที่</th>
                                <th>ชื่อนามสุกล</th>
                                <th>เพศ</th>
                                <th>จังหวัด</th>
                                <th>อีเมล</th>
                                <th>ชื่อผู้ใช้</th>
                                <th>รหัสผ่าน</th>
                                <th>วันเดือนปี</th>
                                <th>สถานะ</th>
                                <th>จัดการ</th>
                            </tr>
                        </thead>
                        <tbody>
                             @foreach($data as $datauser)
                            <tr>
                                <td>{{$datauser->id}}</td>
                                <td>{{$datauser->name}}</td>
                                <td>{{$datauser->gender}}</td>
                                <td>{{$datauser->province}}</td>
                                <td>{{$datauser->email}}</td>
                                <td>{{$datauser->username}}</td>
                                <td>{{$datauser->password}}</td>
                                <td>{{$datauser->created_at}}</td>
                                <td>1</td>
                                <td>
                                    <a href="http://"><button type="submit"><img src="img/edit.png" alt="" class="imgdata"></button></a>
                                    
                                    <a onClick="return confirm('คุณต้องการลบข้มูลใช่หรือไม่?')" href="delete/{{ $datauser->id }}"><button type="submit"><img  src="img/trash.png" alt="" class="imgdata"></button></a>

                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</main>

