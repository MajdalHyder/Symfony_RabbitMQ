<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    'app_order_create' => [[], ['_controller' => 'App\\Controller\\OrderController::createAction'], [], [['text', '/order/create']], [], [], []],
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], [], []],
];