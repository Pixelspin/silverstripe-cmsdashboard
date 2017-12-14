<?php

namespace Pixelspin\CMSDashboard\Admin;

use SilverStripe\Admin\LeftAndMain;

class Dashboard extends LeftAndMain {

    private static $url_segment = 'dashboard';
    private static $menu_title = 'Dashboard';
    private static $menu_priority = 999;
    private static $url_priority = 999;
    private static $menu_icon_class = 'font-icon-monitor';

    public function init()
    {
        return parent::init();
        Requirements::css('pixelspin/silverstripe-cmsdashboard:resources/css/dashboard.css');
    }

}
