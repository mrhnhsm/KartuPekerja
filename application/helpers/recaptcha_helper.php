<?php
defined('BASEPATH') OR exit('No direct script access allowed');

if ( ! function_exists('recaptcha'))
{
    function recaptcha()
    {
        $CI =& get_instance();
        return '<div class="g-recaptcha" data-sitekey="'.$CI->config->item('recaptcha_site_key').'"></div>';
    }
}
