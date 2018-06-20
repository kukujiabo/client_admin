<?php
namespace App\Domain;

class UploadFilesDm {

  public function upload($data) {
  
    $newData = [
    
      'bank_id' => $data['bank_id'],
    
      'file_path' => $_FILES['tmp_name'],

      'orig_name' => $_FILES['name']
    
    ];

    return \App\request('App.BankData.Reconciliation', $newData);
  
  }

}
