<?php

/* about3.html */
class __TwigTemplate_cb949cf1dee0b33e87dbdb1b1d1558f41ab91e1bc4fc939de649d3d36b5a007d extends Twig_Template
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

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "\t<div style=\"height:500px\">
\t\t<img src=\"img/IMG_4321_2.jpg\" width=\"100%\"/>
\t</div>
\t<div class=\"box_md\">
\t\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-12 text-center\"> 
\t\t\t\t<h2 class=\"hightlight\">Về Đi Chung</h2>

\t\t\t\t<p>Gheptour.vn được phát triển và vận hành bởi công ty Cổ phần Đi Chung, một doanh nghiệp xã hội được thành lập với định hướng sử dụng công nghệ giúp mọi người đi lại văn minh và thân thiện hơn với môi trường. Chúng tôi phát triển các giải pháp  đặt chỗ trực tuyến trên nền tảng trực tuyến và di động cho nhiều loại phương tiện khác nhau, trong đó tập trung vào nhu cầu đi chung xe.

\t\t\t\tChúng tôi phát triển cộng đồng Dichung.vn với tầm nhìn xây dựng đi chung xe nói riêng và đi lại không tác động nói chung thành  văn hóa di chuyển mới tại Việt Nam trong vòng 3-5 năm tới.</p>
\t\t\t</div>
\t\t\t<div class=\"clear\"></div>
\t\t\t<hr/>
\t\t\t<div class=\"col-md-12 box_xs\">
\t\t\t\t<h4 class=\"hightlight text-center\">1. Qui định về xuất trình và kiểm tra vé</h4>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-4 padding_top\">
\t\t\t\t\t<p>a. Hành khách cần xuất trình mã vé đặt chỗ trước khi lên xe. Mã số đặt chỗ này được chúng tôi gửi cho Hành khách qua tin nhắn trên điện thoại di động hoặc bằng Email đã đăng ký. </p>
\t\t\t\t\t<img src=\"img/IMG_4320.jpg\" width=\"100%\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-4 padding_top\">
\t\t\t\t\t<p>a. Hành khách cần xuất trình mã vé đặt chỗ trước khi lên xe. Mã số đặt chỗ này được chúng tôi gửi cho Hành khách qua tin nhắn trên điện thoại di động hoặc bằng Email đã đăng ký. </p>
\t\t\t\t\t<img src=\"img/IMG_4320.jpg\" width=\"100%\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-4 padding_top\">
\t\t\t\t\t<p>a. Hành khách cần xuất trình mã vé đặt chỗ trước khi lên xe. Mã số đặt chỗ này được chúng tôi gửi cho Hành khách qua tin nhắn trên điện thoại di động hoặc bằng Email đã đăng ký. </p>
\t\t\t\t\t<img src=\"img/IMG_4320.jpg\" width=\"100%\">
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"clear\"></div>
\t\t\t<hr/>
\t\t\t<div class=\"col-md-12 box_xs\">
\t\t\t\t<h4 class=\"hightlight text-center\">1. Qui định về xuất trình và kiểm tra vé</h4>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-4 padding_top\">
\t\t\t\t\t<p>a. Hành khách cần xuất trình mã vé đặt chỗ trước khi lên xe. Mã số đặt chỗ này được chúng tôi gửi cho Hành khách qua tin nhắn trên điện thoại di động hoặc bằng Email đã đăng ký. </p>
\t\t\t\t\t<img src=\"img/IMG_4320.jpg\" width=\"100%\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-4 padding_top\">
\t\t\t\t\t<p>a. Hành khách cần xuất trình mã vé đặt chỗ trước khi lên xe. Mã số đặt chỗ này được chúng tôi gửi cho Hành khách qua tin nhắn trên điện thoại di động hoặc bằng Email đã đăng ký. </p>
\t\t\t\t\t<img src=\"img/IMG_4320.jpg\" width=\"100%\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-4 padding_top\">
\t\t\t\t\t<p>a. Hành khách cần xuất trình mã vé đặt chỗ trước khi lên xe. Mã số đặt chỗ này được chúng tôi gửi cho Hành khách qua tin nhắn trên điện thoại di động hoặc bằng Email đã đăng ký. </p>
\t\t\t\t\t<img src=\"img/IMG_4320.jpg\" width=\"100%\">
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"clear\"></div>
\t\t\t<div class=\"col-md-offset-5 col-md-3\">
\t\t\t\t<a class=\"btn btn_orange\">Đăng kí</a>
\t\t\t</div>
\t\t</div>
\t</div>
\t</div>
";
    }

    // line 63
    public function block_test($context, array $blocks = array())
    {
        echo "Trang chủ";
    }

    public function getTemplateName()
    {
        return "about3.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 63,  40 => 4,  37 => 3,  11 => 1,);
    }
}
