<?php

namespace Pixelspin\CMSDashboard\Admin;

use SilverStripe\Admin\LeftAndMain;
use SilverStripe\Core\Config\Config;
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
        $disabledPanels = Config::inst()->get(self::class, 'disabled_panels');
        $panels = new ArrayList();
        $panelClasses = ClassInfo::subclassesFor(DashboardPanel::class);
        $panelsList = [];
        foreach($panelClasses as $panelClass){
            if($panelClass == DashboardPanel::class || ($disabledPanels && in_array($panelClass, $disabledPanels))){
                continue;
            }
            $panel = new $panelClass();
            if(!$panel->showPanel()){
                continue;
            }
            $sort = $panel->getSort();
            if(!array_key_exists($sort, $panelsList)){
                $panelsList[$sort] = [];
            }
            $panelsList[$sort][] = $panel;
        }
        ksort($panelsList);
        foreach($panelsList as $panelsArray){
            foreach($panelsArray as $panel){
                $panels->push($panel);
            }
        }
        return $panels;
    }

}
