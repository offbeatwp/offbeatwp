<?php
use \OffbeatWP\Content\Post\PostsCollection;
use \App\Controllers\PagesController;
use \App\Controllers\PostsController;
use \App\Controllers\ErrorsController;
use \App\Controllers\SearchController;

offbeat('routes')->register([PagesController::class, 'actionSingle'],
    function () {
        return is_singular('page');
    },
    function () {
        return ['post' => offbeat('post')->convertWpPostToModel($GLOBALS['post'])];
    }
);

offbeat('routes')->register([PostsController::class, 'actionSingle'],
    function () {
        return is_singular('post');
    },
    function () {
        return ['post' => offbeat('post')->convertWpPostToModel($GLOBALS['post'])];
    }
);

offbeat('routes')->register([PostsController::class, 'actionArchive'], 
    function () {
        return is_archive();
    },
    function () {
        return ['posts' => new PostsCollection($GLOBALS['wp_query'])];
    }
);

offbeat('routes')->register([PostsController::class, 'actionPostsPage'], 
    function () {
        return is_home();
    },
    function () {
        return ['posts' => new PostsCollection($GLOBALS['wp_query'])];
    }
);

offbeat('routes')->register([ErrorsController::class, 'action404'], function () {
    return is_404();
});

offbeat('routes')->register([SearchController::class, 'actionSearch'],
    function () {
        return is_search();
    },
    function () {
        return ['posts' => new PostsCollection($GLOBALS['wp_query'])];
    }
);