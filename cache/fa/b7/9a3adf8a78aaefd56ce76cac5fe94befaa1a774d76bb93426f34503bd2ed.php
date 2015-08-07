<?php

/* index.html */
class __TwigTemplate_fab79a3adf8a78aaefd56ce76cac5fe94befaa1a774d76bb93426f34503bd2ed extends Twig_Template
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
        echo "    <link href=\"/css/home.css\" rel=\"stylesheet\">
\t<div class=\"banner\">
\t\t<header id=\"myCarousel\" class=\"carousel slide\">
\t\t\t";
        // line 7
        $this->env->loadTemplate("_index_body_slide.html")->display($context);
        // line 8
        echo "\t\t\t 
\t\t\t";
        // line 9
        $this->env->loadTemplate("_index_body_booking_form.html")->display(array_merge($context, array("class" => "datxe")));
        // line 10
        echo "\t\t</header>\t\t
\t\t\t<div class=\"slogan\">
\t\t\t\t<h1>Taxi giá rẻ như xe khách</h1>
\t\t\t</div>
\t</div>
\t
\t";
        // line 16
        $this->env->loadTemplate("_index_body_slogen.html")->display($context);
        // line 17
        echo "
\t";
        // line 18
        $this->env->loadTemplate("_index_body_popular_place.html")->display($context);
        // line 19
        echo "
\t";
        // line 20
        $this->env->loadTemplate("_index_body_stat.html")->display($context);
        // line 21
        echo "

";
    }

    // line 24
    public function block_test($context, array $blocks = array())
    {
        echo "Trang chủ";
    }

    public function getTemplateName()
    {
        return "index.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 24,  72 => 21,  70 => 20,  67 => 19,  65 => 18,  62 => 17,  60 => 16,  52 => 10,  50 => 9,  47 => 8,  45 => 7,  40 => 4,  37 => 3,  11 => 1,);
    }
}
