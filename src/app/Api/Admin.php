<?php
namespace App\Api;

/**
 * 管理员接口
 *
 * @author Meroc Chen <398515393@qq.com> 2018-03-02
 */
class Admin extends BaseApi {

  public function getRules() {
  
    return $this->rules([

      'login' => [
      
        'account' => 'account|string|true||管理员账号',

        'password' => 'password|string|true||管理员密码'
      
      ],

      'sessionAdminInfo' => [
      
      ],

      'addAcct' => [
      
        'account' => 'account|string|true||账号',

        'password' => 'password|string|true||密码'
      
      ],

      'getChannelList' => [
      
        'keywords' => 'keywords|string|true||关键字',

        'page' => 'page|int|false|1|页码',

        'page_size' => 'page_size|int|false|20|每页条数'
      
      ],

      'getAllChannel' => [
      
      
      ]
    
    ]);
  
  }

  /**
   * 管理员登录
   * @desc 管理员登录
   *
   * @return array auth
   */
  public function login() {
  
    return $this->dm->login($this->retriveRuleParams(__FUNCTION__));
  
  }

  /**
   * 获取当前回话的管理员信息
   * @desc 获取当前回话的管理员信息
   *
   * @return array info
   */
  public function sessionAdminInfo() {
  
    return $this->dm->sessionAdminInfo();
  
  }

  /**
   * 新增管理员
   * @desc 新增管理员
   *
   * @return array info
   */
  public function addAcct() {
  
    return $this->dm->addAcct($this->retriveRuleParams(__FUNCTION__));
  
  }

  /**
   * 查询全部渠道账号
   * @desc 查询全部渠道账号
   *
   * @return array data
   */
  public function getAllChannel() {
  
    return $this->dm->getAllChannel($this->retriveRuleParams(__FUNCTION__));
  
  }

  /**
   * 查询渠道列表
   * @desc 查询渠道列表
   *
   * @return array data
   */
  public function getChannelList() {
  
    return $this->dm->getChannelList($this->retriveRuleParams(__FUNCTION__)); 
  
  }

}
