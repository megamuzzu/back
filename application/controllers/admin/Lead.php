<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';

/**
 * Class : User (UserController)
 * User Class to control all user related operations.

 * @since : 15 November 2016
 */
class Lead extends BaseController
{
    /**
     * This is default constructor of the class
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin/dashboard_model');
    }

    /**
     * Index Page for this controller.
     */
    public function index()
    {
        $this->isLoggedIn();
        $this->global['pageTitle'] = 'MyFoodAndSons : Page Content';
        $this->loadViews("admin/lead/list", $this->global, NULL , NULL);
        
    }

    // Add New 
    public function addnew()
    {
    
        $this->isLoggedIn();
        $this->global['pageTitle'] = 'MyFoodAndSons : Add New Page Content';
        $this->loadViews("admin/lead/addnew", $this->global, NULL , NULL);
        
    } 

    // Insert Member *************************************************************
    public function insertnow()
    {
        $this->isLoggedIn();
		 $form_data  = $this->input->post();
		 
        $this->load->library('form_validation');                 
        $this->form_validation->set_rules('customer_name','Customer name','required');
        $this->form_validation->set_rules('email','Email','required');
        
        
        //form data 
        $form_data  = $this->input->post();
        if($this->form_validation->run() == FALSE)
        {
            $this->addnew();
        }
        else
        {   
                $insertData['customer_name'] = $form_data['customer_name'];
                $insertData['phone'] = $form_data['phone'];
                $insertData['email'] = $form_data['email'];
                $insertData['amount'] = $form_data['amount'];
                $insertData['issue'] = $form_data['issue'];
                $insertData['plan']       = $form_data['plan'];
                $insertData['agent']       = $form_data['agent'];
                $insertData['remote_tool']       = $form_data['remote_tool'];
                $insertData['remote_id']       = $form_data['remote_id'];
                $insertData['remote_password']       = $form_data['remote_password'];
                $insertData['special_comments']       = $form_data['special_comments'];
                $insertData['status']       = $form_data['status'];
                $insertData['date_at']      = $form_data['date_at'];


            $result = $this->dashboard_model->save($insertData);
            if($result > 0)
            {
                $this->session->set_flashdata('success', 'Lead Successfully Added');
            }
            else
            { 
                $this->session->set_flashdata('error', 'Lead Addition failed');
            }
            redirect('admin/lead/addnew');
          }  
        
    }


