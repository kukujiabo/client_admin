<?php
namespace App\Domain;

class PosMechineDm {

  public function create($data) {
  
    return \App\request('App.PosMechine.Create', $data);
  
  }

  public function getList($data) {
  
    return \App\request('App.PosMechine.GetList', $data);
  
  }

}
