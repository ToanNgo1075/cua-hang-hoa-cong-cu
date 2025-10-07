<?php

namespace App\Http;

use Illuminate\Foundation\Http\Kernel as HttpKernel;

class Kernel extends HttpKernel
{
    protected $middleware = [
        // middleware toàn cục Laravel mặc định ở đây
       \App\Http\Middleware\LogIpMiddleware::class,
    ];

    protected $middlewareGroups = [
        'web' => [
            // middleware cho nhóm web
        ],

        'api' => [
            // middleware cho nhóm api
        ],
    ];
        protected $routeMiddleware = [
        // middleware route cụ thể, thêm middleware bạn tạo vào đây
        'logip' => \App\Http\Middleware\LogIpMiddleware::class,
    ];
}