<?php
namespace App\Api;

/**
 * 渠道价格接口
 *
 */
class ChannelPrice extends BaseApi {

  public function getRules() {
  
    return $this->rules([
    
      'getPrice' => [
      
        'bank_id' => 'bank_id|int|true||银行id',

        'channel_id' => 'channel_id|int|true||渠道id'
      
      ]
    
    ]);
  
  }

  /**
   * 查询渠道价格
   *
   *
   */
  public function getPrice() {
  
    return $this->dm->getPrice($this->retriveRuleParams(__FUNCTION__));
  
  }

}
