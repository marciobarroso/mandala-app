<?php

/* login.twig */
class __TwigTemplate_87f527513d4fee8a01ef30d2ff53159e47669218b8e1a17e77c921878c582200 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("common/base.twig", "login.twig", 1);
        $_trait_0 = $this->loadTemplate("common/stylesheets.twig", "login.twig", 3);
        // line 3
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."common/stylesheets.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'stylesheets' => array($this, 'block_stylesheets'),
                'sidebar' => array($this, 'block_sidebar'),
                'navbar' => array($this, 'block_navbar'),
                'content' => array($this, 'block_content'),
                'footer' => array($this, 'block_footer'),
            )
        );
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "common/base.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        echo " ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo " \t\t<style type=\"text/css\">
\t\t\tbody {
\t\t\t  padding-top: 40px;
\t\t\t  padding-bottom: 40px;
\t\t\t}
\t\t\t
\t\t\t.form-signin {
\t\t\t  max-width: 330px;
\t\t\t  padding: 15px;
\t\t\t  margin: 0 auto;
\t\t\t}
\t\t\t.form-signin .form-signin-heading,
\t\t\t.form-signin .checkbox {
\t\t\t  margin-bottom: 10px;
\t\t\t}
\t\t\t.form-signin .checkbox {
\t\t\t  font-weight: normal;
\t\t\t}
\t\t\t.form-signin .form-control {
\t\t\t  position: relative;
\t\t\t  height: auto;
\t\t\t  -webkit-box-sizing: border-box;
\t\t\t     -moz-box-sizing: border-box;
\t\t\t          box-sizing: border-box;
\t\t\t  padding: 10px;
\t\t\t  font-size: 16px;
\t\t\t}
\t\t\t.form-signin .form-control:focus {
\t\t\t  z-index: 2;
\t\t\t}
\t\t\t.form-signin input[type=\"email\"] {
\t\t\t  margin-bottom: -1px;
\t\t\t  border-bottom-right-radius: 0;
\t\t\t  border-bottom-left-radius: 0;
\t\t\t}
\t\t\t.form-signin input[type=\"password\"] {
\t\t\t  margin-bottom: 10px;
\t\t\t  border-top-left-radius: 0;
\t\t\t  border-top-right-radius: 0;
\t\t\t}
\t\t</style>
\t\t
";
    }

    // line 47
    public function block_sidebar($context, array $blocks = array())
    {
    }

    // line 50
    public function block_navbar($context, array $blocks = array())
    {
    }

    // line 53
    public function block_content($context, array $blocks = array())
    {
        // line 54
        echo "<div class=\"row text-center\" style=\"padding-left: 0px; padding-right: 0px;\">
\t\t\t\t<div class=\"col-xs-3 col-sm-4 col-md-5 col-lg-5\"></div><!--/col-->
\t\t\t\t<div class=\"col-xs-6 col-sm-4 col-md-2 col-lg-2\">
\t\t\t\t\t<img class=\"img-responsive\" src=\"";
        // line 57
        echo twig_escape_filter($this->env, ($context["ROOT"] ?? null), "html", null, true);
        echo "/static/images/logo-inmetrics.png\" border=\"0\" />
\t\t\t\t</div><!--/col-->
\t\t\t\t<div class=\"col-xs-3 col-sm-4 col-md-5 col-lg-5\"></div><!--/col-->
\t\t\t</div><!--/row-->
<div class=\"row\" style=\"padding-left: 0px; padding-right: 0px;\">
\t\t\t\t<div class=\"col-xs-2 col-sm-2 col-md-4 col-lg-4\"></div><!--/col-->
\t\t\t\t<div class=\"col-xs-8 col-sm-8 col-md-4 col-lg-4\">
\t\t\t\t\t<form class=\"form-signin\" action=\"";
        // line 64
        echo twig_escape_filter($this->env, ($context["ROOT"] ?? null), "html", null, true);
        echo "/login\" method=\"POST\">
\t\t\t\t\t\t<h3 class=\"form-signin-heading\">
\t\t\t\t\t\t\t";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("login_title"), "html", null, true);
        echo "
\t\t\t\t\t\t</h3>
\t\t\t\t\t\t<label for=\"email\" class=\"sr-only\">
\t\t\t\t\t\t\t";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label_email"), "html", null, true);
        echo "
\t\t\t\t\t\t</label>
\t\t\t\t\t\t<input type=\"email\" id=\"email\" name=\"email\" class=\"form-control\" placeholder=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label_email"), "html", null, true);
        echo "\" required autofocus>
\t\t\t\t\t\t<label for=\"password\" class=\"sr-only\">
\t\t\t\t\t\t\t";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label_password"), "html", null, true);
        echo "
\t\t\t\t\t\t</label>
\t\t\t\t\t\t<input type=\"password\" id=\"password\" name=\"password\" class=\"form-control\" placeholder=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label_password"), "html", null, true);
        echo "\" required>
\t\t\t\t\t\t<!--a href=\"";
        // line 76
        echo twig_escape_filter($this->env, ($context["ROOT"] ?? null), "html", null, true);
        echo "/register\" class=\"btn btn-default pull-left\">
\t\t\t\t\t\t\t";
        // line 77
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label_register"), "html", null, true);
        echo "
\t\t\t\t\t\t</a-->
\t\t\t\t\t\t<button class=\"btn btn-primary pull-right\" type=\"submit\">
\t\t\t\t\t\t\t";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label_login"), "html", null, true);
        echo "
