<?php
namespace App\Api;

/**
 * 会员资金流水接口
 *
 * @author Meroc Chen
 */
class MemberTurnover extends BaseApi {

  public function getRules() {
  
    return $this->rules([
    
      'getList' => [
      
        'page' => 'page|int|false|1|页码',
        'page_size' => 'page_size|int|false|1|每页条数',
        'order' => 'order|string|false|1|排序',
        'fields' => 'fields|string|false|1|字段'
      
      ]
    
    ]);
  
  }

  /**
   * 查询资金流水列表
   * @desc 查询资金流水列表
   *
   * @return array list
   */
  public function getList() {
  
    return $this->dm->getList($this->retriveRuleParams(__FUNCTION__));
  
  }

}
