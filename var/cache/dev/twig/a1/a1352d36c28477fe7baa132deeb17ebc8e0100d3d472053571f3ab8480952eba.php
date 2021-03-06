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

/* reclamer/show.html.twig */
class __TwigTemplate_9cf2738d1a1d91e251d1de6f154e262cffbca7698d8b1d20415bd5c743ef4098 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reclamer/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reclamer/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "reclamer/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo "<style>
*{
    box-sizing: border-box;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
}
body{
    font-family: Helvetica;
    -webkit-font-smoothing: antialiased;
    background: white;
}
h1{
    text-align: center;
    font-size: 18px;
    text-transform: uppercase;
    letter-spacing: 1px;
    color:  black;
    padding: 30px 0;
}

/* Table Styles */

.table-wrapper{
    margin: 10px 70px 70px;
    box-shadow: 0px 35px 50px rgba( 0, 0, 0, 0.2 );
}

.fl-table {
    border-radius: 5px;
    font-size: 12px;
    font-weight: normal;
    border: 5px;
    border-collapse: collapse;
    width: 100%;
    max-width: 100%;
    white-space: nowrap;
    background-color: white;
}

.fl-table td, .fl-table th {
    text-align: center;
    padding: 18px;
}

.fl-table td {
    border-right: 2px solid #f8f8f8;
    font-size: 12px;
}

.fl-table thead th {
    color: #ffffff;
    background: #4FC3A1;
}


.fl-table thead th:nth-child(odd) {
    color: #ffffff;
    background: #324960;
}

.fl-table tr:nth-child(even) {
    background: #F8F8F8;
}

/* Responsive */

