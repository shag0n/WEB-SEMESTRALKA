<?php

/* updateFilm.html */
class __TwigTemplate_2d8fc380003c1836da5c4557d7432804d1985008681b3fc15b313e0dad1e42ca extends Twig_Template
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
          
                <div class=\"col-md-4\">
                </div>

            <select name=\"id\">
             ";
        // line 9
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["filmList"]) ? $context["filmList"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["film"]) {
            echo "        
                        
            <option value=\"";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute($context["film"], "idfilm", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["film"], "nazev", array()), "html", null, true);
            echo "</option>
                       
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['film'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "           </select>
             
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
        return "updateFilm.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 14,  37 => 11,  30 => 9,  21 => 2,  19 => 1,);
    }
}
