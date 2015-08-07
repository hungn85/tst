<?php

/* _booking_step1_go_back.html */
class __TwigTemplate_985e3294d575551e2505a4aed7343d8819174b9ead5a58e5d34a74e85d7c7a32 extends Twig_Template
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
\t\t<label for=\"go_back\">
\t\t\t<input type=\"checkbox\" value=\"showdatxesanbay\" id=\"go_back\"/> Tôi muốn đặt xe chiều ngược lại
\t\t</label>
\t</div>
</div>";
    }

    public function getTemplateName()
    {
        return "_booking_step1_go_back.html";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
