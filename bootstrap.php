<?php

use Blessing\Filter;
use Illuminate\Contracts\Events\Dispatcher;
use App\Services\Hook;

return function ($plugin) {
    Hook::addMenuItem('explore', 1, [
        'title' => 'CakeSkin\\Helper::menu.docs',
        'link'  => 'https://help.cakemc.top/',
        'icon'  => 'fa-book',
        'new-tab' => true,
    ]);
    Hook::addMenuItem('user', 7, [
        'title' => 'CakeSkin\\Helper::menu.donate',
        'link'  => 'https://afdian.net/@Big_Cake2577117205',
        'icon'  => 'fa-donate',
        'new-tab' => true,
    ]);
    Hook::addMenuItem('explore', 2, [
        'title' => 'CakeSkin\\Helper::menu.privacy',
        'link'  => 'https://help.cakemc.top/cakeskin/policies/privacy.html',
        'icon'  => 'fa-book',
        'new-tab' => true,
    ]);
    Hook::addMenuItem('explore', 3, [
        'title' => 'CakeSkin\\Helper::menu.tos',
        'link'  => 'https://help.cakemc.top/cakeskin/policies/tos.html',
        'icon'  => 'fa-book',
        'new-tab' => true,
    ]);
    Hook::addMenuItem('explore', 4, [
        'title' => 'CakeSkin\\Helper::menu.mail',
        'link'  => 'mailto:bigcake@cakemc.top',
        'icon'  => 'fa-envelope-open-text',
        'new-tab' => true,
    ]);
};
