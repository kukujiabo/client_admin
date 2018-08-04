<?php
namespace App\Domain;

class YPosDm {

  public function getList() {
  
    return \App\request('App.YPos.GetList', $params);
  
  }

  public function sendPos() {
  
    return \App\request('App.YPos.SendPos', $params);
  
  }

}
