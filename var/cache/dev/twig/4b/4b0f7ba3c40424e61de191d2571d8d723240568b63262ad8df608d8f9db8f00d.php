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

/* reclamer/index.html.twig */
class __TwigTemplate_e3a23bb4d0c3ceec4ef80e522586b7628a60d6003b806930ce6f1f6229fc3f6c extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reclamer/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reclamer/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "reclamer/index.html.twig", 1);
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
H1{
    font-family: cursive;
    text-align: center;
    font-size: 50px;
    text-transform: uppercase;
    letter-spacing: 1px;
    color:  black;
    padding: 10px 0;
    background:#808080;
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
    font-size: 16px;
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

    // line 137
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Reclamer index";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 139
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 140
        echo " <H1 >Liste des reclamations</H1>

<div class=\"table-wrapper\">

    <table class=\"fl-table\" id=\"example\">
         
   
        <thead>
            <tr>
                <th>Id</th>
                <th>Objet</th>
                <th>Corps</th>
                <th>Professeur</th>
                <th>DateCreation</th>
                <th>Ufr</th>
                <th>Filiere</th>
                <th>Niveau</th>
                ";
        // line 157
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 158
            echo "                    <th>Prenom</th>
                    <th>Nom</th>
                ";
        }
        // line 161
        echo "                <th>actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 165
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["reclamers"]) || array_key_exists("reclamers", $context) ? $context["reclamers"] : (function () { throw new RuntimeError('Variable "reclamers" does not exist.', 165, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["reclamer"]) {
            // line 166
            echo "            <tr>
                <td>";
            // line 167
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reclamer"], "id", [], "any", false, false, false, 167), "html", null, true);
            echo "</td>
                <td>";
            // line 168
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reclamer"], "objet", [], "any", false, false, false, 168), "html", null, true);
            echo "</td>
                <td>";
            // line 169
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reclamer"], "corps", [], "any", false, false, false, 169), "html", null, true);
            echo "</td>
                <td>";
            // line 170
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reclamer"], "professeur", [], "any", false, false, false, 170), "html", null, true);
            echo "</td>
                <td>";
            // line 171
            ((twig_get_attribute($this->env, $this->source, $context["reclamer"], "dateCreation", [], "any", false, false, false, 171)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reclamer"], "dateCreation", [], "any", false, false, false, 171), "Y-m-d H:i:s"), "html", null, true))) : (print ("")));
            echo "</td>
                <td>";
            // line 172
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reclamer"], "ufr", [], "any", false, false, false, 172), "html", null, true);
            echo "</td>
                <td>";
            // line 173
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reclamer"], "filiere", [], "any", false, false, false, 173), "html", null, true);
            echo "</td> 
                <td>";
            // line 174
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reclamer"], "niveau", [], "any", false, false, false, 174), "html", null, true);
            echo "</td>
                ";
            // line 175
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 176
                echo "                     <td>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["reclamer"], "user", [], "any", false, false, false, 176), "prenom", [], "any", false, false, false, 176), "html", null, true);
                echo "</td>
                      <td>";
                // line 177
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["reclamer"], "user", [], "any", false, false, false, 177), "nom", [], "any", false, false, false, 177), "html", null, true);
                echo "</td>
                ";
            }
            // line 179
            echo "                <td>
                    <button type=\"submit\" ><a href=\"";
            // line 180
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reclamer_show", ["id" => twig_get_attribute($this->env, $this->source, $context["reclamer"], "id", [], "any", false, false, false, 180)]), "html", null, true);
            echo "\">show</a></button>
                     ";
            // line 181
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ETUDIANT")) {
                // line 182
                echo "                         <div class=\"mb-3\">
                            <button type=\"submit\" ><a href=\"";
                // line 183
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reclamer_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["reclamer"], "id", [], "any", false, false, false, 183)]), "html", null, true);
                echo "\">edit</a></button>
                        </div>
                    ";
            }
            // line 186
            echo "                    
                    
                </td>
                
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 192
            echo "            <tr>
                <td colspan=\"9\">no records found</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reclamer'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 196
        echo "        </tbody>
    </table></div>
     ";
        // line 198
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ETUDIANT")) {
            // line 199
            echo "        <div class=\"mb-3\">
            <button type=\"submit\" ><a href=\"";
            // line 200
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reclamer_new");
            echo "\">Create new</a></button>
         </div>
    ";
        }
        // line 203
        echo "    
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "reclamer/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  377 => 203,  371 => 200,  368 => 199,  366 => 198,  362 => 196,  353 => 192,  343 => 186,  337 => 183,  334 => 182,  332 => 181,  328 => 180,  325 => 179,  320 => 177,  315 => 176,  313 => 175,  309 => 174,  305 => 173,  301 => 172,  297 => 171,  293 => 170,  289 => 169,  285 => 168,  281 => 167,  278 => 166,  273 => 165,  267 => 161,  262 => 158,  260 => 157,  241 => 140,  231 => 139,  212 => 137,  70 => 3,  60 => 2,  37 => 1,);
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
H1{
    font-family: cursive;
    text-align: center;
    font-size: 50px;
    text-transform: uppercase;
    letter-spacing: 1px;
    color:  black;
    padding: 10px 0;
    background:#808080;
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
    font-size: 16px;
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

{% block title %}Reclamer index{% endblock %}

{% block body %}
 <H1 >Liste des reclamations</H1>

<div class=\"table-wrapper\">

    <table class=\"fl-table\" id=\"example\">
         
   
        <thead>
            <tr>
                <th>Id</th>
                <th>Objet</th>
                <th>Corps</th>
                <th>Professeur</th>
                <th>DateCreation</th>
                <th>Ufr</th>
                <th>Filiere</th>
                <th>Niveau</th>
                {% if is_granted('ROLE_ADMIN') %}
                    <th>Prenom</th>
                    <th>Nom</th>
                {% endif %}
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
        {% for reclamer in reclamers %}
            <tr>
                <td>{{ reclamer.id }}</td>
                <td>{{ reclamer.objet }}</td>
                <td>{{ reclamer.corps }}</td>
                <td>{{ reclamer.professeur }}</td>
                <td>{{ reclamer.dateCreation ? reclamer.dateCreation|date('Y-m-d H:i:s') : '' }}</td>
                <td>{{ reclamer.ufr }}</td>
                <td>{{ reclamer.filiere }}</td> 
                <td>{{ reclamer.niveau }}</td>
                {% if is_granted('ROLE_ADMIN') %}
                     <td>{{ reclamer.user.prenom }}</td>
                      <td>{{ reclamer.user.nom}}</td>
                {% endif %}
                <td>
                    <button type=\"submit\" ><a href=\"{{ path('reclamer_show', {'id': reclamer.id}) }}\">show</a></button>
                     {% if is_granted('ROLE_ETUDIANT') %}
                         <div class=\"mb-3\">
                            <button type=\"submit\" ><a href=\"{{ path('reclamer_edit', {'id': reclamer.id}) }}\">edit</a></button>
                        </div>
                    {% endif %}
                    
                    
                </td>
                
            </tr>
        {% else %}
            <tr>
                <td colspan=\"9\">no records found</td>
            </tr>
        {% endfor %}
        </tbody>
    </table></div>
     {% if is_granted('ROLE_ETUDIANT') %}
        <div class=\"mb-3\">
            <button type=\"submit\" ><a href=\"{{ path('reclamer_new') }}\">Create new</a></button>
         </div>
    {% endif %}
    
{% endblock %}
", "reclamer/index.html.twig", "/home/khoudia/reclamation/templates/reclamer/index.html.twig");
    }
}
