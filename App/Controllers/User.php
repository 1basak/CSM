<?php
namespace  App\Controllers;

use Core\BaseController;

class user extends BaseController
{
    public function showProfile($id)
    {
       // echo 'User Profile' . $id;
      // $users=$this->db->connect->query("SELECT * FROM users WHERE users.id='$id' ")->fetch(\PDO::FETCH_ASSOC);
        $users=$this->db->query("SELECT * FROM users WHERE users.id='$id' ");
       print_r($users);
    }
    public function Test()
    {

       $this->view->load("test",['isim' =>'Başak']);
    }
    public function getTest()
    {
        $get =$this->request->post();
        print_r($get);


    }
}

