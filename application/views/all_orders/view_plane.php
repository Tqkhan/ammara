<?php error_reporting(0) ?>

<!-- /.Navbar  Static Side -->
<div class="control-sidebar-bg"></div>
<!-- Page Content -->
<div id="page-wrapper">
    <!-- main content -->
    <div class="content print-div_all">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="header-icon">
                <i class="pe-7s-note2"></i>
            </div>
            <div class="header-title">
                <h1>View Orders Detail</h1>
                <small></small>
                <ol class="breadcrumb">
                    <li><a href="<?php echo base_url() ?>"><i class="pe-7s-home"></i> Home</a></li>
                    <li class="active">View Orders Detail</li>
                </ol>
            </div>
        </div>
        <!-- /. Content Header (Page header) -->
        <!-- work order -->
        

        <!-- prodcution Plane -->
        <?php 
            if (isset($work_orders)) {
        ?>
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-bd print-div_work_order table_one">
                    <div class="panel-heading">
                        <div class="panel-title">
                            <h4 class="product-totle">View Work Order Form</h4><br>    
                           
                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <form>
                                <div class="col-sm-12">
                                    <div class="panel-body ">
                                        <table class="minimalistBlack" style="width: 100%;">
                                       
                                       
                                        <tbody>
                                        <tr>
                                            <td>Client : <u><?php 
                                        foreach ($clients as $c) {
                                            $checked = '';
                                            if ($work_orders["Client"] == $c['id']) {
                                                $checked = 'selected';
                                            echo '<span  '.$checked.'>'.$c['client_Name'].'</span>';
                                            }
                                        }
                                    ?></u></td>
                                            <td>Item Code : <u><?php 
                                        foreach ($item as $i) {
                                            $checked = '';
                                            if ($work_orders["Item_Code"] == $i['id']) {
                                                $checked = 'selected';
                                            echo '<span value="'.$i['id'].'" '.$checked.'>'.$i['Item_Code'].'</span>';
                                            }
                                        }
                                    ?></u></td>
                                            <td>Quantity : <u><?php echo $work_orders["quantity"] ?></u></td>
                                           
                                            
                                           
                                        </tr>
                                        <tr>
                                           
                                            <td colspan="2">PO No : <u><?php echo $work_orders["PO_No"] ?></u></td>
                                            <td colspan="">PO Date : <u><?php echo $work_orders["PO_Date"] ?></u></td>
                                            
                                           
                                        </tr>
                                        <tr>
                                            <td>Batch No : <u><?php echo $work_orders["Batch_No"] ?></u></td>
                                            <td colspan="2">Delivery Date : <u><?php echo $work_orders["Delivery_Date"] ?></u></td>
                                        </tr>
                                        <tr>
                                            <td>Delivery Status : <u><?php echo $work_orders["Delivery_Status"] ?></u></td>
                                            <td colspan="">Instruction Remarks : <u><?php echo $work_orders["status"] ?></u></td>
                                            <td colspan="">Status : <u><?php echo $work_orders["status"] ?></u></td>
                                            
                                        </tr> 
                                      
                                        
                                        
                                        </table>
                                       
                                    <div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
                        <button id="btn" class="print-btn_work_order btn btn-info pull-right" role="button">Generate Print</button><br><br><br>
                            <?php } ?>
       <?php 
            if (isset($production_plan)) {
        ?>
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-bd print-div_view_production_plan table_one">
                    <div class="panel-heading">
                        <div class="panel-title">
                            <h4 class="product-totle">View Production Plan Form</h4><br>    
                            <small class="product-tital">DOC NO: PRD/FM/001-02A     REV# 00     Date:<?php echo date('d-m-Y',strtotime($production_plan["Date"])) ?></small>
                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <form>
                                <div class="col-sm-12">
                                    <div class="panel-body ">
                                        <table class="minimalistBlack" style="width: 100%;">
                                       
                                       
                                        <tbody>
                                        <tr>
                                            <td>Date : <u><?php echo date('d M Y',strtotime($production_plan["Date"])) ?></u></td>
                                            <td>W.O # : <u><?php echo $production_plan["WO_no"] ?></u></td>
                                            <td>MIS No : <u><?php echo $production_plan["MIS_no"] ?></u></td>
                                           
                                            
                                           
                                        </tr>
                                        <tr>
                                           
                                            <td colspan="3">Job Description : <u><?php echo $production_plan["Job_Description"] ?></u></td>
                                            
                                           
                                        </tr>
                                        <tr>
                                            <td>Board Name : <u><?php echo $production_plan["Board_Name"] ?></u></td>
                                            <td colspan="2">GSM : <u><?php echo $production_plan["Gsm"] ?></u></td>
                                        </tr>
                                        <tr>
                                            <td>Board Size : <u><?php echo $production_plan["Board_Size"] ?></u></td>
                                            <td colspan="2">Conversion : <u><?php echo $production_plan["Conversion"] ?></u></td>
                                            
                                        </tr> 
                                        <tr>
                                            <td>PO Qty : <u><?php echo $production_plan["PO_Qty"] ?></u></td>
                                            <td colspan="2">Planned Qty(sheets) : <u><?php echo $production_plan["Planned_qty_sheets"] ?></u></td>
                                            
                                        </tr>
                                        <tr>
                                            <td>Ups : <u><?php echo $production_plan["Ups"] ?></u></td>
                                            <td colspan="2">Planned Qty : <u><?php echo $production_plan["Planned_qty"] ?></u></td>
                                            
                                        </tr> 
                                        <?php 
                                            foreach ($plan_flows as $p) {
                                        ?>
                                        <tr>
                                            <td><?php echo $p['Name'] ?> Machine : <u><?php echo $p['machine_Name'] ?></u></td>
                                            <td colspan="2">Planned Date : <u><?php echo date("d M Y", strtotime($p['start_date'])) ?></u></td>
                                        </tr>
                                        
                                        <tr>
                                            <td colspan="3">Incharge <?php echo $p['Name'] ?> : ______________</td>
                                            
                                        </tr>
                                        <?php } ?>
                                         
                                        
                                        
                                        </table>
                                        <br>
                                         <div class="form-group row">
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                <address>
                                                   <label for="example-text-input" class="col-sm-4">Production incharge</small> :</label>
                                                    <e class="aks_value">__________________</e>
                                                    <br>
                                                </address>
                                            </div>
                                           
                                            
                                        </div>
                                    <div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
                        <button id="btn" class="print-btn_view_production_plan btn btn-info pull-right" role="button">Generate Print</button><br><br><br>
        <?php } ?>
        <!-- cutting -->
        <?php 
            if (isset($cutting_data)) {
        ?>
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-bd print-div_view_cutting table_one">
                    <div class="panel-heading">
                        <div class="panel-title">
                          <h4 class="product-totle">BATCH MANUFACTURING REPORT <small>(Cutting)</small></h4><br>
                            <small class="product-tital">DOC NO: PRD/FM/001-02A     REV# 00     Date:<?php echo date('d-m-Y', strtotime($cutting_data['created_at'])) ?></small>
                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <form>
                                <div class="col-sm-12">
                                    <div class="panel-body">
                                        <table class="minimalistBlack" style="width: 100%;">
                                       
                                       
                                        <tbody>
                                        <tr>
                                            <td>Date :<u><?php echo date('d M Y', strtotime($cutting_data['created_at'])) ?></u></td>
                                            <td colspan="2">Shift : <div class="radio radio-inline">
                                                        <input type="radio" id="inlineradio1" value="option1">
                                                        <label for="inlineradio1"> G </label>
                                                    </div></e><e class="aks_value"><div style="margin-left: 11px;" class="radio radio-inline">
                                                        <input type="radio" id="inlineradio2" value="option2">
                                                        <label for="inlineradio2"> N </label>
                                                    </div></td>
                                            
                                           
                                        </tr>
                                        <tr>
                                            <td>W.O # : <u><?php echo $cutting_job['WO_no'] ?></u></td>
                                            <td colspan="2">Job Name : <u><?php echo $cutting_job['Job_Description'] ?></u></td>
                                            
                                           
                                        </tr>
                                        <tr>
                                            <td>Machine : <u><?php echo $cutting_job['machine_Name'] ?></u></td>
                                            <td>P.O. No. : <u><?php echo $cutting_job['PO_No'] ?></u></td>
                                            <td>Planned Qty : <u><?php echo $cutting_job['Planned_qty'] ?></u></td>
                                        </tr>
                                        <tr>
                                            <td>Operator : <u><?php echo $cutting_data['operator'] ?></u></td>
                                            <td colspan="2">Assistant : <u><?php echo $cutting_data['assistant'] ?></u></td>
                                            
                                        </tr>
                                        <tr>
                                            <td>Board Name : <u><?php echo $cutting_job['type'] ?></u></td>
                                            <td colspan="2">Gsm : <u><?php echo $cutting_job['gsm'] ?></u></td>
                                            
                                        </tr> 
                                        <tr>
                                            <td>Board size : <u><?php echo $cutting_job['size'] ?></u></td>
                                            <td >Quantity : <u><?php echo $cutting_data['quantity'] ?></u></td>
                                            <td >Conversion : <u><?php echo $cutting_data['conversion'] ?></u></td>
                                            
                                        </tr> 
                                        <tr>
                                            <td>Machine Cleaning : <div class="radio radio-inline">
                                                        <input type="radio" disabled="" id="inlineradio3" value="Yes" name="cleaning" <?php if($cutting_data['cleaning'] == 'Yes') echo 'checked' ?>>
                                                        <label for="inlineradio3"> Yes </label>
                                                    </div></e><e class="aks_value"><div style="margin-left: 11px;" class="radio radio-inline">
                                                        <input type="radio" disabled="" id="inlineradio4" value="No" name="cleaning" <?php if($cutting_data['cleaning'] == 'No') echo 'checked' ?>>
                                                        <label for="inlineradio4"> No </label>
                                                    </div></td>
                                            <td colspan="2">Size set : <div class="radio radio-inline">
                                                        <input type="radio" disabled="" id="inlineradio5" value="Yes" name="size" <?php if($cutting_data['size'] == 'Yes') echo 'checked' ?>>
                                                        <label for="inlineradio5"> Yes </label>
                                                    </div></e><e class="aks_value"><div style="margin-left: 11px;" class="radio radio-inline">
                                                        <input type="radio" disabled="" id="inlineradio6" value="No" name="size" <?php if($cutting_data['size'] == 'No') echo 'checked' ?>>
                                                        <label for="inlineradio6"> No </label>
                                                    </div></td>
                                            
                                        </tr> 
                                        <tr>
                                            <td>Start time : <u><?php echo $cutting_job['start_date'] ?></u></td>
                                            <td>End time : <u><?php echo $cutting_job['end_date'] ?></u></td>
                                            <td>Total Production : <u><?php echo $cutting_data['production'] ?></u></td>
                                            
                                        </tr>
                                        <tr>
                                            <td colspan="3">Remarks : <u><?php echo $cutting_data['remarks'] ?></u></td>
                                            
                                        </tr>
                                        
                                        </table>
                                        <br>


                                        <?php if (isset($inprocess_inspection_cutting)) { ?>
                                           <div class="form-group row">
                                               <div class="form-group col-lg-12">
                                                   <table class="minimalistBlack" style="width: 100%;">
                                                       <tr>
                                                           <td colspan="9"><center>Checking Parameters For Board &amp; Paper Cutting</center></td>
                                                           <td rowspan="2">Remarks</td>
                                                       </tr>
                                                       <tr>
                                                           <td colspan="1">W.O No</td>
                                                           <td colspan="1">Machine</td>
                                                           <td colspan="1">Time</td>
                                                           <td colspan="1">Material</td>
                                                           <td colspan="1">GSM</td>
                                                           <td colspan="1">Size</td>
                                                           <td colspan="1"> Cut Mark</td>
                                                           <td colspan="1">Edges</td>
                                                           <td colspan="1">Stain</td>
                                                       </tr>
                                                       <tbody>
                                                            <?php 
                                                                foreach ($inprocess_inspection_cutting as $iic) {
                                                            ?>
                                                               <tr>
                                                                   <td>
                                                                       <?php  echo $iic['wo_no']; ?>
                                                                   </td>
                                                                   <td>
                                                                       <?php  echo $iic['machine']; ?>
                                                                   </td>
                                                                   <td>
                                                                       <?php  echo $iic['time']; ?>
                                                                   </td>
                                                                   <td>
                                                                       <?php  echo $iic['material']; ?>
                                                                   </td>
                                                                   <td>
                                                                       <?php  echo $iic['gsm']; ?> 
                                                                   </td>
                                                                   <td>
                                                                       <?php  echo $iic['size']; ?>
                                                                   </td>
                                                                   <td>
                                                                       <?php  echo $iic['cut_marks']; ?> 
                                                                   </td>
                                                                   <td>
                                                                       <?php  echo $iic['edges']; ?> 
                                                                   </td>
                                                                   <td>
                                                                       <?php  echo $iic['stain']; ?> 
                                                                   </td>
                                                                   <td>
                                                                       <?php  echo $iic['remarks']; ?> 
                                                                   </td>
                                                               </tr>
                                                            <?php }  ?>
                                                       </tbody>
                                                   </table>
                                               </div>
                                           </div>   
                                        <?php } ?>
                                        <br>
                                        <div class="form-group row">
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                <address>
                                                   <label for="example-text-input" class="col-sm-4">Prepared By <small>(Operator)</small> :</label>
                                                    <e class="aks_value">__________________</e>
                                                    <br>
                                                </address>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                <address>
                                                   <label for="example-text-input" class="col-sm-4">Examined By <small>(Incharge)</small> :</label>
                                                    <e class="aks_value">__________________</e>
                                                    <br>
                                                </address>
                                            </div>
                                            
                                        </div>

                                        <div>
                                           
                                        </div>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
                        <button id="btn" class="print-btn_view_cutting btn btn-info pull-right" role="button">Generate Print</button></br></br>
        </div>
        <?php } ?>
        <!-- die cutting -->
        <?php 
            if (isset($die_cutting)) {
        ?>
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-bd print-div_view_die_cutting table_one">
                    <div class="panel-heading">
                        <div class="panel-title">
                          <h4 class="product-totle">BATCH MANUFACTURING REPORT <small>(Die Cutting)</small></h4><br>
                            <small class="product-tital">DOC NO: PRD/FM/001-02A     REV# 00     Date:<?php echo date('d-m-Y', strtotime($die_cutting['created_at'])) ?></small>
                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <form>
                                <div class="col-sm-12">
                                    <div class="panel-body">
                                        <table class="minimalistBlack" style="width: 100%;">
                                       
                                       
                                        <tbody>
                                        <tr>
                                            <td>Date : <u><?php echo date('d M Y', strtotime($die_cutting['created_at'])) ?></u></td>
                                            <td colspan="2">Shift : <div class="radio radio-inline">
                                                        <input type="radio" disabled="" id="inlineradio1" value="option1">
                                                        <label for="inlineradio1"> G </label>
                                                    </div></e><e class="aks_value"><div style="margin-left: 11px;" class="radio radio-inline">
                                                        <input type="radio" disabled="" id="inlineradio2" value="option2">
                                                        <label for="inlineradio2"> N </label>
                                                    </div></td>
                                            
                                           
                                        </tr>
                                        <tr>
                                            <td>W.O # : <u><?php echo $die_cutting_job['WO_no'] ?></u></td>
                                            <td colspan="2">Job Name : <u><?php echo $die_cutting_job['Job_Description'] ?></u></td>
                                            
                                           
                                        </tr>
                                        <tr>
                                            <td>Machine : <u><?php echo $die_cutting_job['machine_Name'] ?></u></td>
                                            <td>P.O. No. : <u><?php echo $die_cutting_job['PO_No'] ?></u></td>
                                            <td>Planned Qty : <u><?php echo $die_cutting_job['Planned_qty'] ?></td>
                                        </tr>
                                        <tr>
                                            <td>Operator : <u><?php echo $die_cutting['operator'] ?></u></td>
                                            <td colspan="2">Assistant : <u><?php echo $die_cutting['assistant'] ?></u></td>
                                            
                                        </tr>
                                        <tr>
                                            <td colspan="3">Process : <div class="radio radio-inline">
                                                        <input type="radio" disabled=""  id="inlineradio3" name="process" value="Cutting" <?php if($die_cutting['process'] == 'Cutting') echo 'checked' ?>>
                                                        <label for="inlineradio3"> Cutting </label>
                                                    </div></e><e class="aks_value"><div style="margin-left: 11px;" class="radio radio-inline">
                                                        <input type="radio" disabled="" id="inlineradio4" name="process" value="Embossing" <?php if($die_cutting['process'] == 'Embossing') echo 'checked' ?>>
                                                        <label for="inlineradio4"> Embossing </label>
                                                    </div></td>
                                           
                                            
                                        </tr> 
                                        <tr>
                                            <td>Job Counter <small>Opening</small> : <u><?php echo $die_cutting['opening'] ?></u></td>
                                            <td>Job Counter <small>Closing</small> : <u><?php echo $die_cutting['closing'] ?></u></td>
                                            <td>Job Counter <small>Waste</small> : <u><?php echo $die_cutting['waste'] ?></u></td>
                                           
                                            
                                        </tr> 
                                        <tr>
                                            <td>Make Ready : <div class="radio radio-inline">
                                                        <input type="radio" disabled="" id="inlineradio5" value="Yes" name="ready" <?php if($die_cutting_complete['ready'] == 'Yes') echo 'checked' ?>>
                                                        <label for="inlineradio5"> Yes </label>
                                                    </div></e><e class="aks_value"><div style="margin-left: 11px;" class="radio radio-inline">
                                                        <input type="radio" disabled="" id="inlineradio6" value="No" name="ready" <?php if($die_cutting_complete['ready'] == 'No') echo 'checked' ?>>
                                                        <label for="inlineradio6"> No </label>
                                                    </div></td>
                                            <td colspan="2">Job Completed : <div class="radio radio-inline">
                                                        <input type="radio" disabled="" id="inlineradio7" value="Yes" name="completed" <?php if($die_cutting_complete['completed'] == 'Yes') echo 'checked' ?>>
                                                        <label for="inlineradio7"> Yes </label>
                                                    </div></e><e class="aks_value"><div style="margin-left: 11px;" class="radio radio-inline">
                                                        <input type="radio" disabled="" id="inlineradio8" value="No" name="completed" <?php if($die_cutting_complete['completed'] == 'No') echo 'checked' ?>>
                                                        <label for="inlineradio8"> No </label>
                                                    </div></td>
                                            
                                            
                                        </tr> 
                                        <tr>
                                            <td>Feeder Set : <div class="radio radio-inline">
                                                        <input type="radio" disabled="" id="inlineradio9" value="Yes" name="feeder" <?php if($die_cutting_complete['feeder'] == 'Yes') echo 'checked' ?>>
                                                        <label for="inlineradio9"> Yes </label>
                                                    </div></e><e class="aks_value"><div style="margin-left: 11px;" class="radio radio-inline">
                                                        <input type="radio" disabled="" id="inlineradio10" value="No" name="feeder" <?php if($die_cutting_complete['feeder'] == 'No') echo 'checked' ?>>
                                                        <label for="inlineradio10"> No </label>
                                                    </div></td>
                                            <td colspan="2">Die set : <div class="radio radio-inline">
                                                        <input type="radio" disabled="" id="inlineradio11" value="Yes" name="die" <?php if($die_cutting_complete['die'] == 'Yes') echo 'checked' ?>>
                                                        <label for="inlineradio11"> Yes </label>
                                                    </div></e><e class="aks_value"><div style="margin-left: 11px;" class="radio radio-inline">
                                                        <input type="radio" disabled="" id="inlineradio12" value="No" name="die" <?php if($die_cutting_complete['die'] == 'No') echo 'checked' ?>>
                                                        <label for="inlineradio12"> No </label>
                                                    </div></td>
                                            
                                        </tr> 
                                        <tr>
                                            <td>Delivery set : <div class="radio radio-inline">
                                                        <input type="radio" disabled="" id="inlineradio13" value="Yes" name="delivery" <?php if($die_cutting_complete['delivery'] == 'Yes') echo 'checked' ?>>
                                                        <label for="inlineradio13"> Yes </label>
                                                    </div></e><e class="aks_value"><div style="margin-left: 11px;" class="radio radio-inline">
                                                        <input type="radio" disabled="" id="inlineradio14" value="No" name="delivery" <?php if($die_cutting_complete['delivery'] == 'No') echo 'checked' ?>>
                                                        <label for="inlineradio14"> No </label>
                                                    </div></td>
                                            <td colspan="2">Plate set : <div class="radio radio-inline">
                                                        <input type="radio" disabled="" id="inlineradio15" value="Yes" name="plate" <?php if($die_cutting_complete['plate'] == 'Yes') echo 'checked' ?>>
                                                        <label for="inlineradio15"> Yes </label>
                                                    </div></e><e class="aks_value"><div style="margin-left: 11px;" class="radio radio-inline">
                                                        <input type="radio" disabled="" id="inlineradio6" value="No" name="plate" <?php if($die_cutting_complete['plate'] == 'No') echo 'checked' ?>>
                                                        <label for="inlineradio16"> No </label>
                                                    </div></td>
                                            
                                        </tr> 
                                        
                                        <tr>
                                            <td colspan="3">Remarks : ______________________________________________________</td>
                                            
                                        </tr>
                                        
                                        </table>
                                        <br>
                                        <table class="table table-bordered table-hover" cellpadding="10" style="width: 100%;">
                                            <thead>
                                                <tr>
                                                    <th rowspan="2"><center>Code</center></th>
                                                    <th colspan="3"><center>Time</center></th>
                                                    <th rowspan="2"><center>Counter</center></th>
                                                    <th rowspan="2"><center>Remarks</center></th>
                                                    
                                                    
                                                </tr>
                                                <tr>
                                                    <th><center>From</center></th>
                                                    <th><center>To</center></th>
                                                    <th><center>Hours</center></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php 
                                                    foreach ($die_cutting_hourse as $d) {
                                                ?>
                                                <tr>
                                                    <th><?php echo $d['code'] ?></th>
                                                    <td><?php echo $d['froms'] ?></td>
                                                    <td><?php echo $d['tos'] ?></td>
                                                    <td><?php echo $d['hours'] ?></td>
                                                    <td><?php echo $d['counter'] ?></td>
                                                    <td><?php echo $d['remarks'] ?></td>
                                                </tr>
                                                <?php } ?>
                                            </tbody>
                                        </table>
                                        <br>


<?php if (isset($inprocess_inspection_die_cutting)) { ?>
   <div class="form-group row">
       <div class="form-group col-lg-12">
           <table class="minimalistBlack" style="width: 100%;">
               <tr>
                    <th colspan="11"><center>Die Cutting Checking Parameters</center></th>
                    <th rowspan="2">Remarks</th>
                </tr>
                <tr>
                    <th colspan="1">W.O No</th>
                    <th colspan="1">Machine</th>
                    <th colspan="1">Time</th>
                    <th colspan="1">Position</th>
                    <th colspan="1">Cutting</th>
                    <th colspan="1">Creasing</th>
                    <th colspan="1">Bead</th>
                    <th colspan="1">Perforation</th>
                    <th colspan="1">Ear lock</th>
                    <th colspan="1">Pasting Fold</th>
                    <th colspan="1">Embose</th>
                </tr>
               <tbody>
                    <?php 
                        foreach ($inprocess_inspection_die_cutting as $dc) {
                    ?>
                       <tr>
                            <td>
                                <?php echo $dc['wo_no']; ?>
                            </td>
                            <td>
                                <?php echo $dc['machine']; ?>
                            </td>
                            <td>
                                <?php echo $dc['time']; ?>
                            </td>
                            <td>
                                <?php echo $dc['position']; ?>
                            </td>
                            <td>
                                <?php echo $dc['cutting']; ?>
                            </td>
                            <td>
                                <?php echo $dc['creasing']; ?>
                            </td>
                            <td>
                                <?php echo $dc['bead']; ?>
                            </td>
                            <td>
                                <?php echo $dc['perforation']; ?>
                            </td>
                            <td>
                                <?php echo $dc['ear_lock']; ?>
                            </td>
                            <td>
                                <?php echo $dc['pasting_fold']; ?>
                            </td>
                            <td>
                                <?php echo $dc['embose']; ?>
                            </td>
                            <td>
                                <?php echo $dc['remarks']; ?>
                            </td>
                            
                        </tr>
                    <?php }  ?>
               </tbody>
           </table>
       </div>
   </div>   
<?php } ?>
                                        <br>
                                        <div class="form-group row">
                                            <table class="minimalistBlack" style="width: 100%;">
                                                <tbody>
                                                    <tr>
                                            <td colspan="">Prepared By <small>(Operator) : ___________</td>
                                            <td colspan="">Prepared By <small>(Incharge) : ___________</td>
                                            <td colspan="">Prepared By <small>(Manager) : ___________</td>
                                            
                                        </tr> <tr style="visibility: hidden;">
                                            <td colspan="">Prepared By <small>(Operator) : ___________</td>
                                            <td colspan="">Prepared By <small>(Incharge) : ___________</td>
                                            <td colspan="">Prepared By <small>(Manager) : ___________</td>
                                            
                                        </tr><tr style="visibility: hidden;">
                                            <td colspan="">Prepared By <small>(Operator) : ___________</td>
                                            <td colspan="">Prepared By <small>(Incharge) : ___________</td>
                                            <td colspan="">Prepared By <small>(Manager) : ___________</td>
                                            
                                        </tr><tr style="visibility: hidden;">
                                            <td colspan="">Prepared By <small>(Operator) : ___________</td>
                                            <td colspan="">Prepared By <small>(Incharge) : ___________</td>
                                            <td colspan="">Prepared By <small>(Manager) : ___________</td>
                                            
                                        </tr><tr style="visibility: hidden;">
                                            <td colspan="">Prepared By <small>(Operator) : ___________</td>
                                            <td colspan="">Prepared By <small>(Incharge) : ___________</td>
                                            <td colspan="">Prepared By <small>(Manager) : ___________</td>
                                            
                                        </tr><tr style="visibility: hidden;">
                                            <td colspan="">Prepared By <small>(Operator) : ___________</td>
                                            <td colspan="">Prepared By <small>(Incharge) : ___________</td>
                                            <td colspan="">Prepared By <small>(Manager) : ___________</td>
                                            
                                        </tr><tr style="visibility: hidden;">
                                            <td colspan="">Prepared By <small>(Operator) : ___________</td>
                                            <td colspan="">Prepared By <small>(Incharge) : ___________</td>
                                            <td colspan="">Prepared By <small>(Manager) : ___________</td>
                                            
                                        </tr>
                                                </tbody>
                                        
                                            </table>
                                            
                                        </div>
                                        <div>

                                             
                                        </div>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
                        <button id="btn" class="print-btn_die_cutting btn btn-info pull-right" role="button">Generate Print</button><br><br><br>
        </div>

        <?php } ?>
        
        <!-- pasting -->
        <?php 
            if (isset($pasting)) {
        ?>
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-bd print-div_pasting table_one">
                    <div class="panel-heading">
                        <div class="panel-title">
                          <h4 class="product-totle">BATCH MANUFACTURING REPORT <small>(Pasting)</small></h4><br>
                            <small class="product-tital">DOC NO: PRD/FM/001-02A     REV# 00     Date:<?php echo date('d-m-Y', strtotime($pasting['created_at'])) ?></small>
                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <form>
                                <div class="col-sm-12">
                                    <div class="panel-body">
                                        <table class="minimalistBlack" style="width: 100%;">
                                       
                                       
                                        <tbody>
                                        <tr>
                                            <td>Date : <u><?php echo date('d M Y', strtotime($pasting['created_at'])) ?></u></td>
                                            <td colspan="2">Shift : <div class="radio radio-inline">
                                                        <input type="radio" disabled="" id="inlineradio1" value="option1">
                                                        <label for="inlineradio1"> G </label>
                                                    </div></e><e class="aks_value"><div style="margin-left: 11px;" class="radio radio-inline">
                                                        <input type="radio" disabled="" id="inlineradio2" value="option2">
                                                        <label for="inlineradio2"> N </label>
                                                    </div></td>
                                            
                                           
                                        </tr>
                                        <tr>
                                            <td>W.O # : <u><?php echo $pasting_job['WO_no'] ?></u></td>
                                            <td colspan="2">Job Name : <u><?php echo $pasting_job['Job_Description'] ?></u></td>
                                            
                                           
                                        </tr>
                                        <tr>
                                            <td>Machine : <u><?php echo $pasting_job['machine_Name'] ?></u></td>
                                            <td>P.O. No. : <u><?php echo $pasting_job['PO_No'] ?></u></td>
                                            <td>Planned Qty : <u><?php echo $pasting_job['Planned_qty'] ?></td>
                                        </tr>
                                        <tr>
                                            <td>Operator : <u><?php echo $pasting['operator'] ?></u></td>
                                            <td colspan="2">Assistant : <u><?php echo $pasting['assistant'] ?></u></td>
                                            
                                        </tr>
                                        
                                        <tr>
                                            <td>Job Counter <small>Opening</small> : <u><?php echo $pasting['opening'] ?></u></td>
                                            <td>Job Counter <small>Closing</small> : <u><?php echo $pasting['closing'] ?></u></td>
                                            <td>Job Counter <small>Waste</small> : <u><?php echo $pasting['waste'] ?></u></td>
                                           
                                            
                                        </tr> 
                                        <tr>
                                            <td> Master carton: <u><?php echo $pasting['carton'] ?></u></td>
                                            <td> Packing Qty   : <u><?php echo $pasting['qty'] ?></u></td>
                                            <td> Weight: <u><?php echo $pasting['weight'] ?></u></td>
                                        </tr> 
                                        <tr>
                                            <td>Make Ready : <div class="radio radio-inline">
                                                        <input type="radio" disabled="" id="inlineradio5" value="Yes" name="ready" <?php if($pasting_complete['ready'] == 'Yes') echo 'checked' ?>>
                                                        <label for="inlineradio5"> Yes </label>
                                                    </div></e><e class="aks_value"><div style="margin-left: 11px;" class="radio radio-inline">
                                                        <input type="radio" disabled="" id="inlineradio6" value="No" name="ready" <?php if($pasting_complete['ready'] == 'No') echo 'checked' ?>>
                                                        <label for="inlineradio6"> No </label>
                                                    </div></td>
                                            <td colspan="2">Job Completed : <div class="radio radio-inline">
                                                        <input type="radio" disabled="" id="inlineradio7" value="Yes" name="completed" <?php if($pasting_complete['completed'] == 'Yes') echo 'checked' ?>>
                                                        <label for="inlineradio7"> Yes </label>
                                                    </div></e><e class="aks_value"><div style="margin-left: 11px;" class="radio radio-inline">
                                                        <input type="radio" disabled="" id="inlineradio8" value="No" name="completed" <?php if($pasting_complete['completed'] == 'No') echo 'checked' ?>>
                                                        <label for="inlineradio8"> No </label>
                                                    </div></td>
                                            
                                            
                                        </tr> 

                                        <tr>
                                            <td>Machine Cleaning : <div class="radio radio-inline">
                                                        <input type="radio" disabled="" id="inlineradio9" value="Yes" name="cleaning" <?php if($pasting_complete['cleaning'] == 'Yes') echo 'checked' ?>>
                                                        <label for="inlineradio9"> Yes </label>
                                                    </div></e><e class="aks_value"><div style="margin-left: 11px;" class="radio radio-inline">
                                                        <input type="radio" disabled="" id="inlineradio10" value="No" name="cleaning" <?php if($pasting_complete['cleaning'] == 'No') echo 'checked' ?>>
                                                        <label for="inlineradio10"> No </label>
                                                    </div></td>
                                            <td colspan="2">Guide set : <div class="radio radio-inline">
                                                        <input type="radio" disabled="" id="inlineradio11" value="Yes" name="guide" <?php if($pasting_complete['guide'] == 'Yes') echo 'checked' ?>>
                                                        <label for="inlineradio11"> Yes </label>
                                                    </div></e><e class="aks_value"><div style="margin-left: 11px;" class="radio radio-inline">
                                                        <input type="radio" disabled="" id="inlineradio12" value="No" name="guide" <?php if($pasting_complete['guide'] == 'No') echo 'checked' ?>>
                                                        <label for="inlineradio12"> No </label>
                                                    </div></td>
                                            
                                        </tr> 

                                        <tr>
                                            <td>Glue Set : <div class="radio radio-inline">
                                                        <input type="radio" disabled="" id="inlineradio9" value="Yes" name="glue" <?php if($pasting_complete['glue'] == 'Yes') echo 'checked' ?>>
                                                        <label for="inlineradio9"> Yes </label>
                                                    </div></e><e class="aks_value"><div style="margin-left: 11px;" class="radio radio-inline">
                                                        <input type="radio" disabled="" id="inlineradio10" value="No" name="glue" <?php if($pasting_complete['glue'] == 'No') echo 'checked' ?>>
                                                        <label for="inlineradio10"> No </label>
                                                    </div></td>
                                            <td colspan="2">Blanket set : <div class="radio radio-inline">
                                                        <input type="radio" disabled="" id="inlineradio11" value="Yes" name="blanket" <?php if($pasting_complete['blanket'] == 'Yes') echo 'checked' ?>>
                                                        <label for="inlineradio11"> Yes </label>
                                                    </div></e><e class="aks_value"><div style="margin-left: 11px;" class="radio radio-inline">
                                                        <input type="radio" disabled="" id="inlineradio12" value="No" name="blanket" <?php if($pasting_complete['blanket'] == 'No') echo 'checked' ?>>
                                                        <label for="inlineradio12"> No </label>
                                                    </div></td>
                                            
                                        </tr> 

                                       
                                        
                                        <tr>
                                            <td colspan="3">Remarks : ______________________________________________________</td>
                                            
                                        </tr>
                                        
                                        </table>
                                        
                                        <br>
                                        <table class="table table-bordered table-hover" cellpadding="10" style="width: 100%;">
                                            <thead>
                                                <tr>
                                                    <th rowspan="2"><center>Code</center></th>
                                                    <th colspan="3"><center>Time</center></th>
                                                    <th rowspan="2"><center>Counter</center></th>
                                                    <th rowspan="2"><center>Remarks</center></th>
                                                    
                                                    
                                                </tr>
                                                <tr>
                                                    <th><center>From</center></th>
                                                    <th><center>To</center></th>
                                                    <th><center>Hours</center></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php 
                                                    foreach ($pasting_hourse as $d) {
                                                ?>
                                                <tr>
                                                    <th><?php echo $d['code'] ?></th>
                                                    <td><?php echo $d['froms'] ?></td>
                                                    <td><?php echo $d['tos'] ?></td>
                                                    <td><?php echo $d['hours'] ?></td>
                                                    <td><?php echo $d['counter'] ?></td>
                                                    <td><?php echo $d['remarks'] ?></td>
                                                </tr>
                                                <?php } ?>
                                               

                                            </tbody>
                                        </table>
                                        <br>


<?php if (isset($inprocess_inspection_pasting)) { ?>
   <div class="form-group row">
       <div class="form-group col-lg-12">
           <table class="minimalistBlack" style="width: 100%;">
               <tr>
                    <th colspan="10"><center>Pasting  Checking Parameters</center></th>
                    <th rowspan="2">Remarks</th>
                </tr>
                <tr>
                    <th colspan="1">W.O No</th>
                    <th colspan="1">Machine</th>
                    <th colspan="1">Time</th>
                    <th colspan="1">Creasing2222</th>
                    <th colspan="1">Glue Position</th>
                    <th colspan="1">Gluing</th>
                    <th colspan="1">Stickiness</th>
                    <th colspan="1">Scratches</th>
                    <th colspan="1">Color Rub</th>
                    <th colspan="1">Counting</th>
                </tr>
               <tbody>
                    <?php 
                        foreach ($inprocess_inspection_pasting as $pasting) {
                    ?>
                       <tr>
                            <td>
                                <?php echo $pasting['wo_id']; ?>
                            </td>
                            <td>
                                <?php echo $pasting['machine']; ?>
                            </td>
                            <td>
                                <?php echo $pasting['time']; ?>
                            </td>
                            <td>
                                <?php echo $pasting['creasing']; ?>
                            </td>
                            <td>
                                <?php echo $pasting['glue_position']; ?>
                            </td>
                            <td>
                                <?php echo $pasting['gluing']; ?>
                            </td>
                            <td>
                                <?php echo $pasting['stickiness']; ?>
                            </td>
                            <td>
                                <?php echo $pasting['scratches']; ?>
                            </td>
                            <td>
                                <?php echo $pasting['color_rub']; ?>
                            </td>
                            <td>
                                <?php echo $pasting['counting']; ?>
                            </td>
                            <td>
                                <?php echo $pasting['remarks']; ?>
                            </td>
                            
                        </tr>
                    <?php }  ?>
               </tbody>
           </table>
       </div>
   </div>   
<?php } ?>
                                        <br>
                                        <div class="form-group row">
                                            <table class="minimalistBlack" style="width: 100%;">
                                                <tbody>
                                                    <tr>
                                            <td colspan="">Prepared By <small>(Operator) : ___________</td>
                                            <td colspan="">Prepared By <small>(Incharge) : ___________</td>
                                            <td colspan="">Prepared By <small>(Manager) : ___________</td>
                                            
                                        </tr> <tr style="visibility: hidden;">
                                            <td colspan="">Prepared By <small>(Operator) : ___________</td>
                                            <td colspan="">Prepared By <small>(Incharge) : ___________</td>
                                            <td colspan="">Prepared By <small>(Manager) : ___________</td>
                                            
                                        </tr><tr style="visibility: hidden;">
                                            <td colspan="">Prepared By <small>(Operator) : ___________</td>
                                            <td colspan="">Prepared By <small>(Incharge) : ___________</td>
                                            <td colspan="">Prepared By <small>(Manager) : ___________</td>
                                            
                                        </tr><tr style="visibility: hidden;">
                                            <td colspan="">Prepared By <small>(Operator) : ___________</td>
                                            <td colspan="">Prepared By <small>(Incharge) : ___________</td>
                                            <td colspan="">Prepared By <small>(Manager) : ___________</td>
                                            
                                        </tr><tr style="visibility: hidden;">
                                            <td colspan="">Prepared By <small>(Operator) : ___________</td>
                                            <td colspan="">Prepared By <small>(Incharge) : ___________</td>
                                            <td colspan="">Prepared By <small>(Manager) : ___________</td>
                                            
                                        </tr><tr style="visibility: hidden;">
                                            <td colspan="">Prepared By <small>(Operator) : ___________</td>
                                            <td colspan="">Prepared By <small>(Incharge) : ___________</td>
                                            <td colspan="">Prepared By <small>(Manager) : ___________</td>
                                            
                                        </tr><tr style="visibility: hidden;">
                                            <td colspan="">Prepared By <small>(Operator) : ___________</td>
                                            <td colspan="">Prepared By <small>(Incharge) : ___________</td>
                                            <td colspan="">Prepared By <small>(Manager) : ___________</td>
                                            
                                        </tr>
                                                </tbody>
                                        
                                            </table>
                                            
                                        </div>
                                        <div>
                                        </div>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
                         <button id="btn" class="print-btn_pasting btn btn-info pull-right" role="button">Generate Print</button><br><br><br>
        </div>
        <?php } ?>
        <!-- printing -->
        <?php 
            if (isset($printing)) {
        ?>
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-bd print-div_printing table_one">
                    <div class="panel-heading">
                        <div class="panel-title">
                          <h4 class="product-totle">BATCH MANUFACTURING REPORT <small>(Printing)</small></h4><br>
                            <small class="product-tital">DOC NO: PRD/FM/001-02A   |   REV# 00    |  Date:<?php echo date('d-m-Y', strtotime($printing['created_at'])) ?></small>
                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <form>
                                <div class="col-sm-12">
                                    <div class="panel-body">
                                        <table class="minimalistBlack" style="width: 100%;">
                                       
                                       
                                        <tbody>
                                        <tr>
                                            <td>Date : <u><?php echo date('d M Y', strtotime($printing['created_at'])) ?></u></td>
                                            <td colspan="2">Shift : <div class="radio radio-inline">
                                                        <input type="radio" disabled="" id="inlineradio1" value="option1">
                                                        <label for="inlineradio1"> G </label>
                                                    </div></e><e class="aks_value"><div style="margin-left: 11px;" class="radio radio-inline">
                                                        <input type="radio" disabled="" id="inlineradio2" value="option2">
                                                        <label for="inlineradio2"> N </label>
                                                    </div></td>
                                            
                                           
                                        </tr>
                                        <tr>
                                            <td>W.O # : <u><?php echo $printing_job['WO_no'] ?></u></td>
                                            <td colspan="2">Job Name : <u><?php echo $printing_job['Job_Description'] ?></u></td>
                                            
                                           
                                        </tr>
                                        <tr>
                                            <td>Machine : <u><?php echo $printing_job['machine_Name'] ?></u></td>
                                            <td>P.O. No. : <u><?php echo $printing_job['PO_No'] ?></u></td>
                                            <td>Planned Qty : <u><?php echo $printing_job['Planned_qty'] ?></td>
                                        </tr>
                                        <tr>
                                            <td>Operator : <u><?php echo $printing['operator'] ?></u></td>
                                            <td colspan="2">Assistant : <u><?php echo $printing['assistant'] ?></u></td>
                                            
                                        </tr>

                                        <tr>
                                            <?php 
                                                $colors = explode(',', $printing_job["colors"]);
                                            ?>
                                            <td colspan="3">Colour(s) : &nbsp;<div class="checkbox checkbox-inline">
                                                        <input type="checkbox" disabled="" id="inlineCheckbox17" value="option17"<?php
                                                            $key = array_search('Black', $colors);
                                                            if ($key >= -1) { 
                                                                if (array_key_exists($key,$colors)) {
                                                                    echo 'checked'; 
                                                                } 
                                                            } 
                                                            ?>>
                                                        <label for="inlineCheckbox17"> Black </label>
                                                    </div></e><e class="aks_value"><div style="margin-left: 11px;" class="checkbox checkbox-inline">
                                                        <input type="checkbox" disabled="" id="inlineCheckbox18" value="option18"<?php
                                                            $key = array_search('Cyan', $colors);
                                                            if ($key >= -1) { 
                                                                if (array_key_exists($key,$colors)) {
                                                                    echo 'checked'; 
                                                                } 
                                                            } 
                                                            ?>>
                                                        <label for="inlineCheckbox18"> Cyan </label>
                                                    </div><div style="margin-left: 11px;" class="checkbox checkbox-inline">
                                                        <input type="checkbox" disabled="" id="inlineCheckbox19" value="option19"<?php
                                                            $key = array_search('Magenta', $colors);
                                                            if ($key >= -1) { 
                                                                if (array_key_exists($key,$colors)) {
                                                                    echo 'checked'; 
                                                                } 
                                                            } 
                                                            ?>>
                                                        <label for="inlineCheckbox19"> Magenta </label>
                                                    </div><div style="margin-left: 11px;" class="checkbox checkbox-inline">
                                                        <input type="checkbox" disabled="" id="inlineCheckbox20" value="option20"<?php
                                                            $key = array_search('Yellow', $colors);
                                                            if ($key >= -1) { 
                                                                if (array_key_exists($key,$colors)) {
                                                                    echo 'checked'; 
                                                                } 
                                                            } 
                                                            ?>>
                                                        <label for="inlineCheckbox20"> Yellow </label>
                                                    </div><div style="margin-left: 11px;" class="checkbox checkbox-inline">
                                                        <input type="checkbox" disabled="" id="inlineCheckbox21" value="option21"<?php
                                                            $key = array_search('SPL1', $colors);
                                                            if ($key >= -1) { 
                                                                if (array_key_exists($key,$colors)) {
                                                                    echo 'checked'; 
                                                                } 
                                                            } 
                                                            ?>>
                                                        <label for="inlineCheckbox21"> SPL </label>
                                                    </div><div style="margin-left: 11px;" class="checkbox checkbox-inline">
                                                        <input type="checkbox" disabled="" id="inlineCheckbox22" value="option22"<?php
                                                            $key = array_search('SPL2', $colors);
                                                            if ($key >= -1) { 
                                                                if (array_key_exists($key,$colors)) {
                                                                    echo 'checked'; 
                                                                } 
                                                            } 
                                                            ?>>
                                                        <label for="inlineCheckbox22"> SPL </label>
                                                    </div><div style="margin-left: 11px;" class="checkbox checkbox-inline">
                                                        <input type="checkbox" disabled="" id="inlineCheckbox23" value="option23"<?php
                                                            $key = array_search('SPL3', $colors);
                                                            if ($key >= -1) { 
                                                                if (array_key_exists($key,$colors)) {
                                                                    echo 'checked'; 
                                                                } 
                                                            } 
                                                            ?>>
                                                        <label for="inlineCheckbox23"> SPL </label>
                                                    </div><div style="margin-left: 11px;" class="checkbox checkbox-inline">
                                                        <input type="checkbox" disabled="" id="inlineCheckbox24" value="option24"<?php
                                                            $key = array_search('SPL4', $colors);
                                                            if ($key >= -1) { 
                                                                if (array_key_exists($key,$colors)) {
                                                                    echo 'checked'; 
                                                                } 
                                                            } 
                                                            ?>>
                                                        <label for="inlineCheckbox24"> SPL </label>
                                                    </div></td>
                                            
                                        </tr>
                                        
                                        <tr>
                                            <td colspan="3">Process : <div class="radio radio-inline">
                                                        <input type="radio" disabled=""  id="inlineradio3" name="process" value="Cutting" <?php if($printing['process'] == 'Printing') echo 'checked' ?>>
                                                        <label for="inlineradio3"> Printing </label>
                                                    </div></e><e class="aks_value"><div style="margin-left: 11px;" class="radio radio-inline">
                                                        <input type="radio" disabled="" id="inlineradio4" name="process" value="Coating" <?php if($printing['process'] == 'Coating') echo 'checked' ?>>
                                                        <label for="inlineradio4"> Embossing </label>
                                                    </div></td>
                                           
                                            
                                        </tr> 
                                        <tr>
                                            <td>Job Counter <small>Opening</small> : <u><?php echo $printing['opening'] ?></u></td>
                                            <td>Job Counter <small>Closing</small> : <u><?php echo $printing['closing'] ?></u></td>
                                            <td>Job Counter <small>Waste</small> : <u><?php echo $printing['waste'] ?></u></td>
                                           
                                            
                                        </tr>
                                       
                                        <tr>
                                            <td>Make Ready : <div class="radio radio-inline">
                                                        <input type="radio" disabled="" id="inlineradio5" value="Yes" name="ready" <?php if($printing_complete['ready'] == 'Yes') echo 'checked' ?>>
                                                        <label for="inlineradio5"> Yes </label>
                                                    </div></e><e class="aks_value"><div style="margin-left: 11px;" class="radio radio-inline">
                                                        <input type="radio" disabled="" id="inlineradio6" value="No" name="ready" <?php if($printing_complete['ready'] == 'No') echo 'checked' ?>>
                                                        <label for="inlineradio6"> No </label>
                                                    </div></td>
                                            <td colspan="2">Job Completed : <div class="radio radio-inline">
                                                        <input type="radio" disabled="" id="inlineradio7" value="Yes" name="completed" <?php if($printing_complete['completed'] == 'Yes') echo 'checked' ?>>
                                                        <label for="inlineradio7"> Yes </label>
                                                    </div></e><e class="aks_value"><div style="margin-left: 11px;" class="radio radio-inline">
                                                        <input type="radio" disabled="" id="inlineradio8" value="No" name="completed" <?php if($printing_complete['completed'] == 'No') echo 'checked' ?>>
                                                        <label for="inlineradio8"> No </label>
                                                    </div></td>
                                            
                                            
                                        </tr> 

                                        <tr>
                                            <td>Feeder Set : <div class="radio radio-inline">
                                                        <input type="radio" disabled="" id="inlineradio9" value="Yes" name="feeder" <?php if($printing_complete['feeder'] == 'Yes') echo 'checked' ?>>
                                                        <label for="inlineradio9"> Yes </label>
                                                    </div></e><e class="aks_value"><div style="margin-left: 11px;" class="radio radio-inline">
                                                        <input type="radio" disabled="" id="inlineradio10" value="No" name="feeder" <?php if($printing_complete['feeder'] == 'No') echo 'checked' ?>>
                                                        <label for="inlineradio10"> No </label>
                                                    </div></td>
                                            <td colspan="2">Check Paper Specs : <div class="radio radio-inline">
                                                        <input type="radio" disabled="" id="inlineradio11" value="Yes" name="specs" <?php if($printing_complete['specs'] == 'Yes') echo 'checked' ?>>
                                                        <label for="inlineradio11"> Yes </label>
                                                    </div></e><e class="aks_value"><div style="margin-left: 11px;" class="radio radio-inline">
                                                        <input type="radio" disabled="" id="inlineradio12" value="No" name="specs" <?php if($printing_complete['specs'] == 'No') echo 'checked' ?>>
                                                        <label for="inlineradio12"> No </label>
                                                    </div></td>
                                            
                                        </tr> 

                                        <tr>
                                            <td>Delivery set : <div class="radio radio-inline">
                                                        <input type="radio" disabled="" id="inlineradio13" value="Yes" name="delivery" <?php if($printing_complete['delivery'] == 'Yes') echo 'checked' ?>>
                                                        <label for="inlineradio13"> Yes </label>
                                                    </div></e><e class="aks_value"><div style="margin-left: 11px;" class="radio radio-inline">
                                                        <input type="radio" disabled="" id="inlineradio14" value="No" name="delivery" <?php if($printing_complete['delivery'] == 'No') echo 'checked' ?>>
                                                        <label for="inlineradio14"> No </label>
                                                    </div></td>
                                            <td colspan="2">Impression set : <div class="radio radio-inline">
                                                        <input type="radio" disabled="" id="inlineradio15" value="Yes" name="impression" <?php if($printing_complete['impression'] == 'Yes') echo 'checked' ?>>
                                                        <label for="inlineradio15"> Yes </label>
                                                    </div></e><e class="aks_value"><div style="margin-left: 11px;" class="radio radio-inline">
                                                        <input type="radio" disabled="" id="inlineradio6" value="No" name="impression" <?php if($printing_complete['impression'] == 'No') echo 'checked' ?>>
                                                        <label for="inlineradio16"> No </label>
                                                    </div></td>
                                            
                                        </tr> 


                                        <tr>
                                            <td>Cleaning : <div class="radio radio-inline">
                                                        <input type="radio" disabled="" id="inlineradio13" value="Yes" name="cleaning" <?php if($printing_complete['cleaning'] == 'Yes') echo 'checked' ?>>
                                                        <label for="inlineradio13"> Yes </label>
                                                    </div></e><e class="aks_value"><div style="margin-left: 11px;" class="radio radio-inline">
                                                        <input type="radio" disabled="" id="inlineradio14" value="No" name="cleaning" <?php if($printing_complete['cleaning'] == 'No') echo 'checked' ?>>
                                                        <label for="inlineradio14"> No </label>
                                                    </div></td>
                                            <td colspan="2">Gauge set : <div class="radio radio-inline">
                                                        <input type="radio" disabled="" id="inlineradio15" value="Yes" name="gauge" <?php if($printing_complete['gauge'] == 'Yes') echo 'checked' ?>>
                                                        <label for="inlineradio15"> Yes </label>
                                                    </div></e><e class="aks_value"><div style="margin-left: 11px;" class="radio radio-inline">
                                                        <input type="radio" disabled="" id="inlineradio6" value="No" name="gauge" <?php if($printing_complete['gauge'] == 'No') echo 'checked' ?>>
                                                        <label for="inlineradio16"> No </label>
                                                    </div></td>
                                            
                                        </tr> 

                                        
                                        <tr>
                                            <td colspan="3">Remarks : ______________________________________________________</td>
                                            
                                        </tr>
                                        
                                        </table>
                                        
                                        <br>
                                        <table class="table table-bordered table-hover" cellpadding="10" style="width: 100%;">
                                            <thead>
                                                <tr>
                                                    <th rowspan="2"><center>Code</center></th>
                                                    <th colspan="3"><center>Time</center></th>
                                                    <th rowspan="2"><center>Counter</center></th>
                                                    <th rowspan="2"><center>Remarks</center></th>
                                                    
                                                    
                                                </tr>
                                                <tr>
                                                    <th><center>From</center></th>
                                                    <th><center>To</center></th>
                                                    <th><center>Hours</center></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                 <?php 
                                                    foreach ($printing_hourse as $d) {
                                                ?>
                                                <tr>
                                                    <th><?php echo $d['code'] ?></th>
                                                    <td><?php echo $d['froms'] ?></td>
                                                    <td><?php echo $d['tos'] ?></td>
                                                    <td><?php echo $d['hours'] ?></td>
                                                    <td><?php echo $d['counter'] ?></td>
                                                    <td><?php echo $d['remarks'] ?></td>
                                                </tr>
                                                <?php } ?>
                                            </tbody>
                                        </table>
                                        <br>
                                        <div class="form-group row">
                                            <table class="minimalistBlack" style="width: 100%;">
                                                <tbody>
                                                    <tr>
                                            <td colspan="">Prepared By <small>(Operator) : ___________</td>
                                            <td colspan="">Prepared By <small>(Incharge) : ___________</td>
                                            <td colspan="">Prepared By <small>(Manager) : ___________</td>
                                            
                                        </tr> <tr style="visibility: hidden;">
                                            <td colspan="">Prepared By <small>(Operator) : ___________</td>
                                            <td colspan="">Prepared By <small>(Incharge) : ___________</td>
                                            <td colspan="">Prepared By <small>(Manager) : ___________</td>
                                            
                                        </tr><tr style="visibility: hidden;">
                                            <td colspan="">Prepared By <small>(Operator) : ___________</td>
                                            <td colspan="">Prepared By <small>(Incharge) : ___________</td>
                                            <td colspan="">Prepared By <small>(Manager) : ___________</td>
                                            
                                        </tr><tr style="visibility: hidden;">
                                            <td colspan="">Prepared By <small>(Operator) : ___________</td>
                                            <td colspan="">Prepared By <small>(Incharge) : ___________</td>
                                            <td colspan="">Prepared By <small>(Manager) : ___________</td>
                                            
                                        </tr><tr style="visibility: hidden;">
                                            <td colspan="">Prepared By <small>(Operator) : ___________</td>
                                            <td colspan="">Prepared By <small>(Incharge) : ___________</td>
                                            <td colspan="">Prepared By <small>(Manager) : ___________</td>
                                            
                                        </tr><tr style="visibility: hidden;">
                                            <td colspan="">Prepared By <small>(Operator) : ___________</td>
                                            <td colspan="">Prepared By <small>(Incharge) : ___________</td>
                                            <td colspan="">Prepared By <small>(Manager) : ___________</td>
                                            
                                        </tr><tr style="visibility: hidden;">
                                            <td colspan="">Prepared By <small>(Operator) : ___________</td>
                                            <td colspan="">Prepared By <small>(Incharge) : ___________</td>
                                            <td colspan="">Prepared By <small>(Manager) : ___________</td>
                                            
                                        </tr>
                                                </tbody>
                                        
                                            </table>
                                            
                                        </div>
                                         <?php 
                                              if (isset($inprocess_inspection_printing)) {
                                                  
                                            echo "<pre>";
                                            print_r($inprocess_inspection_printing);
                                              }

                                             ?>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
                        <button id="btn" class="print-btn_printing btn btn-info pull-right" role="button">Generate Print</button><br><br><br>
        </div>
        <?php } ?>
        <!-- coating -->
        <?php 
            if (isset($coating)) {
        ?>
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-bd print-div_coating table_one">
                    <div class="panel-heading">
                        <div class="panel-title">
                          <h4 class="product-totle">BATCH MANUFACTURING REPORT <small>(coating)</small></h4><br>
                            <small class="product-tital">DOC NO: PRD/FM/001-02A   |   REV# 00    |  Date:<?php echo date('d-m-Y', strtotime($coating['created_at'])) ?></small>
                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <form>
                                <div class="col-sm-12">
                                    <div class="panel-body">
                                        <table class="minimalistBlack" style="width: 100%;">
                                       
                                       
                                        <tbody>
                                        <tr>
                                            <td>Date : <u><?php echo date('d M Y', strtotime($coating['created_at'])) ?></u></td>
                                            <td colspan="2">Shift : <div class="radio radio-inline">
                                                        <input type="radio" disabled="" id="inlineradio1" value="option1">
                                                        <label for="inlineradio1"> G </label>
                                                    </div></e><e class="aks_value"><div style="margin-left: 11px;" class="radio radio-inline">
                                                        <input type="radio" disabled="" id="inlineradio2" value="option2">
                                                        <label for="inlineradio2"> N </label>
                                                    </div></td>
                                            
                                           
                                        </tr>
                                        <tr>
                                            <td>W.O # : <u><?php echo $coating_job['WO_no'] ?></u></td>
                                            <td colspan="2">Job Name : <u><?php echo $coating_job['Job_Description'] ?></u></td>
                                            
                                           
                                        </tr>
                                        <tr>
                                            <td>Machine : <u><?php echo $coating_job['machine_Name'] ?></u></td>
                                            <td>P.O. No. : <u><?php echo $coating_job['PO_No'] ?></u></td>
                                            <td>Planned Qty : <u><?php echo $coating_job['Planned_qty'] ?></td>
                                        </tr>
                                        <tr>
                                            <td>Operator : <u><?php echo $coating['operator'] ?></u></td>
                                            <td colspan="2">Assistant : <u><?php echo $coating['assistant'] ?></u></td>
                                            
                                        </tr>

                                        <tr>
                                            <?php 
                                                $colors = explode(',', $coating_job["colors"]);
                                            ?>
                                            <td colspan="3">Colour(s) : &nbsp;<div class="checkbox checkbox-inline">
                                                        <input type="checkbox" disabled="" id="inlineCheckbox17" value="option17"<?php
                                                            $key = array_search('Black', $colors);
                                                            if ($key >= -1) { 
                                                                if (array_key_exists($key,$colors)) {
                                                                    echo 'checked'; 
                                                                } 
                                                            } 
                                                            ?>>
                                                        <label for="inlineCheckbox17"> Black </label>
                                                    </div></e><e class="aks_value"><div style="margin-left: 11px;" class="checkbox checkbox-inline">
                                                        <input type="checkbox" disabled="" id="inlineCheckbox18" value="option18"<?php
                                                            $key = array_search('Cyan', $colors);
                                                            if ($key >= -1) { 
                                                                if (array_key_exists($key,$colors)) {
                                                                    echo 'checked'; 
                                                                } 
                                                            } 
                                                            ?>>
                                                        <label for="inlineCheckbox18"> Cyan </label>
                                                    </div><div style="margin-left: 11px;" class="checkbox checkbox-inline">
                                                        <input type="checkbox" disabled="" id="inlineCheckbox19" value="option19"<?php
                                                            $key = array_search('Magenta', $colors);
                                                            if ($key >= -1) { 
                                                                if (array_key_exists($key,$colors)) {
                                                                    echo 'checked'; 
                                                                } 
                                                            } 
                                                            ?>>
                                                        <label for="inlineCheckbox19"> Magenta </label>
                                                    </div><div style="margin-left: 11px;" class="checkbox checkbox-inline">
                                                        <input type="checkbox" disabled="" id="inlineCheckbox20" value="option20"<?php
                                                            $key = array_search('Yellow', $colors);
                                                            if ($key >= -1) { 
                                                                if (array_key_exists($key,$colors)) {
                                                                    echo 'checked'; 
                                                                } 
                                                            } 
                                                            ?>>
                                                        <label for="inlineCheckbox20"> Yellow </label>
                                                    </div><div style="margin-left: 11px;" class="checkbox checkbox-inline">
                                                        <input type="checkbox" disabled="" id="inlineCheckbox21" value="option21"<?php
                                                            $key = array_search('SPL1', $colors);
                                                            if ($key >= -1) { 
                                                                if (array_key_exists($key,$colors)) {
                                                                    echo 'checked'; 
                                                                } 
                                                            } 
                                                            ?>>
                                                        <label for="inlineCheckbox21"> SPL </label>
                                                    </div><div style="margin-left: 11px;" class="checkbox checkbox-inline">
                                                        <input type="checkbox" disabled="" id="inlineCheckbox22" value="option22"<?php
                                                            $key = array_search('SPL2', $colors);
                                                            if ($key >= -1) { 
                                                                if (array_key_exists($key,$colors)) {
                                                                    echo 'checked'; 
                                                                } 
                                                            } 
                                                            ?>>
                                                        <label for="inlineCheckbox22"> SPL </label>
                                                    </div><div style="margin-left: 11px;" class="checkbox checkbox-inline">
                                                        <input type="checkbox" disabled="" id="inlineCheckbox23" value="option23"<?php
                                                            $key = array_search('SPL3', $colors);
                                                            if ($key >= -1) { 
                                                                if (array_key_exists($key,$colors)) {
                                                                    echo 'checked'; 
                                                                } 
                                                            } 
                                                            ?>>
                                                        <label for="inlineCheckbox23"> SPL </label>
                                                    </div><div style="margin-left: 11px;" class="checkbox checkbox-inline">
                                                        <input type="checkbox" disabled="" id="inlineCheckbox24" value="option24"<?php
                                                            $key = array_search('SPL4', $colors);
                                                            if ($key >= -1) { 
                                                                if (array_key_exists($key,$colors)) {
                                                                    echo 'checked'; 
                                                                } 
                                                            } 
                                                            ?>>
                                                        <label for="inlineCheckbox24"> SPL </label>
                                                    </div></td>
                                            
                                        </tr>
                                        
                                        <tr>
                                            <td colspan="3">Process : <div class="radio radio-inline">
                                                        <input type="radio" disabled=""  id="inlineradio3" name="process" value="Cutting" <?php if($coating['process'] == 'coating') echo 'checked' ?>>
                                                        <label for="inlineradio3"> coating </label>
                                                    </div></e><e class="aks_value"><div style="margin-left: 11px;" class="radio radio-inline">
                                                        <input type="radio" disabled="" id="inlineradio4" name="process" value="Coating" <?php if($coating['process'] == 'Coating') echo 'checked' ?>>
                                                        <label for="inlineradio4"> Embossing </label>
                                                    </div></td>
                                           
                                            
                                        </tr> 
                                        <tr>
                                            <td>Job Counter <small>Opening</small> : <u><?php echo $coating['opening'] ?></u></td>
                                            <td>Job Counter <small>Closing</small> : <u><?php echo $coating['closing'] ?></u></td>
                                            <td>Job Counter <small>Waste</small> : <u><?php echo $coating['waste'] ?></u></td>
                                           
                                            
                                        </tr>
                                       
                                        <tr>
                                            <td>Make Ready : <div class="radio radio-inline">
                                                        <input type="radio" disabled="" id="inlineradio5" value="Yes" name="ready" <?php if($coating_complete['ready'] == 'Yes') echo 'checked' ?>>
                                                        <label for="inlineradio5"> Yes </label>
                                                    </div></e><e class="aks_value"><div style="margin-left: 11px;" class="radio radio-inline">
                                                        <input type="radio" disabled="" id="inlineradio6" value="No" name="ready" <?php if($coating_complete['ready'] == 'No') echo 'checked' ?>>
                                                        <label for="inlineradio6"> No </label>
                                                    </div></td>
                                            <td colspan="2">Job Completed : <div class="radio radio-inline">
                                                        <input type="radio" disabled="" id="inlineradio7" value="Yes" name="completed" <?php if($coating_complete['completed'] == 'Yes') echo 'checked' ?>>
                                                        <label for="inlineradio7"> Yes </label>
                                                    </div></e><e class="aks_value"><div style="margin-left: 11px;" class="radio radio-inline">
                                                        <input type="radio" disabled="" id="inlineradio8" value="No" name="completed" <?php if($coating_complete['completed'] == 'No') echo 'checked' ?>>
                                                        <label for="inlineradio8"> No </label>
                                                    </div></td>
                                            
                                            
                                        </tr> 

                                        <tr>
                                            <td>Feeder Set : <div class="radio radio-inline">
                                                        <input type="radio" disabled="" id="inlineradio9" value="Yes" name="feeder" <?php if($coating_complete['feeder'] == 'Yes') echo 'checked' ?>>
                                                        <label for="inlineradio9"> Yes </label>
                                                    </div></e><e class="aks_value"><div style="margin-left: 11px;" class="radio radio-inline">
                                                        <input type="radio" disabled="" id="inlineradio10" value="No" name="feeder" <?php if($coating_complete['feeder'] == 'No') echo 'checked' ?>>
                                                        <label for="inlineradio10"> No </label>
                                                    </div></td>
                                            <td colspan="2">Check Paper Specs : <div class="radio radio-inline">
                                                        <input type="radio" disabled="" id="inlineradio11" value="Yes" name="specs" <?php if($coating_complete['specs'] == 'Yes') echo 'checked' ?>>
                                                        <label for="inlineradio11"> Yes </label>
                                                    </div></e><e class="aks_value"><div style="margin-left: 11px;" class="radio radio-inline">
                                                        <input type="radio" disabled="" id="inlineradio12" value="No" name="specs" <?php if($coating_complete['specs'] == 'No') echo 'checked' ?>>
                                                        <label for="inlineradio12"> No </label>
                                                    </div></td>
                                            
                                        </tr> 

                                        <tr>
                                            <td>Delivery set : <div class="radio radio-inline">
                                                        <input type="radio" disabled="" id="inlineradio13" value="Yes" name="delivery" <?php if($coating_complete['delivery'] == 'Yes') echo 'checked' ?>>
                                                        <label for="inlineradio13"> Yes </label>
                                                    </div></e><e class="aks_value"><div style="margin-left: 11px;" class="radio radio-inline">
                                                        <input type="radio" disabled="" id="inlineradio14" value="No" name="delivery" <?php if($coating_complete['delivery'] == 'No') echo 'checked' ?>>
                                                        <label for="inlineradio14"> No </label>
                                                    </div></td>
                                            <td colspan="2">Impression set : <div class="radio radio-inline">
                                                        <input type="radio" disabled="" id="inlineradio15" value="Yes" name="impression" <?php if($coating_complete['impression'] == 'Yes') echo 'checked' ?>>
                                                        <label for="inlineradio15"> Yes </label>
                                                    </div></e><e class="aks_value"><div style="margin-left: 11px;" class="radio radio-inline">
                                                        <input type="radio" disabled="" id="inlineradio6" value="No" name="impression" <?php if($coating_complete['impression'] == 'No') echo 'checked' ?>>
                                                        <label for="inlineradio16"> No </label>
                                                    </div></td>
                                            
                                        </tr> 


                                        <tr>
                                            <td>Cleaning : <div class="radio radio-inline">
                                                        <input type="radio" disabled="" id="inlineradio13" value="Yes" name="cleaning" <?php if($coating_complete['cleaning'] == 'Yes') echo 'checked' ?>>
                                                        <label for="inlineradio13"> Yes </label>
                                                    </div></e><e class="aks_value"><div style="margin-left: 11px;" class="radio radio-inline">
                                                        <input type="radio" disabled="" id="inlineradio14" value="No" name="cleaning" <?php if($coating_complete['cleaning'] == 'No') echo 'checked' ?>>
                                                        <label for="inlineradio14"> No </label>
                                                    </div></td>
                                            <td colspan="2">Gauge set : <div class="radio radio-inline">
                                                        <input type="radio" disabled="" id="inlineradio15" value="Yes" name="gauge" <?php if($coating_complete['gauge'] == 'Yes') echo 'checked' ?>>
                                                        <label for="inlineradio15"> Yes </label>
                                                    </div></e><e class="aks_value"><div style="margin-left: 11px;" class="radio radio-inline">
                                                        <input type="radio" disabled="" id="inlineradio6" value="No" name="gauge" <?php if($coating_complete['gauge'] == 'No') echo 'checked' ?>>
                                                        <label for="inlineradio16"> No </label>
                                                    </div></td>
                                            
                                        </tr> 

                                        
                                        <tr>
                                            <td colspan="3">Remarks : ______________________________________________________</td>
                                            
                                        </tr>
                                        
                                        </table>
                                        
                                        <br>
                                        <table class="table table-bordered table-hover" cellpadding="10" style="width: 100%;">
                                            <thead>
                                                <tr>
                                                    <th rowspan="2"><center>Code</center></th>
                                                    <th colspan="3"><center>Time</center></th>
                                                    <th rowspan="2"><center>Counter</center></th>
                                                    <th rowspan="2"><center>Remarks</center></th>
                                                    
                                                    
                                                </tr>
                                                <tr>
                                                    <th><center>From</center></th>
                                                    <th><center>To</center></th>
                                                    <th><center>Hours</center></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                 <?php 
                                                    foreach ($coating_hourse as $d) {
                                                ?>
                                                <tr>
                                                    <th><?php echo $d['code'] ?></th>
                                                    <td><?php echo $d['froms'] ?></td>
                                                    <td><?php echo $d['tos'] ?></td>
                                                    <td><?php echo $d['hours'] ?></td>
                                                    <td><?php echo $d['counter'] ?></td>
                                                    <td><?php echo $d['remarks'] ?></td>
                                                </tr>
                                                <?php } ?>
                                            </tbody>
                                        </table>
                                        <br>
                                        <div class="form-group row">
                                            <table class="minimalistBlack" style="width: 100%;">
                                                <tbody>
                                                    <tr>
                                            <td colspan="">Prepared By <small>(Operator) : ___________</td>
                                            <td colspan="">Prepared By <small>(Incharge) : ___________</td>
                                            <td colspan="">Prepared By <small>(Manager) : ___________</td>
                                            
                                        </tr> <tr style="visibility: hidden;">
                                            <td colspan="">Prepared By <small>(Operator) : ___________</td>
                                            <td colspan="">Prepared By <small>(Incharge) : ___________</td>
                                            <td colspan="">Prepared By <small>(Manager) : ___________</td>
                                            
                                        </tr><tr style="visibility: hidden;">
                                            <td colspan="">Prepared By <small>(Operator) : ___________</td>
                                            <td colspan="">Prepared By <small>(Incharge) : ___________</td>
                                            <td colspan="">Prepared By <small>(Manager) : ___________</td>
                                            
                                        </tr><tr style="visibility: hidden;">
                                            <td colspan="">Prepared By <small>(Operator) : ___________</td>
                                            <td colspan="">Prepared By <small>(Incharge) : ___________</td>
                                            <td colspan="">Prepared By <small>(Manager) : ___________</td>
                                            
                                        </tr><tr style="visibility: hidden;">
                                            <td colspan="">Prepared By <small>(Operator) : ___________</td>
                                            <td colspan="">Prepared By <small>(Incharge) : ___________</td>
                                            <td colspan="">Prepared By <small>(Manager) : ___________</td>
                                            
                                        </tr><tr style="visibility: hidden;">
                                            <td colspan="">Prepared By <small>(Operator) : ___________</td>
                                            <td colspan="">Prepared By <small>(Incharge) : ___________</td>
                                            <td colspan="">Prepared By <small>(Manager) : ___________</td>
                                            
                                        </tr><tr style="visibility: hidden;">
                                            <td colspan="">Prepared By <small>(Operator) : ___________</td>
                                            <td colspan="">Prepared By <small>(Incharge) : ___________</td>
                                            <td colspan="">Prepared By <small>(Manager) : ___________</td>
                                            
                                        </tr>
                                                </tbody>
                                        
                                            </table>
                                            
                                        </div>
                                        <div>
                                              
                             <?php if (isset($inprocess_inspection_coating)) { ?>
                                <div class="form-group row">
                                    <div class="form-group col-lg-12">
                                        <table class="minimalistBlack" style="width: 100%;">
                                            <tr>
                                                 <th colspan="10"><center>Checking Parameters</center></th>
                                                 <th rowspan="2">Remarks</th>
                                             </tr>
                                            <tr>
                                                 <th colspan="1">W.O No</th>
                                                 <th colspan="1">Machine</th>
                                                 <th colspan="1">Time</th>
                                                 <th colspan="1">Registration</th>
                                                 <th colspan="1">UV Shade</th>
                                                 <th colspan="1">Set Off</th>
                                                 <th colspan="1">Scummy</th>
                                                 <th colspan="1">Un wanted Marks</th>
                                                 <th colspan="1">UV Closs (Wet)</th>
                                                 <th colspan="1">UV Closs (Dry)</th>
                                             </tr>
                                            <tbody>
                                                 <?php 
                                                     foreach ($inprocess_inspection_coating as $iicoating) {
                                                 ?>
                                                    <tr>
                                                         <td>
                                                            <?php echo $iicoating['wo_no']; ?>
                                                         </td>
                                                         <td>
                                                             <?php echo $iicoating['machine']; ?>
                                                         </td>
                                                         <td>
                                                             <?php echo $iicoating['time']; ?>
                                                         </td>
                                                         <td>
                                                             <?php echo $iicoating['registration']; ?>
                                                         </td>
                                                         <td>
                                                             <?php echo $iicoating['uv_shade']; ?>
                                                         </td>
                                                         <td>
                                                             <?php echo $iicoating['set_off']; ?>
                                                         </td>
                                                         <td>
                                                             <?php echo $iicoating['scummy']; ?>
                                                         </td>
                                                         <td>
                                                             <?php echo $iicoating['unwanted_marks']; ?>
                                                         </td>
                                                         <td>
                                                             <?php echo $iicoating['uv_gloves_wet']; ?>
                                                         </td>
                                                         <td>
                                                             <?php echo $iicoating['uv_gloves_dry']; ?>
                                                         </td>
                                                         <td>
                                                             <?php echo $iicoating['remarks']; ?>
                                                         </td>
                                                         
                                                     </tr>
                                                 <?php }  ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>   
                             <?php } ?>

                                        </div>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
                        <button id="btn" class="print-btn_coating btn btn-info pull-right" role="button">Generate Print</button><br><br><br>
        </div>
        <?php } ?>
        <!-- leaflet cutting -->
        <?php 
            if (isset($leaflet_cutting)) {
        ?>
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-bd print-div_leaflet_cutting table_one">
                    <div class="panel-heading">
                        <div class="panel-title">
                            <h4 class="product-totle">View label & leaflet cutting Form</h4><br>
                             <small class="product-tital">DOC NO: PRD/FM/001-02A     REV# 00     Date:<?php echo date('d-m-Y', strtotime($leaflet_cutting['created_at'])) ?></small>
                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <form>
                                <div class="col-sm-12">
                                    <div class="panel-body">
                                        <table class="minimalistBlack" style="width: 100%;">
                                       
                                       
                                        <tbody>
                                        <tr>
                                            <td>Date : <u><?php echo date('d M Y', strtotime($leaflet_cutting['created_at'])) ?></u></td>
                                            <td colspan="2">Shift : <div class="radio radio-inline">
                                                        <input type="radio" disabled="" id="inlineradio1" value="G" name="shift" <?php if($leaflet_cutting['shift'] == 'G') echo 'checked' ?>>
                                                        <label for="inlineradio1"> G </label>
                                                    </div></e><e class="aks_value"><div style="margin-left: 11px;" class="radio radio-inline">
                                                        <input type="radio" disabled id="inlineradio2" value="N" name="shift" <?php if($leaflet_cutting['shift'] == 'N') echo 'checked' ?>>
                                                        <label for="inlineradio2"> N </label>
                                                    </div></td>
                                            
                                           
                                        </tr>
                                        <tr>
                                            <td>W.O # : <u><?php echo $leaflet_cutting_job['WO_no'] ?></u></td>
                                            <td colspan="2">Job Name : <u><?php echo $leaflet_cutting_job['Job_Description'] ?></u></td>
                                            
                                           
                                        </tr>
                                        <tr>
                                            <td>Machine : <u><?php echo $leaflet_cutting_job['machine_Name'] ?></u></td>
                                            <td>P.O. No. : <u><?php echo $leaflet_cutting_job['PO_No'] ?></u></td>
                                            <td>Planned Qty : <u><?php echo $leaflet_cutting_job['Planned_qty'] ?></td>
                                        </tr>
                                        <tr>
                                            <td>Operator : <u><?php echo $leaflet_cutting['operator'] ?></u></td>
                                            <td colspan="2">Assistant : <u><?php echo $leaflet_cutting['assistant'] ?></u></td>
                                            
                                        </tr>
                                        <tr>
                                            <td>Paper sizee : <u><?php echo $leaflet_cutting['paper'] ?></u></td>
                                            <td colspan="">Quantity : <u><?php echo $leaflet_cutting['quantity'] ?></u></td>
                                            <td colspan="">Conversion : <u><?php echo $leaflet_cutting['conversion'] ?></u></td>
                                            
                                        </tr> 
                                       
                                        <tr>
                                            <td>Machine Cleaning : <div class="radio radio-inline">
                                                        <input type="radio" disabled="" id="inlineradio3" value="Yes" name="cleaning" <?php if($leaflet_cutting['cleaning'] == 'Yes') echo 'checked' ?>>
                                                        <label for="inlineradio3"> Yes </label>
                                                    </div></e><e class="aks_value"><div style="margin-left: 11px;" class="radio radio-inline">
                                                        <input type="radio" disabled="" id="inlineradio4" value="No" name="cleaning" <?php if($leaflet_cutting['cleaning'] == 'No') echo 'checked' ?>>
                                                        <label for="inlineradio4"> No </label>
                                                    </div></td>
                                            <td colspan="2">Size set : <div class="radio radio-inline">
                                                        <input type="radio" disabled="" id="inlineradio5" value="Yes" name="size" <?php if($leaflet_cutting['size'] == 'Yes') echo 'checked' ?>>
                                                        <label for="inlineradio5"> Yes </label>
                                                    </div></e><e class="aks_value"><div style="margin-left: 11px;" class="radio radio-inline">
                                                        <input type="radio" disabled="" id="inlineradio6" value="No" name="size" <?php if($leaflet_cutting['size'] == 'No') echo 'checked' ?>>
                                                        <label for="inlineradio6"> No </label>
                                                    </div></td>
                                            
                                        </tr> 
                                        <tr>
                                            <td>Start time : <u><?php echo $leaflet_cutting_job['start_date'] ?></u></td>
                                            <td>End time : <u><?php echo $leaflet_cutting_job['end_date'] ?></u></td>
                                            <td>Total Production : <u><?php echo $leaflet_cutting['production'] ?></u></td>
                                            
                                        </tr>
                                        <tr>
                                            <td colspan="">Waste : <u><?php echo $leaflet_cutting['waste'] ?></u></td>
                                            <td colspan="2">Remarks : <u><?php echo $leaflet_cutting['remarks'] ?></u></td>
                                            
                                        </tr>
                                        
                                        </table>
                                        <br>
                                        <div class="form-group row">
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                <address>
                                                   <label for="example-text-input" class="col-sm-4">Prepared By <small>(Operator)</small> :</label>
                                                    <e class="aks_value">__________________</e>
                                                    <br>
                                                </address>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                <address>
                                                   <label for="example-text-input" class="col-sm-4">Examined By <small>(Incharge)</small> :</label>
                                                    <e class="aks_value">__________________</e>
                                                    <br>
                                                </address>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>

                            </form>

                        </div>          
                    </div>
                </div>
            </div>
                        <button id="btn" class="print-btn_leaflet_cutting btn btn-info pull-right" role="button">Generate Print</button></br></br>
        </div>
        <?php } ?>
         <!-- label_cutting -->
        <?php if (isset($label_cutting)) {?>
            <div class="row">
                <div class="col-sm-12">
                    <div class="panel panel-bd print-div_label_cutting table_one">
                        <div class="panel-heading">
                            <div class="panel-title">
                                <h4 class="product-totle">View label cutting Form</h4><br>
                                
                            </div>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <form>
                                    <div class="col-sm-12">
                                        <div class="panel-body">
                                            <table class="minimalistBlack" style="width: 100%;">
                                           
                                           
                                            <tbody>
                                            <tr>
                                                <td>Date : <u><?php echo date('d M Y', strtotime($label_cutting['created_at'])) ?></u></td>
                                                <td colspan="2">Shift : <div class="radio radio-inline">
                                                            <input type="radio" disabled="" id="inlineradio1" value="G" name="shift" <?php if($label_cutting['shift'] == 'G') echo 'checked' ?>>
                                                            <label for="inlineradio1"> G </label>
                                                        </div></e><e class="aks_value"><div style="margin-left: 11px;" class="radio radio-inline">
                                                            <input type="radio" disabled id="inlineradio2" value="N" name="shift" <?php if($label_cutting['shift'] == 'N') echo 'checked' ?>>
                                                            <label for="inlineradio2"> N </label>
                                                        </div></td>
                                                
                                               
                                            </tr>
                                            <tr>
                                                <td>W.O # : <u><?php echo $label_cutting['WO_no'] ?></u></td>
                                               <td colspan="2">Job Description : <u><?php echo $label_cutting['Job_Description'] ?></u></td>
                                                
                                               
                                            </tr>
                                            <tr>
                                                <td>Machine : <u><?php echo $label_cutting['machine_Name'] ?></u></td>
                                                <td>P.O. No. : <u><?php echo $label_cutting['po_no'] ?></u></td>
                                                <td>Planned Qty : <u><?php echo $label_cutting['Planned_qty'] ?></td>
                                            </tr>
                                            <tr>
                                                <td>Operator : <u><?php echo $label_cutting['operator'] ?></u></td>
                                                <td colspan="2">Assistant : <u><?php echo $label_cutting['assistant'] ?></u></td>
                                                
                                            </tr>
                                            <tr>
                                                <td>Paper sizee : <u><?php echo $label_cutting['paper_size'] ?></u></td>
                                                <td colspan="">Quantity : <u><?php echo $label_cutting['quantity'] ?></u></td>
                                                <td colspan="">Conversion : <u><?php echo $label_cutting['conversion'] ?></u></td>
                                                
                                            </tr> 
                                           
                                            <tr>
                                                <td>Machine Cleaning : <div class="radio radio-inline">
                                                            <input type="radio" disabled="" id="inlineradio3" value="Yes" name="machine_cleaning" <?php if($label_cutting['machine_cleaning'] == 'Yes') echo 'checked' ?>>
                                                            <label for="inlineradio3"> Yes </label>
                                                        </div></e><e class="aks_value"><div style="margin-left: 11px;" class="radio radio-inline">
                                                            <input type="radio" disabled="" id="inlineradio4" value="No" name="machine_cleaning" <?php if($label_cutting['machine_cleaning'] == 'No') echo 'checked' ?>>
                                                            <label for="inlineradio4"> No </label>
                                                        </div></td>
                                                <td colspan="2">Size set : <div class="radio radio-inline">
                                                            <input type="radio" disabled="" id="inlineradio5" value="Yes" name="size_set" <?php if($label_cutting['size_set'] == 'Yes') echo 'checked' ?>>
                                                            <label for="inlineradio5"> Yes </label>
                                                        </div></e><e class="aks_value"><div style="margin-left: 11px;" class="radio radio-inline">
                                                            <input type="radio" disabled="" id="inlineradio6" value="No" name="size" <?php if($label_cutting['size_set'] == 'No') echo 'checked' ?>>
                                                            <label for="inlineradio6"> No </label>
                                                        </div></td>
                                                
                                            </tr> 
                                            <tr>
                                                <td>Start time : <u><?php echo $label_cutting['start_date'] ?></u></td>
                                                <td>End time : <u><?php echo $label_cutting['end_date'] ?></u></td>
                                                <td>Total Production : <u><?php echo $label_cutting['total_production'] ?></u></td>
                                                
                                            </tr>
                                            <tr>
                                                <td colspan="">Waste : <u><?php echo $label_cutting['waste'] ?></u></td>
                                                <td colspan="2">Remarks : <u><?php echo $label_cutting['remarks'] ?></u></td>
                                                
                                            </tr>
                                            <tr>
                                                <td colspan="">Packers Name : <u><?php echo $label_cutting['packers_name'] ?></u></td>
                                                <td colspan="2">Master Carton : <u><?php echo $label_cutting['master_carton'] ?></u></td>
                                                
                                            </tr> 
                                            <tr>
                                                <td colspan="">Weight : <u><?php echo $label_cutting['weight'] ?></u></td>
                                                <td colspan="2">Packing Size : <u><?php echo $label_cutting['packing_Size'] ?></u></td>
                                                
                                            </tr>
                                            
                                            </table>
                                            <br>
                                            <div class="form-group row">
                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                    <address>
                                                       <label for="example-text-input" class="col-sm-4">Prepared By <small>(Operator)</small> :</label>
                                                        <e class="aks_value">__________________</e>
                                                        <br>
                                                    </address>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                    <address>
                                                       <label for="example-text-input" class="col-sm-4">Examined By <small>(Incharge)</small> :</label>
                                                        <e class="aks_value">__________________</e>
                                                        <br>
                                                    </address>
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>

                                </form>

                            </div>
                        </div>
                    </div>
                </div>
                            <button id="btn" class="print-btn_label_cutting btn btn-info pull-right" role="button">Generate Print</button><//br></br>
            </div>
        <?php } ?>

        <!-- line clearance -->
        <?php if (isset($line_clearance)) {
                foreach ($line_clearance as $data) {
        ?>
            <div class="row">
                <div class="col-sm-12">
                    <div class="panel panel-bd print-div_line_clearance_form_<?php echo $data['flow_name'] ?> table_one">
                        <div class="panel-heading">
                            <div class="panel-title">
                                <h4 class="product-totle">Line Clearance Form (<?php echo $data['flow_name'] ?>)</h4><br>
                                <small class="product-tital">DOC NO: PRD/FM/001-02A  |    REV# 00   |  Date:<?php echo date('d-m-Y', strtotime($data['created_at'])) ?></small>
                            </div>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <form>
                                    <div class="col-sm-12">
                                        <div class="panel-body ">
                                            <table class="table table-bordered table-hover minimalistBlack" style="width: 100%;">
                                                <tbody>
                                                    <tr>
                                                        <td>Previous Job No : <u><?php echo $data['previous'] ?></u></td>
                                                        <td colspan="2">Date : <u><?php echo date('d M Y', strtotime($data['created_at'])) ?></u></td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="3">Crunt Job No : <u><?php echo $wo_no ?></u></td>

                                                    </tr>
                                            </table>

                                            <table class="minimalistBlack table table-bordered table-hover" style="width: 100%;">
                                                <tbody>
                                                    <tr>
                                                        <td></td>
                                                        <td colspan="">Yes</td>
                                                        <td colspan="">No</td>
                                                        <td colspan="">Remarks</td>

                                                    </tr>
                                                    <tr>
                                                        <td colspan="">Is there any material of previous Job</td>
                                                        <td colspan="">
                                                            <div class="radio radio-inline">
                                                                <input type="radio" disabled id="inlineradio1" name="material" value="Yes" <?php if($data['material'] == 'Yes') echo 'checked' ?>>
                                                                <label for="inlineradio1">  &nbsp;&nbsp; </label>
                                                            </div>
                                                        </td>
                                                        <td colspan="">
                                                            <div class="radio radio-inline">
                                                                <input type="radio" disabled id="inlineradio2" name="material" value="No" <?php if($data['material'] == 'No') echo 'checked' ?>>
                                                                <label for="inlineradio2">  &nbsp;&nbsp; &nbsp; </label>
                                                            </div>
                                                        </td>
                                                        <td colspan=""><?php echo $data['material_remarks'] ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="">Is there any printed item of previous Job</td>
                                                        <td colspan="">
                                                            <div class="radio radio-inline">
                                                                <input type="radio" disabled id="inlineradio3" name="printed" value="Yes" <?php if($data['printed'] == 'Yes') echo 'checked' ?>>
                                                                <label for="inlineradio3">  &nbsp;&nbsp; </label>
                                                            </div>
                                                        </td>
                                                        <td colspan="">
                                                            <div class="radio radio-inline">
                                                                <input type="radio" disabled id="inlineradio4" name="printed" value="No" <?php if($data['printed'] == 'No') echo 'checked' ?>>
                                                                <label for="inlineradio4">  &nbsp;&nbsp; </label>
                                                            </div>
                                                        </td>
                                                        <td colspan=""><?php echo $data['printed_remarks'] ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="">Is there any document of previous Job</td>
                                                        <td colspan="">
                                                            <div class="radio radio-inline">
                                                                <input type="radio" disabled id="inlineradio5" name="document" value="Yes" <?php if($data['document'] == 'Yes') echo 'checked' ?>>
                                                                <label for="inlineradio5">  &nbsp;&nbsp; </label>
                                                            </div>
                                                        </td>
                                                        <td colspan="">
                                                            <div class="radio radio-inline">
                                                                <input type="radio" disabled id="inlineradio6" name="document" value="No" <?php if($data['document'] == 'No') echo 'checked' ?>>
                                                                <label for="inlineradio6">  &nbsp;&nbsp; </label>
                                                            </div>
                                                        </td>
                                                        <td colspan=""><?php echo $data['document_remarks'] ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="">Is there any waste near machine</td>
                                                        <td colspan="">
                                                            <div class="radio radio-inline">
                                                                <input type="radio" disabled id="inlineradio7" name="waste" value="Yes" <?php if($data['waste'] == 'Yes') echo 'checked' ?>>
                                                                <label for="inlineradio7">  &nbsp;&nbsp; </label>
                                                            </div>
                                                        </td>
                                                        <td colspan="">
                                                            <div class="radio radio-inline">
                                                                <input type="radio" disabled id="inlineradio8" name="waste" value="No" <?php if($data['waste'] == 'No') echo 'checked' ?>>
                                                                <label for="inlineradio8">  &nbsp;&nbsp; </label>
                                                            </div>
                                                        </td>
                                                        <td colspan=""><?php echo $data['waste_remarks'] ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="">Is there any oil leakage</td>
                                                        <td colspan="">
                                                            <div class="radio radio-inline">
                                                                <input type="radio" disabled id="inlineradio9" name="oil" value="Yes" <?php if($data['oil'] == 'Yes') echo 'checked' ?>>
                                                                <label for="inlineradio9">  &nbsp;&nbsp; </label>
                                                            </div>
                                                        </td>
                                                        <td colspan="">
                                                            <div class="radio radio-inline">
                                                                <input type="radio" disabled id="inlineradio10" name="oil" value="No" <?php if($data['oil'] == 'No') echo 'checked' ?>>
                                                                <label for="inlineradio10">  &nbsp;&nbsp; </label>
                                                            </div>
                                                        </td>
                                                        <td colspan=""><?php echo $data['oil_remarks'] ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="">Is the machine & area clean</td>
                                                        <td colspan="">
                                                            <div class="radio radio-inline">
                                                                <input type="radio" disabled id="inlineradio11" name="clean" value="Yes" <?php if($data['clean'] == 'Yes') echo 'checked' ?>>
                                                                <label for="inlineradio11">  &nbsp;&nbsp; </label>
                                                            </div>
                                                        </td>
                                                        <td colspan="">
                                                            <div class="radio radio-inline">
                                                                <input type="radio" disabled id="inlineradio12" name="clean" value="No" <?php if($data['clean'] == 'No') echo 'checked' ?>>
                                                                <label for="inlineradio12">  &nbsp;&nbsp; </label>
                                                            </div>
                                                        </td>
                                                        <td colspan=""><?php echo $data['clean_remarks'] ?></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <br>
                                            <div class="form-group row">
                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                    <address>
                                                       <label for="example-text-input" class="col-sm-4">Checked by</small> :</label>
                                                        <e class="aks_value">__________________</e>
                                                        <br>
                                                    </address>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                    <address>
                                                       <label for="example-text-input" class="col-sm-4">QC Inspector</small> :</label>
                                                        <e class="aks_value">__________________</e>
                                                        <br>
                                                    </address>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <button id="btn" class="print-btn_line_clearance_form_<?php echo $data['flow_name'] ?> btn btn-info pull-right" role="button">Generate Print</button><br><br><br>
                </div>
            </div>
        <?php } } ?>
        
        
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-bd print-div_process_flow table_one">
                    <div class="panel-heading">
                        <div class="panel-title">
                            <h4 class="product-totle">Process Flow</h4><br>
                        </div>
                    </div>
                    <div class="panel-body">
                                                
                                                <div class="table-responsive">
                                                    <table id="" class="table table-bordered table-striped table-hover" style="width: 100%;">
                                                        <thead>
                                                            <tr>
                                                                <th>Name</th>
                                                                <th>Remarks</th>
                                                                <th>File</th>
                                                                
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php 
                                                                if (isset($development)) {
                                                            ?>
                                                            <tr>
                                                                <td>Development</td>
                                                                <td><?php echo $development['remarks'] ?></td>
                                                                <td><?php if ($development['file']) {?><a download href="<?php echo base_url($development['file']) ?>">View Attechment</a><?php } ?></td>
                                                                
                                                               
                                                                   
                                                            </tr>
                                                            <?php } ?>
                                                            <?php 
                                                                if (isset($design)) {
                                                            ?>
                                                            <tr>
                                                                <td>Design</td>
                                                                <td><?php echo $design['remarks'] ?></td>
                                                                <td><?php if ($design['file']) {?><a download href="<?php echo base_url($design['file']) ?>">View Attechment</a><?php } ?></td>
                                                                
                                                               
                                                                   
                                                            </tr>
                                                            <?php } ?>
                                                             <?php 
                                                                if (isset($profing)) {
                                                            ?>
                                                            <tr>
                                                                <td>Profing</td>
                                                                <td><?php echo $profing['remarks'] ?></td>
                                                                <td><?php if ($profing['file']) {?><a download href="<?php echo base_url($profing['file']) ?>">View Attechment</a><?php } ?></td>
                                                                
                                                               
                                                                   
                                                            </tr>
                                                            <?php } ?>
                                                           
                                                        </tbody>
                                                    </table>
                                                    
                                                </div>
                                            </div>    
                                                </div>
                                            <button id="btn" class="print-btn_process_flow btn btn-info pull-right" role="button">Generate Print</button><br></br>    
                                            </div>        
                                                </div>

