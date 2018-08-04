<?php
namespace App\Domain;

class YPosDm {

  public function getList() {
  
    return \App\request('App.YPos.GetList', $params);
  
  }

}
