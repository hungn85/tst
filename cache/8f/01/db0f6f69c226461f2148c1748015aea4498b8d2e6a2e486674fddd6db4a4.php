<?php

/* _booking_step1_selected_classify.html */
class __TwigTemplate_8f01db0f6f69c226461f2148c1748015aea4498b8d2e6a2e486674fddd6db4a4 extends Twig_Template
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
        echo "<!-- _booking_step1_selected_classify.html -->
<div class=\"col-md-offset-4 col-md-8\">
\t\t<div class=\"phanloai\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-4 col-sm-6 col-xs-6\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"text_box\">
\t\t\t\t\t\t\t<p class=\"padding_top\">";
        // line 8
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Loại xe:")), "html", null, true);
        echo "</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-8\">
\t\t\t\t\t\t\t<select class=\"form-control\">
\t\t\t\t\t\t\t\t<option>";
        // line 12
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Xe 4 chỗ")), "html", null, true);
        echo "</option>
\t\t\t\t\t\t\t\t<option>";
        // line 13
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Xe 7 chỗ")), "html", null, true);
        echo "</option>
\t\t\t\t\t\t\t\t<option>";
        // line 14
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Xe 16 chỗ")), "html", null, true);
        echo "</option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t</div>\t
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-4 col-sm-6 col-xs-6\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"text_box\">
\t\t\t\t\t\t\t<p class=\"padding_top\">";
        // line 22
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Số lượng:")), "html", null, true);
        echo "</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t<select class=\"form-control\">
\t\t\t\t\t\t\t\t<option>1</option>
\t\t\t\t\t\t\t\t<option>2</option>
\t\t\t\t\t\t\t\t<option>3</option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t</div>\t
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"text_box\">
\t\t\t\t\t\t\t<p class=\"padding_top\">";
        // line 36
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Sắp xếp:")), "html", null, true);
        echo "</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-7\">
\t\t\t\t\t\t\t<select class=\"form-control\">
\t\t\t\t\t\t\t\t<option>";
        // line 40
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Theo giá")), "html", null, true);
        echo "</option>
\t\t\t\t\t\t\t\t<option>";
        // line 41
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Theo đánh giá")), "html", null, true);
        echo "</option>
\t\t\t\t\t\t\t\t<option>";
        // line 42
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Theo tên hãng")), "html", null, true);
        echo "</option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t</div>\t
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>";
    }

    public function getTemplateName()
    {
        return "_booking_step1_selected_classify.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 42,  82 => 41,  78 => 40,  71 => 36,  54 => 22,  43 => 14,  39 => 13,  35 => 12,  28 => 8,  19 => 1,);
    }
}
