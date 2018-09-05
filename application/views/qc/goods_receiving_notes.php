<div class=control-sidebar-bg>
</div>
<div id=page-wrapper>
    <div class=content>
        <div class=content-header>
            <div class=header-icon style="margin-top: -9px;">
                <i class="pe-7s-note"></i>
            </div>
            <div class=header-title>
                <h1>Goods Receving Note</h1>
                <small></small>
                <ol class=breadcrumb>
                    <li><i class=pe-7s-home></i> Home</li>
                    <li class="active">Goods Receving Note</li>

                </ol>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-bd ">
                    <div class="panel-heading">
                        <div class="panel-title">
                            <h4>Goods Receving Note</h4>
                        </div>
                    </div>
                    <div class="panel-body">
                        <form method="post" action="">
                            <div class="row">
                                <div class="form-group row">
                                    <div class="form-group col-lg-6">
                                        <label for="" class="col-sm-4">WO #</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" data-id="" name="wo_no" id="" placeholder="" value="<?php echo $wo_no ?>" readonly>
                                        </div>
                                    </div>
                                    <div class="form-group col-lg-6">
                                        <label for="" class="col-sm-4">GRN #</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" data-id="" name="grn_no" id="" placeholder="" value="">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="form-group col-lg-6">
                                        <label for="" class="col-sm-4">Date</label>
                                        <div class="col-sm-8">
                                            <input type="date" class="form-control" data-id="" name="grn_date" id="" placeholder="" value="" >
                                        </div>
                                    </div>
                                    <div class="form-group col-lg-6">
                                        <label for="" class="col-sm-4">Supplier's Name #</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" data-id="" name="supplier_name" id="" placeholder="" value="">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="form-group col-lg-6">
                                        <label for="" class="col-sm-4">Requisition #</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" data-id="" name="requisition_no" id="po_no1" placeholder="" value="">
                                        </div>
                                    </div>
                                    <div class="form-group col-lg-6">
                                        <label for="" class="col-sm-4">P.O #</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" data-id="" name="po_no" id="" placeholder="" value="">
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="" id='TextBoxesGroup'>
                                    <div class="form-group row">
                                        <div class="form-group col-lg-6">
                                            <label for="" class="col-sm-4">P.O Date :</label>
                                            <div class="col-sm-8">
                                                <input type="date" class="form-control" data-id="" name="po_date" id="" placeholder="" value="1" readonly="">
                                            </div>
                                        </div>
                                        <div class="form-group col-lg-6">
                                            <label for="" class="col-sm-4">Delivery Note No :</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" data-id="" name="delivery_note_no" id="" placeholder="" value="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="form-group col-lg-6">
                                            <label for="" class="col-sm-4">Item Description :</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" data-id="" name="item_description[]" id="item_description1" placeholder="" value="" >
                                            </div>
                                        </div>
                                        <div class="form-group col-lg-6">
                                            <label for="" class="col-sm-4">Unit</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" data-id="" name="unit[]" id="unit1" placeholder="" value="" >
                                            </div>
                                        </div>
                                        
                                    </div>
                                    <div class="form-group row">
                                        <div class="form-group col-lg-6">
                                            <label for="" class="col-sm-4">Qty :</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" data-id="" name="qty[]" id="qty1" placeholder="">
                                            </div>
                                        </div>
                                        <div class="form-group col-lg-6">
                                            <label for="" class="col-sm-4">Remarks :</label>
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
                                                  
                                                    <th colspan="3">Item Description</th>
                                                   
                                                    <th colspan="1">Unit</th>
                                                    <th colspan="1">Qty</th>
                                                    <th colspan="3">Remarks</th>
                                                </tr>
                                            </thead>
                                            <tbody class="append-education">
                                                <tr>
                                                   
                                                    <td colspan="3">
                                                        <e class="item_description1_value"></e>
                                                    </td>
                                                    <td>
                                                        <e class="unit1_value"></e>
                                                    </td>
                                                    <td>
                                                        <e class="qty1_value"></e>
                                                    </td>
                                                    <td colspan="3">
                                                        <e class="remarks1_value"></e>
                                                    </td>
                                                    
                                                </tr>
                                            </tbody>
                                        </table>
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
            newtableadd.after().html('<table><tbody class="append-education"><tr>' +
                '<td colspan="3">' +
                '<e class="item_description' + counter +
                '_value"></e></td><td>' +
                '<e class="unit' + counter +
                '_value"></e></td><td>' +
                '<e class="qty' + counter +
                '_value"></e></td><td colspan="3">' +
                '<e class="remarks' + counter +
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
            newTextBoxDiv.after().html('<hr><div class="form-group col-lg-6"><label class="col-sm-4" >item_description </label> <div class="col-sm-8">' +
                '<input type="text" class="form-control" data-id="" name="item_description[]" id="item_description'+ counter +'" placeholder="" value="" ></div></div></div><div class="form-group row"><div class="form-group col-lg-6"><label class="col-sm-4" >unit </label> <div class="col-sm-8">' +
                '<input type="text" class="form-control" name="unit[]" id="unit' + counter + '" value="" ></div></div><div class="form-group col-lg-6"><label class="col-sm-4" >qty </label> <div class="col-sm-8">' +
                '<input type="text" class="form-control" name="qty[]" id="qty' + counter + '" value="" ></div></div></div><div class="form-group row"><div class="form-group col-lg-6"><label class="col-sm-4" >remarks </label> <div class="col-sm-8">' +
                '<input type="text" class="form-control" name="remarks[]" id="remarks' + counter + '" value="" ></div></div>');
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