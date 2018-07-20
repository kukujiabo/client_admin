<?php
namespace App\Domain;

class WechatDm {

  public function createMenu($data) {
  
    return \App\request('App.Wechat.CreateMenu', $data);
  
  }

  public function getMenu() {
  
    return \App\request('App.Wechat.GetMenu', []);
  
  }

}
