<div class=control-sidebar-bg>
</div>
<div id=page-wrapper>
    <div class=content>
        <div class=content-header>
            <div class=header-icon style="margin-top: -9px;">
                <i class="pe-7s-note"></i>
            </div>
            <div class=header-title>
                <h1>Inprocess Inspection Coating</h1>
                <small></small>
                <ol class=breadcrumb>
                    <li><i class=pe-7s-home></i> Home</li>
                    <li class="active">Inprocess Inspection Coating</li>

                </ol>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-bd ">
                    <div class="panel-heading">
                        <div class="panel-title">
                            <h4>Inprocess Inspection Coating</h4><span class="remov">X</span>
                        </div>
                    </div>
                    <div class="panel-body">
                        <form method="post" action="">
                            <div class="row">
                                <div class="form-group row">
                                    <div class="form-group">
                                        <div class="col-md-6">
                                            <label for="" class="col-sm-3 col-form-label">Date:</label>
                                            <div class="col-sm-9">
                                                <input class="form-control" type="date" value="" id="" name="date">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="" class="col-sm-3 col-form-label">W.O#:</label>
                                            <div class="col-sm-9">
                                                 <input type="text" class="form-control" data-id="" name="wo_no" id="wo_no1" placeholder="" value="<?php echo $wo_no ?>" readonly>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-6">
                                        <label for="" class="col-sm-3 col-form-label">Job Name:</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" type="" value="" id="" name="job_name">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="" class="col-sm-3 col-form-label">Colors:</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" type="" value="" id="" name="colours">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-6">
                                        <label for="" class="col-sm-3 col-form-label">Machine:</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" data-id="" name="machine" id="machine1" placeholder="" value="<?php echo $_GET['machine'] ?>" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="" class="col-sm-3 col-form-label">Time Consumed:</label>
                                        <div class="col-sm-9">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <input class="form-control" type="time" value="" id="" name="start_time"><small>Start Time</small></div>
                                                <div class="col-lg-6">
                                                    <input class="form-control" type="time" value="" id="" name="end_time"><small>End Time</small></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                            </div>
                            <div class="form-group row">
                                <div class="form-group col-lg-12">
                                    <div class="table-responsive TextBoxesGroup">
                                        <table class="table table-striped table table-bordered table-hover Tableadd" >
                                            <thead>
                                                <tr>
                                                    <th colspan="3">Standard Frequency Hourly</th>
                                                    <th colspan="2">9 - 10</th>
                                                    <th colspan="2">10 - 11</th>
                                                    <th colspan="2">11 - 12</th>
                                                    <th colspan="2">12 - 1</th>
                                                    <th colspan="2">1 - 2</th>
                                                    <th colspan="2">2 - 3</th>
                                                    <th colspan="2">3 - 4</th>
                                                    <th colspan="2">4 - 5</th>
                                                    <th colspan="2">5 - 6</th>
                                                    <th colspan="2">6 - 7</th>
                                                    <th colspan="2">Remarks</th>
                                                </tr>
                                            </thead>
                                            <tbody >
                                                <tr class="append-education">
                                                    <td colspan="3">
                                                        <select class="form-control" id="frequency1" name="standard_frequency_hourly[]" required="">
                                                             <option value="">Select</option>
                                                             <option value="GSM">GSM</option>
                                                             <option value="Text Reading/Misprinting">Text Reading/Misprinting</option>
                                                             <option value="Registeration">Registeration</option>
                                                             <option value="Ink Shade">Ink Shade</option>
                                                             <option value="Set Off">Set Off</option>
                                                             <option value="Scummy">Scummy</option>
                                                             <option value="Unwanted Marks">Unwanted Marks</option>
                                                             <option value="Gloss">Gloss</option>
                                                             <option value="Other">Other</option>
                                                         </select>
                                                    </td>
                                                    <td colspan="2">
                                                        <input class="form-control" type="" value="" id="" name="col1[]">
                                                    </td>
                                                    <td colspan="2">
                                                        <input class="form-control" type="" value="" id="" name="col2[]">
                                                    </td>
                                                    <td colspan="2">
                                                        <input class="form-control" type="" value="" id="" name="col3[]">
                                                    </td>
                                                    <td colspan="2">
                                                        <input class="form-control" type="" value="" id="" name="col4[]">
                                                    </td>
                                                    <td colspan="2">
                                                        <input class="form-control" type="" value="" id="" name="col5[]">
                                                    </td>
                                                    <td colspan="2">
                                                        <input class="form-control" type="" value="" id="" name="col6[]">
                                                    </td>
                                                    <td colspan="2">
                                                        <input class="form-control" type="" value="" id="" name="col7[]">
                                                    </td>
                                                    <td colspan="2">
                                                        <input class="form-control" type="" value="" id="" name="col8[]">
                                                    </td>
                                                    <td colspan="2">
                                                        <input class="form-control" type="" value="" id="" name="col9[]">
                                                    </td>
                                                    <td colspan="2">
                                                        <input class="form-control" type="" value="" id="" name="col10[]">
                                                    </td>
                                                    <td colspan="2">
                                                        <textarea class="form-control" id="" rows="1" name="standard_frequency_remarks[]"></textarea>
                                                    </td>

                                                </tr>
                                                <tr>
                                                    <td colspan="3"> <small>Colors (Delta E / Density)</small></td>
                                                    <td colspan="">
                                                        <small>Min</small>
                                                    </td>
                                                    <td colspan="">
                                                        <small>Max</small>
                                                    </td>
                                                    <td colspan="">
                                                        <small>Min</small>
                                                    </td>
                                                    <td colspan="">
                                                        <small>Max</small>
                                                    </td>
                                                    <td colspan="">
                                                        <small>Min</small>
                                                    </td>
                                                    <td colspan="">
                                                        <small>Max</small>
                                                    </td>
                                                    <td colspan="">
                                                        <small>Min</small>
                                                    </td>
                                                    <td colspan="">
                                                        <small>Max</small>
                                                    </td>
                                                    <td colspan="">
                                                        <small>Min</small>
                                                    </td>
                                                    <td colspan="">
                                                        <small>Max</small>
                                                    </td>
                                                    <td colspan="">
                                                        <small>Min</small>
                                                    </td>
                                                    <td colspan="">
                                                        <small>Max</small>
                                                    </td>
                                                    <td colspan="">
                                                        <small>Min</small>
                                                    </td>
                                                    <td colspan="">
                                                        <small>Max</small>
                                                    </td>
                                                    <td colspan="">
                                                        <small>Min</small>
                                                    </td>
                                                    <td colspan="">
                                                        <small>Max</small>
                                                    </td>
                                                    <td colspan="">
                                                        <small>Min</small>
                                                    </td>
                                                    <td colspan="">
                                                        <small>Max</small>
                                                    </td>
                                                    <td colspan="3"></td>
                                                </tr>
                                                <tr >
                                                    <td colspan="3"><input class="" style="width:50px;" type="text" value="" id="" name="colours_density[]" size=""></td>
                                                    <td colspan="">
                                                        <input class="" style="width:50px;" type="number" value="" id="" name="col1_min[]" size="">
                                                    </td>
                                                    <td colspan="">
                                                        <input class="" style="width:50px;" type="number" value="" id="" name="col1_max[]" size="">
                                                    </td>
                                                    <td colspan="">
                                                        <input class="" style="width:50px;" type="number" value="" id="" name="col2_min[]" size="">
                                                    </td>
                                                    <td colspan="">
                                                        <input class="" style="width:50px;" type="number" value="" id="" name="col2_max[]" size="">
                                                    </td>
                                                    <td colspan="">
                                                        <input class="" style="width:50px;" type="number" value="" id="" name="col3_min[]" size="">
                                                    </td>
                                                    <td colspan="">
                                                        <input class="" style="width:50px;" type="number" value="" id="" name="col3_max[]" size="">
                                                    </td>
                                                    <td colspan="">
                                                        <input class="" style="width:50px;" type="number" value="" id="" name="col4_min[]" size="">
                                                    </td>
                                                    <td colspan="">
                                                        <input class="" style="width:50px;" type="number" value="" id="" name="col4_max[]" size="">
                                                    </td>
                                                    <td colspan="">
                                                        <input class="" style="width:50px;" type="number" value="" id="" name="col5_min[]" size="">
                                                    </td>
                                                    <td colspan="">
                                                        <input class="" style="width:50px;" type="number" value="" id="" name="col5_max[]" size="">
                                                    </td>
                                                    <td colspan="">
                                                        <input class="" style="width:50px;" type="number" value="" id="" name="col6_min[]" size="">
                                                    </td>
                                                    <td colspan="">
                                                        <input class="" style="width:50px;" type="number" value="" id="" name="col6_max[]" size="">
                                                    </td>
                                                    <td colspan="">
                                                        <input class="" style="width:50px;" type="number" value="" id="" name="col7_min[]" size="">
                                                    </td>
                                                    <td colspan="">
                                                        <input class="" style="width:50px;" type="number" value="" id="" name="col7_max[]" size="">
                                                    </td>
                                                    <td colspan="">
                                                        <input class="" style="width:50px;" type="number" value="" id="" name="col8_min[]" size="">
                                                    </td>
                                                    <td colspan="">
                                                        <input class="" style="width:50px;" type="number" value="" id="" name="col8_max[]" size="">
                                                    </td>
                                                    <td colspan="">
                                                        <input class="" style="width:50px;" type="number" value="" id="" name="col9_min[]" size="">
                                                    </td>
                                                    <td colspan="">
                                                        <input class="" style="width:50px;" type="number" value="" id="" name="col9_max[]" size="">
                                                    </td>
                                                    <td colspan="">
                                                        <input class="" style="width:50px;" type="number" value="" id="" name="col10_min[]" size="">
                                                    </td>
                                                    <td colspan="">
                                                        <input class="" style="width:50px;" type="number" value="" id="" name="col10_max[]" size="">
                                                    </td>
                                                    <td colspan="3"> <textarea class="form-control" id="" rows="1" name="colors_density_remarks[]"></textarea></td>
                                                </tr>
                                            </tbody>
                                            <tbody class="append-educationmin">
                                                
                                            </tbody>
                                        </table>
                                    </div>
                                    <br>
                                    <input type='button' class="btn btn-success pull-right " value='Add Button' id='addButton'>
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
                .attr("class", 'tableadd' + counter);
            newtableadd.after().html('<table><tbody class="append-education"><tr><td colspan="3">' +
                '<select class="form-control" id="frequency1" name="standard_frequency_hourly[]"> <option value="">Select</option> <option value="GSM">GSM</option> <option value="Text Reading/Misprinting">Text Reading/Misprinting</option> <option value="Registeration">Registeration</option> <option value="Ink Shade">Ink Shade</option> <option value="Set Off">Set Off</option> <option value="Scummy">Scummy</option> <option value="Unwanted Marks">Unwanted Marks</option> <option value="Gloss">Gloss</option> <option value="Other">Other</option> </select></td><td colspan="2">' +
                '<input class="form-control" type="" value="" id="" name="col1[]"></td><td colspan="2">' +
                '<input class="form-control" type="" value="" id="" name="col2[]"></td><td colspan="2">' +
                '<input class="form-control" type="" value="" id="" name="col3[]"></td><td colspan="2">' +
                '<input class="form-control" type="" value="" id="" name="col4[]"></td><td colspan="2">' +
                '<input class="form-control" type="" value="" id="" name="col5[]"></td><td colspan="2">' +
                '<input class="form-control" type="" value="" id="" name="col6[]"></td><td colspan="2">' +
                '<input class="form-control" type="" value="" id="" name="col7[]"></td><td colspan="2">' +
                '<input class="form-control" type="" value="" id="" name="col8[]"></td><td colspan="2">' +
                '<input class="form-control" type="" value="" id="" name="col9[]"></td><td colspan="2">' +
                '<input class="form-control" type="" value="" id="" name="col10[]"></td><td colspan="2">' +
                '<textarea class="form-control" id="" rows="1" name="standard_frequency_remarks[]"></textarea></td></tr></tbody></table>');
            newtableadd.appendTo(".Tableadd");
            counter++;
        });
    });
