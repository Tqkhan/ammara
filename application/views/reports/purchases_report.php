        <!-- /.Navbar  Static Side -->
            <div class="control-sidebar-bg"></div>
            <!-- Page Content -->
            <div id="page-wrapper">
                <!-- main content -->
                <div class="content">
                    <!-- Content Header (Page header) -->
                    <div class="content-header">
                        <div class="header-icon">
                            <i class="pe-7s-box1"></i>
                        </div>
                        <div class="header-title">
                            <h1>Purchases Report</h1>
                            <small> </small>
                            <ol class="breadcrumb">
                                <li><a href="<?php echo base_url() ?>"><i class="pe-7s-home"></i> Home</a></li>

                                <li class="active">Purchases Report</li>
                            </ol>
                        </div>
                    </div> <!-- /. Content Header (Page header) -->

                    <div class="row">
                        <div class="col-sm-12">
                            <div class="panel panel-bd">
                                <div class="panel-heading">
                                    <div class="panel-title">
                                        <h4>Purchases Report</h4>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <form action="<?php echo base_url()?>reports/purchases_report" method="POST" enctype="multipart/form-data" >
                                        <div class="form-group row">
                                            <div class="form-group col-lg-4">
                                               <label for="">Supplier</label>
                                                <select class="form-control" name="sup" required="">
                                                <option value="">Select Supplier</option>
                                                <?php 
                                                   foreach ($vednor as $ven) {
                                                       echo '<option value="'.$ven['id'].'">'.$ven['Name'].'</option>';
                                                   }
                                                   ?>
                                             </select>
                                            </div>
                                            <div class="form-group col-lg-4">
                                               <label for="">Product</label>
                                                <select class="form-control" name="product_id" required="">
                                                <option value="">Select Product</option>
                                                <?php 
                                                   foreach ($product as $pro) {
                                                       echo '<option value="'.$pro['id'].'">'.$pro['Product_Name'].'</option>';
                                                   }
                                                   ?>
                                             </select>
                                            </div>
                                            <div class="form-group col-lg-4">
                                               <label for="">Date</label>
                                                 <input class="form-control" type="text" id="date_range_input" name="daterange" value="<?php echo  date("m/d/Y");?> - <?php echo  date("m/d/Y", strtotime(' +2 day'));?>" />
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-lg-12">
                                                <button type="submit" class="btn btn-primary pull-right" name="" value="search">Search</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="panel-body">
                                    
                                    <div class="table-responsive">
                                        <table id="dataTableExample2" class="table table-bordered table-striped table-hover">
                                            <thead>
                                                <tr>
                                                    <th>Id</th>
                                                    <th>Reference_No</th>
                                                    <th>Supplier</th>
                                                    <th>Product Name</th>
                                                    <th>total_qty</th>
                                                    <th>received_quantity</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $con = 1;
                                                    foreach ($purchases_log as $module) {
                                                ?>
                                                <tr>
                                                    <td><?php echo $con++; ?></td>
                                                    <td><?php echo $module['Reference_No'] ?></td>
                                                    <td><?php echo $module['Name'] ?></td>
                                                    <td><?php echo $module['Product_Name'] ?></td>
                                                    <td><?php echo $module['total_qty'] ?></td>
                                                    <td><?php echo $module['received_quantity'] ?></td>
                                                </tr>
                                                <?php } ?>
                                            </tbody>
                                        </table>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div style="height: 450px;"></div>
                </div> <!-- /.main content -->
            </div><!-- /#page-wrapper -->
        </div><!-- /#wrapper -->
        <!-- START CORE PLUGINS -->

<style type="text/css">
    ul.dropdown-menu {
    z-index:  999;
}
</style>
<div id="myModal1" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">View Order Received</h4>
      </div>
      <div class="modal-body">
        <div class="row form-group">
            <label class="col-sm-12 col-form-label">Order Items</label>
            <div class="col-md-12">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover product-table1">
                        <thead>
                            <tr>
                                <th>Product Name</th>
                                <th>Quantity</th>
                                <th>Received Quantity</th>
                                <th>Product Unit</th>
                                <th>Remarks</th>
                            </tr>
                        </thead>
                        <tbody></tbody>
                    </table>
                </div>
            </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
