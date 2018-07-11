<?php
namespace App\Api;

/**
 * 商户申请操作接口
 *
 * @author Meroc Chen <398515393@qq.com>
 */
class BusinessApply extends BaseApi {

  public function getRules() {
  
    return $this->rules([
    
      'creditAuditPass' => [
      
        'id' => 'id|int|true||申请ID'
      
      ],

      'creditAuditFail' => [
      
        'id' => 'id|int|true||申请ID'
      
      ],

      'loanAuditPass' => [
      
        'id' => 'id|int|true||申请ID'
      
      ],

      'loanAuditFail' => [
      
        'id' => 'id|int|true||申请ID'
      
      ]
    
    ]);
  
  }

  /**
   * 信用卡审核通过
   * @desc 信用卡审核通过
   *
   * @return int num
   */
  public function creditAuditPass() {
  
    return $this->dm->creditAuditPass($this->retriveRuleParams(__FUNCTION__)); 
  
  }

  /**
   * 信用卡申请驳回
   * @desc 信用卡申请驳回
   *
   * @return int num
   */
  public function creditAuditFail() {
  
    return $this->dm->creditAuditFail($this->retriveRuleParams(__FUNCTION__));  
  
  }

  /**
   * 贷款申请通过
   * @desc 贷款申请通过
   *
   * @return int num
   */
  public function loanAuditPass() {
  
    return $this->dm->loanAuditPass($this->retriveRuleParams(__FUNCTION__));
  
  }

  /**
   * 贷款申请驳回
   * @desc 贷款申请驳回
   *
   * @return int num
   */
  public function loanAuditFail() {
  
    return $this->dm->loanAuditFail($this->retriveRuleParams(__FUNCTION__));
  
  }

}
