<style type="text/css">
    table.minimalistBlack {

        width: 100%;
        height: 200px;
        text-align: left;
        border-collapse: collapse;
    }

    table.minimalistBlack td,
    table.minimalistBlack th {
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
    .loader {
   
    position:  absolute;
    width:  100%;
    height:  100%;
}

.statistic-box {
    position:  relative;
}

div#chart_div3 {
    opacity:  0;
}
.dropdown-menu{
    z-index: 99999;
}
</style>
<!-- /.Navbar  Static Side -->
<div class="control-sidebar-bg"></div>
<!-- Page Content -->
<div id="page-wrapper">
    <!-- main content -->
    <div class="content">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="header-icon">
                <i class="pe-7s-note2"></i>
            </div>
            <div class="header-title">
                <h1>Add Production plan</h1>
                <small></small>
                <ol class="breadcrumb">
                    <li><a href="<?php echo base_url() ?>"><i class="pe-7s-home"></i> Home</a></li>
                    <li class="active">Add Production plan</li>
                </ol>
            </div>
        </div>
        <!-- /. Content Header (Page header) -->
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-bd print-div ">
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
                                        <table class="minimalistBlack">
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
                                            </tbody>
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
        
        <form method="post" action="" enctype="multipart/form-data">
            <div class="row">
                <div class="col-sm-12">
                    <div class="panel panel-bd ">
                        <div class="panel-heading">
                            <div class="panel-title">
                                <h4>Add Production plan</h4>
                            </div>
                        </div>
                        <div class="panel-body">
                            <div class="add-div row">
                                <div class="form-group row">
                                    <div class="form-group col-lg-6">
                                        <label for="example-text-input" class="col-sm-3 col-form-label">Type</label>
                                        <div class="col-sm-9">
                                            <select class="form-control" name="type[]" required="">
                                        <option>Select Type</option>
                                        <?php 
                                          foreach ($flows as $f) {
                                            echo '<option value="'.$f['id'].'">'.$f['Name'].'</option>';
                                          }
                                        ?>
                                    </select>
                                        </div>

                                    </div>
                                    <div class="form-group col-lg-6">
                                        <label for="example-text-input" class="col-sm-3 col-form-label">Machine</label>
                                        <div class="col-sm-9">
                                            <select class="form-control sel" name="machine[]" required="">
                                        <option>Select Machine</option>
                                    </select>
                                        </div>

                                    </div>

                                </div>
                                <div class="form-group row">

                                    <div class="form-group col-lg-6">
                                        <label for="example-text-input" class="col-sm-3 col-form-label">Priority</label>
                                        <div class="col-sm-9">
                                            <select class="form-control" name="priority[]" required>
                                      <option>Select Priority</option>
                                      <option value="Hi">Hi</option>
                                      <option value="Low">Low</option>
                                    </select>
                                        </div>

                                    </div>
                                    <div class="form-group col-lg-6">
                                        <label for="example-text-input" class="col-sm-3 col-form-label">Parent</label>
                                        <div class="col-sm-9">
                                            <select class="form-control" name="parent[]">
                                        <option>Select Parent</option>
                                        <?php 
                                          foreach ($flows as $f) {
                                            echo '<option value="'.$f['id'].'">'.$f['Name'].'</option>';
                                          }
                                        ?>
                                    </select>
                                        </div>

                                    </div>

                                </div>
                                <div class="form-group row">

                                    <div class="form-group col-lg-6">
                                        <label for="example-text-input" class="col-sm-3 col-form-label">Start Date</label>
                                        <div class="col-sm-9">
                                            <input type='text' class="form-control start datetimepicker_start" id='' name="start_date[]" required="" />
                                            <!-- <input class="form-control start" name="start_date[]" type="datetime-local" id="example-text-input" placeholder="" min="<?php echo date('Y-m-d\TH:i') ?>" required=""> -->
                                        </div>

                                    </div>
                                    <div class="form-group col-lg-6">
                                        <label for="example-text-input" class="col-sm-3 col-form-label">End Date</label>
                                        <div class="col-sm-9">
                                            <input class="form-control end datetimepicker_end" name="end_date[]" type="text" value="" id="" placeholder="" required="">

                                            <!-- <input class="form-control end" name="end_date[]" type="datetime-local" value="" id="example-text-input" placeholder="" min="<?php echo date('Y-m-d\TH:i') ?>" required=""> -->
                                        </div>

                                    </div>

                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-2 delet pull-right">
                                        <button type="button" class="add-sub btn btn-success ">Add More</button>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">

                                <div class="col-sm-12">
                                    <button type="submit" class="btn btn-primary pull-right">Add</button>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
        </form>
        </div>
    </div>

