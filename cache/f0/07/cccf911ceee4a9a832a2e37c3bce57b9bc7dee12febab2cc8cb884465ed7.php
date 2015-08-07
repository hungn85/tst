<?php

/* _index_body_facebook.html */
class __TwigTemplate_f007cccf911ceee4a9a832a2e37c3bce57b9bc7dee12febab2cc8cb884465ed7 extends Twig_Template
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
        echo "<!-- _index_body_facebook.html -->
<div class=\"white_bg box_xs\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t<h4>";
        // line 6
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Khách hàng của chúng tôi")), "html", null, true);
        echo "</h4>
\t\t\t\t\t<img src=\"/img/fb_page.png\"/>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>";
    }

    public function getTemplateName()
    {
        return "_index_body_facebook.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 6,  19 => 1,);
    }
}
