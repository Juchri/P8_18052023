<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_a083709b5eb1b501ad4e0f0bb7b05f3b59e2e9ee0ed655abbe178ebe837a1084 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_389029030fd13b0e7346e6787364efbcc0b066d48b7d7c709a3747be666d2d8f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_389029030fd13b0e7346e6787364efbcc0b066d48b7d7c709a3747be666d2d8f->enter($__internal_389029030fd13b0e7346e6787364efbcc0b066d48b7d7c709a3747be666d2d8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_389029030fd13b0e7346e6787364efbcc0b066d48b7d7c709a3747be666d2d8f->leave($__internal_389029030fd13b0e7346e6787364efbcc0b066d48b7d7c709a3747be666d2d8f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_4d152912bfc5fc343cee585c9def3c895f89a4d61cad18b57feb3b7b221979fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d152912bfc5fc343cee585c9def3c895f89a4d61cad18b57feb3b7b221979fa->enter($__internal_4d152912bfc5fc343cee585c9def3c895f89a4d61cad18b57feb3b7b221979fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Twig/Exception/exception_full.html.twig"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_4d152912bfc5fc343cee585c9def3c895f89a4d61cad18b57feb3b7b221979fa->leave($__internal_4d152912bfc5fc343cee585c9def3c895f89a4d61cad18b57feb3b7b221979fa_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_cee3ab5f1431077170af4367139710c079c65978945b203825e53c366f1f637b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cee3ab5f1431077170af4367139710c079c65978945b203825e53c366f1f637b->enter($__internal_cee3ab5f1431077170af4367139710c079c65978945b203825e53c366f1f637b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Twig/Exception/exception_full.html.twig"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_cee3ab5f1431077170af4367139710c079c65978945b203825e53c366f1f637b->leave($__internal_cee3ab5f1431077170af4367139710c079c65978945b203825e53c366f1f637b_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_abccf5d21e1828e660334046f86e3170cd71098582d42315be7e51fb9ed16307 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_abccf5d21e1828e660334046f86e3170cd71098582d42315be7e51fb9ed16307->enter($__internal_abccf5d21e1828e660334046f86e3170cd71098582d42315be7e51fb9ed16307_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Twig/Exception/exception_full.html.twig"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_abccf5d21e1828e660334046f86e3170cd71098582d42315be7e51fb9ed16307->leave($__internal_abccf5d21e1828e660334046f86e3170cd71098582d42315be7e51fb9ed16307_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/Applications/MAMP/htdocs/P8_18052023/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
