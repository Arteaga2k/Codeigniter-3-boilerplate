<?php

/* view.twig */
class __TwigTemplate_45c3cde6f8c41d46addf52342b307b3b2a161f73bf4f06932ecab575bddb7a13 extends Twig_Template
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
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <title>Test</title>
</head>
<body>
    <h1>";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["variable"]) ? $context["variable"] : null), "html", null, true);
        echo "</h1>
    <p>";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["description"]) ? $context["description"] : null), "html", null, true);
        echo "</p>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "view.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 9,  28 => 8,  19 => 1,);
    }
}
