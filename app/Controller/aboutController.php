<?php

namespace App\Controller;

use App\Weblitzer\Controller;

/**
 *
 */
class AboutController extends Controller
{

    public function index()
    {
        $about = 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Illum, minima?';
        $this->render('app.about.index', [
            'about' => $about,
        ]);
    }

    /**
     * @
     */
    public function Page404()
    {
        $this->render('app.default.404');
    }
}
