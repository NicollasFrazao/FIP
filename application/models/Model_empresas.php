<?php
class Model_empresas extends CI_Model 
{
  public function get_all()
  {
    return $this -> db -> get('empresas')
                       -> result();
  }
}