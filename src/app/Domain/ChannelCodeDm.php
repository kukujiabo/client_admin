<?php
namespace App\Domain;

class ChannelCodeDm {

  public function create($data) {
  
    return \App\request('App.ChannelCode.Create', $data);
  
  }

  public function getList($data) {
    
    return \App\request('App.ChannelCode.GetList', $data);
  
  }

  public function remove($data) {
  
    return \App\request('App.ChannelCode.Remove', $data);
  
  }


}
