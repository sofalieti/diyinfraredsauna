<?php

namespace App\Admin\Extensions\Form;

use Encore\Admin\Form\Field;

class Redactor extends Field
{
    public static $js = [
        '/libs/redactor-js-master/redactor/redactor.js',
    ];
    public static $css = [
        '/libs/redactor-js-master/redactor/redactor.css',
    ];
    //	<link rel="stylesheet" href="../redactor/redactor.css" />
    //	<script src="../redactor/redactor.min.js"></script>
    protected $view = 'admin.redactor';

    public function render()
    {
        $this->script = "$('textarea.redactor').redactor({imageUpload: '/libs/redactor-js-master/image_upload_secret1231.php'});";

        return parent::render();
    }
}