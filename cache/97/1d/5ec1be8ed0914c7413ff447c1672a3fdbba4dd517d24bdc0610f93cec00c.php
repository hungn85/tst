<?php

/* _booking_step1_name_banner.html */
class __TwigTemplate_971d5ec1be8ed0914c7413ff447c1672a3fdbba4dd517d24bdc0610f93cec00c extends Twig_Template
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
            <div class=\"col-md-4\">
                <label for=\"name_banner\">
\t\t\t\t\t<input type=\"checkbox\" id=\"name_banner\"/> ";
        // line 4
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Tôi muốn đón bằng biển tên")), "html", null, true);
        echo "
\t\t\t\t</label>
            </div>
        </div>";
    }

    public function getTemplateName()
    {
        return "_booking_step1_name_banner.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 4,  19 => 1,);
    }
}
