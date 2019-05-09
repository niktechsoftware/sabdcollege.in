<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$data['page']='home';
        $this->load->view('all',$data);
	}
	public function about()
	{
		$data['page']='aboutus';
        $this->load->view('all',$data);
	}
	public function courselisting()
	{
		$data['page']='course';
        $this->load->view('all',$data);
	}
	public function mbamarketing()
	{
		$data['page']='marketing';
        $this->load->view('all',$data);
	}
	public function mbageneral()
	{
		$data['page']='general';
        $this->load->view('all',$data);
	}
	public function mbaoperations()
	{
		$data['page']='operations';
        $this->load->view('all',$data);
	}
	public function gallery()
	{
		$data['page']='gallerys';
        $this->load->view('all',$data);
	}
	// public function register()
	// {
	// 	$data['page']='registers';
    //     $this->load->view('all',$data);
	// }
	// public function applyonline()
	// {
	// 	$data['page']='online';
    //     $this->load->view('all',$data);
	// }
	// public function blog()
	// {
	// 	$data['page']='blogs';
    //     $this->load->view('all',$data);
	// }
	// public function faq()
	// {
	// 	$data['page']='faqs';
    //     $this->load->view('all',$data);
	// }
	public function news()
	{
		$data['page']='newss';
        $this->load->view('all',$data);
	}
	public function testimonials()
	{
		$data['page']='testimonial';
        $this->load->view('all',$data);
	}
	public function faq1()
	{
		$data['page']='faqs1';
        $this->load->view('all',$data);
	}
	public function faq2()
	{
		$data['page']='faqs2';
        $this->load->view('all',$data);
	}
	public function comingsoon()
	{
		$data['page']='soon';
        $this->load->view('all',$data);
	}
	public function terms()
	{
		$data['page']='term';
        $this->load->view('all',$data);
	}
	public function GenericUI()
	{
		$data['page']='generic';
        $this->load->view('all',$data);
	}
	public function contact()
	{
		$data['page']='contacts';
        $this->load->view('all',$data);
	}
}




