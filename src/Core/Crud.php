<?php

namespace Docallos\StudentManagement\Core;

interface Crud {
    public function create();
    public function read();
    public function update();
    public function delete();
}