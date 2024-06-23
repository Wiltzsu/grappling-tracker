<?php

require_once __DIR__ . '/../../config/Database.php';
require_once __DIR__ . '/../../src/models/TrainingClass.php';
require_once 'CreatePositionController.php';
require_once 'CreateTechniqueController.php';
require_once 'CreateCategoryController.php';

class CreateClassController
{
    private $_classModel;

    public function __construct($db)
    {
        $this->_classModel = new TrainingClass($db);
    }

    public function createTrainingClass(
        $userID,
        $instructor,
        $location,
        $duration,
        $date,
        $classDescription
    ) {
        return $this->_classModel->addTrainingClass(
            $userID,
            $instructor,
            $location,
            $duration,
            $date,
            $classDescription
        );
    }
}