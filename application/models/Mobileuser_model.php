<?php 
class Mobileuser_model extends CI_Model 
{

	public function __construct()
	{
        parent::__construct();
	}
    
	function login_user($username,$password)
	{
        $query = $this->db->get_where('data_user',array('nis'=>$nis));
        if($query->num_rows() > 0)
        {
            $user = $query->row();
            // foreach($query as $user){
            if ($password == $user->password) {
                $this->session->set_userdata('nis',$nis);
				$this->session->set_userdata('is_login',TRUE);
                
            return TRUE;

            } else {
                return FALSE;
            }
        // }
        }
        else
        {
            return FALSE;
        }
	}
	
    function cek_login()
    {
        if(empty($this->session->userdata('is_login')))
        {
			redirect('login');
		}
    }
    function level_super(){
        if(!($this->session->userdata('level') == '1')){
            $this->session->set_flashdata('warning', '<h6 style="margin-top: 7px;">Hanya untuk <strong>super admin</strong></h6>');
            redirect('kas');
        }
    }
    function level_admin(){
        if(!($this->session->userdata('level') == '0')){
            $this->session->set_flashdata('warning', '<h6 style="margin-top: 7px;">Hanya untuk <strong>admin</strong></h6>');
            redirect('kas');
        }
    }
}
?>