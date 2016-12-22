<?php

/* common/messages.twig */
class __TwigTemplate_8b74d111eea144ed3113c681581a78834224868b7abe5d34ddc6dba9ca618993 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'messages' => array($this, 'block_messages'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('messages', $context, $blocks);
    }

    public function block_messages($context, array $blocks = array())
    {
        // line 2
        echo "\t";
        if ((twig_length_filter($this->env, $this->getAttribute(($context["flash"] ?? null), "messages", array())) > 0)) {
            // line 3
            echo "\t<div class=\"row\" style=\"margin-left: 0px; margin-right: 0px;\">
\t\t<div class=\"col-xs-1 col-sm-1 col-md-4 col-lg-4\"></div>\t
\t\t<div class=\"col-xs-10 col-sm-10 col-md-4 col-lg-4\">
\t\t\t
\t\t\t<div class=\"modal fade\" id=\"modal-messages\" tabindex=\"-1\" role=\"dialog\">
\t\t\t\t<div class=\"modal-dialog\" role=\"document\">
\t\t\t\t\t<div class=\"modal-content\">
\t\t\t\t\t\t<div class=\"modal-header\">
\t\t\t\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
\t\t\t\t\t\t\t";
            // line 12
            if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["flash"] ?? null), "messages", array()), "error", array())) > 0)) {
                // line 13
                echo "\t\t\t\t\t\t\t<span class=\"messages-title error\">\t
\t\t\t\t\t\t\t\t<i class=\"fa fa-exclamation-circle fa-lg\"></i>
\t\t\t\t\t\t\t\t&nbsp;&nbsp;";
                // line 15
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("messages_error"), "html", null, true);
                echo "
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t";
            }
            // line 18
            echo "\t\t\t\t\t\t\t";
            if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["flash"] ?? null), "messages", array()), "success", array())) > 0)) {
                // line 19
                echo "\t\t\t\t\t\t\t<span class=\"messages-title success\">\t
\t\t\t\t\t\t\t\t<i class=\"fa fa-exclamation-circle fa-lg\"></i>
\t\t\t\t\t\t\t\t&nbsp;&nbsp;";
                // line 21
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("messages_success"), "html", null, true);
                echo "
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t";
            }
            // line 24
            echo "\t\t\t\t\t\t\t";
            if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["flash"] ?? null), "messages", array()), "info", array())) > 0)) {
                // line 25
                echo "\t\t\t\t\t\t\t<span class=\"messages-title info\">\t
\t\t\t\t\t\t\t\t<i class=\"fa fa-exclamation-circle fa-lg\"></i>
\t\t\t\t\t\t\t\t&nbsp;&nbsp;";
                // line 27
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("messages_info"), "html", null, true);
                echo "
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t";
            }
            // line 30
            echo "\t\t\t\t\t\t\t";
            if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["flash"] ?? null), "messages", array()), "warning", array())) > 0)) {
                // line 31
                echo "\t\t\t\t\t\t\t<span class=\"messages-title warning\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-exclamation-circle fa-lg\"></i>
\t\t\t\t\t\t\t\t&nbsp;&nbsp;";
                // line 33
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("messages_warning"), "html", null, true);
                echo "
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t";
            }
            // line 36
            echo "\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t\t\t<ul class=\"messages\">
\t\t\t\t\t\t\t";
            // line 39
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["flash"] ?? null), "messages", array()), "error", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 40
                echo "\t\t\t\t\t\t\t\t<li>";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["message"]), "html", null, true);
                echo "</li>
\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 42
            echo "\t\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["flash"] ?? null), "messages", array()), "success", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 43
                echo "\t\t\t\t\t\t\t\t<li>";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["message"]), "html", null, true);
                echo "</li>
\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 45
            echo "\t\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["flash"] ?? null), "messages", array()), "info", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 46
                echo "\t\t\t\t\t\t\t\t<li>";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["message"]), "html", null, true);
                echo "</li>
