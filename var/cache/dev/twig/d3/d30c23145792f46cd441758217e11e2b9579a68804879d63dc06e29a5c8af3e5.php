<?php

/* base.html.twig */
class __TwigTemplate_2789ab5880561603e8883f17e7d7170fd59b624ebf8b8198ad115bb535b65875 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'header_title' => array($this, 'block_header_title'),
            'header_img' => array($this, 'block_header_img'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_89d97162667c99dc1c7546d081919d8e6d4ff7b28c6ac35df910fb62f0995eb6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89d97162667c99dc1c7546d081919d8e6d4ff7b28c6ac35df910fb62f0995eb6->enter($__internal_89d97162667c99dc1c7546d081919d8e6d4ff7b28c6ac35df910fb62f0995eb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">

    <head>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <meta name=\"description\" content=\"\">
        <meta name=\"author\" content=\"\">

        <title>To Do List app</title>

        <!-- Bootstrap Core CSS -->
        <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

        <!-- Custom CSS -->
        <link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/shop-homepage.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
        <script src=\"https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js\"></script>
        <![endif]-->
    </head>

    <body>
        <nav class=\"navbar navbar-light navbar-fixed-top\" style=\"background-color: #e3f2fd;\" role=\"navigation\">
            <div class=\"container\">
                <div class=\"navbar-header\">
                    <a class=\"navbar-brand\" href=\"#\">To Do List app</a>

                    <img src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/Logo_OpenClassrooms.png"), "html", null, true);
        echo "\" alt=\"OpenClassrooms\" />
                </div>
            </div>
        </nav>

        <!-- Page Content -->
        <div class=\"container\">
            <div class=\"row\">
                <a href=\"";
        // line 41
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_create");
        echo "\" class=\"btn btn-primary\">Créer un utilisateur</a>

                ";
        // line 43
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            // line 44
            echo "                <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("logout");
            echo "\" class=\"pull-right btn btn-danger\">Se déconnecter</a>
                ";
        }
        // line 46
        echo "
                ";
        // line 47
        if (( !$this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()) && ("login" != $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")))) {
            // line 48
            echo "                <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login");
            echo "\" class=\"btn btn-success\">Se connecter</a>
                ";
        }
        // line 50
        echo "            </div>

            <div class=\"row\">
                <div class=\"col-md-12\">
                    ";
        // line 54
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 55
            echo "                        <div class=\"alert alert-success\" role=\"alert\">
                            <strong>Superbe !</strong> ";
            // line 56
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo "
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "
                    ";
        // line 60
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "error"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 61
            echo "                        <div class=\"alert alert-danger\" role=\"alert\">
                            <strong>Oops !</strong> ";
            // line 62
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo "
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        echo "
                    ";
        // line 66
        $this->displayBlock('header_title', $context, $blocks);
        // line 67
        echo "                    ";
        $this->displayBlock('header_img', $context, $blocks);
        // line 68
        echo "                </div>
            </div>

            <br />

            <div class=\"row\">
                <div class=\"col-md-12\">
                    ";
        // line 75
        $this->displayBlock('body', $context, $blocks);
        // line 76
        echo "                </div>
            </div>
        </div>
        <!-- /.container -->

        <div class=\"container\">

            <hr>
            <footer>
                <div class=\"row\">
                    <div class=\"col-lg-12\">
                        <p class=\"pull-right\">Copyright &copy; OpenClassrooms</p>
                    </div>
                </div>
            </footer>

        </div>

        <script src=\"";
        // line 94
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 95
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    </body>
</html>
";
        
        $__internal_89d97162667c99dc1c7546d081919d8e6d4ff7b28c6ac35df910fb62f0995eb6->leave($__internal_89d97162667c99dc1c7546d081919d8e6d4ff7b28c6ac35df910fb62f0995eb6_prof);

    }

    // line 66
    public function block_header_title($context, array $blocks = array())
    {
        $__internal_fa5d14b8d2449bf314ec0cf482ef9eb83d1e9b4f0ff7ee55b5c08ec0ab7cd68e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa5d14b8d2449bf314ec0cf482ef9eb83d1e9b4f0ff7ee55b5c08ec0ab7cd68e->enter($__internal_fa5d14b8d2449bf314ec0cf482ef9eb83d1e9b4f0ff7ee55b5c08ec0ab7cd68e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base.html.twig"));

        
        $__internal_fa5d14b8d2449bf314ec0cf482ef9eb83d1e9b4f0ff7ee55b5c08ec0ab7cd68e->leave($__internal_fa5d14b8d2449bf314ec0cf482ef9eb83d1e9b4f0ff7ee55b5c08ec0ab7cd68e_prof);

    }

    // line 67
    public function block_header_img($context, array $blocks = array())
    {
        $__internal_904a9457fe1af73662ab03d4633875faa96120a4cc7ca5926cdd781627e8ce8f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_904a9457fe1af73662ab03d4633875faa96120a4cc7ca5926cdd781627e8ce8f->enter($__internal_904a9457fe1af73662ab03d4633875faa96120a4cc7ca5926cdd781627e8ce8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base.html.twig"));

        echo "<img class=\"slide-image\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/todolist_homepage.jpg"), "html", null, true);
        echo "\" alt=\"todo list\">";
        
        $__internal_904a9457fe1af73662ab03d4633875faa96120a4cc7ca5926cdd781627e8ce8f->leave($__internal_904a9457fe1af73662ab03d4633875faa96120a4cc7ca5926cdd781627e8ce8f_prof);

    }

    // line 75
    public function block_body($context, array $blocks = array())
    {
        $__internal_affa2146931cab8455a0c9413e7acce478826af98d920e24bdfba7699abc653b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_affa2146931cab8455a0c9413e7acce478826af98d920e24bdfba7699abc653b->enter($__internal_affa2146931cab8455a0c9413e7acce478826af98d920e24bdfba7699abc653b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base.html.twig"));

        
        $__internal_affa2146931cab8455a0c9413e7acce478826af98d920e24bdfba7699abc653b->leave($__internal_affa2146931cab8455a0c9413e7acce478826af98d920e24bdfba7699abc653b_prof);

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
        return array (  220 => 75,  206 => 67,  195 => 66,  184 => 95,  180 => 94,  160 => 76,  158 => 75,  149 => 68,  146 => 67,  144 => 66,  141 => 65,  132 => 62,  129 => 61,  125 => 60,  122 => 59,  113 => 56,  110 => 55,  106 => 54,  100 => 50,  94 => 48,  92 => 47,  89 => 46,  83 => 44,  81 => 43,  76 => 41,  65 => 33,  46 => 17,  40 => 14,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"fr\">

    <head>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <meta name=\"description\" content=\"\">
        <meta name=\"author\" content=\"\">

        <title>To Do List app</title>

        <!-- Bootstrap Core CSS -->
        <link href=\"{{ asset('css/bootstrap.min.css') }}\" rel=\"stylesheet\">

        <!-- Custom CSS -->
        <link href=\"{{ asset('css/shop-homepage.css') }}\" rel=\"stylesheet\">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
        <script src=\"https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js\"></script>
        <![endif]-->
    </head>

    <body>
        <nav class=\"navbar navbar-light navbar-fixed-top\" style=\"background-color: #e3f2fd;\" role=\"navigation\">
            <div class=\"container\">
                <div class=\"navbar-header\">
                    <a class=\"navbar-brand\" href=\"#\">To Do List app</a>

                    <img src=\"{{ asset('img/Logo_OpenClassrooms.png') }}\" alt=\"OpenClassrooms\" />
                </div>
            </div>
        </nav>

        <!-- Page Content -->
        <div class=\"container\">
            <div class=\"row\">
                <a href=\"{{ path('user_create') }}\" class=\"btn btn-primary\">Créer un utilisateur</a>

                {% if app.user %}
                <a href=\"{{ path('logout') }}\" class=\"pull-right btn btn-danger\">Se déconnecter</a>
                {% endif %}

                {% if not app.user and 'login' != app.request.attributes.get('_route') %}
                <a href=\"{{ path('login') }}\" class=\"btn btn-success\">Se connecter</a>
                {% endif %}
            </div>

            <div class=\"row\">
                <div class=\"col-md-12\">
                    {% for flash_message in app.session.flashBag.get('success') %}
                        <div class=\"alert alert-success\" role=\"alert\">
                            <strong>Superbe !</strong> {{ flash_message }}
                        </div>
                    {% endfor %}

                    {% for flash_message in app.session.flashBag.get('error') %}
                        <div class=\"alert alert-danger\" role=\"alert\">
                            <strong>Oops !</strong> {{ flash_message }}
                        </div>
                    {% endfor %}

                    {% block header_title %}{% endblock %}
                    {% block header_img %}<img class=\"slide-image\" src=\"{{ asset('img/todolist_homepage.jpg') }}\" alt=\"todo list\">{% endblock %}
                </div>
            </div>

            <br />

            <div class=\"row\">
                <div class=\"col-md-12\">
                    {% block body %}{% endblock %}
                </div>
            </div>
        </div>
        <!-- /.container -->

        <div class=\"container\">

            <hr>
            <footer>
                <div class=\"row\">
                    <div class=\"col-lg-12\">
                        <p class=\"pull-right\">Copyright &copy; OpenClassrooms</p>
                    </div>
                </div>
            </footer>

        </div>

        <script src=\"{{ asset('js/jquery.js') }}\"></script>
        <script src=\"{{ asset('js/bootstrap.min.js') }}\"></script>
    </body>
</html>
", "base.html.twig", "/Applications/MAMP/htdocs/P8_18052023/app/Resources/views/base.html.twig");
    }
}
