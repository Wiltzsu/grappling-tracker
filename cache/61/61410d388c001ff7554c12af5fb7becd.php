<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* add_new.twig */
class __TwigTemplate_50edc791f1622b0b84eef7e35ce00079 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        yield "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Welcome</title>
    <link href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css\" rel=\"stylesheet\">
    <link href=\"/technique-db-mvc/public/css/style.css\" rel=\"stylesheet\">
    <script src=\"https://cdn.jsdelivr.net/npm/chart.js\"></script>
    <script src=\"https://code.jquery.com/jquery-3.5.1.slim.min.js\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js\"></script>
    <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js\"></script>
</head>
<body>


<nav class=\"navbar navbar-expand-lg navbar-dark bg-dark sticky-top\">
    <a class=\"navbar-brand\" href=\"/technique-db-mvc/mainview\">Grappling Tracker</a>

    <div class=\"collapse navbar-collapse\" id=\"navbarText\">
      <!-- Navbar links go here -->
    </div>
    <div class=\"collapse navbar-collapse\" id=\"navbarText\">
    <ul class=\"navbar-nav mr-auto\">
          <li class=\"nav-item active\">
            <a class=\"nav-link\" href=\"mainview\">Journal <span class=\"sr-only\">(current)</span></a>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"addnew\">Add new</a>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"viewitems\">View items</a>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"profile\">Belt progression</a>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"profile\">Guide</a>
          </li>
        </ul>
      <span class=\"navbar-text\">
            ";
        // line 42
        if (($context["username"] ?? null)) {
            // line 43
            yield "                <a href=\"logout\" class=\"btn btn-danger btn1\">Logout</a>
            ";
        }
        // line 45
        yield "      </span>
    </div>
</nav>


