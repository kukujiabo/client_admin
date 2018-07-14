<?php
namespace App\Domain;

class CashApplyDm {

  public function getList($data) {
  
    return \App\request('App.CashApply.GetList', $data);
  
  }

}
