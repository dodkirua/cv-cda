<?php


namespace Controller\Classes;


class IndexController extends Controller{

    /**
     * display the index page
     * @param array|null $var
     */
    public static function display(array $var = null) : void{

        self::render('index','Accueil',$var);
    }

}