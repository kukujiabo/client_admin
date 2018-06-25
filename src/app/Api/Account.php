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


}
