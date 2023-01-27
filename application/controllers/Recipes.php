<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

//require APPPATH . '/libraries/BaseController.php';


/**
 * Class : User (UserController)
 * User Class to control all user related operations.

 * @since : 15 November 2016
 */
class Recipes extends CI_Controller
{
    
    /**
     * This is default constructor of the class
     */
   
     public function __construct()
    {
        parent::__construct();
        $this->load->model('admin/blog_model');       

     }



    public function index()
  {

    $data = array();

    $where = array();
    $where['table'] = 'z_blog';
    $where['status'] = '1';
    $data['blog_dtl'] = $this->blog_model->findDynamic($where);

    $data["file"]="recipe";
    $data["title"]="MyFoodAndSons : Recipe";
    $this->load->view('templae',$data);
  }
    
}

?>