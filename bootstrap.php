<?php

use Blessing\Filter;
use Illuminate\Contracts\Events\Dispatcher;
use App\Services\Hook;

return function ($plugin) {
    // $plugin 就是这个插件的实例。

    // 可以像下面这样获取前端资源 URL：
    // $plugin->assets('something.css');

    Hook::addMenuItem('explore', 0, [
        'title' => 'CakeSkin\\Helper::menu.docs',
        'link'  => 'https://help.cakemc.top/',
        'icon'  => 'fa-book',
        'new-tab' => true, // 表示是否在浏览器新标签页中打开链接，默认为 false
    ]);
    Hook::addMenuItem('user', 7, [
        'title' => 'CakeSkin\\Helper::menu.donate',
        'link'  => 'https://afdian.net/@Big_Cake2577117205',
        'icon'  => 'fa-yen-sign',
        'new-tab' => true, // 表示是否在浏览器新标签页中打开链接，默认为 false
    ]);
};