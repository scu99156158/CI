<?php 
class userinput extends CI_Controller {
	public function index(){
		$columndata=array('user_id'=>'id:','user_name'=>'name:','user_company'=>'company:');
		$this->load->view('userinput_view.php',$columndata);
	}		
}
?>