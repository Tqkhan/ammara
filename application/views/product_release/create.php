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
                <h1>Add Product release</h1>
                <small></small>
                <ol class="breadcrumb">
                    <li><a href="<?php echo base_url() ?>"><i class="pe-7s-home"></i> Home</a></li>
                    <li class="active">Add Product release</li>
                </ol>
            </div>
        </div>
        <!-- /. Content Header (Page header) -->
        <form method="post" action="<?php echo base_url() ?>product_release/insert" enctype="multipart/form-data">
            <div class="row">
                <div class="col-sm-12">
                    <div class="panel panel-bd ">
                        <div class="panel-heading">
                            <div class="panel-title">
                                <h4>Add Product release</h4>
                            </div>
                        </div>
                        <?php $query = $this->db->query("SELECT * FROM users where id = ".$this->session->userdata('user_id')."");
                            $row = $query->row_array();
                            $sup_id = $row['sub_stores_id'];
                        ?>
                        <div class="panel-body">
                            <div class="form-group row">
                                <label for="example-text-input" class="col-sm-3 col-form-label">Date<span class="required">*</span></label>
                                <div class="col-sm-9"><input class="form-control" name="Date" type="date" value="" id="example-text-input" placeholder="" required=""></div>
                            </div>
                            <div class="form-group row">
                                <label for="example-text-input" class="col-sm-3 col-form-label">Reference No<span class="required">*</span></label>
                                <div class="col-sm-9"><input class="form-control" name="Reference_No" type="number" value="" id="example-text-input" placeholder="" required=""></div>
                            </div>
                            <div class="form-group row">
                                <label for="example-text-input" class="col-sm-3 col-form-label">Store<span class="required">*</span></label>
                                <div class="col-sm-9">
                                    <select class="form-control" name="Store" required="" <?php if ($sup_id == TRUE) { echo "disabled='true'"; }?>>
                                        <option>Select Store</option>
                                        <?php foreach ($table_sub_store as $t) {?>
                                        <option value="<?php echo $t["id"] ?>"<?php if ($sup_id == TRUE) {
                                                    if ($t['id'] == $sup_id) {
                                                       echo "Selected";
                                                    }
                                                }?>><?php echo $t["Name"] ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="example-text-input" class="col-sm-3 col-form-label">Status<span class="required">*</span></label>
                                <div class="col-sm-9">
                                    <select class="form-control" name="Status" required="">
                                        <option>Select Status</option>
                                        <option value="Pending">Pending</option>
                                        <option value="Complete">Complete</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="example-text-input" class="col-sm-3 col-form-label">Note</label>
                                <div class="col-sm-9"><textarea class="form-control" name="Note"></textarea></div>
                            </div>
                            <div class="form-group row">
                                <label for="example-text-input" class="col-sm-3 col-form-label">Category<span class="required">*</span></label>
                                <div class="col-sm-9">
                                    <select class="form-control category" required="">
                                        <option>Select Category</option>
                                        <?php foreach ($table_category as $t) {?>
                                        <option value="<?php echo $t["id"] ?>"><?php echo $t["Name"] ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="example-text-input" class="col-sm-3 col-form-label">Sub Category<span class="required">*</span></label>
                                <div class="col-sm-9">
                                    <select class="form-control sub-category" name="">
                                        <option>Select Sub Category</option>
                                        
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="example-text-input" class="col-sm-3 col-form-label">Product<span class="required">*</span></label>
                                <div class="col-sm-9">
                                    <select class="form-control change-product" name="">
                                        <option>Select Product</option>
                                        
                                    </select>
                                </div>
                            </div>
                            <div class="row form-group">
                                <label class="col-sm-12 col-form-label">Order Items</label>
                                <div class="col-md-12">
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-striped table-hover product-table">
                                            <thead>
                                                <tr>
                                                    <th>Product Name (Product Code)</th>
                                                    <th>Gramage</th>
                                                    <th>Net Unit Cost</th>
                                                    <th>Quantity</th>
                                                    <th>Subtotal (USD)</th>
                                                    <th><i class="fa fa-trash-o" style="opacity:0.5; filter:alpha(opacity=50);"></i></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <th>Total</th>
                                                    <th></th>
                                                    <th></th>
                                                    <th class="qty">0.00</th>
                                                    <th class="total">0.00</th>
                                                    <th><i class="fa fa-trash-o" style="opacity:0.5; filter:alpha(opacity=50);"></i></th>
                                                </tr>
                                            </tfoot>
                                        </table>
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
<?php 
    //$json = json_encode($table_product);
    //$json = str_replace('[', '', $json);
    //$json = str_replace(']', '', $json); 
?>
<script type="text/javascript" src="http://demos.sanwebcorner.com/select-box-with-search-option-using-jquery/choosen.js"></script>
<script type="text/javascript" src="http://defiantjs.com/defiant.js/dist/defiant-latest.min.js"></script>
<script type="text/javascript">
    
    function count_qty() {
        var con = 0;
        $('[name="quantity[]"]').each(function() {
            con = con + parseInt($(this).val())
        })
        $('.qty').text(con+'')
    }
    function count_total() {
        var con = 0;
        $('.sub_total').each(function() {
            con = con + parseInt($(this).text())
        })
        $('.total').text(con+'.00');
        $('.grand_total').val(con);
    }
    function add_qty() {
        $('[name="quantity[]"]').keyup(function() {
            var qty = parseInt($(this).val())
            var cost = $(this).parent().parent().find('.net_cost').text()
            cost = parseInt(cost)
            $(this).parent().parent().find('.sub_total').text(parseInt(qty*cost))
            count_qty()
            count_total()
        })
    }
    function remove_row() {
        $('.remove').click(function() {
            var id = $(this).attr('data-id')
            $(this).parent().parent().remove()
            $('.change-product option[value="'+id+'"]').css('display','block')
            count_qty()
            count_total()
        })
    }
    function change_price() {
        $('[name="price[]"]').keyup(function() {
            var cost = parseInt($(this).val())
            $(this).parent().parent().find('.net_cost').text(cost)
            var qty = $(this).parent().parent().find('[name="quantity[]"]').val()
            qty = parseInt(qty)
            $(this).parent().parent().find('.sub_total').text(parseInt(qty*cost))
            count_qty()
            count_total()
        })
    }
    var app = $('.product-table tbody');
    var product = [];
    $('.category').change(function() {
        var id = $(this).val()
        $.ajax({
            url: "<?php echo base_url() ?>purchases/get_sub_category/"+id,
            type: 'GET',
            dataType: 'json', // added data type
            success: function(res) {
                $('.sub-category option').not('option:first').remove()
                for (var i = 0; i < res.length; i++) {
                    $('.sub-category').append('<option value="'+res[i]['id']+'">'+res[i]['Name']+'</option>')
                }
            }
        });
    })
    $('.sub-category').change(function() {
        var parent = $('.category').val()
        var id = $(this).val()
        $.ajax({
            url: "<?php echo base_url() ?>purchases/get_product/"+id+'/'+parent,
            type: 'GET',
            dataType: 'json', // added data type
            success: function(res) {
                //product = JSON.parse(res);
                console.log(res)
                $('.change-product option').not('option:first').remove()
                for (var i = 0; i < res.length; i++) {
                    $('.change-product').append('<option value="'+res[i]['id']+'" data-amount="'+res[i]['Product_Cost']+'" data-gramage="'+res[i]['gramage']+'">'+res[i]['Product_Name']+'</option>')
                }
                product = res;
            }
        });
    })
    /*test*/

    $('.change-product').change(function() {
        var p_id = $('.change-product').val();
         $.ajax({
         
               url: '<?php echo base_url();?>/purchases/get_product_qty',
         
               data: { p_id:p_id },
         
               type: 'POST',
         
         
         
               success:function(resp)
               {    
                // alert(resp)
         
                   $('.cost').val(resp);
                   $('.ak_field').html(resp);
                   // alert(resp);
         
               }
         
         
           });
        // $('.cost').val('jhlkhj');
        var id = $(this).val()
        var name = $(this).children("option:selected").html();
        var id_product = $(this).children("option:selected").attr("data-amount");
        var id_gramage = $(this).children("option:selected").attr("data-gramage");
        var singleValues = $( "#singleValues" ).val();

        // res = JSON.search( product, '//*[id="'+id+'"]' );
        res=product.filter(id=>id);
        var data = res[0]
        app.append('<tr>')
        app.append('</tr>')
        app.find('tr').last().append('<td>'+name+'</td>')
        app.find('tr').last().append('<td>'+id_gramage+'</td>')
        app.find('tr').last().append('<td><e class="net_cost">'+ id_product +'</e><input type="hidden" name="price[]" class="form-control" value='+ id_product +'></td>')
        app.find('tr').last().append('<td><input type="hidden" name="product_id[]" value="'+id+'"><input type="number" class="form-control" name="quantity[]" value="1"></td>')
        app.find('tr').last().append('<td class="sub_total">'+ id_product +'</td>')
        app.find('tr').last().append('<td><i class="fa fa-trash-o remove" data-id="'+data['id']+'"></i></td>')
        count_qty()
        count_total()
        add_qty()
        remove_row()
        change_price()
        $('.change-product').val('')
        $('.change-product option[value="'+id+'"]').css('display','none')
    })
</script>