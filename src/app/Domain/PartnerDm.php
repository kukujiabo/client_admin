<?php
namespace App\Domain;

class PartnerDm {

  public function getApplyList() {
  
    return \App\request('App.AgentApply.GetList', $data);
  
  }

}
