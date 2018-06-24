<?php
namespace App\Domain;

class RewardRuleDm {

  public function create($data) {

    $data['member_id'] = 0;
  
    return \App\request('App.RewardRule.Create', $data);
  
  }

  public function getList($data) {

    return \App\request('App.RewardRule.GetList', $data);
  
  }

}
