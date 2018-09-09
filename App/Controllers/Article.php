<?php

namespace App\Controllers;

class Article extends \App\Controller
{

    protected function action()
    {
        if ( isset($_GET['id']) ) { //проверяем на существование

            $this->view = new \App\View();

            $this->view->article = \App\Models\Article::findById( $_GET['id'] );

            if (false === $this->view->article) {
                throw new \App\Error404Exception('Ошибка 404 - не найдено:(');
            }
        }
        $this->view->display(__DIR__ . '/../../templates/article.php');
    }
}
