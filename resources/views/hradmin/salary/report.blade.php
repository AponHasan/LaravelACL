@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">H.R Admin</div>
                <div class="printb" align="Right" style="margin-right: 80px;">
    <input class="btn btn-warning btn-sm" type="button" style="font-weight: bold;" id="getMessage" name="GetMessage" value="Print" onclick="OpenAlert()"/>
</div>                
                <div class="content-box-large">
                  <div class="card-body">		
                      <img  src="{{URL::asset('salary.jpg')}}" style="width: 100%" >       
                  </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    function OpenAlert(){
        // document.getElementById("getMessage").style.visibility="hidden";
        // window.print();
        // location.reload();
    }
</script>
@endsection
