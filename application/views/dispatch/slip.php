<style type="text/css">
    .my_div1_1{float: left; width : 50%;  border:1px solid black; border-left:1px solid;}
</style>
<div class="control-sidebar-bg"></div>
<!-- Page Content -->
<div id="page-wrapper">
    <!-- main content -->
    <div class="content">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="header-icon">
                <i class="pe-7s-box1"></i>
            </div>
            <div class="header-title">
                <h1>View Slip</h1>
                <small> </small>
                <ol class="breadcrumb">
                    <li><a href="<?php echo base_url() ?>"><i class="pe-7s-home"></i> Home</a></li>

                    <li class="active">View Slip</li>
                </ol>
            </div>
        </div>
        <!-- /. Content Header (Page header) -->

        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-bd">
                    <div class="panel-heading">
                        <div class="panel-title">
                            <h4>View <?php echo $slip['client_Name']?> Slip </h4>
                        </div>
                    </div>
                    <div class="panel-body print-slip">
                        <br><div class="row">
                            <div class="col-lg-6 my_div1" style="">
                                <table style="width: 100%; border : 1px solid black;">
                                    <thead>
                                        <tr style="border : 1px solid black;">
                                            <td colspan="8"><center>Ammara Commercial Printers (Pvt.) Ltd</center></td>
                                        </tr>
                                        <tr style="border : 1px solid black;">
                                            <td colspan="8"><center><p style="font-size: 9px;     margin-top: 3px;">Plot No.C 6&7 S.G.M Industrial Area Phase II Main Dumloti Road Karachi Pakistan</p></center></td>
                                        </tr>
                                        <tr style="border : 1px solid black;">
                                            <td colspan="8"><center>Dispatch Slip</center></td>
                                        </tr>
                                        <tr style="border : 1px solid black;">
                                            <td colspan="8"><center>Doc No: DFG/FM/001</center></td>
                                        </tr>
                                        <tr >
                                            <td colspan="3" style="border : 1px solid black;     padding: 4px; font-size:9px;">Component Name:</td>
                                            <td colspan="5" style="border : 1px solid black;     padding: 4px; font-size:9px;"><?php echo $slip['Description']?></td>
                                        </tr>
                                        <tr >
                                            <td colspan="2" style="border : 1px solid black;     padding: 4px; font-size:9px;">Code No.</td>
                                            <td colspan="2" style="border : 1px solid black;"><center><?php echo $slip['Item_code']?></center></td>
                                            <td colspan="2" style="border : 1px solid black;     padding: 4px; font-size:9px;">Quantity.</td>
                                            <td colspan="2" style="border : 1px solid black;"><center><?php echo $slip['total_carton']?></center></td>
                                        </tr>
                                        <tr >
                                            <td colspan="2" style="border : 1px solid black;     padding: 4px; font-size:9px;">P.O No.</td>
                                            <td colspan="2" style="border : 1px solid black;"><center><?php echo $slip['PO_No']?></center></td>
                                            <td colspan="2" style="border : 1px solid black;     padding: 4px;  font-size:9px;">Lot No.</td>
                                            <td colspan="2" style="border : 1px solid black;"><center><?php echo $slip['line_no']?></center></td>
                                        </tr>
                                        <tr >
                                            <td colspan="2" style="border : 1px solid black;     padding: 4px;  font-size:9px;">Mfg. Date.</td>
                                            <td colspan="2" style="border : 1px solid black;"><center><?php echo $slip['mfg_date']?></center></td>
                                            <td colspan="2" style="border : 1px solid black;     padding: 4px;  font-size:9px;">D.C Number.</td>
                                            <td colspan="2" style="border : 1px solid black;"><center><?php echo $slip['delivery_challan']?></center></td>
                                        </tr>
                                        <tr style="">
                                            <td colspan="8">&nbsp;</td>
                                        </tr>
                                    </thead>
                                </table>
                            </div>
                            <div class="col-lg-6 my_div" style="">
                                <table style="width: 100%; border : 1px solid black;">
                                    <thead>
                                        <tr style="border : 1px solid black;">
                                            <td colspan="8"><center>Ammara Commercial Printers (Pvt.) Ltd</center></td>
                                        </tr>
                                        <tr style="border : 1px solid black;">
                                            <td colspan="8"><center><p style="font-size: 9px;     margin-top: 3px;">Plot No.C 6&7 S.G.M Industrial Area Phase II Main Dumloti Road Karachi Pakistan</p></center></td>
                                        </tr>
                                        <tr style="border : 1px solid black;">
                                            <td colspan="8"><center>Dispatch Slip</center></td>
                                        </tr>
                                        <tr style="border : 1px solid black;">
                                            <td colspan="8"><center>Doc No: DFG/FM/001</center></td>
                                        </tr>
                                        <tr >
                                            <td colspan="3" style="border : 1px solid black;     padding: 4px; font-size:9px;">Component Name:</td>
                                            <td colspan="5" style="border : 1px solid black;     padding: 4px; font-size:9px;"><?php echo $slip['Description']?></td>
                                        </tr>
                                        <tr >
                                            <td colspan="2" style="border : 1px solid black;     padding: 4px; font-size:9px;">Code No.</td>
                                            <td colspan="2" style="border : 1px solid black;"><center><?php echo $slip['Item_code']?></center></td>
                                            <td colspan="2" style="border : 1px solid black;     padding: 4px; font-size:9px;">Quantity.</td>
                                            <td colspan="2" style="border : 1px solid black;"><center><?php echo $slip['total_carton']?></center></td>
                                        </tr>
                                        <tr >
                                            <td colspan="2" style="border : 1px solid black;     padding: 4px; font-size:9px;">P.O No.</td>
                                            <td colspan="2" style="border : 1px solid black;"><center><?php echo $slip['PO_No']?></center></td>
                                            <td colspan="2" style="border : 1px solid black;     padding: 4px;  font-size:9px;">Lot No.</td>
                                            <td colspan="2" style="border : 1px solid black;"><center><?php echo $slip['line_no']?></center></td>
                                        </tr>
                                        <tr >
                                            <td colspan="2" style="border : 1px solid black;     padding: 4px;  font-size:9px;">Mfg. Date.</td>
                                            <td colspan="2" style="border : 1px solid black;"><center><?php echo $slip['mfg_date']?></center></td>
                                            <td colspan="2" style="border : 1px solid black;     padding: 4px;  font-size:9px;">D.C Number.</td>
                                            <td colspan="2" style="border : 1px solid black;"><center><?php echo $slip['delivery_challan']?></center></td>
                                        </tr>
                                        <tr style="">
                                            <td colspan="8">&nbsp;</td>
                                        </tr>
                                    </thead>
                                </table>
                            </div>
                        </div>
                        <br><div class="row">
                            <div class="col-lg-6 my_div1" style="">
                                <table style="width: 100%; border : 1px solid black;">
                                    <thead>
                                        <tr style="border : 1px solid black;">
                                            <td colspan="8"><center>Ammara Commercial Printers (Pvt.) Ltd</center></td>
                                        </tr>
                                        <tr style="border : 1px solid black;">
                                            <td colspan="8"><center><p style="font-size: 9px;     margin-top: 3px;">Plot No.C 6&7 S.G.M Industrial Area Phase II Main Dumloti Road Karachi Pakistan</p></center></td>
                                        </tr>
                                        <tr style="border : 1px solid black;">
                                            <td colspan="8"><center>Dispatch Slip</center></td>
                                        </tr>
                                        <tr style="border : 1px solid black;">
                                            <td colspan="8"><center>Doc No: DFG/FM/001</center></td>
                                        </tr>
                                        <tr >
                                            <td colspan="3" style="border : 1px solid black;     padding: 4px; font-size:9px;">Component Name:</td>
                                            <td colspan="5" style="border : 1px solid black;     padding: 4px; font-size:9px;"><?php echo $slip['Description']?></td>
                                        </tr>
                                        <tr >
                                            <td colspan="2" style="border : 1px solid black;     padding: 4px; font-size:9px;">Code No.</td>
                                            <td colspan="2" style="border : 1px solid black;"><center><?php echo $slip['Item_code']?></center></td>
                                            <td colspan="2" style="border : 1px solid black;     padding: 4px; font-size:9px;">Quantity.</td>
                                            <td colspan="2" style="border : 1px solid black;"><center><?php echo $slip['total_carton']?></center></td>
                                        </tr>
                                        <tr >
                                            <td colspan="2" style="border : 1px solid black;     padding: 4px; font-size:9px;">P.O No.</td>
                                            <td colspan="2" style="border : 1px solid black;"><center><?php echo $slip['PO_No']?></center></td>
                                            <td colspan="2" style="border : 1px solid black;     padding: 4px;  font-size:9px;">Lot No.</td>
                                            <td colspan="2" style="border : 1px solid black;"><center><?php echo $slip['line_no']?></center></td>
                                        </tr>
                                        <tr >
                                            <td colspan="2" style="border : 1px solid black;     padding: 4px;  font-size:9px;">Mfg. Date.</td>
                                            <td colspan="2" style="border : 1px solid black;"><center><?php echo $slip['mfg_date']?></center></td>
                                            <td colspan="2" style="border : 1px solid black;     padding: 4px;  font-size:9px;">D.C Number.</td>
                                            <td colspan="2" style="border : 1px solid black;"><center><?php echo $slip['delivery_challan']?></center></td>
                                        </tr>
                                        <tr style="">
                                            <td colspan="8">&nbsp;</td>
                                        </tr>
                                    </thead>
                                </table>
                            </div>
                            <div class="col-lg-6 my_div" style="">
                                <table style="width: 100%; border : 1px solid black;">
                                    <thead>
                                        <tr style="border : 1px solid black;">
                                            <td colspan="8"><center>Ammara Commercial Printers (Pvt.) Ltd</center></td>
                                        </tr>
                                        <tr style="border : 1px solid black;">
                                            <td colspan="8"><center><p style="font-size: 9px;     margin-top: 3px;">Plot No.C 6&7 S.G.M Industrial Area Phase II Main Dumloti Road Karachi Pakistan</p></center></td>
                                        </tr>
                                        <tr style="border : 1px solid black;">
                                            <td colspan="8"><center>Dispatch Slip</center></td>
                                        </tr>
                                        <tr style="border : 1px solid black;">
                                            <td colspan="8"><center>Doc No: DFG/FM/001</center></td>
                                        </tr>
                                        <tr >
                                            <td colspan="3" style="border : 1px solid black;     padding: 4px; font-size:9px;">Component Name:</td>
                                            <td colspan="5" style="border : 1px solid black;     padding: 4px; font-size:9px;"><?php echo $slip['Description']?></td>
                                        </tr>
                                        <tr >
                                            <td colspan="2" style="border : 1px solid black;     padding: 4px; font-size:9px;">Code No.</td>
                                            <td colspan="2" style="border : 1px solid black;"><center><?php echo $slip['Item_code']?></center></td>
                                            <td colspan="2" style="border : 1px solid black;     padding: 4px; font-size:9px;">Quantity.</td>
                                            <td colspan="2" style="border : 1px solid black;"><center><?php echo $slip['total_carton']?></center></td>
                                        </tr>
                                        <tr >
                                            <td colspan="2" style="border : 1px solid black;     padding: 4px; font-size:9px;">P.O No.</td>
                                            <td colspan="2" style="border : 1px solid black;"><center><?php echo $slip['PO_No']?></center></td>
                                            <td colspan="2" style="border : 1px solid black;     padding: 4px;  font-size:9px;">Lot No.</td>
                                            <td colspan="2" style="border : 1px solid black;"><center><?php echo $slip['line_no']?></center></td>
                                        </tr>
                                        <tr >
                                            <td colspan="2" style="border : 1px solid black;     padding: 4px;  font-size:9px;">Mfg. Date.</td>
                                            <td colspan="2" style="border : 1px solid black;"><center><?php echo $slip['mfg_date']?></center></td>
                                            <td colspan="2" style="border : 1px solid black;     padding: 4px;  font-size:9px;">D.C Number.</td>
                                            <td colspan="2" style="border : 1px solid black;"><center><?php echo $slip['delivery_challan']?></center></td>
                                        </tr>
                                        <tr style="">
                                            <td colspan="8">&nbsp;</td>
                                        </tr>
                                    </thead>
                                </table>
                            </div>
                        </div>
                        <br><div class="row">
                            <div class="col-lg-6 my_div1" style="">
                                <table style="width: 100%; border : 1px solid black;">
                                    <thead>
                                        <tr style="border : 1px solid black;">
                                            <td colspan="8"><center>Ammara Commercial Printers (Pvt.) Ltd</center></td>
                                        </tr>
                                        <tr style="border : 1px solid black;">
                                            <td colspan="8"><center><p style="font-size: 9px;     margin-top: 3px;">Plot No.C 6&7 S.G.M Industrial Area Phase II Main Dumloti Road Karachi Pakistan</p></center></td>
                                        </tr>
                                        <tr style="border : 1px solid black;">
                                            <td colspan="8"><center>Dispatch Slip</center></td>
                                        </tr>
                                        <tr style="border : 1px solid black;">
                                            <td colspan="8"><center>Doc No: DFG/FM/001</center></td>
                                        </tr>
                                        <tr >
                                            <td colspan="3" style="border : 1px solid black;     padding: 4px; font-size:9px;">Component Name:</td>
                                            <td colspan="5" style="border : 1px solid black;     padding: 4px; font-size:9px;"><?php echo $slip['Description']?></td>
                                        </tr>
                                        <tr >
                                            <td colspan="2" style="border : 1px solid black;     padding: 4px; font-size:9px;">Code No.</td>
                                            <td colspan="2" style="border : 1px solid black;"><center><?php echo $slip['Item_code']?></center></td>
                                            <td colspan="2" style="border : 1px solid black;     padding: 4px; font-size:9px;">Quantity.</td>
                                            <td colspan="2" style="border : 1px solid black;"><center><?php echo $slip['total_carton']?></center></td>
                                        </tr>
                                        <tr >
                                            <td colspan="2" style="border : 1px solid black;     padding: 4px; font-size:9px;">P.O No.</td>
                                            <td colspan="2" style="border : 1px solid black;"><center><?php echo $slip['PO_No']?></center></td>
                                            <td colspan="2" style="border : 1px solid black;     padding: 4px;  font-size:9px;">Lot No.</td>
                                            <td colspan="2" style="border : 1px solid black;"><center><?php echo $slip['line_no']?></center></td>
                                        </tr>
                                        <tr >
                                            <td colspan="2" style="border : 1px solid black;     padding: 4px;  font-size:9px;">Mfg. Date.</td>
                                            <td colspan="2" style="border : 1px solid black;"><center><?php echo $slip['mfg_date']?></center></td>
                                            <td colspan="2" style="border : 1px solid black;     padding: 4px;  font-size:9px;">D.C Number.</td>
                                            <td colspan="2" style="border : 1px solid black;"><center><?php echo $slip['delivery_challan']?></center></td>
                                        </tr>
                                        <tr style="">
                                            <td colspan="8">&nbsp;</td>
                                        </tr>
                                    </thead>
                                </table>
                            </div>
                            <div class="col-lg-6 my_div" style="">
                                <table style="width: 100%; border : 1px solid black;">
                                    <thead>
                                        <tr style="border : 1px solid black;">
                                            <td colspan="8"><center>Ammara Commercial Printers (Pvt.) Ltd</center></td>
                                        </tr>
                                        <tr style="border : 1px solid black;">
                                            <td colspan="8"><center><p style="font-size: 9px;     margin-top: 3px;">Plot No.C 6&7 S.G.M Industrial Area Phase II Main Dumloti Road Karachi Pakistan</p></center></td>
                                        </tr>
                                        <tr style="border : 1px solid black;">
                                            <td colspan="8"><center>Dispatch Slip</center></td>
                                        </tr>
                                        <tr style="border : 1px solid black;">
                                            <td colspan="8"><center>Doc No: DFG/FM/001</center></td>
                                        </tr>
                                        <tr >
                                            <td colspan="3" style="border : 1px solid black;     padding: 4px; font-size:9px;">Component Name:</td>
                                            <td colspan="5" style="border : 1px solid black;     padding: 4px; font-size:9px;"><?php echo $slip['Description']?></td>
                                        </tr>
                                        <tr >
                                            <td colspan="2" style="border : 1px solid black;     padding: 4px; font-size:9px;">Code No.</td>
                                            <td colspan="2" style="border : 1px solid black;"><center><?php echo $slip['Item_code']?></center></td>
                                            <td colspan="2" style="border : 1px solid black;     padding: 4px; font-size:9px;">Quantity.</td>
                                            <td colspan="2" style="border : 1px solid black;"><center><?php echo $slip['total_carton']?></center></td>
                                        </tr>
                                        <tr >
                                            <td colspan="2" style="border : 1px solid black;     padding: 4px; font-size:9px;">P.O No.</td>
                                            <td colspan="2" style="border : 1px solid black;"><center><?php echo $slip['PO_No']?></center></td>
                                            <td colspan="2" style="border : 1px solid black;     padding: 4px;  font-size:9px;">Lot No.</td>
                                            <td colspan="2" style="border : 1px solid black;"><center><?php echo $slip['line_no']?></center></td>
                                        </tr>
                                        <tr >
                                            <td colspan="2" style="border : 1px solid black;     padding: 4px;  font-size:9px;">Mfg. Date.</td>
                                            <td colspan="2" style="border : 1px solid black;"><center><?php echo $slip['mfg_date']?></center></td>
                                            <td colspan="2" style="border : 1px solid black;     padding: 4px;  font-size:9px;">D.C Number.</td>
                                            <td colspan="2" style="border : 1px solid black;"><center><?php echo $slip['delivery_challan']?></center></td>
                                        </tr>
                                        <tr style="">
                                            <td colspan="8">&nbsp;</td>
                                        </tr>
                                    </thead>
                                </table>
                            </div>
                        </div>
                        <br><div class="row">
                            <div class="col-lg-6 my_div1" style="">
                                <table style="width: 100%; border : 1px solid black;">
                                    <thead>
                                        <tr style="border : 1px solid black;">
                                            <td colspan="8"><center>Ammara Commercial Printers (Pvt.) Ltd</center></td>
                                        </tr>
                                        <tr style="border : 1px solid black;">
                                            <td colspan="8"><center><p style="font-size: 9px;     margin-top: 3px;">Plot No.C 6&7 S.G.M Industrial Area Phase II Main Dumloti Road Karachi Pakistan</p></center></td>
                                        </tr>
                                        <tr style="border : 1px solid black;">
                                            <td colspan="8"><center>Dispatch Slip</center></td>
                                        </tr>
                                        <tr style="border : 1px solid black;">
                                            <td colspan="8"><center>Doc No: DFG/FM/001</center></td>
                                        </tr>
                                        <tr >
                                            <td colspan="3" style="border : 1px solid black;     padding: 4px; font-size:9px;">Component Name:</td>
                                            <td colspan="5" style="border : 1px solid black;     padding: 4px; font-size:9px;"><?php echo $slip['Description']?></td>
                                        </tr>
                                        <tr >
                                            <td colspan="2" style="border : 1px solid black;     padding: 4px; font-size:9px;">Code No.</td>
                                            <td colspan="2" style="border : 1px solid black;"><center><?php echo $slip['Item_code']?></center></td>
                                            <td colspan="2" style="border : 1px solid black;     padding: 4px; font-size:9px;">Quantity.</td>
                                            <td colspan="2" style="border : 1px solid black;"><center><?php echo $slip['total_carton']?></center></td>
                                        </tr>
                                        <tr >
                                            <td colspan="2" style="border : 1px solid black;     padding: 4px; font-size:9px;">P.O No.</td>
                                            <td colspan="2" style="border : 1px solid black;"><center><?php echo $slip['PO_No']?></center></td>
                                            <td colspan="2" style="border : 1px solid black;     padding: 4px;  font-size:9px;">Lot No.</td>
                                            <td colspan="2" style="border : 1px solid black;"><center><?php echo $slip['line_no']?></center></td>
                                        </tr>
                                        <tr >
                                            <td colspan="2" style="border : 1px solid black;     padding: 4px;  font-size:9px;">Mfg. Date.</td>
                                            <td colspan="2" style="border : 1px solid black;"><center><?php echo $slip['mfg_date']?></center></td>
                                            <td colspan="2" style="border : 1px solid black;     padding: 4px;  font-size:9px;">D.C Number.</td>
                                            <td colspan="2" style="border : 1px solid black;"><center><?php echo $slip['delivery_challan']?></center></td>
                                        </tr>
                                        <tr style="">
                                            <td colspan="8">&nbsp;</td>
                                        </tr>
                                    </thead>
                                </table>
                            </div>
                            <div class="col-lg-6 my_div" style="">
                                <table style="width: 100%; border : 1px solid black;">
                                    <thead>
                                        <tr style="border : 1px solid black;">
                                            <td colspan="8"><center>Ammara Commercial Printers (Pvt.) Ltd</center></td>
                                        </tr>
                                        <tr style="border : 1px solid black;">
                                            <td colspan="8"><center><p style="font-size: 9px;     margin-top: 3px;">Plot No.C 6&7 S.G.M Industrial Area Phase II Main Dumloti Road Karachi Pakistan</p></center></td>
                                        </tr>
                                        <tr style="border : 1px solid black;">
                                            <td colspan="8"><center>Dispatch Slip</center></td>
                                        </tr>
                                        <tr style="border : 1px solid black;">
                                            <td colspan="8"><center>Doc No: DFG/FM/001</center></td>
                                        </tr>
                                        <tr >
                                            <td colspan="3" style="border : 1px solid black;     padding: 4px; font-size:9px;">Component Name:</td>
                                            <td colspan="5" style="border : 1px solid black;     padding: 4px; font-size:9px;"><?php echo $slip['Description']?></td>
                                        </tr>
                                        <tr >
                                            <td colspan="2" style="border : 1px solid black;     padding: 4px; font-size:9px;">Code No.</td>
                                            <td colspan="2" style="border : 1px solid black;"><center><?php echo $slip['Item_code']?></center></td>
                                            <td colspan="2" style="border : 1px solid black;     padding: 4px; font-size:9px;">Quantity.</td>
                                            <td colspan="2" style="border : 1px solid black;"><center><?php echo $slip['total_carton']?></center></td>
                                        </tr>
                                        <tr >
                                            <td colspan="2" style="border : 1px solid black;     padding: 4px; font-size:9px;">P.O No.</td>
                                            <td colspan="2" style="border : 1px solid black;"><center><?php echo $slip['PO_No']?></center></td>
                                            <td colspan="2" style="border : 1px solid black;     padding: 4px;  font-size:9px;">Lot No.</td>
                                            <td colspan="2" style="border : 1px solid black;"><center><?php echo $slip['line_no']?></center></td>
                                        </tr>
                                        <tr >
                                            <td colspan="2" style="border : 1px solid black;     padding: 4px;  font-size:9px;">Mfg. Date.</td>
                                            <td colspan="2" style="border : 1px solid black;"><center><?php echo $slip['mfg_date']?></center></td>
                                            <td colspan="2" style="border : 1px solid black;     padding: 4px;  font-size:9px;">D.C Number.</td>
                                            <td colspan="2" style="border : 1px solid black;"><center><?php echo $slip['delivery_challan']?></center></td>
                                        </tr>
                                        <tr style="">
                                            <td colspan="8">&nbsp;</td>
                                        </tr>
                                    </thead>
                                </table>
                            </div>
                        </div>


                        <!-- <table border="1">
                            <tbody>
                                <?php 
                                    $qty = explode('+', $slip['qty_per_mc']);
                                    $carton = explode('+', $slip['total_carton']);
                                    for ($i=0; $i < sizeof($qty); $i++) {
                                ?>
                                <tr>
                                    <td><?php echo $slip['Description'] ?></td>
                                    <td><?php echo $slip['Item_code'] ?></td>
                                    <td><?php echo $qty[$i] ?></td>
                                    <td><?php echo $slip['PO_No'] ?></td>
                                    <td><?php echo $slip['id'] ?> / <?php echo date('Y', strtotime($slip['created_at'])) ?></td>
                                    <td><?php echo date('d-M-Y', strtotime($slip['mfg_date'])) ?></td>
                                    <td><?php echo $slip['delivery_challan'] ?></td>
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table> -->
                    </div>

                    <button id="btn" class="print-btn_slip btn btn-info pull-right" role="button">Generate Print</button>
                </div>
            </div>
        </div>
        <div style="height: 450px;"></div>
    </div>
    <!-- /.main content -->
</div>
<!-- /#page-wrapper -->
</div>
<!-- /#wrapper -->
<script type="text/javascript">
    $('.print-btn_slip').click(function() {
        w = window.open();
        var ht = $('.print-slip').html()
        var head = $('head').html()
        w.document.write('<html>');
        w.document.write('<head>');
        w.document.write(head);
      w.document.write('<style>input[type="radio"]{webkit-appearance: radio;}</style>') 
      w.document.write('<style>.my_div1{width : 50%; float: left; border-left:1px solid;}</style>') 
      w.document.write('<style>.my_div{float: left; width : 50%; border-left:1px solid;}</style>') 
      w.document.write('<style>.my_div1_1{float: left; width : 50%; border-left:1px solid;}</style>') 
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