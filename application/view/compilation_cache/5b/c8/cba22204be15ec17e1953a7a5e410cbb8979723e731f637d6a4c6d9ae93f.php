<?php

/* login.html */
class __TwigTemplate_5bc8cba22204be15ec17e1953a7a5e410cbb8979723e731f637d6a4c6d9ae93f extends Twig_Template
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
        echo "<!DOCTYPE html>
<!-- saved from url=(0040)http://getbootstrap.com/examples/signin/ -->
<html lang=\"en\"><head><meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">
    <link rel=\"icon\" href=\"http://getbootstrap.com/favicon.ico\">

    <title>Signin Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href=\"http://getbootstrap.com/dist/css/bootstrap.min.css\" rel=\"stylesheet\">

    <!-- Custom styles for this template -->
    <link href=\"http://getbootstrap.com/examples/signin/signin.css\" rel=\"stylesheet\">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src=\"../../assets/js/ie8-responsive-file-warning.js\"></script><![endif]-->
    <script src=\"./Signin Template for Bootstrap_files/ie-emulation-modes-warning.js\"></script><style type=\"text/css\"></style>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src=\"https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js\"></script>
      <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
    <![endif]-->
  </head>

  <body>

    <div class=\"container\">

      <form action=\"index.php\" method=\"post\" class=\"form-signin\" role=\"form\">
        <h2 class=\"form-signin-heading\">Please sign in</h2>
        <input name=\"user\" type=\"text\" id=\"inputEmail\" class=\"form-control\" placeholder=\"User name\" required=\"\" autofocus=\"\">
        <input name=\"password\" type=\"password\" id=\"inputPassword\" class=\"form-control\" placeholder=\"Password\" required=\"\">
        <div class=\"checkbox\">
        </div>
        <button class=\"btn btn-lg btn-primary btn-block\" type=\"submit\">Log in</button>
      </form>

    </div> <!-- /container -->

</body></html>";
    }

    public function getTemplateName()
    {
        return "login.html";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
