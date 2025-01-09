<?php

class Controller {
    //Dump die
    public function dd($var){
        var_dump($var);
        die();
    }
    //Função que carrega as views 
    public function view(string $view, array $data = []) {
        $path = dirname(__FILE__, 2) . DIRECTORY_SEPARATOR . 'Views';
        $templates = new League\Plates\Engine($path);

        echo $templates->render($view, $data);

    }
}