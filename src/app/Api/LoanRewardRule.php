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
        'senior_reward' => 'senior_reward|float|true||一级代理佣金',
        'sub_reward' => 'sub_reward|float|true||二级代理佣金',
        'remark' => 'remark|string|false||备注',
        'state' => 'state|int|false||状态'
      
      ],

      'getList' => [
      
        'loan_id' => 'loan_id|int|false||贷款id',
        'fields' => 'fields|string|false||字段',
        'order' => 'order|string|false||排序',
        'page' => 'page|int|false|1|页码',
        'page_size' => 'page_size|int|false|20|每页条数'
      
      ],

      'getRuleDetail' => [
      
        'id' => 'id|int|true||获取规则详情'
      
      ],

      'updateRule' => [
      
        'id' => 'id|int|true||规则id',
        'senior_reward' => 'senior_reward|float|false||一级代理佣金',
        'sub_reward' => 'sub_reward|float|false||二级代理佣金',
        'remark' => 'remark|string|false||备注',
        'state' => 'state|int|false||状态'
      
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
  
    return $this->dm->create($this->retriveRuleParams(__FUNCTION__)); 
  
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

  /**
   * 获取贷款详情
   * @desc 获取贷款详情
   *
   * @return array list
   */
  public function getRuleDetail() {
  
    return $this->dm->getRuleDetail($this->retriveRuleParams(__FUNCTION__));
  
  }

  /**
   * 更新规则
   * @desc 更新规则
   *
   * @return int num
   */
  public function updateRule() {
  
    return $this->dm->updateRule($this->retriveRuleParams(__FUNCTION__));
  
  }

}
