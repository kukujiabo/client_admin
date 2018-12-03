<?php
namespace App\Domain;

class ChannelPriceDm {

  public function getPrice($data) {

    return \App\request('App.ChannelPrice.GetPrice', $data);

  }

}
