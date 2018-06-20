<?php
namespace App\Domain;

class PartnerDm {

  public function getApplyList($data) {
  
    return \App\request('App.AgentApply.GetList', $data);
  
  }

  public function accept($data) {

    $data['state'] = 1;

    $data['confirm_at'] = date('Y-m-d H:i:s');

    return \App\request('App.AgentApply.Edit', $data);
  
  }

  public function reject($data) {
  
    $data['state'] = -1;

    $data['reject_at'] = date('Y-m-d H:i:s');

    return \App\request('App.AgentApply.Edit', $data);
  
  }

}
