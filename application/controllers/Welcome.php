<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {


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
		$where['web_cont'] = '1';
		$data['blog_dtl'] = $this->blog_model->findDynamic($where);

		$where = array();
		$where['table'] = 'z_blog';
		$where['status'] = '1';
		$where['web_cont'] = '2';
		$data['blog_dtl_pkg'] = $this->blog_model->findDynamic($where);


		$data["file"]="index";
		$data["title"]="MyFoodAndSons";
		$this->load->view('template',$data);
	}

	public function about()
	{
		$data = array();

		$data["file"]="about-us";
		$data["title"]="MyFoodAndSons : About Us";
		$this->load->view('template',$data);
	}




	 public function recipedtl($slugs)
  {
      
      $data = array();
      
      $where = array();
      $where['slug_url'] = $slugs;
      $returnData = $this->blog_model->findDynamic($where);
      $returnData = $returnData[0];
      if(!empty($returnData))
        {

        }else{
          redirect(base_url()."index");
        }
      $data["blogs_details"]= $returnData;

      $data["file"]="recipe-detail";
		$data["title"]="MyFoodAndSons : Recipe";
		$this->load->view('template',$data);

    } 


 

	public function contact()
	{
		$data = array();

		$data["file"]="contact-us";
		$data["title"]="MyFoodAndSons : Contact Us";
		$this->load->view('template',$data);
	}

	public function privacypolicy()
	{
		$data = array();

		$data["file"]="privacy-policy";
		$data["title"]="MyFoodAndSons : Privacy Policy";
		$this->load->view('template',$data);
	}

	public function termsandcondition()
	{
		$data = array();

		$data["file"]="terms";
		$data["title"]="MyFoodAndSons : Terms And Condition";
		$this->load->view('template',$data);
	}

}