@media (max-width: 767px) {
    .fl-table {
        display: block;
        width: 100%;
    }
    .table-wrapper:before{
        content: \"Scroll horizontally >\";
        display: block;
        text-align: right;
        font-size: 11px;
        color: white;
        padding: 0 0 10px;
    }
    .fl-table thead, .fl-table tbody, .fl-table thead th {
        display: block;
    }
    .fl-table thead th:last-child{
        border-bottom: none;
    }
    .fl-table thead {
        float: left;
    }
    .fl-table tbody {
        width: auto;
        position: relative;
        overflow-x: auto;
    }
    .fl-table td, .fl-table th {
        padding: 20px .625em .625em .625em;
        height: 60px;
        vertical-align: middle;
        box-sizing: border-box;
        overflow-x: hidden;
        overflow-y: auto;
        width: 120px;
        font-size: 13px;
        text-overflow: ellipsis;
    }
    .fl-table thead th {
        text-align: left;
        border-bottom: 1px solid #f7f7f9;
    }
    .fl-table tbody tr {
        display: table-cell;
    }
    .fl-table tbody tr:nth-child(odd) {
        background: none;
    }
    .fl-table tr:nth-child(even) {
        background: transparent;
    }
    .fl-table tr td:nth-child(odd) {
        background: #F8F8F8;
        border-right: 1px solid #E6E4E4;
    }
    .fl-table tr td:nth-child(even) {
        border-right: 1px solid #E6E4E4;
    }
    .fl-table tbody td {
        display: block;
        text-align: center;
    }
}
</style>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 134
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Reclamer";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 136
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 137
        echo "    <h1>Reclamation de ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["reclamer"]) || array_key_exists("reclamer", $context) ? $context["reclamer"] : (function () { throw new RuntimeError('Variable "reclamer" does not exist.', 137, $this->source); })()), "user", [], "any", false, false, false, 137), "prenom", [], "any", false, false, false, 137), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["reclamer"]) || array_key_exists("reclamer", $context) ? $context["reclamer"] : (function () { throw new RuntimeError('Variable "reclamer" does not exist.', 137, $this->source); })()), "user", [], "any", false, false, false, 137), "nom", [], "any", false, false, false, 137), "html", null, true);
        echo " du ";
        ((twig_get_attribute($this->env, $this->source, (isset($context["reclamer"]) || array_key_exists("reclamer", $context) ? $context["reclamer"] : (function () { throw new RuntimeError('Variable "reclamer" does not exist.', 137, $this->source); })()), "dateCreation", [], "any", false, false, false, 137)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["reclamer"]) || array_key_exists("reclamer", $context) ? $context["reclamer"] : (function () { throw new RuntimeError('Variable "reclamer" does not exist.', 137, $this->source); })()), "dateCreation", [], "any", false, false, false, 137), "Y-m-d H:i:s"), "html", null, true))) : (print ("")));
        echo "</h1>

    <div class=\"table-wrapper\">
    <table class=\"fl-table\" id=\"example\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 144
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["reclamer"]) || array_key_exists("reclamer", $context) ? $context["reclamer"] : (function () { throw new RuntimeError('Variable "reclamer" does not exist.', 144, $this->source); })()), "id", [], "any", false, false, false, 144), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Objet</th>
                <td>";
        // line 148
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["reclamer"]) || array_key_exists("reclamer", $context) ? $context["reclamer"] : (function () { throw new RuntimeError('Variable "reclamer" does not exist.', 148, $this->source); })()), "objet", [], "any", false, false, false, 148), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Corps</th>
                <td>";
        // line 152
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["reclamer"]) || array_key_exists("reclamer", $context) ? $context["reclamer"] : (function () { throw new RuntimeError('Variable "reclamer" does not exist.', 152, $this->source); })()), "corps", [], "any", false, false, false, 152), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Professeur</th>
                <td>";
        // line 156
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["reclamer"]) || array_key_exists("reclamer", $context) ? $context["reclamer"] : (function () { throw new RuntimeError('Variable "reclamer" does not exist.', 156, $this->source); })()), "professeur", [], "any", false, false, false, 156), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>DateCreation</th>
                <td>";
        // line 160
        ((twig_get_attribute($this->env, $this->source, (isset($context["reclamer"]) || array_key_exists("reclamer", $context) ? $context["reclamer"] : (function () { throw new RuntimeError('Variable "reclamer" does not exist.', 160, $this->source); })()), "dateCreation", [], "any", false, false, false, 160)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["reclamer"]) || array_key_exists("reclamer", $context) ? $context["reclamer"] : (function () { throw new RuntimeError('Variable "reclamer" does not exist.', 160, $this->source); })()), "dateCreation", [], "any", false, false, false, 160), "Y-m-d H:i:s"), "html", null, true))) : (print ("")));
        echo "</td>
            </tr>
            <tr>
                <th>Ufr</th>
                <td>";
        // line 164
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["reclamer"]) || array_key_exists("reclamer", $context) ? $context["reclamer"] : (function () { throw new RuntimeError('Variable "reclamer" does not exist.', 164, $this->source); })()), "ufr", [], "any", false, false, false, 164), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Filiere</th>
                <td>";
        // line 168
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["reclamer"]) || array_key_exists("reclamer", $context) ? $context["reclamer"] : (function () { throw new RuntimeError('Variable "reclamer" does not exist.', 168, $this->source); })()), "filiere", [], "any", false, false, false, 168), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Niveau</th>
                <td>";
        // line 172
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["reclamer"]) || array_key_exists("reclamer", $context) ? $context["reclamer"] : (function () { throw new RuntimeError('Variable "reclamer" does not exist.', 172, $this->source); })()), "niveau", [], "any", false, false, false, 172), "html", null, true);
        echo "</td>
            </tr>

        </tbody>
    </table>
    </div>

    <button type=\"submit\" ><a href=\"";
        // line 179
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reclamer_index");
        echo "\">back to list</a></button>

   <button type=\"submit\" > <a href=\"";
        // line 181
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reclamer_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["reclamer"]) || array_key_exists("reclamer", $context) ? $context["reclamer"] : (function () { throw new RuntimeError('Variable "reclamer" does not exist.', 181, $this->source); })()), "id", [], "any", false, false, false, 181)]), "html", null, true);
        echo "\">edit</a></button>

    ";
        // line 183
        echo twig_include($this->env, $context, "reclamer/_delete_form.html.twig");
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "reclamer/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  323 => 183,  318 => 181,  313 => 179,  303 => 172,  296 => 168,  289 => 164,  282 => 160,  275 => 156,  268 => 152,  261 => 148,  254 => 144,  239 => 137,  229 => 136,  210 => 134,  70 => 3,  60 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block stylesheets %}
<style>
*{
    box-sizing: border-box;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
}
body{
    font-family: Helvetica;
    -webkit-font-smoothing: antialiased;
    background: white;
}
h1{
    text-align: center;
    font-size: 18px;
    text-transform: uppercase;
    letter-spacing: 1px;
    color:  black;
    padding: 30px 0;
}

