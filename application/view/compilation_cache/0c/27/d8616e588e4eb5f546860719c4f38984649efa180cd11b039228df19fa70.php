<?php

/* updateFilmId.html */
class __TwigTemplate_0c27d8616e588e4eb5f546860719c4f38984649efa180cd11b039228df19fa70 extends Twig_Template
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
<form role=\"form\" action=\"index.php?view=updateFilmId\" method=\"post\">
    ";
        // line 4
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["filmList"]) ? $context["filmList"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["film"]) {
            echo " 
    <div class=\"form-group\">
        <label>Nazev</label><input type=\"text\" name=\"nazev\" value=\"";
            // line 6
            echo twig_escape_filter($this->env, $this->getAttribute($context["film"], "nazev", array()), "html", null, true);
            echo "\" required class=\"form-control\"/>
    </div>
    <div class=\"form-group\">
        <label>Rok</label><input type=\"number\" name=\"rok\" value=\"";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute($context["film"], "rok", array()), "html", null, true);
            echo "\" required class=\"form-control\"/>
    </div> 
    <div class=\"form-group\">
        <label>Delka</label><input type=\"text\" name=\"delka\" value=\"";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute($context["film"], "delka", array()), "html", null, true);
            echo " \" required class=\"form-control\"/>
    </div>
    <div class=\"form-group\">
        <label>Popis</label><input type=\"text\" name=\"popis\"  value=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($context["film"], "popis", array()), "html", null, true);
            echo "\" required class=\"form-control\"/>
    </div>        

    <div class=\"form-group\">
        <label>Hodnoceni</label><input type=\"text\" name=\"hodnoceni\" value=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["film"], "hodnoceni", array()), "html", null, true);
            echo "\"  required class=\"form-control\"/>
    </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['film'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "    <div class=\"form-group\">
        <label>Studio</label>   <br>
        <select name=\"studio\">
            ";
        // line 25
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["studioList"]) ? $context["studioList"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["studio"]) {
            echo "        

            <option value=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["studio"], "idstudio", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["studio"], "nazev", array()), "html", null, true);
            echo "</option>

            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['studio'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "  
        </select>
    </div>

    <div class=\"form-group\">
        <label>Zanr</label> <br>
        <select name=\"zanr\">
            ";
        // line 36
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["zanrList"]) ? $context["zanrList"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["zanr"]) {
            echo "        

            <option value=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($context["zanr"], "idzanr", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["zanr"], "popis", array()), "html", null, true);
            echo "</option>

            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['zanr'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
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
        return "updateFilmId.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 41,  105 => 38,  98 => 36,  89 => 29,  78 => 27,  71 => 25,  66 => 22,  57 => 19,  50 => 15,  44 => 12,  38 => 9,  32 => 6,  25 => 4,  21 => 2,  19 => 1,);
    }
}
