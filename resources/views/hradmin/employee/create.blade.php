@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">H.R Admin</div>
                	<h3 align="center">Add New Employee</h3>
               		<div class="content-box-large">
			  				<div class="panel-heading">				           				          
					            <div class="panel-options">
					              <a href="/employee" class=" btn btn-warning btn-sm ">Employee List </a>
					            </div>
					        </div>
			  				<div class="panel-body">
			  					<form class="form-horizontal" role="form">								  
								  <div class="form-group">
								    <label for="inputPassword3" class="col-sm-2 control-label">Employee name</label>
								    <div class="col-sm-8">
								      <input type="text" class="form-control" id="inputPassword3" placeholder="Enter Employee Name">
								    </div>
								  </div>								  
								  <div class="form-group">
								    <label for="inputPassword3" class="col-sm-2 control-label">Address</label>
								    <div class="col-sm-8">
								      <input type="text" class="form-control" id="" placeholder="Enter Address Name">
								    </div>
								  </div>
								  <div class="form-group">
								    <label for="inputPassword3" class="col-sm-2 control-label">Phone</label>
								    <div class="col-sm-8">
								      <input type="text" class="form-control" id="" placeholder="Enter Phone Number">
								    </div>
								  </div>
								  <div class="form-group">
								    <label for="inputPassword3" class="col-sm-2 control-label">Gender</label>	
								    <div class="col-sm-4">
								      <div class="form-check form-check-inline">
										  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
										  <label class="form-check-label" for="inlineRadio1">Female</label>
										</div>
										<div class="form-check form-check-inline">
										  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
										  <label class="form-check-label" for="inlineRadio2">Male</label>
										</div>
										<div class="form-check form-check-inline">
										  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3">
										  <label class="form-check-label" for="">Others</label>
										</div>
								    </div>
								  </div>
								  <div class="form-group">
								    <label for="inputPassword3" class="col-sm-2 control-label">Email</label>
								    <div class="col-sm-8">
								      <input type="Email" class="form-control" id="" placeholder="Enter User Name">
								    </div>								    								 
								  </div>
								  <div class="form-group">
								    <label for="inputPassword3" class="col-sm-2 control-label">User Name</label>
								    <div class="col-sm-8">
								      <input type="text" class="form-control" id="" placeholder="Enter User Name">
								    </div>								    								 
								  </div>
								  <div class="form-group">
								    <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
								    <div class="col-sm-8">
								      <input type="password" class="form-control" id="" placeholder="Enter Password">
								    </div>								    								 
								  </div>
								  <div class="form-group">
								    <label for="inputPassword3" class="col-sm-2 control-label">Confirm Password</label>
								    <div class="col-sm-8">
								      <input type="password" class="form-control" id="" placeholder="Confirm Password">
								    </div>								    								 
								  </div>
								  <div class="form-group">
								    <label for="inputEmail3" class="col-sm-2 control-label">Employee Role</label>
								    <div class="col-sm-8">
								      <select style="height: 35px" class="form-control">
								      	<option>Select Role</option>
  										<option>Role 1</option>
  										<option>Role 2</option>
  										<option>Role 3</option>
  										<option>Role 4</option>
  										<option>Role 5</option>
										</select>
								    </div>
								  </div>						 
								  <div class="form-group">
								    <div class="col-sm-offset-2 col-sm-10">
								      <button style="    width: 120px" type="submit" class="btn btn-primary">Save</button>
								    </div>
								  </div>
								</form>
			  				</div>
			  			</div>
	  				</div>	  				
            </div>
            
            </div>
        </div>
    </div>
</div>

@endsection
