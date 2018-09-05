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
                            <h4>Complain Assesment Form</h4>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-12">
                            <form method="post" action="">
                                <div class="panel-body">
                                <div class="form-group row">
                                    <div class="form-group col-md-6">
                                        <label for="" class="col-sm-3 col-form-label">CAF No:</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" type="" value="" id="" name="caf_no">
                                        </div>

                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="example-url-input" class="col-sm-3 col-form-label">Date:</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" type="Date" value="" id="" name="date">
                                        </div>

                                    </div>
                                </div>
                                <hr>

                                <div class="form-group row">
                                    <div class="form-group col-md-12">
                                        <label for="" class="col-sm-12 col-form-label">
                                            <center>
                                                <strong><h4>Section 1 (Complain)</h4></strong></center>
                                        </label>
                                    </div>
                                </div>
                                <div class="table-responsive">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th colspan="1">
                                                    <center>W.O#</center>
                                                </th>
                                                <th colspan="3">
                                                    <center>Description</center>
                                                </th>
                                                <th>
                                                    <center>Complain</center>
                                                </th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th colspan="1">
                                                    <input class="form-control" type="" value="<?php print_r($wo_no) ?>" id="" name="wo_no" readonly>
                                                </th>
                                                <td colspan="3">
                                                    <input class="form-control" type="" value="" id="" name="description">
                                                </td>
                                                <td>
                                                    <input class="form-control" type="" value="" id="" name="complain">
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="table-responsive">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th colspan="1">
                                                    <center>Machine</center>
                                                </th>
                                                <th colspan="3">
                                                    <center>Name Of Resposible Worker(s)</center>
                                                </th>
                                                <th>
                                                    <center>Further Detail (If Any)</center>
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th colspan="1">
                                                    <input class="form-control" type="" value="" id="" name="machine">
                                                </th>
                                                <td colspan="3">
                                                    <input class="form-control" type="" value="" id="" name="name_of_resposible_workers">
                                                </td>
                                                <td>
                                                    <input class="form-control" type="" value="" id="" name="further_detail">
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="form-group row">
                                    <div class="form-group col-md-12">
                                        <label for="" class="col-sm-3 col-form-label">QC Personal Name And Signature:</label>
                                        <input class="form-control" type="" value="" id="" name="qc_personal_name">
                                    </div>
                                </div>
                                <hr>

                                <div class="form-group row">
                                    <div class="form-group col-md-12">
                                        <label for="" class="col-sm-12 col-form-label">
                                            <center>
                                                <strong><h4>Section 2(Complain Reveiwed By)</h4></strong></center>
                                        </label>
                                    </div>
                                </div>
                                <div class="table-responsive">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th colspan="1">
                                                    <center>Name</center>
                                                </th>
                                                <th colspan="3">
                                                    <center>Signature &amp; Date</center>
                                                </th>
                                                <th>Comments</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th colspan="1">
                                                    <input class="form-control" type="" value="" id="" name="complain_reveiwed_name">
                                                </th>
                                                <td colspan="3">
                                                    <input class="form-control" type="" value="" id="" name="complain_reveiwed_signature">
                                                </td>
                                                <td>
                                                    <input class="form-control" type="" value="" id="" name="complain_reveiwed_comments">
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <hr>

                                <div class="form-group row">
                                    <div class="form-group col-md-12">
                                        <label for="" class="col-sm-12 col-form-label">
                                            <center>
                                                <strong><h4>Final Assessment <small>(Approved By QC/QA Manager)</small></h4></strong></center>
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-6">
                                        <label for="" class="col-sm-3 col-form-label">Approved by QC/QA manager :</label>
                                        <div class="col-sm-9">
                                            <div class="radio radio-info radio-inline">
                                                &nbsp;&nbsp;
                                                <input type="radio" id="inlineRadio3" value="yes" name="approved_by_qc_qa" >
                                                <label for="inlineRadio3">Yes</label>
                                            </div>
                                            <div class="radio radio-info radio-inline">
                                                &nbsp;&nbsp;
                                                <input type="radio" id="inlineRadio4" value="no" name="approved_by_qc_qa">
                                                <label for="inlineRadio4">No</label>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="form-group row">
                                    <div class="col-md-6">
                                        <label for="" class="col-sm-2 col-form-label">Note :</label>
                                        <p>If <b>No</b>,please provide details</p>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="form-group col-md-6">
                                        <label for="" class="col-sm-3 col-form-label">Remarks :</label>
                                        <div class="col-sm-9">
                                            <textarea class="form-control" id="" rows="1" name="remarks"></textarea>
                                        </div>

                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="example-url-input" class="col-sm-3 col-form-label">Signature &amp; Date:</label>
                                        <p>__________________________________</p>

                                    </div>
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