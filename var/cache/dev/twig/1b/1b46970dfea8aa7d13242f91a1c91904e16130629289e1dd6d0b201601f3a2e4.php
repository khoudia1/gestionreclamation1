<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* base.html.twig */
class __TwigTemplate_7e82431661dc683e994327af61ae1ba9ca8b241284b09a14f3aa484f88d19538 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>


    <head>
        <meta charset=\"UTF-8\">
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"stylesheet\" type=\"text/css\" href=\"https://bootswatch.com/4/flatly/bootstrap.min.css\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\" https://cdn.datatables.net/1.10.23/css/jquery.dataTables.min.css \">
         <link rel=\"stylesheet\" type=\"text/css\" href=\" https://cdn.datatables.net/buttons/1.6.5/css/buttons.dataTables.min.css\">
  
        ";
        // line 12
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 13
        echo "
        ";
        // line 14
        $this->displayBlock('javascripts', $context, $blocks);
        // line 15
        echo "    </head>
    <body>
        <nav class=\"navbar navbar-expand-lg navbar-dark bg-primary\">
  <a class=\"navbar-brand\" href=\"#\"><i class=\"fas fa-h1    \"> GESTION DES RECLAMATION DE L'UNIVERSITE DE THIES</i></a>
  <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarColor01\" aria-controls=\"navbarColor01\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
    <span class=\"navbar-toggler-icon\"></span>
  </button>

  <div class=\"collapse navbar-collapse\" id=\"navbarColor01\">
    <ul class=\"navbar-nav mr-auto\">
      <li class=\"nav-item active\">
        <a class=\"nav-link\" href=\"#\">
          <span class=\"sr-only\"></span>
        </a>
      </li>
      <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"#\"></a>
      </li>
      <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"#\"></a>
      </li>
      <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"#\"></a>
      </li>
      
    </ul>
    <form class=\"form-inline my-2 my-lg-0\">
      <button align=\"right\" type=\"submit\" ><a href=\"/logout\">
        DECONNEXION</a>
    </button>
    </form>
  </div>
</nav>


    ";
        // line 50
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 50, $this->source); })()), "user", [], "any", false, false, false, 50)) {
            // line 51
            echo "        <div class=\"mb-3\">
            <h5><i class=\"fas fa-h1    \">Vous etes connecte en tant que  ";
            // line 52
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 52, $this->source); })()), "user", [], "any", false, false, false, 52), "prenom", [], "any", false, false, false, 52), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 52, $this->source); })()), "user", [], "any", false, false, false, 52), "nom", [], "any", false, false, false, 52), "html", null, true);
            echo "</i></h5>
        </div>
         
    ";
        }
        // line 56
        echo "        ";
        $this->displayBlock('body', $context, $blocks);
        // line 59
        echo "    <script type=\"text/javascript\" charset=\"utf8\" src=\"https://code.jquery.com/jquery-3.5.1.js\"> </script>
        <script type=\"text/javascript\" charset=\"utf8\" src=\"https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js\"> </script>

        <script type=\"text/javascript\" charset=\"utf8\" src=\"https://cdn.datatables.net/buttons/1.6.5/js/dataTables.buttons.min.js\"> </script>

        <script type=\"text/javascript\" charset=\"utf8\" src=\"https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js\"> </script>
        <script type=\"text/javascript\" charset=\"utf8\" src=\"https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js
\"> </script>
        <script type=\"text/javascript\" charset=\"utf8\" src=\" https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js \"> </script>
        <script type=\"text/javascript\" charset=\"utf8\" src=\" https://cdn.datatables.net/buttons/1.6.5/js/buttons.html5.min.js \"> </script>
        <script type=\"text/javascript\" charset=\"utf8\" src=\" https://cdn.datatables.net/buttons/1.6.5/js/buttons.print.min.js \"> </script>

        <script>
        
            \$(document).ready(function() {
    \$('#example').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    } );
} );
         </script>
    </body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 7
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 12
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 14
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 56
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 57
        echo "
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  224 => 57,  214 => 56,  196 => 14,  178 => 12,  159 => 7,  124 => 59,  121 => 56,  112 => 52,  109 => 51,  107 => 50,  70 => 15,  68 => 14,  65 => 13,  63 => 12,  55 => 7,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>


    <head>
        <meta charset=\"UTF-8\">
        <title>{% block title %}Welcome!{% endblock %}</title>
        <link rel=\"stylesheet\" type=\"text/css\" href=\"https://bootswatch.com/4/flatly/bootstrap.min.css\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\" https://cdn.datatables.net/1.10.23/css/jquery.dataTables.min.css \">
         <link rel=\"stylesheet\" type=\"text/css\" href=\" https://cdn.datatables.net/buttons/1.6.5/css/buttons.dataTables.min.css\">
  
        {% block stylesheets %}{% endblock %}

        {% block javascripts %}{% endblock %}
    </head>
    <body>
        <nav class=\"navbar navbar-expand-lg navbar-dark bg-primary\">
  <a class=\"navbar-brand\" href=\"#\"><i class=\"fas fa-h1    \"> GESTION DES RECLAMATION DE L'UNIVERSITE DE THIES</i></a>
  <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarColor01\" aria-controls=\"navbarColor01\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
    <span class=\"navbar-toggler-icon\"></span>
  </button>

  <div class=\"collapse navbar-collapse\" id=\"navbarColor01\">
    <ul class=\"navbar-nav mr-auto\">
      <li class=\"nav-item active\">
        <a class=\"nav-link\" href=\"#\">
          <span class=\"sr-only\"></span>
        </a>
      </li>
      <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"#\"></a>
      </li>
      <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"#\"></a>
      </li>
      <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"#\"></a>
      </li>
      
    </ul>
    <form class=\"form-inline my-2 my-lg-0\">
      <button align=\"right\" type=\"submit\" ><a href=\"/logout\">
        DECONNEXION</a>
    </button>
    </form>
  </div>
</nav>


    {% if app.user %}
        <div class=\"mb-3\">
            <h5><i class=\"fas fa-h1    \">Vous etes connecte en tant que  {{ app.user.prenom }} {{ app.user.nom }}</i></h5>
        </div>
         
    {% endif %}
        {% block body %}

        {% endblock %}
    <script type=\"text/javascript\" charset=\"utf8\" src=\"https://code.jquery.com/jquery-3.5.1.js\"> </script>
        <script type=\"text/javascript\" charset=\"utf8\" src=\"https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js\"> </script>

        <script type=\"text/javascript\" charset=\"utf8\" src=\"https://cdn.datatables.net/buttons/1.6.5/js/dataTables.buttons.min.js\"> </script>

        <script type=\"text/javascript\" charset=\"utf8\" src=\"https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js\"> </script>
        <script type=\"text/javascript\" charset=\"utf8\" src=\"https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js
\"> </script>
        <script type=\"text/javascript\" charset=\"utf8\" src=\" https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js \"> </script>
        <script type=\"text/javascript\" charset=\"utf8\" src=\" https://cdn.datatables.net/buttons/1.6.5/js/buttons.html5.min.js \"> </script>
        <script type=\"text/javascript\" charset=\"utf8\" src=\" https://cdn.datatables.net/buttons/1.6.5/js/buttons.print.min.js \"> </script>

        <script>
        
            \$(document).ready(function() {
    \$('#example').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    } );
} );
         </script>
    </body>
</html>
", "base.html.twig", "/home/khoudia/reclamation/templates/base.html.twig");
    }
}
