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
							<h1>View Lab</h1>
							<small> </small>
							<ol class="breadcrumb">
								<li><a href="<?php echo base_url() ?>"><i class="pe-7s-home"></i> Home</a></li>

								<li class="active">View Lab</li>
							</ol>
						</div>
					</div> <!-- /. Content Header (Page header) -->

					<div class="row">
						<div class="col-sm-12">
							<div class="panel panel-bd">
								<div class="panel-heading">
									<div class="panel-title">
										<h4>View Lab</h4>
										<?php 
											if ($permission["created"] == "1") {
										?>
										<a href="<?php echo base_url("lab/create") ?>"><button class="btn btn-info pull-right">Add Lab</button></a>
										<?php } ?>
									</div>
								</div>
								<div class="panel-body">
									
									<div class="table-responsive">
										<table id="dataTableExample2" class="table table-bordered table-striped table-hover">
											<thead>
												<tr>
													<th>Id</th><th>St number</th><th>Date</th><th>Client</th><th>Customer ref</th><th>Count</th><th>Qty</th><th>Type</th><th>Special instruction</th><?php 
														if ($permission["edit"] == "1" || $permission["deleted"] == "1"){
													?>
													<th>Action</th>
													<?php } ?>
												</tr>
											</thead>
										    <tbody>
										    	<?php
										    		foreach ($lab as $module) {
										    	?>
												<tr>
													<td><?php echo $module["id"] ?></td><td><?php echo $module["st_number"] ?></td><td><?php echo $module["date"] ?></td><td><?php echo $module["client"] ?></td><td><?php echo $module["customer_ref"] ?></td><td><?php echo $module["count"] ?></td><td><?php echo $module["qty"] ?></td><td><?php echo $module["type"] ?></td><td><?php echo $module["special_instruction"] ?></td><?php 
														if ($permission["edit"] == "1" || $permission["deleted"] == "1"){
													?>
													<td>
														<?php 
															if ($permission["edit"] == "1") {
														?>
														<a href="<?php echo base_url() ?>lab/edit/<?php echo $module["id"] ?>"><img src="<?php echo base_url() ?>assets/record1.png" title="View Order" alt="View Order" width="35" height="35"></a>
														<?php } ?>
														<?php 
															if ($permission["deleted"] == "1") {
														?>
		                                                <a href="<?php echo base_url() ?>lab/delete/<?php echo $module["id"] ?>"><img src="<?php echo base_url() ?>assets/d-icon.png" title="Delete" alt="Delete" width="35" height="35"></a>
		                                                <a href="<?php echo base_url() ?>lab/lab_costing/<?php echo $module["id"] ?>"><img src="<?php echo base_url() ?>assets/report.png" title="Lab Costing" alt="Lab Costing" width="35" height="35"></a>
		                                                <a href="<?php echo base_url() ?>lab/lab_costing_view/<?php echo $module["id"] ?>"><img src="<?php echo base_url() ?>assets/view_report.png" title="Lab Costing View" alt="Lab Costing View" width="35" height="35"></a>
		                                                <?php } ?>
	                                                </td>
	                                                <?php } ?>
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
	
</div>





