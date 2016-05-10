<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
  	//  $this->redirect('News/category', array('cate_id' => 2), 5, '页面跳转中...');
        
        $User = M('member'); // 实例化User对象
		// 进行分页数据查询 注意page方法的参数的前面部分是当前的页数使用 $_GET[p]获取
		$list = $User->order('member_id')->page($_GET['p'].',15')->select();
		$this->assign('list',$list);// 赋值数据集
		$count      = $User->count();// 查询满足要求的总记录数
		$Page       = new \Think\Page($count,15);// 实例化分页类 传入总记录数和每页显示的记录数
		$show       = $Page->show();// 分页显示输出
		$this->assign('page',$show);// 赋值分页输出
		$this->display(); // 输出模板
    }
	public function login(){
		//if(!checksubmit())	
		$array = array();
		$array['name']    =    $_POST['data']['username'];
		$array['email']   =    'liu21st@gmail.com';
		$array['phone']   =    '12335678';
		//print_r($_POST['data']['username']);exit;
		//$array['m_body']   = unserialize('a:5:{i:0;a:2:{s:4:"type";s:5:"image";s:5:"value";s:82:"http://www.ynypw.com/data/upload/shop/store/goods/22/22_04898456569190076_1280.png";}i:1;a:2:{s:4:"type";s:5:"image";s:5:"value";s:82:"http://www.ynypw.com/data/upload/shop/store/goods/22/22_04898462842984336_1280.png";}i:2;a:2:{s:4:"type";s:5:"image";s:5:"value";s:82:"http://www.ynypw.com/data/upload/shop/store/goods/22/22_04898457109707223_1280.png";}i:3;a:2:{s:4:"type";s:5:"image";s:5:"value";s:82:"http://www.ynypw.com/data/upload/shop/store/goods/22/22_04898457317946490_1280.png";}i:4;a:2:{s:4:"type";s:5:"image";s:5:"value";s:82:"http://www.ynypw.com/data/upload/shop/store/goods/22/22_04898456443443609_1280.png";}}');
		//$this->assign($array); 
		//$this->ajaxReturn($array);
		$this->display('login');
	}
	public function dataLogin(){
		$where = array();
		$where['member_name'] = $_POST['username'];
		$where['member_password'] = md5($_POST['password']);
		if(M('member')->where($where)->find()){
			$this->success('登录成功',U('Index/index'));
		} else {
			$this->error('登录失败');
		}
	}
	public function test(){
		$this->display('login');
	}
	public function reg(){
		
		$this->display('reg');
	}
	public function pay(){
		$this->display('weixin_pay');
	}
	public function read($id){
        echo 'id='.$id;
    }
	public function verity(){
		$Verify =  new \Think\Verify();
		$Verify->fontSize = '14';
		$Verify->length = '4'; 
		$Verify->fontttf = '1.ttf'; 
		$Verify->entry();
	}
}