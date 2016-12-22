<?php

/* common/footer.twig */
class __TwigTemplate_3f40d6338e104d91239df0d00e5ce25bac9fe1c31403039d52378d29c89c52a4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('footer', $context, $blocks);
    }

    public function block_footer($context, array $blocks = array())
    {
        // line 2
        echo "\t\t<footer class=\"footer\">

\t\t\t<div class=\"container\">

\t\t\t\t<div class=\"row\">

\t\t\t\t\t<div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\">

\t\t\t\t\t\tCopyrights to Mandala App

\t\t\t\t\t</div>

\t\t\t\t</div>
\t\t\t
\t\t\t</div>

\t\t</footer>
";
    }

    public function getTemplateName()
    {
        return "common/footer.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 2,  20 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block footer %}
\t\t<footer class=\"footer\">

\t\t\t<div class=\"container\">

\t\t\t\t<div class=\"row\">

\t\t\t\t\t<div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\">

\t\t\t\t\t\tCopyrights to Mandala App

\t\t\t\t\t</div>

\t\t\t\t</div>
\t\t\t
\t\t\t</div>

\t\t</footer>
{% endblock footer %}", "common/footer.twig", "/var/www/html/mandala-app.com/app/views/common/footer.twig");
    }
}
