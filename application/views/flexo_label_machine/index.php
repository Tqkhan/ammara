
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
                            <h1>View Work Order</h1>
                            <small> </small>
                            <ol class="breadcrumb">
                                <li><a href="<?php echo base_url() ?>"><i class="pe-7s-home"></i> Home</a></li>

                                <li class="active">View Work Order</li>
                            </ol>
                        </div>
                    </div> <!-- /. Content Header (Page header) -->

                    <div class="row">
                        <div class="col-sm-12">
                            <div class="panel panel-bd">
                                <div class="panel-heading">
                                    <div class="panel-title">
                                        <h4>View Work Order</h4>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    
                                    <div class="table-responsive">
                                        <table id="dataTableExample2" class="table table-bordered table-striped table-hover">
                                            <thead>
                                                <tr>
                                                    <th>Id</th>
                                                    <th>WO no</th>
                                                    <th>Job Description</th>
                                                    <th>Quantity</th>
                                                    <th>Start Date</th>
                                                    <th>End Date</th>
                                                    <th>Inventory Status</th>
                                                    <th>Status</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php


       // echo "<pre>";
       //  print_r($orders);
       //  die();
                                                    foreach ($orders as $o) {
                                                ?>
                                                <tr>
                                                    <td><?php echo $o['id'] ?></td>
                                                    <td><?php echo $o['WO_no'] ?></td>
                                                    <td><?php echo $o['Job_Description'] ?></td>
                                                    <td><?php echo $o['Quantity'] ?></td>
                                                    <td><?php echo $o['start_date'] ?></td>
                                                    <td><?php echo $o['end_date'] ?></td>
                                                    <td><?php echo $o['status'] ?></td>
                                                    <td>
                                                        <?php 
                                                            if ($o['con'] == 0) {
                                                                echo 'Pending';
                                                            }
                                                            else{
                                                                if ($o['submit'] == 0) {
                                                                    echo 'In Progress';
                                                                }
                                                                else{
                                                                    echo 'Complete';
                                                                }
                                                            }
                                                        ?>
                                                    </td>
                                                    <td>
                                                        <?php
                                                            if ($o['submit'] != 0 || $o['submit'] != '') {
                                                                $url = (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
                                                        ?>
                                                        <a href="<?php echo base_url() ?>requisition/order/<?php echo $o["WO_no"] ?>/flexo_label_machine?redirect=<?php echo $url ?>"><img src="<?php echo base_url() ?>assets/icons/create-order.png" title="Order" alt="Order" width="25" height="25"></a>

                                                        <a href="<?php echo base_url() ?>requisition/view_order/<?php echo $o["WO_no"] ?>/flexo_label_machine" target="_blank"><img src="<?php echo base_url() ?>assets/icons/view_order.png" title="View Order" alt="View Order" width="25" height="25"></a>
                                                        <?php } ?>
                                                        <a target="_blank" href="<?php echo base_url() ?>all_orders/view_plane/<?php echo $o["WO_no"] ?>"><img src="<?php echo base_url() ?>assets/icons/view_plan.png" title="View Plan" alt="View Plan" width="25" height="25"></a>
                                                        <?php 
                                                            if ($o['con'] == 0) {
                                                        ?>
                                                        <a href="<?php echo base_url('machine_flow/flexo_label_machine_start/'.$o['id'].'/'.$o['flow_id']) ?>"><img src="<?php echo base_url() ?>assets/icons/start_process.png" title="Start" alt="Start" width="25" height="25"></a>
                                                        <?php 
                                                            }
                                                            else{
                                                        ?>
                                                        <a href="<?php echo base_url() ?>flexo_label_machine/view_machine/<?php echo $o["id"] ?>/<?php echo $o['flow_id'] ?>"><img src="<?php echo base_url() ?>assets/icons/view_detail.png" title="View Detail" alt="View Detail" width="25" height="25"></a>
                                                        <!-- <?php
                                                                if ($o['submit'] == 0) {
                                                        ?>
                                                        <a href="<?php echo base_url('machine_flow/flexo_label_machine_complete/'.$o['id'].'/'.$o['flow_id']) ?>"><img src="<?php echo base_url() ?>assets/icons/complete.png" title="Complete" alt="Complete" width="25" height="25"></a>
                                                        <?php 
                                                            }
                                                            else{
                                                                if ($o['flow_id'] == $o['last'] && $o['batch'] < 1) {
                                                        ?>
                                                        <a target="_blank" href="<?php echo base_url('all_orders/batch_release/'.$o['WO_no'].'/'.$o['flow_id']) ?>"><img src="<?php echo base_url() ?>assets/icons/batch-release.png" title="Batch Release" alt="Batch Release" width="25" height="25"></a>
                                                        <?php } 
                                                                //echo '<img src="'.base_url().'assets/icons/complete_process.png" title="Completed" alt="Completed" width="25" height="25">';
                                                            }
                                                            }
                                                        ?> -->
                                                        <?php
                                                                if ($o['submit'] == 0) {
                                                                    if ($o['flow_id'] == $o['last'] && $o['batch'] < 1) {
                                                        ?>
                                                        <a href="<?php echo base_url('machine_flow/flexo_label_machine_complete/'.$o['id'].'/'.$o['flow_id'].'/'.$o['WO_no'].'/Yes') ?>"><img src="<?php echo base_url() ?>assets/icons/complete_process.png" title="Completed B_R" alt="Completed B_R" width="25" height="25"></a>
                                                        <?php }else{


                                                            ?>
                                                            <a href="<?php echo base_url('machine_flow/flexo_label_machine_complete/'.$o['id'].'/'.$o['flow_id'].'/'.$o['WO_no'].'/No') ?>"><img src="<?php echo base_url() ?>assets/icons/complete_process.png" title="Completed" alt="Completed" width="25" height="25"></a>

                                                            <?php
                                                        } ?>
                                                        <?php 
                                                            }
                                                            else{
                                                                if ($o['flow_id'] == $o['last'] && $o['batch'] < 1) {
                                                        ?>
                                                        
                                                        <?php } }?>
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
                </div> <!-- /.main content -->
            </div><!-- /#page-wrapper -->
        </div><!-- /#wrapper -->
        <!-- START CORE PLUGINS -->







