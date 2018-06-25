<?php
namespace App\Domain;

class AccountDm {

  public function balanceCreditMoney($data) {
  
    return \App\request('App.BusinessApply.BalanceCreditMoney', $data);
  
  }

}
