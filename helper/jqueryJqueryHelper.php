<?php
class jqueryJqueryHelper extends jqueryJqueryHelper_Parent
{

    public function getUrl()
    {
        if (Clementine::$config['module_jquery']['url']) {
            return $url; 
        }
        return __WWW_ROOT_JQUERY__ . '/skin/js/jquery.min.js';
    }

}
