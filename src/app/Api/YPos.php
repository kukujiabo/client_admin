<?php
namespace App\Api;

/**
 * pos机申请接口
 *
 *
 */
class YPos extends BaseApi {

  public function getRules() {
  
    return $this->rules([
    
      'getList' => [
      
        'name' => 'name|string|false||真实姓名',
      
        'phone' => 'phone|string|false||手机号',

        'page' => 'page|int|false|1|页码',

        'page_size' => 'page_size|int|false|20|每页条数'
      
      ] 
    
    ]);
  
  }

  /**
   * 查询pos机申请列表
   * @desc 查询pos机申请列表
   *
   * @return array list
   */
  public function getList() {
  
    return $this->dm->getList($this->retriveRuleParams(__FUNCTION__)); 
  
  }

}
