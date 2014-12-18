<?php

/* updateOsoba.html */
class __TwigTemplate_12dd9b1a404aa1f2e926ce80da2bc67e84901f84b657227531073f4181e09829 extends Twig_Template
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
<form role=\"form\" action=\"index.php?view=updateOsobaId\" method=\"post\">

    <div class=\"col-md-5\">
    </div>

    <select name=\"id\">
        ";
        // line 9
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["osobaList"]) ? $context["osobaList"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["osoba"]) {
            echo "        

        <option value=\"";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute($context["osoba"], "idosoba", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["osoba"], "jmeno", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["osoba"], "prijmeni", array()), "html", null, true);
            echo "</option>

        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['osoba'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "    </select>

    <button type=\"submit\" class=\"btn btn-default\">Upravit</button>    
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
        return "updateOsoba.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 14,  37 => 11,  30 => 9,  21 => 2,  19 => 1,);
    }
}
