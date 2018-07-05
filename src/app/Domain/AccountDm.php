<?php
namespace App\Domain;

class AccountDm {

  public function balanceCreditMoney($data) {
  
    return \App\request('App.BusinessApply.BalanceCreditMoney', $data);
  
  }

  public function balanceLoanMoney($data) {
  
    return \App\request('App.BusinessApply.BalanceLoanMoney', $data);
  
  }

  public function getAccountDetailLog($data) {
  
    return \App\request('App.AccountLog.getUnionLogInfoList', $data);
  
  }

}
