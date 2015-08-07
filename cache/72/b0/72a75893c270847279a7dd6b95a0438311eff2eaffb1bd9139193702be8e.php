<?php

/* _booking_step3_driver_info.html */
class __TwigTemplate_72b072a75893c270847279a7dd6b95a0438311eff2eaffb1bd9139193702be8e extends Twig_Template
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
        echo "<div class=\"col-md-6\">
                <div class=\"check_datxe\">
                    <h4>";
        // line 3
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Thông tin tài xế")), "html", null, true);
        echo "</h4>
                    <p>";
        // line 4
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Tuyến")), "html", null, true);
        echo ":</p>
                    <p>";
        // line 5
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Tình trạng")), "html", null, true);
        echo ":</p>
                    <p>";
        // line 6
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Tên lái xe")), "html", null, true);
        echo ":</p>
                    <p>";
        // line 7
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Điện thoại")), "html", null, true);
        echo ":</p>
                    <p>";
        // line 8
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Biển xe")), "html", null, true);
        echo ":</p>
                    <hr/>
                </div>\t\t\t\t
                <div class=\"box_sm\">
                    <p>";
        // line 12
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Trong trường hợp muốn hủy vé")), "html", null, true);
        echo ":</p>
                    <p>";
        // line 13
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Soạn tin")), "html", null, true);
        echo ":</p>
                    <p><span class=\"hightlight\"> DES ";
        // line 14
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Mãvé")), "html", null, true);
        echo "</span> ";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Gửi")), "html", null, true);
        echo " <span class=\"hightlight\">8077</span> (";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Miễn phí")), "html", null, true);
        echo ")</p>
                    <p>(";
        // line 15
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Chỉ có thể hủy vé trước khi đi 12 tiếng")), "html", null, true);
        echo ")</p>
                </div>
            </div>";
    }

    public function getTemplateName()
    {
        return "_booking_step3_driver_info.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 15,  58 => 14,  54 => 13,  50 => 12,  43 => 8,  39 => 7,  35 => 6,  31 => 5,  27 => 4,  23 => 3,  19 => 1,);
    }
}