<?php if (isset($sorting)): ?>
    <div class="row">
        <div class="col-sm-12">
            <div class="panel panel-bd print-div_sorting ">
                <div class="panel-heading">
                    <div class="panel-title">
                        <h4 class="product-totle">View Sorting Report</h4>
                        <br>
                        <small class="product-tital"></small>
                    </div>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <form>
                            <div class="col-sm-12">
                                <div class="panel-body ">

                                    <table class="minimalistBlack" style="width: 100%;">

                                        <tbody>

                                            <tr>
                                                <td>W.O # : <u><?php echo $sorting['wo_no'] ?></u></td>
                                                <td colspan="2">Date : <u><?php echo $sorting['date'] ?></u></td>

                                            </tr>
                                            <tr>
                                                <td colspan="3">Description : <u><?php echo $sorting['description'] ?></u></td>

                                            </tr>
                                            <tr>
                                                <td colspan="3">Name Of Sorter : <u><?php echo $sorting['name_of_sorter'] ?></u></td>

                                            </tr>
                                            <tr>
                                                <td colspan="3">Time From : <u><?php echo $sorting['time_from'] ?></u>
                                                    Time To : <u><?php echo $sorting['time_to'] ?></u></td>

                                            </tr>
                                            <tr>
                                                <td colspan="3"> Recived Quantity : <u><?php echo $sorting['recived_quantity'] ?></u></td>

                                            </tr>
                                             <tr>

                                                <td colspan="3">
                                                    <center>
                                                        <h5>After Sorting</h5></center>
                                                </td>

                                            </tr>
                                            <tr>

                                                <td colspan="3">good_quantity : <u><?php echo $sorting['good_quantity'] ?></u></td>

                                            </tr>
                                            <tr>

                                                <td colspan="3">half_good_quantity : <u><?php echo $sorting['half_good_quantity'] ?></u></td>

                                            </tr>
                                           
                                            <tr>

                                                <td>waste_quantity : <u><?php echo $sorting['waste_quantity'] ?></u></td>
                                                <td colspan="2">remarks : <u></u></td>

                                            </tr>
                                            <tr>

                                                <td colspan="3">remarks : <u><?php echo $sorting['remarks'] ?></u></td>

                                            </tr>
                                           

                                    </table>
                                    <br>
                                    <div class="form-group row">
                                        <div class="col-lg-6 col-md-8 col-sm-6 col-xs-6">
                                            <address>
                                               <label for="example-text-input" class="col-sm-5">Sorter(s) Signatures  :</label>
                                                <e class="aks_value">__________________</e>
                                                <br>
                                            </address>
                                        </div>
                                        <div class="col-lg-6 col-md-8 col-sm-6 col-xs-6">
                                            <address>
                                               <label for="example-text-input" class="col-sm-5">Supervisior  :</label>
                                                <e class="aks_value">__________________</e>
                                                <br>
                                            </address>
                                        </div>

                                    </div>
                                    <div>
                                    </div>

                        </form>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            <button id="btn" class="print-btn_sorting btn btn-info pull-right" role="button">Generate Print</button>
            <div style="height: 60px;"></div>
        </div>
    </div>
