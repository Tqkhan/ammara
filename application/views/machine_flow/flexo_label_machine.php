<div class=control-sidebar-bg></div>

<div id=page-wrapper>
    <div class=content>
        <div class=content-header>
            <div class=header-icon style="margin-top: -9px;">
                <i class="pe-7s-note"></i>
            </div>
            <div class=header-title>
                <h1>Batch Manufactuing Report (Flexo)</h1>
                <small></small>
                <ol class=breadcrumb>
                    <li><i class=pe-7s-home></i> Home</li>
                    <li class="active">Flexo Form</li>

                </ol>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-bd ">
                    <div class="panel-heading">
                        <div class="panel-title">
                            <h4>Flexo Form</h4>
                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <form method="post" action="">
                                <input type="hidden" name="print_id" value="">
                                <div class="col-sm-12">
                                    <div class="panel-body">
                                        <div class="form-group row">
                                            <div class="form-group col-lg-6">
                                                <label for="" class="col-sm-3 col-form-label">Date</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" id="" value="" placeholder=""  name="date">
                                                </div>
                                            </div>
                                            <div class="form-group col-lg-6">
                                                <label for="" class="col-sm-3 col-form-label">Shift</label>
                                               <div class="col-sm-9">
                                                    <div class="radio radio-info radio-inline">
                                                        <input type="radio" id="inlineRadio23" value="G" name="shift" checked="">
                                                        <label for="inlineRadio23"> G </label>
                                                    </div>
                                                    <div class="radio radio-info radio-inline">
                                                        <input type="radio" id="inlineRadio24" value="N" name="shift">
                                                        <label for="inlineRadio24"> N </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="form-group col-lg-6">
                                                <label for="" class="col-sm-3 col-form-label">W.O #</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" placeholder="" value="<?php echo $job['WO_no'] ?>" readonly name="wo_no">
                                                </div>
                                            </div>

                                            <div class="form-group col-lg-6">
                                                <label for="" class="col-sm-3 col-form-label">Job Name</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" placeholder="" value="<?php echo $job['Job_Description'] ?>"  name="job_name">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="form-group col-lg-6">
                                                <label for="" class="col-sm-3 col-form-label">Machine</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" placeholder="" value="<?php echo $job['machine_Name'] ?>"  name="machine">
                                                </div>
                                            </div>
                                            <div class="form-group col-lg-6">
                                                <label for="" class="col-sm-3 col-form-label">Planned Qty</label>
                                                <div class="col-sm-9">
                                                    <input type="number" class="form-control" placeholder="" value="<?php echo $job['Planned_qty'] ?>" name="Planned_qty">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="form-group col-lg-6">
                                                <label for="" class="col-sm-3 col-form-label">Operator</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" placeholder="" value="" name="operator" >
                                                </div>
                                            </div>
                                             <div class="col-lg-6">
                                                <label for="example-text-input" class="col-sm-3 col-form-label">Colors<span class="required">*</span></label>
                                                <div class="col-sm-9">
                                                    <div class="checkbox checkbox-info checkbox-inline">
                                                        <input type="checkbox" id="inlineCheckbox2" value="Cyan" name="colors[]"
                                                        >
                                                        <label for="inlineCheckbox2"> Cyan </label>
                                                    </div>
                                                    <div class="checkbox checkbox-info checkbox-inline">
                                                        <input type="checkbox" id="inlineCheckbox3" value="Magenta" name="colors[]"
                                                        >
                                                        <label for="inlineCheckbox3"> Magenta </label>
                                                    </div>
                                                    <div class="checkbox checkbox-info checkbox-inline">
                                                        <input type="checkbox" id="inlineCheckbox4" value="Yellow" name="colors[]"
                                                        >
                                                        <label for="inlineCheckbox4"> Yellow </label>
                                                    </div>
                                                    <div class="checkbox checkbox-info checkbox-inline">
                                                        <input type="checkbox" id="inlineCheckbox5" value="SPL1" name="colors[]"
                                                        >
                                                        <label for="inlineCheckbox5"> SPL </label>
                                                    </div>
                                                    <div class="checkbox checkbox-info checkbox-inline">
                                                        <input type="checkbox" id="inlineCheckbox6" value="SPL2" name="colors[]"
                                                        >
                                                        <label for="inlineCheckbox6"> SPL </label>
                                                    </div>
                                                    <div class="checkbox checkbox-info checkbox-inline">
                                                        <input type="checkbox" id="inlineCheckbox7" value="SPL3" name="colors[]"
                                                         >
                                                        <label for="inlineCheckbox7"> SPL </label>
                                                    </div>
                                                  
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                             <div class="form-group col-lg-6">
                                                <label for="" class="col-sm-3 col-form-label">Process</label>
                                                <div class="col-sm-9">
                                                    <select class="form-control"  name="process">
                                                        <option>Select Process</option>
                                                        <option value="Printing" >Printing</option>
                                                        <option value="Coating" >Coating</option>
                                                        <option value="Die Cutting" >Die Cutting</option>
                                                        <option value="Finishing" >Finishing</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group col-lg-6">
                                                <label for="" class="col-sm-3 col-form-label">Job</label>
                                                <div class="col-sm-9">
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <input type="number" class="form-control" placeholder=""  value="" name="job_opening">
                                                            <small>(Opening)</small>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <input type="number" class="form-control" placeholder=""  value=""  name="job_closing">
                                                            <small>(Closing)</small>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                       
                                        <div class="form-group row">
                                            <div class="form-group col-lg-6">
                                                <label for="" class="col-sm-3 col-form-label">Output</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" placeholder=""  value="" name="output">
                                                </div>
                                            </div>
                                            <div class="form-group col-lg-6">
                                                <label for="" class="col-sm-3 col-form-label">Waste</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" placeholder=""  value="" name="waste">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group row">

                                            <div class="form-group col-lg-6">
                                                <label for="" class="col-sm-3 col-form-label">Job Completed </label>
                                                <div class="col-sm-9">
                                                    <div class="radio radio-info radio-inline">
                                                        <input type="radio" id="inlineRadio7" value="Yes" name="job_completed" checked="">
                                                        <label for="inlineRadio7"> Yes </label>
                                                    </div>
                                                    <div class="radio radio-info radio-inline">
                                                        <input type="radio" id="inlineRadio8" value="No" name="job_completed">
                                                        <label for="inlineRadio8"> No </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group col-lg-6">
                                                <label for="" class="col-sm-3 col-form-label">Make Ready </label>
                                                <div class="col-sm-9">
                                                    <div class="radio radio-info radio-inline">
                                                        <input type="radio" id="inlineRadio21" value="Yes" name="make_ready" checked="">
                                                        <label for="inlineRadio21"> Yes </label>
                                                    </div>
                                                    <div class="radio radio-info radio-inline">
                                                        <input type="radio" id="inlineRadio22" value="No" name="make_ready">
                                                        <label for="inlineRadio22"> No </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                                <center><h4>Check list For Batch Manufacturing</h4></center>
                                                <hr>

                                        <div class="form-group row">

                                             <div class="form-group col-lg-6">
                                                <label for="" class="col-sm-3 col-form-label">Feeder Set </label>
                                                <div class="col-sm-9">
                                                    <div class="radio radio-info radio-inline">
                                                        <input type="radio" id="inlineRadio9" value="Yes" name="feeder_set" checked="">
                                                        <label for="inlineRadio9"> Yes </label>
                                                    </div>
                                                    <div class="radio radio-info radio-inline">
                                                        <input type="radio" id="inlineRadio10" value="No" name="feeder_set">
                                                        <label for="inlineRadio10"> No </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group col-lg-6">
                                                <label for="" class="col-sm-3 col-form-label">Delivery set</label>
                                                <div class="col-sm-9">
                                                    <div class="radio radio-info radio-inline">
                                                        <input type="radio" id="inlineRadio11" value="Yes" name="delivery_set" checked="">
                                                        <label for="inlineRadio11"> Yes </label>
                                                    </div>
                                                    <div class="radio radio-info radio-inline">
                                                        <input type="radio" id="inlineRadio12" value="No" name="delivery_set">
                                                        <label for="inlineRadio12"> No </label>
                                                    </div>
                                                </div>
                                            </div>
                                            

                                        </div>
                                        <div class="form-group row">
                                            <div class="form-group col-lg-6">
                                                <label for="" class="col-sm-3 col-form-label">Rotary Set </label>
                                                <div class="col-sm-9">
                                                    <div class="radio radio-info radio-inline">
                                                        <input type="radio" id="inlineRadio13" value="Yes" name="rotary_set" checked="">
                                                        <label for="inlineRadio13"> Yes </label>
                                                    </div>
                                                    <div class="radio radio-info radio-inline">
                                                        <input type="radio" id="inlineRadio14" value="No" name="rotary_set">
                                                        <label for="inlineRadio14"> No </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group col-lg-6">
                                                <label for="" class="col-sm-3 col-form-label">Cylinder Set </label>
                                                <div class="col-sm-9">
                                                    <div class="radio radio-info radio-inline">
                                                        <input type="radio" id="inlineRadio15" value="Yes" name="cylinder_set" checked="">
                                                        <label for="inlineRadio15"> Yes </label>
                                                    </div>
                                                    <div class="radio radio-info radio-inline">
                                                        <input type="radio" id="inlineRadio16" value="No" name="cylinder_set">
                                                        <label for="inlineRadio16"> No </label>
                                                    </div>
                                                </div>
                                            </div>
                                            

                                        </div>
                                        <div class="form-group row">
                                            <div class="form-group col-lg-6">
                                                <label for="" class="col-sm-3 col-form-label">Impression set </label>
                                                <div class="col-sm-9">
                                                    <div class="radio radio-info radio-inline">
                                                        <input type="radio" id="inlineRadio17" value="Yes" name="impression_set" checked="">
                                                        <label for="inlineRadio17"> Yes </label>
                                                    </div>
                                                    <div class="radio radio-info radio-inline">
                                                        <input type="radio" id="inlineRadio18" value="No" name="impression_set">
                                                        <label for="inlineRadio18"> No </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group col-lg-6">
                                                <label for="" class="col-sm-3 col-form-label">Plate Set </label>
                                                <div class="col-sm-9">
                                                    <div class="radio radio-info radio-inline">
                                                        <input type="radio" id="inlineRadio95" value="Yes" name="plate_set" checked="">
                                                        <label for="inlineRadio95"> Yes </label>
                                                    </div>
                                                    <div class="radio radio-info radio-inline">
                                                        <input type="radio" id="inlineRadio96" value="No" name="plate_set">
                                                        <label for="inlineRadio96"> No </label>
                                                    </div>
                                                </div>
                                            </div>
                                            

                                        </div>
                                        <div class="form-group row">

                                            <div class="form-group col-lg-6">
                                                <label for="" class="col-sm-3 col-form-label">Doctor blade cleaning</label>
                                                <div class="col-sm-9">
                                                    <div class="radio radio-info radio-inline">
                                                        <input type="radio" id="inlineRadio97" value="Yes" name="doctor_blade_cleaning" checked="">
                                                        <label for="inlineRadio97"> Yes </label>
                                                    </div>
                                                    <div class="radio radio-info radio-inline">
                                                        <input type="radio" id="inlineRadio98" value="No" name="doctor_blade_cleaning">
                                                        <label for="inlineRadio98"> No </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                            <div class="" id='TextBoxesGroup'>
                                            <div class="form-group row">
                                                <div class="form-group col-lg-6">
                                                    <label for="" class="col-sm-4">Code</label>
                                                    <div class="col-sm-8">
                                                        <!-- <input type="text" class="form-control" data-id="" name="code[]" id="code1" placeholder=""> -->
                                                        <select class="form-control" name="code[]" id="code1">
                                                            <option value="">Select</option>
                                                            <option value="Cleaning Plate">Cleaning Plate</option>
                                                            <option value="Plate Spoiling">Plate Spoiling</option>
                                                            <option value="Waiting">Waiting</option>
                                                            <option value="setting W/B">setting W/B</option>
                                                            <option value="Wash-up Rollers">Wash-up Rollers</option>
                                                            <option value="Power Failure">Power Failure</option>
                                                            <option value="Lunch/Dinner">Lunch/Dinner</option>
                                                            <option value="Wash-up Dampening">Wash-up Dampening</option>
                                                            <option value="Wavy Board">Wavy Board</option>
                                                            <option value="Text Reading">Text Reading</option>
                                                            <option value="Machine Cleaning">Machine Cleaning</option>
                                                            <option value="WB Blanket Cut">WB Blanket Cut</option>
                                                            <option value="Make Ready">Make Ready</option>
                                                            <option value="Plate Correction">Plate Correction</option>
                                                            <option value="Any other">Any other</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group col-lg-6">
                                                    <label for="" class="col-sm-4">From</label>
                                                    <div class="col-sm-8">
                                                        <input type="time" class="form-control" data-id="" name="from[]" id="form1" placeholder="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="form-group col-lg-6">
                                                    <label for="" class="col-sm-4">To</label>
                                                    <div class="col-sm-8">
                                                        <input type="time" class="form-control" data-id="" name="to[]" id="to1" placeholder="">
                                                    </div>
                                                </div>
                                                <div class="form-group col-lg-6">
                                                    <label for="" class="col-sm-4">Hours</label>
                                                    <div class="col-sm-8">

                                                        <select class="form-control" id="hours1" data-id="" name="hours[]" autocomplete="off">
                                                        <option>Pelease Select</option>
                                                        <option value="9 am/pm">9 am/pm</option>
                                                        <option value="10 am/pm">10 am/pm</option>
                                                        <option value="11 am/pm">11 am/pm</option>
                                                        <option value="12 am/pm">12 am/pm</option>
                                                        <option value="1 am/pm">1 am/pm</option>
                                                        <option value="2 am/pm">2 am/pm</option>
                                                        <option value="3 am/pm">3 am/pm</option>
                                                        <option value="4 am/pm">4 am/pm</option>
                                                        <option value="5 am/pm">5 am/pm</option>
                                                        <option value="6 am/pm">6 am/pm</option>
                                                        <option value="7 am/pm">7 am/pm</option>
                                                        <option value="8 am/pm">8 am/pm</option>
                                                        <option value="9 am/pm">9 am/pm</option>
                                                    </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="form-group col-lg-6">
                                                    <label for="" class="col-sm-4">Counter</label>
                                                    <div class="col-sm-8">
                                                        <input type="text" class="form-control" data-id="" name="counter[]" id="counter1" placeholder="">
                                                    </div>
                                                </div>
                                                <div class="form-group col-lg-6">
                                                    <label for="" class="col-sm-4">Remarks</label>
                                                    <div class="col-sm-8">
                                                        <input type="text" class="form-control" data-id="" name="remarks[]" id="remarks1" placeholder="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <input type='button' class="btn btn-success pull-right " value='Add Button' id='addButton'>
                                        </div>
                                        <div class="form-group row">
                                            <div class="form-group col-lg-12">
                                                <div class="table-responsive ">
                                                    <table class="table table-striped table table-bordered table-hover" id='Tableadd'>
                                                        <thead>
                                                            <tr>
                                                                <th>
                                                                    <center>Code</center>
                                                                </th>
                                                                <th>
                                                                    <center>Form</center>
                                                                </th>
                                                                <th>
                                                                    <center>To</center>
                                                                </th>
                                                                <th>
                                                                    <center>Hours</center>
                                                                </th>
                                                                <th>
                                                                    <center>Counter</center>
                                                                </th>
                                                                <th>
                                                                    <center>Remarks</center>
                                                                </th>
                                                            </tr>
                                                        </thead>
                                                        <tbody class="append-education">
                                                            <tr>
                                                                <td>
                                                                    <e class="code1_value"></e>
                                                                </td>
                                                                <td>
                                                                    <e class="form1_value"></e>
                                                                </td>
                                                                <td>
                                                                    <e class="to1_value"></e>
                                                                </td>
                                                                <td>
                                                                    <e class="hours1_value"></e>
                                                                </td>
                                                                <td>
                                                                    <e class="counter1_value"></e>
                                                                </td>
                                                                <td>
                                                                    <e class="remarks1_value"></e>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
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
    </div>
    <!-- /.main content -->
