<?php

/* _booking_step1_selected_taxi_table.html */
class __TwigTemplate_00085c1e96c8bf6797747f74a8b77fcfd18404892232f2257e3924c80a22316b extends Twig_Template
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
        echo "<div class=\"\">
\t<table class=\"table table-hover showxe\">
\t\t<thead>
\t\t\t<tr>
\t\t\t\t<th>";
        // line 5
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Hãng")), "html", null, true);
        echo "</th>
\t\t\t\t<th>";
        // line 6
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Loại xe")), "html", null, true);
        echo "</th>
\t\t\t\t<th>";
        // line 7
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Đơn giá")), "html", null, true);
        echo "</th>
\t\t\t\t<th>";
        // line 8
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Thành tiền")), "html", null, true);
        echo "</th>
\t\t\t\t<th width=\"70px\"></th>
\t\t\t</tr>
\t\t</thead>
\t<tbody>
\t<tr>
\t\t";
        // line 14
        $this->env->loadTemplate("_booking_step1_selected_taxi_table_show_taxi.html")->display($context);
        // line 15
        echo "\t</tr>
\t<tr>
\t\t";
        // line 17
        $this->env->loadTemplate("_booking_step1_selected_taxi_table_show_taxi.html")->display($context);
        // line 18
        echo "\t</tr>
\t</tbody>
</table>
</div>";
    }

    public function getTemplateName()
    {
        return "_booking_step1_selected_taxi_table.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 18,  52 => 17,  48 => 15,  46 => 14,  37 => 8,  33 => 7,  29 => 6,  25 => 5,  19 => 1,);
    }
}
