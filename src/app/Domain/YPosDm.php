<?php
namespace App\Domain;

class YPosDm {

  public function getList($params) {
  
    return \App\request('App.YPos.GetList', $params);
  
  }

  public function sendPos($params) {
  
    return \App\request('App.YPos.SendPos', $params);
  
  }

}
