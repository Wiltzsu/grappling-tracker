<?php
/**
 * Controller category for interacting with the difficulty model and index.
 * 
 * @package Techniquedbmvc
 * @author  William
 * @license MIT License
 */

namespace App\Controllers;

use App\Models\DifficultyModel;
use PDO;

/**
 * DifficultyController Class
 */
class DifficultyController
{
    /**
     * @var Difficulty Instance of the Difficulty model.
     */
    private $_difficulty;

    /**
     * Constructor method for the class, initializing it with a database connection.
     * 
     * @param PDO $db Database connection.
     */
    public function __construct(PDO $db)
    {
        /**
         * Initializes the 'difficulty' property to hold an instance of the Difficulty 
         * model passing the database connection to it.
         */
        $this->_difficulty = new DifficultyModel($db);
    }

    /**
     * Calls the 'getAllDifficulties' on the Difficulty model to fetch all items.
     * 
     * @return array An associative array of difficulties.
     */
    public function getDifficulties(): array
    {
        return $this->_difficulty->getAllDifficulties();
    }
}
?>
