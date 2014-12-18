<?php

/* updateOsobaId.html */
class __TwigTemplate_029a1a826149fe688bc433e6abcfa3803758cd517cc76ac9b3ac933366d73481 extends Twig_Template
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
    ";
        // line 4
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["osobaList"]) ? $context["osobaList"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["osoba"]) {
            echo " 
    <div class=\"form-group\">
        <label>Jmeno</label><input type=\"text\" name=\"jmeno\" value=\"";
            // line 6
            echo twig_escape_filter($this->env, $this->getAttribute($context["osoba"], "jmeno", array()), "html", null, true);
            echo "\" required class=\"form-control\"/>
    </div>
    <div class=\"form-group\">
        <label>Prijmeni</label><input type=\"text\" name=\"prijmeni\" value=\"";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute($context["osoba"], "prijmeni", array()), "html", null, true);
            echo "\" required class=\"form-control\"/>
    </div>
    <div class=\"form-group\">
        <label>Narozen</label><input type=\"text\" name=\"narozen\" value=\"";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute($context["osoba"], "narozen", array()), "html", null, true);
            echo " \" required class=\"form-control\"/>
    </div>
    <div class=\"form-group\">
        <label>Zemrel</label><input type=\"text\" name=\"zemrel\"  value=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($context["osoba"], "zemrel", array()), "html", null, true);
            echo "\" class=\"form-control\"/>
    </div>        
    <div class=\"form-group\">
        <label>Pohlavi</label><input type=\"text\" name=\"pohlavi\"  value=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["osoba"], "pohlavi", array()), "html", null, true);
            echo "\" required class=\"form-control\"/>
    </div> 
    <div class=\"form-group\">
        <label>Popis</label><input type=\"text\" name=\"popis\"  value=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["osoba"], "popis", array()), "html", null, true);
            echo "\" required class=\"form-control\"/>
    </div> <div class=\"form-group\">
        <label>Hodnoceni</label><input type=\"text\" name=\"hodnoceni\"  value=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["osoba"], "hodnoceni", array()), "html", null, true);
            echo "\" required class=\"form-control\"/>
    </div> 

            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['osoba'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "
        </select>
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
        return "updateOsobaId.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 27,  67 => 23,  62 => 21,  56 => 18,  50 => 15,  44 => 12,  38 => 9,  32 => 6,  25 => 4,  21 => 2,  19 => 1,);
    }
}
