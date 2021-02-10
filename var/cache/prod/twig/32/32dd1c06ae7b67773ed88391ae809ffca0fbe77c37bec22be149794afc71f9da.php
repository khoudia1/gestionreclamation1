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

/* security/login.html.twig */
class __TwigTemplate_3ff7acf66579e9339ae77245dcc4005d25a571cff69add2ce083180d677d0e08 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "
";
        // line 2
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 57
        echo "


";
        // line 60
        $this->displayBlock('body', $context, $blocks);
    }

    // line 2
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        echo "<style>
body{
    background: #f9e79f;
    font-family:fantasy;
    font-size:100%;
    color:#000000;
 ;
}
#container{
    width:400px;
    margin:0 auto;
    margin-top:10%;
}
/* Bordered form */
form {
    width:30%;
    padding: 30px;
    border: 1px solid #f1f1f1;
    background: #fff;
    box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
}
#container h1{
    width: 38%;
    margin: 0 auto;
    padding-bottom: 10px;
}

/* Full-width inputs */
input[type=email], input[type=password] {
    width: 80%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

/* Set a style for all buttons */
input[type=submit] {
    background-color: #53af57;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}
input[type=submit]:hover {
    background-color: white;
    color: pink;
    border: 1px solid #53af57;
}
</style>
";
    }

    // line 60
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 61
        echo "<body>
<br><br><br><br><br><br>
<div class=\"container\" align=\"center\">
    <h1><i class=\"fas fa-h1    \" >GESTION DES RECLAMATIONS</i></h1><br>

<form method=\"post\" align=\"center\">
    ";
        // line 67
        if (($context["error"] ?? null)) {
            // line 68
            echo "                                                                                                        <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, ($context["error"] ?? null), "messageKey", [], "any", false, false, false, 68), twig_get_attribute($this->env, $this->source, ($context["error"] ?? null), "messageData", [], "any", false, false, false, 68), "security"), "html", null, true);
            echo "</div>
    ";
        }
        // line 70
        echo "
    ";
        // line 71
        if (twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 71)) {
            // line 72
            echo "        <div class=\"mb-3\">
            You are logged in as ";
            // line 73
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 73), "username", [], "any", false, false, false, 73), "html", null, true);
            echo ", <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Logout</a>
        </div>
    ";
        }
        // line 76
        echo "
    <h1 class=\"h3 mb-3 font-weight-normal\">Please sign in</h1>
    <label for=\"inputEmail\">Email</label>
    <input type=\"email\" value=\"";
        // line 79
        echo twig_escape_filter($this->env, ($context["last_username"] ?? null), "html", null, true);
        echo "\" name=\"email\" id=\"inputEmail\" class=\"form-control\" required autofocus>
    <br>
    <label for=\"inputPassword\">Password</label>
    <input type=\"password\" name=\"password\" id=\"inputPassword\" class=\"form-control\" required>
    <br>
    <input type=\"hidden\" name=\"_csrf_token\"
           value=\"";
        // line 85
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\"
    ><br>

    ";
        // line 98
        echo "
    <button class=\"btn btn-lg btn-primary\" type=\"submit\">
        Sign in
    </button>
</form>
</div>
</body>
";
    }

    public function getTemplateName()
    {
        return "security/login.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  170 => 98,  164 => 85,  155 => 79,  150 => 76,  142 => 73,  139 => 72,  137 => 71,  134 => 70,  128 => 68,  126 => 67,  118 => 61,  114 => 60,  57 => 3,  53 => 2,  49 => 60,  44 => 57,  42 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "security/login.html.twig", "/home/khoudia/reclamation/templates/security/login.html.twig");
    }
}
