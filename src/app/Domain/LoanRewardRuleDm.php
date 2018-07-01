<?php
namespace App\Domain;

class LoanRewardRuleDm {

  public function create($data) {

    $params['member_id'] = 0;
  
    return \App\request('App.LoanRewardRule.Create', $params);
  
  }

  public function getList($data) {
  
    return \App\request('App.LoanRewardRule.GetList', $params);
  
  }

}
