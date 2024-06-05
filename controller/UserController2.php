<?php
/**
 * This file contains the User Controller class, which is responsible
 * for user login. It contains methods to validate user input,
 * authenticate the user and finally the class is initialized
 * for deployment.
 * 
 * @package Techniquedbmvc
 * @author  William
 * @license MIT License
 */

session_start();

require '../config/Database.php';

ini_set('log_errors', 1);
ini_set('display_errors', 1);
error_reporting(E_ALL);

/**
 * This class is responsible for user login.
 * 
 * It contains two methods, one for input validation and 
 * another one for authentication.
 */
class UserController2
{
    private $_db;

    /**
     * Constructor method that initializes the class every
     * time it is used. It takes the database connection
     * as a parameter.
     * 
     * @param $db Database connection.
     */
    public function __construct($db)
    {
        $this->_db = $db;
    }

    /**
     * Validates user input. The method checks if username
     * field is empty or if the password is proper length.
     *
     * @param $username Username
     * @param $password Password
     * 
     * @return Array Returns an array containing errors.
     */
    public function validateInput($username, $password)
    {
        $errors = [];
        if (empty($username)) {
            $errors['username'] = 'Please enter a valid username.';
        }
        
        if (strlen($password) < 3 || strlen($password) > 72) {
            $errors['password'] = 'Please enter password, it must be from 3 to 72 characters long.';
        }
        return $errors;
    }

    /**
     * Executes the user validation with the given parameters.
     * If it doesn't generate any errors, proceed to query
     * the database. If user is found and password matches,
     * start the sessions.
     * 
     * @param $username Username
     * @param $password Password
     * 
     * @return Array
     */
    public function authenticate($username, $password)
    {
        $errors = $this->validateInput($username, $password);
        if (!empty($errors)) {
            return $errors;  // Return validation errors
        }

        $query = $this->_db->prepare("SELECT * FROM User WHERE username = ?");
        $query->execute([$username]);
        $user = $query->fetch(PDO::FETCH_ASSOC);

        if ($user && password_verify($password, $user['password'])) {
            // Authentication successful, set session variables
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['username'] = $username;
            $_SESSION['logged_in'] = true;
            return [];
        } else {
            return ['password' => 'Login or password do not match.'];
        }
    }
}

// Database connection is managed outside and passed to the constructor
$db = Database::connect();
$controller = new UserController2($db);

$errors = ['username' => '', 'password' => ''];
$input = ['username' => '', 'password' => ''];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $input['username'] = $_POST['username'] ?? '';
    $input['password'] = $_POST['password'] ?? '';

    $errors = $controller->authenticate($input['username'], $input['password']);
    if (!array_filter($errors)) { // Checks if errors array is empty
        header("Location: /technique-db-mvc/view/main_view.php");
        exit();
    }
}