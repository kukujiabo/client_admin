<?php
namespace App\Domain;

class BankDataDm {

  public function getList($data) {
  
    return \App\request('App.BankData.GetList', $data);
  
  }

  public function importData($data) {
  
    return \App\request('App.BankData.ImportData', $data);
  
  }

  public function balanceOfAccount($data) {
  
    return \App\request('App.AuditCard.BalanceOfAccount', $data); 

  }

}
