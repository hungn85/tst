<?php

/* _booking_step1_selected_taxi_table_show_taxi.html */
class __TwigTemplate_a8a2abfa6d8a9347a6af049b47ee9936e29a1b9932fc1b6f78dcf464b98d51f1 extends Twig_Template
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
        echo "<td>
                                    <p>AirportTaxi</p>
                                    <p><small><a class=\"addition_text\">";
        // line 3
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Chi tiết")), "html", null, true);
        echo "<a><small></p>
                                </td>
                                <td class=\"hidden-xs\">
                                    <p>";
        // line 6
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Taxi 4 chỗ")), "html", null, true);
        echo "</p>
                                    <p><small><a class=\"addition_text\">";
        // line 7
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Hình ảnh")), "html", null, true);
        echo "<a><small></p>
                                </td>
                                <td>
                                    *****
                                </td>
                                <td>
                                    ";
        // line 13
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Khách")), "html", null, true);
        echo "
                                </td>
                                <td class=\"hidden-xs\">
                                    150.000 VNĐ
                                </td>
                                <td>
                                    150.000 VNĐ
                                </td>
                                <td>
                                    <div class=\"radio book\">
                                        <label for=\"book_noncheck_1\">
                                            <input type=\"radio\" name=\"chonxe\" value=\"option1\" id=\"book_noncheck_1\" checked><span class=\"book_noncheck\">Chọn</span>
                                        </label>
                                    </div>
                                </td>";
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
        return array (  42 => 13,  33 => 7,  29 => 6,  23 => 3,  19 => 1,);
    }
}
