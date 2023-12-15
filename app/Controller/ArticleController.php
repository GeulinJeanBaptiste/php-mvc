<?php

namespace App\Controller;

use App\Weblitzer\Controller;
use App\Model\PostModel;
use App\Model\UserModel;

/**
 *
 */
class ArticleController extends Controller
{

    public function index()
    {
        $articles = PostModel::all();
        $user =  new UserModel;
        $this->render('app.article.index', array(
            'articles' => $articles,
            'user' => $user,
        ));
    }
    public function show($id)
    {
        $show = PostModel::findById($id);
        $this->render('app.show.index', array(
            'show' => $show,
        ));
        // $this->dbug($show);
    }
    /**
     * @
     */
    public function Page404()
    {
        $this->render('app.default.404');
    }

    public function delete($id)
    {
        PostModel::delete($id);
        $this->redirect('articles');
    }
    public function edit($id)
    {
        $this->dbug($id);
    }
    public function create()
    {
        // $this->render('app.article.create');
    }
}
