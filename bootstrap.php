<?php

use Blessing\Filter;
use Illuminate\Contracts\Events\Dispatcher;
use App\Services\Hook;

return function (Dispatcher $events, Filter $filter) {
    //
};

Hook::addMenuItem('user', 0, [
    'title' => 'CakeSkin\\Helper::menu.docs',
    'link'  => 'https://help.cakemc.top/',
    'icon'  => 'fa-book',
    'new-tab' => true, // 表示是否在浏览器新标签页中打开链接，默认为 false
]);