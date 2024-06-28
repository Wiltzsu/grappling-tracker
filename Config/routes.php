<?php

use App\Controllers\CategoryController;
use Phroute\Phroute\RouteCollector;
use App\Controllers\UserController;
use App\Controllers\TrainingClassController;
use App\Controllers\PositionController;
use App\Controllers\TechniqueController;

return function (RouteCollector $router, $container) {
    $router->get('/', function () {
        require __DIR__ . '/../resources/views/front_page.php';
    });

    $router->get('/register', function () use ($container) {
        $twig = $container->get('Twig\Environment');
        echo $twig->render('register.twig');
    });

    $router->post('/register', function () use ($container) {
        $username = $_POST['username'] ?? null;
        $email = $_POST['email'] ?? null;
        $password = $_POST['password'] ?? null;
        $password_confirm = $_POST['password_confirm'] ?? null;

        $controller = $container->get(UserController::class);
        $result = $controller->register($username, $email, $password, $password_confirm);

        if ($result['success']) {
            header('Location: login');
            exit();
        } else {
            $twig = $container->get('Twig\Environment');
            echo $twig->render('register.twig', [
                'errors' => $result['errors'],
                'input' => $_POST
            ]);
        }
    });

    $router->get('/login', function () use ($container) {
        $twig = $container->get('Twig\Environment');
        echo $twig->render('login.twig');
    });
    
    $router->post('/login', function () use ($container) {
        $username = $_POST['username'] ?? null;
        $password = $_POST['password'] ?? null;
    
        $controller = $container->get(UserController::class);
        $result = $controller->login($username, $password);
    
        if ($result['success']) {
            header('Location: mainview');
            exit();
        } else {
            $twig = $container->get('Twig\Environment');
            echo $twig->render('login.twig', [
                'errors' => $result['errors'],
                'input' => $_POST
            ]);
        }
    });

    $router->get('/logout', function () {
        require __DIR__ . '/../resources/views/logout.php';
    });

    // Route to display the form
    $router->get('/addnew', function () use ($container) {
        $userID = $_SESSION['userID'] ?? null;
        if (!$userID) {
            header('Location: login');
            exit();
        }

        $twig = $container->get('Twig\Environment');
        $roleID = $_SESSION['roleID'] ?? null;
        echo $twig->render('add_new.twig', [
            'userID' => $userID,
            'roleID' => $roleID,

            'username' => $_SESSION['username'] ?? null
        ]);
    });

    $router->post('/addnew', function () use ($container) {
        $userID = $_SESSION['userID'] ?? null;
        if (!$userID) {
            header('Location: login');
            exit();
        }

        // Retrieve posted form data
        $instructor = $_POST['instructor'] ?? null;
        $location = $_POST['location'] ?? null;
        $duration = $_POST['duration'] ?? null;
        $classDate = $_POST['classDate'] ?? null;
        $classDescription = $_POST['classDescription'] ?? null;

        $trainingClassController = $container->get(TrainingClassController::class);
        $addTrainingClass = $trainingClassController->postTrainingClass($userID, $instructor, $location, $duration, $classDate, $classDescription);

        $twig = $container->get('Twig\Environment');
        $userID = $_SESSION['userID'] ?? null;
        echo $twig->render('add_new.twig', [
            'addTrainingClass' => $addTrainingClass,
            'userID' => $userID
        ]);
    });

    $router->get('/viewitems', function () use ($container) {
        $userID = $_SESSION['userID'] ?? null;
        if (!$userID) {
            header('Location: login');
            exit();
        }
    
        $trainingClassController = $container->get(TrainingClassController::class);
        $classes = $trainingClassController->getTrainingClasses($userID);
        
        $positionController = $container->get(PositionController::class);
        $positions = $positionController->getPositions();

        $categoryController = $container->get(CategoryController::class);
        $categories = $categoryController->getCategories();
    
        $techniqueController = $container->get(TechniqueController::class);
        $techniques = $techniqueController->getTechniques($userID);

        $twig = $container->get('Twig\Environment');
        $roleID = $_SESSION['roleID'] ?? null;
        echo $twig->render('view_items.twig', [
            'classes' => $classes,
            'positions' => $positions,
            'categories' => $categories,
            'techniques' => $techniques,
            'roleID' => $roleID,

            'username' => $_SESSION['username'] ?? null
        ]);
    });

    $router->get('/profile', function () {
        require __DIR__ . '/../resources/views/profile.php';
    });

    $router->get('/journal', function () {
        require __DIR__ . '/../resources/views/journal.php';
    });



    $router->get('/mainview', function () {
        require __DIR__ . '/../resources/views/main_view.php';
    });
};
