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
      
        'token' => 'token|string|true||后台管理员令牌',
      
        'account' => 'token|string|true||后台管理员令牌',
      
        'password' => 'password|string|true||后台管理员令牌',

        'auth' => 'auth|string|true||后台管理员令牌',

        'city_code' => 'city_code|string|true||后台管理员令牌'
      
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

  public function addAcct() {
  
    return $this->dm->addAcct($this->retriveRuleParams(__FUNCTION__));
  
  }

}
