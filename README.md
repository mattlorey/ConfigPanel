# ConfigPanel

Panel for [CakePHP](http://cakephp.org/)'s [DebugKit](https://github.com/cakephp/debug_kit) Toolbar to show Configuration data

## Installation

* Clone/Copy the files in this directory into `app/Plugin/ConfigPanel`

This can be done with the git submodule command
```sh
git submodule add https://github.com/mattlorey/ConfigPanel.git app/Plugin/ConfigPanel
```

* If you haven't already, follow the [installation directions](https://github.com/cakephp/debug_kit#installation) for DebugKit
* Add the ConfigPanel in the component configuration in your `app/Controller/AppController.php`:
```php
class AppController extends Controller {
    public $components = array(
        'DebugKit.Toolbar' => array(
            'panels' => array('ConfigPanel.config')
        )
    );
}
```