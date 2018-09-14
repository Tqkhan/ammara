<?php
class All_orders extends MY_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('all_orders_model');
		$this->load->model('machine_flow_model');
		$this->module = 'all_orders';
		$this->user_type = $this->session->userdata('user_type');
		$this->id = $this->session->userdata('user_id');
		$this->permission = $this->get_permission($this->module,$this->user_type);
	}
	public function index()
	{
		if ( $this->permission['view'] == '0' && $this->permission['view_all'] == '0' ) 
		{
			redirect('home');
		}
		$this->data['title'] = 'All Orders';
		if ( $this->permission['view_all'] == '1'){
			$this->data['work_orders'] = $this->all_orders_model->get_item();
		}
		elseif ($this->permission['view'] == '1') {
			$this->data['work_orders'] = $this->all_orders_model->get_item($this->id);
		}
		$this->data['permission'] = $this->permission;
		$this->load->template('all_orders/index',$this->data);
	}
	public function view_plane($id)
	{
		if ( $this->permission['view'] == '0' && $this->permission['view_all'] == '0' ) 
		{
			redirect('home');
		}
		$this->data['title'] = 'View Orders Progress';
		// work order
		$this->data['work_orders'] = $this->all_orders_model->get_row_single('work_orders',array('id'=>$id));
		$this->data['clients'] = $this->all_orders_model->all_rows('clients');
		$this->data['item'] = $this->all_orders_model->get_rows('item',array('Client'=>$this->data['work_orders']['Client']));
		// production plane
		$this->data['production_plan'] = $this->all_orders_model->get_row_single('production_plan',array('WO_no'=>$id));
		$this->data['order'] = $this->all_orders_model->get_order($id);
		$this->data['plan_flows'] = $this->all_orders_model->get_order_flows($id);
		$plane_id = $this->data['production_plan']['id'];
		// cutting
		$flow_data = $this->all_orders_model->get_row_single('production_flow',array('plane_id'=>$plane_id,'type'=>'4'));
		if ($flow_data) {
			$flow = $flow_data['id'];
			$this->data['cutting_data'] = $this->all_orders_model->get_row_single('cutting',array('plane_id'=>$plane_id,'flow_id'=>$flow));
	        $this->data['cutting_job'] = $this->machine_flow_model->get_job($plane_id,$flow);

	        $this->data['inprocess_inspection_cutting'] = $this->machine_flow_model->get_rows('inprocess_inspection_cutting',['wo_no'=>$id]);


		}


		// die cutting
		$flow_data = $this->all_orders_model->get_row_single('production_flow',array('plane_id'=>$plane_id,'type'=>'13'));
		if ($flow_data) {
			$flow = $flow_data['id'];
			$this->data['die_cutting'] = $this->all_orders_model->get_row_single('die_cutting',array('plane_id'=>$plane_id,'flow_id'=>$flow));
	        $this->data['die_cutting_complete'] = $this->all_orders_model->get_row_single('die_cutting_complete',array('die_cutting_id'=>$this->data['die_cutting']['id']));
	        $this->data['die_cutting_hourse'] = $this->all_orders_model->get_rows('die_cutting_hourse',array('die_cutting_id'=>$this->data['die_cutting_complete']['id']));
	        $this->data['die_cutting_job'] = $this->machine_flow_model->get_job($plane_id,$flow);

	        $this->data['inprocess_inspection_die_cutting'] = $this->machine_flow_model->get_rows('inprocess_inspection_die_cutting',['wo_no'=>$id]);

	    }
	    // leaflet cutting 
	    $flow_data = $this->all_orders_model->get_row_single('production_flow',array('plane_id'=>$plane_id,'type'=>'8'));
		if ($flow_data) {
			$flow = $flow_data['id'];
		    $this->data['leaflet_cutting'] = $this->all_orders_model->get_row_single('leaflet_cutting',array('plane_id'=>$plane_id,'flow_id'=>$flow));
	        $this->data['leaflet_cutting_job'] = $this->machine_flow_model->get_job($plane_id,$flow);
	    }

	    // Label cutting 
	    $flow_data = $this->all_orders_model->get_row_single('production_flow',array('plane_id'=>$plane_id,'type'=>'11'));
		if ($flow_data) {
			$flow = $flow_data['id'];
		    $this->data['label_cutting'] = $this->all_orders_model->get_row_single('label_cutting',array('plane_id'=>$plane_id,'flow_id'=>$flow));
	    }
	    // Stripping Report 
	    $flow_data = $this->all_orders_model->get_row_single('production_flow',array('plane_id'=>$plane_id,'type'=>'20'));
		if ($flow_data) {
			$flow = $flow_data['id'];
		    $this->data['stripping_report'] = $this->all_orders_model->get_row_single('stripping_report',array('plane_id'=>$plane_id,'flow_id'=>$flow));
	    }
	    // pasting
	    $flow_data = $this->all_orders_model->get_row_single('production_flow',array('plane_id'=>$plane_id,'type'=>'15'));
		if ($flow_data) {
			$flow = $flow_data['id'];
		    $this->data['pasting'] = $this->all_orders_model->get_row_single('pasting',array('plane_id'=>$plane_id,'flow_id'=>$flow));
	        $this->data['pasting_complete'] = $this->all_orders_model->get_row_single('pasting_complete',array('pasting_id'=>$this->data['pasting']['id']));
	        $this->data['pasting_hourse'] = $this->all_orders_model->get_rows('pasting_hourse',array('pasting_id'=>$this->data['pasting_complete']['id']));
	        $this->data['pasting_job'] = $this->machine_flow_model->get_job($plane_id,$flow);
	    
	        $this->data['inprocess_inspection_pasting'] = $this->machine_flow_model->get_rows('inprocess_inspection_pasting',['wo_id'=>$id]);
	    }
	    // printing
	    $flow_data = $this->all_orders_model->get_row_single('production_flow',array('plane_id'=>$plane_id,'type'=>'7'));
		if ($flow_data) {
			$flow = $flow_data['id'];
			$this->data['printing'] = $this->all_orders_model->get_row_single('printing',array('plane_id'=>$plane_id,'flow_id'=>$flow));
	        $this->data['printing_complete'] = $this->all_orders_model->get_row_single('printing_complete',array('print_id'=>$this->data['printing']['id']));
	        $this->data['printing_hourse'] = $this->all_orders_model->get_rows('printing_hourse',array('printing_id'=>$this->data['printing_complete']['id']));
	        $this->data['printing_job'] = $this->machine_flow_model->get_job($plane_id,$flow);
	        // $this->data['inprocess_inspection_printing'] = $this->machine_flow_model->get_rows('inprocess_inspection_printing',['wo_id'=>$id]);
		}
	    // Coating
	    $flow_data = $this->all_orders_model->get_row_single('production_flow',array('plane_id'=>$plane_id,'type'=>'22'));
		if ($flow_data) {
			$flow = $flow_data['id'];
			$this->data['coating'] = $this->all_orders_model->get_row_single('coating',array('plane_id'=>$plane_id,'flow_id'=>$flow));
	        $this->data['coating_complete'] = $this->all_orders_model->get_row_single('coating_complete',array('print_id'=>$this->data['coating']['id']));
	        $this->data['coating_hourse'] = $this->all_orders_model->get_rows('coating_hourse',array('coating_id'=>$this->data['coating_complete']['id']));
	        $this->data['coating_job'] = $this->machine_flow_model->get_job($plane_id,$flow);
	        
	        $this->data['inprocess_inspection_coating'] = $this->machine_flow_model->get_rows('inprocess_inspection_coating',['wo_no'=>$id]);
		}
	    // sorting
	    $flow_data = $this->all_orders_model->get_row_single('production_flow',array('plane_id'=>$plane_id,'type'=>'10'));
		if ($flow_data) {
			$flow = $flow_data['id'];
			$this->data['sorting'] = $this->all_orders_model->get_row_single('sorting',array('plane_id'=>$plane_id,'flow_id'=>$flow));
	       
		}

		$this->data['line_clearance'] = $this->all_orders_model->line_clearance($plane_id);
		$this->data['development'] = $this->all_orders_model->get_row_single('development_report',array('order_id'=>$id));
		$this->data['design'] = $this->all_orders_model->get_row_single('design_report',array('order_id'=>$id));
		$this->data['profing'] = $this->all_orders_model->get_row_single('printing_report',array('order_id'=>$id));
		$this->data['batch_release'] = $this->all_orders_model->get_batch_release($id);
		$this->data['wo_no'] = $id;


		// QC Forms Data Start

		$this->data['complain_assessment_form'] = $this->all_orders_model->get_row_single('complain_assessment_form',array('wo_no'=>$id));

		$this->data['non_comfirmity_report'] = $this->all_orders_model->get_row_single('non_comfirmity_report',array('wo_no'=>$id));

		$this->data['corrective_action_request'] = $this->all_orders_model->get_row_single('corrective_action_request',array('wo_no'=>$id));

		$this->data['investigation_report'] = $this->all_orders_model->get_row_single('investigation_report',array('wo_no'=>$id));


		$this->data['rejection_report'] = $this->all_orders_model->query_single_result("Select * from rejection_report where wo_no=".$id);

		$rejection_report=$this->data['rejection_report']['id'];
		if ($rejection_report) {
			$this->data['rejection_report_parameter']=$this->all_orders_model->query_single_result("select * from rejection_report_parameter where rejection_report_id=".$rejection_report);
		}

		$this->data['quality_inspection_machine_report'] = $this->all_orders_model->query_single_result("Select * from quality_inspection_machine_report where wo_no=".$id);

		$quality_inspection_machine_report=$this->data['quality_inspection_machine_report']['id'];
		if ($quality_inspection_machine_report) {

			$this->data['quality_inspection_machine_report_parameters']=$this->all_orders_model->query_single_result("select * from quality_inspection_machine_report_parameters where quality_inspection_machine_report_id=".$quality_inspection_machine_report);
		}

	
		$this->data['goods_receiving_notes']=$this->all_orders_model->query_single_result("Select * from goods_receiving_notes where wo_no=".$id);

		$goods_receiving_notes=$this->data['goods_receiving_notes']['id'];
		if ($goods_receiving_notes) {
			$this->data['goods_receiving_notes_item_desc']=$this->all_orders_model->query_result("select * from goods_receiving_notes_item_desc where goods_receiving_notes_id=".$goods_receiving_notes);
		}


		$this->data['process_procedure'] = $this->all_orders_model->query_single_result("Select * from process_procedure where wo_no=".$id);
		$process_procedure=$this->data['process_procedure']['id'];
		if ($process_procedure) {
			$this->data['process_procedure_item_desc']=$this->all_orders_model->query_result("select * from process_procedure_item_desc where process_procedure_id=".$process_procedure);
			$this->data['process_procedure_remarks']=$this->all_orders_model->query_single_result("select * from process_procedure_remarks where product_release_id=".$process_procedure);
		}






		// QC Forms Data End


  //    echo "<pre>";
		// print_r($this->data);die();
		$this->load->template('all_orders/view_plane',$this->data);
	}

	public function view_timeline($id)
	{
		if ($this->permission['edit'] == '0') 
		{
			redirect('home');
		}
		$this->data['title'] = 'View Orders Timeline';
		$work_order = $this->all_orders_model->get_work_order($id);
		$production_plan = $this->all_orders_model->get_production_plan($id);
		if ($production_plan) {
			$this->data['production_plan'] = $this->all_orders_model->get_row_single('production_plan',array('WO_no'=>$id));
			$plane_id = $this->data['production_plan']['id'];
			$this->data['timeline'] = array_merge($production_plan,$work_order);
			$line_clearance = $this->all_orders_model->get_line_clearance($plane_id);
			$this->data['timeline'] = array_merge($line_clearance,$this->data['timeline']);
			$production_flow = $this->all_orders_model->get_production_flow($plane_id);
			$this->data['timeline'] = array_merge($production_flow,$this->data['timeline']);
		}
		else{
			$this->data['timeline'] = $work_order;
		}
		function compareOrder($a, $b)
	    {
	        return strtotime($a['start_date']) - strtotime($b['start_date']);
	    }
	    usort($this->data['timeline'], 'compareOrder');
	    $this->data['product'] = $this->all_orders_model->get_product($id);
	    $this->load->template('all_orders/view_timeline',$this->data);
		//echo '<pre>';print_r($this->data['timeline']);die;
	}
	public function batch_release_old($id,$flow_id)
	{
		$this->data['title'] = 'Batch Release Form';
		$this->data['order'] = $this->all_orders_model->get_batch_detail($id,$flow_id);
		//echo '<pre>';print_r($this->data['order']);die;
		$this->load->template('all_orders/batch_release_old',$this->data);
	}
