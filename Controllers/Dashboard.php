<?php
class Dashboard extends Controllers{
    public function __construct()
    {
        parent::__contruct();
    }

    public function home(){
        $data['page_id'] =2;
        $data['page_tag']="DashBoard ";
        $data['page_title']="DashBoard";
        $data['page_name']="dashboard";
        $this->views->getView($this,"dashboard",$data);
    }
}