</div>
<script type="text/javascript">
    $(document).ready(function() {
        var counter = 2;
        $("#addButton").click(function() {
            var newtableadd = $(document.createElement('tr'))
                .attr("id", 'tableadd' + counter);
            newtableadd.after().html('<table><tbody class="append-education"><tr><td>' +
                '<e class="code' + counter +
                '_value"></e></td><td>' +
                '<e class="from' + counter +
                '_value"></e></td><td>' +
                '<e class="to' + counter +
                '_value"></e></td><td>' +
                '<e class="hours' + counter +
                '_value"></e></td><td>' +
                '<e class="counter' + counter +
                '_value"></e></td><td>' +
                '<e class="remarks' + counter +
                '_value"></e></td></tr></tbody></table>');
            newtableadd.appendTo("#Tableadd");
            counter++;
        });
    });
</script>
<script type="text/javascript">
    $(document).ready(function() {
        var counter = 2;
        $("#addButton").click(function() {
            var newTextBoxDiv = $(document.createElement('div'))
                .attr("id", 'TextBoxDiv' + counter);
            newTextBoxDiv.after().html('<hr><div class="form-group row"><div class="form-group col-lg-6"><label class="col-sm-4" >Code </label> <div class="col-sm-8">' +
                '<select class="form-control" name="code[]" id="code' + counter + '"><option value="">Select</option><option value="Cleaning Plate">Cleaning Plate</option><option value="Plate Spoiling">Plate Spoiling</option><option value="Waiting">Waiting</option><option value="setting W/B">setting W/B</option><option value="Wash-up Rollers">Wash-up Rollers</option><option value="Power Failure">Power Failure</option><option value="Lunch/Dinner">Lunch/Dinner</option><option value="Wash-up Dampening">Wash-up Dampening</option><option value="Wavy Board">Wavy Board</option><option value="Text Reading">Text Reading</option><option value="Machine Cleaning">Machine Cleaning</option><option value="WB Blanket Cut">WB Blanket Cut</option><option value="Make Ready">Make Ready</option><option value="Plate Correction">Plate Correction</option><option value="Any other">Any other</option></select></div></div><div class="form-group col-lg-6"><label class="col-sm-4" >From </label> <div class="col-sm-8">' +
                '<input type="time" class="form-control" name="from[]" id="from' + counter + '" value="" ></div></div></div><div class="form-group row"><div class="form-group col-lg-6"><label class="col-sm-4" >To </label> <div class="col-sm-8">' +
                '<input type="time" class="form-control" name="to[]" id="to' + counter + '" value="" ></div></div><div class="form-group col-lg-6"><label class="col-sm-4" >Hours </label> <div class="col-sm-8">' +
                '<select class="form-control" name="hours[]" id="hours' + counter + '" autocomplete="off"><option>Pelease Select</option><option value="9 am/pm">9 am/pm</option><option value="10 am/pm">10 am/pm</option><option value="11 am/pm">11 am/pm</option><option value="12 am/pm">12 am/pm</option><option value="1 am/pm">1 am/pm</option><option value="2 am/pm">2 am/pm</option><option value="3 am/pm">3 am/pm</option><option value="4 am/pm">4 am/pm</option><option value="5 am/pm">5 am/pm</option><option value="6 am/pm">6 am/pm</option><option value="7 am/pm">7 am/pm</option><option value="8 am/pm">8 am/pm</option><option value="9 am/pm">9 am/pm</option></select></div></div></div><div class="form-group row"><div class="form-group col-lg-6"><label class="col-sm-4" >Counter </label> <div class="col-sm-8">' +
                '<input type="text" class="form-control" name="counter[]" id="counter' + counter + '" value="" ></div></div><div class="form-group col-lg-6"><label class="col-sm-4" >Remarks </label> <div class="col-sm-8">' +
                '<input type="text" class="form-control" name="remarks[]" id="remarks' + counter + '" value="" ></div></div></div>');
            newTextBoxDiv.appendTo("#TextBoxesGroup");
            counter++;
        });
    });
