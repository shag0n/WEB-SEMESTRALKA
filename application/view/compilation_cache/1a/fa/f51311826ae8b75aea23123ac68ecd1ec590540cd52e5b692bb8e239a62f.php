<?php

/* addStudio.html */
class __TwigTemplate_1afaf51311826ae8b75aea23123ac68ecd1ec590540cd52e5b692bb8e239a62f extends Twig_Template
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
<form role=\"form\" action=\"index.php?view=addStudio\" method=\"post\">
    <div class=\"form-group\">
        <label>Nazev</label><input type=\"text\" name=\"nazev\" required class=\"form-control\"/>
    </div>
    <div class=\"form-group\">
        <label>Adresa</label><input type=\"text\" name=\"adresa\" required class=\"form-control\"/>
    </div> 
    <button type=\"submit\" class=\"btn btn-default\">Odeslat</button>
</form> 

<br><br>

</div>
</div>
</div>
</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "addStudio.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  21 => 2,  19 => 1,);
    }
}
