<?php

namespace Pixelspin\CMSDashboard\Admin;

use SilverStripe\View\ViewableData;

class DashboardPanel extends ViewableData {

    private static $colClasses = 'col-md-4';
    private static $icon = '';

    public function forTemplate(){
        return $this->renderWith('Pixelspin\CMSDashboard\Admin\DashboardPanel');
    }

    public function getIcon(){
        return $this->config()->get('icon');
    }

    public function getTitle(){
        $className = get_class($this);
        return str_replace('DashboardPanel_', '', $className);
    }

    public function getColClasses(){
        return $this->config()->get('colClasses');
    }

    public function getContent(){
        return 'Override the getContent method...';
    }

}
