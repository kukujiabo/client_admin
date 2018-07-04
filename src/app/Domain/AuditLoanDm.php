<?php
namespace App\Domain;

class AuditLoanDm {

  public function getList($data) {
  
    return \App\request('App.AuditLoan.GetList', $data);

  }

}
