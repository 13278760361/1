<?php
namespace Home\Controller;
use Think\Controller;
class UploadController extends Controller {
	//试图
	public function index() {
		$this -> display();
	}

	//上传
	public function upload() {
		//echo __PUBLIC__;exit;
		$upload = new \Think\Upload();
		// 实例化上传类
		$upload -> maxSize = 3145728;
		// 设置附件上传大小
		$upload -> exts = array('jpg', 'gif', 'png', 'jpeg');
		// 设置附件上传类型
		$upload -> rootPath = './Public/Uploads/Images/';
		// 设置附件上传根目录
		$upload -> savePath = '';
		// 设置附件上传（子）目录
		$upload->saveName = 'time';
		// 上传文件
		$info = $upload -> upload();
		if (!$info) {// 上传错误提示错误信息
			$this -> error($upload -> getError());
		} else {// 上传成功 获取上传文件信息
			foreach ($info as $file) {
				echo $file['savepath'] . $file['savename'];
			}
		}
	}

}
?>