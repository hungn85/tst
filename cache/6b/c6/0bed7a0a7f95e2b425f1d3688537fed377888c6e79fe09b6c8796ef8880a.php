<?php

/* layout.html */
class __TwigTemplate_6bc60bed7a0a7f95e2b425f1d3688537fed377888c6e79fe09b6c8796ef8880a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'login_remind' => array($this, 'block_login_remind'),
            'booking_step' => array($this, 'block_booking_step'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

\t<head>
\t\t<meta charset='utf-8'>
\t\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
\t\t<link href='http://fonts.googleapis.com/css?family=Roboto:700,400|Roboto+Slab' rel='stylesheet' type='text/css'>
\t\t<link href=\"/css/bootstrap.min.css\" rel=\"stylesheet\">
\t\t<link href=\"/css/main.css\" rel=\"stylesheet\">
\t\t<link href=\"/css/home.css\" rel=\"stylesheet\">
\t\t<link rel=\"stylesheet\" href=\"/css/menu.css\">
\t\t<link href=\"/css/full-slider.css\" rel=\"stylesheet\">

\t\t<script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
\t\t<script src=\"https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js\"></script>
\t\t<script src=\"/js/jquery-1.11.0.js\"></script>
\t\t<script src=\"/js/menu_script.js\"></script>
\t\t<script type='text/javascript' src='/js/quanli_script.js'></script>
\t\t<script type='text/javascript'  src='/js/popbox.js'></script>
\t\t<script src=\"/js/jquery.tabSlideOut.v1.3.js\"></script>
\t\t<!-- jQuery Version 1.11.0 -->


\t\t<!-- Bootstrap Core JavaScript -->
\t\t<script src=\"/js/bootstrap.min.js\"></script>
\t\t<script src=\"/js/bootstrap.js\"></script>

\t\t<!-- Script to Activate the Carousel -->

</head>

\t<body>
\t\t";
        // line 34
        $this->env->loadTemplate("_header_adv.html")->display($context);
        // line 35
        echo "\t\t";
        $this->env->loadTemplate("_header_top.html")->display($context);
        // line 36
        echo "\t\t";
        $this->env->loadTemplate("_header_menu.html")->display($context);
        // line 37
        echo "\t\t";
        $this->env->loadTemplate("_js.html")->display($context);
        // line 38
        echo "\t\t";
        $this->displayBlock('login_remind', $context, $blocks);
        // line 39
        echo "\t\t";
        $this->displayBlock('booking_step', $context, $blocks);
        // line 40
        echo "\t\t";
        $this->displayBlock('body', $context, $blocks);
        // line 41
        echo "\t\t";
        $this->env->loadTemplate("_invite_right_bar.html")->display($context);
        // line 42
        echo "\t\t";
        $this->env->loadTemplate("_footer.html")->display($context);
        // line 43
        echo "    </body>
</html>";
    }

    // line 38
    public function block_login_remind($context, array $blocks = array())
    {
    }

    // line 39
    public function block_booking_step($context, array $blocks = array())
    {
    }

    // line 40
    public function block_body($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "layout.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 40,  93 => 39,  88 => 38,  83 => 43,  80 => 42,  77 => 41,  74 => 40,  71 => 39,  68 => 38,  65 => 37,  62 => 36,  59 => 35,  57 => 34,  22 => 1,);
    }
}
