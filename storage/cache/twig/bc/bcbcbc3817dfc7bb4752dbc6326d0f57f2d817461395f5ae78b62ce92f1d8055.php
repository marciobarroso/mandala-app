<?php

/* common/javascriptsfooter.twig */
class __TwigTemplate_ca6d4714994621e7cd263809b009bfe243180572d275483a261c48ad5ef4503f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'javascriptsfooter' => array($this, 'block_javascriptsfooter'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('javascriptsfooter', $context, $blocks);
    }

    public function block_javascriptsfooter($context, array $blocks = array())
    {
        // line 2
        echo "\t\t<script src=\"//code.jquery.com/jquery-1.12.4.min.js\"></script>
\t\t<script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js\"></script>
\t\t<script src=\"//cdnjs.cloudflare.com/ajax/libs/bootstrap-switch/3.3.2/js/bootstrap-switch.min.js\"></script>
\t\t<script src=\"";
        // line 5
        echo twig_escape_filter($this->env, ($context["ROOT"] ?? null), "html", null, true);
        echo "/static/js/site.js\"></script>

\t\t<script src=\"//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js\"></script>
\t\t<script src=\"//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js\"></script>


";
    }

    public function getTemplateName()
    {
        return "common/javascriptsfooter.twig";
    }

    public function getDebugInfo()
    {
        return array (  31 => 5,  26 => 2,  20 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block javascriptsfooter %}
\t\t<script src=\"//code.jquery.com/jquery-1.12.4.min.js\"></script>
\t\t<script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js\"></script>
\t\t<script src=\"//cdnjs.cloudflare.com/ajax/libs/bootstrap-switch/3.3.2/js/bootstrap-switch.min.js\"></script>
\t\t<script src=\"{{ ROOT }}/static/js/site.js\"></script>

\t\t<script src=\"//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js\"></script>
\t\t<script src=\"//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js\"></script>


{% endblock javascriptsfooter %}", "common/javascriptsfooter.twig", "/var/www/html/mandala-app.com/app/views/common/javascriptsfooter.twig");
    }
}
