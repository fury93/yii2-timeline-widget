<?php

namespace fury93\widgets;

/**
 * This is just an example.
 */
class Timeline extends \yii\base\Widget
{
    const WIDGET_NAME = 'timeline';

    public $items = [];
    public $icon = 'fa fa-clock-o';
    public $icon_color = "#0073B7";
    public $icon_font_color = "#FFF";
    public $collapsible = true;
    public $id;

    public function run()
    {
        return $this->render('timeline', [
            'history' => $this->items,
            'icon' => $this->icon,
            'icon_color' => $this->icon_color,
            'icon_font_color' => $this->icon_font_color,
            'collapsible' => $this->collapsible,
            'id' => (!empty($this->id)) ? $this->id : 'timeline-widget-' . $this->getId()
        ]);
    }
}
