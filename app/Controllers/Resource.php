<?php 
namespace App\Controllers;

interface Resource {
    public function index();
    public function createform();
    public function storaction();
    public function update();
    public function updateAction();
    public function show();
    public function delete();
}