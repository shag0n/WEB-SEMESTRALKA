<?php

/* osoba.html */
class __TwigTemplate_9c4d9e30d55ec3a8dedc708065c0b13fe775bad5b0b38f505bfd34d7ab6bfc0f extends Twig_Template
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
        echo "   ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["osobyList"]) ? $context["osobyList"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["osoby"]) {
            // line 7
            echo "\t\t\t<h3>
\t\t\t\t";
            // line 8
            echo twig_escape_filter($this->env, $this->getAttribute($context["osoby"], "jmeno", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["osoby"], "prijmeni", array()), "html", null, true);
            echo "
\t\t\t</h3>
      <br>
      <ul>
\t\t\t\t  <li>Narozen: ";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute($context["osoby"], "narozen", array()), "html", null, true);
            echo "
          ";
            // line 13
            if ((!(null === $this->getAttribute($context["osoby"], "zemrel", array())))) {
                // line 14
                echo "          <li>Zemrel: ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["osoby"], "zemrel", array()), "html", null, true);
                echo "  
          ";
            }
            // line 16
            echo "          <li>Hodnoceni: ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["osoby"], "hodnoceni", array()), "html", null, true);
            echo " 
      </ul>
      <br>
\t\t\t<p>
\t\t\t";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["osoby"], "popis", array()), "html", null, true);
            echo "
\t\t\t</p>
       ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['osoby'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "\t\t</div>
\t</div>
</div>
</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "osoba.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 23,  66 => 20,  58 => 16,  52 => 14,  50 => 13,  46 => 12,  37 => 8,  34 => 7,  29 => 6,  25 => 4,  21 => 2,  19 => 1,);
    }
}
