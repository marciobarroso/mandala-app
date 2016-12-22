<?php

/* common/stylesheets.twig */
class __TwigTemplate_3ae9ad943ddd3da89f5eb6ddda553960964fba94aeb1c3a0830268c954f4c5df extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('stylesheets', $context, $blocks);
    }

    public function block_stylesheets($context, array $blocks = array())
    {
        // line 2
        echo "\t\t<link rel=\"icon\" type=\"image/png\" href=\"";
        echo twig_escape_filter($this->env, ($context["ROOT"] ?? null), "html", null, true);
        echo "/static/images/logo.png\" />
        <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css\">
\t\t<link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css\">
\t\t<link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css\">
\t\t<link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, ($context["ROOT"] ?? null), "html", null, true);
        echo "/static/css/site.css\">
";
    }

    public function getTemplateName()
    {
        return "common/stylesheets.twig";
    }

    public function getDebugInfo()
    {
        return array (  34 => 6,  26 => 2,  20 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block stylesheets %}
\t\t<link rel=\"icon\" type=\"image/png\" href=\"{{ ROOT }}/static/images/logo.png\" />
        <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css\">
\t\t<link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css\">
\t\t<link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css\">
\t\t<link rel=\"stylesheet\" href=\"{{ ROOT }}/static/css/site.css\">
{% endblock stylesheets %}", "common/stylesheets.twig", "/var/www/html/mandala-app.com/app/views/common/stylesheets.twig");
    }
}
