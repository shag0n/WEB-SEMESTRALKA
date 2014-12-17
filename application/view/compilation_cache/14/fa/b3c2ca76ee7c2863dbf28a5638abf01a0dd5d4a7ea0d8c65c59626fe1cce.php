<?php

/* seznamOsob.html */
class __TwigTemplate_14fab3c2ca76ee7c2863dbf28a5638abf01a0dd5d4a7ea0d8c65c59626fe1cce extends Twig_Template
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
            echo "   ";
            $this->env->loadTemplate("headerLogged.html")->display($context);
        } else {
            // line 4
            echo "   ";
            $this->env->loadTemplate("header.html")->display($context);
        }
        // line 6
        echo "
\t\t\t<table class=\"table\">
\t\t\t\t<thead>
\t\t\t\t\t<tr>
\t\t\t\t\t <tr>
              <th>Jméno</th>
              <th>Přijmení</th>
              <th>Narozen</th>
              <th>Hodnocení</th>
            </tr>
\t\t\t\t\t</tr>
\t\t\t\t</thead>
\t\t\t\t<tbody>
\t\t\t\t  ";
        // line 19
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["osobyList"]) ? $context["osobyList"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["osoby"]) {
            // line 20
            echo "            <tr>
              <td><a href=\"index.php?view=osoba&id=";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["osoby"], "idosoba", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["osoby"], "jmeno", array()), "html", null, true);
            echo "</a></td>
              <td><a href=\"index.php?view=osoba&id=";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["osoby"], "idosoba", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["osoby"], "prijmeni", array()), "html", null, true);
            echo "</a></td>
              <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["osoby"], "narozen", array()), "html", null, true);
            echo "</td>
              <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["osoby"], "hodnoceni", array()), "html", null, true);
            echo "</td>
            </tr>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['osoby'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "\t\t\t\t</tbody>
\t\t\t</table>
\t\t</div>
\t</div>
</div>
</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "seznamOsob.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 27,  67 => 24,  63 => 23,  57 => 22,  51 => 21,  48 => 20,  44 => 19,  29 => 6,  25 => 4,  21 => 2,  19 => 1,);
    }
}
