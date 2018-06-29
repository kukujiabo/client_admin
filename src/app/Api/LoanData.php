<?php
namespace App\Api;

/**
 * 贷款数据接口
 *
 * @author Meroc Chen
 */
class LoanData extends BaseApi {

  public function getRules() {
  
    return $this->rules([
    
      'dataFileList' => [
      
        'reward_id' => 'reward_id|string|false||贷款id',
        'page' => 'page|int|false||页码',
        'page_size' => 'page_size|int|false||每页条数',
        'fields' => 'fields|string|false||字段',
        'order' => 'order|string|false||排序'
      
      ]    
    
    ]); 
  
  }

  /**
   * 数据文件列表
   * @desc 数据文件列表
   *
   * @return array list
   */
  public function dataFileList() {
  
    return $this->dm->dataFileList($this->retriveRuleParams(__FUNCTION__));
  
  }

}
