
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
                <h1>Edit Lab</h1>
                <small></small>
                <ol class="breadcrumb">
                    <li><a href="index.html"><i class="pe-7s-home"></i> Home</a></li>
                    <li class="active">Edit Lab</li>
                </ol>
            </div>
        </div>
        <!-- /. Content Header (Page header) -->

        <form method="post" action="<?php echo base_url() ?>lab/update" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?php echo $lab["id"] ?>">
            <div class="row">
                <div class="col-sm-12">
                    <div class="panel panel-bd ">
                        <div class="panel-heading">
                            <div class="panel-title">
                                <h4>Edit Lab</h4>
                            </div>
                        </div>
                        <div class="panel-body"><div class="form-group row">

                                <label for="example-text-input" class="col-sm-3 col-form-label">St number</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" name="st_number" type="text" value="<?php echo $lab["st_number"] ?>" id="example-text-input" placeholder="" >
                                        </div>

                                    </div><div class="form-group row">

                                <label for="example-text-input" class="col-sm-3 col-form-label">Date</label>
                                        <div class="col-sm-9">

                                        <input class="form-control" name="date" type="date" value="<?php echo $lab["date"] ?>" id="example-text-input" placeholder="" ></div>

                                    </div><div class="form-group row">

                                <label for="example-text-input" class="col-sm-3 col-form-label">Client</label>
                                        <div class="col-sm-9">

                                        <input class="form-control" name="client" type="text" value="<?php echo $lab["client"] ?>" id="example-text-input" placeholder="" ></div>

                                    </div><div class="form-group row">

                                <label for="example-text-input" class="col-sm-3 col-form-label">Customer ref</label>
                                        <div class="col-sm-9">

                                        <input class="form-control" name="customer_ref" type="text" value="<?php echo $lab["customer_ref"] ?>" id="example-text-input" placeholder="" ></div>

                                    </div><div class="form-group row">

                                <label for="example-text-input" class="col-sm-3 col-form-label">Count</label>
                                        <div class="col-sm-9">

                                        <input class="form-control" name="count" type="text" value="<?php echo $lab["count"] ?>" id="example-text-input" placeholder="" ></div>

                                    </div><div class="form-group row">

                                <label for="example-text-input" class="col-sm-3 col-form-label">Qty</label>
                                        <div class="col-sm-9">

                                        <input class="form-control" name="qty" type="number" value="<?php echo $lab["qty"] ?>" id="example-text-input" placeholder="" ></div>

                                    </div><div class="form-group row">

                                <label for="example-text-input" class="col-sm-3 col-form-label">Type</label>
                                        <div class="col-sm-9">

                                        <input class="form-control" name="type" type="text" value="<?php echo $lab["type"] ?>" id="example-text-input" placeholder="" ></div>

                                    </div><div class="form-group row">

                                <label for="example-text-input" class="col-sm-3 col-form-label">Special instruction</label>
                                        <div class="col-sm-9">

                                        <input class="form-control" name="special_instruction" type="textarea" value="<?php echo $lab["special_instruction"] ?>" id="example-text-input" placeholder="" ></div>

                                    </div><div class="form-group row">

                                <div class="col-sm-12">
                                    <button type="submit" class="btn btn-primary pull-right">Update</button>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>

</div>
<!-- /.main content -->
</div>
<!-- /#page-wrapper -->
</div>
<!-- /#wrapper -->
<!-- START CORE PLUGINS -->
