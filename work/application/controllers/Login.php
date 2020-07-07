<?php 
/**
 * 
 */
class Login extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->initial();
	}
	public function initial()
	{
		$this->load->model('User_model','User');
	}
	public function Index()
	{
		$this->view();
	}
	public function view()
	{
		$this->load->view('login');
	}
	public function register()
	{
		$this->load->view('register');
	}
	public function submit()
	{
		$pass=$this->input->post('password');
		
        	$data = array(
				'name' => $this->input->post('fname'),
				'last_name'=> $this->input->post('lname'),
				'password'=> md5($pass),
				'address' => $this->input->post('address'),
				'location'=> $this->input->post('location'),
				
				
        		
        	);

        	$create = $this->User->create($data);
        	if($create == true) {
        		redirect(base_url());
        	}
        	else {
				$this->load->view('register');
        		}
        
	}
	public function update()
	{
			$data = array(
				'name' => $this->input->post('fname'),
				'last_name'=> $this->input->post('lname'),
				'address' => $this->input->post('address'),
				'location'=> $this->input->post('location'),
				
				
        		
        	);

        	$create = $this->User->update($data);
        	if($create == true) {
        		redirect('home/view');
        	}
        	else {
				$this->load->view('home/profile');
        		}
        
	}
	public function process()
	{
		$name = $this->security->xss_clean($this->input->post('name'));
		$password = md5($this->security->xss_clean($this->input->post('password')));
		if(!empty($name && $password))
		{
			$result = $this->User->process($name,$password);
			
			if($result==true)
			{
				$row = $result->row();
				$session = array(
					'name' => $row->name,
					'id' => $row->id,
					
				);
				$this->session->set_userdata($session);
				redirect('home');
			}
			else
			{
				 redirect(base_url());
			}

		
		}
		else
		{
			redirect(base_url());
		}

	}
	public function logout()
	{
		$array_items = array('name','id');
		$this->session->sess_destroy();
		$this->session->unset_userdata($array_items);
		redirect(base_url());
	}
}
?>