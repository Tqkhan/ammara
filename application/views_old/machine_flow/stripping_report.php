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
                            <h1>Stripping Report</h1>
                            <small>Doc no:PRD/FM/007 Date:30-04-2018 Rev:00 Review Date:30-04-2019</small>
                            <ol class="breadcrumb">
                                <li><a href="index.html"><i class="pe-7s-home"></i> Home</a></li>
                                <li><a href="#">Forms</a></li>
                                <li class="active">Basic Form</li>
                            </ol>
                        </div>
                    </div> <!-- /. Content Header (Page header) -->



                    <!-- Textual inputs -->
                    <div class="col-sm-12">
                        <div class="panel panel-bd lobidrag">
                            <div class="panel-heading ">
                                <div class="panel-title">
                                    <center>
                                        <h4>Sheets/Cartons</h4>
                                    </center>
                                </div>
                            </div>
                            <div class="panel-body">
                                <form method="post" action="">
                                <input type="hidden" name="plane_id" value="<?php echo $job['id'] ?>">
                                <input type="hidden" name="flow_id" value="<?php echo $job['flow'] ?>">
                                <div class="form-group row">
                                    <div class="form-group col-md-6">
                                        <label for="" class="col-sm-3 col-form-label">W.O#:</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" type="text" value="<?php echo $job['WO_no'] ?>" id="" readonly="" name="WO_no">
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="" class="col-sm-3 col-form-label">Date:</label>
                                        <div class="col-sm-9">
                                           <input type="text" class="form-control" id="" value="<?php echo date("Y/m/d")?>" placeholder="" readonly="" name="date">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="form-group col-md-6">
                                        <label for="" class="col-sm-3 col-form-label">Description:</label>
                                        <div class="col-sm-9">
                                            <textarea class="form-control" id="exampleTextarea" rows="1" name="description"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="" class="col-sm-3 col-form-label">Name Of Workers:</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" type="text" value="" name="name_of_workers">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="form-group col-md-6">
                                        <label for="" class="col-sm-3 col-form-label">Time :</label>
                                        <div class="col-sm-9">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <input class="form-control" type="time" value="" name="time_from">
                                                    <small>From</small>
                                                </div>
                                                <div class="col-lg-6">
                                                    <input class="form-control" type="time" value="" name="time_to">
                                                    <small>To</small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="" class="col-sm-3 col-form-label">Recived Quantity:</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" type="number" value="" id="" name="recived_quantity">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    
                                    <div class="form-group col-md-6">
                                        <label for="" class="col-sm-3 col-form-label">Finished Quantity:</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" type="number" value="" name="finished_quantity">
                                        </div>
                                    </div>
                                     <div class="form-group col-md-6">
                                        <label for="" class="col-sm-3 col-form-label">Sorter:</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" type="text" value="" id="" name="sorter">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                   
                                    <div class="form-group col-md-6">
                                        <label for="" class="col-sm-3 col-form-label">Supervisior:</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" type="text" value="" name="Supervisior">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                        <button type="submit" class="btn btn-primary pull-right">Add</button>
                                    </div>
                            </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>