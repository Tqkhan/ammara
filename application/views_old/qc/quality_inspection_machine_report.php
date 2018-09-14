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
                <h1>Quality Inspection Machine Report</h1>
                

                <ol class="breadcrumb">
                    <li><a href="#"><i class="pe-7s-home"></i> Home</a></li>
                    <li><a href="#">Forms</a></li>
                </ol>
            </div>
        </div>
        <!-- /. Content Header (Page header) -->

        <!-- Inline form -->
        <form action method="post">
        <!-- Textual inputs -->
        <div class="col-sm-12">
            <div class="panel panel-bd ">
                <div class="panel-heading">
                    <div class="panel-title">
                        <h4>Quality Inspection Machine Report</h4>
                    </div>
                </div>
                <div class="panel-body">










                    <div class="form-group row">
                        <div class="form-group">
                            <div class="col-md-6">
                                <label for="" class="col-sm-3 col-form-label">W.O#:</label>
                                <div class="col-sm-9">
                                    <input class="form-control" type="text" readonly="" value="<?php echo $wo_no; ?>" name="wo_no">                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="" class="col-sm-3 col-form-label">Date:</label>
                                <div class="col-sm-9">
                                    <input class="form-control" type="date" value="<?php echo $job['PO_Date'] ?>" id="" name="date" readonly>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-6">
                            <label for="" class="col-sm-3 col-form-label">P.O#:</label>
                            <div class="col-sm-9">
                                <input class="form-control" type="" value="<?php echo $job['PO_No'] ?>" id="" name="po_no" readonly>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="" class="col-sm-3 col-form-label">Product Name:</label>
                            <div class="col-sm-9">
                                <input class="form-control" type="" value="<?php echo $job['Description'] ?>" id="" name="product_name" readonly>
                            </div>
                        </div>

                    </div>
                    <div class="form-group row">
                        <div class="col-md-6">
                            <label for="" class="col-sm-3 col-form-label">Customer Name:</label>
                            <div class="col-sm-9">
                                <input class="form-control" type="" value="" id="" name="customer_name">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="" class="col-sm-3 col-form-label">Operator Name:</label>
                            <div class="col-sm-9">
                                <input class="form-control" type="" value="" id="" name="operator_name">
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-6">
                            <label for="" class="col-sm-3 col-form-label">Good Qty:</label>
                            <div class="col-sm-9">
                                <input class="form-control" type="" value="" id="" name="good_qty">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="" class="col-sm-3 col-form-label">Time Consumed:</label>
                            <div class="col-sm-9">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <input class="form-control" type="time" value="" id="" name="time_consumed_from"><small>From</small></div>
                                    <div class="col-lg-6">
                                        <input class="form-control" type="time" value="" id="" name="time_consumed_to"><small>to</small></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <hr>
  
                    <div class="form-group row">
                        <div class="col-md-12">
                            <div class="panel-body">



                                <div class="table-responsive">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Sr#</th>
                                                <th>Reason For Rejection</th>
                                                <th>Write Yes Or No</th>
                                                <th>Reject Qty</th>
                                                <th>Remarks</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    1
                                                </td>
                                                <td>
                                                    
                                                    Colour Variation
                                                </td>
                                                <td>
                                                    <div class="radio radio-info radio-inline">
                                                        <input type="radio" id="inlineRadio1" value="yes" name="color_variation_accept">
                                                        <label for="inlineRadio1"> Yes </label>
                                                    </div>
                                                    <div class="radio radio-info radio-inline">
                                                        <input type="radio" id="inlineRadio2" value="no" name="color_variation_accept">
                                                        <label for="inlineRadio2"> No </label>
                                                    </div>
                                                </td>
                                                <td>
                                                   <input class="form-control" type="number" value="" id="" name="color_variation_reject_qty"> 
                                                </td>
                                                <td>
                                                    <textarea class="form-control" id="" rows="1" name="color_variation_remarks"></textarea>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    2
                                                </td>
                                                <td>
                                                    oil_Stains
                                                </td>
                                                <td>
                                                    <div class="radio radio-info radio-inline">
                                                        <input type="radio" id="inlineRadio0" value="yes" name="oil_stains_accept">
                                                        <label for="inlineRadio0"> Yes </label>
                                                    </div>
                                                    <div class="radio radio-info radio-inline">
                                                        <input type="radio" id="inlineRadio.5" value="no" name="oil_stains_accept">
                                                        <label for="inlineRadio.5"> No </label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <input class="form-control" type="number" value="" id="" name="oil_stains_reject_qty">
                                                </td>
                                                <td>
                                                    <textarea class="form-control" id="" rows="1" name="oil_stains_remarks"></textarea>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    3
                                                </td>
                                                <td>
                                                    Ghosting
                                                </td>
                                                <td>
                                                    <div class="radio radio-info radio-inline">
                                                        <input type="radio" id="inlineRadio23" value="yes" name="ghosting_accept" >
                                                        <label for="inlineRadio23"> Yes </label>
                                                    </div>
                                                    <div class="radio radio-info radio-inline">
                                                        <input type="radio" id="inlineRadio23" value="no" name="ghosting_accept" >
                                                        <label for="inlineRadio23"> No </label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <input class="form-control" type="number" value="" id="" name="ghosting_reject_qty">
                                                </td>
                                                <td>
                                                    <textarea class="form-control" id="" rows="1" name="ghosting_remarks"></textarea>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                   4
                                                </td>
                                                <td>
                                                    Bur
                                                </td>
                                                <td>
                                                    <div class="radio radio-info radio-inline">
                                                        <input type="radio" id="inlineRadio5" value="yes" name="bur_accept" >
                                                        <label for="inlineRadio5"> Yes </label>
                                                    </div>
                                                    <div class="radio radio-info radio-inline">
                                                        <input type="radio" id="inlineRadio6" value="no" name="bur_accept" >
                                                        <label for="inlineRadio6"> No </label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <input class="form-control" type="number" value="" id="" name="bur_reject_qty">
                                                </td>
                                                <td>
                                                    <textarea class="form-control" id="" rows="1" name="bur_remarks"></textarea>
                                                </td>
                                            </tr>

                                            <tr>
                 
                                                <td>
                                                    5
                                                </td>
                                                <td>
                                                    Over Glueing
                                                </td>
                                                <td>
                                                    <div class="radio radio-info radio-inline">
                                                        <input type="radio" id="inlineRadio7" value="yes" name="over_glueing_accept">
                                                        <label for="inlineRadio7"> Yes </label>
                                                    </div>
                                                    <div class="radio radio-info radio-inline">
                                                        <input type="radio" id="inlineRadio8" value="no" name="over_glueing_accept">
                                                        <label for="inlineRadio8"> No </label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <input class="form-control" type="number" value="" id="" name="over_glueing_reject_qty">
                                                </td>
                                                <td>
                                                    <textarea class="form-control" id="" rows="1" name="over_glueing_remarks"></textarea>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    6
                                                </td>
                                                <td>
                                                    Spots
                                                </td>
                                                <td>
                                                    <div class="radio radio-info radio-inline">
                                                        <input type="radio" id="inlineRadio9" value="yes" name="spots_accept">
                                                        <label for="inlineRadio9"> Yes </label>
                                                    </div>
                                                    <div class="radio radio-info radio-inline">
                                                        <input type="radio" id="inlineRadio10" value="no" name="spots_accept">
                                                        <label for="inlineRadio10"> No </label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <input class="form-control" type="number" value="" id="" name="spots_reject_qty">
                                                </td>
                                                <td>
                                                    <textarea class="form-control" id="" rows="1" name="spots_reject_remarks"></textarea>
                                                </td>
                                            </tr>
                                            <tr>
                                          

                                            <td>
                                                    7
                                                </td>
                                                <td>
                                                    Edges
                                                </td>
                                                <td>
                                                    <div class="radio radio-info radio-inline">
                                                        <input type="radio" id="inlineRadio11" value="yes" name="edges_accept">
                                                        <label for="inlineRadio11"> Yes </label>
                                                    </div>
                                                    <div class="radio radio-info radio-inline">
                                                        <input type="radio" id="inlineRadio12" value="no" name="edges_accept">
                                                        <label for="inlineRadio12"> No </label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <input class="form-control" type="number" value="" id="" name="edges_reject_qty">
                                                </td>
                                                <td>
                                                    <textarea class="form-control" id="" rows="1" name="edges_remarks"></textarea>
                                                </td>
                                            </tr>
                                            <tr>

                                                <td>
                                                    8
                                                </td>
                                                <td>
                                                    Cutting Out
                                                </td>
                                                <td>
                                                    <div class="radio radio-info radio-inline">
                                                        <input type="radio" id="inlineRadio13" value="yes" name="cutting_out_accept">
                                                        <label for="inlineRadio13"> Yes </label>
                                                    </div>
                                                    <div class="radio radio-info radio-inline">
                                                        <input type="radio" id="inlineRadio14" value="no" name="cutting_out_accept">
                                                        <label for="inlineRadio14"> No </label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <input class="form-control" type="number" value="" id="" name="cutting_out_reject_qty">
                                                </td>
                                                <td>
                                                    <textarea class="form-control" id="" rows="1" name="cutting_out_remarks"></textarea>
                                                </td>
                                            </tr>
                                           
                                            <tr>






 
                                                <td>
                                                    9
                                                </td>
                                                <td>
                                                    Scum
                                                </td>
                                                <td>
                                                    <div class="radio radio-info radio-inline">
                                                        <input type="radio" id="inlineRadio17" value="yes" name="scum_accept">
                                                        <label for="inlineRadio17"> Yes </label>
                                                    </div>
                                                    <div class="radio radio-info radio-inline">
                                                        <input type="radio" id="inlineRadio18" value="no" name="scum_accept">
                                                        <label for="inlineRadio18"> No </label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <input class="form-control" type="number" value="" id="" name="scum_reject_qty">
                                                </td>
                                                <td>
                                                    <textarea class="form-control" id="" rows="1" name="scum_remarks"></textarea>
                                                </td>
                                            </tr>
                                             <tr>
                                                <td>
                                                    9
                                                </td>
                                                <td>
                                                    Cracking
                                                </td>
                                                <td>
                                                    <div class="radio radio-info radio-inline">
                                                        <input type="radio" id="inlineRadio15" value="yes" name="cracking_accept">
                                                        <label for="inlineRadio15"> Yes </label>
                                                    </div>
                                                    <div class="radio radio-info radio-inline">
                                                        <input type="radio" id="inlineRadio16" value="no" name="cracking_accept">
                                                        <label for="inlineRadio16"> No </label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <input class="form-control" type="number" value="" id="" name="cracking_reject_qty">
                                                </td>
                                                <td>
                                                    <textarea class="form-control" id="" rows="1" name="cracking_remarks"></textarea>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    10
                                                </td>
                                                <td>
                                                    Dark Back Ground
                                                </td>
                                                <td>
                                                    <div class="radio radio-info radio-inline">
                                                        <input type="radio" id="inlineRadio19" value="yes" name="dark_background_accept">
                                                        <label for="inlineRadio19"> Yes </label>
                                                    </div>
                                                    <div class="radio radio-info radio-inline">
                                                        <input type="radio" id="inlineRadio20" value="no" name="dark_background_accept">
                                                        <label for="inlineRadio20"> No </label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <input class="form-control" type="number" value="" id="" name="dark_background_reject_qty">
                                                </td>
                                                <td>
                                                    <textarea class="form-control" id="" rows="1" name="dark_background_remarks"></textarea>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    11
                                                </td>
                                                <td>
                                                    light_background
                                                </td>
                                                <td>
                                                    <div class="radio radio-info radio-inline">
                                                        <input type="radio" id="inlineRadio21" value="yes" name="light_background_accept">
                                                        <label for="inlineRadio21"> Yes </label>
                                                    </div>
                                                    <div class="radio radio-info radio-inline">
                                                        <input type="radio" id="inlineRadio22" value="no" name="light_background_accept">
                                                        <label for="inlineRadio22"> No </label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <input class="form-control" type="number" value="" id="" name="light_background_reject_qty">
                                                </td>
                                                <td>
                                                    <textarea class="form-control" id="" rows="1" name="light_background_remarks"></textarea>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="form-group col-md-6">
                            <label for="" class="col-sm-3 col-form-label">Sorter Sign:</label>
                            <div class="col-sm-9">
                                <p>___________________________</p>
                            </div>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="" class="col-sm-3 col-form-label">Checked By :</label>

                            <div class="col-sm-6">
                                <p>____________________________</p>
                                <small>QC Executive</small>
                            </div>
                        </div>
                  <input type="submit" value="Submit" class="pull-right btn btn-info">
                    </div>

                    <!-- Checkboxes & Radios -->

                </div>
            </div>
        </div>

    </form>
        <!-- /.main content -->
    </div>
    <!-- /#page-wrapper -->
</div>