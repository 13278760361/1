<?php
namespace Home\Model;
use Think\Model;
class NewModel extends Model{
	public function getByName($name){
		return 'ID is：'.$name;
	}
	public function find($id){
		return 'ID is：'.$id;	
	}
}
?>