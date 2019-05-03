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
                <h1>View Product Ledger</h1>
                <small> </small>
                <ol class="breadcrumb">
                    <li><a href="<?php echo base_url() ?>"><i class="pe-7s-home"></i> Home</a></li>

                    <li class="active">View Product Ledger</li>
                </ol>
            </div>
        </div>
        <!-- /. Content Header (Page header) -->

        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-bd">
                    <div class="panel-heading">
                        <div class="panel-title">
                            <h4>View Product Ledger</h4>
                        </div>
                    </div>
                    <div class="panel-body">

                        <div class="table-responsive">
                            <table id="dataTableExample2" class="table table-bordered table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th>Date</th>
                                        <th>Status</th>
                                        <th>Recived From</th>
                                        <th>Issued To</th>
                                        <th>Qty</th>
                                        <th>Balance</th>
                                       
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
							    		foreach ($product_ledger as $module) {
							    	?>
                                        <tr>
                                            <td>
                                                <?php echo $module["date"] ?>
                                            </td>
                                            <td>
                                                <?php if ($module["reference"] == "Debit") {
                                                    echo "Recived";
                                                }elseif ($module["reference"] == "Credit") {
                                                    echo "Send";
                                                } ?>
                                            </td>
                                            <td>
                                                <?php echo $module["Name"] ?>
                                                <?php echo $module["req_wo_id"] ?>
                                                <?php echo $module["type"] ?>

                                            </td>
                                            <td>
                                                <?php echo $module["item_desc"] ?>
                                            </td>
                                           
                                            <td>
                                                <?php echo $module["qty"] ?>
                                            </td>
                                            <td>
                                                <?php echo $module["balance"] ?>
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