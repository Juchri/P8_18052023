<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_ebbb5aa14f101ea86f7689f803ba8a2273839e93e82a299b206bdd31df10ecb9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_de3dc98bfbdf24baf93e59793d9b537e4b1cea6afaba1c0a50fe0b332ba5f523 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de3dc98bfbdf24baf93e59793d9b537e4b1cea6afaba1c0a50fe0b332ba5f523->enter($__internal_de3dc98bfbdf24baf93e59793d9b537e4b1cea6afaba1c0a50fe0b332ba5f523_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_de3dc98bfbdf24baf93e59793d9b537e4b1cea6afaba1c0a50fe0b332ba5f523->leave($__internal_de3dc98bfbdf24baf93e59793d9b537e4b1cea6afaba1c0a50fe0b332ba5f523_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_7de92abf21b45f55d6d6bfa14532e9b7ef0f3bb51b0b96f036b074c163ef6c2c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7de92abf21b45f55d6d6bfa14532e9b7ef0f3bb51b0b96f036b074c163ef6c2c->enter($__internal_7de92abf21b45f55d6d6bfa14532e9b7ef0f3bb51b0b96f036b074c163ef6c2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/exception.html.twig"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_7de92abf21b45f55d6d6bfa14532e9b7ef0f3bb51b0b96f036b074c163ef6c2c->leave($__internal_7de92abf21b45f55d6d6bfa14532e9b7ef0f3bb51b0b96f036b074c163ef6c2c_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_b5f3bfe3fd302c301379346b74e3c2b88c61145a11e55c573d387ad3478a0c07 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5f3bfe3fd302c301379346b74e3c2b88c61145a11e55c573d387ad3478a0c07->enter($__internal_b5f3bfe3fd302c301379346b74e3c2b88c61145a11e55c573d387ad3478a0c07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/exception.html.twig"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_b5f3bfe3fd302c301379346b74e3c2b88c61145a11e55c573d387ad3478a0c07->leave($__internal_b5f3bfe3fd302c301379346b74e3c2b88c61145a11e55c573d387ad3478a0c07_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_5b7b8d5aa3fff7c63c830804945d862d371c22f92cb5b94c977c36dbd03370d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b7b8d5aa3fff7c63c830804945d862d371c22f92cb5b94c977c36dbd03370d1->enter($__internal_5b7b8d5aa3fff7c63c830804945d862d371c22f92cb5b94c977c36dbd03370d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/exception.html.twig"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_5b7b8d5aa3fff7c63c830804945d862d371c22f92cb5b94c977c36dbd03370d1->leave($__internal_5b7b8d5aa3fff7c63c830804945d862d371c22f92cb5b94c977c36dbd03370d1_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  114 => 32,  108 => 28,  106 => 27,  102 => 25,  96 => 24,  88 => 21,  82 => 17,  80 => 16,  75 => 14,  70 => 13,  64 => 12,  54 => 9,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/Applications/MAMP/htdocs/P8_18052023/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
