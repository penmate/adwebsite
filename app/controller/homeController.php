<?php

class home extends Controller
{
    public function index($name = ''){
        $user = $this->model('User');
        $user->name = $name;
        // echo $user->name;
        
        //$usr = $this->getUsers();
        //$ads = $this->getAds();

        // print_r($usr);
        $this->view('home/index', ['name' => $user->name]);
        //$this->view('home/index', ['usr' => $usr]);
        //$this->view('home/index', ['ads' =>$ads]);
        

    }



}