</script>

<script type="text/javascript">
    $(document).ready(function() {
        $("body").on("click", ".add-k", function() {
            var html = $(".after-add-k").first().clone();
            $(html).find(".del").html("<a class='btn btn-danger remove'><i class='fa fa-trash-o' aria-hidden='true'></i> </a> " + ' <a class="btn btn-success add-k"><strong> + </strong> </a>');
            $(".after-add-k").last().after(html);
            $(".after-add-k").last().find('input').not('input[type="radio"]').val('')
            var con = 0;
            $('.select-multi').each(function() {
                $(this).find('input.city-zin').attr('data-id', 'privious_citizen' + con)
                $(this).find('#inlineRadio').attr('id', 'inlineRadio' + con)
                con++
            })
        });
        $("body").on("click", ".remove", function() {
            $(this).parents(".after-add-k").remove();
        });
        $('body').on('keyup', 'input', function() {
            var id = $(this).attr('id')
            $('.' + id + '_value').text($(this).val())
        })
        $('body').on('change', 'input', function() {
            var id = $(this).attr('id')
            $('.' + id + '_value').text($(this).val())
        })
        $('input').not('input[type="radio"],input[type="checkbox"]').change(function() {
            var id = $(this).attr('id')
            $('.' + id + '_value').text($(this).val())
        })
        $('body').on('change', 'select', function() {
            var id = $(this).attr('id')
            $('.' + id + '_value').text($(this).val())
        })
        $('input[type="radio"]').click(function() {
            var id = $(this).attr('data-id')
            if ($(this).val() == '1') {
                $('.' + id + '_value').text("Yes")
            } else if ($(this).val() == '0') {
                $('.' + id + '_value').text("No")
            } else {
                $('.' + id + '_value').text($(this).val())
            }
        })
        $('input[type="checkbox"]').click(function() {
            var id = $(this).attr('data-id')
            if ($(this).val() == '1') {
                $('.' + id + '_value').text("Yes")
            } else if ($(this).val() == '0') {
                $('.' + id + '_value').text("No")
            } else {
                $('.' + id + '_value').text($(this).val())
            }
        })
    });
</script>