<div class=\"container-fluid p-5\">
    <div id=\"accordion\">
        <button class=\"svg-button\" onclick=\"window.location.href='mainview'\">
        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"20\" height=\"20\" fill=\"currentColor\" class=\"bi bi-arrow-return-left\" viewBox=\"0 0 16 16\">
            <path fill-rule=\"evenodd\" d=\"M14.5 1.5a.5.5 0 0 1 .5.5v4.8a2.5 2.5 0 0 1-2.5 2.5H2.707l3.347 3.346a.5.5 0 0 1-.708.708l-4.2-4.2a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 8.3H12.5A1.5 1.5 0 0 0 14 6.8V2a.5.5 0 0 1 .5-.5\"/>
        </svg>
        </button>

        <div class=\"card\">
            <div class=\"card-header journalCardStyle\" id=\"headingOne\">
                <h5 class=\"mb-0\">
                    <button class=\"btn btn-link journalButton\" data-toggle=\"collapse\" data-target=\"#collapseOne\" aria-expanded=\"true\" aria-controls=\"collapseOne\">
                    Add a technique to the database.
                    </button>
                </h5>
            </div>
            <div id=\"collapseOne\" class=\"collapse\" aria-labelledby=\"headingOne\" data-parent=\"#accordion\">
                <div class=\"card-body\">
                    <!-- Technique Form Column -->
                    <form method=\"POST\" action=\"\">
                        <h4>Add a New Technique</h4>
                        
                        <!-- User ID -->
                        <div class=\"form-group\">
                            <input type=\"hidden\" class=\"form-control\" id=\"userID\" name=\"userID\" required value=\"<?php echo \$_SESSION['userID']?>\">

                        </div>

                        <!-- Name -->
                        <div class=\"form-group\">
                            <label for=\"techniqueName\">Technique Name:</label>
                            <input type=\"text\" class=\"form-control\" id=\"techniqueName\" name=\"techniqueName\" required>

                        </div>

                        <!-- Description -->
                        <div class=\"form-group\">
                            <label for=\"techniqueDescription\">Description:</label>
                            <textarea class=\"form-control\" id=\"techniqueDescription\" name=\"techniqueDescription\" required></textarea>

                        </div>

                        <!-- Category -->
                        <div class=\"form-group\">
                            <label for=\"techniqueCategory\">Category:</label>
                            <select class=\"form-control\" id=\"categoryID\" name=\"categoryID\" required>
                                <option value=\"\">Select a Category</option>

                            </select>

                        </div>

                        <!-- Position -->
                        <div class=\"form-group\">
                            <label for=\"techniquePosition\">Position:</label>
                            <select class=\"form-control\" id=\"positionID\" name=\"positionID\" required>
                                <option value=\"\">Select a Position</option>

                            </select>

                        </div>

                        <!-- Difficulty -->
                        <div class=\"form-group\">
                            <label for=\"techniqueDifficulty\">Difficulty:</label>
                            <select class=\"form-control\" id=\"difficultyID\" name=\"difficultyID\" required>
                                <option value=\"\">Select a Difficulty</option>

                            </select>

                        </div>

                        <button type=\"submit\" name=\"submitTechnique\" class=\"btn btn-primary btn2\">Add Technique</button>
                    </form>
                </div>
            </div>
        </div>


        <div class=\"card\">
            <div class=\"card-header journalCardStyle\" id=\"headingTwo\">
                <h5 class=\"mb-0\">
                    <button class=\"btn btn-link journalButton\" data-toggle=\"collapse\" data-target=\"#collapseTwo\" aria-expanded=\"false\" aria-controls=\"collapseTwo\">
                    Add a category to the database.
                    </button>
                </h5>
            </div>

            <div id=\"collapseTwo\" class=\"collapse\" aria-labelledby=\"headingTwo\" data-parent=\"#accordion\">
                <div class=\"card-body\">

                    <!-- Category Form Column -->
                    <form method=\"POST\" action=\"\">
                        <h4>Add a New Category</h4>
                        <!-- Category name -->
                        <div class=\"form-group\">
                            <label for=\"categoryName\">Category Name:</label>
                            <input type=\"text\" class=\"form-control\" id=\"categoryName\" name=\"categoryName\" required>
                        </div>

                        <!-- Description -->
                        <div class=\"form-group\">
                            <label for=\"categoryDescription\">Description:</label>
                            <textarea class=\"form-control\" id=\"categoryDescription\" name=\"categoryDescription\" required></textarea>
                        </div>

                        <button type=\"submit\" name=\"submitCategory\" class=\"btn btn-primary btn2\">Add Category</button>
                    </form>
                </div>
            </div>
        </div>



        <div class=\"card\">
            <div class=\"card-header journalCardStyle\" id=\"headingThree\">
                <h5 class=\"mb-0\">
                    <button class=\"btn btn-link journalButton\" data-toggle=\"collapse\" data-target=\"#collapseThree\" aria-expanded=\"false\" aria-controls=\"collapseThree\">
                    Add a position to the database.
                    </button>
                </h5>
            </div>

            <div id=\"collapseThree\" class=\"collapse\" aria-labelledby=\"headingThree\" data-parent=\"#accordion\">
                <div class=\"card-body\">

                    <!-- Position Form Column -->
                    <form method=\"POST\" action=\"\" >
                        <!-- Position name -->
                        <h4>Add a New Position</h4>
                        <div class=\"form-group\">
                                <label for=\"positionName\">Position Name:</label>
                                <input type=\"text\" class=\"form-control\" id=\"positionName\" name=\"positionName\" required>
                            </div>

                            <!-- Description -->
                            <div class=\"form-group\">
                                <label for=\"positionDescription\">Description:</label>
                                <textarea class=\"form-control\" id=\"positionDescription\" name=\"positionDescription\" required></textarea>
                            </div>
                        <button type=\"submit\" name=\"submitPosition\" class=\"btn btn-primary btn2\">Add Position</button>
                    </form>
                </div>
            </div>
        </div>

        <div class=\"card\">
            <div class=\"card-header journalCardStyle\" id=\"headingFour\">
                <h5 class=\"mb-0\">
                    <button class=\"btn btn-link journalButton\" data-toggle=\"collapse\" data-target=\"#collapseFour\" aria-expanded=\"false\" aria-controls=\"collapseFour\">
                    Add a class to the database.
                    </button>
                </h5>
            </div>

            <div id=\"collapseFour\" class=\"collapse\" aria-labelledby=\"headingFour\" data-parent=\"#accordion\">
                <div class=\"card-body\">

                    <!-- Training Class Form Column -->
                    <form method=\"POST\" action=\"/addnew\" >
                        <!-- User ID -->
                        <div class=\"form-group\">
                            <input type=\"\" class=\"form-control\" id=\"userID\" name=\"userID\" required value=\"";
        // line 212
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["userID"] ?? null), "html", null, true);
        yield "\">
                        </div>

                        <!-- Instructor name -->
                        <h4>Add a New Training Class</h4>
                            <div class=\"form-group\">
                                <label for=\"instructor\">Instructor:</label>
                                <input type=\"text\" class=\"form-control\" id=\"instructor\" name=\"instructor\" required>
                            </div>

                            <!-- Location -->
                            <div class=\"form-group\">
                                <label for=\"location\">Location:</label>
                                <input type=\"textarea\" class=\"form-control\" id=\"location\" name=\"location\" required>
                            </div>

                            <!-- Duration -->
                            <div class=\"form-group\">
                                <label for=\"duration\">Duration (minutes):</label>
                                <input type=\"number\" class=\"form-control\" id=\"duration\" name=\"duration\" required>
                            </div>

                            <!-- Date -->
                            <div class=\"form-group\">
                                <label for=\"date\">Date:</label>
                                <input type=\"date\" class=\"form-control\" id=\"date\" name=\"date\" required>
                            </div>

                            <!-- classDescription -->
                            <div class=\"form-group\">
                                <label for=\"classDescription\">Description / type:</label>
                                <textarea class=\"form-control\" id=\"classDescription\" name=\"classDescription\" required></textarea>
                            </div>
                            
                        <button type=\"submit\" name=\"submitTrainingClass\" class=\"btn btn-primary btn2\">Add Class</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

