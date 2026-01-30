<?php 
namespace App\Controllers;

interface Resource {
    public function index();
    public function createform();
    public function storaction();
    public function show();
    public function delete();
}