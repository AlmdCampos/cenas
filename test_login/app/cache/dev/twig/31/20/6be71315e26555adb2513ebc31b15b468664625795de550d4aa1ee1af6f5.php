<?php

/* AgostinhoCrudBundle:Default:index.html.twig */
class __TwigTemplate_31206be71315e26555adb2513ebc31b15b468664625795de550d4aa1ee1af6f5 extends Twig_Template
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
        echo "How are you ";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "?!
";
    }

    public function getTemplateName()
    {
        return "AgostinhoCrudBundle:Default:index.html.twig";
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
