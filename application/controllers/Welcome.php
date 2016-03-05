<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	class Welcome extends CI_Controller {

		public function index()
		{
			$this->load->view('welcome_message');


		}

		public function Add_task()
		{
	        
	        $task=$this->input->POST('task');
			$status=$this->input->POST('status');
			$description=$this->input->POST('description');
			$date=$this->input->POST('date');

			$data=array('task'=>$task,'status'=>$status,'description'=>$description,'date'=>$date); 
			$this->load->model('Add_task');

			if($this->Add_task->add($data))
			{
				echo "data inserted successfully";
			}

			else
			{
				//echo "Task Created.";

				$this->get_task($data);
			}
	    
		}

		public function get_task($data)

		{
           $this->load->model('Add_task');
          $rows=$this->Add_task->get_user();
          $data['title'] = "page title";
          $data['rows'] = $rows;
          $this->load->view('get',$data);

		}

    }
?>


		


       


                        

             
             

             

