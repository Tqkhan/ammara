<!-- /.Navbar  Static Side -->
<div class="control-sidebar-bg"></div>
<!-- Page Content -->
<div id="page-wrapper">
    <!-- main content -->
    <div class="content">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="header-icon">
                <i class="pe-7s-note2"></i>
            </div>
            <div class="header-title">
                <h1>Add Orders</h1>
                <small></small>
                <ol class="breadcrumb">
                    <li><a href="<?php echo base_url() ?>"><i class="pe-7s-home"></i> Home</a></li>
                    <li class="active">Add Orders</li>
                </ol>
            </div>
        </div>
        <!-- /. Content Header (Page header) -->

        <form method="post" action="<?php echo base_url() ?>orders/insert" enctype="multipart/form-data">

            <div class="row">
                <div class="col-sm-12">
                    <div class="panel panel-bd ">
                        <div class="panel-heading">
                            <div class="panel-title">
                                <h4>Add Orders</h4>
                            </div>
                        </div>
                        <div class="panel-body">
                            <div class="form-group row">
                                <div class="form-group col-lg-6">
                                    <label for="example-text-input" class="col-sm-3 col-form-label">Date<span style="color: red;">*</span></label>
                                    <div class="col-sm-9">
                                        <input class="form-control" name="Date" type="date" value="" id="example-text-input" placeholder="" required="">
                                    </div>
                                </div>
                                <div class="form-group col-lg-6">
                                    <label for="example-text-input" class="col-sm-3 col-form-label">Name<span style="color: red;">*</span></label>
                                    <div class="col-sm-9">
                                        <input class="form-control" name="Name" type="text" value="" id="example-text-input" placeholder="" required="">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="form-group col-lg-6">
                                    <label for="example-text-input" class="col-sm-3 col-form-label">Designation</label>
                                    <div class="col-sm-9">
                                        <input class="form-control" name="Designation" type="text" value="" id="example-text-input" placeholder="">
                                    </div>
                                </div>
                                <div class="form-group col-lg-6">
                                    <label for="example-text-input" class="col-sm-3 col-form-label">Quantity<span style="color: red;">*</span></label>
                                    <div class="col-sm-9">
                                        <input class="form-control" name="quantity" type="text" value="" id="example-text-input" placeholder="" required="">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="form-group col-lg-6">
                                    <label for="example-text-input" class="col-sm-3 col-form-label">Attach File</label>
                                    <div class="col-sm-9">
                                        <input class="form-control" name="Attach_File" type="file" value="" id="example-text-input" placeholder="">
                                    </div>
                                </div>
                                <div class="form-group col-lg-6">
                                    <label for="example-text-input" class="col-sm-3 col-form-label">Order Type<span style="color: red;">*</span></label>
                                    <div class="col-sm-9">
                                        
                                        <select class="form-control" id="exampleSelect1" name="Order_Type" required="">
                                            <option value="">Please Select</option>
                                            <option value="New">New</option>
                                            <option value="Repeat">Repeat</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="form-group col-lg-10">
                                    <label for="example-text-input" class="col-sm-3 col-form-label">Remarks</label>
                                    <div class="col-sm-9">
                                        <textarea class="form-control" name="Remarks" type="textarea" value="" id="example-text-input" placeholder="" style="margin: 0px 2.5px 0px -79px; width: 789px;"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">

                                <div class="col-sm-12">
                                    <button type="submit" class="btn btn-primary pull-right">Add</button>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>

<!-- START CORE PLUGINS -->