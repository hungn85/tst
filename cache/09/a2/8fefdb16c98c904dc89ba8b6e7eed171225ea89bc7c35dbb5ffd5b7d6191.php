<?php

/* _booking_step1_selected_taxi.html */
class __TwigTemplate_09a28fefdb16c98c904dc89ba8b6e7eed171225ea89bc7c35dbb5ffd5b7d6191 extends Twig_Template
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
        echo "<div class=\"row box_sm\">\t
\t\t";
        // line 2
        $this->env->loadTemplate("_booking_step1_selected_classify.html")->display($context);
        echo "\t
\t<div class=\"col-md-12\">
\t\t<div class=\"showxe\">
\t\t\t<ul class=\"nav nav-tabs showxe_tab\">
\t\t\t\t<li class=\" active\"><a href=\"#dichung\" data-toggle=\"tab\">";
        // line 6
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Đi chung")), "html", null, true);
        echo "</a></li>
\t\t\t\t<li><a href=\"#dirieng\" data-toggle=\"tab\">";
        // line 7
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Đi riêng")), "html", null, true);
        echo "</a></li>\t\t\t
\t\t\t</ul>
\t\t\t<div class=\"tab-content\">
\t\t\t\t<div id=\"dichung\" class=\"tab-pane active\">
\t\t\t\t\t";
        // line 11
        $this->env->loadTemplate("_booking_step1_selected_taxi_table.html")->display($context);
        // line 12
        echo "\t\t\t\t</div>
\t\t\t\t<div id=\"dirieng\" class=\"tab-pane\">
\t\t\t\t\t";
        // line 14
        $this->env->loadTemplate("_booking_step1_selected_taxi_table.html")->display($context);
        // line 15
        echo "\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>";
    }

    public function getTemplateName()
    {
        return "_booking_step1_selected_taxi.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 15,  46 => 14,  42 => 12,  40 => 11,  33 => 7,  29 => 6,  22 => 2,  19 => 1,);
    }
}
