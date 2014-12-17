<?php

/* addOsoba.html */
class __TwigTemplate_66fd3f5973d78452d6c7365fb98f0648c021727e7b3597b8cb6aa45530522c7f extends Twig_Template
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
<form role=\"form\" action=\"index.php?view=addOsoba\" method=\"post\">
    <div class=\"form-group\">
        <label>Jmeno</label><input type=\"text\" name=\"jmeno\" required class=\"form-control\"/>
    </div>
    <div class=\"form-group\">
        <label>Prijmeni</label><input type=\"text\" name=\"prijmeni\" required class=\"form-control\"/>
    </div> 
    <div class=\"form-group\">
        <label>Narozen</label><input type=\"date\" name=\"narozen\" required class=\"form-control\"/>
    </div>
    <div class=\"form-group\">
        <label>Zemrel</label><input type=\"date\" name=\"zemrel\" class=\"form-control\"/>
    </div>        

    <div class=\"form-group\">
    <label>Pohlavi</label>   <br>
    <select name=\"pohlavi\">            
            <option value=\"muz\">muz</option>
            <option value=\"zena\">zena</option>
    </select>
    </div>

    <div class=\"form-group\">
        <label>Popis</label><input type=\"text\" name=\"popisOsoby\" required class=\"form-control\"/>
    </div>

    <div class=\"form-group\">
        <label>Hodnoceni</label><input type=\"text\" name=\"hodnoceniOsoby\" required class=\"form-control\"/>
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
        return "addOsoba.html";
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
