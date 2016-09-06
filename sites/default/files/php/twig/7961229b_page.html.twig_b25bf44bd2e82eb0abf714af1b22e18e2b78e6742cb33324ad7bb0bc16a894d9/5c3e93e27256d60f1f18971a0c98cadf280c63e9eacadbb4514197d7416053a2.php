<?php

/* themes/lacity/page.html.twig */
class __TwigTemplate_d84039870a48dc271e27b427b7bdd90f9db9215403edfa4bfa90f550fe92c8e4 extends Twig_Template
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
        $tags = array("include" => 3);
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
        echo "<div class=\"container-fluid\">
\t<!-- hearder -->
\t";
        // line 3
        $this->loadTemplate(((isset($context["directory"]) ? $context["directory"] : null) . "/partials/header.html.twig"), "themes/lacity/page.html.twig", 3)->display($context);
        // line 4
        echo "\t<!-- //end hearder -->

\t<div style=\"margin-top: 1px;\" class=\"row\">
\t\t<div class=\"col-md-12\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-md-12\">";
        // line 11
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "slider", array()), "html", null, true));
        echo "</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-md-12\">";
        // line 19
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array()), "html", null, true));
        echo "</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>

\t<!-- // Footer start -->
\t";
        // line 27
        $this->loadTemplate(((isset($context["directory"]) ? $context["directory"] : null) . "/partials/footer.html.twig"), "themes/lacity/page.html.twig", 27)->display($context);
        // line 28
        echo "\t<!-- // End Footer start -->
</div>";
    }

    public function getTemplateName()
    {
        return "themes/lacity/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 28,  80 => 27,  69 => 19,  58 => 11,  49 => 4,  47 => 3,  43 => 1,);
    }
}
/* <div class="container-fluid">*/
/* 	<!-- hearder -->*/
/* 	{% include directory ~ '/partials/header.html.twig' %}*/
/* 	<!-- //end hearder -->*/
/* */
/* 	<div style="margin-top: 1px;" class="row">*/
/* 		<div class="col-md-12">*/
/* 			<div class="row">*/
/* 				<div class="col-md-12">*/
/* 					<div class="row">*/
/* 						<div class="col-md-12">{{ page.slider }}</div>*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* */
/* 			<div class="row">*/
/* 				<div class="col-md-12">*/
/* 					<div class="row">*/
/* 						<div class="col-md-12">{{ page.content }}</div>*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* */
/* 	<!-- // Footer start -->*/
/* 	{% include directory ~ '/partials/footer.html.twig'  %}*/
/* 	<!-- // End Footer start -->*/
/* </div>*/
