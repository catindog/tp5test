<?php
  namespace app\index\controller;
  use think\Controller;
  class Menu extends Controller{
    public function index() {
      return $this -> fetch('menu');
    }
  }
