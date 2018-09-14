
<!-- Page Content -->

<div id="page-wrapper">
    <div class="col">
        <!-- main content -->
        <div class="content">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="header-icon">
                    <i class="pe-7s-note2"></i>
                </div>
                <div class="header-title">
                    <h1>Sorting Report</h1>
                    </br>
                    <ol class="breadcrumb">
                        <li><a href="index.html"><i class="pe-7s-home"></i> Home</a></li>
                        <li><a href="#">Forms</a></li>
                        <li class="active">Basic Form</li>
                    </ol>
                </div>
            </div>
            <!-- /. Content Header (Page header) -->

            <!-- Textual inputs -->
            <div class="col-sm-12">
                <div class="panel panel-bd ">
                    <div class="panel-heading ">
                        <div class="panel-title">

                            <h4>Sheets/Cartons</h4></br>
                            <small>Doc no:PRD/FM/007 Date:30-04-2018 Rev:00 Review Date:30-04-2019</small>

                        </div>
                    </div>
                    <div class="panel-body">
                        <form method="post" action="">
                        <div class="form-group row">
                            <input type="hidden" name="id" value="<?php echo $job['id'] ?>">
                            <div class="form-group col-md-6">
                                <label for="" class="col-sm-3 col-form-label">W.O# :</label>
                                <div class="col-sm-9">
                                    <input class="form-control" type="text" value="<?php echo $job['WO_no'] ?>" id="" name="wo_no" readonly>
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="" class="col-sm-3 col-form-label">Date :</label>
                                <div class="col-sm-9">
                                    <input class="form-control" type="date" value="" name="date" id="">
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="form-group col-md-6">
                                <label for="" class="col-sm-3 col-form-label">Description :</label>
                                <div class="col-sm-9">
                                    <textarea class="form-control" name="description" id="exampleTextarea" rows="1" readonly=""><?php echo $job['Job_Description'] ?></textarea>
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="" class="col-sm-3 col-form-label">Name of Sorter(s) :</label>
                                <div class="col-sm-9">
                                    <input name="name_of_sorter" class="form-control" type="text" value="" id="">
                                </div>
                            </div>
                        </div>
                       
                        <div class="form-group row">
                            <div class="col-md-6">
                                    <label for="" class="col-sm-3 col-form-label">Time:</label>
                                    <div class="col-sm-9">
                                        <div class="row">
                                            <div class="col-lg-6"><input class="form-control" type="time" value="" id="" name="time_from"><small>From</small></div>
                                            <div class="col-lg-6"><input class="form-control" type="time" value="" id="" name="time_to"><small>to</small></div>
                                        </div>
                                    </div>
                                </div>
                            <div class="form-group col-md-6">
                                <label for="" class="col-sm-3 col-form-label">Recived Quantity :</label>
                                <div class="col-sm-9">
                                    <input class="form-control" type="text" value="" id="" name="recived_quantity">
                                </div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="form-group col-md-12">
                                <center>
                                    <h5>After Sorting</h5></center>
                                <hr>

                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="form-group col-md-6">
                                <label for="" class="col-sm-3 col-form-label">Good Quantity :</label>
                                <div class="col-sm-9">
                                    <input class="form-control" type="text" value="" id="" name="good_quantity">
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="" class="col-sm-3 col-form-label">Half good Quantity :</label>
                                <div class="col-sm-9">
                                    <input class="form-control" type="text" value="" id="" name="half_good_quantity">
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="form-group col-md-6">
                                <label for="" class="col-sm-3 col-form-label">Waste Quantity :</label>
                                <div class="col-sm-9">
                                    <input class="form-control" type="text" value="" id="" name="waste_quantity">
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="" class="col-sm-3 col-form-label">Remarks :</label>
                                <div class="col-sm-9">
                                    <textarea class="form-control" id="exampleTextarea" rows="1" name="remarks"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="form-group-row">
                            <div class="form-group col-md-12">
                                <label for="example-url-input" class="col-sm-1 col-form-label">Note :</label>
                                <div class="col-sm-9">
                                    <p>All the detailed data is available on given Parameters.</p>
                                </div>
                            </div>
                        </div>
                        <div class="form-group col-md-6" style="margin-top: 1%;">
                            <label for="example-url-input" class="col-sm-3 col-form-label">Sorter(s) Signatures :</label>
                            <div class="col-sm-9">
                                _______________________
                            </div>
                        </div>
                        <div class="form-group col-md-6" style="margin-top: 1%;">
                            <label for="example-url-input" class="col-sm-3 col-form-label">Supervisior :</label>
                            <div class="col-sm-9">
                                _______________________
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary pull-right">Submit</button>
                    </form>
                    </div>
                </div>

            </div>
        </div>

    </div>

</div>
<!-- /.main content -->
</div>
<!-- /#page-wrapper -->
</div>
<!-- /#wrapper -->
<!-- START CORE PLUGINS -->