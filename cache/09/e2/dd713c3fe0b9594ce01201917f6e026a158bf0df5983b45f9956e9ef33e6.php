<?php

/* _booking_step1_booking_regularly.html */
class __TwigTemplate_09e2dd713c3fe0b9594ce01201917f6e026a158bf0df5983b45f9956e9ef33e6 extends Twig_Template
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
        echo "<div class=\"row\">
\t<div class=\"col-md-4\">
\t\t<label for=\"booking_regularly\">
\t\t\t<input type=\"checkbox\" value=\"booking_regularly\" id=\"booking_regularly\"/> ";
        // line 4
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Tôi muốn đặt xe đi thường xuyên")), "html", null, true);
        echo "
\t\t</label>
\t</div>
\t<div class=\"col-md-12 col-sm-12\" id=\"show_booking_regularly\">
\t\t<div class=\"booking_regular_bg\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"text_box\">
\t\t\t\t\t<p class=\"padding_top\">";
        // line 11
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Ngày bắt đầu")), "html", null, true);
        echo "</p>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t<input type=\"text\" class=\"form-control\" disabled>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-offset-1 text_box\">
\t\t\t\t\t<p class=\"padding_top\">";
        // line 17
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Khoảng thời gian")), "html", null, true);
        echo "</p>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-2\">
\t\t\t\t\t<select class=\"form-control\">
\t\t\t\t\t\t<option>";
        // line 21
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("1 tuần")), "html", null, true);
        echo "</option>
\t\t\t\t\t\t<option>";
        // line 22
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("1 tháng")), "html", null, true);
        echo "</option>
\t\t\t\t\t\t<option>";
        // line 23
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("3 tháng")), "html", null, true);
        echo "</option>
\t\t\t\t\t\t<option>";
        // line 24
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("6 tháng")), "html", null, true);
        echo "</option>
\t\t\t\t\t\t<option>";
        // line 25
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("1 năm")), "html", null, true);
        echo "</option>
\t\t\t\t\t</select>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"row box_sm\">
\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t<p>";
        // line 31
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Chọn ngày:")), "html", null, true);
        echo "</p>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-1 col-sm-4 col-xs-6\">
\t\t\t\t\t<label>
\t\t\t\t\t\t<input type=\"checkbox\"> ";
        // line 35
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Thứ 2")), "html", null, true);
        echo "\t\t\t\t\t
\t\t\t\t\t</label>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-1 col-sm-4 col-xs-6\">
\t\t\t\t\t<label>
\t\t\t\t\t\t<input type=\"checkbox\"> ";
        // line 40
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Thứ 3")), "html", null, true);
        echo "\t\t\t\t\t
\t\t\t\t\t</label>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-1 col-sm-4 col-xs-6\">
\t\t\t\t\t<label>
\t\t\t\t\t\t<input type=\"checkbox\"> ";
        // line 45
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Thứ 4")), "html", null, true);
        echo "\t\t\t\t\t
\t\t\t\t\t</label>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-1 col-sm-4 col-xs-6\">
\t\t\t\t\t<label>
\t\t\t\t\t\t<input type=\"checkbox\"> ";
        // line 50
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Thứ 5")), "html", null, true);
        echo "\t\t\t\t\t
\t\t\t\t\t</label>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-1 col-sm-4 col-xs-6\">
\t\t\t\t\t<label>
\t\t\t\t\t\t<input type=\"checkbox\"> ";
        // line 55
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Thứ 6")), "html", null, true);
        echo "\t\t\t\t\t
\t\t\t\t\t</label>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-1 col-sm-4 col-xs-6\">
\t\t\t\t\t<label>
\t\t\t\t\t\t<input type=\"checkbox\"> ";
        // line 60
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Thứ 7")), "html", null, true);
        echo "\t\t\t\t\t
\t\t\t\t\t</label>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-2 col-sm-4 col-xs-6\">
\t\t\t\t\t<label>
\t\t\t\t\t\t<input type=\"checkbox\"> ";
        // line 65
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Chủ nhật")), "html", null, true);
        echo "\t\t\t\t\t
\t\t\t\t\t</label>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t<hr/>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-2  col-xs-6 text-right\">
\t\t\t\t\t<p><strong>";
        // line 76
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Tổng số:")), "html", null, true);
        echo "</strong></p>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-2 col-xs-6\">
\t\t\t\t\t<p>";
        // line 79
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("10 chuyến")), "html", null, true);
        echo "</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-2 col-xs-6 text-right\">
\t\t\t\t\t<p><strong>";
        // line 84
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Đơn giá:")), "html", null, true);
        echo "</strong></p>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-2 col-xs-6\">
\t\t\t\t\t<p>";
        // line 87
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("170.000 Đ")), "html", null, true);
        echo "</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-2 col-xs-6 text-right\">
\t\t\t\t\t<p><strong>";
        // line 92
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Tổng tiền:")), "html", null, true);
        echo "</strong></p>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-2 col-xs-6\">
\t\t\t\t\t<p>";
        // line 95
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("1.770.000")), "html", null, true);
        echo "</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-2 col-xs-6 text-right\">
\t\t\t\t\t<p><strong>";
        // line 100
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Giảm giá:")), "html", null, true);
        echo "</strong></p>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-2 col-xs-6\">
\t\t\t\t\t<p>";
        // line 103
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("10%")), "html", null, true);
        echo "</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-2 col-xs-6 text-right\">
\t\t\t\t\t<p><strong>";
        // line 108
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Thanh toán:")), "html", null, true);
        echo "</strong></p>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-2\">
\t\t\t\t\t<p>";
        // line 111
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("1.530.000 Đ")), "html", null, true);
        echo "</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t<p><strong>";
        // line 116
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Quý khách vui lòng thanh toán trả trước")), "html", null, true);
        echo "</strong></p>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>";
    }

    public function getTemplateName()
    {
        return "_booking_step1_booking_regularly.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  214 => 116,  206 => 111,  200 => 108,  192 => 103,  186 => 100,  178 => 95,  172 => 92,  164 => 87,  158 => 84,  150 => 79,  144 => 76,  130 => 65,  122 => 60,  114 => 55,  106 => 50,  98 => 45,  90 => 40,  82 => 35,  75 => 31,  66 => 25,  62 => 24,  58 => 23,  54 => 22,  50 => 21,  43 => 17,  34 => 11,  24 => 4,  19 => 1,);
    }
}
