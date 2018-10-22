@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">Ware House</div>
                <h3 align="center">Loan</h3>
                <div class="content-box-large">
                  <div class="card-body">		
                  <div class=col-md-10>
                    <h4>All Loan Details</h4>
                  </div>
                  <div class=col-md-2>
                      <a href="/loan/create" style="width: 35px" class=" btn btn-success btn-sm glyphicon glyphicon-plus"> </a>
                  </div>
        <div class="col-md-12">        
        <div class="table-responsive">                
            <table id="mytable" class="table table-bordred table-striped">                   
                <thead>                   
                  <th><input type="checkbox" id="checkall" /></th>
                  <th>Product Type</th>
                  <th>Product Name</th>
                  <th>Loan Amount</th>
                  <th>Loan Cost</th>                     
                  <th>Edit</th>                      
                  <th>Delete</th>
                </thead>
                <tbody>    
                  <tr>
                      <td><input type="checkbox" class="checkthis" /></td>
                      <td>Product Type 1</td>
                      <td>Product Name 1</td>
                      <td>100 Piece</td>
                      <td>56456</td>
                      <td><p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-pencil"></span></button></p></td>
                      <td><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button></p></td>
                  </tr>
    
                  <tr>
                      <td><input type="checkbox" class="checkthis" /></td>
                      <td>Product Type 2</td>
                      <td>Product Name 2</td>
                      <td>100 Meter</td>
                      <td>456456</td>
                      <td><p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-pencil"></span></button></p></td>
                      <td><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button></p></td>
                  </tr>
    
    
                  <tr>
                      <td><input type="checkbox" class="checkthis" /></td>
                      <td >Product Type 3</td>
                      <td >Product Name 3</td>
                      <td >10 Meter</td>
                      <td >4645</td>
                      <td><p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-pencil"></span></button></p></td>
                      <td><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button></p></td>
                  </tr>    
    
                  <tr>
                      <td><input type="checkbox" class="checkthis" /></td>
                      <td>Product Type 4</td>
                      <td>Product Name 4</td>
                      <td>60 KG</td>
                      <td>45645</td>
                      <td><p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-pencil"></span></button></p></td>
                      <td><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button></p></td>
                  </tr>
    
    
                  <tr>
                      <td><input type="checkbox" class="checkthis" /></td>
                      <td >Product Type 5</td>
                      <td >Product Name 5</td>
                      <td >20 KG</td>
                      <td >456446</td>
                      <td><p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-pencil"></span></button></p></td>
                      <td><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button></p></td>
                  </tr>    
                </tbody>        
          </table>

          <div class="clearfix"></div>
            <ul class="pagination pull-right">
              <li class="disabled"><a href="#"><span class="glyphicon glyphicon-chevron-left"></span></a></li>
              <li class="active"><a href="#">1</a></li>
              <li><a href="#">2</a></li>
              <li><a href="#">3</a></li>
              <li><a href="#">4</a></li>
              <li><a href="#">5</a></li>
              <li><a href="#"><span class="glyphicon glyphicon-chevron-right"></span></a></li>
            </ul>                
          </div>            
        </div>

        <div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h4 align="left" class="modal-title custom_align" id="Heading">Edit Loan Detail</h4>
                  <button type="button" class="close" data-dismiss="modal" id="edit_data" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
                  
              </div>
              <div class="modal-body">
                <div class="form-group">
                 <select style="height: 35px" class="form-control">
                        <option>Select Product type</option>
                      <option>Product 1</option>
                      <option>Product 2</option>
                      <option>Product 3</option>
                      <option>Product 4</option>
                      <option>Product 5</option>
                    </select>
                </div>
                <div class="form-group">        
                  <input type="text" class="form-control" id="inputPassword3" placeholder="Enter Product Name">
                </div>
                <div class="form-group">
                   <input type="text" class="form-control" id="inputPassword3" placeholder="Enter Product Loan Amount">        
                </div>
                <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                      <label class="form-check-label" for="inlineRadio1">KG</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                      <label class="form-check-label" for="inlineRadio2">Piece</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3">
                      <label class="form-check-label" for="inlineRadio3">Meter</label>
                    </div>
                   
                      <input type="number" class="form-control" id="inputPassword3" placeholder="Enter Loan Cost">
                    
              </div>
              <div class="modal-footer ">
                  <button type="button" class="btn btn-warning btn-lg" style="width: 100%;"><span class="glyphicon glyphicon-ok-sign"></span> Update</button>
              </div>
            </div>
    <!-- /.modal-content --> 
        </div>
      <!-- /.modal-dialog --> 
      </div>   
    
    <div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
             <h4 align="left" class="modal-title custom_align" id="Heading">Delete this entry</h4>
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
             
          </div>
          <div class="modal-body">       
            <div class="alert alert-danger">
              <span class="glyphicon glyphicon-warning-sign"></span> Are you sure you want to delete this Record?
            </div>       
          </div>
          <div class="modal-footer ">
              <button type="button" class="btn btn-success" ><span class="glyphicon glyphicon-ok-sign"></span> Yes</button>
              <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> No</button>
          </div>
        </div>
    <!-- /.modal-content --> 
      </div>
      <!-- /.modal-dialog --> 
    </div>
  </div>
</div>
</div>
</div>
</div>
</div>
<script type="text/javascript">
	$(document).ready(function(){
$("#mytable #checkall").click(function () {
        if ($("#mytable #checkall").is(':checked')) {
            $("#mytable input[type=checkbox]").each(function () {
                $(this).prop("checked", true);
            });

        } else {
            $("#mytable input[type=checkbox]").each(function () {
                $(this).prop("checked", false);
            });
        }
    });
    
    $("[data-toggle=tooltip]").tooltip();
});

  

</script>
@endsection
