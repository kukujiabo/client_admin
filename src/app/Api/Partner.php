<?php
namespace App\Api;

/**
 * 合伙人申请
 *
 * @author Meroc Chen
 */
class Partner extends BaseApi {

  public function getRules() {
  
    return $this->rules([
    
      'getApplyList' => [
      
        'member_name' => 'member_name|string|false||会员名称',
        'name' => 'name|string|false||会员姓名',
        'phone' => 'phone|string|false||会员手机号',
        'identity' => 'identity|string|false||会员身份证号',
        'city' => 'city|string|false||城市',
        'page' => 'page|string|false||城市',
        'page_size' => 'page_size|string|false||城市',
        'order' => 'order|string|false||排序',
        'fields' => 'fields|string|false||字段'
      
      ]
    
    ]);
  
  }

  /**
   * 查询合伙人申请列表
   * @desc 查询合伙人申请列表
   *
   * @return array list
   */
  public function getApplyList() {
  
    return $this->dm->getApplyList($this->retriveRuleParams(__FUNCTION__));
  
  }


}
