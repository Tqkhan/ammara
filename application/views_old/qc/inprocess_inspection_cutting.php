<div class=control-sidebar-bg>
</div>
<div id=page-wrapper>
    <div class=content>
        <div class=content-header>
            <div class=header-icon style="margin-top: -9px;">
                <i class="pe-7s-note"></i>
            </div>
            <div class=header-title>
                <h1>Inprocess Inspection Cutting</h1>
                <small></small>
                <ol class=breadcrumb>
                    <li><i class=pe-7s-home></i> Home</li>
                    <li class="active">Inprocess Inspection Cutting</li>

                </ol>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-bd ">
                    <div class="panel-heading">
                        <div class="panel-title">
                            <h4>Inprocess Inspection Cutting</h4>
                        </div>
                    </div>
                    <div class="panel-body">
                        <form method="post" action="">
                            <div class="row">
                                <div class="" id='TextBoxesGroup'>
                                    <div class="form-group row">
                                        <div class="form-group col-lg-6">
                                            <label for="" class="col-sm-4">WO #</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" data-id="" name="wo_no" id="wo_no1" placeholder="" value="<?php echo $wo_no ?>" readonly>
                                            </div>
                                        </div>
                                        <div class="form-group col-lg-6">
                                            <label for="" class="col-sm-4">Machine</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" data-id="" name="machine" id="machine1" placeholder="" value="<?php echo $_GET['machine'] ?>" readonly>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="form-group col-lg-6">
                                            <label for="" class="col-sm-4">Time</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" data-id="" name="time[]" id="time1" placeholder="">
                                            </div>
                                        </div>
                                        <div class="form-group col-lg-6">
                                            <label for="" class="col-sm-4">Material</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" data-id="" name="material[]" id="material1" placeholder="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="form-group col-lg-6">
                                            <label for="" class="col-sm-4">GSM</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" data-id="" name="gsm[]" id="gsm1" placeholder="">
                                            </div>
                                        </div>
                                        <div class="form-group col-lg-6">
                                            <label for="" class="col-sm-4">Size</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" data-id="" name="size[]" id="size1" placeholder="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                         <div class="form-group col-lg-6">
                                            <label for="" class="col-sm-4">Cut Marks</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" data-id="" name="cutmarks[]" id="cutmarks1" placeholder="">
                                            </div>
                                        </div>
                                        <div class="form-group col-lg-6">
                                            <label for="" class="col-sm-4">Edges</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" data-id="" name="edges[]" id="edges1" placeholder="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                         <div class="form-group col-lg-6">
                                            <label for="" class="col-sm-4">Stain</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" data-id="" name="stain[]" id="stain1" placeholder="">
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
                                                    <th colspan="9"><center>Checking Parameters For Board & Paper Cutting</center></th>
                                                    <th rowspan="2">Remarks</th>
                                                </tr>
                                                <tr>
                                                    <th colspan="1">W.O No</th>
                                                    <th colspan="1">Machine</th>
                                                    <th colspan="1">Time</th>
                                                    <th colspan="1">Material</th>
                                                    <th colspan="1">GSM</th>
                                                    <th colspan="1">Size</th>
                                                    <th colspan="1"> Cut Mark</th>
                                                    <th colspan="1">Edges</th>
                                                    <th colspan="1">Stain</th>
                                                </tr>
                                            </thead>
                                            <tbody class="append-education">
                                                <tr>
                                                    <td>
                                                        <e class="wo_no1_value"><?php echo $wo_no ?></e>
                                                    </td>
                                                    <td>
                                                        <e class="machine1_value"><?php echo $_GET['machine'] ?></e>
                                                    </td>
                                                    <td>
                                                        <e class="time1_value"></e>
                                                    </td>
                                                    <td>
                                                        <e class="material1_value"></e>
                                                    </td>
                                                    <td>
                                                        <e class="gsm1_value"></e>
                                                    </td>
                                                    <td>
                                                        <e class="size1_value"></e>
                                                    </td>
                                                    <td>
                                                        <e class="cutmarks1_value"></e>
                                                    </td>
                                                    <td>
                                                        <e class="edges1_value"></e>
                                                    </td>
                                                    <td>
                                                        <e class="stain1_value"></e>
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
                '<e class="material' + counter +
                '_value"></e></td><td>' +
                '<e class="gsm' + counter +
                '_value"></e></td><td>' +
                '<e class="size' + counter +
                '_value"></e></td><td>' +
                '<e class="cutmarks' + counter +
                '_value"></e></td><td>' +
                '<e class="edges' + counter +
                '_value"></e></td><td>' +
                '<e class="stain' + counter +
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
                '<input type="text" class="form-control" name="time[]" id="time' + counter + '" value="" ></div></div><div class="form-group col-lg-6"><label class="col-sm-4" >Material </label> <div class="col-sm-8">' +
                '<input type="text" class="form-control" name="material[]" id="material' + counter + '" value="" ></div></div></div><div class="form-group row"><div class="form-group col-lg-6"><label class="col-sm-4" >GSM </label> <div class="col-sm-8">' +
                '<input type="text" class="form-control" name="gsm[]" id="gsm' + counter + '" value="" ></div></div><div class="form-group col-lg-6"><label class="col-sm-4" >Size </label> <div class="col-sm-8">' +
                '<input type="text" class="form-control" name="size[]" id="size' + counter + '" value="" ></div></div></div><div class="form-group row"><div class="form-group col-lg-6"><label class="col-sm-4" >Cut Marks </label> <div class="col-sm-8">' +
                '<input type="text" class="form-control" name="cutmarks[]" id="cutmarks' + counter + '" value="" ></div></div><div class="form-group col-lg-6"><label class="col-sm-4" >Edges </label> <div class="col-sm-8">' +
                '<input type="text" class="form-control" name="edges[]" id="edges' + counter + '" value="" ></div></div></div><div class="form-group row"><div class="form-group col-lg-6"><label class="col-sm-4" >Stain </label> <div class="col-sm-8">' +
                '<input type="text" class="form-control" name="stain[]" id="stain' + counter + '" value="" ></div></div><div class="form-group col-lg-6"><label class="col-sm-4" >Remarks </label> <div class="col-sm-8">' +
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