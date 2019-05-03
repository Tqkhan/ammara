<?php
class Purchases extends MY_Controller
{
    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Purchases_model');
        $this->load->model('Quantity_adjustments_model');
        $this->module     = 'purchases';
        $this->user_type  = $this->session->userdata('user_type');
        $this->id         = $this->session->userdata('user_id');
        $this->permission = $this->get_permission($this->module, $this->user_type);
    }
    public function index()
    {
        if ($this->permission['view'] == '0' && $this->permission['view_all'] == '0') {
            redirect('home');
        }
        $this->data['title'] = 'Purchases';
        if ($this->permission['view_all'] == '1') {
            $this->data['purchases'] = $this->Purchases_model->get_purchases();
        } elseif ($this->permission['view'] == '1') {
            $this->data['purchases'] = $this->Purchases_model->get_purchases($this->id);
        }
        $this->data['permission'] = $this->permission;
        $this->load->template('purchases/index', $this->data);
    }
    public function create()
    {
        if ($this->permission['created'] == '0') {
            redirect('home');
        }
        $this->data['title']        = 'Create Purchases';
        $this->data['table_vednor'] = $this->Purchases_model->all_rows('vednor');
        $this->data['table_category'] = $this->Purchases_model->all_rows('category');
        $this->load->template('purchases/create', $this->data);
    }
    public function insert()
    {

        if ($this->permission['created'] == '0') {
            redirect('home');
        }
        $data                    = $this->input->post();
        $product_id = $data['product_id'];
        $quantity = $data['quantity'];
        $price = $data['price'];
        $grand_total = $data['grand_total'];
        unset($data['quantity']);
        unset($data['product_id']);
        unset($data['price']);
        unset($data['grand_total']);
        //echo '<pre>';print_r($data);die;
        $data['user_id']         = $this->session->userdata('user_id');
        $config['upload_path']   = './uploads/';
        $config['allowed_types'] = 'doc|docs|pdf|xlx|xlsx';
        $config['max_size']      = 45000;
        $config['max_width']     = 45024;
        $config['max_height']    = 40768;
        $this->load->library('upload', $config);
        
        if ($this->upload->do_upload('Attach_Document')) {
            $data['Attach_Document'] = '/uploads/' . $this->upload->data('file_name');
        }
        $id = $this->Purchases_model->insert('purchases', $data);
        if ($id) {
            for ($i=0; $i < sizeof($product_id); $i++) { 
                $r = 0;
                if ($data['Status'] == 'Received') {
                    $r = $quantity[$i];
                }
                $this->data['product_old_qty'] = $this->Quantity_adjustments_model->product_old_qty('product' , $product_id[$i]);
                $new_qty = $this->data['product_old_qty']['product_qty']+$r;
                $product[] = array(
                    'product_id'=>$product_id[$i],
                    'quantity'=>$quantity[$i],
                    'price'=>$price[$i],
                    'purchase_id'=>$id,
                    'received_quantity'=>$r,
                );
                $this->Purchases_model->update('product', array('Product_Cost'=>$price[$i],'product_qty'=>$new_qty), array('id' => $product_id[$i]));


                $ledger_detail = [
                    'product_id'=>$product_id[$i],
                    'supplier' => $data['Supplier'],
                    'qty' => $r,
                    'balance' => $new_qty,
                    'date' => $data['Date'],
                    'reference' => 'Debit',
                ];
                $this->Purchases_model->insert('product_ledger', $ledger_detail);




            }
            $this->Purchases_model->insert_batch('purchase_product',$product);
            redirect('purchases');             

           
              
           
            
        }
    }
    public function edit($id)
    {
        if ($this->permission['edit'] == '0') {
            redirect('home');
        }
        $this->data['title']        = 'Edit Purchases';
        $this->data['purchases']    = $this->Purchases_model->get_row_single('purchases', array(
            'id' => $id
        ));
        $this->data['table_vednor'] = $this->Purchases_model->all_rows('vednor');
        $this->load->template('purchases/edit', $this->data);
    }
    
    public function update()
    {
        if ($this->permission['edit'] == '0') {
            redirect('home');
        }
        $data = $this->input->post();
        $id   = $data['id'];
        unset($data['id']);
        $config['upload_path']   = './uploads/';
        $config['allowed_types'] = 'doc|docs|pdf|xlx|xlsx';
        $config['max_size']      = 45000;
        $config['max_width']     = 45024;
        $config['max_height']    = 40768;
        
        $this->load->library('upload', $config);
        
        if ($this->upload->do_upload('Attach_Document')) {
            $data['Attach_Document'] = '/uploads/' . $this->upload->data('file_name');
        }
        $id = $this->Purchases_model->update('purchases', $data, array(
            'id' => $id
        ));
        if ($id) {
            redirect('purchases');
        }
    }
    public function delete($id)
    {
        if ($this->permission['deleted'] == '0') {
            redirect('home');
        }
        $this->Purchases_model->delete('purchases', array(
            'id' => $id
        ));
        redirect('purchases');
    }

    public function change_status($id,$status)
    {
        $id = $this->Purchases_model->update('purchases', array('Status'=>$status), array(
            'id' => $id
        ));
        if ($id) {
            redirect('purchases');
        }
    }

    public function get_order($id)
    {
        $data = $this->Purchases_model->get_order_product($id);
        echo json_encode($data);
    }











    public function received_order()
    {

        echo "<pre>";
        $id = $this->input->post('id');
        $detail_id = $this->input->post('detail_id');
        $t_qty = $this->input->post('total_qty');
        $t_r_qty = $this->input->post('rec_qty');
        $t_new_r_qty = $this->input->post('received_quantity');
        $received_quantity = $this->input->post('received_quantity');

        // $new_t_qty = $t_qty - $t_r_qty;

        $total_new_r_qty = 0;
        
        
        foreach ($t_new_r_qty as $value) {
            $total_new_r_qty += $value;
        }
        // print_r($total_new_r_qty);
        // die();
        if ($total_new_r_qty == $t_qty) {
         $this->Purchases_model->update('purchases', array('Status'=>'Received','received_quantity'=>$total_new_r_qty), array('id' => $id));
        }else{
            $this->Purchases_model->update('purchases', array('status'=>'Partial','received_quantity'=>$total_new_r_qty), array('id' => $id));
        }
        for ($i=0; $i < sizeof($detail_id); $i++) { 
            $this->Purchases_model->update('purchase_product', array('received_quantity'=>$received_quantity[$i]), array('id' => $detail_id[$i]));
        }
        
        redirect('purchases');
    }

    public function get_sub_category($id)
    {
        $data = $this->Purchases_model->get_rows('sub_category', array('Parent_Category' => $id));
        echo json_encode($data);
    }

    public function get_product($id,$parent,$store_id=null)
    {
        if ($store_id != null) {
            $data = $this->Purchases_model->get_product_stock($id,$parent,$store_id);
        }
        else{
            $data = $this->Purchases_model->get_rows('product', array('Category' => $parent,'Sub_Category' => $id));
        }
        echo json_encode($data);
    }
    
    public function get_product_qty()
    {
        $expenseID = $this->input->post('p_id'); 

        $this->data['get_row_vendor_data'] = $this->Purchases_model->get_row_single('purchases',array('id'=>$expenseID));

        // print_r($this->data['get_row_vendor_data']['Product_Cost']);
                echo ' '.$this->data['get_row_vendor_data']['Product_Cost'].' ';
    
    }

    public function get_order_detail()
    {
        $id = $this->input->post('id'); 
        // $id = $this->input->post('id'); 
        

        $this->data['order_detail'] = $this->Purchases_model->order_detail($id);

        $this->data['order_detail_all'] = $this->Purchases_model->order_detail_all($id);

        // print_r($this->data['order_detail']);
        $my_count = $this->data['order_detail_all'];
            echo '
                
                    <p>
                    </p>
                    <div class="well well-sm" style="height: auto;">
                        <div class="row bold">
                            <div class="col-xs-6">
                            <p class="bold add_detail">
                                <h4>Purchases Detail </h4>
                                <h5>Supplier Name : '. $this->data['order_detail']['Name']  .'</h5>
                                
                            </p>
                        </div>
                        <div class="col-xs-6">
                            <p class="bold add_detail">

                                <h4>Purchases Order </h4>
                                <h5>Date : '. $this->data['order_detail']['Date']  .'</h5>
                                <h5>Reference : '. $this->data['order_detail']['Reference_No']  .'</h5>
                            </p>
                        </div>
                        <div class="">
                             <table class="table table-bordered table-hover table-striped print-table order-table">

                             <thead>

                                <tr>
                                    <th>No</th>
                                    <th>Product Code</th>
                                    <th>Description</th>
                                    <th>Quantity</th>
                                    <th>Unit Cost</th>
                                    <th>Subtotal</th>
                                </tr>

                             </thead>

                            <tbody>
                       ';
                       $s_no = 1;
                       $total_amount = 0;
                       foreach ($my_count as $count) {
                         ?>
                         <tr>
                             <td style="text-align:center; width:40px; vertical-align:middle;"><?php echo $s_no++;?></td>
                             <td style="text-align:center; width:40px; vertical-align:middle;"><?php echo $count['Product_Code'];?></td>
                             <td style="vertical-align:middle;"><?php echo $count['Product_Details'];?> </td>
                             <td style="width: 80px; text-align:center; vertical-align:middle;"><?php echo $count['quantity']?></td>
                             <td style="text-align:right; width:100px;"><?php echo $count['price'];?></td>
                             <td style="text-align:right; width:120px;"><?php $sub_total = $count['quantity'] * $count['price']; echo number_format($sub_total);?></td>
                         </tr>
                     <?php
                     $total_amount += $sub_total;
                       }
                       echo'
                            <tfoot>

                                <tr>
                                    <td></td>
                                    <td colspan="4" style="text-align:right; font-weight:bold;">Total Amount (PKR)
                                    </td>
                                    <td style="text-align:right; padding-right:10px; font-weight:bold;">Rs. '. number_format($total_amount)  .'</td>
                                </tr>

                            </tfoot>
                            </div>
                            </table>
                            <div class="col-xs-7 text-right">
                                <h2 style="margin-top:10px;"></h2>                    
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="clearfix"></div>
                    </div>

            ';
        }
}