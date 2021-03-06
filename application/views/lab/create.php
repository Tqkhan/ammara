
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
                <h1>Add Lab order</h1>
                <small></small>
                <ol class="breadcrumb">
                    <li><a href="index.html"><i class="pe-7s-home"></i> Home</a></li>
                    <li class="active">Add Lab order</li>
                </ol>
            </div>
        </div>
        <!-- /. Content Header (Page header) -->

        <form method="post" action="<?php echo base_url() ?>lab/insert" enctype="multipart/form-data">

            <div class="row">
                <div class="col-sm-12">
                    <div class="panel panel-bd ">
                        <div class="panel-heading">
                            <div class="panel-title">
                                <h4>Add Lab order</h4>
                            </div>
                        </div>
                        <div class="panel-body">
                            <div class="form-group row">

                                <label for="example-text-input" class="col-sm-3 col-form-label">St number</label>
                                        <div class="col-sm-9"><input class="form-control" name="st_number" type="text" d="example-text-input" placeholder="" ></div>

                                    </div><div class="form-group row">

                                <label for="example-text-input" class="col-sm-3 col-form-label">Date</label>
                                        <div class="col-sm-9"><input class="form-control" name="date" type="date" value="" id="example-text-input" placeholder="" ></div>

                                    </div><div class="form-group row">

                                <label for="example-text-input" class="col-sm-3 col-form-label">Client</label>
                                        <div class="col-sm-9"><input class="form-control" name="client" type="text" value="" id="example-text-input" placeholder="" ></div>

                                    </div><div class="form-group row">

                                <label for="example-text-input" class="col-sm-3 col-form-label">Customer ref</label>
                                        <div class="col-sm-9"><input class="form-control" name="customer_ref" type="text" value="" id="example-text-input" placeholder="" ></div>

                                    </div><div class="form-group row">

                                <label for="example-text-input" class="col-sm-3 col-form-label">Count</label>
                                        <div class="col-sm-9"><input class="form-control" name="count" type="text" value="" id="example-text-input" placeholder="" ></div>

                                    </div><div class="form-group row">

                                <label for="example-text-input" class="col-sm-3 col-form-label">Qty</label>
                                        <div class="col-sm-9"><input class="form-control" name="qty" type="number" value="" id="example-text-input" placeholder="" ></div>

                                    </div><div class="form-group row">

                                <label for="example-text-input" class="col-sm-3 col-form-label">Type</label>
                                        <div class="col-sm-9"><input class="form-control" name="type" type="text" value="" id="example-text-input" placeholder="" ></div>

                                    </div><div class="form-group row">

                                <label for="example-text-input" class="col-sm-3 col-form-label">Special instruction</label>
                                        <div class="col-sm-9"><input class="form-control" name="special_instruction" type="textarea" value="" id="example-text-input" placeholder="" ></div>

                                    </div>
                                    <div class="after-add-sub row">
                                        <div class="form-group  col-md-6">
                                            <label for="example-text-input" class="col-form-label">Code #<span class="required">*</span></label>
                                            <input class="form-control" name="code_no[]" type="text" value=""  placeholder="" >
                                        </div>
                                        <div class="form-group  col-md-6">
                                            <label for="example-text-input" class="col-form-label">Code Name<span class="required">*</span></label>
                                            <input class="form-control" name="code_name[]" type="text" value=""  placeholder="" >
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Ref #</label><br>
                                            <input class="form-control" name="ref_no[]" type="text" value=""  placeholder="" >
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Remarks</label><br>
                                            <input class="form-control" name="remarks[]" type="text" value=""  placeholder="" >
                                        </div>
                                       
                                        <div class="form-group row">
                                            <div class="col-lg-2 delet pull-right">
                                                <button type="button" class="add-relation btn btn-success ">Add More</button>
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
            </div>
        </form>
    </div>
</div>

</div>
<!-- /.main content -->

?>
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

</script>