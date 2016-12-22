<?php

/* common/base.twig */
class __TwigTemplate_ad463e762f3d566796842a687d5b22f9ebe84a69302ec082e47ba3302e342c64 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("common/stylesheets.twig", "common/base.twig", 11);
        // line 11
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."common/stylesheets.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $_trait_1 = $this->loadTemplate("common/messages.twig", "common/base.twig", 14);
        // line 14
        if (!$_trait_1->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."common/messages.twig".'" cannot be used as a trait.');
        }
        $_trait_1_blocks = $_trait_1->getBlocks();

        $_trait_2 = $this->loadTemplate("common/navbar.twig", "common/base.twig", 15);
        // line 15
        if (!$_trait_2->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."common/navbar.twig".'" cannot be used as a trait.');
        }
        $_trait_2_blocks = $_trait_2->getBlocks();

        $_trait_3 = $this->loadTemplate("common/container.twig", "common/base.twig", 16);
        // line 16
        if (!$_trait_3->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."common/container.twig".'" cannot be used as a trait.');
        }
        $_trait_3_blocks = $_trait_3->getBlocks();

        $_trait_4 = $this->loadTemplate("common/javascriptsfooter.twig", "common/base.twig", 17);
        // line 17
        if (!$_trait_4->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."common/javascriptsfooter.twig".'" cannot be used as a trait.');
        }
        $_trait_4_blocks = $_trait_4->getBlocks();

        $_trait_5 = $this->loadTemplate("common/javascripts.twig", "common/base.twig", 18);
        // line 18
        if (!$_trait_5->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."common/javascripts.twig".'" cannot be used as a trait.');
        }
        $_trait_5_blocks = $_trait_5->getBlocks();

        $this->traits = array_merge(
            $_trait_0_blocks,
            $_trait_1_blocks,
            $_trait_2_blocks,
            $_trait_3_blocks,
            $_trait_4_blocks,
            $_trait_5_blocks
        );

        $this->blocks = array_merge(
            $this->traits,
            array(
                'stylesheets' => array($this, 'block_stylesheets'),
                'messages' => array($this, 'block_messages'),
                'navbar' => array($this, 'block_navbar'),
                'container' => array($this, 'block_container'),
                'javascriptsfooter' => array($this, 'block_javascriptsfooter'),
                'javascripts' => array($this, 'block_javascripts'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
\t<head>
\t\t<meta charset=\"utf-8\">
\t\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
\t\t<meta name=\"description\" content=\"\">
\t\t<meta name=\"author\" content=\"\">
\t\t<title>";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("app_name"), "html", null, true);
        echo "</title>

";
        // line 11
        echo " ";
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 12
        echo "\t</head>
\t<body>
";
        // line 14
        echo " ";
        $this->displayBlock('messages', $context, $blocks);
        // line 15
        echo " ";
        $this->displayBlock('navbar', $context, $blocks);
        // line 16
        echo " ";
        $this->displayBlock('container', $context, $blocks);
        // line 17
        echo " ";
        $this->displayBlock('javascriptsfooter', $context, $blocks);
        // line 18
        echo " ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 19
        echo "\t</body>
 </html>";
    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
        echo " ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo " ";
    }

    // line 14
    public function block_messages($context, array $blocks = array())
    {
        echo " ";
        $this->displayParentBlock("messages", $context, $blocks);
        echo " ";
    }

    // line 15
    public function block_navbar($context, array $blocks = array())
    {
        echo " ";
        $this->displayParentBlock("navbar", $context, $blocks);
        echo " ";
    }

    // line 16
    public function block_container($context, array $blocks = array())
    {
        echo " ";
        $this->displayParentBlock("container", $context, $blocks);
        echo " ";
    }

    // line 17
    public function block_javascriptsfooter($context, array $blocks = array())
    {
        echo " ";
        $this->displayParentBlock("javascriptsfooter", $context, $blocks);
        echo " ";
    }

    // line 18
    public function block_javascripts($context, array $blocks = array())
    {
        echo " ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo " ";
    }

    public function getTemplateName()
    {
        return "common/base.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  161 => 18,  153 => 17,  145 => 16,  137 => 15,  129 => 14,  121 => 11,  116 => 19,  113 => 18,  110 => 17,  107 => 16,  104 => 15,  101 => 14,  97 => 12,  94 => 11,  89 => 9,  79 => 1,  49 => 18,  42 => 17,  35 => 16,  28 => 15,  21 => 14,  14 => 11,);
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
<html lang=\"en\">
\t<head>
\t\t<meta charset=\"utf-8\">
\t\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
\t\t<meta name=\"description\" content=\"\">
\t\t<meta name=\"author\" content=\"\">
\t\t<title>{{ \"app_name\" | trans }}</title>

{% use \"common/stylesheets.twig\" %} {% block stylesheets %} {{ parent() }} {% endblock stylesheets %}
\t</head>
\t<body>
{% use \"common/messages.twig\" %} {% block messages %} {{ parent() }} {% endblock messages %}
{% use \"common/navbar.twig\" %} {% block navbar %} {{ parent() }} {% endblock navbar %}
{% use \"common/container.twig\" %} {% block container %} {{ parent() }} {% endblock container %}
{% use \"common/javascriptsfooter.twig\" %} {% block javascriptsfooter %} {{ parent() }} {% endblock javascriptsfooter %}
{% use \"common/javascripts.twig\" %} {% block javascripts %} {{ parent() }} {% endblock javascripts %}
\t</body>
 </html>", "common/base.twig", "/var/www/html/mandala-app.com/app/views/common/base.twig");
    }
}
