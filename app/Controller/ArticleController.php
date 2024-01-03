<?php

namespace App\Controller;

use App\Weblitzer\Controller;
use App\Model\PostModel;
use App\Model\UserModel;
use App\Service\Form;
use App\Service\Validation;

/**
 *
 */
class ArticleController extends Controller
{
    public function index()
    {
        $articles = PostModel::all();
        $nbArticles = PostModel::count();
        $user = new UserModel;

        $this->render(
            'app.article.index',
            [
                'articles' => $articles,
                'nbArticles' =>  $nbArticles,
                'user' => $user
            ]
        );
    }
    public function create()
    {
        $errors = [];

        // Test de validation formulaire
        if (!empty($_POST['submitted'])) :
            $postArticle = $this->cleanXss($_POST);

            $validerArticle = new Validation;

            $errors['title'] = $validerArticle->textValid($postArticle['title'], 'title', 5, 100);
            $errors['content'] = $validerArticle->textValid($postArticle['content'], 'content', 5, 1000);

            if ($validerArticle->IsValid($errors)) :
                //Insertion des données du formulaire en base de donnée
                PostModel::insert($postArticle);
                $this->redirect('articles');
            endif;
        endif;

        $formAdd = new Form($errors);
        $users = UserModel::all();
        // $this->dd($users);
        $this->render('app.article.create', [

            'formAdd' => $formAdd,
            'users' => $users
        ]);
    }

    public function edit($id)
    {

        $articleEdit = $this->isArticleExist($id);
        $errors = [];

        // Test de validation formulaire
        if (!empty($_POST['submitted'])) :
            $postArticleEdit = $this->cleanXss($_POST);

            $validerArticleEdit = new Validation;

            $errors['title'] = $validerArticleEdit->textValid($postArticleEdit['title'], 'title', 5, 100);
            $errors['content'] = $validerArticleEdit->textValid($postArticleEdit['content'], 'content', 5, 1000);

            if ($validerArticleEdit->IsValid($errors)) :
            //Insertion des données du formulaire en base de donnée

            // $this->redirect('articles');
            endif;
        endif;

        $formAddEdit = new Form($errors);

        $this->render('app.article.editarticle', [

            'formAddEdit' => $formAddEdit,
            'articleEdit' => $articleEdit
        ]);
    }
    /**
     * @
     */
    public function show($id)
    {
        $article = $this->isArticleExist($id);
        $user = new UserModel;

        $this->render(
            'app.article.show',
            [
                'article' => $article,
                'user' => $user,
            ]
        );
    }
    public function delete($id)
    {
        $articleDelete = $this->isArticleExist($id);
        PostModel::delete($id);
        $this->redirect('articles');
    }
    public function isArticleExist($id)
    {
        $article = PostModel::findById($id);

        // if (empty($article)):
        //     $this->Abort404();
        // endif;

        // return $article;

        return (empty($article)) ? $this->Abort404() : $article;
    }
}
