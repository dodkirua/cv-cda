<?php

namespace Controller\Classes;

class MailController extends Controller{

    /**
     * display the connect page
     * @param array|null $var
     */
    public static function display(array $var = null) : void{
        $var['css'] = 'style_mail';
        self::render('mail','Contact',$var);
    }
}