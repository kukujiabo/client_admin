<?php
namespace App\Domain;

class LoanDm {

  public function getApplyList($data) {
  
    return \App\request('App.BusinessApply.ListLoanQuery', $data); 
  
  }

}
