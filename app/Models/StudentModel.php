<?php
namespace App\Models;
use CodeIgniter\Database\ConnectionInterface;
use CodeIgniter\Model;  

class StudentModel extends Model{

    protected $table = "student";
    protected $allowedFields = ['document','name','email','password'];

    //metodos para el CRUD
    public function getStudent($id = false){
        if ($id === false){
            return $this->findAll(); // retorna todos los registros de la tabla Material
        }
        else{
            return $this->getWhere(['id' => $id]); // retorna la información de un solo material
        }
    }

    public function updateStudent($data,$id){
        $query = $this->db->table($this->table)->update($data,array('id'=>$id));
        return $query;
    }

    function deleteStudent($id){
        $query = $this->db->table($this->table)->delete(array('id'=>$id));
        return $query;
    }

}