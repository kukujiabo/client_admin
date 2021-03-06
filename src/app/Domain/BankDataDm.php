<?php
namespace App\Domain;

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class BankDataDm {

  public function getList($data) {
  
    return \App\request('App.BankData.GetList', $data);
  
  }

  public function importData($data) {
  
    return \App\request('App.BankData.ImportData', $data);
  
  }

  public function balanceOfAccount($data) {
  
    return \App\request('App.AuditCard.BalanceOfAccount', $data); 

  }

  public function create($data) {
  
    return \App\request('App.BankData.Create', $data);
  
  }

  public function getDetail($data) {

    return \App\request('App.BankData.GetDetail', $data);

  }

  public function download($data) {

    $file = $this->getDetail([ 'id' => $data['id']]);

    $fileindex = fopen ( $file['file_path'], "rb" );

    \App\request('App.BankData.Update', [ 'id' => $data['id'], 'download' => 1 ]);

    if ($file) {

      header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
      header('Content-Type:application/vnd.ms-excel');
      header('Content-Disposition: attachment;filename="' . $file['orig_name']);
      header('Cache-Control: max-age=0');

      echo fread ( $fileindex, filesize ( $file['file_path'] ) );

      exit;

    }

  }

  public function remove($data) {

    return \App\request('App.BankData.Remove', $data);

  }

}