<?php endif ?>

<?php if (isset($batch_release)) {?>
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-bd print-div ">
                    <div class="panel-heading">
                        <div class="panel-title">
                            <h4 class="product-totle">View Batch Release Form</h4>
                            <br>
                            <small class="product-tital"> DOC NO: PRD/FM/005-01 | REV # 00</small>
                        </div>
                    </div>
                <div class="panel-body">
                    <div class="row">
                        <form>
                            <div class="col-sm-12">
                                <div class="panel-body ">

                                    <table class="minimalistBlack" style="width: 100%;">

                                        <tbody>
                                            <tr>
                                                <td>W.O # : <u><?php echo $batch_release['wo_id'] ?></u></td>
                                                <td colspan="3">Date : <u><?php echo date('d/m/Y', strtotime($batch_release['created_at'])) ?></u></td>

                                            </tr>
                                            <tr>
                                                <td colspan="4">Product Name : <u><?php echo $batch_release['product_name'] ?></u></td>

                                            </tr>
                                            <tr>
                                                <td >Order Qty : <u><?php echo $batch_release['quantity'] ?></u></td>
                                                <td colspan="3">Total Cartons : <u><?php echo $batch_release['total_carton'] ?></u></td>

                                            </tr>
                                            <tr>
                                                <td >Name Of Machine Operator : <u><?php echo $batch_release['operator'] ?></u></td>
                                                <td colspan="3"> Machine Name : <u><?php echo $batch_release['machine_Name'] ?></u></td>
                                            </tr>
                                           
                                            <tr>

                                                <td >Status Of Batch : <u><?php echo $batch_release['status'] ?></u></td>
                                                 <td colspan="3">Finished Quantity : <u><?php echo $batch_release['finish_qty'] ?></u></td>
                                            </tr>
                                            <tr>
                                                <th>
                                                    <center>Parameters</center>
                                                </th>
                                                <th>
                                                    <center>Standard</center>
                                                </th>

                                                <th>
                                                    <center>Status</center>
                                                </th>

                                                <th>
                                                    <center>Remarks</center>
                                                </th>
                                            </tr>   
                                            <tr>
                                                <td>
                                                    Grammage
                                                </td>

                                                <td>
                                                    Specification
                                                </td>

                                                <td>
                                                    <?php echo $batch_release['grammage_status'] ?>
                                                </td>

                                                <td>
                                                    <?php echo $batch_release['grammage_remarks'] ?>
                                                </td>

                                            </tr>

                                            <tr>
                                                <td>
                                                    Color
                                                </td>

                                                <td>
                                                    Approved shade card
                                                </td>

                                                <td>
                                                    <?php echo $batch_release['color_status'] ?>
                                                </td>

                                                <td>
                                                    <?php echo $batch_release['color_remarks'] ?>
                                                </td>

                                            </tr>

                                            <tr>
                                                <td>
                                                    Design
                                                </td>

                                                <td>
                                                    Approved sample
                                                </td>

                                                <td>
                                                    <?php echo $batch_release['design_status'] ?>
                                                </td>

                                                <td>
                                                    <?php echo $batch_release['design_remarks'] ?>
                                                </td>

                                            </tr>
                                            <tr>
                                                <td>
                                                    Text
                                                </td>

                                                <td>
                                                    Approved text
                                                </td>

                                                <td>
                                                    <?php echo $batch_release['text_status'] ?>
                                                </td>

                                                <td>
                                                    <?php echo $batch_release['text_remarks'] ?>
                                                </td>

                                            </tr>
                                            <tr>
                                                <td>
                                                    Scum & Spots
                                                </td>

                                                <td>
                                                    As Client Standard
                                                </td>

                                                <td>
                                                    <?php echo $batch_release['scum_spots_status'] ?>
                                                </td>

                                                <td>
                                                    <?php echo $batch_release['scum_spots_remarks'] ?>
                                                </td>

                                            </tr>
                                            <tr>
                                                <td>
                                                    Gloss
                                                </td>

                                                <td>
                                                    As per Standard
                                                </td>

                                                <td>
                                                    <?php echo $batch_release['gloss_status'] ?>
                                                </td>

                                                <td>
                                                    <?php echo $batch_release['gloss_remarks'] ?>
                                                </td>

                                            </tr>
                                            <tr>
                                                <td>
                                                    Die Cutting & Embossing
                                                </td>

                                                <td>
                                                    As Client Standard
                                                </td>

                                                <td>
                                                    <?php echo $batch_release['die_cutting_embossing_status'] ?>
                                                </td>

                                                <td>
                                                    <?php echo $batch_release['die_cutting_embossing_remarks'] ?>
                                                </td>

                                            </tr>

                                            <tr>
                                                <td>
                                                    Creasing
                                                </td>

                                                <td>
                                                    As per standard
                                                </td>

                                                <td>
                                                    <?php echo $batch_release['creasing_status'] ?>
                                                </td>

                                                <td>
                                                    <?php echo $batch_release['creasing_remarks'] ?>
                                                </td>

                                            </tr>

                                            <tr>
                                                <td>
                                                    Stripping
                                                </td>

                                                <td>
                                                    As per standard
                                                </td>

                                                <td>
                                                    <?php echo $batch_release['stripping_status'] ?>
                                                </td>

                                                <td>
                                                    <?php echo $batch_release['stripping_remarks'] ?>
                                                </td>

                                            </tr>

                                            <tr>
                                                <td>
                                                    Folding & Gluing
                                                </td>

                                                <td>
                                                    As per standard
                                                </td>

                                                <td>
                                                    <?php echo $batch_release['folding_gluing_status'] ?>
                                                </td>

                                                <td>
                                                    <?php echo $batch_release['folding_gluing_remarks'] ?>
                                                </td>

                                            </tr>

                                            <tr>
                                                <td>
                                                    Labeling
                                                </td>

                                                <td>
                                                    As per standard
                                                </td>

                                                <td>
                                                    <?php echo $batch_release['labeling_status'] ?>
                                                </td>

                                                <td>
                                                    <?php echo $batch_release['labeling_remarks'] ?>
                                                </td>

                                            </tr>

                                            <tr>
                                                <td>
                                                    Packing
                                                </td>

                                                <td>
                                                    As per standard
                                                </td>

                                                <td>
                                                    <?php echo $batch_release['packing_status'] ?>
                                                </td>

                                                <td>
                                                    <?php echo $batch_release['packing_remarks'] ?>
                                                </td>

                                            </tr>

                                            <tr>
                                                <td>
                                                    Master Cartons
                                                </td>

                                                <td>
                                                    As per standard
                                                </td>

                                                <td>
                                                    <?php echo $batch_release['master_cartons_status'] ?>
                                                </td>

                                                <td>
                                                    <?php echo $batch_release['master_cartons_remarks'] ?>
                                                </td>

                                            </tr>
                                            
                                            <!-- <tr>

                                                <td colspan="3">
                                                    <center>
                                                        <h5>Packing Area</h5></center>
                                                </td>

                                            </tr>
                                            <tr>

                                                <td>Packer Name : <u><?php echo $batch_release['packer_name'] ?></u></td>
                                                <td colspan="2">Date : <u><?php echo date('d/m/Y', strtotime($batch_release['date'])) ?></u></td>

                                            </tr>
                                            <tr>

                                                <td colspan="3">Qty per MC : <u><?php echo $batch_release['qty_per_mc'] ?></u></td>

                                            </tr>
                                            <tr>

                                                <td colspan="3">Total Cartons : <u><?php echo $batch_release['total_carton'] ?></u></td>

                                            </tr> -->

                                    </table>
                                    <br>
                                    <div class="form-group row">
                                                        <div class="col-lg-6 col-md-8 col-sm-6 col-xs-6">
                                                            <address>
                                                               <label for="example-text-input" class="col-sm-5">Batch Release By :</label>
                                                                <e class="aks_value">__________________</e></br>
                                                                <small>QA Executive</small>
                                                                <br>
                                                            </address>
                                                        </div>
                                                        <div class="col-lg-6 col-md-8 col-sm-6 col-xs-6">
                                                            <address>
                                                               <label for="example-text-input" class="col-sm-5">Approved By :</label>
                                                                <e class="aks_value">_________________________</e></br>
                                                                <small>Manager Quality Assurance</small>
                                                                <br>
                                                            </address>
                                                        </div>

                                                    </div>
                                    <div>
                                    </div>

                        </form>
                        </div>
                        </div>
                    </div>
                </div>
                </div>
                <button id="btn" class="print-btn btn btn-info pull-right" role="button">Generate Print</button>
                
            </div>
        </div>
<?php } ?>

                                            </div>
      
