<?php 

namespace Modularity\Module\Linkgroup;

class Linkgroup extends \Modularity\Module
{
    public $slug = 'mod-linkgroup';
    public $nameSingular = 'Linkgroup';
    public $namePlural = 'Linkgroups';
    public $description = 'Linkgroup module for Modularity';
    public $templateDir = LINKGROUP_MODULE_PATH . 'templates';

    public function init()
    {

        $this->nameSingular = __('Linkgroup', 'modularity');
        $this->namePlural =   __('Linkgroups', 'modularity');
        $this->description =  __('Outputs Linkgroup', 'modularity');
    }

    public function template()
    {
        return 'modularity-mod-linkgroup.blade.php';
    }

    public function data() : array
    {
        return get_fields($this->ID);
    }

    public function script()
    {
        // Not working :(
        // https://github.com/helsingborg-stad/Modularity/issues/34
        wp_register_script('mod-linkgroup-js', plugins_url( '/assets/js/mod-linkgroup.js', __FILE__ ), array(), '', true);
        wp_enqueue_script('mod-linkgroup-js');
    }
}
