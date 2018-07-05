<?php
namespace App\Domain;

class LoanRewardRuleDm {

  public function create($data) {

    $data['member_id'] = 0;
  
    return \App\request('App.LoanRewardRule.Create', $data);
  
  }

  public function getList($data) {
  
    return \App\request('App.LoanRewardRule.GetList', $data);
  
  }

  public function getRuleDetail($data) {
  
    return \App\request('App.LoanRewardRule.GetRuleDetail', $data);
  
  }

}
