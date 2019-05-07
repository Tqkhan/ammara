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
                <h1>View store</h1>
                <small> </small>
                <ol class="breadcrumb">
                    <li><a href="<?php echo base_url() ?>"><i class="pe-7s-home"></i> Home</a></li>

                    <li class="active">View store</li>
                </ol>
            </div>
        </div>
        <!-- /. Content Header (Page header) -->

        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-bd">
                    <div class="panel-heading">
                        <div class="panel-title">
                            <h4>View store</h4>
                        </div>
                    </div>
                    <div class="panel-body">
                        <?php $query = $this->db->query("SELECT * FROM users where id = ".$this->session->userdata('user_id')."");
                                    $row = $query->row_array();
                                    $sup_id = $row['sub_stores_id'];
                        ?>
						<form method="post" action="<?php echo base_url('store_stock/view') ?>">
							<div class="col-md-12">
								<label>Stores</label>
								<select class="form-control" name="store" required="" <?php if ($sup_id == TRUE) { echo "disabled='true'"; }?>>
									<option>Select Store</option>
									<?php 
										foreach ($stores as $s) {
											?>
                                            <option value="<?php echo $s['id'];?>" <?php if ($sup_id == TRUE) {
                                                    if ($s['id'] == $sup_id) {
                                                       echo "Selected";
                                                    }
                                                }?>><?php echo $s['Name'];?></option>
                                            <?php
										}
									?>
								</select>
							</div>
							<div class="col-md-12">
								<br><button class="btn btn-info pull-right" type="submit">Submit</button>
							</div>
						</form>
                    </div>
                </div>
            </div>
        </div>
        <div style="height: 450px;"></div>
    </div>
    <!-- /.main content -->

</div>