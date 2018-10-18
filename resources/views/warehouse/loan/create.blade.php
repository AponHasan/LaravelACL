@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">Warehouse</div>
                	<h3 align="center">Loan</h3>
               		<div class="content-box-large">
			  				<div class="panel-heading">				           				          
					            <div class="panel-options">
					              <a href="#" data-rel="collapse"><i class="glyphicon glyphicon-refresh"></i></a>
					              <a href="#" data-rel="reload"><i class="glyphicon glyphicon-cog"></i></a>
					            </div>
					        </div>
			  				<div class="panel-body">
			  					<form class="form-horizontal" role="form">

								  <div class="form-group">
								    <label for="inputEmail3" class="col-sm-2 control-label">Product Type</label>
								    <div class="col-sm-8">
								      <select style="height: 35px" class="form-control">
								      	<option>Select Product type</option>
  										<option>Product 1</option>
  										<option>Product 2</option>
  										<option>Product 3</option>
  										<option>Product 4</option>
  										<option>Product 5</option>
										</select>
								    </div>
								  </div>
								  <div class="form-group">
								    <label for="inputPassword3" class="col-sm-2 control-label">Product name</label>
								    <div class="col-sm-8">
								      <input type="text" class="form-control" id="inputPassword3" placeholder="Enter Product Name">
								    </div>
								  </div>
								  <div class="form-group">
								    <label for="inputPassword3" class="col-sm-2 control-label">Loan Amount</label>
								    <div class="col-sm-5">
								      <input type="text" class="form-control" id="inputPassword3" placeholder="Enter Product Quantity">
								    </div>
								    <div class="col-sm-4">
								      <div class="form-check form-check-inline">
										  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
										  <label class="form-check-label" for="inlineRadio1">KG</label>
										</div>
										<div class="form-check form-check-inline">
										  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
										  <label class="form-check-label" for="inlineRadio2">Pitch</label>
										</div>
										<div class="form-check form-check-inline">
										  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3">
										  <label class="form-check-label" for="inlineRadio3">Metar</label>
										</div>
								    </div>
								  </div>
								  <div class="form-group">
								    <label for="inputPassword3" class="col-sm-2 control-label">Loan Cost</label>
								    <div class="col-sm-8">
								      <input type="number" class="form-control" id="inputPassword3" placeholder="Enter Product Price">
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
