<?php

namespace Pixelspin\CMSDashboard\Admin;

use SilverStripe\Admin\LeftAndMain;
use SilverStripe\ORM\ArrayList;
use SilverStripe\View\Requirements;
use SilverStripe\Core\ClassInfo;

class Dashboard extends LeftAndMain {

    private static $url_segment = 'dashboard';
    private static $menu_title = 'Dashboard';
    private static $menu_priority = 999;
    private static $url_priority = 999;
    private static $menu_icon_class = 'font-icon-monitor';

    public function init()
    {
        Requirements::css('pixelspin/silverstripe-cmsdashboard:resources/css/dashboard.css');
        return parent::init();
    }

    public function Panels(){
        $panels = new ArrayList();
        $panelClasses = ClassInfo::subclassesFor(DashboardPanel::class);
        foreach($panelClasses as $panelClass){
            if($panelClass == DashboardPanel::class){
                continue;
            }
            $panels->push(new $panelClass());
        }
        return $panels;
    }

}
