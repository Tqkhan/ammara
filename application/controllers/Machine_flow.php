<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Machine_flow extends MY_Controller {
	
	public function __construct()
    {
        parent::__construct();
        $this->load->model('machine_flow_model');
        $this->user_type = $this->session->userdata('user_type');
        $this->id = $this->session->userdata('user_id');
    }

    public function start($flow_id)
    {
        $id = $this->machine_flow_model->insert('order_flow_start',array('flow_id'=>$flow_id));
        return $id;
    }

    public function complete($flow_id)
    {
        $id = $this->machine_flow_model->insert('order_flow_submission',array('flow_id'=>$flow_id));
        return $id;
    }

    public function printing($plane_id,$flow_id)
    {
        if ($this->input->post()) {
            $data = $this->input->post();
            $data['user_id'] = $this->session->userdata('user_id');
            $id = $this->machine_flow_model->insert('printing',$data);
            if ($id) {
                $id = $this->start($flow_id);
                redirect('printing_plane');
            }
        }
        $this->data['title'] = 'Printing Machine';
        $this->data['job'] = $this->machine_flow_model->get_job($plane_id,$flow_id);
        $this->load->template('machine_flow/printing_machine',$this->data);
    }

    public function printing_complete($plane_id,$flow_id)
    {
        if ($this->input->post()) {
            $data = $this->input->post();
            $start = array(
                'operator' => $data['operator'],
                'assistant' => $data['assistant'],
                'process' => $data['process'],
                'opening' => $data['opening'],
                'closing' => $data['closing'],
                'output' => $data['output'],
                'waste' => $data['waste'] 
            );
            unset($data['operator']);
            unset($data['assistant']);
            unset($data['process']);
            unset($data['opening']);
            unset($data['closing']);
            unset($data['output']);
            unset($data['waste']);
            $this->machine_flow_model->update('printing',$start,array('plane_id'=>$plane_id,'flow_id'=>$flow_id));

            
            $code = $data['code'];
            $from = $data['from'];
            $to = $data['to'];
            $hours = $data['hours'];
            $counter = $data['counter'];
            $remarks = $data['remarks'];
            unset($data['code']);
            unset($data['from']);
            unset($data['to']);
            unset($data['hours']);
            unset($data['counter']);
            unset($data['remarks']);
            //echo '<pre>';print_r($data);die;
            $data['user_id'] = $this->session->userdata('user_id');
            $id = $this->machine_flow_model->insert('printing_complete',$data);
            if ($id) {
                for ($i=0; $i < sizeof($code); $i++) { 
                    $data = array(
                        'code'=>$code[$i],
                        'froms'=>$from[$i],
                        'tos'=>$to[$i],
                        'hours'=>$hours[$i],
                        'counter'=>$counter[$i],
                        'remarks'=>$remarks[$i],
                        'printing_id'=>$id,
                    );
                    $this->machine_flow_model->insert('printing_hourse',$data);
                }
                $id = $this->complete($flow_id);
                //redirect('printing_plane');
                $wo_id = $this->machine_flow_model->get_wo_id_by_flow($flow_id)['id'];
                redirect('requisition/pending_quantity/'.$wo_id.'/Printing?redirect='.base_url('printing_plane'));
            }
        }
        $this->data['title'] = 'Printing Machine';
        $this->data['job'] = $this->machine_flow_model->get_job($plane_id,$flow_id);
        $this->data['detail'] = $this->machine_flow_model->get_row_single('printing',array('plane_id'=>$plane_id,'flow_id'=>$flow_id));
        $this->load->template('machine_flow/printing_complete',$this->data);
    }

    public function store_start($plane_id,$flow_id)
    {
        $id = $this->start($flow_id);
        redirect('store');
    }

    public function store_complete($plane_id,$flow_id)
    {
        $id = $this->complete($flow_id);
        //redirect('store');
        $wo_id = $this->machine_flow_model->get_wo_id_by_flow($flow_id)['id'];
        redirect('requisition/pending_quantity/'.$wo_id.'/Store?redirect='.base_url('store'));
    }

    public function die_cutting($plane_id,$flow_id)
    {
        if ($this->input->post()) {
            $data = $this->input->post();
            //echo '<pre>';print_r($data);die;
            $data['user_id'] = $this->session->userdata('user_id');
            $id = $this->machine_flow_model->insert('die_cutting',$data);
            if ($id) {
                $id = $this->start($flow_id);
                redirect('die_cutting');
            }
        }
        $this->data['title'] = 'Die Cutting Machine';
        $this->data['job'] = $this->machine_flow_model->get_job($plane_id,$flow_id);
        $this->load->template('machine_flow/die_cutting',$this->data);
    }

    public function die_cutting_complete($plane_id,$flow_id)
    {
        if ($this->input->post()) {
            $data = $this->input->post();
            $start = array(
                'operator' => $data['operator'],
                'assistant' => $data['assistant'],
                'process' => $data['process'],
                'opening' => $data['opening'],
                'closing' => $data['closing'],
                'output' => $data['output'],
                'waste' => $data['waste'] 
            );
            unset($data['operator']);
            unset($data['assistant']);
            unset($data['process']);
            unset($data['opening']);
            unset($data['closing']);
            unset($data['output']);
            unset($data['waste']);
            $this->machine_flow_model->update('die_cutting',$start,array('plane_id'=>$plane_id,'flow_id'=>$flow_id));

            $code = $data['code'];
            $from = $data['from'];
            $to = $data['to'];
            $hours = $data['hours'];
            $counter = $data['counter'];
            $remarks = $data['remarks'];
            unset($data['code']);
            unset($data['from']);
            unset($data['to']);
            unset($data['hours']);
            unset($data['counter']);
            unset($data['remarks']);
            //echo '<pre>';print_r($data);die;
            $data['user_id'] = $this->session->userdata('user_id');
            $id = $this->machine_flow_model->insert('die_cutting_complete',$data);
            if ($id) {
                for ($i=0; $i < sizeof($code); $i++) { 
                    $data = array(
                        'code'=>$code[$i],
                        'froms'=>$from[$i],
                        'tos'=>$to[$i],
                        'hours'=>$hours[$i],
                        'counter'=>$counter[$i],
                        'remarks'=>$remarks[$i],
                        'die_cutting_id'=>$id,
                    );
                    $this->machine_flow_model->insert('die_cutting_hourse',$data);
                }
                $id = $this->complete($flow_id);
                //redirect('die_cutting');
                $wo_id = $this->machine_flow_model->get_wo_id_by_flow($flow_id)['id'];
                redirect('requisition/pending_quantity/'.$wo_id.'/Die_Cutting?redirect='.base_url('die_cutting'));
            }
        }
        $this->data['title'] = 'Die Cutting Machine';
        $this->data['job'] = $this->machine_flow_model->get_job($plane_id,$flow_id);
        $this->data['detail'] = $this->machine_flow_model->get_row_single('die_cutting',array('plane_id'=>$plane_id,'flow_id'=>$flow_id));
        $this->load->template('machine_flow/die_cutting_complete',$this->data);
    }
    
    // public function die_cutting_complete($plane_id,$flow_id)
    // {
    //     $id = $this->complete($flow_id);
    //     redirect('die_cutting');
    // }

    public function plate_making_start($plane_id,$flow_id)
    {
        $id = $this->start($flow_id);
        redirect('plate_making');
    }

    public function plate_making_complete($plane_id,$flow_id)
    {
        $id = $this->complete($flow_id);
        //redirect('plate_making');
        $wo_id = $this->machine_flow_model->get_wo_id_by_flow($flow_id)['id'];
        redirect('requisition/pending_quantity/'.$wo_id.'/Plate_Making?redirect='.base_url('plate_making'));
    }

    public function label_cutting_start($plane_id,$flow_id)
    {
        // $id = $this->start($flow_id);
        // redirect('label_cutting');

            if ($this->input->post()) {
                unset($_POST['id']);
          $data = $this->input->post();
          $data['plane_id']=$plane_id;
          $data['flow_id']=$flow_id;

            //echo '<pre>';print_r($data);die;
            $data['user_id'] = $this->session->userdata('user_id');
            $id = $this->machine_flow_model->insert('label_cutting',$data);
            if ($id) {
         $id = $this->start($flow_id);
        redirect('label_cutting');
       
            }
        }
        $this->data['title'] = 'Label';
        $this->data['job'] = $this->machine_flow_model->get_job($plane_id,$flow_id);
        $this->load->template('machine_flow/label',$this->data);

    }

    public function label_cutting_complete($plane_id,$flow_id)
    {
        $id = $this->complete($flow_id);
        //redirect('label_cutting');
        $wo_id = $this->machine_flow_model->get_wo_id_by_flow($flow_id)['id'];
        redirect('requisition/pending_quantity/'.$wo_id.'/Label_Cutting?redirect='.base_url('label_cutting'));
    }

    public function stripping_report_start($plane_id,$flow_id)
    {
        if ($this->input->post()) {
            $data = $this->input->post();
            //echo '<pre>';print_r($data);die;
            $data['user_id'] = $this->session->userdata('user_id');
            $id = $this->machine_flow_model->insert('stripping_report',$data);
            if ($id) {
                $id = $this->start($flow_id);
                redirect('stripping_report');
            }
        }
        $this->data['title'] = 'Stripping Report';
        $this->data['job'] = $this->machine_flow_model->get_job($plane_id,$flow_id);
        $this->load->template('machine_flow/stripping_report',$this->data);
    }

    public function stripping_report_complete($plane_id,$flow_id)
    {
        $id = $this->complete($flow_id);
        //redirect('leaflet_cutting');
        $wo_id = $this->machine_flow_model->get_wo_id_by_flow($flow_id)['id'];
        redirect('requisition/pending_quantity/'.$wo_id.'/Stripping_report?redirect='.base_url('stripping_report'));
    }

    public function flexo_label_machine_start($plane_id,$flow_id)
    {
       error_reporting(0);
        if ($this->input->post()) {


            $data1 = array(

                    'plane_id'=>$plane_id,
                    'flow_id'=>$flow_id,
                    'date'=>$_POST['date'],
                    'shift'=>$_POST['shift'],
                    'wo_no'=>$_POST['wo_no'],
                    'job_name'=>$_POST['job_name'],
                    'machine'=>$_POST['machine'],
                    'Planned_qty'=>$_POST['Planned_qty'],
                    'operator'=>$_POST['operator'],
                    'colors'=>$_POST['colors'],
                    'process'=>$_POST['process'],
                    'job_opening'=>$_POST['job_opening'],
                    'job_closing'=>$_POST['job_closing'],
                    'output'=>$_POST['output'],
                    'waste'=>$_POST['waste'],
                    'job_completed'=>$_POST['job_completed'],
                    'make_ready'=>$_POST['make_ready'],
                    'user_id'=>$this->session->userdata('user_id')
            );

            $id1 = $this->machine_flow_model->insert('flexo_label_machine',$data1);
            if ($id1) {

                $data2=array(
  'feeder_set'=>$_POST['feeder_set'],
  'delivery_set'=>$_POST['delivery_set'],
  'rotary_set'=>$_POST['rotary_set'],
  'cylinder_set'=>$_POST['cylinder_set'],
  'impression_set'=>$_POST['impression_set'],
  'plate_set'=>$_POST['plate_set'],
  'doctor_blade_cleaning'=>$_POST['doctor_blade_cleaning'],
  'flexo_id'=>$id1,
  'user_id'=>$this->session->userdata('user_id'),

                );

            $id2 = $this->machine_flow_model->insert('flexo_check_list',$data2);

            if ($id2) {
                for ($i=0; $i < count($_POST['code']) ; $i++) { 
                    $data3=array(

                          'flexo_id'=>$id1,
                          'code'=>$_POST['code'][$i],
                          'froms'=>$_POST['froms'][$i],
                          'tos'=>$_POST['tos'][$i],
                          'hours'=>$_POST['hours'][$i],
                          'counter'=>$_POST['counter'][$i],
                          'remarks'=>$_POST['remarks'][$i]
                    );
            $id2 = $this->machine_flow_model->insert('flexo_label_machine_hourse',$data3);
                }

                if ($id2) {
                 $id2 = $this->start($flow_id);
                 redirect('flexo_label_machine');
                }
            }

                // $id = $this->start($flow_id);
                // redirect('stripping_report');
            }

         
            }
        

        $this->data['title'] = 'Flexo Label Machine';
        $this->data['job'] = $this->machine_flow_model->get_job($plane_id,$flow_id);
        // print_r($this->data['job']);die();
        $this->load->template('machine_flow/flexo_label_machine',$this->data);
    }


    public function flexo_label_machine_complete($plane_id,$flow_id)
    {
        $id = $this->complete($flow_id);
        //redirect('leaflet_cutting');
        $wo_id = $this->machine_flow_model->get_wo_id_by_flow($flow_id)['id'];
        redirect('requisition/pending_quantity/'.$wo_id.'/flexo_label_machine?redirect='.base_url('flexo_label_machine'));
    }

    public function leaflet_cutting($plane_id,$flow_id)
    {
        if ($this->input->post()) {
            $data = $this->input->post();
            //echo '<pre>';print_r($data);die;
            $data['user_id'] = $this->session->userdata('user_id');
            $id = $this->machine_flow_model->insert('leaflet_cutting',$data);
            if ($id) {
                $id = $this->start($flow_id);
                redirect('leaflet_cutting');
            }
        }
        $this->data['title'] = 'Leaflet Cutting';
        $this->data['job'] = $this->machine_flow_model->get_job($plane_id,$flow_id);
        $this->load->template('machine_flow/leaflet_cutting',$this->data);
    }

    public function leaflet_cutting_complete($plane_id,$flow_id)
    {
        $id = $this->complete($flow_id);
        //redirect('leaflet_cutting');
        $wo_id = $this->machine_flow_model->get_wo_id_by_flow($flow_id)['id'];
        redirect('requisition/pending_quantity/'.$wo_id.'/Leaflet_Cutting?redirect='.base_url('leaflet_cutting'));
    }

    public function film_making_start($plane_id,$flow_id)
    {
        $id = $this->start($flow_id);
        redirect('film_making');
    }

    public function film_making_complete($plane_id,$flow_id)
    {
        $id = $this->complete($flow_id);
        //redirect('film_making');
        $wo_id = $this->machine_flow_model->get_wo_id_by_flow($flow_id)['id'];
        redirect('requisition/pending_quantity/'.$wo_id.'/Film_Making?redirect='.base_url('film_making'));
    }

    public function packing_start($plane_id,$flow_id)
    {
        $id = $this->start($flow_id);
        redirect('packing');
    }

    public function packing_complete($plane_id,$flow_id)
    {
        $id = $this->complete($flow_id);
        //redirect('packing');
        $wo_id = $this->machine_flow_model->get_wo_id_by_flow($flow_id)['id'];
        redirect('requisition/pending_quantity/'.$wo_id.'/Packing?redirect='.base_url('packing'));
    }

    public function sorting_start($plane_id,$flow_id)
    {

            if ($this->input->post()) {
                unset($_POST['id']);
          $data = $this->input->post();
          $data['plane_id']=$plane_id;
          $data['flow_id']=$flow_id;

            //echo '<pre>';print_r($data);die;
            $data['user_id'] = $this->session->userdata('user_id');
            $id = $this->machine_flow_model->insert('sorting',$data);
            if ($id) {
         $id = $this->start($flow_id);
        redirect('sorting');
       
            }
        }
        $this->data['title'] = 'Sorting';
        $this->data['job'] = $this->machine_flow_model->get_job($plane_id,$flow_id);
        $this->load->template('machine_flow/sorting',$this->data);
    }

    public function sorting_complete($plane_id,$flow_id)
    {
        $id = $this->complete($flow_id);
        //redirect('sorting');
        $wo_id = $this->machine_flow_model->get_wo_id_by_flow($flow_id)['id'];
        redirect('requisition/pending_quantity/'.$wo_id.'/Sorting?redirect='.base_url('sorting'));
    }

    public function cutting($plane_id,$flow_id)
    {
        if ($this->input->post()) {
            $data = $this->input->post();
            //echo '<pre>';print_r($data);die;
            $data['user_id'] = $this->session->userdata('user_id');
            $id = $this->machine_flow_model->insert('cutting',$data);
            if ($id) {
                $id = $this->start($flow_id);
                redirect('cutting');
            }
        }
        $this->data['title'] = 'Cutting';
        $this->data['job'] = $this->machine_flow_model->get_job($plane_id,$flow_id);
        $this->load->template('machine_flow/cutting',$this->data);
    }

    public function cutting_complete($plane_id,$flow_id)
    {
        $id = $this->complete($flow_id);
        //redirect('cutting');
        $wo_id = $this->machine_flow_model->get_wo_id_by_flow($flow_id)['id'];
        redirect('requisition/pending_quantity/'.$wo_id.'/Cutting?redirect='.base_url('cutting'));
    }

    public function folding_start($plane_id,$flow_id)
    {
        $id = $this->start($flow_id);
        redirect('folding');
    }

    public function folding_complete($plane_id,$flow_id)
    {
        $id = $this->complete($flow_id);
        //redirect('folding');
        $wo_id = $this->machine_flow_model->get_wo_id_by_flow($flow_id)['id'];
        redirect('requisition/pending_quantity/'.$wo_id.'/Folding?redirect='.base_url('folding'));
    }

    public function uv_printing_start($plane_id,$flow_id)
    {
        $id = $this->start($flow_id);
        redirect('uv_printing');
    }

    public function uv_printing_complete($plane_id,$flow_id)
    {
        $id = $this->complete($flow_id);
        //redirect('uv_printing');
        $wo_id = $this->machine_flow_model->get_wo_id_by_flow($flow_id)['id'];
        redirect('requisition/pending_quantity/'.$wo_id.'/Uv_Printing?redirect='.base_url('uv_printing'));
    }

    public function pasting($plane_id,$flow_id)
    {
        if ($this->input->post()) {
            $data = $this->input->post();
            //echo '<pre>';print_r($data);die;
            $data['user_id'] = $this->session->userdata('user_id');
            $id = $this->machine_flow_model->insert('pasting',$data);
            if ($id) {
                $id = $this->start($flow_id);
                redirect('pasting');
            }
        }
        $this->data['title'] = 'Printing Machine';
        $this->data['job'] = $this->machine_flow_model->get_job($plane_id,$flow_id);
        $this->load->template('machine_flow/pasting',$this->data);
    }

    public function pasting_complete($plane_id,$flow_id)
    {
        if ($this->input->post()) {
            $data = $this->input->post();
            $start = array(
                'operator' => $data['operator'], 
                'assistant' => $data['assistant'], 
                'opening' => $data['opening'], 
                'closing' => $data['closing'], 
                'output' => $data['output'], 
                'waste' => $data['waste'], 
                'carton' => $data['carton'], 
                'qty' => $data['qty'], 
                'weight' => $data['weight']
            );
            unset($data['operator']);
            unset($data['assistant']);
            unset($data['opening']);
            unset($data['closing']);
            unset($data['output']);
            unset($data['waste']);
            unset($data['carton']);
            unset($data['qty']);
            unset($data['weight']);
            $this->machine_flow_model->update('pasting',$start,array('plane_id'=>$plane_id,'flow_id'=>$flow_id));


            $code = $data['code'];
            $from = $data['from'];
            $to = $data['to'];
            $hours = $data['hours'];
            $counter = $data['counter'];
            $remarks = $data['remarks'];
            unset($data['code']);
            unset($data['from']);
            unset($data['to']);
            unset($data['hours']);
            unset($data['counter']);
            unset($data['remarks']);
            //echo '<pre>';print_r($data);die;
            $data['user_id'] = $this->session->userdata('user_id');
            $id = $this->machine_flow_model->insert('pasting_complete',$data);
            if ($id) {
                for ($i=0; $i < sizeof($code); $i++) { 
                    $data = array(
                        'code'=>$code[$i],
                        'froms'=>$from[$i],
                        'tos'=>$to[$i],
                        'hours'=>$hours[$i],
                        'counter'=>$counter[$i],
                        'remarks'=>$remarks[$i],
                        'pasting_id'=>$id,
                    );
                    $this->machine_flow_model->insert('pasting_hourse',$data);
                }
                $id = $this->complete($flow_id);
                //redirect('pasting');
                $wo_id = $this->machine_flow_model->get_wo_id_by_flow($flow_id)['id'];
                redirect('requisition/pending_quantity/'.$wo_id.'/Pasting?redirect='.base_url('pasting'));
            }
        }
        $this->data['title'] = 'Pasting Machine';
        $this->data['job'] = $this->machine_flow_model->get_job($plane_id,$flow_id);
        $this->data['detail'] = $this->machine_flow_model->get_row_single('pasting',array('plane_id'=>$plane_id,'flow_id'=>$flow_id));
        $this->load->template('machine_flow/pasting_complete',$this->data);
    }

    public function dispatch_start($plane_id,$flow_id)
    {
        $id = $this->start($flow_id);
        redirect('dispatch');
    }

    public function dispatch_complete($plane_id,$flow_id)
    {
        $id = $this->complete($flow_id);
        redirect('dispatch');
    }
}