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
                <h1>View Product release</h1>
                <small> </small>
                <ol class="breadcrumb">
                    <li><a href="<?php echo base_url() ?>"><i class="pe-7s-home"></i> Home</a></li>

                    <li class="active">View Product release</li>
                </ol>
            </div>
        </div>
        <!-- /. Content Header (Page header) -->

        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-bd">
                    <div class="panel-heading">
                        <div class="panel-title">
                            <h4>View Product release</h4>
                        </div>
                    </div>
                    <div class="panel-body">

                        <div class="table-responsive">
                            <table id="dataTableExample3" class="table table-bordered table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Date</th>
                                        <th>Reference No</th>
                                        <th>Product Name</th>
                                        <th>Qty</th>
                                        <th>Received Qty</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
							    		foreach ($products as $module) {
							    	?>
                                        <tr>
                                            <td>
                                                <?php echo $module["id"] ?>
                                            </td>
                                            <td>
                                                <?php echo $module["Date"] ?>
                                            </td>
                                            <td>
                                                <?php echo $module["Reference_No"] ?>
                                            </td>
                                            <td>
                                                <?php echo $module["Product_Name"] ?>
                                            </td>
                                            <td>
                                                <?php echo $module["quantity"] ?>
                                            </td>
                                            <td>
                                                <?php echo $module["received_quantity"] ?>
                                            </td>
                                           
                                            
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
    </div>
    <!-- /.main content -->

</div>
<style type="text/css">
	ul.dropdown-menu {
    z-index:  999;
}
</style>
<form method="post" action="<?php echo base_url('product_release/received_order') ?>">
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
