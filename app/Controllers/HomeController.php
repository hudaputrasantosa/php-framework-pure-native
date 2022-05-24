<?php
class HomeController extends Controller
{

   // method yang bernama index mengembalikan nilai untuk menampilkan file index
   public function index()
   {
      return $this->view('index');
   }
}
