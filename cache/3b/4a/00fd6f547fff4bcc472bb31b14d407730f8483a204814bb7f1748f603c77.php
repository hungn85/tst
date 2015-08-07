<?php

/* booking_step3.html */
class __TwigTemplate_3b4a00fd6f547fff4bcc472bb31b14d407730f8483a204814bb7f1748f603c77 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("layout.html");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'login_remind' => array($this, 'block_login_remind'),
            'booking_step' => array($this, 'block_booking_step'),
            'body' => array($this, 'block_body'),
            'test' => array($this, 'block_test'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_login_remind($context, array $blocks = array())
    {
        $this->env->loadTemplate("_booking_login_remind.html")->display($context);
    }

    // line 3
    public function block_booking_step($context, array $blocks = array())
    {
        $this->env->loadTemplate("_booking_step.html")->display($context);
    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "<div class=\"white_bg box_sm\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <h3 style=\"text-align: center\">Quý khách vui lòng kiểm tra thông tin phía dưới</h3>
            </div>
            ";
        // line 11
        $this->env->loadTemplate("_booking_step3_customer_info.html")->display($context);
        // line 12
        echo "            ";
        $this->env->loadTemplate("_booking_step3_ticket_info.html")->display($context);
        // line 13
        echo "            ";
        $this->env->loadTemplate("_booking_step3_driver_info.html")->display($context);
        // line 14
        echo "\t\t\t<div class=\"col-md-12\">
                <div class=\"check_datxe\">
                    <h4>";
        // line 16
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Đánh giá")), "html", null, true);
        echo "</h4>
                    <p>";
        // line 17
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Sau khi chuyến đi kết thúc, Quí khách vui lòng phản hồi về chất lượng phục vụ của chúng tôi nâng cao chất lượng dịch vụ cho những chuyến đi tiếp theo bằng một trong các cách sau")), "html", null, true);
        echo ":</p>
                    <p><strong>";
        // line 18
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("1) Phản hồi qua Web")), "html", null, true);
        echo "</strong></p>
                    <p>";
        // line 19
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Quí khách Vào phần Tra cứu vé, chọn nút Phản hồi")), "html", null, true);
        echo " </p>
                    <br/>
                    <p><strong>";
        // line 21
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("2) Phản hồi qua SMS")), "html", null, true);
        echo " </strong></p>
                    <p>";
        // line 22
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Quí khách soạn tin")), "html", null, true);
        echo ": RAT 23091 <sao> ";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Gửi")), "html", null, true);
        echo " 8077</p>
                    <p><sao> ";
        // line 23
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("có giá trị từ 1 đến 5")), "html", null, true);
        echo "</p>
                    <p>";
        // line 24
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("5 là đánh giá tốt nhất")), "html", null, true);
        echo "</p>
                    <p>";
        // line 25
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("1 là đánh giá kém nhất")), "html", null, true);
        echo "</p>
                </div>
            </div>
            <div class=\"col-md-12 box_md\">
                <h3 style=\"text-align: center\">Cảm ơn quý khách đã sử dụng dịch vụ của dichung.vn</h3>\t\t\t\t
\t\t\t\t<div class=\"col-md-offset-3 col-md-3 padding_top\">
\t\t\t\t\t<a class=\"btn btn_blue\">Đặt xe chiều về</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-3 padding_top\">
\t\t\t\t\t<a class=\"btn btn_orange\">Đặt xe tại sân bay đến</a>
\t\t\t\t</div>
            </div>
        </div>
    </div>
</div>
";
    }

    // line 41
    public function block_test($context, array $blocks = array())
    {
        echo "Đặt xe";
    }

    public function getTemplateName()
    {
        return "booking_step3.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 41,  109 => 25,  105 => 24,  101 => 23,  95 => 22,  91 => 21,  86 => 19,  82 => 18,  78 => 17,  74 => 16,  70 => 14,  67 => 13,  64 => 12,  62 => 11,  54 => 5,  51 => 4,  45 => 3,  39 => 2,  11 => 1,);
    }
}
