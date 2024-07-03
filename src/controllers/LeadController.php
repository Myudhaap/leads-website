<?php

namespace leadsWeb\controllers;

class LeadController
{
    public function index(){
        require "src/views/home.php";
    }

    public function create(){
        require "src/views/create.php";
    }
}