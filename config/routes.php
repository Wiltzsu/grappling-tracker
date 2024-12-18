<?php

/**
 * This file contains routes for the application.
 * 
 * PHP version 8
 * 
 * @category Config
 * @package  App\Config
 * @author   William Lönnberg <william.lonnberg@gmail.com>
 * @license  MIT License
 * @link     https://grapplingtracker.com
 */
use Phroute\Phroute\RouteCollector;

return function (RouteCollector $router, $container) {
    $router->get(
        '/', function () use ($container) {
            echo $container->get('Twig\Environment')->render('front-page.twig');
        }
    );

    $router->filter(
        'auth', function () {
            $userID = $_SESSION['userID'] ?? null;
            if (!$userID) {
                header('Location: login');
                exit();
            }
        }
    );

    $router->get(
        '/register', function () use ($container) {
            return $container->get(App\Controllers\UserController::class)->showRegisterForm();
        }
    );

    $router->post(
        '/register', function () use ($container) {
            return $container->get(App\Controllers\UserController::class)->register($_POST);
        }
    );

    $router->get(
        '/activate', function () use ($container) {
            return $container->get(App\Controllers\UserController::class)->activate($_GET);
        }
    );

    $router->get(
        '/login', function () use ($container) {
            return $container->get(App\Controllers\UserController::class)->showLoginForm();
        }
    );

    $router->get(
        '/resetpassword', function () use ($container) {
            return $container->get(App\Controllers\UserController::class)->showResetPasswordForm();
        }
    );

    $router->post(
        '/send-password-reset', function () use ($container) {
            $container->get(App\Controllers\UserController::class)->sendPasswordReset($_POST);
        }
    );
    
    $router->post(
        '/login', function () use ($container) {
            $container->get(App\Controllers\UserController::class)->login($_POST);
        }
    );

    $router->get(
        '/logout', function () use ($container) {
            $container->get(App\Controllers\UserController::class)->logout($_POST);
        }, ['before' => 'auth']
    );

    $router->get(
        '/mainview', function () use ($container) {
            return $container->get(App\Controllers\MainViewController::class)->showMainView();
        }, ['before' => 'auth']
    );

    $router->post(
        '/mainview', function () use ($container) {
            $container->get(App\Controllers\MainViewController::class)->handlePostRequest($_POST);
        }, ['before' => 'auth']
    );

    $router->get(
        '/addnew', function () use ($container) {
            return $container->get(App\Controllers\AddNewController::class)->showAddNewView();
        }, ['before' => 'auth']
    );

    $router->get(
        '/addtechnique', function () use ($container) {
            return $container->get(App\Controllers\TechniqueController::class)->addTechniqueForm();
        }, ['before' => 'auth']
    );

    $router->post(
        '/addtechnique', function () use ($container) {
            return $container->get(App\Controllers\TechniqueController::class)->postTechnique($_POST);
        }, ['before' => 'auth']
    );

    $router->get(
        '/addcategory', function () use ($container) {
            return $container->get(App\Controllers\CategoryController::class)->addCategoryForm();
        }, ['before' => 'auth']
    );

    $router->post(
        '/addcategory', function () use ($container) {
            return $container->get(App\Controllers\CategoryController::class)->postCategory($_POST);
        }, ['before' => 'auth']
    );

    $router->get(
        '/addposition', function () use ($container) {
            return $container->get(App\Controllers\PositionController::class)->addPositionForm();
        }, ['before' => 'auth']
    );

    $router->post(
        '/addposition', function () use ($container) {
            return $container->get(App\Controllers\PositionController::class)->postPosition($_POST);
        }, ['before' => 'auth']
    );

    $router->get(
        '/addclass', function () use ($container) {
            return $container->get(App\Controllers\TrainingClassController::class)->addClassForm();
        }, ['before' => 'auth']
    );

    $router->post(
        '/addclass', function () use ($container) {
            return $container->get(App\Controllers\TrainingClassController::class)->postTrainingClass($_POST);
        }, ['before' => 'auth']
    );

    $router->get(
        '/viewitems', function () use ($container) {
            return $container->get(App\Controllers\ViewController::class)->showViewItems();
        }, ['before' => 'auth']
    );

    $router->get(
        '/viewtechniques', function () use ($container) {
            return $container->get(App\Controllers\TechniqueController::class)->showTechniqueView();
        }, ['before' => 'auth']
    );

    $router->post(
        '/viewtechniques', function () use ($container) {
            $container->get(App\Controllers\TechniqueController::class)->handlePostRequest($_POST);
        }, ['before' => 'auth']
    );

    $router->get(
        '/viewclasses', function () use ($container) {
            return $container->get(App\Controllers\TrainingClassController::class)->showClassView();
        }, ['before' => 'auth']
    );

    $router->get(
        '/viewpositions', function () use ($container) {
            return $container->get(App\Controllers\PositionController::class)->showPositionView();
        }, ['before' => 'auth']
    );

    $router->get(
        '/viewcategories', function () use ($container) {
            return $container->get(App\Controllers\CategoryController::class)->showCategoryView();
        }, ['before' => 'auth']
    );

    $router->get(
        '/stats', function () use ($container) {
            return $container->get(App\Controllers\StatsController::class)->showStatsPage();
        }, ['before' => 'auth']
    );

    $router->get(
        '/profile', function () use ($container) {
            return $container->get(App\Controllers\ProfileController::class)->showProfile();
        }, ['before' => 'auth']
    );
};