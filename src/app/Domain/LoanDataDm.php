<?php
namespace App\Domain;

class LoanDataDm {

  public function dataFileList($data) {
  
    return request('App.LoanData.GetList', $data);  
  
  }

}
