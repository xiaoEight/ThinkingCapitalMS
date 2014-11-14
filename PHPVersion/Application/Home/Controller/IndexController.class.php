<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        $this->show('<style type="text/css">*{ padding: 0; margin: 0; } div{ padding: 4px 48px;} body{ background: #fff; font-family: "微软雅黑"; color: #333;font-size:24px} h1{ font-size: 100px; font-weight: normal; margin-bottom: 12px; } p{ line-height: 1.8em; font-size: 36px }</style><div style="padding: 24px 48px;"> <h1>:)</h1><p>欢迎使用 <b>ThinkPHP</b>！</p><br/>[ 您现在访问的是Home模块的Index控制器 ]</div><script type="text/javascript" src="http://tajs.qq.com/stats?sId=9347272" charset="UTF-8"></script>','utf-8');
    }
	
	public function login(){
		$array['name']    =    'thinkphp';
		$array['email']   =    'liu21st@gmail.com';
		$array['phone']   =    '12335678';
		$this->assign($array);
		$this->display("login");
      }
	  
	  public function check(){
		
		if(empty($_GET['username']) || empty($_GET['userpwd'])){
			//$this->ajaxReturn('用户名或密码不能为空','用户名或密码不能为空',0);
		}
		if($_GET['username']!=123){
			//$this->ajaxReturn('用户名不存在'.$_GET['username'],'用户名不存在',0);
		}else{
			if($_GET['userpwd']==123){
				//$this->ajaxReturn('登陆成功','登陆成功',1);
			}else{
				//$this->ajaxReturn('密码不正确','密码不正确',0);
			}
		}
	}
}