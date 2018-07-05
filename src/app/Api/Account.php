<?php
namespace App\Api;

/**
 * 账户操作接口
 *
 * @author Meroc Chen 
 */
class Account extends BaseApi {

  public function getRules() {
  
    return $this->rules([
    
      'balanceCreditMoney' => [
      
        'id' => 'id|int|false||申请id'
      
      ],

      'getAccountDetailLog' => [
      
        'member_id' => 'member_id|int|false||会员id',
        'relat_id' => 'relat_id|int|false||关联id',
        'relat_type' => 'relat_type|int|false||关联类型',
        'change_type' => 'change_type|int|false||变更类型',
        'fields' => 'fields|string|false||字段',
        'order' => 'order|string|false||排序',
        'page' => 'page|int|false||页码',
        'page_size' => 'page_size|int|false||每页条数'
      
      ],

      'getList' => [
      
        'member_name' => 'member_name|string|false||会员名称',
        'member_type' => 'member_type|int|false||会员等级',
        'fields' => 'fields|string|false||字段',
        'order' => 'order|string|false||排序',
        'page' => 'page|int|false||页码',
        'page_size' => 'page_size|int|false||每页条数'
      
      ]
    
    ]); 
  
  }

  /**
   * 信用卡佣金结算
   * @desc 信用卡佣金结算
   *
   * @return int num
   */
  public function balanceCreditMoney() {
  
    return $this->dm->balanceCreditMoney($this->retriveRuleParams(__FUNCTION__)); 
  
  }

  /**
   * 贷款佣金结算
   * @desc 贷款佣金结算
   *
   * @return int num
   */
  public function balanceLoanMoney() {
  
    return $this->dm->balanceLoanMoney($this->retriveRuleParams(__FUNCTION__));
  
  }

  /**
   * 查询账户记录详情
   * @desc 查询账户记录详情
   *
   * @return array list
   */
  public function getAccountDetailLog() {
  
    return $this->dm->getAccountDetailLog($this->retriveRuleParams(__FUNCTION__));
  
  }

  /**
   * 查询列表
   * @desc 查询列表
   *
   * @return array list
   */
  public function getList() {
  
    return $this->dm->getList($this->retriveRuleParams(__FUNCTION__));
  
  }

}
