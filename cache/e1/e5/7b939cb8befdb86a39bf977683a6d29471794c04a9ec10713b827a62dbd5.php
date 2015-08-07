<?php

/* _header_top.html */
class __TwigTemplate_e1e57b939cb8befdb86a39bf977683a6d29471794c04a9ec10713b827a62dbd5 extends Twig_Template
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
        echo "<div class=\"blue_bg head_\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-7\">
                    <div class=\"row\">
                        <div class=\"col-md-3 col-sm-4 col-xs-4 box_xs text-center\">
                            <img src=\"img/phone.png\" class=\"sm_icon\">04.66702266
                        </div>
                        <div class=\"col-md-3 col-sm-4 col-xs-4 box_xs text-center\">
                            <img src=\"img/cellphone.png\" class=\"sm_icon\">+84934.531.266
                        </div>\t\t\t\t\t\t
                        <div class=\"col-md-6 col-sm-4 col-xs-4 box_xs text-center\">
                            <script type='text/javascript' >
                                \$(document).ready(function(){
                                    \$('#popbox').popbox();
                                });
                            </script>
                            <div class='popbox' id=\"popbox\">
                                <a class='open' href='#'>
                                    <img class=\"sm_icon\" src='img/quanlygiaodich.png' style='position:relative;'> ";
        // line 20
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Quản lý giao dịch")), "html", null, true);
        echo "
                                </a>

                                <div class='collapse_ql'>
                                    <div class='box'>
                                        <div class='arrow'></div>
                                        <div class='arrow-border'></div>

                                        <div id=\"subForm\" class=\"popbox_style box_xs\">
                                            <p class=\"title\">";
        // line 29
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Quản lý giao dịch")), "html", null, true);
        echo "</p>
                                            <input type=\"text\" class=\"form-control\" placeholder=\"Nhập mã đặt xe\" />
                                            <div style=\"padding-top: 10px\"><input type=\"text\" class=\"form-control\" placeholder=\"Nhập số điện thoại\" /></div>
                                            <div style=\"padding-top: 10px\"><button class=\"btn btn_sm btn_orange\">";
        // line 32
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Tra cứu")), "html", null, true);
        echo "</button></div>
                                            <div class=\"blue_bg huyve\">
                                                <p><span class=\"title\">";
        // line 34
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("HỦY VÉ ĐÃ ĐẶT")), "html", null, true);
        echo "</span> ";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("miễn phí")), "html", null, true);
        echo "</p>
                                                <p>";
        // line 35
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Soạn tin")), "html", null, true);
        echo " <span class=\"hightlight\">DES ";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Mãvé")), "html", null, true);
        echo "</span> ";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Gửi")), "html", null, true);
        echo " <span class=\"hightlight\">8077</span> </p>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-5 box_xs\">
                    <div class=\"row\">
                        <div class=\"col-md-4 col-sm-4 col-xs-4\">
                            <a data-toggle=\"modal\" data-target=\"#dangki\"><img src=\"img/dangki.png\" class=\"sm_icon\"> ";
        // line 48
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Đăng kí")), "html", null, true);
        echo "</a>
                        </div>
                        <div class=\"col-md-4 col-sm-4 col-xs-4\">
                            <a data-toggle=\"modal\" data-target=\"#dangnhap\"><img src=\"img/dangnhap.png\" class=\"sm_icon\">";
        // line 51
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Đăng nhập")), "html", null, true);
        echo "</a>
                        </div>\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"col-md-3 col-sm-4 col-xs-4\">
\t\t\t\t\t\t\t<div class=\"col-md-6 col-sm-6 col-xs-6\">
\t\t\t\t\t\t\t\t<a href=\"http://\"><span class=\"vi\"></span></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-6 col-sm-6 col-xs-6\">
\t\t\t\t\t\t\t<a href=\"http://\"><span class=\"en\"></span></a>
\t\t\t\t\t\t\t</div>
                        </div>\t
                    </div>
                </div>
            </div>
        </div>
    </div>";
    }

    public function getTemplateName()
    {
        return "_header_top.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 51,  89 => 48,  69 => 35,  63 => 34,  58 => 32,  52 => 29,  40 => 20,  19 => 1,);
    }
}