</div>
        </div>
    </div>

</div>


<script type="text/javascript" src="<?php echo base_url() ?>assets/floating-1.12.js"></script>

<div id="floatdiv" style="  
    position:absolute;  
    width:auto;height:auto;top:10px;right:10px;  
    padding:16px;background:#FFFFFF;  
    border:2px solid #2266AA;  
    z-index:100; display:none;">  
 <button class="btn_close btn btn-primary" style="float:right; display: none;" >Close &times;</button>  
 <br>
 <br>

<div id="chart3"></div>
</div>  

<script type="text/javascript" src="floating-1.12.js"></script>
  
<script type="text/javascript">  
    floatingMenu.add('floatdiv',  
        {  
            // Represents distance from left or right browser window  
            // border depending upon property used. Only one should be  
            // specified.  
            // targetLeft: 0,  
            targetRight: 350,  
  
            // Represents distance from top or bottom browser window  
            // border depending upon property used. Only one should be  
            // specified.  
            targetTop: 150,  
            // targetBottom: 0,  
  
            // Uncomment one of those if you need centering on  
            // X- or Y- axis.  
            // centerX: true,  
            // centerY: true,  
  
            // Remove this one if you don't want snap effect  
            snap: true  
        });  
</script>  


<!-- </form></tbody></table></div></div></form></div></div></div></div></div></div></div> -->
<!-- /.main content-->
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

<!-- start chart 1 -->
<script type="text/javascript">
    var values = []
    google.charts.load('current', {
        'packages': ['gantt']
    });
    google.charts.setOnLoadCallback(drawChart);

    function drawChart(values) {
        var data = new google.visualization.DataTable();
     
        data.addColumn('string', 'Task ID');
        data.addColumn('string', 'Task Name');
        data.addColumn('date', 'Start Date');
        data.addColumn('date', 'End Date');
        data.addColumn('number', 'Duration');
        data.addColumn('number', 'Percent Complete')
        data.addColumn('string', 'Dependencies');
        data.addRows(values.length);
        for (var i = 0; i < values.length; i++) {
            data.setCell(i, 0, values[i].id);
            data.setCell(i, 1, values[i].Job_Description);
            data.setCell(i, 2, new Date(values[i].start_date));
            data.setCell(i, 3, new Date(values[i].end_date));
            data.setCell(i, 4, null);
            data.setCell(i, 5, 0);
            data.setCell(i, 6, null);
        }
     
        var options = {
            height: 230,
            width: 550,
            gantt: {
                trackHeight: 30
            }
        };
        var chart = new google.visualization.Gantt(document.getElementById('chart3'));
        google.visualization.events.addListener(chart, 'ready', afterDraw);
        chart.clearChart();
        chart.draw(data, options); 

       
    }
    function afterDraw(){

    }
$("body").click(function () {
 // $('#chart3').css('opacity',0)
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
        get_machines();
        $('.datetimepicker_start').datetimepicker();
        $('.datetimepicker_end').datetimepicker();
    });
    $("body").on("click", ".remove", function() {
        $(this).parents(".add-div").remove();
    });

    function get_machines() {
        $('[name="type[]"]').change(function() {
            var th = $(this).parent().parent().parent()
            console.log(th)
            var val = $(this).val()
            $.ajax({
                url: "<?php echo base_url('production_plan/get_machines/') ?>" + val,
                type: 'GET',
                dataType: 'json', // added data type
                success: function(res) {
                    th.find('[name="machine[]"] option').not('[name="machine[]"] option:first-child').remove()
                    for (var i = 0; i < res.length; i++) {
                        th.find('[name="machine[]"]').append('<option value="' + res[i].id + '">' + res[i].machine_Name + '</option>')
                    }
                }
            });
        })
        $('.sel').change(function() {
            var val = $(this).val()
            $.ajax({
                url: "<?php echo base_url('production_plan/get_machine_detail/') ?>" + val,
                type: 'GET',
                dataType: 'json', // added data type
                success: function(res) {
                    // $('.click-b').click();
                     $('#floatdiv').show();
                     $('#chart3').show();
                     $('.btn_close').show();
                     

                    drawChart(res);

                    // alert($('#chart3').trigger('mouseover'));
                    // alert($('#chart3').html());
                   // alert($('#chart3 svg g rect text').html());
                }
            });
        });
    }
    get_machines();






  
</script>


