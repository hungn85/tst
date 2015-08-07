<?php

/* blog_post.html */
class __TwigTemplate_e8e02300ab44f98de2ef0d3023edb095175d9c2bc2f69ae3bb2029e472d1f1d2 extends Twig_Template
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

    // line 2
    public function block_body($context, array $blocks = array())
    {
        // line 3
        echo "<link href=\"css/blog.css\" rel=\"stylesheet\">
\t";
        // line 4
        $this->env->loadTemplate("_blog_menu.html")->display($context);
        echo " 
\t<div class=\"box_sm\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-8\">
\t\t\t\t\t<div class=\"blog_bg\">
\t\t\t\t\t\t<div class=\"col-md-12 box_xs\">
\t\t\t\t\t\t\t<h4 class=\"text-uppercase\"><a>Tiêu đề</a></h4>
\t\t\t\t\t\t\t<p class=\"text-uppercase\"><small>Thứ 2, 22/6/2015</small></p>
\t\t\t\t\t\t\t<p><a><span class=\"like_fb\"></span></a> <a><span class=\"share_fb\"></span></a><p>\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"clear\"></div>
\t\t\t\t\t\t<div class=\"tag\">
\t\t\t\t\t\t\t<p>Tags: <a>Lorem ipsum</a><a>dolor sit</a><a>amet</a><a>Lorem ipsum</a><a>dolor sit</a><a>amet</a><a>Lorem ipsum</a><a>dolor sit</a><a>amet</a><a>Lorem ipsum</a><a>dolor sit</a><a>amet</a><a>Lorem ipsum</a><a>dolor sit</a><a>amet</a><a>Lorem ipsum</a><a>dolor sit</a><a>amet</a><a>Lorem ipsum</a><a>dolor sit</a><a>amet</a></p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t";
        // line 24
        $this->env->loadTemplate("_blog_recent.html")->display($context);
        echo " 
\t\t\t</div>
\t\t</div>
\t</div>
";
    }

    // line 29
    public function block_test($context, array $blocks = array())
    {
        echo "Trang chủ";
    }

    public function getTemplateName()
    {
        return "blog_post.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 29,  66 => 24,  43 => 4,  40 => 3,  37 => 2,  11 => 1,);
    }
}
