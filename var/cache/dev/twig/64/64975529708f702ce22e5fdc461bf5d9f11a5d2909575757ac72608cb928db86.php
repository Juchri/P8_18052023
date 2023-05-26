<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_f33de13cf2be3102a8cb12d7954c50337270a50ce80fcb87d822145d9fff5165 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_126d55253099d6eab610f9438f11272095033563c3b6e191d4633800886c8612 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_126d55253099d6eab610f9438f11272095033563c3b6e191d4633800886c8612->enter($__internal_126d55253099d6eab610f9438f11272095033563c3b6e191d4633800886c8612_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_126d55253099d6eab610f9438f11272095033563c3b6e191d4633800886c8612->leave($__internal_126d55253099d6eab610f9438f11272095033563c3b6e191d4633800886c8612_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_0aa78451deec5d8eca4266585c9da6d7d786a6ee65d04004174cfc7db1e5b84a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0aa78451deec5d8eca4266585c9da6d7d786a6ee65d04004174cfc7db1e5b84a->enter($__internal_0aa78451deec5d8eca4266585c9da6d7d786a6ee65d04004174cfc7db1e5b84a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        
        $__internal_0aa78451deec5d8eca4266585c9da6d7d786a6ee65d04004174cfc7db1e5b84a->leave($__internal_0aa78451deec5d8eca4266585c9da6d7d786a6ee65d04004174cfc7db1e5b84a_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_e24e378e021809995ff35158efcd49618352ec427375ee15198a085f9675aa86 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e24e378e021809995ff35158efcd49618352ec427375ee15198a085f9675aa86->enter($__internal_e24e378e021809995ff35158efcd49618352ec427375ee15198a085f9675aa86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_e24e378e021809995ff35158efcd49618352ec427375ee15198a085f9675aa86->leave($__internal_e24e378e021809995ff35158efcd49618352ec427375ee15198a085f9675aa86_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_32baa22bc749c4f95b903b3faf738b8993d8df1fa0035470376c73fc04b8669b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32baa22bc749c4f95b903b3faf738b8993d8df1fa0035470376c73fc04b8669b->enter($__internal_32baa22bc749c4f95b903b3faf738b8993d8df1fa0035470376c73fc04b8669b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_32baa22bc749c4f95b903b3faf738b8993d8df1fa0035470376c73fc04b8669b->leave($__internal_32baa22bc749c4f95b903b3faf738b8993d8df1fa0035470376c73fc04b8669b_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/Applications/MAMP/htdocs/P8_18052023/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
