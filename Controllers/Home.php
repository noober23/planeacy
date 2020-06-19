<?php
 class Home extends Controllers{
     public function __construct()
     {
         parent::__contruct();
     }


     public function home($params){
         //$data['page_id'] =1;
        // $data['page_tag']="Home";
        // $data['page_title']="Pagina Principal";
         //$data['page_name']="home";
         //$data['page_content']="Lorem Ipsum";
         $this->views->getView($this,"home");
        echo "Mensaje desde el controlador";
     }

     public function datos($params){
         echo "Dato recibido".$params;
     }

 }