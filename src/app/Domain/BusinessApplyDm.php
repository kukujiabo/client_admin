<?php
namespace App\Domain;

class BusinessApplyDm {

  public function creditAuditPass() {
  
    return \App\request('App.BusinessApply.CreditAuditPass', $data); 
  
  }

  public function creditAuditFail() {
  
    return \App\request('App.BusinessApply.CreditAuditFail', $data); 
  
  }

  public function loanAuditPass() {
  
    return \App\request('App.BusinessApply.LoanAuditPass', $data);
  
  }

  public function loanAuditFail() {
  
    return \App\request('App.BusinessApply.LoanAuditFail', $data);
  
  }

}
