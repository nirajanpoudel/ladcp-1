<?php

/* themes/lacity/partials/header.html.twig */
class __TwigTemplate_aff5005872469889a01095b7d17187ad1d06dee4c9d31db8b3ef7787b1609598 extends Twig_Template
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
        $tags = array("include" => 34);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('include'),
                array(),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setTemplateFile($this->getTemplateName());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 1
        echo "<div class=\"row\"></div>
\t<div style=\"background-color: #22415c; padding-top:5px;\" class=\"row\">
\t\t<div class=\"col-md-6\">
\t\t<img src=\"";
        // line 4
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["theme_base_path"]) ? $context["theme_base_path"] : null), "html", null, true));
        echo "/images/department_logo.png\">
\t\t</div>
\t\t<div class=\"col-md-6\">
\t\t<ul class=\"navbar-right searchBoxUL\">
\t\t\t<div class=\"navbar-form navbar-left\" role=\"search\" onclick=\"toggleCaseSearch();\" style=\"cursor:pointer;margin-top:29px;\">
\t\t\t\t<div style=\"\" class=\"divCaseSearch\">
\t\t\t\t\t<span id=\"spanCaseSearch\" style=\"\">Case Search</span>
\t\t\t\t\t<input id=\"txtCaseSearch\" class=\"caseSearchTextBox\" type=\"text\" style=\"display:none;\" placeholder=\"Enter Case Number\">
\t\t\t\t\t<img src=\"";
        // line 12
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["theme_base_path"]) ? $context["theme_base_path"] : null), "html", null, true));
        echo "/images/search_icon.png\" style=\"height:20px;margin-top:-4px; margin-left:20px;\" alt=\"Search Icon\">
\t\t\t\t</div>
\t\t\t</div>
\t\t</ul>
\t\t</div>
\t</div>
\t<div style=\"background-color: #22415c;\" class=\"row\">
\t\t<div class=\"col-md-12\">
\t\t\t<nav class=\"navbar navbar-inverse navbar-static\">
\t\t\t\t<div class=\"navbar-header\">
\t\t\t\t\t<button class=\"navbar-toggle\" type=\"button\" data-toggle=\"collapse\" data-target=\".js-navbar-collapse\">
\t\t\t\t\t\t<span class=\"sr-only\">Toggle navigation</span>
\t\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t\t</button>
\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t</div>

\t\t\t\t<div class=\"collapse navbar-collapse js-navbar-collapse\" style='font-family: 'Alegreya Sans', sans-serif;'>
\t\t\t\t\t";
        // line 34
        $this->loadTemplate(((isset($context["directory"]) ? $context["directory"] : null) . "/partials/menu.html.twig"), "themes/lacity/partials/header.html.twig", 34)->display($context);
        // line 35
        echo "\t\t\t\t</div> <!-- /.nav-collapse -->
\t\t\t</nav>

\t\t</div>
\t</div>";
    }

    public function getTemplateName()
    {
        return "themes/lacity/partials/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 35,  84 => 34,  59 => 12,  48 => 4,  43 => 1,);
    }
}
/* <div class="row"></div>*/
/* 	<div style="background-color: #22415c; padding-top:5px;" class="row">*/
/* 		<div class="col-md-6">*/
/* 		<img src="{{ theme_base_path }}/images/department_logo.png">*/
/* 		</div>*/
/* 		<div class="col-md-6">*/
/* 		<ul class="navbar-right searchBoxUL">*/
/* 			<div class="navbar-form navbar-left" role="search" onclick="toggleCaseSearch();" style="cursor:pointer;margin-top:29px;">*/
/* 				<div style="" class="divCaseSearch">*/
/* 					<span id="spanCaseSearch" style="">Case Search</span>*/
/* 					<input id="txtCaseSearch" class="caseSearchTextBox" type="text" style="display:none;" placeholder="Enter Case Number">*/
/* 					<img src="{{ theme_base_path }}/images/search_icon.png" style="height:20px;margin-top:-4px; margin-left:20px;" alt="Search Icon">*/
/* 				</div>*/
/* 			</div>*/
/* 		</ul>*/
/* 		</div>*/
/* 	</div>*/
/* 	<div style="background-color: #22415c;" class="row">*/
/* 		<div class="col-md-12">*/
/* 			<nav class="navbar navbar-inverse navbar-static">*/
/* 				<div class="navbar-header">*/
/* 					<button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".js-navbar-collapse">*/
/* 						<span class="sr-only">Toggle navigation</span>*/
/* 						<span class="icon-bar"></span>*/
/* 						<span class="icon-bar"></span>*/
/* 						<span class="icon-bar"></span>*/
/* 					</button>*/
/* 					<span class="icon-bar"></span>*/
/* 					<span class="icon-bar"></span>*/
/* 					<span class="icon-bar"></span>*/
/* 				</div>*/
/* */
/* 				<div class="collapse navbar-collapse js-navbar-collapse" style='font-family: 'Alegreya Sans', sans-serif;'>*/
/* 					{% include directory ~ '/partials/menu.html.twig' %}*/
/* 				</div> <!-- /.nav-collapse -->*/
/* 			</nav>*/
/* */
/* 		</div>*/
/* 	</div>*/
