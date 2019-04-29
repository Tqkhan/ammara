<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Qc extends MY_Controller {
	
	public function __construct()
    {
        parent::__construct();
        $this->load->model('qc_model');
        $this->module = 'qc';
        $this->user_type = $this->session->userdata('user_type');
        $this->id = $this->session->userdata('user_id');
        $this->permission = $this->get_permission($this->module,$this->user_type);
    }

    public function index()
    {
        if ($this->permission['view'] == '0' && $this->permission['view_all'] == '0') 
        {
            redirect('home');
        }
        $this->data['title'] = 'Work Orders';
        if ( $this->permission['view_all'] == '1'){
            $this->data['work_orders'] = $this->qc_model->get_item();
        }
        elseif ($this->permission['view'] == '1') {
            $this->data['work_orders'] = $this->qc_model->get_item($this->id);
        }
        $this->data['permission'] = $this->permission;
        $this->load->template('qc/index',$this->data);
    }

    public function view_flows($id)
    {
        if ($this->permission['view'] == '0' && $this->permission['view_all'] == '0') 
        {
            redirect('home');
        }
        $this->data['title'] = 'Work Orders';
        $this->data['flows'] = $this->qc_model->get_qc_flow($id);
        $this->data['permission'] = $this->permission;
        //echo '<pre>';print_r($this->data['flows']);die;
        $this->load->template('qc/view_flows',$this->data);
    }
    
    public function qc_reports($wo)
    {
        
        $this->data['title'] = 'QC Reports';
        $this->data['wo_no'] = $wo;
        // print_r($wo);die();
        $this->load->template('qc/qc_reports',$this->data);
    }
    public function line_clearance($id,$wo)
    {
        if ($this->input->post()) {
            $data = $this->input->post();
            $data['flow_id'] = $id;
            $data['user_id'] = $this->session->userdata('user_id');
            $id = $this->qc_model->insert('line_clearance',$data);
            if ($id) {
                redirect('qc/view_flows/'.$wo);
            }
        }
        $this->data['title'] = 'Line Clearance';
        $this->data['wo_no'] = $wo;
        $this->load->template('qc/line_clearance',$this->data);
    }

    public function view_line_clearance($id,$wo)
    {
        $this->data['title'] = 'Line Clearance';
        $this->data['data'] = $this->qc_model->get_row_single('line_clearance',array('flow_id'=>$id));
        $this->data['wo_no'] = $wo;
        //echo '<pre>';print_r($this->data);die;
        $this->load->template('qc/view_line_clearance',$this->data);
    }
    public function inprocess_inspection_cutting($id,$wo)
    {
        if ($this->input->post()) {
            // echo "<pre>";
        // print_r($this->input->post());die();
            
            for ($i=0; $i < count($_POST['time']); $i++) { 
                
                $data=array(

                      'date'=>date('Y-m-d'),
                      'wo_no'=>$_POST['wo_no'],
                      'machine'=>$_POST['machine'],
                      'time'=>$_POST['time'][$i],
                      'material'=>$_POST['material'][$i],
                      'gsm'=>$_POST['gsm'][$i],
                      'size'=>$_POST['size'][$i],
                      'cut_marks'=>$_POST['cutmarks'][$i],
                      'edges'=>$_POST['edges'][$i],
                      'stain'=>$_POST['stain'][$i],
                      'remarks'=>$_POST['remarks'][$i]

                );
            $id = $this->qc_model->insert('inprocess_inspection_cutting',$data);
            
            }             
            if ($id) {
                redirect(base_url('all_orders/view_plane/'.$wo));             }         }
                $this->data['title'] = 'Inprocess Inspection Cutting';
                $this->data['wo_no'] = $wo;          // echo
                $this->load->template('qc/inprocess_inspection_cutting',$this->data);
                }
        public function inprocess_inspection_coating($id,$wo)
    {
        if ($this->input->post()) {
            // echo "<pre>";
        // print_r($this->input->post());die();
            
            for ($i=0; $i < count($_POST['time']); $i++) { 
                
                $data=array(


                  'date'=>date('Y-m-d'),
                  'wo_no'=>$_POST['wo_no'],
                  'machine'=>$_POST['machine'],
                  'time'=>$_POST['time'][$i],
                  'registration'=>$_POST['registration'][$i],
                  'uv_shade'=>$_POST['uv_shade'][$i],
                  'set_off'=>$_POST['set_off'][$i],
                  'scummy'=>$_POST['scummy'][$i],
                  'unwanted_marks'=>$_POST['unwanted_marks'][$i],
                  'uv_gloves_wet'=>$_POST['uv_gloves_wet'][$i],
                  'uv_gloves_dry'=>$_POST['uv_gloves_dry'][$i],
                  'remarks'=>$_POST['remarks'][$i]


                );
            $id = $this->qc_model->insert('inprocess_inspection_coating',$data);
            
            }             
            if ($id) {
                redirect(base_url('all_orders/view_plane/'.$wo));             }         }
                $this->data['title'] = 'Inprocess Inspection Coating';
                $this->data['wo_no'] = $wo;          // echo
                $this->load->template('qc/inprocess_inspection_coating',$this->data);
                }
         public function inprocess_inspection_die_cutting($id,$wo)
        {
        if ($this->input->post()) {
            // echo "<pre>";
        // print_r($this->input->post());die();
            
            for ($i=0; $i < count($_POST['time']); $i++) { 
                
                $data=array(

                  'date'=>date('Y-m-d'),
                  'wo_no'=>$_POST['wo_no'],
                  'machine'=>$_POST['machine'],
                  'time'=>$_POST['time'][$i],
                  'position'=>$_POST['position'][$i],
                  'cutting'=>$_POST['cutting'][$i],
                  'creasing'=>$_POST['creasing'][$i],
                  'bead'=>$_POST['bead'][$i],
                  'perforation'=>$_POST['perforation'][$i],
                  'ear_lock'=>$_POST['ear_lock'][$i],
                  'pasting_fold'=>$_POST['pasting_fold'][$i],
                  'embose'=>$_POST['embose'][$i],
                  'remarks'=>$_POST['remarks'][$i]


                );
            $id = $this->qc_model->insert('inprocess_inspection_die_cutting',$data);
            
            }             
            if ($id) {
                redirect(base_url('all_orders/view_plane/'.$wo));             }         }
                $this->data['title'] = 'Inprocess Inspection Die Cutting';
                $this->data['wo_no'] = $wo;          // echo
                $this->load->template('qc/inprocess_inspection_die_cutting',$this->data);
                } 



                public function inprocess_inspection_printing($id,$wo)
            {
                if ($this->input->post()) {
            
                   $data=array(
                    'date'=>$_POST['date'],
                    'wo_no'=>$_POST['wo_no'],
                    'job_name'=>$_POST['job_name'],
                    'colours'=>$_POST['colours'],
                    'machine'=>$_POST['machine'],
                    'start_time'=>$_POST['start_time'],
                    'end_time'=>$_POST['end_time']
                  );
                $id = $this->qc_model->insert('inprocess_inspection_printing',$data);
                
                           
                if ($id) {

                  for ($i=0; $i < count($_POST['standard_frequency_hourly']); $i++) { 
                   

                  $data2=array(
                      'wo_no'=>$_POST['wo_no'],
                      'inprocess_inspection_printing_id'=>$id,
                      'standard_frequency_hourly'=>$_POST['standard_frequency_hourly'][$i],
                      'colours_density'=>$_POST['colours_density'][$i],
                      'col1'=>$_POST['col1'][$i],
                      'col2'=>$_POST['col2'][$i],
                      'col3'=>$_POST['col3'][$i],
                      'col4'=>$_POST['col4'][$i],
                      'col5'=>$_POST['col5'][$i],
                      'col6'=>$_POST['col6'][$i],
                      'col7'=>$_POST['col7'][$i],
                      'col8'=>$_POST['col8'][$i],
                      'col9'=>$_POST['col9'][$i],
                      'col10'=>$_POST['col10'][$i],
                      'standard_frequency_remarks'=>$_POST['standard_frequency_remarks'][$i],
                      'col1_min'=>$_POST['col1_min'][$i],
                      'col2_min'=>$_POST['col2_min'][$i],
                      'col3_min'=>$_POST['col3_min'][$i],
                      'col4_min'=>$_POST['col4_min'][$i],
                      'col5_min'=>$_POST['col5_min'][$i],
                      'col6_min'=>$_POST['col6_min'][$i],
                      'col7_min'=>$_POST['col7_min'][$i],
                      'col8_min'=>$_POST['col8_min'][$i],
                      'col9_min'=>$_POST['col9_min'][$i],
                      'col10_min'=>$_POST['col10_min'][$i],
                      'col1_max'=>$_POST['col1_max'][$i],
                      'col2_max'=>$_POST['col2_max'][$i],
                      'col3_max'=>$_POST['col3_max'][$i],
                      'col4_max'=>$_POST['col4_max'][$i],
                      'col5_max'=>$_POST['col5_max'][$i],
                      'col6_max'=>$_POST['col6_max'][$i],
                      'col7_max'=>$_POST['col7_max'][$i],
                      'col8_max'=>$_POST['col8_max'][$i],
                      'col9_max'=>$_POST['col9_max'][$i],
                      'col10_max'=>$_POST['col10_max'][$i],
                      'colors_density_remarks'=>$_POST['colors_density_remarks'][$i]
                  );



                $id2 = $this->qc_model->insert('inprocess_inspection_printing_frequencies',$data2);

            }
                  if ($id2) {


                    redirect(base_url('all_orders/view_plane/'.$wo));             
                  }         
                }
                    
                  }

                

                  

                    $this->data['title'] = 'Inprocess Inspection Printing';
                    $this->data['wo_no'] = $wo;          

                    $this->load->template('qc/inprocess_inspection_printing',$this->data);
               }
        public function inprocess_inspection_pasting($id,$wo)
        {
        if ($this->input->post()) {
            // echo "<pre>";
        // print_r($this->input->post());die();
            
            for ($i=0; $i < count($_POST['time']); $i++) { 
                
                $data=array(
                    'date'=>date('Y-m-d'),
                    'wo_id'=>$_POST['wo_no'],
                    'machine'=>$_POST['machine'],
                    'time'=>$_POST['time'][$i],
                    'creasing'=>$_POST['creasing'][$i],
                    'glue_position'=>$_POST['glue_position'][$i],
                    'gluing'=>$_POST['gluing'][$i],
                    'stickiness'=>$_POST['stickiness'][$i],
                    'scratches'=>$_POST['scratches'][$i],
                    'color_rub'=>$_POST['color_rub'][$i],
                    'counting'=>$_POST['counting'][$i],
                    'remarks'=>$_POST['remarks'][$i]
                );
            $id = $this->qc_model->insert('inprocess_inspection_pasting',$data);
            
            }             
            if ($id) {
                redirect(base_url('all_orders/view_plane/'.$wo));             }         }
                $this->data['title'] = 'Inprocess Inspection Pasting';
                $this->data['wo_no'] = $wo;          // echo
                $this->load->template('qc/inprocess_inspection_pasting',$this->data);
                }

               

                // qc Reports


           
             public function investigation_report($wo)
             {

              if ($this->input->post()) {
            // echo "<pre>";
        // print_r($this->input->post());die();
                $data=array(
                  'wo_no'=>$_POST['wo_no'],
                  'complain_received_from'=>$_POST['complain_received_from'],
                  'date_investigation_began'=>$_POST['date_investigation_began'],
                  'nature_of_complain'=>$_POST['nature_of_complain'],
                  'background_to_the_investigation'=>$_POST['background_to_the_investigation'],
                  'description_of_work'=>$_POST['description_of_work'],
                  'the_investigation_process'=>$_POST['the_investigation_process'],
                  'persons_interviewed'=>$_POST['persons_interviewed'],
                  'summary_of_technical_findings'=>$_POST['summary_of_technical_findings'],
                  'summary_of_witness_evidence'=>$_POST['summary_of_witness_evidence'],
                  'secondary_root_cause'=>$_POST['secondary_root_cause'],
                  'primary_root_cause'=>$_POST['primary_root_cause'],
                  'other_relevant_information'=>$_POST['other_relevant_information'],
                  'recommendation'=>$_POST['recommendation'],
                  'funther_details_on_recommendation'=>$_POST['funther_details_on_recommendation'],
                  'investigation_complete_on'=>$_POST['investigation_complete_on']


                );
            $id = $this->qc_model->insert('investigation_report',$data);
            
                       
            if ($id) {
                redirect(base_url('all_orders/view_plane/'.$wo));             }         }
              $this->data['title'] = 'Investigation Report';
                $this->data['wo_no'] = $wo;        
              $this->load->template('qc/investigation_report',$this->data);
             }

            public function rejection_report($wo)
            {
                if ($this->input->post()) {
            
                  $data=array(

                  'wo_no'=>$_POST['wo_no'],
                  'date'=>$_POST['date'],
                  'po_no'=>$_POST['po_no'],
                  'product_name'=>$_POST['product_name'],
                  'customer_name'=>$_POST['customer_name'],
                  'sorter_name'=>$_POST['sorter_name'],
                  'good_qty'=>$_POST['good_qty'],
                  'time_consumed_to'=>$_POST['time_consumed_to'],
                  'time_consumed_from'=>$_POST['time_consumed_from'],
                  'type_of_rejection'=>$_POST['type_of_rejection'],
                  );
                $id = $this->qc_model->insert('rejection_report',$data);
                
                           
                if ($id) {

                  $data2=array(
                      'wo_no'=>$_POST['wo_no'],
                      'rejection_report_id'=>$id,
                      'color_variation_accept'=>$_POST['color_variation_accept'],
                      'color_variation_reject_qty'=>$_POST['color_variation_reject_qty'],
                      'color_variation_remarks'=>$_POST['color_variation_remarks'],
                      'stains_accept'=>$_POST['stains_accept'],
                      'stains_reject_qty'=>$_POST['stains_reject_qty'],
                      'stains_remarks'=>$_POST['stains_remarks'],
                      'bur_accept'=>$_POST['bur_accept'],
                      'bur_reject_qty'=>$_POST['bur_reject_qty'],
                      'bur_remarks'=>$_POST['bur_remarks'],
                      'over_glueing_accept'=>$_POST['over_glueing_accept'],
                      'over_glueing_reject_qty'=>$_POST['over_glueing_reject_qty'],
                      'over_glueing_remarks'=>$_POST['over_glueing_remarks'],
                      'sport_accept'=>$_POST['sport_accept'],
                      'sport_reject_qty'=>$_POST['sport_reject_qty'],
                      'sport_reject_remarks'=>$_POST['sport_reject_remarks'],
                      'edges_accept'=>$_POST['edges_accept'],
                      'edges_reject_qty'=>$_POST['edges_reject_qty'],
                      'edges_remarks'=>$_POST['edges_remarks'],
                      'cutting_out_accept'=>$_POST['cutting_out_accept'],
                      'cutting_out_reject_qty'=>$_POST['cutting_out_reject_qty'],
                      'cutting_out_remarks'=>$_POST['cutting_out_remarks'],
                      'print_un_smooth_accept'=>$_POST['print_un_smooth_accept'],
                      'print_un_smooth_reject_qty'=>$_POST['print_un_smooth_reject_qty'],
                      'print_un_smooth_remarks'=>$_POST['print_un_smooth_remarks'],
                      'scum_accept'=>$_POST['scum_accept'],
                      'scum_reject_qty'=>$_POST['scum_reject_qty'],
                      'scum_remarks'=>$_POST['scum_remarks'],
                      'cutting_hard_accept'=>$_POST['cutting_hard_accept'],
                      'cutting_hard_reject_qty'=>$_POST['cutting_hard_reject_qty'],
                      'cutting_hard_remarks'=>$_POST['cutting_hard_remarks'],
                      'cracking_accept'=>$_POST['cracking_accept'],
                      'cracking_reject_qty'=>$_POST['cracking_reject_qty'],
                      'cracking_remarks'=>$_POST['cracking_remarks']
                  );



                $id2 = $this->qc_model->insert('rejection_report_parameter',$data2);
                  if ($id2) {
                    redirect(base_url('all_orders/view_plane/'.$wo));             
                  }         
                }
                    
                  }

                  $sql="select work_orders.*,item.Description from work_orders inner join item on (item.id=work_orders.Item_Code) where work_orders.id=".$wo;


                  $this->data['job']=$this->qc_model->query_single_result($sql);

                    $this->data['title'] = 'Rejection Report';
                    $this->data['wo_no'] = $wo;          

                    $this->load->template('qc/rejection_report',$this->data);
               }


               public function quality_inspection_machine_report($wo)
            {
                if ($this->input->post()) {
            
                  $data=array(

                  'wo_no'=>$_POST['wo_no'],
                  'date'=>$_POST['date'],
                  'po_no'=>$_POST['po_no'],
                  'product_name'=>$_POST['product_name'],
                  'customer_name'=>$_POST['customer_name'],
                  'operator_name'=>$_POST['operator_name'],
                  'good_qty'=>$_POST['good_qty'],
                  'time_consumed_to'=>$_POST['time_consumed_to'],
                  'time_consumed_from'=>$_POST['time_consumed_from'],
                  );
                $id = $this->qc_model->insert('quality_inspection_machine_report',$data);
                
                           
                if ($id) {

                  $data2=array(
                      'wo_no'=>$_POST['wo_no'],
                      'quality_inspection_machine_report_id'=>$id,
                      'color_variation_accept'=>$_POST['color_variation_accept'],
                      'color_variation_reject_qty'=>$_POST['color_variation_reject_qty'],
                      'color_variation_remarks'=>$_POST['color_variation_remarks'],
                      'oil_stains_accept'=>$_POST['oil_stains_accept'],
                      'oil_stains_reject_qty'=>$_POST['oil_stains_reject_qty'],
                      'oil_stains_remarks'=>$_POST['oil_stains_remarks'],
                      'ghosting_accept'=>$_POST['ghosting_accept'],
                      'ghosting_reject_qty'=>$_POST['ghosting_reject_qty'],
                      'ghosting_remarks'=>$_POST['ghosting_remarks'],
                      'bur_accept'=>$_POST['bur_accept'],
                      'bur_reject_qty'=>$_POST['bur_reject_qty'],
                      'bur_remarks'=>$_POST['bur_remarks'],
                      'spots_accept'=>$_POST['spots_accept'],
                      'spots_reject_qty'=>$_POST['spots_reject_qty'],
                      'spots_remarks'=>$_POST['spots_reject_remarks'],
                      'edges_accept'=>$_POST['edges_accept'],
                      'edges_reject_qty'=>$_POST['edges_reject_qty'],
                      'edges_remarks'=>$_POST['edges_remarks'],
                      'cutting_out_accept'=>$_POST['cutting_out_accept'],
                      'cutting_out_reject_qty'=>$_POST['cutting_out_reject_qty'],
                      'cutting_out_remarks'=>$_POST['cutting_out_remarks'],
                      'scum_accept'=>$_POST['scum_accept'],
                      'scum_reject_qty'=>$_POST['scum_reject_qty'],
                      'scum_remarks'=>$_POST['scum_remarks'],
                      'cracking_accept'=>$_POST['cracking_accept'],
                      'cracking_reject_qty'=>$_POST['cracking_reject_qty'],
                      'cracking_remarks'=>$_POST['cracking_remarks'],
                      'dark_background_accept'=>$_POST['dark_background_accept'],
                      'dark_background_reject_qty'=>$_POST['dark_background_reject_qty'],
                      'dark_background_remarks'=>$_POST['dark_background_remarks'],
                      'light_background_accept'=>$_POST['light_background_accept'],
                      'light_background_reject_qty'=>$_POST['light_background_reject_qty'],
                      'light_background_remarks'=>$_POST['light_background_remarks']
                  );

                  
                $id2 = $this->qc_model->insert('quality_inspection_machine_report_parameters',$data2);
                  if ($id2) {
                    redirect(base_url('all_orders/view_plane/'.$wo));             
                  }         
                }
                    
                  }


                  $sql="select work_orders.*,item.Description from work_orders inner join item on (item.id=work_orders.Item_Code) where work_orders.id=".$wo;


                  $this->data['job']=$this->qc_model->query_single_result($sql);

                    $this->data['title'] = 'Quality Inspection Machine Report';
                    $this->data['wo_no'] = $wo;          

                    $this->load->template('qc/quality_inspection_machine_report',$this->data);
               }
     public function Corrective_Action_Request($wo)
            {
              error_reporting(0);

              if ($_POST) {

                $data1=array(
    'wo_no'=>$_POST['wo_no'],
    'description'=>$_POST['description'],
    'type'=>implode(",",$_POST['type']),
    'client_name'=>$_POST['client_name'],
    'date_of_reporting'=>$_POST['date_of_reporting'],
    'source'=>implode(",",$_POST['source']),
    'process'=>implode(",",$_POST['process']),
    'priority'=>implode(",",$_POST['priority']),
    'description_of_non_conformity'=>$_POST['description_of_non_conformity'],
    'submit_assigned_to'=>$_POST['submit_assigned_to'],
    'submit_assigned_date'=>$_POST['submit_assigned_date'],
    'submit_respond_by'=>$_POST['submit_respond_by'],
    'completed_identified_cause'=>$_POST['completed_identified_cause'],
    'ca_taken_to_prevent_recurrence'=>$_POST['ca_taken_to_prevent_recurrence'],
    'date_action_completed'=>$_POST['date_action_completed'],
    'incharge'=>$_POST['incharge'],
    'return_effectiveness_verified_by'=>$_POST['return_effectiveness_verified_by'],
    'retrun_date'=>$_POST['retrun_date'],
    'return_result'=>$_POST['return_result'],
    'return_confirmed_by_manager_qa'=>$_POST['return_confirmed_by_manager_qa']

                );


                $id = $this->qc_model->insert('corrective_action_request',$data1);

            if ($id) {
                redirect(base_url('all_orders/view_plane/'.$_POST['wo_no']));             
              }   
              }


            


                $this->data['wo_no'] = $wo;
                $this->data['title'] = 'Corrective Action Request';

                $this->load->template('qc/Corrective_Action_Request',$this->data);
              
            }



        public function complain_assessment_form($wo)
        {
        if ($this->input->post()) {
            // echo "<pre>";
        // print_r($this->input->post());die();     
              $data=array(
                'wo_no'=>$_POST['wo_no'],
                'caf_no'=>$_POST['caf_no'],
                'date'=>$_POST['date'],
                'description'=>$_POST['description'],
                'complain'=>$_POST['complain'],
                'machine'=>$_POST['machine'],
                'name_of_resposible_workers'=>$_POST['name_of_resposible_workers'],
                'further_detail'=>$_POST['further_detail'],
                'qc_personal_name'=>$_POST['qc_personal_name'],
                'complain_reveiwed_name'=>$_POST['complain_reveiwed_name'],
                'complain_reveiwed_signature'=>$_POST['complain_reveiwed_signature'],
                'complain_reveiwed_comments'=>$_POST['complain_reveiwed_comments'],
                'approved_by_qc_qa'=>$_POST['approved_by_qc_qa'],
                'remarks'=>$_POST['remarks']

              );
            $id2 = $this->qc_model->insert('complain_assessment_form',$data);
            
                       
            if ($id2) {
                redirect(base_url('all_orders/view_plane/'.$wo));             }         }
                $this->data['title'] = 'Inprocess Inspection Pasting';
                $this->data['wo_no'] = $wo;          

                $this->load->template('qc/complain_assessment_form',$this->data);
                }


        public function non_comfirmity_report($wo)
        {
        if ($this->input->post()) {
            // echo "<pre>";
        // print_r($this->input->post());die();   
              $data=array(

              'wo_no'=>$_POST['wo_no'],
              'ncr_no'=>$_POST['ncr_no'],
              'name_of_assessor'=>$_POST['name_of_assessor'],
              'date_of_reporting'=>$_POST['date_of_reporting'],
              'concerned_depatment_person'=>$_POST['concerned_depatment_person'],
              'location'=>$_POST['location'],
              'non_coformance_category'=>$_POST['non_coformance_category'],
              'problem'=>$_POST['problem'],
              'm_r_nominee_sign'=>$_POST['m_r_nominee_sign'],
              'root_cause'=>$_POST['root_cause'],
              'corrective_action'=>$_POST['corrective_action'],
              'preventive_action'=>$_POST['preventive_action'],
              'date'=>$_POST['date'],
              'assessor_auditor'=>$_POST['assessor_auditor'],
              'comments'=>$_POST['comments'],
              'date_action_completed'=>$_POST['date_action_completed'],
              'confirmed_by'=>$_POST['confirmed_by']
              );
            $id2 = $this->qc_model->insert('non_comfirmity_report',$data);
            
                       
            if ($id2) {
                redirect(base_url('all_orders/view_plane/'.$wo));             }         }
                $this->data['title'] = 'Inprocess Inspection Pasting';
                $this->data['wo_no'] = $wo;          

                $this->load->template('qc/non_comfirmity_report',$this->data);
            }


        public function process_procedure($wo)
        {
          
          if ($this->input->post()) {


            $data1 = array(

        'wo_no'=>$_POST['wo_no'],
        'date'=>$_POST['date'],
        'po_no'=>$_POST['po_no'],
        'challan_number'=>$_POST['challan_number'],
        'supplier_name'=>$_POST['supplier_name'],
        'min_no'=>$_POST['min_no']
            );

            $id1 = $this->qc_model->insert('process_procedure',$data1);
            if ($id1) {
              for ($i=0; $i < count($_POST['sr_no']) ; $i++) { 
                

              $data2=array(
                'process_procedure_id'=>$id1,
                'sr_no'=>$_POST['sr_no'][$i],
                'item_description'=>$_POST['item_description'][$i],
                'unit'=>$_POST['unit'][$i],
                'qty_rec'=>$_POST['qty_rec'][$i],
                'qty_ok'=>$_POST['qty_ok'][$i],
                'qty_rej'=>$_POST['qty_rej'][$i]

              );
            $id2 = $this->qc_model->insert('process_procedure_item_desc',$data2);
            
            }

            }
                       
            if ($id2) {

                $data3=array(
  'product_release_id'=>$id1,
  'apperance'=>$_POST['apperance'],
  'grammage'=>$_POST['grammage'],
  'thickness'=>$_POST['thickness'],
  'moisture'=>$_POST['moisture'],
  'ph'=>$_POST['ph'],
  'grain_direction'=>$_POST['grain_direction'],
  'presence_of_insects'=>$_POST['presence_of_insects'],
  'oil_and_grease_stains'=>$_POST['oil_and_grease_stains'],
  'shade'=>$_POST['shade'],
  'strength'=>$_POST['strength'],
  'stick_ability'=>$_POST['stick_ability'],
  'miscibility'=>$_POST['miscibility'],
  'purity'=>$_POST['purity'],
  'remarks'=>$_POST['remarks']

                );
            $id3 = $this->qc_model->insert('process_procedure_remarks',$data3);
            if ($id3) {

                redirect(base_url('all_orders/view_plane/'.$wo));             
             }
              }      
            }
                $this->data['title'] = 'Process Procedure';
                $this->data['wo_no'] = $wo;          

                $this->load->template('qc/process_procedure',$this->data);
                
            }



        public function goods_receiving_notes($wo)
        {
        if ($this->input->post()) {
            // echo "<pre>";
        // print_r($this->input->post());die();   
              $data=array(

              'wo_no'=>$_POST['wo_no'],
              'grn_no'=>$_POST['grn_no'],
              'grn_date'=>$_POST['grn_date'],
              'supplier_name'=>$_POST['supplier_name'],
              'requisition_no'=>$_POST['requisition_no'],
              'po_no'=>$_POST['po_no'],
              'delivery_note_no'=>$_POST['delivery_note_no']
              );
            $id1 = $this->qc_model->insert('goods_receiving_notes',$data);
            
          if ($id1) {

              for ($i=0; $i < count($_POST['unit']) ; $i++) { 
              $data2=array(
               'goods_receiving_notes_id'=>$id1,
               'item_description'=>$_POST['item_description'][$i],
               'unit'=>$_POST['unit'][$i],
               'qty'=>$_POST['qty'][$i],
               'remarks'=>$_POST['remarks'][$i]  


           );
           $id2 = $this->qc_model->insert('goods_receiving_notes_item_desc',$data2);
            
            }


            if ($id2) {
                redirect(base_url('all_orders/view_plane/'.$wo));             }         }
              }
                $this->data['title'] = 'Inprocess Inspection Pasting';
                $this->data['wo_no'] = $wo;          

                $this->load->template('qc/goods_receiving_notes',$this->data);
            }

        public function material_inspection_note($wo)
        {
        if ($this->input->post()) {
            // echo "<pre>";
            // print_r($_POST);
            // die();   
              $data=array(
                'wo_no'=>$wo,
                'Supplier_Name' => $_POST['Supplier_Name'],
                'min_no' => $_POST['min_no'],
                'Challan_Number' => $_POST['Challan_Number'],
                'Appearance' => $_POST['Appearance'],
                'Grammage' => $_POST['Grammage'],
                'Thickness' => $_POST['Thickness'],
                'Moisture' => $_POST['Moisture'],
                'Grain_Direction' => $_POST['Grain_Direction'],
                'Presence_of_Insects' => $_POST['Presence_of_Insects'],
                'Oil_and_Grease_Stains' => $_POST['Oil_and_Grease_Stains'],
                'Shade' => $_POST['Shade'],
                'Strength' => $_POST['Strength'],
                'Stick_ability' => $_POST['Stick_ability'],
                'Miscibility' => $_POST['Miscibility'],
                'Purity' => $_POST['Purity'],
                'status' => $_POST['status'],
                'date' => date('Y-m-d'),
               
               );
              $id = $this->qc_model->insert('material_inspection_note',$data);
              for ($i=0; $i < count($_POST['s_no']); $i++) { 
                $data2=array(
                  'wo_no'=>$wo,
                  'material_inspection_note_id'=>$id,
                  's_no'=>$_POST['s_no'][$i],
                  'item_desc'=>$_POST['item_desc'][$i],
                  'unit'=>$_POST['unit'][$i],
                  'qty_rec'=>$_POST['qty_rec'][$i],
                  'qty_ok'=>$_POST['qty_ok'][$i],
                  'qty_rej'=>$_POST['qty_rej'][$i],
                );
                $id2 = $this->qc_model->insert('material_inspection_note_detail',$data2);
              } 

              redirect(base_url('all_orders/view_plane/'.$wo)); 
              }
                $this->data['get_detail'] = $this->qc_model->get_row_single('work_orders' ,array('id' => $wo));
                // print_r($this->data['get_detail']);
                // die();
                $this->data['title'] = 'Material Inspection Note';
                $this->data['wo_no'] = $wo;          
                $this->load->template('qc/material_inspection_note',$this->data);
            }


}