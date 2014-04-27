<?php
App::uses("DebugPanel", "DebugKit.Lib");

class ConfigPanel extends DebugPanel
{
    public $plugin = "ConfigPanel";

    public function beforeRender(Controller $controller)
    {
        $configs = array();
        foreach (Configure::read() as $config => $value) {
            $configs[] = array("<pre>$config</pre>", "<pre>" . print_r($value, 1) . "</pre>");
        }

        return $configs;
    }
}