<?php if (isset($stripping_report)): ?>
    <div class="row">
        <div class="col-sm-12">
            <div class="panel panel-bd print-div_stripping_report ">
                <div class="panel-heading">
                    <div class="panel-title">
                        <h4 class="product-totle">View Stripping Report</h4>
                        <br>
                        <small class="product-tital"></small>
                    </div>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <form>
                            <div class="col-sm-12">
                                <div class="panel-body ">

                                    <table class="minimalistBlack" style="width: 100%;">

                                        <tbody>

                                            <tr>
                                                <td>W.O # : <u><?php echo $stripping_report['WO_no'] ?></u></td>
                                                <td colspan="2">Date : <u><?php echo $stripping_report['date'] ?></u></td>

                                            </tr>
                                            <tr>
                                                <td colspan="3">Description : <u><?php echo $stripping_report['description'] ?></u></td>

                                            </tr>
                                            <tr>
                                                <td colspan="3">Name Of Workers : <u><?php echo $stripping_report['name_of_workers'] ?></u></td>

                                            </tr>
                                            <tr>
                                                <td colspan="3">Time From : <u><?php echo $stripping_report['time_from'] ?></u>
                                                    Time To : <u><?php echo $stripping_report['time_to'] ?></u></td>

                                            </tr>
                                            <tr>
                                                <td colspan="3"> Recived Quantity : <u><?php echo $stripping_report['recived_quantity'] ?></u></td>

                                            </tr>
                                             
                                            <tr>

                                                <td colspan="3">Finished Quantity : <u><?php echo $stripping_report['finished_quantity'] ?></u></td>

                                            </tr>
                                            <tr>

                                                <td colspan="3">Sorter : <u><?php echo $stripping_report['sorter'] ?></u></td>

                                            </tr>
                                           
                                            <tr>

                                                <td colspan="2">Supervisior : <u><?php echo $stripping_report['supervisior'] ?></u></td>
                                                

                                            </tr>
                                           
                                           

                                    </table>
                                    <br>
                                    <div class="form-group row">
                                        <div class="col-lg-6 col-md-8 col-sm-6 col-xs-6">
                                            <address>
                                               <label for="example-text-input" class="col-sm-5">Sorter(s) Signatures  :</label>
                                                <e class="aks_value">__________________</e>
                                                <br>
                                            </address>
                                        </div>
                                        <div class="col-lg-6 col-md-8 col-sm-6 col-xs-6">
                                            <address>
                                               <label for="example-text-input" class="col-sm-5">Supervisior  :</label>
                                                <e class="aks_value">__________________</e>
                                                <br>
                                            </address>
                                        </div>

                                    </div>
                                    <div>
                                    </div>

                        </form>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            <button id="btn" class="print-btn_stripping_report btn btn-info pull-right" role="button">Generate Print</button>
            <div style="height: 60px;"></div>
        </div>
    </div>
