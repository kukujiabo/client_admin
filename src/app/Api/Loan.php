<?php
namespace App\Api;

/**
 * 贷款接口
 *
 * @author Meroc Chen <398515393@qq.com>
 */
class Loan extends BaseApi {

  public function getRules() {
  
    return $this->rules([
    
      'getApplyList' => [
      
        'name' => 'name|string|false||银行名称',
        'contact' => 'contact|string|false||联系人姓名',
        'phone' => 'phone|string|false||联系人电话',
        'fields' => 'fields|string|false||银行字段',
        'order' => 'order|string|false||排序', 
        'page' => 'page|int|false|1|页码',
        'page_size' => 'page_size|int|false|20|每页条数'
         
      ]
    
    ]);
  
  }

  public function getApplyList() {
  
    return $this->dm->getApplyList($this->retriveRuleParams(__FUNCTION__));
  
  }

}
