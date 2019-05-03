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
							<h1>Left Over Inventory</h1>
							<small> </small>
							<ol class="breadcrumb">
								<li><a href="<?php echo base_url() ?>"><i class="pe-7s-home"></i> Home</a></li>

								<li class="active">Left Over Inventory</li>
							</ol>
						</div>
					</div> <!-- /. Content Header (Page header) -->

					<div class="row">
						<div class="col-sm-12">
							<div class="panel panel-bd">
								<div class="panel-heading">
									<div class="panel-title">
										<h4>Left Over Inventory</h4>
									</div>
								</div>
								<div class="panel-body">
									
									<div class="table-responsive">
										<table id="dataTableExample2" class="table table-bordered table-striped table-hover">
											<thead>
												<tr>
													<th>Wo Id</th>
													<th>Flow</th>
													<th>Product Name</th>
													<th>Quantity</th>
													<th>Action</th>
												</tr>
											</thead>
										    <tbody>
										    	<?php
										    		foreach ($detail as $o) {
										    	?>
										    	<tr>
										    		<td><?php echo $o['wo_id'] ?></td>
										    		<td><?php echo $o['Name'] ?></td>
										    		<td><?php echo $o['Product_Name'] ?></td>
										    		<td><?php echo $o['qty'] ?></td>
										    		<td><?php if ($o['return_status'] == 0) {
										    			?>
										    			<a href="<?php echo base_url() ?>over_inventory/add_to_product_qty/<?php echo $o['id'] ?>/<?php echo $o['qty'] ?>/<?php echo $o['rp_id'] ?>/<?php echo $o['req_id'] ?>"><button type="button" class="btn btn-primary">Add to Product qty</button></a>
										    			<?php
										    		}?></td>
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






