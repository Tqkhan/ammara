
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
                <h1>Edit Lab</h1>
                <small></small>
                <ol class="breadcrumb">
                    <li><a href="index.html"><i class="pe-7s-home"></i> Home</a></li>
                    <li class="active">Edit Lab</li>
                </ol>
            </div>
        </div>
        <!-- /. Content Header (Page header) -->

        <form method="post" action="<?php echo base_url() ?>lab/insert_lab_costing" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?php echo $lab["id"] ?>">
            <div class="row">
                <div class="col-sm-12">
                    <div class="panel panel-bd ">
                        <div class="panel-heading">
                            <div class="panel-title">
                                <h4>Edit Lab</h4>
                            </div>
                        </div>
                        <div class="panel-body"><div class="form-group row">
                                        <div class="col-md-6">
                                            <label for="example-text-input" class="col-form-label">St number</label>
                                       
                                            <input class="form-control" name="st_number" type="text" value="<?php echo $lab["st_number"] ?>" id="example-text-input" placeholder="" >
                                        </div>

                                     <div class="col-md-6">

                                <label for="example-text-input" class="col-form-label">Date</label>
                                        

                                        <input class="form-control" name="date" type="date" value="<?php echo $lab["date"] ?>" id="example-text-input" placeholder="" ></div>

                                    </div><div class="form-group row">
                                         <div class="col-md-6">
                                <label for="example-text-input" class="col-form-label">Client</label>
                                       

                                        <input class="form-control" name="client" type="text" value="<?php echo $lab["client"] ?>" id="example-text-input" placeholder="" ></div>

                                     <div class="col-md-6">

                                <label for="example-text-input" class="col-form-label">Customer ref</label>
                                     

                                        <input class="form-control" name="customer_ref" type="text" value="<?php echo $lab["customer_ref"] ?>" id="example-text-input" placeholder="" ></div>

                                    </div><div class="form-group row">
                                         <div class="col-md-6">
                                <label for="example-text-input" class="col-form-label">Count</label>
                                       

                                        <input class="form-control" name="count" type="text" value="<?php echo $lab["count"] ?>" id="example-text-input" placeholder="" ></div>

                                    <div class="col-md-6">

                                <label for="example-text-input" class="col-form-label">Qty</label>
                                       

                                        <input class="form-control" name="qty" type="number" value="<?php echo $lab["qty"] ?>" id="example-text-input" placeholder="" ></div>

                                    </div><div class="form-group row">
                                         <div class="col-md-6">
                                <label for="example-text-input" class="col-form-label">Type</label>
                                        

                                        <input class="form-control" name="type" type="text" value="<?php echo $lab["type"] ?>" id="example-text-input" placeholder="" ></div>

                                     <div class="col-md-6">

                                <label for="example-text-input" class="col-form-label">Special instruction</label>
                                       

                                        <input class="form-control" name="special_instruction" type="textarea" value="<?php echo $lab["special_instruction"] ?>" id="example-text-input" placeholder="" ></div>

                                    
                            </div>
                            <div class="table-responsive">
                                <table id="" class="table table-bordered table-striped table-hover">
                                    <thead>
                                        <tr>
                                            <th>Sr #</th>
                                            <th>Code #</th>
                                            <th>Code Name</th>
                                            <th>Ref #</th>
                                            <th>Remarks</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $i = 1;
                                            foreach ($lab_detail as $module) {
                                        ?>
                                        <tr>
                                            <td><?php echo $i; ?></td>
                                            <td><?php echo $module["code_no"] ?></td>
                                            <td><?php echo $module["code_name"] ?></td>
                                            <td><?php echo $module["ref_no"] ?></td>
                                            <td><?php echo $module["remarks"] ?></td>
                                            
                                        </tr>
                                        <?php $i++; } ?>
                                    </tbody>
                                </table>
                            </div>
                            <div class="table-responsive">
                                <table id="" class="table table-bordered table-striped table-hover">
                                    <thead>
                                        <tr>
                                            <th>Sr #</th>
                                            <th>Dyes Name</th>
                                            <th>AGE </th>
                                            <th>Rate </th>
                                            <th>Amount</th>
                                          
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $i = 1;
                                            foreach ($lab_costing_dyes as $dyes) {
                                        ?>
                                        <tr>
                                            <td><?php echo $i; ?></td>
                                            <td><?php echo $dyes["dyes_name"] ?></td>
                                            <td><?php echo $dyes["age"] ?></td>
                                            <td><?php echo $dyes["rate"] ?></td>
                                            <td><?php echo $dyes["Amount"] ?></td>
                                           
                                            
                                        </tr>
                                        <?php $i++; } ?>
                                    </tbody>
                                </table>
                            </div>
                            <div class="table-responsive">
                                <table id="" class="table table-bordered table-striped table-hover">
                                    <thead>
                                        <tr>
                                            <th>Sr #</th>
                                            <th>Dyes Name</th>
                                            <th>AGE </th>
                                            <th>Rate </th>
                                            <th>Amount</th>
                                          
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $i = 1;
                                            foreach ($lab_costing_chemical as $chemical) {
                                        ?>
                                        <tr>
                                            <td><?php echo $i; ?></td>
                                            <td><?php echo $chemical["chemical_name"] ?></td>
                                            <td><?php echo $chemical["chemical_age"] ?></td>
                                            <td><?php echo $chemical["chemical_rate"] ?></td>
                                            <td><?php echo $chemical["chemical_Amount"] ?></td>
                                           
                                            
                                        </tr>
                                        <?php $i++; } ?>
                                    </tbody>
                                </table>
                            </div>
                         
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>

</div>
<!-- /.main content -->
</div>
<!-- /#page-wrapper -->
</div>
<!-- /#wrapper -->
<!-- START CORE PLUGINS -->
<script type="text/javascript">
$("body").on("click",".add-relation",function(){
        var html = $(".after-add-sub").first().clone();
        $(html).find(".delet").html("<a class='btn btn-danger remove'><i class='fa fa-trash-o' aria-hidden='true'></i> </a> "+' <a class="btn btn-success add-sub"><strong> + </strong> </a>');
        $(".after-add-sub").last().after(html);
        $(".after-add-sub").last().find('input,select').not('input[type="checkbox"]').val('')
        $(".after-add-sub").last().find('input[type="checkbox"]').removeAttr('checked')
        $(".after-add-sub").last().find('.hide-div').hide()
        $(".after-add-sub").last().find('.sub-category option').not('option:first').remove()
        $(".after-add-sub").last().find('.change-product option').not('option:first').remove()
        $(".after-add-sub").last().find('.add-sub').addClass('add-relation')
        var con = 0
        $(".after-add-sub").each(function() {
            $(this).find('input[type="checkbox"]').attr('name','required['+con+']')
            con++
        })
    });  
 
$("body").on("click", ".add-sub1", function() {
        var html = $(".add-div").first().clone();
        $(html).find(".delet1").html("<a class='btn btn-danger remove1'><i class='fa fa-trash-o' aria-hidden='true'></i> </a> " + ' <a class="btn btn-success add-sub1"><strong> + </strong> </a>');
        $(".add-div").last().after(html);
        $(".add-div").last().find('input,select').val('')
        get_machines()
    });
    $("body").on("click", ".remove1", function() {
        $(this).parents(".add-div").remove();
    });
</script>