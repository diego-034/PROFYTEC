<?php
namespace App\Repositories;

use App\Models\User;
use App\Repositories\IRepository\IModelRepository;
use Exception;
class ModelRepository implements IModelRepository{

private $Model;

private function SetModel($Model)
{
    $this->Model = $Model;
}

public function List($data){
    try {
        $response = [];
        $this->SetModel($data['Model']);
        $response['OK'] = $this->Model::all();
        if($response['OK'] == null){
            $response['Error'] = new Exception("Error");
        }
        return $response;
    } catch (Exception $ex) {
        $response['Error'] = $ex;
        return $response;
    }
}

public function Insert($data){
    try {
        //code...
    } catch (Exception $ex) {
        //throw $th;
    }
}

public function Update($data){
    try {
        //code...
    } catch (Exception $ex) {
        //throw $th;
    }
}

public function Delete($data){
    try {
        //code...
    } catch (Exception $ex) {
        //throw $th;
    }
}

public function Find($data){
    try {
        //code...
    } catch (Exception $ex) {
        //throw $th;
    }
} 
}