<div class=control-sidebar-bg>
</div>
<div id=page-wrapper>
    <div class=content>
        <div class=content-header>
            <div class=header-icon style="margin-top: -9px;">
                <i class="pe-7s-note"></i>
            </div>
            <div class=header-title>
                <h1>QC Reports</h1>
                <small></small>
                <ol class=breadcrumb>
                    <li><i class=pe-7s-home></i> Home</li>
                    <li class="active">QC Reports</li>

                </ol>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-bd">
                    <div class="panel-heading">
                        <div class="panel-title">
                            <h4>Non Comfirmity Report</h4>
                            <br>
                            <small>TO BE FILLED BY M.R/H.R</small>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-12">
                            <form method="post" action="">
                                <div class="panel-body">
                                    <div class="form-group row">
                                        <div class="form-group col-md-6">
                                            <label for="" class="col-sm-3 col-form-label">NCR# :</label>
                                            <div class="col-sm-9">
                                                <input class="form-control" type="" value="" id="" name="ncr_no">
                                                <input class="form-control" type="hidden" value="<?php print_r($wo_no) ?>" id="" name="wo_no">
                                            </div>
                                        </div>
                                   </div>
                                    <div class="form-group row">
                                        <div class="form-group col-md-6">
                                            <label for="" class="col-sm-3 col-form-label">Name Of Assessor:</label>
                                            <div class="col-sm-9">
                                                <input class="form-control" type="" value="" id="" name="name_of_assessor">
                                            </div>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="" class="col-sm-3 col-form-label">Date Of Reporting:</label>
                                            <div class="col-sm-9">
                                                <input class="form-control" type="date" value="" id="" name="date_of_reporting">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="form-group col-md-6">
                                            <label for="" class="col-sm-3 col-form-label">Concerned Depatment & Person:</label>
                                            <div class="col-sm-9">
                                                <input class="form-control" type="" value="" id="" name="concerned_depatment_person">
                                            </div>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="" class="col-sm-3 col-form-label">Location:</label>
                                            <div class="col-sm-9">
                                                <input class="form-control" type="" value="" id="" name="location">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="form-group col-md-3">
                                            <label for="" class="col-sm-12 col-form-label">Non Coformance Category </label>
                                        </div>
                                        <div class=" col-md-6">
                                            <div class="radio radio-info radio-inline">
                                                &nbsp;&nbsp;
                                                <input type="radio" id="inlineRadio0" value="major" name="non_coformance_category" checked="">
                                                <label for="inlineRadio0">Major</label>
                                            </div>
                                            <div class="radio radio-info radio-inline">
                                                &nbsp;&nbsp;
                                                <input type="radio" id="inlineRadio.5" value="minor" name="non_coformance_category" checked="">
                                                <label for="inlineRadio.5">Minor</label>
                                            </div>
                                        </div>

                                        <div class="form-group col-md-12">
                                            <label for="" class="col-sm-3 col-form-label">Problem:</label>
                                            <div class="col-sm-9">
                                                <input class="form-control" type="" value="" id="" name="problem">
                                            </div>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="" class="col-sm-3 col-form-label">M.R/Nominee Sign:</label>
                                            <div class="col-sm-6">
                                                <input class="form-control" type="" value="" id="" name="m_r_nominee_sign">
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="form-group row">
                                        <div class="form-group col-md-12">
                                            <center>
                                                <strong><h4>Section B (Concerned Departments)</h4></strong></center>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="form-group col-md-6">
                                            <label for="" class="col-sm-3 col-form-label">Root Cause:</label>
                                            <div class="col-sm-9">
                                                <textarea class="form-control" id="exampleTextarea" rows="1" name="root_cause"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="" class="col-sm-3 col-form-label">Corrective Action:</label>
                                            <div class="col-sm-9">
                                                <textarea class="form-control" id="exampleTextarea" rows="1" name="corrective_action"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="form-group col-md-6">
                                            <label for="" class="col-sm-2 col-form-label">Preventive Action:</label>
                                            <div class="col-sm-10">
                                                <textarea class="form-control" id="exampleTextarea" rows="1" name="preventive_action"></textarea>
                                            </div>
                                            </>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="" class="col-sm-3 col-form-label">Date:</label>
                                            <div class="col-sm-9">
                                                <input class="form-control" type="date" value="" id="" name="date">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        
                                        <div class="form-group col-md-6">
                                            <label for="" class="col-sm-3 col-form-label">Signature Of Dept. Incharge:</label>
                                            <div class="col-sm-9">
                                                <p>_________________________________________________</p>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="form-group row">
                                        <div class="form-group col-md-12">
                                            <center>
                                                <strong><h4>Section C (Assessor/Auditor)</h4></strong></center>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class=" col-md-6">
                                            <div class="radio radio-info radio-inline">
                                                &nbsp;&nbsp;
                                                <input type="radio" id="inlineRadio3" value="Effective" name="assessor_auditor" checked="">
                                                <label for="inlineRadio3">Effective </label>
                                            </div>
                                            <div class="radio radio-info radio-inline">
                                                &nbsp;&nbsp;
                                                <input type="radio" id="inlineRadio4" value="Not Effective" name="assessor_auditor" checked="">
                                                <label for="inlineRadio4">Not Effective </label>
                                            </div>
                                        </div>
                                        <div class=" col-md-6">
                                            <div class="radio radio-info radio-inline">
                                                &nbsp;&nbsp;
                                                <input type="radio" id="inlineRadio5" value="Taken" name="assessor_auditor" checked="">
                                                <label for="inlineRadio5">Taken </label>
                                            </div>
                                            <div class="radio radio-info radio-inline">
                                                &nbsp;&nbsp;
                                                <input type="radio" id="inlineRadio6" value="Not Taken" name="assessor_auditor" checked="">
                                                <label for="inlineRadio6">Not Taken </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="form-group col-md-12">
                                            <label for="" class="col-sm-3 col-form-label">Comments:</label>
                                            <div class="col-sm-12">
                                                <textarea class="form-control" id="exampleTextarea" rows="1" name="comments"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="form-group col-md-6">
                                            <label for="" class="col-sm-3 col-form-label">Date Action Completed:</label>
                                            <div class="col-sm-9">
                                                <input class="form-control" type="date" value="" id="" name="date_action_completed">
                                            </div>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="" class="col-sm-3 col-form-label">Confirmed By:</label>
                                            <div class="col-sm-6">
                                                <input class="form-control" type="date" value="" id="" name="confirmed_by">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="form-group col-md-12">
                                            <button type="submit" class="btn btn-primary pull-right">Submit</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- Checkboxes & Radios -->
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    $(function() {
        $('#form1').hide();
        $('#form2').hide();
        $('#type').change(function() {
            if ($('#type').val() == 'test') {
                $('#form1').show();
            } else {
                $('#form1').hide();
            }
            if ($('#type').val() == 'test2') {
                $('#form2').show();
            } else {
                $('#form2').hide();
            }
        });
    });
</script>