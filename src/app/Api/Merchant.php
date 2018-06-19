<?php
namespace App\Api;

/**
 * 银行api
 *
 * @author Meroc Chen <398515393@qq.com>
 */
class Merchant extends BaseApi {

  public function getRules() {
  
    return $this->rules([
    
      'create' => [

        'mcode' => 'mcode|string|true||银行号',
        'mname' => 'mname|string|true||商家名称',
        'thumbnail' => 'thumbnail|string|true||商家头像',
        'brief' => 'brief|string|false||商家简介',
        'process_url' => 'process_url|string|false||信用卡查询进度链接',
        'phone' => 'phone|string|false||银行手机号',
        'image_text' => 'image_text|string|false||商家图文详情',
        'carousel' => 'carousel|string|false||商家轮播图',
        'status' => 'status|int|false|1|银行状态'
      
      ],

      'updateMerchant' => [
      
        'id' => 'id|int|ture||银行id',
        'mname' => 'mname|string|false||商家名称',
        'thumbnail' => 'thumbnail|string|false||商家头像',
        'brief' => 'brief|string|false||商家简介',
        'process_url' => 'process_url|string|false||信用卡查询进度链接',
        'phone' => 'phone|string|false||银行手机号',
        'image_text' => 'image_text|string|false||商家图文详情',
        'carousel' => 'carousel|string|false||商家轮播图',
        'status' => 'status|int|false|1|银行状态'
      
      ],

      'listQuery' => [

        'mcode' => 'mcode|string|false||银行号',
        'mname' => 'mname|string|false||商家名称',
        'status' => 'status|int|false|1|银行状态',
        'page' => 'page|int|false|1|页码',
        'page_size' => 'page_size|int|false|20|每页条数',
        'order' => 'order|string|false||排序'

      ],

      'getAll' => [

        'mcode' => 'mcode|string|false||银行号',
        'mname' => 'mname|string|false||商家名称',
        'order' => 'order|string|false||排序',
        'fields' => 'fields|string|false||返回字段',
        'status' => 'status|int|false|1|银行状态'

      ],

      'applyList' => [
      
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

  /**
   * 新增银行信息
   * @desc 新增银行信息
   *
   * @return int id
   */
  public function create() {
  
    return $this->dm->create($this->retriveRuleParams(__FUNCTION__));
  
  }

  /**
   * 银行列表
   * @desc 银行列表
   *
   * @return array list
   */
  public function listQuery() {
  
    return $this->dm->listQuery($this->retriveRuleParams(__FUNCTION__));
  
  }

  /**
   * 获取全部银行
   * @desc 获取全部银行
   *
   * @return array list
   */
  public function getAll() {
  
    return $this->dm->getAll($this->retriveRuleParams(__FUNCTION__));
  
  }

  /**
   * 银行申请列表
   * @desc 银行申请列表
   *
   * @return array list
   */
  public function applyList() {
  
    return $this->dm->applyList($this->retriveRuleParams(__FUNCTION__));
  
  }

  /**
   * 更银行信息
   * @desc 更新银行信息
   *
   * @return int num
   */
  public function updateMerchant() {
  
    return $this->dm->updateMerchant($this->retriveRuleParams(__FUNCTION__));
  
  }

}
