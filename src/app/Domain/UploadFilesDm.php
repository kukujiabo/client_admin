<?php
namespace App\Domain;

class UploadFilesDm {

  public function upload($data) {
  
    $newData = [
    
      'bank_id' => $data['bank_id'],
    
      'file_path' => $_FILES['upfile']['tmp_name'],

      'orig_name' => $_FILES['upfile']['name']
    
    ];

    return \App\request('App.BankData.Reconciliation', $newData);
  
  }

  public function loanData($data) {
  
    $newData = [
    
      'loan_id' => $data['loan_id'],

      'file_path' => $_FILES['upfile']['tmp_name'],

      'orig_name' => $_FILES['upfile']['name']
    
    ];
  
    return \App\request('App.LoanData.Reconciliation', $newData);

  }

}
