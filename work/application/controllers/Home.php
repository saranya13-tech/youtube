<?php
/**
  * 
  */
 class Home extends CI_Controller
 {
 	
 	function __construct()
 	{
 		parent::__construct();
 		$this->initial();
 	}
 	public function initial()
 	{

 		$this->load->model('User_model','User');
 		 if($this->session->userdata('id') == ''  )
 			{
 				redirect(base_url());
 			}
    

 	}
 	public function Index()
 	{
 		$this->view();
 	}
 	public function view()
 	{
		$data['userdetails']=$this->User->getdetails($this->session->userdata('id'));
		
		$this->load->view('dashboard',$data);

 	}
 	public function add()
 	{
		
		$this->load->view('add');

	 }
	 public function profile()
 	{
		$data['user']=$this->User->getuser($this->session->userdata('id'));
		
		$this->load->view('profile',$data);

 	}
	 public function submit()
	 {
		 $url="https://www.youtube.com/embed/";
		 preg_match('%(?:youtube(?:-nocookie)?\.com/(?:[^/]+/.+/|(?:v|e(?:mbed)?)/|.*[?&]v=)|youtu\.be/)([^"&?/ ]{11})%i', $this->input->post('url'), $match);
		 $video_id = $match[1];
		//  $link = $this->input->post('url');
        //  $video_id = explode("?v=", $link);
        //  $video_id = $video_id[1];
		 
			 $data = array(
				 'video_url' => $url.$video_id,
				 'description'=> $this->input->post('description'),
				 'title'=> $this->input->post('title'),
				 'user_id'=> $this->session->userdata('id'),
				 
				 
			 );
 
			 $create = $this->User->add_video($data);
			 if($create == true) {
				 redirect('home/view');
			 }
			 else {
				 $this->load->view('add');
				 }
		 
	 }
	 public function delete() {
		$id = $this->input->get('id');
		$this->User->delete($id);
		$this->session->set_flashdata('feedback', 'Deleted');
		redirect('home/view');
		}
		
 }
?>