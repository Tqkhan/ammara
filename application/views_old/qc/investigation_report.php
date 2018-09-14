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
                <h1>Investigation Report</h1>
                

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
                        <h4>Investigation Report</h4>
                    </div>
                </div>
                <div class="panel-body">
               
                    <div class="form-group row">
                        <div class="col-md-12">
                            <div class="panel-body">



                                <div class="table-responsive">
                                    <form action="" method="post">
                                        <input class="form-control" type="text" readonly="" value="<?php echo $wo_no; ?>" name="wo_no">
                                        <table class="table table-bordered">
                                        <tbody>
                                          <tr>
                                                 <td rowspan="4">
                                                    <strong>Introduction:</strong>
                                                </td>
                                                <td rowspan="1">
                                                    <textarea class="form-control" id="exampleTextarea" rows="1" name="complain_received_from" placeholder="Complain Received From"></textarea>
                                                </td>
                                               
                                            </tr>
                                            <tr>
                                                 <td rowspan="1">
                                                    <textarea class="form-control" id="exampleTextarea" rows="1" name="date_investigation_began" placeholder="Date Investigation Begin"></textarea>
                                                </td>
                                                
                                            </tr>
                                            <tr>
                                                <td rowspan="1">
                                                    <textarea class="form-control" id="exampleTextarea" rows="1" name="nature_of_complain" placeholder="Nature Of Complain"></textarea>
                                                </td>
                                                
                                            </tr>
                                            <td rowspan="1">
                                                    <textarea class="form-control" id="exampleTextarea" rows="1" name="background_to_the_investigation" placeholder="Background To The Investigation"></textarea>
                                                </td>
                                            <tr>
                                                <td rowspan="1"><strong>Description Of Work</strong></td>
                                                <td>
                                                    <textarea class="form-control" id="exampleTextarea" rows="1" name="description_of_work" placeholder=""></textarea>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td rowspan="2">
                                                    <strong>Process Of Investigation</strong>
                                                </td>
                                                <td>
                                                    <textarea class="form-control" id="exampleTextarea" rows="1" name="the_investigation_process" placeholder="The Investigation Process"></textarea>
                                                </td>

                                            </tr>
                                            <tr>
                                                <td>
                                                    <textarea class="form-control" id="exampleTextarea" rows="1" name="persons_interviewed" placeholder="Person Interviewed"></textarea>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td rowspan="5">
                                                    <strong>The Investigation Finding:</strong>
                                                </td>
                                                <td>
                                                    <textarea class="form-control" id="exampleTextarea" rows="1" name="summary_of_technical_findings" placeholder="Summary Of Technical Findings"></textarea>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <textarea class="form-control" id="exampleTextarea" rows="1" name="summary_of_witness_evidence" placeholder="Summary Of Witness Evidence"></textarea>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <textarea class="form-control" id="exampleTextarea" rows="1" name="secondary_root_cause" placeholder="Facts Established"></textarea>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <textarea class="form-control" id="exampleTextarea" rows="1" name="primary_root_cause" placeholder="secondary_root_cause"></textarea>
                                                </td>
                                            </tr>
                                           
                                            <tr>
                                                <td>
                                                    <textarea class="form-control" id="exampleTextarea" rows="1" name="other_relevant_information" placeholder="Other Relevant Information"></textarea>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td rowspan="2">
                                                    <strong>Conclusion:If Required</strong>
                                                </td>
                                                <td>
                                                    <textarea class="form-control" id="exampleTextarea" rows="1" name="recommendation" placeholder="Recommendation"></textarea>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <textarea class="form-control" id="exampleTextarea" rows="1" name="funther_details_on_recommendation" placeholder="Further Details On Recommendation"></textarea>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td rowspan="1">
                                                    <strong>Investigation Completed On: </strong>
                                                </td>
                                                <td>
                                                    <textarea class="form-control" id="exampleTextarea" rows="1" name="investigation_complete_on" placeholder=""></textarea>
                                                </td>
                                            </tr>
                                            
                                        </tbody>
                                    </table>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="form-group col-md-12">
                          
                            <input type="submit" value="Submit" class="pull-right btn btn-info">
                        </div>
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