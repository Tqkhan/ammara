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
                <div class="panel panel-bd ">
                    <div class="panel-heading">
                        <div class="panel-title">
                            <h4>QC Reports</h4>
                        </div>
                    </div>
                    <div class="panel-body">
                        <form method="post" action="">
                            <div class="row">
                                <div class="" id='TextBoxesGroup'>
                                    <div class="form-group row">
                                        <div class="form-group col-lg-12">
                                            <label for="" class="col-sm-2">Select Form Type</label>
                                            <div class="col-sm-10">
                                                <select class="form-control" id="type" name="form_type" required="">
                                                    <option value="">Please Select</option>
                                                    <option value="test">Please Select</option>
                                                    <option value="test2">Please Select</option>
                                                    <option value="sasaassss">Please Select</option>
                                                    <option value="sasaasss">Please Select</option>
                                                    <option value="sasassas">Please Select</option>

                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="panel-body" id="form1">
                        <form method="post" action="">
                            <div class="row">
                                <p>sss</p>
                            </div>
                        </form>
                    </div>
                    <div class="panel-body" id="form2">
                        <form method="post" action="">
                            <div class="row">
                                <p>1ssssssss</p>
                            </div>
                        </form>
                    </div>

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