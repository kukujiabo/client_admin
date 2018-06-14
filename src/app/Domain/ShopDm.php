<?php
namespace App\Domain;

class ShopDm {

  /**
   * 新建
   */
  public function create($data) {
  
    return \App\request('App.Shop.Create', $data);
  
  }

  /**
   * 列表
   */
  public function listQuery($data) {
  
    return \App\request('App.Shop.ListQuery', $data);
  
  }

  /**
   * 查询详情
   */
  public function getDetail($data) {
  
    return \App\request('App.Shop.GetDetail', $data);
  
  }

  /**
   * 更新店铺信息
   */
  public function updateShop($data) {
  
    return \App\request('App.Shop.UpdateShop', $data);
  
  }

  /**
   * 查询全部列表
   */
  public function getAll($data) {
  
    return \App\request('App.Shop.GetAll', $data);
  
  }

}