</script>
<script type="text/javascript">
    $(document).ready(function() {
        var counter = 2;
        $("#addButton").click(function() {
            var newtableadd = $(document.createElement('tr'))
                .attr("class", 'tableadd' + counter);
            newtableadd.after().html('<table><tbody class="append-educationminn"><tr><td colspan="3">' +
                '<input class="" style="width:50px;" type="text" value="" id="" name="colours_density[]" size=""></td><td colspan="">' +
                '<input class="" style="width:50px;" type="number" value="" id="" name="col1_min[]" size=""></td><td colspan="">' +
                '<input class="" style="width:50px;" type="number" value="" id="" name="col1_max[]" size=""></td><td colspan="">' +
                '<input class="" style="width:50px;" type="number" value="" id="" name="col2_min[]" size=""></td><td colspan="">' +
                '<input class="" style="width:50px;" type="number" value="" id="" name="col2_max[]" size=""></td><td colspan="">' +
                '<input class="" style="width:50px;" type="number" value="" id="" name="col3_min[]" size=""></td><td colspan="">' +
                '<input class="" style="width:50px;" type="number" value="" id="" name="col3_max[]" size=""></td><td colspan="">' +
                '<input class="" style="width:50px;" type="number" value="" id="" name="col4_min[]" size=""></td><td colspan="">' +
                '<input class="" style="width:50px;" type="number" value="" id="" name="col4_max[]" size=""></td><td colspan="">' +
                '<input class="" style="width:50px;" type="number" value="" id="" name="col5_min[]" size=""></td><td colspan="">' +
                '<input class="" style="width:50px;" type="number" value="" id="" name="col5_max[]" size=""></td><td colspan="">' +
                '<input class="" style="width:50px;" type="number" value="" id="" name="col6_min[]" size=""></td><td colspan="">' +
                '<input class="" style="width:50px;" type="number" value="" id="" name="col6_max[]" size=""></td><td colspan="">' +
                '<input class="" style="width:50px;" type="number" value="" id="" name="col7_min[]" size=""></td><td colspan="">' +
                '<input class="" style="width:50px;" type="number" value="" id="" name="col7_max[]" size=""></td><td colspan="">' +
                '<input class="" style="width:50px;" type="number" value="" id="" name="col8_min[]" size=""></td><td colspan="">' +
                '<input class="" style="width:50px;" type="number" value="" id="" name="col8_max[]" size=""></td><td colspan="">' +
                '<input class="" style="width:50px;" type="number" value="" id="" name="col9_min[]" size=""></td><td colspan="">' +
                '<input class="" style="width:50px;" type="number" value="" id="" name="col9_max[]" size=""></td><td colspan="">' +
                '<input class="" style="width:50px;" type="number" value="" id="" name="col10_min[]" size=""></td><td colspan="2">' +
                '<input class="" style="width:50px;" type="number" value="" id="" name="col10_max[]" size=""></td><td colspan="2">' +
                '<textarea class="form-control" id="" rows="1" name="colors_density_remarks[]"></textarea></td></tr></tbody></table> <span class="remov">X</span>');
            newtableadd.appendTo(".Tableadd");
            counter++;
        });
        $('.remov').click(function () {
           alert();
           $(".Tableadd").remove();
        });
    });
</script>
<!-- <script type="text/javascript">
    $(document).ready(function() {
        var counter = 2;
        $("#addButton").click(function() {
            var newTextBoxDiv = $(document.createElement('div'))
                .attr("class", 'TextBoxDiv' + counter);
            newTextBoxDiv.after().html('<hr><p>sasasassaasass</p>');
            newTextBoxDiv.appendTo(".TextBoxesGroup");
            counter++;
        });
    });
    
</script> -->
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