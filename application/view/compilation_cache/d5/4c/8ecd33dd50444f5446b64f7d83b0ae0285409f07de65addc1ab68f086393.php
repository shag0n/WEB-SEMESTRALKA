<?php

/* filmy.html */
class __TwigTemplate_d54c8ecd33dd50444f5446b64f7d83b0ae0285409f07de65addc1ab68f086393 extends Twig_Template
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
<h3>
    ";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["nazev"]) ? $context["nazev"] : null), "html", null, true);
        echo "
</h3>
<br>
<b>Scénáristé</b>
<ul>
    ";
        // line 13
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["scenaristeList"]) ? $context["scenaristeList"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["osoby"]) {
            // line 14
            echo "
    <li><a href=\"index.php?view=osoba&id=";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($context["osoby"], "idosoba", array()), "html", null, true);
            echo "\"> ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["osoby"], "jmeno", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["osoby"], "prijmeni", array()), "html", null, true);
            echo " </a></li>

    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['osoby'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "</ul>
<b>Režiséři</b>
<ul>
    ";
        // line 21
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["reziseriList"]) ? $context["reziseriList"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["osoby"]) {
            // line 22
            echo "
    <li><a href=\"index.php?view=osoba&id=";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["osoby"], "idosoba", array()), "html", null, true);
            echo "\"> ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["osoby"], "jmeno", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["osoby"], "prijmeni", array()), "html", null, true);
            echo " </a></li>

    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['osoby'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "</ul>
<b>Herci</b>
<ul>
    ";
        // line 29
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["herciList"]) ? $context["herciList"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["osoby"]) {
            // line 30
            echo "
    <li><a href=\"index.php?view=osoba&id=";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["osoby"], "idosoba", array()), "html", null, true);
            echo "\"> ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["osoby"], "jmeno", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["osoby"], "prijmeni", array()), "html", null, true);
            echo " </a></li>

    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['osoby'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "</ul>
<br>
<p>
    ";
        // line 37
        echo twig_escape_filter($this->env, (isset($context["popis"]) ? $context["popis"] : null), "html", null, true);
        echo "
</p>
</div>
</div>
</div>
</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "filmy.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 37,  109 => 34,  96 => 31,  93 => 30,  89 => 29,  84 => 26,  71 => 23,  68 => 22,  64 => 21,  59 => 18,  46 => 15,  43 => 14,  39 => 13,  31 => 8,  27 => 6,  24 => 4,  21 => 2,  19 => 1,);
    }
}
