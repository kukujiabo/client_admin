<?php
namespace App\Domain;

class BusinessApplyDm {

  public function creditAuditPass($data) {
  
    return \App\request('App.BusinessApply.AuditPass', $data); 
  
  }

  public function creditAuditFail($data) {
  
    return \App\request('App.BusinessApply.AuditFail', $data); 
  
  }

  public function loanAuditPass($data) {
  
    return \App\request('App.BusinessApply.AuditPass', $data);
  
  }

  public function loanAuditFail($data) {
  
    return \App\request('App.BusinessApply.AuditFail', $data);
  
  }

}
