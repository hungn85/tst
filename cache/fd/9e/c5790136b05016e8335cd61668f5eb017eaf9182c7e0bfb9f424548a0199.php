<?php

/* blog.html */
class __TwigTemplate_fd9ec5790136b05016e8335cd61668f5eb017eaf9182c7e0bfb9f424548a0199 extends Twig_Template
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
\t<div class=\"box_xs\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-8\">
\t\t\t\t\t<div class=\"row box_xs\">
\t\t\t\t\t\t<div class=\"col-md-8\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t  <input type=\"text\" class=\"form-control\" placeholder=\"Tìm địa điểm\">
\t\t\t\t\t\t\t  <span class=\"input-group-btn\">
\t\t\t\t\t\t\t\t<button class=\"btn btn_orange\" type=\"button\">Tìm kiếm</button>
\t\t\t\t\t\t\t  </span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t<select class=\"form-control\">
\t\t\t\t\t\t\t\t<option>Bài mới nhất</option>
\t\t\t\t\t\t\t\t<option>Bài xem nhiều nhất</option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"blog_bg\">
\t\t\t\t\t\t<div class=\"col-md-12 box_xs\">
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t\t\t<img src=\"http://placehold.it/600x400\" width=\"100%\"/>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-md-8\">
\t\t\t\t\t\t\t\t\t<h4 class=\"text-uppercase\"><a>Tiêu đề</a></h4>
\t\t\t\t\t\t\t\t\t<p class=\"text-uppercase\"><small>Thứ 2, 22/6/2015</small></p>
\t\t\t\t\t\t\t\t\t<p>Disclaimer: considering the recent MERS outbreak, I’m not suggesting you jump on the next plane to Seoul... </p>
\t\t\t\t\t\t\t\t\t<p><a><span class=\"like_fb\"></span></a> <a><span class=\"share_fb\"></span></a><p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"clear\"></div>
\t\t\t\t\t\t<hr/>
\t\t\t\t\t\t<div class=\"col-md-12 box_xs\">
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t\t\t<img src=\"http://placehold.it/600x400\" width=\"100%\"/>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-md-8\">
\t\t\t\t\t\t\t\t\t<h4 class=\"text-uppercase\"><a>Tiêu đề</a></h4>
\t\t\t\t\t\t\t\t\t<p class=\"text-uppercase\"><small>Thứ 2, 22/6/2015</small></p>
\t\t\t\t\t\t\t\t\t<p>Disclaimer: considering the recent MERS outbreak, I’m not suggesting you jump on the next plane to Seoul... </p>
\t\t\t\t\t\t\t\t\t<p><a><span class=\"like_fb\"></span></a> <a><span class=\"share_fb\"></span></a><p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"clear\"></div>
\t\t\t\t\t\t<hr/>
\t\t\t\t\t\t<div class=\"col-md-12 box_xs\">
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t\t\t<img src=\"http://placehold.it/600x400\" width=\"100%\"/>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-md-8\">
\t\t\t\t\t\t\t\t\t<h4 class=\"text-uppercase\"><a>Tiêu đề</a></h4>
\t\t\t\t\t\t\t\t\t<p class=\"text-uppercase\"><small>Thứ 2, 22/6/2015</small></p>
\t\t\t\t\t\t\t\t\t<p>Disclaimer: considering the recent MERS outbreak, I’m not suggesting you jump on the next plane to Seoul... </p>
\t\t\t\t\t\t\t\t\t<p><a><span class=\"like_fb\"></span></a> <a><span class=\"share_fb\"></span></a><p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"clear\"></div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t";
        // line 72
        $this->env->loadTemplate("_blog_recent.html")->display($context);
        echo " 
\t\t\t</div>
\t\t</div>
\t</div>
";
    }

    // line 77
    public function block_test($context, array $blocks = array())
    {
        echo "Trang chủ";
    }

    public function getTemplateName()
    {
        return "blog.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 77,  114 => 72,  43 => 4,  40 => 3,  37 => 2,  11 => 1,);
    }
}
