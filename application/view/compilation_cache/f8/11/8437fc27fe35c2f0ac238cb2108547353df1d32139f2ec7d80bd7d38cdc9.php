<?php

/* addFilm.html */
class __TwigTemplate_f8118437fc27fe35c2f0ac238cb2108547353df1d32139f2ec7d80bd7d38cdc9 extends Twig_Template
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
<form role=\"form\" action=\"index.php?view=addFilm\" method=\"post\">
    <div class=\"form-group\">
        <label>Nazev</label><input type=\"text\" name=\"nazev\" required class=\"form-control\"/>
    </div>
    <div class=\"form-group\">
        <label>Rok</label><input type=\"number\" name=\"rok\" required class=\"form-control\"/>
    </div> 
    <div class=\"form-group\">
        <label>Delka</label><input type=\"text\" name=\"delka\" required class=\"form-control\"/>
    </div>
    <div class=\"form-group\">
        <label>Popis</label><input type=\"text\" name=\"popis\" required class=\"form-control\"/>
    </div>        

    <div class=\"form-group\">
        <label>Hodnoceni</label><input type=\"text\" name=\"hodnoceni\" required class=\"form-control\"/>
    </div>
    <div class=\"form-group\">
        <label>Studio</label>   <br>
        <select name=\"studio\">
            ";
        // line 23
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["studioList"]) ? $context["studioList"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["studio"]) {
            echo "        

            <option value=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["studio"], "idstudio", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["studio"], "nazev", array()), "html", null, true);
            echo "</option>

            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['studio'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "        </select>
    </div>

    <div class=\"form-group\">
        <label>Zanr</label> <br>
        <select name=\"zanr\">
            ";
        // line 34
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["zanrList"]) ? $context["zanrList"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["zanr"]) {
            echo "        

            <option value=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["zanr"], "idzanr", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["zanr"], "popis", array()), "html", null, true);
            echo "</option>

            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['zanr'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "        </select>
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
        return "addFilm.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 39,  77 => 36,  70 => 34,  62 => 28,  51 => 25,  44 => 23,  21 => 2,  19 => 1,);
    }
}
