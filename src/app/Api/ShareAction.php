<?php
namespace App\Api;

/**
 * 分享动作接口
 *
 * @author Meroc Chen <398515393@qq.com>
 */
class ShareAction extends BaseApi {

  public function getRules() {
  
    return $this->rules([
    
      'listQuery' => [
      
        'member_name' => 'member_name|string|false||会员名称',
        'reward_name' => 'reward_name|string|false||赠品名称',
        'share_code' => 'share_code|string|false||分享码'
      
      ]
    
    ]);
  
  }

  /**
   * 会员分享动作列表
   * @desc 会员分享动作列表
   *
   * @return array list
   */
  public function listQuery() {
  
    return $this->dm->listQuery($this->retriveRuleParams(__FUNCTION__));
  
  } 

}
