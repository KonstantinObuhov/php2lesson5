<?php

namespace App\Controllers;

use App\Controller;
use App\Models\Article;

class Index
    extends Controller
{

    public function actionDefault()
    {
        $this->view->news = Article::findAll();
        echo $this->view->render(
            __DIR__ . '/../Templates/index.php'
        );
    }

    public function actionOne()
    {
        $this->view->article = Article::findById($_GET['id']);
        echo $this->view->render(
            __DIR__ . '/../Templates/article.php'
        );
    }

}