/* Table Styles */

.table-wrapper{
    margin: 10px 70px 70px;
    box-shadow: 0px 35px 50px rgba( 0, 0, 0, 0.2 );
}

.fl-table {
    border-radius: 5px;
    font-size: 12px;
    font-weight: normal;
    border: 5px;
    border-collapse: collapse;
    width: 100%;
    max-width: 100%;
    white-space: nowrap;
    background-color: white;
}

.fl-table td, .fl-table th {
    text-align: center;
    padding: 18px;
}

.fl-table td {
    border-right: 2px solid #f8f8f8;
    font-size: 12px;
}

.fl-table thead th {
    color: #ffffff;
    background: #4FC3A1;
}


.fl-table thead th:nth-child(odd) {
    color: #ffffff;
    background: #324960;
}

.fl-table tr:nth-child(even) {
    background: #F8F8F8;
}

/* Responsive */

@media (max-width: 767px) {
    .fl-table {
        display: block;
        width: 100%;
    }
    .table-wrapper:before{
        content: \"Scroll horizontally >\";
        display: block;
        text-align: right;
        font-size: 11px;
        color: white;
        padding: 0 0 10px;
    }
    .fl-table thead, .fl-table tbody, .fl-table thead th {
        display: block;
    }
    .fl-table thead th:last-child{
        border-bottom: none;
    }
    .fl-table thead {
        float: left;
    }
    .fl-table tbody {
        width: auto;
        position: relative;
        overflow-x: auto;
    }
    .fl-table td, .fl-table th {
        padding: 20px .625em .625em .625em;
        height: 60px;
        vertical-align: middle;
        box-sizing: border-box;
        overflow-x: hidden;
        overflow-y: auto;
        width: 120px;
        font-size: 13px;
        text-overflow: ellipsis;
    }
    .fl-table thead th {
        text-align: left;
        border-bottom: 1px solid #f7f7f9;
    }
    .fl-table tbody tr {
        display: table-cell;
    }
    .fl-table tbody tr:nth-child(odd) {
        background: none;
    }
    .fl-table tr:nth-child(even) {
        background: transparent;
    }
    .fl-table tr td:nth-child(odd) {
        background: #F8F8F8;
        border-right: 1px solid #E6E4E4;
    }
    .fl-table tr td:nth-child(even) {
        border-right: 1px solid #E6E4E4;
    }
    .fl-table tbody td {
        display: block;
        text-align: center;
    }
}
</style>
{% endblock %}
{% block title %}Reclamer{% endblock %}

{% block body %}
    <h1>Reclamation de {{ reclamer.user.prenom }} {{ reclamer.user.nom }} du {{ reclamer.dateCreation ? reclamer.dateCreation|date('Y-m-d H:i:s') : '' }}</h1>

    <div class=\"table-wrapper\">
    <table class=\"fl-table\" id=\"example\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ reclamer.id }}</td>
            </tr>
            <tr>
                <th>Objet</th>
                <td>{{ reclamer.objet }}</td>
            </tr>
            <tr>
                <th>Corps</th>
                <td>{{ reclamer.corps }}</td>
            </tr>
            <tr>
                <th>Professeur</th>
                <td>{{ reclamer.professeur }}</td>
            </tr>
            <tr>
                <th>DateCreation</th>
                <td>{{ reclamer.dateCreation ? reclamer.dateCreation|date('Y-m-d H:i:s') : '' }}</td>
            </tr>
            <tr>
                <th>Ufr</th>
                <td>{{ reclamer.ufr }}</td>
            </tr>
            <tr>
                <th>Filiere</th>
                <td>{{ reclamer.filiere }}</td>
            </tr>
            <tr>
                <th>Niveau</th>
                <td>{{ reclamer.niveau }}</td>
            </tr>

        </tbody>
    </table>
    </div>

    <button type=\"submit\" ><a href=\"{{ path('reclamer_index') }}\">back to list</a></button>

   <button type=\"submit\" > <a href=\"{{ path('reclamer_edit', {'id': reclamer.id}) }}\">edit</a></button>

    {{ include('reclamer/_delete_form.html.twig') }}
{% endblock %}
", "reclamer/show.html.twig", "/home/khoudia/reclamation/templates/reclamer/show.html.twig");
    }
}
