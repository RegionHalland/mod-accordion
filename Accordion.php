<?php 

namespace Modularity\Module\Accordion;

class Accordion extends \Modularity\Module
{
    public $slug = 'mod-accordion';
    public $nameSingular = 'Accordion';
    public $namePlural = 'Accordions';
    public $description = 'Accordionmodule for Modularity';
    public $templateDir = ACCORDION_MODULE_PATH . 'templates';

    public function init()
    {

        $this->nameSingular = __('Accordion', 'modularity');
        $this->namePlural =   __('Accordions', 'modularity');
        $this->description =  __('Outputs Accordion', 'modularity');
    }

    public function template()
    {
        return 'modularity-mod-accordion.blade.php';
    }

    public function data() : array
    {
        return get_fields($this->ID);
    }

    public function script()
    {
        // Not working :(
        // https://github.com/helsingborg-stad/Modularity/issues/34
        wp_register_script('mod-accordion-js', plugins_url( '/assets/js/mod-accordion.js', __FILE__ ), array(), '', true);
        wp_enqueue_script('mod-accordion-js');
    }
}