<?php endif ?>
        
    </div>
    <!-- qc reports -->
    <div class="content-header">
        <div class="header-icon">
            <i class="pe-7s-note2"></i>
        </div>
        <div class="header-title">
            <h1>QC Reports</h1>
            <small></small>
        </div>
    </div>
    <?php if (isset($goods_receiving_notes)): ?>
    <div class="row">
        <div class="col-sm-12">
            <div class="panel panel-bd print-div_goods_recevied_report ">
                <div class="panel-heading">
                    <div class="panel-title">
                        <h4 class="product-totle">View Goods Receiving Notes Report</h4>
                        <br>
                        <small class="product-tital"></small>
                    </div>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="panel-body ">
                                <table class="minimalistBlack" style="width: 100%;">
                                    <tbody>
                                        <tr>
                                            <td>W.O # : <u><?php echo $goods_receiving_notes['wo_no'] ?></u></td>
                                            <td colspan="2">GRN # : <u><?php echo $goods_receiving_notes['grn_no'] ?></u></td>

                                        </tr>
                                        <tr>
                                            <td colspan="3">Date : <u><?php echo $goods_receiving_notes['grn_date'] ?></u></td>

                                        </tr>
                                        <tr>
                                            <td colspan="3">Supplier's Name : <u><?php echo $goods_receiving_notes['supplier_name'] ?></u></td>

                                        </tr>
                                        <tr>
                                            <td colspan="">Requisition #  : <u><?php echo $goods_receiving_notes['requisition_no'] ?></u>  </td>
                                            <td>
                                                po_no : <u><?php echo $goods_receiving_notes['po_no'] ?></u>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="3"> P.O Date : : <u><?php echo $goods_receiving_notes['po_date'] ?></u></td>

                                        </tr>

                                        <tr>

                                            <td colspan="3">Delivery Note No  : <u><?php echo $goods_receiving_notes['delivery_note_no'] ?></u></td>

                                        </tr>
                                       
                                    </tbody>
                                </table>
                                <br>
                                <?php if (isset($goods_receiving_notes_item_desc)) { ?>
                                   <div class="form-group row">
                                       <div class="form-group col-lg-12">
                                           <table class="minimalistBlack" style="width: 100%;">
                                               <tr>
                                                    <th colspan="3">Item Description</th>
                                                    <th colspan="1">Unit</th>
                                                    <th colspan="1">Qty</th>
                                                    <th colspan="3">Remarks</th>
                                                </tr>
                                               <tbody>
                                                    <?php 
                                                        foreach ($goods_receiving_notes_item_desc as $goods) {
                                                    ?>
                                                       <tr>
                                                           <td colspan="3">
                                                            <?php echo $goods['item_description']; ?>
                                                           </td>
                                                           <td>
                                                            <?php echo $goods['unit']; ?>
                                                           </td>
                                                           <td>
                                                            <?php echo $goods['qty']; ?>
                                                           </td>
                                                           <td colspan="3">
                                                            <?php echo $goods['remarks']; ?>
                                                           </td>
                                                           
                                                       </tr>
                                                    <?php }  ?>
                                               </tbody>
                                           </table>
                                       </div>
                                   </div>   
                                <?php } ?>
                                <br>
                                <div class="form-group row">
                                    <div class="col-lg-6 col-md-8 col-sm-6 col-xs-6">
                                        <address>
                                               <label for="example-text-input" class="col-sm-5">Recevied By</label>
                                                <e class="aks_value">__________________</e>
                                                <br>
                                            </address>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <button id="btn" class="print-btn_goods_recevied_report btn btn-info pull-right" role="button">Generate Print</button>
    <div style="height: 60px;"></div>
    <?php endif ?>
    <?php if (isset($process_procedure)): ?>
    <div class="row">
        <div class="col-sm-12">
            <div class="panel panel-bd print-div_process_procedure_report ">
                <div class="panel-heading">
                    <div class="panel-title">
                        <h4 class="product-totle">Process Procedure</h4>
                        <br>
                        <small class="product-tital"></small>
                    </div>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="panel-body ">
                                
                                <?php if (isset($process_procedure)) { ?>
                                   <div class="form-group row">
                                       <div class="form-group col-lg-12">
                                           <table class="minimalistBlack" style="width: 100%;">
                                               <tr>
                                                    <th colspan="7">Name : <e class=""><?php echo $process_procedure['supplier_name']; ?></e> </th>
                                                    <th>MIN No : <e class=""><?php echo $process_procedure['min_no']; ?></e></th>
                                                </tr>
                                                <tr>
                                                    <th colspan="2">P.O # : <e class=""><?php echo $process_procedure['po_no']; ?></e> </th>
                                                    <th colspan="3">Date : <e class=""><?php echo $process_procedure['date']; ?></e></th>
                                                    <th colspan="3">Challan Number : <e class=""><?php echo $process_procedure['challan_number']; ?></e> </th>
                                                </tr>
                                                <tr>
                                                    <th colspan="1">Sr No:</th>
                                                    <th colspan="3">Item Description</th>
                                                   
                                                    <th colspan="1">Unit</th>
                                                    <th colspan="1">Qty Rec</th>
                                                    <th colspan="1">Qty ok</th>
                                                    <th colspan="1">Qty Rej</th>
                                                </tr>
                                               <tbody>
                                                    <?php 
                                                        foreach ($process_procedure_item_desc as $pp) {
                                                    ?>
                                                       <tr>
                                                            <td>
                                                                <?php echo $pp['sr_no'] ?>
                                                            </td>
                                                            <td colspan="3">
                                                                <?php echo $pp['item_description'] ?>
                                                            </td>
                                                            <td>
                                                                <?php echo $pp['unit'] ?>
                                                            </td>
                                                            <td>
                                                                <?php echo $pp['qty_rec'] ?>
                                                            </td>
                                                            <td>
                                                                <?php echo $pp['qty_ok'] ?>
                                                            </td>
                                                            <td>
                                                                <?php echo $pp['qty_rej'] ?>
                                                            </td>
                                                        </tr>
                                                    <?php }  ?>
                                               </tbody>
                                           </table>
                                       </div>
                                   </div>   
                                <?php } ?>
                                <br>
                                <table class="minimalistBlack" style="width: 100%;">
                                    <tbody>
                                        <tr>
                                            <td>W.O # : <u><?php echo $process_procedure_remarks['apperance'] ?></u></td>
                                            <td colspan="2">grammage  : <u><?php echo $process_procedure_remarks['grammage'] ?></u></td>

                                        </tr>
                                        <tr>
                                            <td colspan="3">thickness : <u><?php echo $process_procedure_remarks['thickness'] ?></u></td>

                                        </tr>
                                        <tr>
                                            <td colspan="3">moisture : <u><?php echo $process_procedure_remarks['moisture'] ?></u></td>

                                        </tr>
                                        <tr>
                                            <td colspan="2">ph  : <u><?php echo $process_procedure_remarks['ph'] ?></u>  </td>
                                            <td>
                                                po_no : <u><?php echo $process_procedure_remarks['po_no'] ?></u>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="3"> grain_direction : : <u><?php echo $process_procedure_remarks['grain_direction'] ?></u></td>

                                        </tr>

                                        <tr>

                                            <td>presence_of_insects  : <u><?php echo $process_procedure_remarks['presence_of_insects'] ?></u></td>
                                            <td>oil_and_grease_stains  : <u><?php echo $process_procedure_remarks['oil_and_grease_stains'] ?></u></td>
                                            <td>shade  : <u><?php echo $process_procedure_remarks['shade'] ?></u></td>

                                        </tr>
                                        <tr>

                                            <td>strength  : <u><?php echo $process_procedure_remarks['strength'] ?></u></td>
                                            <td>stick_ability  : <u><?php echo $process_procedure_remarks['stick_ability'] ?></u></td>
                                            <td>miscibility  : <u><?php echo $process_procedure_remarks['miscibility'] ?></u></td>

                                        </tr>
                                        <tr>

                                            <td colspan="2">purity  : <u><?php echo $process_procedure_remarks['purity'] ?></u></td>
                                            <td>remarks  : <u><?php echo $process_procedure_remarks['remarks'] ?></u></td>
                                        </tr>
                                       
                                    </tbody>
                                </table>
                                <br>
                                <div class="form-group row">
                                    <div class="col-lg-6 col-md-8 col-sm-6 col-xs-6">
                                        <address>
                                               <label for="example-text-input" class="col-sm-5">Recevied By <small>Sorter Incharge</small></label>
                                                <e class="aks_value">__________________</e>
                                                <br>
                                        </address>
                                    </div>
                                    <div class="col-lg-6 col-md-8 col-sm-6 col-xs-6">
                                        <address>
                                               <label for="example-text-input" class="col-sm-5">Verifide By<small> Quality Controller</small></label>
                                                <e class="aks_value">__________________</e>
                                                <br>
                                        </address>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <button id="btn" class="print-btn_process_procedure_report btn btn-info pull-right" role="button">Generate Print</button>
    <div style="height: 60px;"></div>
    <?php endif ?>
    <br>
    <br>
    <br>
    <button id="btn" class="print-btn_all btn btn-info pull-left" role="button">Generate Print Full</button><br><br></br>
                </div>    
            </div>
        </div>

     </div>