\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 48
            echo "\t\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["flash"] ?? null), "messages", array()), "warning", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 49
                echo "\t\t\t\t\t\t\t\t<li>";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["message"]), "html", null, true);
                echo "</li>
\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 51
            echo "\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t</div>
\t\t<div class=\"col-xs-1 col-sm-1 col-md-4 col-lg-4\"></div>
\t</div><!-- /row-->
\t";
        }
    }

    public function getTemplateName()
    {
        return "common/messages.twig";
    }

    public function getDebugInfo()
    {
        return array (  151 => 51,  142 => 49,  137 => 48,  128 => 46,  123 => 45,  114 => 43,  109 => 42,  100 => 40,  96 => 39,  91 => 36,  85 => 33,  81 => 31,  78 => 30,  72 => 27,  68 => 25,  65 => 24,  59 => 21,  55 => 19,  52 => 18,  46 => 15,  42 => 13,  40 => 12,  29 => 3,  26 => 2,  20 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block messages %}
\t{% if flash.messages|length > 0 %}
\t<div class=\"row\" style=\"margin-left: 0px; margin-right: 0px;\">
\t\t<div class=\"col-xs-1 col-sm-1 col-md-4 col-lg-4\"></div>\t
\t\t<div class=\"col-xs-10 col-sm-10 col-md-4 col-lg-4\">
\t\t\t
\t\t\t<div class=\"modal fade\" id=\"modal-messages\" tabindex=\"-1\" role=\"dialog\">
\t\t\t\t<div class=\"modal-dialog\" role=\"document\">
\t\t\t\t\t<div class=\"modal-content\">
\t\t\t\t\t\t<div class=\"modal-header\">
\t\t\t\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
\t\t\t\t\t\t\t{% if flash.messages.error|length > 0 %}
\t\t\t\t\t\t\t<span class=\"messages-title error\">\t
\t\t\t\t\t\t\t\t<i class=\"fa fa-exclamation-circle fa-lg\"></i>
\t\t\t\t\t\t\t\t&nbsp;&nbsp;{{ \"messages_error\" | trans }}
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t{% if flash.messages.success|length > 0 %}
\t\t\t\t\t\t\t<span class=\"messages-title success\">\t
\t\t\t\t\t\t\t\t<i class=\"fa fa-exclamation-circle fa-lg\"></i>
\t\t\t\t\t\t\t\t&nbsp;&nbsp;{{ \"messages_success\" | trans }}
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t{% if flash.messages.info|length > 0 %}
\t\t\t\t\t\t\t<span class=\"messages-title info\">\t
\t\t\t\t\t\t\t\t<i class=\"fa fa-exclamation-circle fa-lg\"></i>
\t\t\t\t\t\t\t\t&nbsp;&nbsp;{{ \"messages_info\" | trans }}
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t{% if flash.messages.warning|length > 0 %}
\t\t\t\t\t\t\t<span class=\"messages-title warning\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-exclamation-circle fa-lg\"></i>
\t\t\t\t\t\t\t\t&nbsp;&nbsp;{{ \"messages_warning\" | trans }}
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t\t\t<ul class=\"messages\">
\t\t\t\t\t\t\t{% for message in flash.messages.error %}
\t\t\t\t\t\t\t\t<li>{{ message | trans }}</li>
\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t{% for message in flash.messages.success %}
\t\t\t\t\t\t\t\t<li>{{ message | trans }}</li>
\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t{% for message in flash.messages.info %}
\t\t\t\t\t\t\t\t<li>{{ message | trans }}</li>
\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t{% for message in flash.messages.warning %}
\t\t\t\t\t\t\t\t<li>{{ message | trans }}</li>
\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t</div>
\t\t<div class=\"col-xs-1 col-sm-1 col-md-4 col-lg-4\"></div>
\t</div><!-- /row-->
\t{% endif %}
{% endblock messages %}", "common/messages.twig", "/var/www/html/mandala-app.com/app/views/common/messages.twig");
    }
}
