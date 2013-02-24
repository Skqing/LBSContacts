<?php
/**
 * Author: DolphinBoy
 * Email: dolphinboyo@gmail.com
 * Date: 13-2-23
 * Time: 上午2:23
 * Description: 首页
 */
class IndexAction extends Action
{
    public function index()
    {
        //$this->show('终于搞成功了，接下来打算做一个LBS通讯录...', 'utf-8');
        $this->assign('title', ' | '.'欢迎使用LBS通讯录！');
        //$this->display();
        $this->display('User:login');
        //$this->display('blue@User:login');


    }
}