    // Member list
    public function ajax_list()
    {
        $list = $this->dashboard_model->get_datatables();
        
       
        $data = array();
        $no =(isset($_POST['start']))?$_POST['start']:'';
        foreach ($list as $currentObj) {

            $filename = (isset($currentObj->image) && $currentObj->image !=='') ? ($currentObj->image) : ("");

            $selected=$currentObj->status==1?'selected':'';
            $notselected=$currentObj->status==-0?'selected':'';
           
            $option =  '<select class ="form-control statuschangebtn" name="status" data-id="'.$currentObj->id.'">
            <option value="1" '.$selected.'>Active</option>
            <option value="0" '.$notselected.'>Inactive</option>`
            </select>';
            $selected="";
            $notselected="";




            $temp_date = $currentObj->date_at;
            $date_at = date("d-m-Y", strtotime($temp_date));
            $no++;
            $row = array();
            $row[] = $date_at;
            $row[] = $currentObj->customer_name;
            $row[] = $currentObj->phone;
            $row[] = $currentObj->email;
            $row[] = $currentObj->amount;
            $row[] = $currentObj->issue;
            $row[] = $currentObj->plan;
            $row[] = $currentObj->agent;
            if($this->session->userdata('role') == 1){ 
            $row[] = '<a class="btn btn-sm btn-info" href="'.base_url().'admin/lead/edit/'.$currentObj->id.'">Edit</a>
            <a class="btn btn-sm btn-danger deletebtn" href="#" data-userid="'.$currentObj->id.'">Delete</a>';
            }
            $row[] = '<a class="btn btn-sm btn-info" href="'.base_url().'admin/lead/view/'.$currentObj->id.'">View Data</a>';
            $data[] = $row;
        }
 
        $output = array(
                        "draw" => (isset($_POST['draw']))?$_POST['draw']:'',
                        "recordsTotal" => $this->dashboard_model->count_all(),
                        "recordsFiltered" => $this->dashboard_model->count_filtered(),
                        "data" => $data,
                );
        //output to json format
        echo json_encode($output);
    }



     // status change funcstions
        public function statusChange(){


        $this->isLoggedIn();

        $form_data  = $this->input->post();
      
        //form data 
        $insertData['status'] = $form_data['status'];
        $insertData['id'] = $form_data['id'];
        $result = $this->dashboard_model->save($insertData);
        return $result;  
        

        }



    // Edit
    // Add New 
    public function edit($id = NULL)
    {
        
        //exit;
        $this->isLoggedIn();
        if($id == null)
        {
            redirect('admin/lead');
        }

        
        $data['edit_data'] = $this->dashboard_model->find($id);
        $this->global['pageTitle'] = 'MyFoodAndSons : Edit Blog Content';
        $this->loadViews("admin/lead/edit", $this->global, $data , NULL);
        
        
    } 


     public function view($id = NULL)
    {
        
        //exit;
        $this->isLoggedIn();
        if($id == null)
        {
            redirect('admin/lead');
        }

        
        $data['edit_data'] = $this->dashboard_model->find($id);
        $this->global['pageTitle'] = 'MyFoodAndSons : Edit Blog Content';
        $this->loadViews("admin/lead/view", $this->global, $data , NULL);
        
        
    } 

    // Update Members *************************************************************
    public function update()
    {
        $this->isLoggedIn();
        $this->load->library('form_validation');                 
        $this->form_validation->set_rules('customer_name','Customer Name','required');
		
        
        //form data 
        $form_data  = $this->input->post();
        if($this->form_validation->run() == FALSE)
        {
                $this->edit($form_data['id']);
        }
        else
        {   

                
            $insertData['id'] = $form_data['id'];
            $insertData['customer_name'] = $form_data['customer_name'];
            $insertData['phone'] = $form_data['phone'];
            $insertData['email'] = $form_data['email'];
            $insertData['amount'] = $form_data['amount'];
            $insertData['issue'] = $form_data['issue'];
            $insertData['plan']       = $form_data['plan'];
            $insertData['agent']       = $form_data['agent'];
            $insertData['remote_tool']       = $form_data['remote_tool'];
            $insertData['remote_id']       = $form_data['remote_id'];
            $insertData['remote_password']       = $form_data['remote_password'];
            $insertData['special_comments']       = $form_data['special_comments'];
            $insertData['status']       = $form_data['status'];
            $insertData['date_at']      = $form_data['date_at'];

            $result = $this->dashboard_model->save($insertData);

            if($result > 0)
            {
                $this->session->set_flashdata('success', 'Lead successfully Updated');
            }
            else
            { 
                $this->session->set_flashdata('error', 'Lead Updation failed');
            }
            redirect('admin/lead/edit/'.$insertData['id']);
          }  
        
    }



    public function check_slug()
    { 
        
         $form_data  = $this->input->post();

         if(isset($form_data['slug_url']))
         {
                 
                $slug_url = strtolower($form_data['slug_url']);

                 $where  = array();
                 $where['slug_url']  = $slug_url ;
                 $where['status']  = 1 ;
                 if(isset($form_data['id']))
                 {
                    $where['id !=']  = $form_data['id'] ;   
                 }
                 $where['status']  = 1 ;
                 $result  = $this->dashboard_model->findDynamic($where);

                  

             if(count($result) > 0)
            {
                echo 'slug_exist';
            }else
            {
                 echo 'slug_available';
            }
         } 


    }




    // Delete Member *****************************************************************
      function delete()
    {
        $this->isLoggedIn();
        $delId = $this->input->post('id');  
        $result = $this->dashboard_model->delete($delId);           
        if ($result > 0) { echo(json_encode(array('status'=>TRUE))); }
        else { echo(json_encode(array('status'=>FALSE))); }
    }
    
    
}

?>