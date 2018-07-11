<?php
namespace App\Domain;

class BusinessApplyDm {

  public function creditAuditPass() {
  
    return \App\request('App.BusinessApply.AuditPass', $data); 
  
  }

  public function creditAuditFail() {
  
    return \App\request('App.BusinessApply.AuditFail', $data); 
  
  }

  public function loanAuditPass() {
  
    return \App\request('App.BusinessApply.AuditPass', $data);
  
  }

  public function loanAuditFail() {
  
    return \App\request('App.BusinessApply.AuditFail', $data);
  
  }

}
