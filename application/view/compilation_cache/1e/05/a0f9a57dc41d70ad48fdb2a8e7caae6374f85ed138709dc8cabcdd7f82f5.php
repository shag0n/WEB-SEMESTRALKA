<?php

/* addNapsal.html */
class __TwigTemplate_1e05a0f9a57dc41d70ad48fdb2a8e7caae6374f85ed138709dc8cabcdd7f82f5 extends Twig_Template
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
<form role=\"form\" action=\"index.php?view=addNapsal\" method=\"post\">

    <div class=\"col-md-3\">
    </div>

    <select name=\"idOsoba\">
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

    <select name=\"idFilm\">
        ";
        // line 17
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["filmList"]) ? $context["filmList"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["film"]) {
            echo "        

        <option value=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["film"], "idfilm", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["film"], "nazev", array()), "html", null, true);
            echo "</option>

        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['film'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "    </select>

    <button type=\"submit\" class=\"btn btn-default\">Pridat</button>    
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
        return "addNapsal.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 22,  62 => 19,  55 => 17,  50 => 14,  37 => 11,  30 => 9,  21 => 2,  19 => 1,);
    }
}
