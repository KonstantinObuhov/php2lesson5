<?php

namespace App\Controllers;

use App\Controller;
use App\Models\Article;

class Panel
    extends Controller
{

    public function actionDefault()
    {
        $this->view->news = Article::findAll();
        echo $this->view->render(
            __DIR__ . '/../../Panel/NewsTemplatePanel.php'
        );
    }

    public function actionEdit()
    {
        if (isset($_GET['id'])) {
            $this->view->article = Article::findById($_GET['id']);
        } else {
            $this->view->article = new Article;
        }
        echo $this->view->render(
            __DIR__ . '/../../Panel/EditorTemplate.php'
        );
    }

    public function actionSave()
    {
        if (isset($_POST['id'])) {
            $article = Article::findById($_POST['id']);
        } else {
            $article = new Article;
        }
        $article->title = $_POST['title'];
        $article->text = $_POST['text'];
        $article->author_id = $_POST['author_id'];
        $article->save();
        $this->sendRedirect('/Panel/');
    }

    public function actionDel()
    {
        $article = Article::findById($_GET['id']);
        $article->delete();
        $this->sendRedirect('/Panel/');
    }
}