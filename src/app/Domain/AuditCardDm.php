<?php
namespace App\Domain;

class AuditCardDm {

  public function getList($data) {
  
    return \App\request('App.AuditCard.GetList', $data);
  
  }

}
