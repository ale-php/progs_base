<?php

/* home.html.twig */
class __TwigTemplate_8f36b91ddaa5d7c71e3b05eac90db0145be93165e235a16fe9354e33d381f13e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "bem vindo ";
        echo twig_escape_filter($this->env, (isset($context["nome"]) ? $context["nome"] : null), "html", null, true);
    }

    public function getTemplateName()
    {
        return "home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
/* bem vindo {{nome}}*/
