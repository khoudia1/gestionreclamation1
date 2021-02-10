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

/* reclamer/new.html.twig */
class __TwigTemplate_52547a915e0502376fd7c7ce34d022a6fd5ef233742dd610298922038b101ecc extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("base.html.twig", "reclamer/new.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        echo "<style>
body {
    background: white;
 font-family:\"trebuchet ms\",sans-serif;
 font-size:100%;
 }
form {
 background-color:#808080;
 padding:10px;
 width:90%;
 }papa.diop@gmail.compapa.diop@gmail.com
fieldset {
 padding:0 20px 20px 20px;
 margin-bottom:10px;
 border:1px solid #DF3F3F;
 }
legend {
 color:#DF3F3F;
 font-weight:bold
 }
label {
 margin-top:10px;
 display:block;
 }
label.inline {
 display:inline;
 margin-right:50px;
 }
input, textarea, select, option {
 background-color:#FFF3F3;
 }
input, textarea, select {
 padding:3px;
 border:1px solid #F5C5C5;
 border-radius:5px;
 width:90%;
 box-shadow:1px 1px 2px #C0C0C0 inset;
 }
select {
 margin-top:10px;
 }
input[type=radio] {
 background-color:transparent;
 border:none;
 width:10px;
 }
input[type=submit], input[type=reset] {
 width:100px;
 margin-left:5px;
 box-shadow:1px 1px 1px #D83F3D;
 cursor:pointer;
 }
</style>
";
    }

    // line 58
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "New Reclamer";
    }

    // line 60
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 61
        echo "<body>
    <h4>Veuillez remplir les champs </h4>

    ";
        // line 64
        echo twig_include($this->env, $context, "reclamer/_form.html.twig");
        echo "

    <a href=\"";
        // line 66
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reclamer_index");
        echo "\">back to list</a>
</body>
";
    }

    public function getTemplateName()
    {
        return "reclamer/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 66,  125 => 64,  120 => 61,  116 => 60,  109 => 58,  52 => 3,  48 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "reclamer/new.html.twig", "/home/khoudia/reclamation/templates/reclamer/new.html.twig");
    }
}
