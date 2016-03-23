<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class IndraController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        
    }
    
    /**
     * getdata
     */
    public function getdata(){
        
        $data = array("name"=>"Indra Octama","skill"=>"Web Developer");
        header('Content-Type: application/json');
        echo json_encode($data);
        
    }
    
    /**
     * postdata
     */
    public function postdata(){
        
        $name = isset($_POST["name"])?$_POST["name"]:"";
        $skill = isset($_POST["skill"])?$_POST["skill"]:"";
        
        $data = json_encode(array("name"=>$name,"skill"=>$skill));
        
        header('Content-Type: application/json');
        echo json_encode($data);
       
    }
    
    

}