</div>

<!-- cutting css -->
<style type="text/css">
    table.minimalistBlack {
      
      width: 100%;
      height: 200px;
      text-align: left;
      border-collapse: collapse;
    }
    table.minimalistBlack td, table.minimalistBlack th {
      border: 1px solid #000000;
      padding: 5px 4px;
    }
    table.minimalistBlack tbody td {
      font-size: 13px;
    }
    table.minimalistBlack thead {
      background: #CFCFCF;
      background: -moz-linear-gradient(top, #dbdbdb 0%, #d3d3d3 66%, #CFCFCF 100%);
      background: -webkit-linear-gradient(top, #dbdbdb 0%, #d3d3d3 66%, #CFCFCF 100%);
      background: linear-gradient(to bottom, #dbdbdb 0%, #d3d3d3 66%, #CFCFCF 100%);
      border-bottom: 3px solid #000000;
    }
    table.minimalistBlack thead th {
      font-size: 15px;
      font-weight: bold;
      color: #000000;
      text-align: left;
    }
    table.minimalistBlack tfoot {
      font-size: 14px;
      font-weight: bold;
      color: #000000;
      border-top: 3px solid #000000;
    }
    table.minimalistBlack tfoot td {
      font-size: 14px;
    }
</style>
<script type="text/javascript">
    $('.print-btn_all').click(function() {
        w = window.open();
        var ht = $('.print-div_all').html()
        var head = $('head').html()
        w.document.write('<html>');
        w.document.write('<head>');
        w.document.write(head);
      w.document.write('<style>input[type="radio"]{webkit-appearance: radio;}</style>') 
        w.document.write('<style>.panel-title {    text-align: center;}</style>')
        w.document.write('<style>.radio-inline {display: inline;}</style>')
        w.document.write('<style>.btn-info {display: none;}</style>')
        w.document.write('<style>.content-header {display: none;}</style>')
        
         w.document.write('<style>.table_one {page-break-after:always}</style>')
     w.document.write('<style>.panel-title {    text-align: center;}</style>')
 w.document.write('<style>.radio-inline input[type="radio"]:checked + label:before {content: "*";order: 1;}</style>')
        w.document.write('<style>.radio-inline input[type="radio"]:checked + label {background:pink !important; font-weight: 900; content: "Task";}</style>')
        w.document.write('<style>. table.minimalistBlack {width: 100%;height: 200px; text-align: left; border-collapse: collapse;}</style>')
         w.document.write('<style>table.minimalistBlack td, table.minimalistBlack th {border: 1px solid #000000;padding: 5px 4px;}</style>')
         w.document.write('<style>table.minimalistBlack tbody td {font-size: 13px;}</style>')
         w.document.write('<style>table.minimalistBlack thead {background: #CFCFCF;background: -moz-linear-gradient(top, #dbdbdb 0%, #d3d3d3 66%, #CFCFCF 100%);background: -webkit-linear-gradient(top, #dbdbdb 0%, #d3d3d3 66%, #CFCFCF 100%);background: linear-gradient(to bottom, #dbdbdb 0%, #d3d3d3 66%, #CFCFCF 100%);border-bottom: 3px solid #000000;}</style>')
         w.document.write('<style>table.minimalistBlack thead th {font-size: 15px;font-weight: bold;color: #000000;text-align: left;}</style>')
        w.document.write('</head>');
        w.document.write('<body>');
        w.document.write(ht);
        w.document.write('<body>');
        w.document.write('</html>');
        setTimeout(function() {
            w.print();
            w.close();
        }, 300);
    })
</script>
<script type="text/javascript">
    $('.print-btn_work_order').click(function() {
        w = window.open();
        var ht = $('.print-div_work_order').html()
        var head = $('head').html()
        w.document.write('<html>');
        w.document.write('<head>');
        w.document.write(head);
      w.document.write('<style>input[type="radio"]{webkit-appearance: radio;}</style>') 
        w.document.write('<style>.panel-title {    text-align: center;}</style>')
        w.document.write('<style>.radio-inline {display: inline;}</style>')
     w.document.write('<style>.panel-title {    text-align: center;}</style>')
 w.document.write('<style>.radio-inline input[type="radio"]:checked + label:before {content: "*";order: 1;}</style>')
        w.document.write('<style>.radio-inline input[type="radio"]:checked + label {background:pink !important; font-weight: 900; content: "Task";}</style>')
        w.document.write('<style>. table.minimalistBlack {width: 100%;height: 200px; text-align: left; border-collapse: collapse;}</style>')
         w.document.write('<style>table.minimalistBlack td, table.minimalistBlack th {border: 1px solid #000000;padding: 5px 4px;}</style>')
         w.document.write('<style>table.minimalistBlack tbody td {font-size: 13px;}</style>')
         w.document.write('<style>table.minimalistBlack thead {background: #CFCFCF;background: -moz-linear-gradient(top, #dbdbdb 0%, #d3d3d3 66%, #CFCFCF 100%);background: -webkit-linear-gradient(top, #dbdbdb 0%, #d3d3d3 66%, #CFCFCF 100%);background: linear-gradient(to bottom, #dbdbdb 0%, #d3d3d3 66%, #CFCFCF 100%);border-bottom: 3px solid #000000;}</style>')
         w.document.write('<style>table.minimalistBlack thead th {font-size: 15px;font-weight: bold;color: #000000;text-align: left;}</style>')
        w.document.write('</head>');
        w.document.write('<body>');
        w.document.write(ht);
        w.document.write('<body>');
        w.document.write('</html>');
        setTimeout(function() {
            w.print();
            w.close();
        }, 300);
    })
</script>
<script type="text/javascript">
    $('.print-btn_line_clearance_form').click(function() {
        w = window.open();
        var ht = $('.print-div_line_clearance_form').html()
        var head = $('head').html()
        w.document.write('<html>');
        w.document.write('<head>');
        w.document.write(head);
      w.document.write('<style>input[type="radio"]{webkit-appearance: radio;}</style>') 
        w.document.write('<style>.panel-title {    text-align: center;}</style>')
        w.document.write('<style>.radio-inline {display: inline;}</style>')
     w.document.write('<style>.panel-title {    text-align: center;}</style>')
 w.document.write('<style>.radio-inline input[type="radio"]:checked + label:before {content: "*";order: 1;}</style>')
        w.document.write('<style>.radio-inline input[type="radio"]:checked + label {background:pink !important; font-weight: 900; content: "Task";}</style>')
        w.document.write('<style>. table.minimalistBlack {width: 100%;height: 200px; text-align: left; border-collapse: collapse;}</style>')
         w.document.write('<style>table.minimalistBlack td, table.minimalistBlack th {border: 1px solid #000000;padding: 5px 4px;}</style>')
         w.document.write('<style>table.minimalistBlack tbody td {font-size: 13px;}</style>')
         w.document.write('<style>table.minimalistBlack thead {background: #CFCFCF;background: -moz-linear-gradient(top, #dbdbdb 0%, #d3d3d3 66%, #CFCFCF 100%);background: -webkit-linear-gradient(top, #dbdbdb 0%, #d3d3d3 66%, #CFCFCF 100%);background: linear-gradient(to bottom, #dbdbdb 0%, #d3d3d3 66%, #CFCFCF 100%);border-bottom: 3px solid #000000;}</style>')
         w.document.write('<style>table.minimalistBlack thead th {font-size: 15px;font-weight: bold;color: #000000;text-align: left;}</style>')
        w.document.write('</head>');
        w.document.write('<body>');
        w.document.write(ht);
        w.document.write('<body>');
        w.document.write('</html>');
        setTimeout(function() {
            w.print();
            w.close();
        }, 300);
    })
</script>
<script type="text/javascript">
    $('.print-btn_view_production_plan').click(function() {
        w = window.open();
        var ht = $('.print-div_view_production_plan').html()
        var head = $('head').html()
        w.document.write('<html>');
        w.document.write('<head>');
        w.document.write(head);
      w.document.write('<style>input[type="radio"]{webkit-appearance: radio;}</style>') 
        w.document.write('<style>.panel-title {    text-align: center;}</style>')
        w.document.write('<style>.radio-inline {display: inline;}</style>')
     w.document.write('<style>.panel-title {    text-align: center;}</style>')
 w.document.write('<style>.radio-inline input[type="radio"]:checked + label:before {content: "*";order: 1;}</style>')
        w.document.write('<style>.radio-inline input[type="radio"]:checked + label {background:pink !important; font-weight: 900; content: "Task";}</style>')
        w.document.write('<style>. table.minimalistBlack {width: 100%;height: 200px; text-align: left; border-collapse: collapse;}</style>')
         w.document.write('<style>table.minimalistBlack td, table.minimalistBlack th {border: 1px solid #000000;padding: 5px 4px;}</style>')
         w.document.write('<style>table.minimalistBlack tbody td {font-size: 13px;}</style>')
         w.document.write('<style>table.minimalistBlack thead {background: #CFCFCF;background: -moz-linear-gradient(top, #dbdbdb 0%, #d3d3d3 66%, #CFCFCF 100%);background: -webkit-linear-gradient(top, #dbdbdb 0%, #d3d3d3 66%, #CFCFCF 100%);background: linear-gradient(to bottom, #dbdbdb 0%, #d3d3d3 66%, #CFCFCF 100%);border-bottom: 3px solid #000000;}</style>')
         w.document.write('<style>table.minimalistBlack thead th {font-size: 15px;font-weight: bold;color: #000000;text-align: left;}</style>')
        w.document.write('</head>');
        w.document.write('<body>');
        w.document.write(ht);
        w.document.write('<body>');
        w.document.write('</html>');
        setTimeout(function() {
            w.print();
            w.close();
        }, 300);
    })
</script>
<script type="text/javascript">
    $('.print-btn_view_cutting').click(function() {
        w = window.open();
        var ht = $('.print-div_view_cutting').html()
        var head = $('head').html()
        w.document.write('<html>');
        w.document.write('<head>');
        w.document.write(head);
      w.document.write('<style>input[type="radio"]{webkit-appearance: radio;}</style>') 
        w.document.write('<style>.panel-title {    text-align: center;}</style>')
        w.document.write('<style>.radio-inline {display: inline;}</style>')
     w.document.write('<style>.panel-title {    text-align: center;}</style>')
 w.document.write('<style>.radio-inline input[type="radio"]:checked + label:before {content: "*";order: 1;}</style>')
        w.document.write('<style>.radio-inline input[type="radio"]:checked + label {background:pink !important; font-weight: 900; content: "Task";}</style>')
        w.document.write('<style>. table.minimalistBlack {width: 100%;height: 200px; text-align: left; border-collapse: collapse;}</style>')
         w.document.write('<style>table.minimalistBlack td, table.minimalistBlack th {border: 1px solid #000000;padding: 5px 4px;}</style>')
         w.document.write('<style>table.minimalistBlack tbody td {font-size: 13px;}</style>')
         w.document.write('<style>table.minimalistBlack thead {background: #CFCFCF;background: -moz-linear-gradient(top, #dbdbdb 0%, #d3d3d3 66%, #CFCFCF 100%);background: -webkit-linear-gradient(top, #dbdbdb 0%, #d3d3d3 66%, #CFCFCF 100%);background: linear-gradient(to bottom, #dbdbdb 0%, #d3d3d3 66%, #CFCFCF 100%);border-bottom: 3px solid #000000;}</style>')
         w.document.write('<style>table.minimalistBlack thead th {font-size: 15px;font-weight: bold;color: #000000;text-align: left;}</style>')
        w.document.write('</head>');
        w.document.write('<body>');
        w.document.write(ht);
        w.document.write('<body>');
        w.document.write('</html>');
        setTimeout(function() {
            w.print();
            w.close();
        }, 300);
    })
</script>
<script type="text/javascript">
    $('.print-btn_view_cutting').click(function() {
        w = window.open();
        var ht = $('.print-div_view_cutting').html()
        var head = $('head').html()
        w.document.write('<html>');
        w.document.write('<head>');
        w.document.write(head);
      w.document.write('<style>input[type="radio"]{webkit-appearance: radio;}</style>') 
        w.document.write('<style>.panel-title {    text-align: center;}</style>')
        w.document.write('<style>.radio-inline {display: inline;}</style>')
     w.document.write('<style>.panel-title {    text-align: center;}</style>')
 w.document.write('<style>.radio-inline input[type="radio"]:checked + label:before {content: "*";order: 1;}</style>')
        w.document.write('<style>.radio-inline input[type="radio"]:checked + label {background:pink !important; font-weight: 900; content: "Task";}</style>')
        w.document.write('<style>. table.minimalistBlack {width: 100%;height: 200px; text-align: left; border-collapse: collapse;}</style>')
         w.document.write('<style>table.minimalistBlack td, table.minimalistBlack th {border: 1px solid #000000;padding: 5px 4px;}</style>')
         w.document.write('<style>table.minimalistBlack tbody td {font-size: 13px;}</style>')
         w.document.write('<style>table.minimalistBlack thead {background: #CFCFCF;background: -moz-linear-gradient(top, #dbdbdb 0%, #d3d3d3 66%, #CFCFCF 100%);background: -webkit-linear-gradient(top, #dbdbdb 0%, #d3d3d3 66%, #CFCFCF 100%);background: linear-gradient(to bottom, #dbdbdb 0%, #d3d3d3 66%, #CFCFCF 100%);border-bottom: 3px solid #000000;}</style>')
         w.document.write('<style>table.minimalistBlack thead th {font-size: 15px;font-weight: bold;color: #000000;text-align: left;}</style>')
        w.document.write('</head>');
        w.document.write('<body>');
        w.document.write(ht);
        w.document.write('<body>');
        w.document.write('</html>');
        setTimeout(function() {
            w.print();
            w.close();
        }, 300);
    })
</script>

<script type="text/javascript">
    $('.print-btn_die_cutting').click(function() {
        w = window.open();
        var ht = $('.print-div_view_die_cutting').html()
        var head = $('head').html()
        w.document.write('<html>');
        w.document.write('<head>');
        w.document.write(head);
      w.document.write('<style>input[type="radio"]{webkit-appearance: radio;}</style>') 
        w.document.write('<style>.panel-title {    text-align: center;}</style>')
        w.document.write('<style>.radio-inline {display: inline;}</style>')
     w.document.write('<style>.panel-title {    text-align: center;}</style>')
 w.document.write('<style>.radio-inline input[type="radio"]:checked + label:before {content: "*";order: 1;}</style>')
        w.document.write('<style>.radio-inline input[type="radio"]:checked + label {background:pink !important; font-weight: 900; content: "Task";}</style>')
        w.document.write('<style>. table.minimalistBlack {width: 100%;height: 200px; text-align: left; border-collapse: collapse;}</style>')
         w.document.write('<style>table.minimalistBlack td, table.minimalistBlack th {border: 1px solid #000000;padding: 5px 4px;}</style>')
         w.document.write('<style>table.minimalistBlack tbody td {font-size: 13px;}</style>')
         w.document.write('<style>table.minimalistBlack thead {background: #CFCFCF;background: -moz-linear-gradient(top, #dbdbdb 0%, #d3d3d3 66%, #CFCFCF 100%);background: -webkit-linear-gradient(top, #dbdbdb 0%, #d3d3d3 66%, #CFCFCF 100%);background: linear-gradient(to bottom, #dbdbdb 0%, #d3d3d3 66%, #CFCFCF 100%);border-bottom: 3px solid #000000;}</style>')
         w.document.write('<style>table.minimalistBlack thead th {font-size: 15px;font-weight: bold;color: #000000;text-align: left;}</style>')
       w.document.write('</head>');
        w.document.write('<body>');
        w.document.write(ht);
        w.document.write('<body>');
        w.document.write('</html>');
        setTimeout(function() {
            w.print();
            w.close();
        }, 300);
    })
</script>
<script type="text/javascript">
    $('.print-btn_label_cutting').click(function() {
        w = window.open();
        var ht = $('.print-div_label_cutting').html()
        var head = $('head').html()
        w.document.write('<html>');
        w.document.write('<head>');
        w.document.write(head);
      w.document.write('<style>input[type="radio"]{webkit-appearance: radio;}</style>') 
        w.document.write('<style>.panel-title {    text-align: center;}</style>')
        w.document.write('<style>.radio-inline {display: inline;}</style>')
     w.document.write('<style>.panel-title {    text-align: center;}</style>')
 w.document.write('<style>.radio-inline input[type="radio"]:checked + label:before {content: "*";order: 1;}</style>')
        w.document.write('<style>.radio-inline input[type="radio"]:checked + label {background:pink !important; font-weight: 900; content: "Task";}</style>')
        w.document.write('<style>. table.minimalistBlack {width: 100%;height: 200px; text-align: left; border-collapse: collapse;}</style>')
         w.document.write('<style>table.minimalistBlack td, table.minimalistBlack th {border: 1px solid #000000;padding: 5px 4px;}</style>')
         w.document.write('<style>table.minimalistBlack tbody td {font-size: 13px;}</style>')
         w.document.write('<style>table.minimalistBlack thead {background: #CFCFCF;background: -moz-linear-gradient(top, #dbdbdb 0%, #d3d3d3 66%, #CFCFCF 100%);background: -webkit-linear-gradient(top, #dbdbdb 0%, #d3d3d3 66%, #CFCFCF 100%);background: linear-gradient(to bottom, #dbdbdb 0%, #d3d3d3 66%, #CFCFCF 100%);border-bottom: 3px solid #000000;}</style>')
         w.document.write('<style>table.minimalistBlack thead th {font-size: 15px;font-weight: bold;color: #000000;text-align: left;}</style>')
        w.document.write('</head>');
        w.document.write('<body>');
        w.document.write(ht);
        w.document.write('<body>');
        w.document.write('</html>');
        setTimeout(function() {
            w.print();
            w.close();
        }, 300);
    })
</script>
<script type="text/javascript">
    $('.print-btn_line_clearance_form_Cutting').click(function() {
        w = window.open();
        var ht = $('.print-div_line_clearance_form_Cutting').html()
        var head = $('head').html()
        w.document.write('<html>');
        w.document.write('<head>');
        w.document.write(head);
      w.document.write('<style>input[type="radio"]{webkit-appearance: radio;}</style>') 
        w.document.write('<style>.panel-title {    text-align: center;}</style>')
        w.document.write('<style>.radio-inline {display: inline;}</style>')
     w.document.write('<style>.panel-title {    text-align: center;}</style>')
 w.document.write('<style>.radio-inline input[type="radio"]:checked + label:before {content: "*";order: 1;}</style>')
        w.document.write('<style>.radio-inline input[type="radio"]:checked + label {background:pink !important; font-weight: 900; content: "Task";}</style>')
        w.document.write('<style>. table.minimalistBlack {width: 100%;height: 200px; text-align: left; border-collapse: collapse;}</style>')
         w.document.write('<style>table.minimalistBlack td, table.minimalistBlack th {border: 1px solid #000000;padding: 5px 4px;}</style>')
         w.document.write('<style>table.minimalistBlack tbody td {font-size: 13px;}</style>')
         w.document.write('<style>table.minimalistBlack thead {background: #CFCFCF;background: -moz-linear-gradient(top, #dbdbdb 0%, #d3d3d3 66%, #CFCFCF 100%);background: -webkit-linear-gradient(top, #dbdbdb 0%, #d3d3d3 66%, #CFCFCF 100%);background: linear-gradient(to bottom, #dbdbdb 0%, #d3d3d3 66%, #CFCFCF 100%);border-bottom: 3px solid #000000;}</style>')
         w.document.write('<style>table.minimalistBlack thead th {font-size: 15px;font-weight: bold;color: #000000;text-align: left;}</style>')
        w.document.write('</head>');
        w.document.write('<body>');
        w.document.write(ht);
        w.document.write('<body>');
        w.document.write('</html>');
        setTimeout(function() {
            w.print();
            w.close();
        }, 300);
    })
</script>
<script type="text/javascript">
    $('.print-btn_line_clearance_form_Printing').click(function() {
        w = window.open();
        var ht = $('.print-div_line_clearance_form_Printing').html()
        var head = $('head').html()
        w.document.write('<html>');
        w.document.write('<head>');
        w.document.write(head);
      w.document.write('<style>input[type="radio"]{webkit-appearance: radio;}</style>') 
        w.document.write('<style>.panel-title {    text-align: center;}</style>')
        w.document.write('<style>.radio-inline {display: inline;}</style>')
     w.document.write('<style>.panel-title {    text-align: center;}</style>')
 w.document.write('<style>.radio-inline input[type="radio"]:checked + label:before {content: "*";order: 1;}</style>')
        w.document.write('<style>.radio-inline input[type="radio"]:checked + label {background:pink !important; font-weight: 900; content: "Task";}</style>')
        w.document.write('<style>. table.minimalistBlack {width: 100%;height: 200px; text-align: left; border-collapse: collapse;}</style>')
         w.document.write('<style>table.minimalistBlack td, table.minimalistBlack th {border: 1px solid #000000;padding: 5px 4px;}</style>')
         w.document.write('<style>table.minimalistBlack tbody td {font-size: 13px;}</style>')
         w.document.write('<style>table.minimalistBlack thead {background: #CFCFCF;background: -moz-linear-gradient(top, #dbdbdb 0%, #d3d3d3 66%, #CFCFCF 100%);background: -webkit-linear-gradient(top, #dbdbdb 0%, #d3d3d3 66%, #CFCFCF 100%);background: linear-gradient(to bottom, #dbdbdb 0%, #d3d3d3 66%, #CFCFCF 100%);border-bottom: 3px solid #000000;}</style>')
         w.document.write('<style>table.minimalistBlack thead th {font-size: 15px;font-weight: bold;color: #000000;text-align: left;}</style>')
        w.document.write('</head>');
        w.document.write('<body>');
        w.document.write(ht);
        w.document.write('<body>');
        w.document.write('</html>');
        setTimeout(function() {
            w.print();
            w.close();
        }, 300);
    })
</script>
<script type="text/javascript">
    $('.print-btn_sorting').click(function() {
        w = window.open();
        var ht = $('.print-div_sorting').html()
        var head = $('head').html()
        w.document.write('<html>');
        w.document.write('<head>');
        w.document.write(head);
      w.document.write('<style>input[type="radio"]{webkit-appearance: radio;}</style>') 
        w.document.write('<style>.panel-title {    text-align: center;}</style>')
        w.document.write('<style>.radio-inline {display: inline;}</style>')
     w.document.write('<style>.panel-title {    text-align: center;}</style>')
 w.document.write('<style>.radio-inline input[type="radio"]:checked + label:before {content: "*";order: 1;}</style>')
        w.document.write('<style>.radio-inline input[type="radio"]:checked + label {background:pink !important; font-weight: 900; content: "Task";}</style>')
        w.document.write('<style>. table.minimalistBlack {width: 100%;height: 200px; text-align: left; border-collapse: collapse;}</style>')
         w.document.write('<style>table.minimalistBlack td, table.minimalistBlack th {border: 1px solid #000000;padding: 5px 4px;}</style>')
         w.document.write('<style>table.minimalistBlack tbody td {font-size: 13px;}</style>')
         w.document.write('<style>table.minimalistBlack thead {background: #CFCFCF;background: -moz-linear-gradient(top, #dbdbdb 0%, #d3d3d3 66%, #CFCFCF 100%);background: -webkit-linear-gradient(top, #dbdbdb 0%, #d3d3d3 66%, #CFCFCF 100%);background: linear-gradient(to bottom, #dbdbdb 0%, #d3d3d3 66%, #CFCFCF 100%);border-bottom: 3px solid #000000;}</style>')
         w.document.write('<style>table.minimalistBlack thead th {font-size: 15px;font-weight: bold;color: #000000;text-align: left;}</style>')
        w.document.write('</head>');
        w.document.write('<body>');
        w.document.write(ht);
        w.document.write('<body>');
        w.document.write('</html>');
        setTimeout(function() {
            w.print();
            w.close();
        }, 300);
    })
</script>
<script type="text/javascript">
    $('.print-btn_line_clearance_form_Dispatch').click(function() {
        w = window.open();
        var ht = $('.print-div_line_clearance_form_Dispatch').html()
        var head = $('head').html()
        w.document.write('<html>');
        w.document.write('<head>');
        w.document.write(head);
      w.document.write('<style>input[type="radio"]{webkit-appearance: radio;}</style>') 
        w.document.write('<style>.panel-title {    text-align: center;}</style>')
        w.document.write('<style>.radio-inline {display: inline;}</style>')
     w.document.write('<style>.panel-title {    text-align: center;}</style>')
 w.document.write('<style>.radio-inline input[type="radio"]:checked + label:before {content: "*";order: 1;}</style>')
        w.document.write('<style>.radio-inline input[type="radio"]:checked + label {background:pink !important; font-weight: 900; content: "Task";}</style>')
        w.document.write('<style>. table.minimalistBlack {width: 100%;height: 200px; text-align: left; border-collapse: collapse;}</style>')
         w.document.write('<style>table.minimalistBlack td, table.minimalistBlack th {border: 1px solid #000000;padding: 5px 4px;}</style>')
         w.document.write('<style>table.minimalistBlack tbody td {font-size: 13px;}</style>')
         w.document.write('<style>table.minimalistBlack thead {background: #CFCFCF;background: -moz-linear-gradient(top, #dbdbdb 0%, #d3d3d3 66%, #CFCFCF 100%);background: -webkit-linear-gradient(top, #dbdbdb 0%, #d3d3d3 66%, #CFCFCF 100%);background: linear-gradient(to bottom, #dbdbdb 0%, #d3d3d3 66%, #CFCFCF 100%);border-bottom: 3px solid #000000;}</style>')
         w.document.write('<style>table.minimalistBlack thead th {font-size: 15px;font-weight: bold;color: #000000;text-align: left;}</style>')
        w.document.write('</head>');
        w.document.write('<body>');
        w.document.write(ht);
        w.document.write('<body>');
        w.document.write('</html>');
        setTimeout(function() {
            w.print();
            w.close();
        }, 300);
    })
</script>
<script type="text/javascript">
    $('.print-btn_process_flow').click(function() {
        w = window.open();
        var ht = $('.print-div_process_flow').html()
        var head = $('head').html()
        w.document.write('<html>');
        w.document.write('<head>');
        w.document.write(head);
      w.document.write('<style>input[type="radio"]{webkit-appearance: radio;}</style>') 
        w.document.write('<style>.panel-title {    text-align: center;}</style>')
        w.document.write('<style>.radio-inline {display: inline;}</style>')
     w.document.write('<style>.panel-title {    text-align: center;}</style>')
 w.document.write('<style>.radio-inline input[type="radio"]:checked + label:before {content: "*";order: 1;}</style>')
        w.document.write('<style>.radio-inline input[type="radio"]:checked + label {background:pink !important; font-weight: 900; content: "Task";}</style>')
        w.document.write('<style>. table.minimalistBlack {width: 100%;height: 200px; text-align: left; border-collapse: collapse;}</style>')
         w.document.write('<style>table.minimalistBlack td, table.minimalistBlack th {border: 1px solid #000000;padding: 5px 4px;}</style>')
         w.document.write('<style>table.minimalistBlack tbody td {font-size: 13px;}</style>')
         w.document.write('<style>table.minimalistBlack thead {background: #CFCFCF;background: -moz-linear-gradient(top, #dbdbdb 0%, #d3d3d3 66%, #CFCFCF 100%);background: -webkit-linear-gradient(top, #dbdbdb 0%, #d3d3d3 66%, #CFCFCF 100%);background: linear-gradient(to bottom, #dbdbdb 0%, #d3d3d3 66%, #CFCFCF 100%);border-bottom: 3px solid #000000;}</style>')
         w.document.write('<style>table.minimalistBlack thead th {font-size: 15px;font-weight: bold;color: #000000;text-align: left;}</style>')
        w.document.write('</head>');
        w.document.write('<body>');
        w.document.write(ht);
        w.document.write('<body>');
        w.document.write('</html>');
        setTimeout(function() {
            w.print();
            w.close();
        }, 300);
    })
</script>
<script type="text/javascript">
    $('.print-btn_stripping_report').click(function() {
        w = window.open();
        var ht = $('.print-div_stripping_report').html()
        var head = $('head').html()
        w.document.write('<html>');
        w.document.write('<head>');
        w.document.write(head);
      w.document.write('<style>input[type="radio"]{webkit-appearance: radio;}</style>') 
        w.document.write('<style>.panel-title {    text-align: center;}</style>')
        w.document.write('<style>.radio-inline {display: inline;}</style>')
     w.document.write('<style>.panel-title {    text-align: center;}</style>')
 w.document.write('<style>.radio-inline input[type="radio"]:checked + label:before {content: "*";order: 1;}</style>')
        w.document.write('<style>.radio-inline input[type="radio"]:checked + label {background:pink !important; font-weight: 900; content: "Task";}</style>')
        w.document.write('<style>. table.minimalistBlack {width: 100%;height: 200px; text-align: left; border-collapse: collapse;}</style>')
         w.document.write('<style>table.minimalistBlack td, table.minimalistBlack th {border: 1px solid #000000;padding: 5px 4px;}</style>')
         w.document.write('<style>table.minimalistBlack tbody td {font-size: 13px;}</style>')
         w.document.write('<style>table.minimalistBlack thead {background: #CFCFCF;background: -moz-linear-gradient(top, #dbdbdb 0%, #d3d3d3 66%, #CFCFCF 100%);background: -webkit-linear-gradient(top, #dbdbdb 0%, #d3d3d3 66%, #CFCFCF 100%);background: linear-gradient(to bottom, #dbdbdb 0%, #d3d3d3 66%, #CFCFCF 100%);border-bottom: 3px solid #000000;}</style>')
         w.document.write('<style>table.minimalistBlack thead th {font-size: 15px;font-weight: bold;color: #000000;text-align: left;}</style>')
        w.document.write('</head>');
        w.document.write('<body>');
        w.document.write(ht);
        w.document.write('<body>');
        w.document.write('</html>');
        setTimeout(function() {
            w.print();
            w.close();
        }, 300);
    })
</script>
<script type="text/javascript">
    $('.print-btn_goods_recevied_report').click(function() {
        w = window.open();
        var ht = $('.print-div_goods_recevied_report').html()
        var head = $('head').html()
        w.document.write('<html>');
        w.document.write('<head>');
        w.document.write(head);
      w.document.write('<style>input[type="radio"]{webkit-appearance: radio;}</style>') 
        w.document.write('<style>.panel-title {    text-align: center;}</style>')
        w.document.write('<style>.radio-inline {display: inline;}</style>')
     w.document.write('<style>.panel-title {    text-align: center;}</style>')
 w.document.write('<style>.radio-inline input[type="radio"]:checked + label:before {content: "*";order: 1;}</style>')
        w.document.write('<style>.radio-inline input[type="radio"]:checked + label {background:pink !important; font-weight: 900; content: "Task";}</style>')
        w.document.write('<style>. table.minimalistBlack {width: 100%;height: 200px; text-align: left; border-collapse: collapse;}</style>')
         w.document.write('<style>table.minimalistBlack td, table.minimalistBlack th {border: 1px solid #000000;padding: 5px 4px;}</style>')
         w.document.write('<style>table.minimalistBlack tbody td {font-size: 13px;}</style>')
         w.document.write('<style>table.minimalistBlack thead {background: #CFCFCF;background: -moz-linear-gradient(top, #dbdbdb 0%, #d3d3d3 66%, #CFCFCF 100%);background: -webkit-linear-gradient(top, #dbdbdb 0%, #d3d3d3 66%, #CFCFCF 100%);background: linear-gradient(to bottom, #dbdbdb 0%, #d3d3d3 66%, #CFCFCF 100%);border-bottom: 3px solid #000000;}</style>')
         w.document.write('<style>table.minimalistBlack thead th {font-size: 15px;font-weight: bold;color: #000000;text-align: left;}</style>')
        w.document.write('</head>');
        w.document.write('<body>');
        w.document.write(ht);
        w.document.write('<body>');
        w.document.write('</html>');
        setTimeout(function() {
            w.print();
            w.close();
        }, 300);
    })
</script>
<script type="text/javascript">
    $('.print-btn_process_procedure_report').click(function() {
        w = window.open();
        var ht = $('.print-div_process_procedure_report').html()
        var head = $('head').html()
        w.document.write('<html>');
        w.document.write('<head>');
        w.document.write(head);
      w.document.write('<style>input[type="radio"]{webkit-appearance: radio;}</style>') 
        w.document.write('<style>.panel-title {    text-align: center;}</style>')
        w.document.write('<style>.radio-inline {display: inline;}</style>')
     w.document.write('<style>.panel-title {    text-align: center;}</style>')
 w.document.write('<style>.radio-inline input[type="radio"]:checked + label:before {content: "*";order: 1;}</style>')
        w.document.write('<style>.radio-inline input[type="radio"]:checked + label {background:pink !important; font-weight: 900; content: "Task";}</style>')
        w.document.write('<style>. table.minimalistBlack {width: 100%;height: 200px; text-align: left; border-collapse: collapse;}</style>')
         w.document.write('<style>table.minimalistBlack td, table.minimalistBlack th {border: 1px solid #000000;padding: 5px 4px;}</style>')
         w.document.write('<style>table.minimalistBlack tbody td {font-size: 13px;}</style>')
         w.document.write('<style>table.minimalistBlack thead {background: #CFCFCF;background: -moz-linear-gradient(top, #dbdbdb 0%, #d3d3d3 66%, #CFCFCF 100%);background: -webkit-linear-gradient(top, #dbdbdb 0%, #d3d3d3 66%, #CFCFCF 100%);background: linear-gradient(to bottom, #dbdbdb 0%, #d3d3d3 66%, #CFCFCF 100%);border-bottom: 3px solid #000000;}</style>')
         w.document.write('<style>table.minimalistBlack thead th {font-size: 15px;font-weight: bold;color: #000000;text-align: left;}</style>')
        w.document.write('</head>');
        w.document.write('<body>');
        w.document.write(ht);
        w.document.write('<body>');
        w.document.write('</html>');
        setTimeout(function() {
            w.print();
            w.close();
        }, 300);
    })
</script>
<script type="text/javascript">
    $('.print-btn').click(function() {
        w = window.open();
        var ht = $('.print-div').html()
        var head = $('head').html()
        w.document.write('<html>');
        w.document.write('<head>');
        w.document.write(head);
        // w.document.write('<meta name="viewport" content="width=device-width, initial-scale=1.0">');
        // w.document.write('<link rel="stylesheet" type="text/css" href="' + url + '/assets/css/bootstrap.min.css">');
        // w.document.write('<link rel="stylesheet" type="text/css" href="' + url + '/assets/css/bootstrap-responsive.min.css">');
        // w.document.write('<link rel="stylesheet" type="text/css" href="' + url + '/assets/css/font-awesome.min.css">');
        // w.document.write('<link rel="stylesheet" type="text/css" href="' + url + '/assets/css/style.css">');
        // w.document.write('<link rel="stylesheet" type="text/css" href="' + url + '/assets/css/responsive.css">');
        /*  w.document.write('<style>h4.product-totle{padding-left:150px}</style>')
          w.document.write('<style>.product-tital{padding-left:160px;position: fixed;margin-top: -30px;}</style>')*/
        w.document.write('<style>table.minimalistBlack {width: 100%;height: 200px; text-align: left; border-collapse: collapse;}</style>')
        w.document.write('<style>input[type="radio"]{webkit-appearance: radio;}</style>')
        w.document.write('<style>.panel-title {    text-align: center;}</style>')
        w.document.write('<style>.radio-inline {display: inline;}</style>')
        w.document.write('<style>.panel-title {    text-align: center;}</style>')
        w.document.write('<style>.radio-inline input[type="radio"]:checked + label:before {content: "*";order: 1;}</style>')
        w.document.write('<style>.radio-inline input[type="radio"]:checked + label {background:pink !important; font-weight: 900; content: "Task";}</style>')
        w.document.write('<style>table.minimalistBlack td, table.minimalistBlack th {border: 1px solid #000000;padding: 5px 4px;}</style>')
        w.document.write('<style>table.minimalistBlack tbody td {font-size: 13px;}</style>')
        w.document.write('<style>table.minimalistBlack thead {background: #CFCFCF;background: -moz-linear-gradient(top, #dbdbdb 0%, #d3d3d3 66%, #CFCFCF 100%);background: -webkit-linear-gradient(top, #dbdbdb 0%, #d3d3d3 66%, #CFCFCF 100%);background: linear-gradient(to bottom, #dbdbdb 0%, #d3d3d3 66%, #CFCFCF 100%);border-bottom: 3px solid #000000;}</style>')
        w.document.write('<style>table.minimalistBlack thead th {font-size: 15px;font-weight: bold;color: #000000;text-align: left;}</style>')
        w.document.write('</head>');
        w.document.write('<body>');
        w.document.write(ht);
        w.document.write('<body>');
        w.document.write('</html>');
        setTimeout(function() {
            w.print();
            w.close();
        }, 300);
    })
</script>