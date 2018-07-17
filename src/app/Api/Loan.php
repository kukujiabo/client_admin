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
        'loan_name' => 'loan_name|string|false||贷款名称',
        'phone' => 'phone|string|false||联系人电话',
        'fields' => 'fields|string|false||银行字段',
        'order' => 'order|string|false||排序', 
        'page' => 'page|int|false|1|页码',
        'page_size' => 'page_size|int|false|20|每页条数'
         
      ],

      'getAll' => [
      
        'reward_name' => 'reward_name|string|false||贷款名称',
        'reward_code' => 'reward_code|string|false||贷款编码',
        'status' => 'status|int|false||贷款状态',
        'fields' => 'fields|string|false||查询字段',
        'order' => 'order|string|false||排序',
        'page' => 'page|int|false||页码',
        'page_size' => 'page_size|int|false||每页条数'
      
      ],

      'getLoanCommissionList' => [
      
        'reward_name' => 'reward_name|string|false||贷款名称',
        'fields' => 'fields|string|false||查询字段',
        'order' => 'order|string|false||排序',
        'page' => 'page|int|false||页码',
        'page_size' => 'page_size|int|false||每页条数'
      
      ]
    
    ]);
  
  }

  /**
   * 查询贷款申请列表
   * @desc 查询贷款申请列表
   *
   * @return array list
   */
  public function getApplyList() {
  
    return $this->dm->getApplyList($this->retriveRuleParams(__FUNCTION__));
  
  }

  /**
   * 获取全部贷款列表
   * @desc 获取全部贷款列表
   *
   * @return array list
   */
  public function getAll() {
  
    return $this->dm->getAll($this->retriveRuleParams(__FUNCTION__)); 
  
  }

  /**
   * 获取贷款列表
   * @desc 获取贷款列表
   *
   * @return array list
   */
  public function getLoanCommissionList() {
  
    return $this->dm->getLoanCommissionList($this->retriveRuleParams(__FUNCTION__)); 
  
  }

}
