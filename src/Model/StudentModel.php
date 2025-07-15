<?php

namespace Docallos\StudentManagement\Model;
use Docallos\StudentManagement\Core\Crud;

class StudentModel implements Crud {

    public $id;
    public $fullname;
    public $YearLevel;
    public $course;
    public $Section;

    public function __construct()
    {
        $this->id ="";
        $this->fullname ="";
        $this->YearLevel ="";
        $this->course ="";
        $this->Section ="";
    }
    public function displayinfo(){
        echo "id :" .$this->id."\n";
        echo "Name :" .$this->fullname."\n";
        echo "YearLevel :" .$this->YearLevel."\n";
        echo "course :" .$this->course."\n";
        echo "Section :" .$this->Section."\n";
    }

    public function create(){ 
        

    }
    public function read(){
        

    }
    public function update(){

    }
    public function delete(){

    }
     
}