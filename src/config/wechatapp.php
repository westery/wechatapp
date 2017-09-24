<?php

return [
        //微信应用后台交互部分
        'default' => [
            'appId' => env('WECHATAPP_APPID','your wechat app id'),
            'appKey' => env('WECHATAPP_APPKEY','your wechat app appkey'),
            'appSecret' => env('WECHATAPP_APPSECRET','you wechat app appsecret'),
        ]
];
