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
                        
                            <div class="row">
                                <div class="" id='TextBoxesGroup'>
                                    <div class="form-group row">

                                       
                                            <div class="form-group col-lg-12">
                                                <form search-form" role="form" id="search-form" method="post" accept-charset="UTF-8" action="<?php echo base_url() ?>qc/">
                                            <label for="" class="col-sm-3">QC Forms</label>
                                            <div class="col-lg-7">
                                                <select id="selectsearch" class="form-control">
                                                    <option value="investigation_report">Investigation Report</option>
                                                    <option value="goods_receiving_notes">Goods Receiving Notes</option>
                                                    <option value="process_procedure">Process Procedure</option>
                                                    <option value="corrective_action_request">Corrective Action Request</option>
                                                    <option value="corrective_action_request">Corrective Action Request</option>
                                                    <option value="non_comfirmity_report">Non Comfirmity Report</option>
                                                    <option value="complain_assessment_form">Complain Assessment Form</option>
                                                    <option value="rejection_report">Rejection Report</option>
                                                    <option value="material_inspection_note">Material Inspection Note</option>
                                                </select>
                                            </div>
                                            <button class="col-lg-2 btn btn-primary pull-right">submit</button>
                                       </form>
                                        </div>
                                       <script type="text/javascript">
                                         $("#selectsearch").change(function() {
                                         var action = $(this).val();
                                          
                                           // $('#login_button').attr('disabled',false);
                                           if (action=='investigation_report') {
                                              $("#search-form").attr("action", "<?php echo base_url() ?>qc/investigation_report/<?php echo $wo_no ?>");
                                           }
                                           else if (action=='goods_receiving_notes') {
                                              $("#search-form").attr("action", "<?php echo base_url() ?>qc/goods_receiving_notes/<?php echo $wo_no ?>");
                                           }
                                           else if (action=='process_procedure') {
                                              $("#search-form").attr("action", "<?php echo base_url() ?>qc/process_procedure/<?php echo $wo_no ?>");
                                           } 
                                           else if (action=='corrective_action_request') {
                                              $("#search-form").attr("action", "<?php echo base_url() ?>qc/corrective_action_request/<?php echo $wo_no ?>");
                                           } 
                                           else if (action=='non_comfirmity_report') {
                                              $("#search-form").attr("action", "<?php echo base_url() ?>qc/non_comfirmity_report/<?php echo $wo_no ?>");
                                           }
                                           else if (action=='complain_assessment_form') {
                                              $("#search-form").attr("action", "<?php echo base_url() ?>qc/complain_assessment_form/<?php echo $wo_no ?>");
                                           }
                                            else if (action=='rejection_report') {
                                              $("#search-form").attr("action", "<?php echo base_url() ?>qc/rejection_report/<?php echo $wo_no ?>");
                                           }
                                           else if (action=='material_inspection_note') {
                                              $("#search-form").attr("action", "<?php echo base_url() ?>qc/material_inspection_note/<?php echo $wo_no ?>");
                                           }   
                                       });
                                       </script>
                                        
                                    </div>
                                </div>
                            </div>
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