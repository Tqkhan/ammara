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
            // echo "<pre>";
        // print_r($this->input->post());die();   
              $data=array(

              'wo_no'=>$_POST['wo_no'],
              'ncr_no'=>$_POST['ncr_no'],
              'name_of_assessor'=>$_POST['name_of_assessor'],
              'date_of_reporting'=>$_POST['date_of_reporting'],
              'concerned_depatment_person'=>$_POST['concerned_depatment_person'],
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
            $id2 = $this->qc_model->insert('process_procedure',$data);
            
                       
            if ($id2) {
                redirect(base_url('all_orders/view_plane/'.$wo));             }         }
                $this->data['title'] = 'Process Procedure';
                $this->data['wo_no'] = $wo;          

                $this->load->template('qc/process_procedure',$this->data);
                }

}