/*insert data in 2 table in one form*/
	public function batch_release($id,$flow_id)
	{
		
		if ($this->permission['edit'] == '0') 
		{
			redirect('home');
		}
		if ($this->input->post()) {

			$data_all=$_POST;
			  unset($_POST['batch_release_id']);
			  unset($_POST['grammage_status']);
			  unset($_POST['grammage_remarks']);
			  unset($_POST['color_status']);
			  unset($_POST['color_remarks']);
			  unset($_POST['design_status']);
			  unset($_POST['design_remarks']);
			  unset($_POST['text_status']);
			  unset($_POST['text_remarks']);
			  unset($_POST['scum_spots_status']);
			  unset($_POST['scum_spots_remarks']);
			  unset($_POST['gloss_status']);
			  unset($_POST['gloss_remarks']);
			  unset($_POST['die_cutting_embossing_status']);
			  unset($_POST['die_cutting_embossing_remarks']);
			  unset($_POST['creasing_status']);
			  unset($_POST['creasing_remarks']);
			  unset($_POST['stripping_status']);
			  unset($_POST['stripping_remarks']);
			  unset($_POST['folding_gluing_status']);
			  unset($_POST['folding_gluing_remarks']);
			  unset($_POST['labeling_status']);
			  unset($_POST['labeling_remarks']);
			  unset($_POST['packing_status']);
			  unset($_POST['packing_remarks']);
			  unset($_POST['master_cartons_status']);
			  unset($_POST['master_cartons_remarks']);
			$data = $this->input->post();
			$data['user_id'] = $this->session->userdata('user_id');
			$data['wo_id'] = $id;
			$data['flow_id'] = $flow_id;
			if ($batch_id = $this->all_orders_model->insert('batch_release',$data)) {
				$batch_release_parameter=array(
				  'batch_release_id'=>$batch_id,
				  'grammage_status'=>$data_all['grammage_status'],
				  'grammage_remarks'=>$data_all['grammage_remarks'],
				  'color_status'=>$data_all['color_status'],
				  'color_remarks'=>$data_all['color_remarks'],
				  'design_status'=>$data_all['design_status'],
				  'design_remarks'=>$data_all['design_remarks'],
				  'text_status'=>$data_all['text_status'],
				  'text_remarks'=>$data_all['text_remarks'],
				  'scum_spots_status'=>$data_all['scum_spots_status'],
				  'scum_spots_remarks'=>$data_all['scum_spots_remarks'],
				  'gloss_status'=>$data_all['gloss_status'],
				  'gloss_remarks'=>$data_all['gloss_remarks'],
				  'die_cutting_embossing_status'=>$data_all['die_cutting_embossing_status'],
				  'die_cutting_embossing_remarks'=>$data_all['die_cutting_embossing_remarks'],
				  'creasing_status'=>$data_all['creasing_status'],
				  'creasing_remarks'=>$data_all['creasing_remarks'],
				  'stripping_status'=>$data_all['stripping_status'],
				  'stripping_remarks'=>$data_all['stripping_remarks'],
				  'folding_gluing_status'=>$data_all['folding_gluing_status'],
				  'folding_gluing_remarks'=>$data_all['folding_gluing_remarks'],
				  'labeling_status'=>$data_all['labeling_status'],
				  'labeling_remarks'=>$data_all['labeling_remarks'],
				  'packing_status'=>$data_all['packing_status'],
				  'packing_remarks'=>$data_all['packing_remarks'],
				  'master_cartons_status'=>$data_all['master_cartons_status'],
				  'master_cartons_remarks'=>$data_all['master_cartons_remarks']
				);



   			$this->all_orders_model->insert('batch_release_parameters',$batch_release_parameter);
								print_r($batch_release_parameter);die();

			}
			if ($batch_id) {
				echo '<script>window.open("","_self").close()</script>';
				//redirect('all_orders');
			}
			//print_r($data);die;
		}
		$this->data['title'] = 'Batch Release Form';
		$this->data['order'] = $this->all_orders_model->get_batch_detail($id,$flow_id);
		//echo '<pre>';print_r($this->data['order']);die;
		$this->load->template('all_orders/batch_release',$this->data);
	}
}
		   
