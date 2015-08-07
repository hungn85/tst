<?php

/* _booking_step1_selected_taxi_table_show_taxi.html */
class __TwigTemplate_ea46e060e55270df5d656f9cbfdb346952423ef9ea00859228587e03bfc57002 extends Twig_Template
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
        echo "\t\t\t\t<td>
\t\t\t\t\t<p>AirportTaxi</p>
\t\t\t\t\t<p><small><a class=\"addition_text\" data-toggle=\"modal\" data-target=\"#brand_detail\">";
        // line 3
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("*****")), "html", null, true);
        echo "<a><small></p>
\t\t\t\t</td>
\t\t\t\t<td>
\t\t\t\t\t<img src=\"../img/cab/abc-taxi/abc-taxi-4-cho.png\"/>
\t\t\t\t</td>
\t\t\t\t<td>
\t\t\t\t\t150.000 VNĐ
\t\t\t\t</td>
\t\t\t\t<td>
\t\t\t\t\t150.000 VNĐ
\t\t\t\t</td>
\t\t\t\t<td>
\t\t\t\t\t<div class=\"radio book\">
\t\t\t\t\t\t<label for=\"book_noncheck_1\">
\t\t\t\t\t\t\t<input type=\"radio\" name=\"chonxe\" value=\"option1\" id=\"book_noncheck_1\" checked><span class=\"book_noncheck\">Chọn</span>
\t\t\t\t\t\t</label>
\t\t\t\t\t</div>
\t\t\t\t</td>
\t\t\t\t

\t\t\t\t\t\t\t";
    }

    public function getTemplateName()
    {
        return "_booking_step1_selected_taxi_table_show_taxi.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 3,  19 => 1,);
    }
}