<form method="post" action="<?php echo base_url('requisition/received_order') ?>">
    <input type="hidden" name="id" id="order_id">
    <div id="myModal" class="modal fade" role="dialog">
      <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Order Received</h4>
          </div>
          <div class="modal-body">
            <div class="row form-group">
                <label class="col-sm-12 col-form-label">Order Items</label>
                <div class="col-md-12">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped table-hover product-table">
                            <thead>
                                <tr>
                                    <th>Product Name</th>
                                    <th>Quantity</th>
                                    <th>Received Quantity</th>
                                    <th>Avalible Quantity</th>
                                    <th>Product Unit</th>
                                    <th>Remarks</th>
                                </tr>
                            </thead>
                            <tbody></tbody>
                        </table>
                    </div>
                </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-info">Submit</button>
          </div>
        </div>

      </div>
    </div>
</form>
<link href="<?php echo base_url('assets/assets/plugins/bootstrap3-editable-1.5.1/bootstrap3-editable/css/bootstrap-editable.css') ?>" rel="stylesheet" type="text/css"/>

<script type="text/javascript">
    function arrayLookup(searchValue,array,searchIndex,returnIndex) // Posted on Tathyika.com (also refer for more codes there)
{
  var returnVal = null;
  var i;
  for(i=0; i<array.length; i++)
  {
    if(array[i][searchIndex]==searchValue)
    {
      returnVal = array[i][returnIndex];
      break;
    }
  }
  
  return returnVal;
}
    function get_id(id) {
        $('#order_id').val(id)
        $.ajax({
            url: "<?php echo base_url() ?>requisition/get_order/"+id,
            type: 'GET',
            dataType: 'json', // added data type
            success: function(res) {
                //console.log(res)
                var tb  = $('.product-table tbody')
                tb.empty()
                for (var i = 0; i < res.length; i++) {
                    var data = res[i]
                    tb.append('<tr>')
                    tb.append('</tr>')
                    tb.find('tr').last().append('<td>'+data['Product_Name']+'</td>')
                    tb.find('tr').last().append('<td>'+data['quantity']+'</td>')
                    tb.find('tr').last().append('<td><input type="hidden" name="detail_id[]" value="'+data['r_id']+'"><input type="hidden" name="t_qty" value="'+data['t_qty']+'"><input type="hidden" class="product_id" name="product_id[]" value="'+data['product_id']+'"><input type="hidden" name="rec_qty[]" value="'+data['received_quantity']+'"><input type="hidden" class="wo_no" name="wo_no" value="'+data['wo_id']+'"><input type="number" class="form-control" name="received_quantity[]" value="0" required=""></td>')
                    tb.find('tr').last().append('<td>'+data['product_qty']+'</td>')
                    tb.find('tr').last().append('<td>'+data['Product_Unit']+'</td>')
                    tb.find('tr').last().append('<td><input type="text" class="form-control" name="remarks[]" value=""></td>')
                }
            }
        });
    }
</script>

<script type="text/javascript">
    function get_id_view(id) {
        $.ajax({
            url: "<?php echo base_url() ?>requisition/get_order/"+id,
            type: 'GET',
            dataType: 'json', // added data type
            success: function(res) {
                console.log(res)
                var tb  = $('.product-table1 tbody')
                tb.empty()
                for (var i = 0; i < res.length; i++) {
                    var data = res[i]
                    tb.append('<tr>')
                    tb.append('</tr>')
                    tb.find('tr').last().append('<td>'+data['Product_Name']+'</td>')
                    tb.find('tr').last().append('<td>'+data['quantity']+'</td>')
                    tb.find('tr').last().append('<td>'+data['received_quantity']+'</td>')
                    tb.find('tr').last().append('<td>'+data['Product_Unit']+'</td>')
                    tb.find('tr').last().append('<td>'+data['remarks']+'</td>')
                }
            }
        });
    }
</script>