\t\t\t\t\t\t</button>
\t\t\t\t\t</form>
\t\t\t\t</div><!--/col-->
\t\t\t\t<div class=\"col-xs-2 col-sm-2 col-md-4 col-lg-4\"></div><!--/col-->
\t\t\t</div><!--/row-->
";
    }

    // line 87
    public function block_footer($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "login.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  174 => 87,  163 => 80,  157 => 77,  153 => 76,  149 => 75,  144 => 73,  139 => 71,  134 => 69,  128 => 66,  123 => 64,  113 => 57,  108 => 54,  105 => 53,  100 => 50,  95 => 47,  45 => 3,  36 => 1,  14 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"common/base.twig\" %}

{% use \"common/stylesheets.twig\" %} {% block stylesheets %} {{ parent() }} \t\t<style type=\"text/css\">
\t\t\tbody {
\t\t\t  padding-top: 40px;
\t\t\t  padding-bottom: 40px;
\t\t\t}
\t\t\t
\t\t\t.form-signin {
\t\t\t  max-width: 330px;
\t\t\t  padding: 15px;
\t\t\t  margin: 0 auto;
\t\t\t}
\t\t\t.form-signin .form-signin-heading,
\t\t\t.form-signin .checkbox {
\t\t\t  margin-bottom: 10px;
\t\t\t}
\t\t\t.form-signin .checkbox {
\t\t\t  font-weight: normal;
\t\t\t}
\t\t\t.form-signin .form-control {
\t\t\t  position: relative;
\t\t\t  height: auto;
\t\t\t  -webkit-box-sizing: border-box;
\t\t\t     -moz-box-sizing: border-box;
\t\t\t          box-sizing: border-box;
\t\t\t  padding: 10px;
\t\t\t  font-size: 16px;
\t\t\t}
\t\t\t.form-signin .form-control:focus {
\t\t\t  z-index: 2;
\t\t\t}
\t\t\t.form-signin input[type=\"email\"] {
\t\t\t  margin-bottom: -1px;
\t\t\t  border-bottom-right-radius: 0;
\t\t\t  border-bottom-left-radius: 0;
\t\t\t}
\t\t\t.form-signin input[type=\"password\"] {
\t\t\t  margin-bottom: 10px;
\t\t\t  border-top-left-radius: 0;
\t\t\t  border-top-right-radius: 0;
\t\t\t}
\t\t</style>
\t\t
{% endblock stylesheets %}

{% block sidebar %}
{# empty the sidebar #}
{% endblock sidebar %}
{% block navbar %}
{# empty the navbar #}
{% endblock navbar %}
{% block content %}
<div class=\"row text-center\" style=\"padding-left: 0px; padding-right: 0px;\">
\t\t\t\t<div class=\"col-xs-3 col-sm-4 col-md-5 col-lg-5\"></div><!--/col-->
\t\t\t\t<div class=\"col-xs-6 col-sm-4 col-md-2 col-lg-2\">
\t\t\t\t\t<img class=\"img-responsive\" src=\"{{ ROOT }}/static/images/logo-inmetrics.png\" border=\"0\" />
\t\t\t\t</div><!--/col-->
\t\t\t\t<div class=\"col-xs-3 col-sm-4 col-md-5 col-lg-5\"></div><!--/col-->
\t\t\t</div><!--/row-->
<div class=\"row\" style=\"padding-left: 0px; padding-right: 0px;\">
\t\t\t\t<div class=\"col-xs-2 col-sm-2 col-md-4 col-lg-4\"></div><!--/col-->
\t\t\t\t<div class=\"col-xs-8 col-sm-8 col-md-4 col-lg-4\">
\t\t\t\t\t<form class=\"form-signin\" action=\"{{ ROOT }}/login\" method=\"POST\">
\t\t\t\t\t\t<h3 class=\"form-signin-heading\">
\t\t\t\t\t\t\t{{ \"login_title\" | trans }}
\t\t\t\t\t\t</h3>
\t\t\t\t\t\t<label for=\"email\" class=\"sr-only\">
\t\t\t\t\t\t\t{{ \"label_email\" | trans }}
\t\t\t\t\t\t</label>
\t\t\t\t\t\t<input type=\"email\" id=\"email\" name=\"email\" class=\"form-control\" placeholder=\"{{ \"label_email\" | trans }}\" required autofocus>
\t\t\t\t\t\t<label for=\"password\" class=\"sr-only\">
\t\t\t\t\t\t\t{{ \"label_password\" | trans }}
\t\t\t\t\t\t</label>
\t\t\t\t\t\t<input type=\"password\" id=\"password\" name=\"password\" class=\"form-control\" placeholder=\"{{ \"label_password\" | trans }}\" required>
\t\t\t\t\t\t<!--a href=\"{{ ROOT }}/register\" class=\"btn btn-default pull-left\">
\t\t\t\t\t\t\t{{ \"label_register\" | trans }}
\t\t\t\t\t\t</a-->
\t\t\t\t\t\t<button class=\"btn btn-primary pull-right\" type=\"submit\">
\t\t\t\t\t\t\t{{ \"label_login\" | trans }}
\t\t\t\t\t\t</button>
\t\t\t\t\t</form>
\t\t\t\t</div><!--/col-->
\t\t\t\t<div class=\"col-xs-2 col-sm-2 col-md-4 col-lg-4\"></div><!--/col-->
\t\t\t</div><!--/row-->
{% endblock content %}
{% block footer %}
{# empty the footer #}
{% endblock footer %}", "login.twig", "/var/www/html/mandala-app.com/app/views/login.twig");
    }
}
