
<div class=control-sidebar-bg>
</div>
<div id=page-wrapper>
    <div class=content>
        <div class=content-header>
            <div class=header-icon style="margin-top: -9px;">
                <i class="pe-7s-note"></i>
            </div>
            <div class=header-title>
                <h1>Material Inspection Note</h1>
                <small></small>
                <ol class=breadcrumb>
                    <li><i class=pe-7s-home></i> Home</li>
                    <li class="active">Material Inspection Note</li>

                </ol>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-bd ">
                    <div class="panel-heading">
                        <div class="panel-title">
                            <h4>Material Inspection Note</h4>
                        </div>
                    </div>
                    <div class="panel-body">
                        <form method="post" action="">
                            <div class="row">
                               
                                    <div class="col-md-12">
                                        <div class="col-md-6 tbl_heads">
                                            <b>Supplier Name: <input name="Supplier_Name" class="form-control" /></b>  
                                        </div>
                                        <div class="col-md-3 tbl_heads">
                                            <b>MIN No: <input name="min_no" class="form-control" /></b> 
                                        </div>
                                        <div class="col-md-3 tbl_heads">
                                            <b>Date: <input name="" class="form-control" value="<?php echo $get_detail['PO_Date']?>" /></b>  
                                        </div>
                                        <div class="col-md-6 tbl_heads">
                                            <b>P.O # : <input name="" class="form-control" value="<?php echo $get_detail['PO_No']?>" /></b></br>
                                        </div>
                                        <div class="col-md-6 tbl_heads" style="    height: 58px;">
                                            <b>Challan Number: <input name="Challan_Number" class="form-control" /></b> </br>
                                        </div>
                                        <table class="table table-bordered">
                                            
                                            <thead>
                                                <tr>
                                                    <th width="8%">S. No</th>
                                                    <th width="40%">Item Description</th>
                                                    <th>Unit</th>
                                                    <th>QTY REC</th>
                                                    <th>QTY OK</th>
                                                    <th>QTY REJ</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr class="add-div">
                                                    <td><input name="s_no[]" class="form-control" /></td>
                                                    <td><input name="item_desc[]" class="form-control" /></td>
                                                    <td><input name="unit[]" class="form-control" /></td>
                                                    <td><input name="qty_rec[]" class="form-control" /></td>
                                                    <td><input name="qty_ok[]" class="form-control" /></td>
                                                    <td><input name="qty_rej[]" class="form-control" /></td>
                                                    <td>
                                                        <div class="delet">
                                                        <button type="button" class="add-sub btn btn-success ">Add More</button>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <h4>Remarks By Quality Controller</h4>
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th><center>For paper &amp; Board</center></th>
                                                    <th><center>Inks</center></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td style="padding: 0;">
                                                        <table class="table table-bordered" style="margin: 0;">
                                                        <thead>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>Appearance</td>
                                                                <td><input name="Appearance" class="form-control" /></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Grammage</td>
                                                                <td><input name="Grammage" class="form-control" /></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Thickness</td>
                                                                <td><input name="Thickness" class="form-control" /></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Moisture</td>
                                                                <td><input name="" class="form-control" /></td>
                                                            </tr>
                                                            <tr>
                                                                <td>PH</td>
                                                                <td><input name="Moisture" class="form-control" /></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Grain Direction</td>
                                                                <td><input name="Grain_Direction" class="form-control" /></td>
                                                            </tr>
                                                        </tbody>
                                                        </table>
                                                         
                                                    </td>
                                                    <td style="padding: 0;">
                                                        <table class="table table-bordered" style="margin: 0;">
                                                        <thead>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>Presence of Insects</td>
                                                                <td><input name="Presence_of_Insects" class="form-control" /></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Oil and Grease Stains</td>
                                                                <td><input name="Oil_and_Grease_Stains" class="form-control" /></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Shade</td>
                                                                <td><input name="Shade" class="form-control" /></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Strength</td>
                                                                <td><input name="Strength" class="form-control" /></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Stick ability</td>
                                                                <td><input name="Stick ability" class="form-control" /></td>
                                                            </tr>
                                                            <tr>
                                                                <td colspan="2"><center><b>Alcohol</b></center></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Miscibility</td>
                                                                <td><input name="Miscibility" class="form-control" /></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Purity</td>
                                                                <td><input name="Purity" class="form-control" /></td>
                                                            </tr>
                                                        </tbody>
                                                        </table>
                                                         
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <center>
                                            <label class="radio-inline"><input value="Approved" type="radio" name="status" checked>Approved</label>
                                            <label class="radio-inline"><input  value="Disapproved" type="radio" name="status">Disapproved</label>
                                        </center>
                                        <div class="col-md-6">
                                            <p class="sign"></p>
                                        <b>Received by Store Incharge</b>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="pull-right" style="width: 42%;">
                                                <p class="sign" style="width: 100%"></p>
                                        <b>Verified By Quality</b>
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
<script type="text/javascript">
    $(document).ready(function() {
        var counter = 2;
        $("#addButton").click(function() {
            var newtableadd = $(document.createElement('tr'))
                .attr("id", 'tableadd' + counter);
            newtableadd.after().html('<table><tbody class="append-education"><tr><td>' +
                '<e class="wo_no' + counter +
                '_value"><?php echo $wo_no ?></e></td><td>' +
                '<e class="machine' + counter +
                '_value"><?php echo $_GET['machine'] ?></e></td><td>' +
                '<e class="time' + counter +
                '_value"></e></td><td>' +
                '<e class="creasing' + counter +
                '_value"></e></td><td>' +
                '<e class="glue_position' + counter +
                '_value"></e></td><td>' +
                '<e class="gluing' + counter +
                '_value"></e></td><td>' +
                '<e class="stickiness' + counter +
                '_value"></e></td><td>' +
                '<e class="scratches' + counter +
                '_value"></e></td><td>' +
                '<e class="color_rub' + counter +
                '_value"></e></td><td>' +
                '<e class="counting' + counter +
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
            newTextBoxDiv.after().html('<hr><div class="form-group row"><div class="form-group col-lg-6"><label class="col-sm-4" >Wo # </label> <div class="col-sm-8">' +
                '<input type="text" class="form-control" data-id="" name="wo_no" id="wo_no'+ counter +'" placeholder="" value="<?php echo $wo_no ?>" readonly></div></div><div class="form-group col-lg-6"><label class="col-sm-4" >Machine </label> <div class="col-sm-8">' +
                '<input type="text" class="form-control" data-id="" name="machine" id="machine'+ counter +'" placeholder="" value="<?php echo $_GET['machine'] ?>" readonly></div></div></div><div class="form-group row"><div class="form-group col-lg-6"><label class="col-sm-4" >Time </label> <div class="col-sm-8">' +
                '<input type="text" class="form-control" name="time[]" id="time' + counter + '" value="" ></div></div><div class="form-group col-lg-6"><label class="col-sm-4" >creasing </label> <div class="col-sm-8">' +
                '<input type="text" class="form-control" name="creasing[]" id="creasing' + counter + '" value="" ></div></div></div><div class="form-group row"><div class="form-group col-lg-6"><label class="col-sm-4" >glue_position </label> <div class="col-sm-8">' +
                '<input type="text" class="form-control" name="glue_position[]" id="glue_position' + counter + '" value="" ></div></div><div class="form-group col-lg-6"><label class="col-sm-4" >gluing </label> <div class="col-sm-8">' +
                '<input type="text" class="form-control" name="gluing[]" id="gluing' + counter + '" value="" ></div></div></div><div class="form-group row"><div class="form-group col-lg-6"><label class="col-sm-4" >Stickiness </label> <div class="col-sm-8">' +
                '<input type="text" class="form-control" name="stickiness[]" id="stickiness' + counter + '" value="" ></div></div><div class="form-group col-lg-6"><label class="col-sm-4" >scratches </label> <div class="col-sm-8">' +
                '<input type="text" class="form-control" name="scratches[]" id="scratches' + counter + '" value="" ></div></div></div><div class="form-group col-lg-6"><label class="col-sm-4" >color_rub </label> <div class="col-sm-8">' +
                '<input type="text" class="form-control" name="color_rub[]" id="color_rub' + counter + '" value="" ></div></div></div><div class="form-group col-lg-6"><label class="col-sm-4" >counting </label> <div class="col-sm-8">' +
                '<input type="text" class="form-control" name="counting[]" id="counting' + counter + '" value="" ></div></div></div><div class="form-group col-lg-6"><label class="col-sm-4" >Remarks </label> <div class="col-sm-8">' +
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
<script type="text/javascript">
    
     

    $("body").on("click", ".btn_close", function() {

       $(this).hide();
       $('#floatdiv').fadeOut(300);
       $('#chart3').hide();
    });

    $("body").on("click", ".add-sub", function() {
        var html = $(".add-div").first().clone();
        $(html).find(".delet").html("<a class='btn btn-danger remove'><i class='fa fa-trash-o' aria-hidden='true'></i> </a> " + ' <a class="btn btn-success add-sub"><strong> + </strong> </a>');
        $(".add-div").last().after(html);
        $(".add-div").last().find('input,select').val('')
        get_machines()
    });
    $("body").on("click", ".remove", function() {
        $(this).parents(".add-div").remove();
    });
</script>