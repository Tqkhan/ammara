
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
                <h1>Add User</h1>
                <small></small>
                <ol class="breadcrumb">
                    <li><a href="<?php echo base_url() ?>"><i class="pe-7s-home"></i> Home</a></li>
                    <li class="active">Add User</li>
                </ol>
            </div>
        </div>
        <!-- /. Content Header (Page header) -->

        <form method="post" action="<?php echo base_url() ?>users/insert" enctype="multipart/form-data">

            <div class="row">
                <div class="col-sm-12">
                    <div class="panel panel-bd ">
                        <div class="panel-heading">
                            <div class="panel-title">
                                <h4>Add User</h4>
                            </div>
                        </div>
                        <div class="panel-body">

                            <div class="form-group row">

                                <label for="example-text-input" class="col-sm-3 col-form-label">Name<span class="required">*</span></label>
                                <div class="col-sm-9">
                                    <input class="form-control" name="name" type="text" value="" id="example-text-input" placeholder="" required="">
                                </div>

                            </div>
                            <div class="form-group row">

                                <label for="example-text-input" class="col-sm-3 col-form-label">Email<span class="required">*</span></label>
                                <div class="col-sm-9">
                                    <input class="form-control" name="email" type="email" value="" id="example-text-input" placeholder="" required="">
                                </div>

                            </div>
                            <div class="form-group row">

                                <label for="example-text-input" class="col-sm-3 col-form-label">Password<span class="required">*</span></label>
                                <div class="col-sm-9">
                                    <input class="form-control" name="password" type="password" value="" id="example-text-input" placeholder="" required="">
                                </div>

                            </div>
                            <div class="form-group row">

                                <label for="example-text-input" class="col-sm-3 col-form-label">Role<span class="required">*</span></label>
                                <div class="col-sm-9">
                                    <select class="form-control" name="role" required="">
                                        <option>Select Role</option>
                                        <?php 
                                            foreach ($role as $r) {
                                                echo '<option value="'.$r['id'].'">'.$r['name'].'</option>';
                                            }
                                        ?>
                                    </select>
                                </div>

                            </div>
                            <div class="form-group row">

                                <label for="example-text-input" class="col-sm-3 col-form-label">Allow Sub Store<span class="required">*</span></label>
                                <div class="col-sm-9">
                                    <div class="radio radio-info radio-inline">
                                        <input type="radio" id="transfer_yes" value="Yes" name="alow_sub_store" class="transfer_check" >
                                        <label for="transfer_yes"> Yes </label>
                                    </div>
                                    <div class="radio radio-info radio-inline">
                                        <input type="radio" id="transfer_no" value="No" name="alow_sub_store" checked="" class="transfer_check">
                                        <label for="transfer_no"> No </label>
                                    </div>
                                </div>

                            </div>
                               
                            <div class="bank_id_transfer_div" style="display: none;">
                                <div class="form-group row">

                                    <label for="example-text-input" class="col-sm-3 col-form-label">Allow Sub Store<span class="required">*</span></label>
                                    <div class="col-sm-9">
                                        <select class="form-control" id="exampleSelect2" name="sub_stores">
                                           <?php 

                                               foreach ($sub_store as $r) {
                                                   echo '<option value="'.$r['id'].'">'.$r['Name'].'</option>';
                                               }
                                           ?>
                                        </select>
                                         <!-- <small>Select species sub Store. You may control+click</small> -->
                                    </div>

                                </div>
                            </div>
                            <?php if ($this->session->flashdata('error')): ?>
                                <a class="btn btn-danger block full-width m-b"><?php echo $this->session->flashdata('error'); ?></a>
                            <?php endif ?>
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
<script type="text/javascript">
    $('.transfer_check').on('change', function(){
         var transfer_checkId = $(this).val();

         if (transfer_checkId == "Yes") {
             // alert(transfer_checkId);
             $('.bank_id_transfer_div').show();
         }
         else
         {
             $('.bank_id_transfer_div').hide();

         }
    });
</script>