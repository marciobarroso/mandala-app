<?php

/* common/container.twig */
class __TwigTemplate_38bbf84a852235cfa0104712cfd85dc1ef42e8e6b14b685ef1837467eb9b952a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'container' => array($this, 'block_container'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('container', $context, $blocks);
    }

    public function block_container($context, array $blocks = array())
    {
        // line 2
        echo "<div class=\"container-fluid\">
\t\t\t";
        // line 3
        $this->displayBlock('content', $context, $blocks);
        // line 6
        echo "\t\t</div><!-- /container -->
";
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "
\t\t\t";
    }

    public function getTemplateName()
    {
        return "common/container.twig";
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  37 => 3,  32 => 6,  30 => 3,  27 => 2,  21 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block container %}
<div class=\"container-fluid\">
\t\t\t{% block content %}

\t\t\t{% endblock content %}
\t\t</div><!-- /container -->
{% endblock container %}", "common/container.twig", "/var/www/html/mandala-app.com/app/views/common/container.twig");
    }
}
