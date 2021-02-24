
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class main extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *	
 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('welcome_message');
	}

	public function userreg()
	{
		$this->load->view('userreg');
	}

	public function value_insert()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules("fname","firstname",'required');
		$this->form_validation->set_rules("lname","lastname",'required');
		$this->form_validation->set_rules("uname","username",'required');
		$this->form_validation->set_rules("pass","password",'required');
		$this->form_validation->set_rules("mob","mobile",'required');
		$this->form_validation->set_rules("email","email",'required');

		if($this->form_validation->run())
		{	
			$this->load->model('mainmodel');
			$pass=$this->input->post("pass");
			$encpass=$this->mainmodel->encpass_fn($pass);

			$a=array("fname"=>$this->input->post("fname"),
				"lname"=>$this->input->post("lname"),
				"uname"=>$this->input->post("uname"),
				"mobile"=>$this->input->post("mob"),
				"email"=>$this->input->post("email"),
				"password"=>$encpass,"user_type"=>'0');

				$this->mainmodel->regist($a);
				redirect(base_url().'main/userreg');
		}

	}
//insertion ends

	

//view


	public function userlist()
	{
			
	$this->load->model('mainmodel');
	$data['n']=$this->mainmodel->user_status();
	$this->load->view('userlist',$data);
	}

	public function approve_item()
	{
		$this->load->model('mainmodel');
		$id=$this->uri->segment(3);
		$this->mainmodel->approve($id);
		redirect('main/userlist','refresh');
		
	}

	public function reject_item()
	{
		$this->load-> model('mainmodel');
		$id=$this->uri->segment(3);
		$this->mainmodel->reject($id);
		redirect('main/userlist','refresh');

	}
	//approve reject ends

	/*LOGIN*/

	public function userlogin()
	{
		$this->load->view('userlogin');

	}
	public function login_fn()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules("uname","username",'required');
		$this->form_validation->set_rules("pass","password",'required');

		if($this->form_validation->run())
		{
			$this->load->model('mainmodel');
			$uname=$this->input->post("uname");
			$pass=$this->input->post("pass");
			$rslt=$this->mainmodel->select_userpass($uname,$pass);

			if($rslt)
			{
				$id=$this->mainmodel->get_user_id($uname);
				$user=$this	->mainmodel->get_user($id);
				$this->load->library(array('session'));
				$this->session->set_userdata(array('id'=>(int)$user->id,'status'=>$user->status,'usertype'=>$user->user_type));

				if($_SESSION['status']=='1' && $_SESSION['usertype']=='1')
					{
						redirect(base_url().'main/userlist');
					}
				elseif($_SESSION['status']=='1'&& $_SESSION['usertype']=='0')
					{
						redirect(base_url().'main/userreg');
					}
					else{
						echo "waiting for approval";	
					}
			}	
		else{
				echo "ivalid user";	
			}	
		} 
		else
		{
			redirect('main/userlogin','refresh');
		}
	}



}
