<?php
namespace Home\Controller;
use Think\Controller;
class NewsController extends Controller{
	public function read(){
	
        $New = M('member');
        if(isset($_GET['id'])) {
            // 根据id查询结果
            $data = $New->find($_GET['id']);
        }elseif(isset($_GET['name'])){
            // 根据name查询结果
            $data = $New->getByName($_GET['name']);
        }else{
        	$data = $New->select();
        }
		//echo '<pre/>';
	//	print_r($data);exit;
        $this->data = $data;
        $this->assign('list',$data);
		$this->display('index');
    }
    public function archive(){
        $New = M('New');
        $year   =   $_GET['year'];
        $month  =   $_GET['month'];
        $begin_time = strtotime($year . $month . "01");
        $end_time = strtotime("+1 month", $begin_time);
        $map['create_time'] =  array(array('gt',$begin_time),array('lt',$end_time));
        $map['status']  =   1;
        $list = $New->where($map)->select();
        $this->list =   $list;
        $this->display();
    }
	public function category(){
		echo 'cate_id:'.$_GET['cate_id'];
	}
}
?>