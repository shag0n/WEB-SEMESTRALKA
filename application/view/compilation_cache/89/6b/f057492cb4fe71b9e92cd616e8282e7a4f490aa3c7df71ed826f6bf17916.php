<?php

/* seznamFilmu.html */
class __TwigTemplate_896bf057492cb4fe71b9e92cd616e8282e7a4f490aa3c7df71ed826f6bf17916 extends Twig_Template
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
        if ((isset($context["logged"]) ? $context["logged"] : null)) {
            // line 2
            $this->env->loadTemplate("headerLogged.html")->display($context);
        } else {
            // line 4
            $this->env->loadTemplate("header.html")->display($context);
        }
        // line 6
        echo "
<table class=\"table\">
    <thead>
        <tr>
        <tr>
            <th>Název</th>
            <th>Rok</th>
            <th>Délka</th>
            <th>Hodnocení</th>
        </tr>
        </tr>
    </thead>
    <tbody>
        ";
        // line 19
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["filmList"]) ? $context["filmList"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["film"]) {
            // line 20
            echo "        <tr>
            <td><a href=\"index.php?view=film&id=";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["film"], "idfilm", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["film"], "nazev", array()), "html", null, true);
            echo "</a></td>
            <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["film"], "rok", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["film"], "delka", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["film"], "hodnoceni", array()), "html", null, true);
            echo "</td>
        </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['film'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "    </tbody>
</table>
</div>
</div>
</div>
</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "seznamFilmu.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 27,  63 => 24,  59 => 23,  55 => 22,  49 => 21,  46 => 20,  42 => 19,  27 => 6,  24 => 4,  21 => 2,  19 => 1,);
    }
}
