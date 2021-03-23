<?php
return [
    'use_alias'    => env('WECHAT_USE_ALIAS', false),
    'app_id'       => env('WECHAT_APPID', 'wxeab55cbfadd3a7ef'), // 必填
    'secret'       => env('WECHAT_SECRET', '072240fea1aaeab5639fbc3a9b26c527'), // 必填
    'token'        => env('WECHAT_TOKEN', 'discountry'),  // 必填
    'encoding_key' => env('WECHAT_ENCODING_KEY', 'xtRd1XdEWVruNAhRoLE6XznYhsJ2Kti5kugPWFaCpoM') // 加密模式需要，其它模式不需要
];