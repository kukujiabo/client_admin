<?php
namespace App\Domain;

class BankDataDm {

  public function getList($data) {
  
    return \App\request('App.BankData.GetList', $data);
  
  }

}
