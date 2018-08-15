<?php

namespace App\Controllers;

class Article extends \App\Controller
{

    protected function action()
    {
        if ( isset($_GET['id']) ) { //проверяем на существование

            $this->view = new \App\View();
            $this->view->article = \App\Models\Article::findById( $_GET['id'] );
        }
        $this->view->display(__DIR__ . '/../../templates/article.php');
    }

}