";
        // line 254
        yield from         $this->loadTemplate("footer.twig", "add_new.twig", 254)->unwrap()->yield($context);
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "add_new.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  301 => 254,  256 => 212,  87 => 45,  83 => 43,  81 => 42,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Welcome</title>
    <link href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css\" rel=\"stylesheet\">
    <link href=\"/technique-db-mvc/public/css/style.css\" rel=\"stylesheet\">
    <script src=\"https://cdn.jsdelivr.net/npm/chart.js\"></script>
    <script src=\"https://code.jquery.com/jquery-3.5.1.slim.min.js\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js\"></script>
    <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js\"></script>
</head>
<body>


<nav class=\"navbar navbar-expand-lg navbar-dark bg-dark sticky-top\">
    <a class=\"navbar-brand\" href=\"/technique-db-mvc/mainview\">Grappling Tracker</a>

    <div class=\"collapse navbar-collapse\" id=\"navbarText\">
      <!-- Navbar links go here -->
    </div>
    <div class=\"collapse navbar-collapse\" id=\"navbarText\">
    <ul class=\"navbar-nav mr-auto\">
          <li class=\"nav-item active\">
            <a class=\"nav-link\" href=\"mainview\">Journal <span class=\"sr-only\">(current)</span></a>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"addnew\">Add new</a>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"viewitems\">View items</a>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"profile\">Belt progression</a>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"profile\">Guide</a>
          </li>
        </ul>
      <span class=\"navbar-text\">
            {% if username %}
                <a href=\"logout\" class=\"btn btn-danger btn1\">Logout</a>
            {% endif %}
      </span>
    </div>
</nav>


