<?php

namespace Westery\Wechatapp;

/**
 * 微信第三方App后台交互部分
 * Class WechatApp
 * @package Westery\Wechatapp
 */
class WechatApp
{

    protected $config;

    public function __construct($config)
    {
        $this->config = $config;
    }

}
