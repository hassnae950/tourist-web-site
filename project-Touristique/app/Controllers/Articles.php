<?php

namespace App\Controllers;

class Articles extends BaseController
{
    public function listArticles(): string
    {
        $data['articles'] = [
            ['title' => 'First Article', 'content' => 'This is the first article.'],
            ['title' => 'Second Article', 'content' => 'This is the second article.'],
            ['title' => 'Third Article', 'content' => 'This is the third article.']
        ];

        return view('articles/index', $data);
    }
}
