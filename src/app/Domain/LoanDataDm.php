<?php
namespace App\Domain;

class LoanDataDm {

  public function dataFileList($data) {
  
    return \App\request('App.LoanData.GetList', $data);  
  
  }

  public function importData($data) {
  
    return \App\request('App.LoanData.importData', $data);
  
  }

}
