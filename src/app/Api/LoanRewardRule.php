<?php
namespace App\Api;

/**
 * 贷款奖励规则
 *
 * @author Meroc Chen
 */
class LoanRewardRule extends BaseApi {

  public function getRules() {
  
    return $this->rules([
    
      'create' => [
      
        'loan_id' => 'loan_id|int|true||贷款id',
        'senior_reward' => 'loan_id|int|true||一级代理佣金',
        'sub_reward' => 'loan_id|int|true||二级代理佣金',
        'remark' => 'remark|string|false||备注',
        'state' => 'state|int|false||状态'
      
      ],

      'getList' => [
      
        'loan_id' => 'loan_id|int|false||贷款id',
        'fields' => 'fields|string|false||字段',
        'order' => 'order|string|false||排序',
        'page' => 'page|int|false|1|页码',
        'page_size' => 'page_size|int|false|20|每页条数'
      
      ]
    
    ]); 
  
  }

  /**
   * 新增贷款规则
   * @desc 新增贷款规则
   *
   * @return int id
   */
  public function create() {
  
    return $this->dm->addRule($this->retriveRuleParams(__FUNCTION__)); 
  
  }

  /**
   * 查询贷款规则列表
   * @desc 查询贷款规则列表
   *
   * @return array list
   */
  public function getList() {
  
    return $this->dm->getList($this->retriveRuleParams(__FUNCTION__)); 
  
  }

}
