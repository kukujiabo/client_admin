<?php
namespace App\Api;

/**
 * 微信服务相关接口
 *
 * @author Meroc Chen
 */
class Wechat extends BaseApi {

  public function getRules() {
  
    return $this->rules([
    
      'createMenu' => [
      
        'menus' => 'menus|string|true||菜单'
      
      ],

      'getMenu' => [

      
      ]
    
    ]);
  
  }

  /**
   * 创建菜单
   * @desc 创建菜单
   *
   * @return boolean true/false
   */ 
  public function createMenu() {
  
    return $this->dm->createMenu($this->retriveRuleParams(__FUNCTION__));
  
  }

  /**
   * 获取菜单内容
   * @desc 获取菜单内容
   *
   * @return array list
   */
  public function getMenu() {
  
    return $this->dm->getMenu();
  
  }

}
