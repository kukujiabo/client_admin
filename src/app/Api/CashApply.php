<?php
namespace App\Api;

/**
 * 提现申请接口
 *
 * @author Meroc Chen <398515393@qq.com>
 */
class CashApply extends BaseApi {

  public function getRules() {
  
    return $this->rules([
    
      'getList' => [
      
        'member_name' => 'member_name|string|false||会员名称',
        'alipay_account' => 'alipay_account|string|false||支付宝账号',
        'alipay_realname' => 'alipay_realname|string|false||支付宝实名',
        'page' => 'page|int|false||页码',
        'page_size' => 'page_size|int|false||每页条数',
        'fields' => 'fields|string|false||字段',
        'order' => 'order|string|false||排序'
      
      ]
    
    ]);
  
  }

  /**
   * 查询提现申请列表
   * @desc 查询提现申请列表
   *
   * @return
   */
  public function getList() {
  
    return $this->dm->getList($this->retriveRuleParams(__FUNCTION__)); 
  
  }

}
