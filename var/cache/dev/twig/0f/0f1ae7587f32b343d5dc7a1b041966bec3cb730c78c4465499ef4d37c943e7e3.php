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

/* :task:list.html.twig */
class __TwigTemplate_016d99d4eaf6e0705fd5f8e0cb0aa897b4b98083a65d8d518b777a7c39831122 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'header_img' => [$this, 'block_header_img'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", ":task:list.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", ":task:list.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", ":task:list.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_header_img($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header_img"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header_img"));

        echo "<img class=\"slide-image\" src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/todolist_content.jpg"), "html", null, true);
        echo "\" alt=\"todo list\">";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("task_create");
        echo "\" class=\"btn btn-info pull-right\">Créer une tâche</a>
    <div class=\"row\">
        ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tasks"]) || array_key_exists("tasks", $context) ? $context["tasks"] : (function () { throw new RuntimeError('Variable "tasks" does not exist.', 8, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["task"]) {
            // line 9
            echo "        <div class=\"col-sm-4 col-lg-4 col-md-4\">
            <div class=\"thumbnail\">
                <div class=\"caption\" style=\"height:unset;\">
                    <h4 class=\"pull-right\">
                        ";
            // line 13
            if (twig_get_attribute($this->env, $this->source, $context["task"], "isDone", [], "any", false, false, false, 13)) {
                echo "<span class=\"glyphicon glyphicon-ok\"></span>";
            } else {
                echo "<span class=\"glyphicon glyphicon-remove\"></span>";
            }
            // line 14
            echo "                    </h4>
                    <h4><a href=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("task_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["task"], "id", [], "any", false, false, false, 15)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["task"], "title", [], "any", false, false, false, 15), "html", null, true);
            echo "</a></h4>
                    <p>";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["task"], "content", [], "any", false, false, false, 16), "html", null, true);
            echo "</p>

                    <p style=\"font-style: italic;\">
                        ";
            // line 19
            if ( !(null === twig_get_attribute($this->env, $this->source, $context["task"], "getUser", [], "method", false, false, false, 19))) {
                // line 20
                echo "                            - ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["task"], "getUser", [], "method", false, false, false, 20), "username", [], "any", false, false, false, 20), "html", null, true);
                echo "
                        ";
            } else {
                // line 22
                echo "                            - Anonymus
                        ";
            }
            // line 24
            echo "                    </p>


                </div>
                <div>
                    <form action=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("task_toggle", ["id" => twig_get_attribute($this->env, $this->source, $context["task"], "id", [], "any", false, false, false, 29)]), "html", null, true);
            echo "\">
                        <button class=\"btn btn-success btn-sm pull-right\">
                            ";
            // line 31
            if ( !twig_get_attribute($this->env, $this->source, $context["task"], "isDone", [], "any", false, false, false, 31)) {
                echo "Marquer comme faite";
            } else {
                echo "Marquer non terminée";
            }
            // line 32
            echo "                        </button>
                    </form>
                    <form action=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("task_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["task"], "id", [], "any", false, false, false, 34)]), "html", null, true);
            echo "\">
                        <button class=\"btn btn-danger btn-sm pull-right\">Supprimer</button>
                    </form>
                         <form action=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("task_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["task"], "id", [], "any", false, false, false, 37)]), "html", null, true);
            echo "\">
                        <button class=\"btn btn-primary btn-sm pull-right m-2\">Modifier</button>
                    </form>
                </div>
            </div>
        </div>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 44
            echo "            <div class=\"alert alert-warning\" role=\"alert\">
                Il n'y a pas encore de tâche enregistrée. <a href=\"";
            // line 45
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("task_create");
            echo "\" class=\"btn btn-warning pull-right\">Créer une tâche</a>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['task'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return ":task:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  192 => 48,  183 => 45,  180 => 44,  168 => 37,  162 => 34,  158 => 32,  152 => 31,  147 => 29,  140 => 24,  136 => 22,  130 => 20,  128 => 19,  122 => 16,  116 => 15,  113 => 14,  107 => 13,  101 => 9,  96 => 8,  90 => 6,  80 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block header_img %}<img class=\"slide-image\" src=\"{{ asset('img/todolist_content.jpg') }}\" alt=\"todo list\">{% endblock %}

{% block body %}
    <a href=\"{{ path('task_create') }}\" class=\"btn btn-info pull-right\">Créer une tâche</a>
    <div class=\"row\">
        {% for task in tasks %}
        <div class=\"col-sm-4 col-lg-4 col-md-4\">
            <div class=\"thumbnail\">
                <div class=\"caption\" style=\"height:unset;\">
                    <h4 class=\"pull-right\">
                        {% if task.isDone %}<span class=\"glyphicon glyphicon-ok\"></span>{% else %}<span class=\"glyphicon glyphicon-remove\"></span>{% endif %}
                    </h4>
                    <h4><a href=\"{{ path('task_edit', {'id' : task.id }) }}\">{{ task.title }}</a></h4>
                    <p>{{ task.content }}</p>

                    <p style=\"font-style: italic;\">
                        {% if task.getUser() is not null %}
                            - {{ task.getUser().username }}
                        {% else %}
                            - Anonymus
                        {% endif %}
                    </p>


                </div>
                <div>
                    <form action=\"{{ path('task_toggle', {'id' : task.id }) }}\">
                        <button class=\"btn btn-success btn-sm pull-right\">
                            {% if not task.isDone %}Marquer comme faite{% else %}Marquer non terminée{% endif %}
                        </button>
                    </form>
                    <form action=\"{{ path('task_delete', {'id' : task.id }) }}\">
                        <button class=\"btn btn-danger btn-sm pull-right\">Supprimer</button>
                    </form>
                         <form action=\"{{ path('task_edit', {'id' : task.id }) }}\">
                        <button class=\"btn btn-primary btn-sm pull-right m-2\">Modifier</button>
                    </form>
                </div>
            </div>
        </div>
        {% else %}
            <div class=\"alert alert-warning\" role=\"alert\">
                Il n'y a pas encore de tâche enregistrée. <a href=\"{{ path('task_create') }}\" class=\"btn btn-warning pull-right\">Créer une tâche</a>
            </div>
        {% endfor %}
    </div>
{% endblock %}
", ":task:list.html.twig", "/Applications/MAMP/htdocs/P8_18052023/app/Resources/views/task/list.html.twig");
    }
}
