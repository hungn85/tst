<?php

/* _booking_step2_verify.html */
class __TwigTemplate_3046ed2ac9aaae020ef1ede17f025134c2b6594ce4fd92f04cb1f07fe04ddf32 extends Twig_Template
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
        echo "\t\t\t\t<div class=\"row\">
                    <div class=\"col-md-12\">
\t\t\t\t\t\t<h4>";
        // line 3
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Nhập mã xác minh")), "html", null, true);
        echo "*</h4>
\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t<img src=\"http://placehold.it/164x55\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-2 padding_top\">
\t\t\t\t\t\t\t<input class=\"form-control\" name=\"verify_form[verify]\"  id=\"verify_form_verify\"/>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
                </div>";
    }

    public function getTemplateName()
    {
        return "_booking_step2_verify.html";
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
