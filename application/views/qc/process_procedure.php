<div class=control-sidebar-bg>
</div>
<div id=page-wrapper>
    <div class=content>
        <div class=content-header>
            <div class=header-icon style="margin-top: -9px;">
                <i class="pe-7s-note"></i>
            </div>
            <div class=header-title>
                <h1>Process Procedure</h1>
                <small></small>
                <ol class=breadcrumb>
                    <li><i class=pe-7s-home></i> Home</li>
                    <li class="active">Process Procedure</li>

                </ol>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-bd ">
                    <div class="panel-heading">
                        <div class="panel-title">
                            <h4>Process Procedure</h4>
                        </div>
                    </div>
                    <div class="panel-body">
                        <form method="post" action="">
                            <div class="row">
                                <div class="form-group row">
                                    <div class="form-group col-lg-6">
                                        <label for="" class="col-sm-4">WO #</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" data-id="" name="wo_no" id="wo_no1" placeholder="" value="<?php echo $wo_no ?>" readonly>
                                        </div>
                                    </div>
                                    <div class="form-group col-lg-6">
                                        <label for="" class="col-sm-4">Date</label>
                                        <div class="col-sm-8">
                                            <input type="date" class="form-control" data-id="" name="date" id="date1" placeholder="" value="">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="form-group col-lg-6">
                                        <label for="" class="col-sm-4">Supplier Name</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" data-id="" name="supplier_name" id="name1" placeholder="" value="" >
                                        </div>
                                    </div>
                                    <div class="form-group col-lg-6">
                                        <label for="" class="col-sm-4">Min #</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" data-id="" name="min_no" id="min1" placeholder="" value="">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="form-group col-lg-6">
                                        <label for="" class="col-sm-4">P.O #</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" data-id="" name="po_no" id="po_no1" placeholder="" value="">
                                        </div>
                                    </div>
                                    <div class="form-group col-lg-6">
                                        <label for="" class="col-sm-4">Challan Number</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" data-id="" name="challan_number" id="challan_number1" placeholder="" value="">
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="" id='TextBoxesGroup'>
                                    <div class="form-group row">
                                        <div class="form-group col-lg-6">
                                            <label for="" class="col-sm-4">Sr # :</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" data-id="" name="sr_no[]" id="sr_no1" placeholder="" value="1" readonly="">
                                            </div>
                                        </div>
                                        <div class="form-group col-lg-6">
                                            <label for="" class="col-sm-4">Item Description</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" data-id="" name="item_description[]" id="item_description1" placeholder="" value="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="form-group col-lg-6">
                                            <label for="" class="col-sm-4">Unit</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" data-id="" name="unit[]" id="unit1" placeholder="" value="" >
                                            </div>
                                        </div>
                                        <div class="form-group col-lg-6">
                                            <label for="" class="col-sm-4">Qty Rec :</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" data-id="" name="qty_rec[]" id="qty_rec1" placeholder="" value="" >
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="form-group col-lg-6">
                                            <label for="" class="col-sm-4">Qty ok :</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" data-id="" name="qty_ok[]" id="qty_ok1" placeholder="">
                                            </div>
                                        </div>
                                        <div class="form-group col-lg-6">
                                            <label for="" class="col-sm-4">Qty Rej :</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" data-id="" name="qty_rej[]" id="qty_rej1" placeholder="">
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
                                                    <th colspan="7">Name : <e class="name1_value"></e> </th>
                                                    <th >MIN No : <e class="min1_value"></e></th>
                                                </tr>
                                                <tr>
                                                    <th colspan="2">P.O # : <e class="po_no1_value"></e> </th>
                                                    <th colspan="3">Date : <e class="date1_value"></e></th>
                                                    <th colspan="3">Challan Number : <e class="challan_number1_value"></e> </th>
                                                </tr>
                                                <tr>
                                                    <th colspan="1">Sr No:</th>
                                                    <th colspan="3">Item Description</th>
                                                   
                                                    <th colspan="1">Unit</th>
                                                    <th colspan="1">Qty Rec</th>
                                                    <th colspan="1">Qty ok</th>
                                                    <th colspan="1">Qty Rej</th>
                                                </tr>
                                            </thead>
                                            <tbody class="append-education">
                                                <tr>
                                                    <td>
                                                        <e class="">1</e>
                                                    </td>
                                                    <td colspan="3">
                                                        <e class="item_description1_value"></e>
                                                    </td>
                                                    <td>
                                                        <e class="unit1_value"></e>
                                                    </td>
                                                    <td>
                                                        <e class="qty_rec1_value"></e>
                                                    </td>
                                                    <td>
                                                        <e class="qty_ok1_value"></e>
                                                    </td>
                                                    <td>
                                                        <e class="qty_rej1_value"></e>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                            </div>
                            <div class="form-group row">
                        <div class="col-md-12">
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
  
  
                                       <th colspan="6">
                                                    <center>For Paper And Board</center>
                                                </th>
                                                <th colspan="6">
                                                    <center>Inks</center>
                                                </th>
                                            </tr>
                                            <tr>
                                                <td colspan="3">
                                                    Apperance
                                                </td>
                                                <td colspan="3">
                                                    <input class="form-control" type="" value="" id="" name="apperance">
                                                </td>
                                                <td colspan="3">
                                                    Presence of Insects
                                                </td>
                                                <td colspan="3">
                                                    <input class="form-control" type="" value="" id="" name="presence_of_insects">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="3">
                                                    Grammage
                                                </td>
                                                <td colspan="3">
                                                    <input class="form-control" type="" value="" id="" name="grammage">
                                                </td>
                                                <td colspan="3">
                                                    Oil and Grease Stains
                                                </td>
                                                <td colspan="3">
                                                    <input class="form-control" type="" value="" id="" name="oil_and_grease_stains">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="3">
                                                    Thickness
                                                </td>
                                                <td colspan="3">
                                                    <input class="form-control" type="" value="" id="" name="thickness">
                                                </td>
                                                <td colspan="3">
                                                    Shade
                                                </td>
                                                <td colspan="3">
                                                    <input class="form-control" type="" value="" id="" name="shade">
                                                </td>

                                            </tr>
                                            <tr>
                                                <td colspan="3">
                                                    Moisture
                                                </td>
                                                <td colspan="3">
                                                    <input class="form-control" type="" value="" id="" name="moisture">
                                                </td>
                                                <td colspan="3">
                                                    Strength
                                                </td>
                                                <td colspan="3">
                                                    <input class="form-control" type="" value="" id="" name="strength">
                                                </td>

                                            </tr>
                                            <tr>
                                                <td colspan="3">
                                                    PH
                                                </td>
                                                <td colspan="3">
                                                    <input class="form-control" type="" value="" id="" name="ph">
                                                </td>
                                                <td colspan="3">
                                                    Stick Ability
                                                </td>
                                                <td colspan="3">
                                                    <input class="form-control" type="" value="" id="" name="stick_ability">
                                                </td>

                                            </tr>
                                            <tr>
                                                <td colspan="3">
                                                    Grain Direction
                                                </td>
                                                <td colspan="3">
                                                    <input class="form-control" type="" value="" id="" name="grain_direction">
                                                </td>
                                                <td colspan="6">
                                                    <center>
                                                        <label for="" class="form-label">
                                                            Alcohol
                                                        </label>
                                                    </center>
                                                </td>

                                            </tr>
                                            <tr>
                                                <td colspan="3"></td>
                                                <td colspan="3">
                                                    <input class="form-control" type="" value="" id="">
                                                </td>
                                                <td colspan="3">
                                                    Miscibility
                                                </td>
                                                <td colspan="3">
                                                    <input class="form-control" type="" value="" id="" name="miscibility">
                                                </td>

                                            </tr>
                                            <tr>
                                                <td colspan="3"></td>
                                                <td colspan="3">
                                                    <input class="form-control" type="" value="" id="">
                                                </td>
                                                <td colspan="3">
                                                    Purity
                                                </td>
                                                <td colspan="3">
                                                    <input class="form-control" type="" value="" id="" name="purity">
                                                </td>

                                            </tr>
                                            <tr>
                                                <td colspan="3"></td>
                                                <td colspan="3">
                                                    <input class="form-control" type="" value="" id="">
                                                </td>
                                                <td colspan="3"></td>
                                                <td colspan="3">
                                                    <input class="form-control" type="" value="" id="">
                                                </td>

                                            </tr>

                                        </thead>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-6">
                            <label for="example-email-input" class="col-sm-3 col-form-label">Remarks :</label>
                            <div class="col-sm-9">
                                <div class="radio radio-info radio-inline">
                                    &nbsp;&nbsp;
                                    <input type="radio" id="inlineRadio3" value="Approved " name="remarks" checked="">
                                    <label for="inlineRadio3">Approved </label>
                                </div>
                                <div class="radio radio-info radio-inline">
                                    &nbsp;&nbsp;
                                    <input type="radio" id="inlineRadio4" value="Dis Approved" name="remarks" checked="">
                                    <label for="inlineRadio4">Dis Approved</label>
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
                '<e class="sr_no' + counter +
                '_value">'+ counter +'</e></td><td colspan="3">' +
                '<e class="item_description' + counter +
                '_value"></e></td><td>' +
                '<e class="unit' + counter +
                '_value"></e></td><td>' +
                '<e class="qty_rec' + counter +
                '_value"></e></td><td>' +
                '<e class="qty_ok' + counter +
                '_value"></e></td><td>' +
                '<e class="qty_rej' + counter +
                '_value"></e></td>' +
                '</tr></tbody></table>');
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
            newTextBoxDiv.after().html('<hr><div class="form-group row"><div class="form-group col-lg-6"><label class="col-sm-4" >Sr No # </label> <div class="col-sm-8">' +
                '<input type="text" class="form-control" data-id="" name="sr_no[]" id="sr_no'+ counter +'" placeholder="" value="'+ counter + '" readonly></div></div><div class="form-group col-lg-6"><label class="col-sm-4" >item_description </label> <div class="col-sm-8">' +
                '<input type="text" class="form-control" data-id="" name="item_description[]" id="item_description'+ counter +'" placeholder="" value="" ></div></div></div><div class="form-group row"><div class="form-group col-lg-6"><label class="col-sm-4" >unit </label> <div class="col-sm-8">' +
                '<input type="text" class="form-control" name="unit[]" id="unit' + counter + '" value="" ></div></div><div class="form-group col-lg-6"><label class="col-sm-4" >qty_rec </label> <div class="col-sm-8">' +
                '<input type="text" class="form-control" name="qty_rec[]" id="qty_rec' + counter + '" value="" ></div></div></div><div class="form-group row"><div class="form-group col-lg-6"><label class="col-sm-4" >qty_ok </label> <div class="col-sm-8">' +
                '<input type="text" class="form-control" name="qty_ok[]" id="qty_ok' + counter + '" value="" ></div></div><div class="form-group col-lg-6"><label class="col-sm-4" >qty_rej </label> <div class="col-sm-8">' +
                '<input type="text" class="form-control" name="qty_rej[]" id="qty_rej' + counter + '" value="" ></div></div></div>');
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