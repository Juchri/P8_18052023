<?php

/* user/create.html.twig */
class __TwigTemplate_8f8d5aa121186cac2aee6acef20a03e4ff45ec2fade572bc57c363e17750dda3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "user/create.html.twig", 1);
        $this->blocks = array(
            'header_title' => array($this, 'block_header_title'),
            'header_img' => array($this, 'block_header_img'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a9d33716b2866dd113afe04032dfafa360b4a60406dd980e5f2ad8fdc1cc1508 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9d33716b2866dd113afe04032dfafa360b4a60406dd980e5f2ad8fdc1cc1508->enter($__internal_a9d33716b2866dd113afe04032dfafa360b4a60406dd980e5f2ad8fdc1cc1508_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/create.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a9d33716b2866dd113afe04032dfafa360b4a60406dd980e5f2ad8fdc1cc1508->leave($__internal_a9d33716b2866dd113afe04032dfafa360b4a60406dd980e5f2ad8fdc1cc1508_prof);

    }

    // line 3
    public function block_header_title($context, array $blocks = array())
    {
        $__internal_e0a9c0d0ee5ba8b51291294d7c0ddd0b4be33720e1278369ee9fac9199bdbc2c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0a9c0d0ee5ba8b51291294d7c0ddd0b4be33720e1278369ee9fac9199bdbc2c->enter($__internal_e0a9c0d0ee5ba8b51291294d7c0ddd0b4be33720e1278369ee9fac9199bdbc2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user/create.html.twig"));

        echo "<h1>Créer un utilisateur</h1>";
        
        $__internal_e0a9c0d0ee5ba8b51291294d7c0ddd0b4be33720e1278369ee9fac9199bdbc2c->leave($__internal_e0a9c0d0ee5ba8b51291294d7c0ddd0b4be33720e1278369ee9fac9199bdbc2c_prof);

    }

    // line 4
    public function block_header_img($context, array $blocks = array())
    {
        $__internal_1c6ca7b94f6e2e0c0a3e14fd37aefe2d8b3ed50df1273f29b04c4ba9a5e9811c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c6ca7b94f6e2e0c0a3e14fd37aefe2d8b3ed50df1273f29b04c4ba9a5e9811c->enter($__internal_1c6ca7b94f6e2e0c0a3e14fd37aefe2d8b3ed50df1273f29b04c4ba9a5e9811c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user/create.html.twig"));

        
        $__internal_1c6ca7b94f6e2e0c0a3e14fd37aefe2d8b3ed50df1273f29b04c4ba9a5e9811c->leave($__internal_1c6ca7b94f6e2e0c0a3e14fd37aefe2d8b3ed50df1273f29b04c4ba9a5e9811c_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_6667d7678dbbe95651d927e82911702a46d2c8effaca6ac50db4f7de925517f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6667d7678dbbe95651d927e82911702a46d2c8effaca6ac50db4f7de925517f9->enter($__internal_6667d7678dbbe95651d927e82911702a46d2c8effaca6ac50db4f7de925517f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user/create.html.twig"));

        // line 7
        echo "    <div class=\"row\">
        ";
        // line 8
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_create")));
        echo "
            ";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "

            <button type=\"submit\" class=\"btn btn-success pull-right\">Ajouter</button>
        ";
        // line 12
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
    </div>
";
        
        $__internal_6667d7678dbbe95651d927e82911702a46d2c8effaca6ac50db4f7de925517f9->leave($__internal_6667d7678dbbe95651d927e82911702a46d2c8effaca6ac50db4f7de925517f9_prof);

    }

    public function getTemplateName()
    {
        return "user/create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 9,  68 => 8,  65 => 7,  59 => 6,  48 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block header_title %}<h1>Créer un utilisateur</h1>{% endblock %}
{% block header_img %}{% endblock %}

{% block body %}
    <div class=\"row\">
        {{ form_start(form, {'action' : path('user_create')}) }}
            {{ form_widget(form) }}

            <button type=\"submit\" class=\"btn btn-success pull-right\">Ajouter</button>
        {{ form_end(form) }}
    </div>
{% endblock %}
", "user/create.html.twig", "/Applications/MAMP/htdocs/P8_18052023/app/Resources/views/user/create.html.twig");
    }
}
