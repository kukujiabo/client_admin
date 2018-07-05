<?php
namespace App\Domain;

class LoanDm {

  public function getApplyList($data) {
  
    return \App\request('App.BusinessApply.ListLoanQuery', $data); 
  
  }

  /**
   * 查询列表
   */
  public function listQuery($data) {
  
    return \App\request('App.Reward.ListQuery', $data);
  
  }

  public function getAll($data) {
  
    return \App\request('App.Reward.GetAll', $data);
  
  }

  public function getLoanCommissionList($data) {
  
    return \App\request('App.Reward.LoanCommisionList', $data);
  
  }

}
