<?php

namespace Docallos\StudentManagement\Model;

use Docallos\StudentManagement\Core\Crud;
use Docallos\StudentManagement\Core\Database;


class StudentModel extends Database implements Crud {

    public $id;
    public $fullname;
    public $YearLevel;
    public $course;
    public $Section;

    public function __construct()
    {
        parent::__construct(); 
        $this->id ="";
        $this->fullname ="";
        $this->YearLevel ="";
        $this->course ="";
        $this->Section ="";
    }
    public function displayinfo(){
        echo "id :" .$this->id."\n";
        echo "Name :" .$this->fullname."\n";
        echo "YearLevel :" .$this->yearLevel."\n";
        echo "course :" .$this->course."\n";
        echo "Section :" .$this->Section."\n";
    }

    public function create() { 
        try{
            $sql = "INSERT  INTO students (fullname, yearlevel, course, section) VALUES (?, ?, ?, ?)";
            $stmt = $this->conn->prepare($sql);
            $stmt->blind_param("ssss", $this->fullname, $this->yearlevel, $this->course, $this->section,);
            if($stmt->execute()){
                return true;
            }else {
                return false;
            }
            
        } catch (\exception $e) {
            echo $e->getMessage();
            return false;
        }

    } 

    public function read(){
        try {
            $sql = "SELECT * FROM students";
            $results = $this->conn->query($sql);
            return $results->fetch_all(MYSQLI_ASSOC); 
        }catch(\Exception $e){
            echo $e->getMessage();
        }
        

    }
    public function update() {
        try{
            $sql = "UPDATE students SET fullname=?, yearlevel=?, course=?, section=? WHERE id=?";
            $stmt = $this->conn->prepare($sql);
            $stmt->blind_param("ssss", $this->fullname, $this->yearlevel, $this->course, $this->section,);
            if($stmt->execute()){
                return true;
            }else {
                return false;
            }
            
        } catch (\exception $e) {
            echo $e->getMessage();
            return false;
        }


    }
    public function delete() {
        try{
            $sql = "DELETE FROM students WHERE id=?";
            $stmt = $this->conn->prepare($sql);
            $stmt->blind_param("i", $this->id);
            $stmt->blind_param("ssss", $this->fullname, $this->yearlevel, $this->course, $this->section,);
            if($stmt->execute()){
                return true;
            }else {
                return false;
            }
            
        } catch (\exception $e) {
            echo $e->getMessage();
            return false;
        }
       

    }
     
}