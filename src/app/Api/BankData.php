<?php
namespace App\Api;

/**
 * 银行数据接口
 *
 * @author Meroc Chen <398515393@qq.com>
 */
class BankData extends BaseApi {

  public function getRules() {
  
    return $this->rules([
    
      'getList' => [
      
        'mname' => 'mname|string|false||商户名称',

        'orig_name' => 'orig_name|string|false||原始文件名',

        'fields' => 'fields|string|false||字段',

        'order' => 'order|string|false||排序',

        'page' => 'page|int|false|1|页码',

        'page_size' => 'page_size|int|false|20|每页条数'
      
      ]
    
    ]);
  
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