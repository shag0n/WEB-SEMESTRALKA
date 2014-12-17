<?php

/* index.html */
class __TwigTemplate_f1b658a12ea8754344a65eda26039c95de1d3fd73bfc5484610e4c97d716d10c extends Twig_Template
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
<div class=\"row\">
    <div class=\"col-md-4\">
        <div class=\"thumbnail\">
            
            <div class=\"caption\">
                <h3>
                    <a href=\"index.php?view=film&id=";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["id1"]) ? $context["id1"] : null), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["nadpis1"]) ? $context["nadpis1"] : null), "html", null, true);
        echo "</a>
                </h3>
                <p>
                    ";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["popis1"]) ? $context["popis1"] : null), "html", null, true);
        echo "
                </p>
                <p>
                    <a class=\"btn btn-primary\" href=\"index.php?view=film&id=";
        // line 19
        echo twig_escape_filter($this->env, (isset($context["id1"]) ? $context["id1"] : null), "html", null, true);
        echo "\">More</a>
                </p>
            </div>
        </div>
    </div>
    <div class=\"col-md-4\">
        <div class=\"thumbnail\">
            
            <div class=\"caption\">
                <h3>
                    <a href=\"index.php?view=film&id=";
        // line 29
        echo twig_escape_filter($this->env, (isset($context["id2"]) ? $context["id2"] : null), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["nadpis2"]) ? $context["nadpis2"] : null), "html", null, true);
        echo "</a>
                </h3>
                <p>
                    ";
        // line 32
        echo twig_escape_filter($this->env, (isset($context["popis2"]) ? $context["popis2"] : null), "html", null, true);
        echo "
                </p>
                <p>
                    <a class=\"btn btn-primary\" href=\"index.php?view=film&id=";
        // line 35
        echo twig_escape_filter($this->env, (isset($context["id2"]) ? $context["id2"] : null), "html", null, true);
        echo "\">More</a>
                </p>
            </div>
        </div>
    </div>
    <div class=\"col-md-4\">
        <div class=\"thumbnail\">
            
            <div class=\"caption\">
                <h3>
                    <a href=\"index.php?view=film&id=";
        // line 45
        echo twig_escape_filter($this->env, (isset($context["id3"]) ? $context["id3"] : null), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["nadpis3"]) ? $context["nadpis3"] : null), "html", null, true);
        echo "</a>
                </h3>
                <p>
                    ";
        // line 48
        echo twig_escape_filter($this->env, (isset($context["popis3"]) ? $context["popis3"] : null), "html", null, true);
        echo "
                </p>
                <p>
                    <a class=\"btn btn-primary\" href=\"index.php?view=film&id=";
        // line 51
        echo twig_escape_filter($this->env, (isset($context["id3"]) ? $context["id3"] : null), "html", null, true);
        echo "\">More</a>
                </p>
            </div>
        </div>
    </div>
</div>
<div class=\"row\">
    <div class=\"col-md-4\">
        <div class=\"thumbnail\">
            
            <div class=\"caption\">
                <h3>
                    <a href=\"index.php?view=film&id=";
        // line 63
        echo twig_escape_filter($this->env, (isset($context["id4"]) ? $context["id4"] : null), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["nadpis4"]) ? $context["nadpis4"] : null), "html", null, true);
        echo "</a>
                </h3>
                <p>
                    ";
        // line 66
        echo twig_escape_filter($this->env, (isset($context["popis4"]) ? $context["popis4"] : null), "html", null, true);
        echo "
                </p>
                <p>
                    <a class=\"btn btn-primary\" href=\"index.php?view=film&id=";
        // line 69
        echo twig_escape_filter($this->env, (isset($context["id4"]) ? $context["id4"] : null), "html", null, true);
        echo "\">More</a>
                </p>
            </div>
        </div>
    </div>
    <div class=\"col-md-4\">
        <div class=\"thumbnail\">
            
            <div class=\"caption\">
                <h3>
                    <a href=\"index.php?view=film&id=";
        // line 79
        echo twig_escape_filter($this->env, (isset($context["id5"]) ? $context["id5"] : null), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["nadpis5"]) ? $context["nadpis5"] : null), "html", null, true);
        echo "</a>
                </h3>
                <p>
                    ";
        // line 82
        echo twig_escape_filter($this->env, (isset($context["popis5"]) ? $context["popis5"] : null), "html", null, true);
        echo "
                </p>
                <p>
                    <a class=\"btn btn-primary\" href=\"index.php?view=film&id=";
        // line 85
        echo twig_escape_filter($this->env, (isset($context["id5"]) ? $context["id5"] : null), "html", null, true);
        echo "\">More</a>
                </p>
            </div>
        </div>
    </div>
    <div class=\"col-md-4\">
        <div class=\"thumbnail\">
            
            <div class=\"caption\">
                <h3>
                    <a href=\"index.php?view=film&id=";
        // line 95
        echo twig_escape_filter($this->env, (isset($context["id6"]) ? $context["id6"] : null), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["nadpis6"]) ? $context["nadpis6"] : null), "html", null, true);
        echo "</a>
                </h3>
                <p>
                    ";
        // line 98
        echo twig_escape_filter($this->env, (isset($context["popis6"]) ? $context["popis6"] : null), "html", null, true);
        echo "
                </p>
                <p>
                    <a class=\"btn btn-primary\" href=\"index.php?view=film&id=";
        // line 101
        echo twig_escape_filter($this->env, (isset($context["id6"]) ? $context["id6"] : null), "html", null, true);
        echo "\">More</a>
                </p>
            </div>
        </div>
    </div>
</div>
</div>
<div class=\"col-md-1 column\">
</div>
</div>
</div>
</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "index.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  187 => 101,  181 => 98,  173 => 95,  160 => 85,  154 => 82,  146 => 79,  133 => 69,  127 => 66,  119 => 63,  104 => 51,  98 => 48,  90 => 45,  77 => 35,  71 => 32,  63 => 29,  50 => 19,  44 => 16,  36 => 13,  27 => 6,  24 => 4,  21 => 2,  19 => 1,);
    }
}
