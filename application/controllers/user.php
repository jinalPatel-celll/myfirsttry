<?php
	class user extends CI_controller
	{

		public function Index()
		{
			$this->load->view('user/user_login');
		}

		public function userlogin()
		{

			$this->db->where('user_email',$this->input->post('txt_user_email'));
			$this->db->where ('user_password',$this->input->post('txt_user_password'));	

			$query = $this->db->get('tbl_user');	
	
            	$this->load->view('user/home');
            	return true;
        	
			
		}
		public function user_register()
		{
			$this->load->view('user/register');
		}


		public function fetch_state($country_id)
 		{
 			print_r ($post);
 			echo $this->fetch_state($this->input->post('state_id'));
 			$this->input->post('country_id');
  			$this->db->where('country_id', $country_id);
  			$this->db->order_by('state_name', 'ASC');
  			$query = $this->db->get('tbl_state');
  			$output = '<option value="">Select State</option>';
  			foreach($query->result() as $row)
  			{

   				$output .= '<option value="'.$row->state_id.'">'.$row->state_name.'</option>';
  			}
  			return $output;
 		}
		
 			
		
	}
?>
