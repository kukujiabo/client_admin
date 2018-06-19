<?php
namespace App\Domain;

class MerchantDm {

  public function create($data) {
  
    return \App\request('App.Merchant.AddMerchant', $data);
  
  }

  public function listQuery($data) {
  
    return \App\request('App.Merchant.ListQuery', $data);
  
  }

  public function getAll($data) {
  
    return \App\request('App.Merchant.GetAll', $data);

  }

  public function applyList($data) {
  
    return \App\request('App.BusinessApply.ListQuery', $data); 
  
  }

  public function getDetail($data) {
  
    return \App\request('App.Merchant.GetDetail', $data); 
  
  }

}
