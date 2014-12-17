<?php

/* zprava.html */
class __TwigTemplate_27c1cebbcae09fd9e11f51042c3ab4e44412562370d14d221575cca6165ce6f2 extends Twig_Template
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
        $this->env->loadTemplate("headerLogged.html")->display($context);
        // line 2
        echo "
<div class=\"col-md-5\">
</div>
<h2>";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["zprava"]) ? $context["zprava"] : null), "html", null, true);
        echo "</h2>

</div>
</div>
</div>
</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "zprava.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 5,  21 => 2,  19 => 1,);
    }
}
