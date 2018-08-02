<?php
namespace App\Domain;

class MemberDm {

  public function listQuery($params) {
  
    return \App\request('App.Member.listQuery', $params);
  
  }

  public function setVip($params) {
  
    return \App\request('App.Member.SetVip', $params);
  
  }

}
