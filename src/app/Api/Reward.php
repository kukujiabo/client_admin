<?php
namespace App\Api;

/**
 * 赠品接口
 *
 * @author Meroc Chen <398515393@qq.com>
 */
class Reward extends BaseApi {

  public function getRules() {
  
    return $this->rules([

      'create' => [
      
        'reward_name' => 'reward_name|string|true||赠品名称',
        'reward_code' => 'reward_code|string|true||赠品编码',
        'thumbnail' => 'thumbnail|string|true||赠品图标',
        'brief' => 'brief|string|true||赠品简介',
        'rate' => 'rate|string|true||利率',
        'min_credit' => 'min_credit|int|true||最小额度',
        'max_credit' => 'max_credit|int|true||最大额度',
        'material' => 'material|string|true||贷款材料',
        'institution' => 'institution|string|true||机构介绍',
        'image_text' => 'image_text|string|true||申请条件',
        'limit' => 'limit|string|true||赠品所属门店',
        'time' => 'time|string|true||下款时间',
        'commission' => 'commission|string|true||佣金',
        'status' => 'status|int|false||赠品状态',
        'carousel' => 'carousel|string|false||赠品轮播图',
        'start_time' => 'start_time|string|false||赠品有效期开始',
        'end_time' => 'end_time|string|false||赠品有效期结束'
      
      ],

      'edit' => [

        'id' => 'id|int|true||id',
        'reward_name' => 'reward_name|string|false||赠品名称',
        'reward_code' => 'reward_code|string|false||赠品编码',
        'check_code' => 'check_code|string|false||核销码',
        'rate' => 'rate|string|true||利率',
        'min_credit' => 'min_credit|int|false||最小额度',
        'max_credit' => 'max_credit|int|false||最大额度',
        'material' => 'material|string|true||贷款材料',
        'institution' => 'institution|string|true||机构介绍',
        'image_text' => 'image_text|string|true||申请条件',
        'limit' => 'limit|string|false||赠品所属门店',
        'time' => 'time|string|false||下款时间',
        'commission' => 'commission|string|false||佣金',
        'thumbnail' => 'thumbnail|string|false||赠品图标',
        'brief' => 'brief|string|false||赠品简介',
        'status' => 'status|int|false||赠品状态',
        'carousel' => 'carousel|string|false||赠品轮播图',
        'start_time' => 'start_time|string|false||赠品有效期开始',
        'end_time' => 'end_time|string|false||赠品有效期结束'

      ],

      'listQuery' => [
      
        'shop_id' => 'shop_id|int|false||门店id',
        'reward_name' => 'reward_name|string|false||赠品名称',
        'reward_code' => 'reward_code|string|false||赠品编码',
        'status' => 'status|int|false||赠品状态',
        'fields' => 'fields|string|false||查询字段',
        'order' => 'order|string|false||排序',
        'page' => 'page|int|false||页码',
        'page_size' => 'page_size|int|false||每页条数'
      
      ],

      'getDetail' => [
      
        'id' => 'id|int|true||赠品id'
      
      ]
    
    ]);
  
  }

  /**
   * 新建赠品
   * @desc 新建赠品
   *
   * @return int id
   */
  public function create() {
  
    return $this->dm->create($this->retriveRuleParams(__FUNCTION__)); 
  
  }

  /**
   * 更新赠品信息
   * @desc 更新赠品信息
   *
   * @return int num
   */
  public function edit() {
  
    return $this->dm->edit($this->retriveRuleParams(__FUNCTION__));
  
  }

  /**
   * 查询赠品列表
   * @desc 查询赠品列表
   *
   * @return array list
   */
  public function listQuery() {
  
    return $this->dm->listQuery($this->retriveRuleParams(__FUNCTION__));
  
  }

  /**
   * 查询赠品详情
   * @desc 查询赠品详情
   *
   * @return array data
   */
  public function getDetail() {
  
    return $this->dm->getDetail($this->retriveRuleParams(__FUNCTION__));
  
  }

}
