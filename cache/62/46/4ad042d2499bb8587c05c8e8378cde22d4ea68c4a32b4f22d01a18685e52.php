<?php

/* _booking_step3_ticket_info.html */
class __TwigTemplate_62464ad042d2499bb8587c05c8e8378cde22d4ea68c4a32b4f22d01a18685e52 extends Twig_Template
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
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Thông tin vé")), "html", null, true);
        echo "</h4>
                    <p style=\"font-size: 18px\">";
        // line 4
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Mã vé")), "html", null, true);
        echo ": 12345</p>
                    <p class=\"hightlight\">Hà Nội - Trong thành phố</p>
                    <p>";
        // line 6
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Giờ đi")), "html", null, true);
        echo ":</p>
                    <p>";
        // line 7
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Ngày đi")), "html", null, true);
        echo ":</p>
                    <p>";
        // line 8
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Phương tiện")), "html", null, true);
        echo ":</p>
                    <p>";
        // line 9
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Hình thức")), "html", null, true);
        echo ":</p>
                    <p>";
        // line 10
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Trả khách")), "html", null, true);
        echo ":</p>
                    <p>";
        // line 11
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Số lượng")), "html", null, true);
        echo ":</p>
                    <p>";
        // line 12
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Hình thức thanh toán")), "html", null, true);
        echo ":</p>
                    <hr/>
                    <h3 style=\"float: right\">200.000 VNĐ</h3>
                    <div style=\"clear: both\"></div>
                </div>
            </div>";
    }

    public function getTemplateName()
    {
        return "_booking_step3_ticket_info.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 12,  52 => 11,  48 => 10,  44 => 9,  40 => 8,  36 => 7,  32 => 6,  27 => 4,  23 => 3,  19 => 1,);
    }
}