<div class=\"container-fluid p-5\">
    <div id=\"accordion\">
        <button class=\"svg-button\" onclick=\"window.location.href='mainview'\">
        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"20\" height=\"20\" fill=\"currentColor\" class=\"bi bi-arrow-return-left\" viewBox=\"0 0 16 16\">
            <path fill-rule=\"evenodd\" d=\"M14.5 1.5a.5.5 0 0 1 .5.5v4.8a2.5 2.5 0 0 1-2.5 2.5H2.707l3.347 3.346a.5.5 0 0 1-.708.708l-4.2-4.2a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 8.3H12.5A1.5 1.5 0 0 0 14 6.8V2a.5.5 0 0 1 .5-.5\"/>
        </svg>
        </button>

        <div class=\"card\">
            <div class=\"card-header journalCardStyle\" id=\"headingOne\">
                <h5 class=\"mb-0\">
                    <button class=\"btn btn-link journalButton\" data-toggle=\"collapse\" data-target=\"#collapseOne\" aria-expanded=\"true\" aria-controls=\"collapseOne\">
                    Add a technique to the database.
                    </button>
                </h5>
            </div>
            <div id=\"collapseOne\" class=\"collapse\" aria-labelledby=\"headingOne\" data-parent=\"#accordion\">
                <div class=\"card-body\">
                    <!-- Technique Form Column -->
                    <form method=\"POST\" action=\"\">
                        <h4>Add a New Technique</h4>
                        
                        <!-- User ID -->
                        <div class=\"form-group\">
                            <input type=\"hidden\" class=\"form-control\" id=\"userID\" name=\"userID\" required value=\"<?php echo \$_SESSION['userID']?>\">

                        </div>

                        <!-- Name -->
                        <div class=\"form-group\">
                            <label for=\"techniqueName\">Technique Name:</label>
                            <input type=\"text\" class=\"form-control\" id=\"techniqueName\" name=\"techniqueName\" required>

                        </div>

                        <!-- Description -->
                        <div class=\"form-group\">
                            <label for=\"techniqueDescription\">Description:</label>
                            <textarea class=\"form-control\" id=\"techniqueDescription\" name=\"techniqueDescription\" required></textarea>

                        </div>

                        <!-- Category -->
                        <div class=\"form-group\">
                            <label for=\"techniqueCategory\">Category:</label>
                            <select class=\"form-control\" id=\"categoryID\" name=\"categoryID\" required>
                                <option value=\"\">Select a Category</option>

                            </select>

                        </div>

                        <!-- Position -->
                        <div class=\"form-group\">
                            <label for=\"techniquePosition\">Position:</label>
                            <select class=\"form-control\" id=\"positionID\" name=\"positionID\" required>
                                <option value=\"\">Select a Position</option>

                            </select>

                        </div>

                        <!-- Difficulty -->
                        <div class=\"form-group\">
                            <label for=\"techniqueDifficulty\">Difficulty:</label>
                            <select class=\"form-control\" id=\"difficultyID\" name=\"difficultyID\" required>
                                <option value=\"\">Select a Difficulty</option>

                            </select>

                        </div>

                        <button type=\"submit\" name=\"submitTechnique\" class=\"btn btn-primary btn2\">Add Technique</button>
                    </form>
                </div>
            </div>
        </div>


        <div class=\"card\">
            <div class=\"card-header journalCardStyle\" id=\"headingTwo\">
                <h5 class=\"mb-0\">
                    <button class=\"btn btn-link journalButton\" data-toggle=\"collapse\" data-target=\"#collapseTwo\" aria-expanded=\"false\" aria-controls=\"collapseTwo\">
                    Add a category to the database.
                    </button>
                </h5>
            </div>

            <div id=\"collapseTwo\" class=\"collapse\" aria-labelledby=\"headingTwo\" data-parent=\"#accordion\">
                <div class=\"card-body\">

                    <!-- Category Form Column -->
                    <form method=\"POST\" action=\"\">
                        <h4>Add a New Category</h4>
                        <!-- Category name -->
                        <div class=\"form-group\">
                            <label for=\"categoryName\">Category Name:</label>
                            <input type=\"text\" class=\"form-control\" id=\"categoryName\" name=\"categoryName\" required>
                        </div>

                        <!-- Description -->
                        <div class=\"form-group\">
                            <label for=\"categoryDescription\">Description:</label>
                            <textarea class=\"form-control\" id=\"categoryDescription\" name=\"categoryDescription\" required></textarea>
                        </div>

                        <button type=\"submit\" name=\"submitCategory\" class=\"btn btn-primary btn2\">Add Category</button>
                    </form>
                </div>
            </div>
        </div>



        <div class=\"card\">
            <div class=\"card-header journalCardStyle\" id=\"headingThree\">
                <h5 class=\"mb-0\">
                    <button class=\"btn btn-link journalButton\" data-toggle=\"collapse\" data-target=\"#collapseThree\" aria-expanded=\"false\" aria-controls=\"collapseThree\">
                    Add a position to the database.
                    </button>
                </h5>
            </div>

            <div id=\"collapseThree\" class=\"collapse\" aria-labelledby=\"headingThree\" data-parent=\"#accordion\">
                <div class=\"card-body\">

                    <!-- Position Form Column -->
                    <form method=\"POST\" action=\"\" >
                        <!-- Position name -->
                        <h4>Add a New Position</h4>
                        <div class=\"form-group\">
                                <label for=\"positionName\">Position Name:</label>
                                <input type=\"text\" class=\"form-control\" id=\"positionName\" name=\"positionName\" required>
                            </div>

                            <!-- Description -->
                            <div class=\"form-group\">
                                <label for=\"positionDescription\">Description:</label>
                                <textarea class=\"form-control\" id=\"positionDescription\" name=\"positionDescription\" required></textarea>
                            </div>
                        <button type=\"submit\" name=\"submitPosition\" class=\"btn btn-primary btn2\">Add Position</button>
                    </form>
                </div>
            </div>
        </div>

        <div class=\"card\">
            <div class=\"card-header journalCardStyle\" id=\"headingFour\">
                <h5 class=\"mb-0\">
                    <button class=\"btn btn-link journalButton\" data-toggle=\"collapse\" data-target=\"#collapseFour\" aria-expanded=\"false\" aria-controls=\"collapseFour\">
                    Add a class to the database.
                    </button>
                </h5>
            </div>

            <div id=\"collapseFour\" class=\"collapse\" aria-labelledby=\"headingFour\" data-parent=\"#accordion\">
                <div class=\"card-body\">

                    <!-- Training Class Form Column -->
                    <form method=\"POST\" action=\"/addnew\" >
                        <!-- User ID -->
                        <div class=\"form-group\">
                            <input type=\"\" class=\"form-control\" id=\"userID\" name=\"userID\" required value=\"{{ userID }}\">
                        </div>

                        <!-- Instructor name -->
                        <h4>Add a New Training Class</h4>
                            <div class=\"form-group\">
                                <label for=\"instructor\">Instructor:</label>
                                <input type=\"text\" class=\"form-control\" id=\"instructor\" name=\"instructor\" required>
                            </div>

                            <!-- Location -->
                            <div class=\"form-group\">
                                <label for=\"location\">Location:</label>
                                <input type=\"textarea\" class=\"form-control\" id=\"location\" name=\"location\" required>
                            </div>

                            <!-- Duration -->
                            <div class=\"form-group\">
                                <label for=\"duration\">Duration (minutes):</label>
                                <input type=\"number\" class=\"form-control\" id=\"duration\" name=\"duration\" required>
                            </div>

                            <!-- Date -->
                            <div class=\"form-group\">
                                <label for=\"date\">Date:</label>
                                <input type=\"date\" class=\"form-control\" id=\"date\" name=\"date\" required>
                            </div>

                            <!-- classDescription -->
                            <div class=\"form-group\">
                                <label for=\"classDescription\">Description / type:</label>
                                <textarea class=\"form-control\" id=\"classDescription\" name=\"classDescription\" required></textarea>
                            </div>
                            
                        <button type=\"submit\" name=\"submitTrainingClass\" class=\"btn btn-primary btn2\">Add Class</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

{% include 'footer.twig' %}", "add_new.twig", "/opt/lampp/htdocs/technique-db-mvc/resources/views/add_new.twig");
    }
}
