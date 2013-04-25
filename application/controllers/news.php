<?php 
class news extends CI_Controller {
	public function index(){
		$data=array('title'=>'My Title','heading'=>'My Heading','message'=>'My Message');
		$this->load->view('newsview.html',$data);
	}	
	public function add($title=null,$comment=null){
		echo "使用add方法";
		echo $title;
		echo $comment;
	}
	
	public function created($news_id=null){
		echo "使用delete方法";
		echo $news_id;
	}
	
	public function edit($news_id=null,$title=null,$comment=null){
		echo "使用edit方法";
		echo $news_id."1";
		echo $title."2";
		echo $comment."3";
	}
	
	public function update($news_id=null){
		echo "使用delete方法";
		echo $news_id;
	}
	
}
?>