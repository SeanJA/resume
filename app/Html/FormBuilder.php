<?php

namespace App\Html;

use Collective\Html\FormBuilder as CollectiveFormBuilder;

class FormBuilder extends CollectiveFormBuilder
{
    /**
     * The HTML builder instance.
     *
     * @var \App\Html\HtmlBuilder
     */
    protected $html;

    /**
     * @param array $options
     * @return string
     */
    public function ajax(array $options = array()){
        $options[] = 'data-remote';
        return parent::open($options);
    }
}
