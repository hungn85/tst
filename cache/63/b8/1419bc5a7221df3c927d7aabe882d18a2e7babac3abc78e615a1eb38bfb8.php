<?php

/* _booking_step1_map.html */
class __TwigTemplate_63b81419bc5a7221df3c927d7aabe882d18a2e7babac3abc78e615a1eb38bfb8 extends Twig_Template
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
        echo "
                <div class=\"map\"></div>
                <div>
                    <p style=\"float:left;\">";
        // line 4
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Khoảng cách")), "html", null, true);
        echo ": 29.58km</p>
                    <p style=\"float:right;\">";
        // line 5
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Thời gian dự tính")), "html", null, true);
        echo ": 20 ";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("phút")), "html", null, true);
        echo "</p>
                </div>";
    }

    public function getTemplateName()
    {
        return "_booking_step1_map.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 5,  24 => 4,  19 => 1,);
    }
}
