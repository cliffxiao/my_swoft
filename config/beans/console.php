<?php

/*
 * This file is part of Swoft.
 * (c) Swoft <group@swoft.org>
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * 路由配置比较简单，配置命令路由解析信息，通常情况无需配置。若需配置，只需在扫描文件里面配置路由信息，默认配置在app/config/beans/console.php里面。

return [
    // ......
    'commandRoute' => [
        'class' => \Swoft\Console\Router\HandlerMapping::class,
        'suffix' => 'Command',
        'deaultCommand' => 'index',
        'delimiter' => ':',
    ],
    // ......
];
suffix 命令后缀，用于命令组名称缺省时，自动解析命令，参数默认Command
deaultCommand 默认的操作命令，默认index
delimiter 命名之间分割符,默认 ":"
 *
 */

return [

];