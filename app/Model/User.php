<?php
class User
{
   private $_db;
   public function __construct()
   {
      $this->_db = Database::getInstance();
   }

   public function index()
   {
      return $this->_db->index('');
   }
}
