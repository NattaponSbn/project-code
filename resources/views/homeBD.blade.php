@extends('layouts.mainhomeBD')

@section('content')
        <!-- app.css -->
        <div class="rowcolumn">
            <div class="col-md-12">
                <div class="tile1">
                    <div class="tile-body">
                    <div class="texthe1">มาใหม่</div>
                    <button class="btnsum"><a href="Newarrival">ดูทั้งหมด</a></button>
                    <div class="table-responsive ">
                        @foreach($datas as $datauser) 
                            <a href="http://"><div class="column column1 column2 column3" ><div class="columnimg"><img src="img/fromimg.png" alt="" class="fromimg"></div></a>
                                <center><a href="http://"><div class="textimg">{{$datauser->name}}</div></a></center>
                                <center><a href="http://"><div class="textimg2">{{$datauser->gender}}</div></a></center>
                            </div>
                        @endforeach
                            <!-- <a href="http://"><div class="column1"><div class="columnimg"><img src="img/fromimg.png" alt="" class="fromimg"></div></a>
                                <center><a href="http://"><div class="textimg">เรื่อง</div></a></center>
                                <center><a href="http://"><div class="textimg2">ประเภท</div></a></center>
                            </div>
                        
                            <a href="http://"><div class="column2"><div class="columnimg"><img src="img/fromimg.png" alt="" class="fromimg"></div></a>
                                <center><a href="http://"><div class="textimg">เรื่อง</div></a></center>
                                <center><a href="http://"><div class="textimg2">ประเภท</div></a></center>
                            </div>
                            <a href="http://"><div class="column3"><div class="columnimg"><img src="img/fromimg.png" alt="" class="fromimg"></div></a>
                                <center><a href="http://"><div class="textimg">เรื่อง</div></a></center>
                                <center><a href="http://"><div class="textimg2">ประเภท</div></a></center>
                            </div> -->
                           
                        </div>
                    </div>
                </div>
            </div
        ></div>
   

        <div class="rowcolumn">
            <div class="col-md-12">
                <div class="tile2">
                    <div class="tile-body">
                    <div class="texthe1">ยอดนิยม</div>
                    <button class="btnsum"><a href="Popular">ดูทั้งหมด</a> </button>
                        <div class="table-responsive">
                            <a href="http://"><div class="column" ><div class="columnimg"><img src="img/fromimg.png" alt="" class="fromimg"></div></a>
                                <center><a href="http://"><div class="textimg">เรื่อง</div></a></center>
                                <center><a href="http://"><div class="textimg2">ประเภท</div></a></center>
                            </div>
                            <a href="http://"><div class="column1"><div class="columnimg"><img src="img/fromimg.png" alt="" class="fromimg"></div></a>
                                <center><a href="http://"><div class="textimg">เรื่อง</div></a></center>
                                <center><a href="http://"><div class="textimg2">ประเภท</div></a></center>
                            </div>
                            <a href="http://"><div class="column2"><div class="columnimg"><img src="img/fromimg.png" alt="" class="fromimg"></div></a>
                                <center><a href="http://"><div class="textimg">เรื่อง</div></a></center>
                                <center><a href="http://"><div class="textimg2">ประเภท</div></a></center>
                            </div>
                            <a href="http://"><div class="column3"><div class="columnimg"><img src="img/fromimg.png" alt="" class="fromimg"></div></a>
                                <center><a href="http://"><div class="textimg">เรื่อง</div></a></center>
                                <center><a href="http://"><div class="textimg2">ประเภท</div></a></center>
                            </div>
                        </div>
                    </div>
                </div>
            </div
        ></div>

        
        <div class="rowcolumn">
            <div class="col-md-12">
                <div class="tile3">
                    <div class="tile-body">
                        <div class="texthe1">IOT</div>
                            <button class="btnsum">ดูทั้งหมด</button>
                                <div class="table-responsive">
                                    <a href="http://"><div class="column" ><div class="columnimg"><img src="img/fromimg.png" alt="" class="fromimg"></div></a>
                                        <center><a href="http://"><div class="textimg">เรื่อง</div></a></center>
                                        <center><a href="http://"><div class="textimg2">ประเภท</div></a></center>
                                    </div>  
                                    <a href="http://"><div class="column1"><div class="columnimg"><img src="img/fromimg.png" alt="" class="fromimg"></div></a>
                                        <center><a href="http://"><div class="textimg">เรื่อง</div></a></center>
                                        <center><a href="http://"><div class="textimg2">ประเภท</div></a></center>
                                    </div>  
                                    <a href="http://"><div class="column2"><div class="columnimg"><img src="img/fromimg.png" alt="" class="fromimg"></div></a>
                                        <center><a href="http://"><div class="textimg">เรื่อง</div></a></center>
                                        <center><a href="http://"><div class="textimg2">ประเภท</div></a></center>
                                    </div>  
                                    <a href="http://"><div class="column3"><div class="columnimg"><img src="img/fromimg.png" alt="" class="fromimg"></div></a>
                                        <center><a href="http://"><div class="textimg">เรื่อง</div></a></center>
                                        <center><a href="http://"><div class="textimg2">ประเภท</div></a></center>
                                </div> 
                               
                        </div>
                    </div>
                   
                </div>
            </div
        ></div>
@stop
        
