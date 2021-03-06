<div class="control-sidebar-bg"></div>
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
                    <h1>Corrective Action Request</h1>
                    <small>Doc no:QA/FM/011 &nbsp; Date:30-04-2018 &nbsp; Rev:00 &nbsp; Review Date:30-04-2019</small>
                    <ol class="breadcrumb">
                        <li><a href="index.html"><i class="pe-7s-home"></i> Home</a></li>
                        <li><a href="#">Forms</a></li>
                    </ol>
                </div>
            </div>
            <!-- /. Content Header (Page header) -->

            <!-- Textual inputs -->
                             <form action="" method="post">

            <div class="col-sm-12">
                <div class="panel panel-bd">
                    <div class="panel-heading ">
                        <div class="panel-title" style="max-width: calc(100% - 180px);">
                            <h4>Corrective Action Request</h4>
                        </div>

                    </div>
                    <div class="panel-body">
                        <div class="form-group row">
                            <div class="form-group">
                                <div class="col-md-12">
                                    <input type="hidden" name="wo_no" value="<?php echo $wo_no; ?>">
                                    <label for="" class="col-sm-2 col-form-label">Description :</label>
                                    <div class="col-sm-10">
                                         <textarea class="form-control" id="" rows="1" name="description"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="form-group row">
                            <div class="form-group ">
                                <div class="col-lg-6">
                                    <label for="" class="col-sm-2 col-form-label">Client Name </label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="Text" value="" id="" name="client_name">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <label for="" class="col-sm-2 col-form-label">Date Of Reporting </label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="date" value="" id="" name="date_of_reporting">
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    <div class="form-group row">
                            <div class="form-group ">
                                <label for="" class="col-sm-2 col-form-label">Type :</label>
                                <div class="col-sm-10">
                                    <div class="checkbox checkbox-primary checkbox checkbox-inline">
                                        <input id="checkbox93" type="checkbox" name="type[]" value="Corrective Action (exsisting issue)">
                                        <label for="checkbox93">Corrective Action <small>exsisting issue</small></label>
                                    </div>
                                    <div class="checkbox checkbox-primary checkbox checkbox-inline">
                                        <input id="checkbox03" type="checkbox" name="type[]" value="Preventive (potential issue)">
                                        <label for="checkbox03">Preventive Action <small>potential issue</small></label>
                                    </div>
                                   <div class="checkbox checkbox-primary checkbox checkbox-inline">
                                        <input id="checkbox13" type="checkbox" name="type[]" value="Opportunity for Improvement/Suggestions">
                                        <label for="checkbox13">Opportunity for Improvement/Suggestions</label>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="form-group row">
                            <div class="form-group ">
                                <label for="" class="col-sm-2 col-form-label">Source :</label>
                                <div class="col-sm-10">
                                    <div class="checkbox checkbox-primary checkbox checkbox-inline">
                                        <input id="checkbox20" type="checkbox" value="Employee Feedback">
                                        <label for="checkbox20" name="source[]">Employee Feedback</label>
                                    </div>
                                    <div class="checkbox checkbox-primary checkbox checkbox-inline">
                                        <input id="checkbox21" type="checkbox" value="Customer Feedback">
                                        <label for="checkbox21" name="source[]">Customer Feedback</label>
                                    </div>
                                    <div class="checkbox checkbox-primary checkbox checkbox-inline">
                                        <input id="checkbox22" type="checkbox" value="Review Action">
                                        <label for="checkbox22" name="source[]">Review Action</label>
                                    </div>
                                    <div class="checkbox checkbox-primary checkbox checkbox-inline">
                                        <input id="checkbox23" type="checkbox" value="Supplier/Subcontractor Feedback" name="source[]">
                                        <label for="checkbox23">Supplier/Subcontractor Feedback</label>
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="col-sm-10">
                                    <div class="checkbox checkbox-primary checkbox checkbox-inline">
                                        <input id="checkbox24" type="checkbox" value="External Audit Finding" name="source[]">
                                        <label for="checkbox24">External Audit Finding</label>
                                    </div>
                                    <div class="checkbox checkbox-primary checkbox checkbox-inline">
                                        <input id="checkbox25" type="checkbox" value="Internal Audit Finding" name="source[]">
                                        <label for="checkbox25">Internal Audit Finding</label>
                                    </div>
                                    <div class="checkbox checkbox-primary checkbox checkbox-inline">
                                        <input id="checkbox26" type="checkbox" value="Management Review action Item" name="source[]">
                                        <label for="checkbox26">Management Review action Item</label>
                                    </div>
                                    <div class="checkbox checkbox-primary checkbox checkbox-inline">
                                        <input id="checkbox27" type="checkbox" value="Other">
                                        <label for="checkbox27" name="source[]">Other</label>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        <hr>



                        <div class="form-group row">
                            <div class="form-group ">
                                <label for="" class="col-sm-2 col-form-label">Process :</label>
                                <div class="col-sm-10">
                                    <div class="checkbox checkbox-primary checkbox checkbox-inline">
                                        <input id="checkbox28" type="checkbox" name="process[]" value="Pre Pres">
                                        <label for="checkbox28">Pre Press</label>
                                    </div>
                                    <div class="checkbox checkbox-primary checkbox checkbox-inline">
                                        <input id="checkbox29" type="checkbox" name="process[]" value="Coatng">
                                        <label for="checkbox29">Coating</label>
                                    </div>
                                    <div class="checkbox checkbox-primary checkbox checkbox-inline">
                                        <input id="checkbox30" type="checkbox" name="process[]" value="Sortng">
                                        <label for="checkbox30">Sorting</label>
                                    </div>
                                    <div class="checkbox checkbox-primary checkbox checkbox-inline">
                                        <input id="checkbox31" type="checkbox" name="process[]" value="Plat Making">
                                        <label for="checkbox31">Plate Making</label>
                                    </div>
                                    <div class="checkbox checkbox-primary checkbox checkbox-inline">
                                        <input id="checkbox32" type="checkbox" name="process[]" value="Sheet Sorting">
                                        <label for="checkbox32">Sheet Sorting</label>
                                    </div>
                                    <div class="checkbox checkbox-primary checkbox checkbox-inline">
                                        <input id="checkbox33" type="checkbox" name="process[]" value="Stripping">
                                        <label for="checkbox33">Stripping</label>
                                    </div>
                                    <div class="checkbox checkbox-primary checkbox checkbox-inline">
                                        <input id="checkbox34" type="checkbox" name="process[]" value="Cutting">
                                        <label for="checkbox34">Cutting</label>
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="col-sm-10">
                                    
                                    <div class="checkbox checkbox-primary checkbox checkbox-inline">
                                        <input id="checkbox35" type="checkbox" name="process[]" value="Die Cutting">
                                        <label for="checkbox35">Die Cutting</label>
                                    </div>
                                    <div class="checkbox checkbox-primary checkbox checkbox-inline">
                                        <input id="checkbox36" type="checkbox" name="process[]" value="Pasting & Packing">
                                        <label for="checkbox36">Pasting & Packing</label>
                                    </div>
                                    <div class="checkbox checkbox-primary checkbox checkbox-inline">
                                        <input id="checkbox37" type="checkbox" name="process[]" value="Printing">
                                        <label for="checkbox37">Printing</label>
                                    </div>
                                    <div class="checkbox checkbox-primary checkbox checkbox-inline">
                                        <input id="checkbox38" type="checkbox" name="process[]" value="Other">
                                        <label for="checkbox38">Other</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        
                        

                        <div class="form-group row">
                            <div class="form-group ">
                                <label for="" class="col-sm-2 col-form-label">Priority :</label>
                                <div class="col-sm-10">
                                    <div class="checkbox checkbox-primary checkbox checkbox-inline">
                                        <input id="checkbox39" type="checkbox" name="priority[]" value="Low">
                                        <label for="checkbox39">Low</label>
                                    </div>
                                    <div class="checkbox checkbox-primary checkbox checkbox-inline">
                                        <input id="checkbox40" type="checkbox" name="priority[]" value="Medium">
                                        <label for="checkbox40">Medium</label>
                                    </div>
                                    <div class="checkbox checkbox-primary checkbox checkbox-inline">
                                        <input id="checkbox41" type="checkbox" name="priority[]" value="High">
                                        <label for="checkbox41">High</label>
                                    </div>
                                    <div class="checkbox checkbox-primary checkbox checkbox-inline">
                                        <input id="checkbox42" type="checkbox" name="priority[]" value="Urgent/Critical">
                                        <label for="checkbox42">Urgent/Critical</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    <div class="form-group row">
                            <div class="form-group col-md-12">
                                <label for="" class="col-sm-3 col-form-label">Description Of Non Confirmity </label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" name="description_of_non_conformity" id="exampleTextarea" rows="1"></textarea>
                                </div>
                            </div>
                        </div>
                    <div class="form-group">
                        <hr>
                        <center>
                            <strong><h4>Stop here! Submit To</h4></strong></center>
                    </div>
                    <div class="form-group row">
                        <div class="form-group col-md-6">
                            <label for="" class="col-sm-3 col-form-label">Assinged To </label>
                            <div class="col-sm-9">
                                <input class="form-control" type="text" value="" id="" name="submit_assigned_to">
                            </div>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="example-url-input" class="col-sm-3 col-form-label">Date Assigned </label>
                            <div class="col-sm-9">
                                <input class="form-control" type="date"  id="example-url-input" name="submit_assigned_date">
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="form-group col-md-6">
                            <label for="" class="col-sm-3 col-form-label">Respond By </label>
                            <div class="col-sm-9">
                                <input class="form-control" type="" value="" id="" name="submit_respond_by">
                            </div>
                        </div>
                    </div>
                    <hr>





                    <div class="form-group row">
                        <div class="form-group col-md-12">
                            <center>
                                <strong><h4>To Be Completed By The Assignee..! </h4></strong></center>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="form-group col-md-6">
                            <label for="" class="col-sm-3 col-form-label">Identified Cause(s) </label>
                            <div class="col-sm-9">
                                <textarea class="form-control" id="Textarea" rows="1" name="completed_identified_cause"></textarea>
                            </div>
                        </div>
                    
                        <div class="form-group col-md-6">
                            <label for="" class="col-sm-5 col-form-label">Corrective Action Taken To Prevent Recurrence </label>
                            <div class="col-sm-7">
                                <textarea class="form-control" id="Textarea" rows="1" name="ca_taken_to_prevent_recurrence"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="form-group col-md-6">
                            <label for="" class="col-sm-3 col-form-label">Date Action Completed </label>
                            <div class="col-sm-9">
                                <input class="form-control" type="date" value="" id="" name="date_action_completed">
                            </div>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="example-url-input" class="col-sm-3 col-form-label">Incharge </label>
                            <div class="col-sm-9">
                                <p>_______________________________________________</p>
                            </div>
                        </div>
                    </div>
                    <hr>




                    <div class="form-group row">
                        <div class="form-group col-md-12">
                            <center>
                                <strong><h4>Stop Here Return to Manager QA</h4></strong></center>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="form-group col-md-6">
                            <label for="" class="col-sm-3 col-form-label">Effectiveness Verified By </label>
                            <div class="col-sm-9">
                                <input class="form-control" type="" value="" id="" name="return_effectiveness_verified_by">
                            </div>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="example-url-input" class="col-sm-3 col-form-label">Date </label>
                            <div class="col-sm-9">
                                <input class="form-control" type="date" value="" id="example-url-input" name="retrun_date">
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="form-group row">
                        <div class="form-group col-md-1">
                            <label for="" class="col-sm-2 col-form-label">Result</label>
                        </div>
                        <div class="form-group col-md-1">
                            <div class="radio radio-info radio-inline">
                                <input type="radio" id="inlineRadio1" value="Pass" name="return_result">
                                <label for="inlineRadio1">Pass</label>
                            </div>
                        </div>
                        <div class="form-group col-md-4">
                            <div class="radio radio-info radio-inline">
                                <input type="radio" id="inlineRadio2" value="Fail" name="return_result">
                                <label for="inlineRadio2">Fail <small>(returned for further processing)</small></label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class=" col-md-12">
                            <label for="" class="col-sm-3 col-form-label">Confirmed By Manager QA</label>
                            <div class="col-sm-9">
                                <p>_______________________</p>
                            </div>
                            <div class="clearfix"></div>
                        <input type="submit" value="Submit" class="pull-right btn btn-info">
                        </div>
                    </div>
                </div>
            </div>
            </form>
        </div>
    </div>
</div>