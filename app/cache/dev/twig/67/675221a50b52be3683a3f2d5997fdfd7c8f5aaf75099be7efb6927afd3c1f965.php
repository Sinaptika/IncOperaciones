<?php

/* IncentivesCatalogoBundle:Maestro:editarcatalogo.html.twig */
class __TwigTemplate_46b0f43ab21b4c2d9aabb3d4e691e4fdd3d1a5a1663433f3aca86f0249608f87 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "IncentivesCatalogoBundle:Maestro:editarcatalogo.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'cuerpo' => array($this, 'block_cuerpo'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_993f0a82acc414f862ea14e5eed68a87ebf006ec9f24ea6838e01a9edddfef0f = $this->env->getExtension("native_profiler");
        $__internal_993f0a82acc414f862ea14e5eed68a87ebf006ec9f24ea6838e01a9edddfef0f->enter($__internal_993f0a82acc414f862ea14e5eed68a87ebf006ec9f24ea6838e01a9edddfef0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IncentivesCatalogoBundle:Maestro:editarcatalogo.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_993f0a82acc414f862ea14e5eed68a87ebf006ec9f24ea6838e01a9edddfef0f->leave($__internal_993f0a82acc414f862ea14e5eed68a87ebf006ec9f24ea6838e01a9edddfef0f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_78b93883c953e634317ab2403f3511047af06da3a153bcb4fd43d13d6260b2f3 = $this->env->getExtension("native_profiler");
        $__internal_78b93883c953e634317ab2403f3511047af06da3a153bcb4fd43d13d6260b2f3->enter($__internal_78b93883c953e634317ab2403f3511047af06da3a153bcb4fd43d13d6260b2f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Editar Premio";
        
        $__internal_78b93883c953e634317ab2403f3511047af06da3a153bcb4fd43d13d6260b2f3->leave($__internal_78b93883c953e634317ab2403f3511047af06da3a153bcb4fd43d13d6260b2f3_prof);

    }

    // line 5
    public function block_cuerpo($context, array $blocks = array())
    {
        $__internal_b708d4d82560a17d1f270e2a3567e29ecd047457193864dfb6f56c27ea157986 = $this->env->getExtension("native_profiler");
        $__internal_b708d4d82560a17d1f270e2a3567e29ecd047457193864dfb6f56c27ea157986->enter($__internal_b708d4d82560a17d1f270e2a3567e29ecd047457193864dfb6f56c27ea157986_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cuerpo"));

        // line 6
        echo "<div class=\"row-fluid sortable ui-sortable\">
    <div class=\"box span12\">
        <div class=\"box-header well\" data-original-title>
            <h2><i class=\"icon-edit\"></i>Nuevo Premio</h2>
            <div class=\"box-icon\">
                <a href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("producto_datos", array("id" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")))), "html", null, true);
        echo "\" class=\"btn btn-round\"><i class=\"icon-arrow-left\"></i></a>
            </div>
        </div>
        <div class=\"box-content\">
            <form action=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("productocatalogo_editarcatalogo", array("productocatalogo" => (isset($context["productocatalogo"]) ? $context["productocatalogo"] : $this->getContext($context, "productocatalogo")))), "html", null, true);
        echo "\" method=\"POST\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " class=\"form-horizontal\">
                ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
                <fieldset>
                    <div class=\"control-group\">
                        ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "catalogos", array()), 'label', array("label_attr" => array("class" => "control-label")) + (twig_test_empty($_label_ = ((array_key_exists("label", $context)) ? (_twig_default_filter((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), null)) : (null))) ? array() : array("label" => $_label_)));
        echo "
                        <div class=\"controls\">
                            ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "catalogos", array()), 'widget', array("attr" => array("class" => "input-xlarge focused")));
        echo "
                        </div>
                    </div>
                    <div class=\"control-group\">
                        ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "categoria", array()), 'label', array("label_attr" => array("class" => "control-label")) + (twig_test_empty($_label_ = ((array_key_exists("label", $context)) ? (_twig_default_filter((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), null)) : (null))) ? array() : array("label" => $_label_)));
        echo "
                        <div class=\"controls\">
                            ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "categoria", array()), 'widget', array("attr" => array("class" => "input-xlarge focused")));
        echo "
                        </div>
                    </div>
                     <div class=\"control-group\">
                        ";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "puntosTemporal", array()), 'label', array("label_attr" => array("class" => "control-label")) + (twig_test_empty($_label_ = ((array_key_exists("label", $context)) ? (_twig_default_filter((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), null)) : (null))) ? array() : array("label" => $_label_)));
        echo "
                        <div class=\"controls\">
                            ";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "puntosTemporal", array()), 'widget', array("attr" => array("class" => "input-xlarge focused")));
        echo "
                        </div>
                    </div>
                    <div class=\"control-group\">
                        ";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "precioTemporal", array()), 'label', array("label_attr" => array("class" => "control-label")) + (twig_test_empty($_label_ = ((array_key_exists("label", $context)) ? (_twig_default_filter((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), null)) : (null))) ? array() : array("label" => $_label_)));
        echo "
                        <div class=\"controls\">
                            ";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "precioTemporal", array()), 'widget', array("attr" => array("class" => "input-xlarge focused")));
        echo "
                        </div>
                    </div>
                     <div class=\"control-group\">
                        ";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "incrementoTemporal", array()), 'label', array("label_attr" => array("class" => "control-label")) + (twig_test_empty($_label_ = ((array_key_exists("label", $context)) ? (_twig_default_filter((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), null)) : (null))) ? array() : array("label" => $_label_)));
        echo "
                        <div class=\"controls\">
                            ";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "incrementoTemporal", array()), 'widget', array("attr" => array("class" => "input-xlarge focused")));
        echo "
                        </div>
                    </div>
                     <div class=\"control-group\">
                        ";
        // line 49
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "logisticaTemporal", array()), 'label', array("label_attr" => array("class" => "control-label")) + (twig_test_empty($_label_ = ((array_key_exists("label", $context)) ? (_twig_default_filter((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), null)) : (null))) ? array() : array("label" => $_label_)));
        echo "
                        <div class=\"controls\">
                            ";
        // line 51
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "logisticaTemporal", array()), 'widget', array("attr" => array("class" => "input-xlarge focused")));
        echo "
                        </div>
                    </div>
                </fieldset>

                <div class=\"row-fluid sortable ui-sortable\">

                </div>  
                <div class=\"form-actions\">
                \t<input class=\"btn btn-primary\" type=\"submit\" name=\"Enviar\" value=\"Enviar\">
                </div>
            ";
        // line 62
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "_token", array()), 'widget');
        echo "
            </form>
        </div>
    </div>
</div>
";
        
        $__internal_b708d4d82560a17d1f270e2a3567e29ecd047457193864dfb6f56c27ea157986->leave($__internal_b708d4d82560a17d1f270e2a3567e29ecd047457193864dfb6f56c27ea157986_prof);

    }

    public function getTemplateName()
    {
        return "IncentivesCatalogoBundle:Maestro:editarcatalogo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  158 => 62,  144 => 51,  139 => 49,  132 => 45,  127 => 43,  120 => 39,  115 => 37,  108 => 33,  103 => 31,  96 => 27,  91 => 25,  84 => 21,  79 => 19,  73 => 16,  67 => 15,  60 => 11,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends "::base.html.twig" %}*/
/* */
/* {% block title %}Editar Premio{% endblock %}*/
/* */
/* {% block cuerpo %}*/
/* <div class="row-fluid sortable ui-sortable">*/
/*     <div class="box span12">*/
/*         <div class="box-header well" data-original-title>*/
/*             <h2><i class="icon-edit"></i>Nuevo Premio</h2>*/
/*             <div class="box-icon">*/
/*                 <a href="{{ path('producto_datos', {'id': id}) }}" class="btn btn-round"><i class="icon-arrow-left"></i></a>*/
/*             </div>*/
/*         </div>*/
/*         <div class="box-content">*/
/*             <form action="{{ path('productocatalogo_editarcatalogo',  {"productocatalogo": productocatalogo}) }}" method="POST" {{ form_enctype(form) }} class="form-horizontal">*/
/*                 {{ form_errors(form) }}*/
/*                 <fieldset>*/
/*                     <div class="control-group">*/
/*                         {{ form_label(form.catalogos, label|default(null), { 'label_attr': { 'class': 'control-label' } }) }}*/
/*                         <div class="controls">*/
/*                             {{ form_widget(form.catalogos, { 'attr': {'class': 'input-xlarge focused'} }) }}*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="control-group">*/
/*                         {{ form_label(form.categoria, label|default(null), { 'label_attr': { 'class': 'control-label' } }) }}*/
/*                         <div class="controls">*/
/*                             {{ form_widget(form.categoria, { 'attr': {'class': 'input-xlarge focused'} }) }}*/
/*                         </div>*/
/*                     </div>*/
/*                      <div class="control-group">*/
/*                         {{ form_label(form.puntosTemporal, label|default(null), { 'label_attr': { 'class': 'control-label' } }) }}*/
/*                         <div class="controls">*/
/*                             {{ form_widget(form.puntosTemporal, { 'attr': {'class': 'input-xlarge focused'} }) }}*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="control-group">*/
/*                         {{ form_label(form.precioTemporal, label|default(null), { 'label_attr': { 'class': 'control-label' } }) }}*/
/*                         <div class="controls">*/
/*                             {{ form_widget(form.precioTemporal, { 'attr': {'class': 'input-xlarge focused'} }) }}*/
/*                         </div>*/
/*                     </div>*/
/*                      <div class="control-group">*/
/*                         {{ form_label(form.incrementoTemporal, label|default(null), { 'label_attr': { 'class': 'control-label' } }) }}*/
/*                         <div class="controls">*/
/*                             {{ form_widget(form.incrementoTemporal, { 'attr': {'class': 'input-xlarge focused'} }) }}*/
/*                         </div>*/
/*                     </div>*/
/*                      <div class="control-group">*/
/*                         {{ form_label(form.logisticaTemporal, label|default(null), { 'label_attr': { 'class': 'control-label' } }) }}*/
/*                         <div class="controls">*/
/*                             {{ form_widget(form.logisticaTemporal, { 'attr': {'class': 'input-xlarge focused'} }) }}*/
/*                         </div>*/
/*                     </div>*/
/*                 </fieldset>*/
/* */
/*                 <div class="row-fluid sortable ui-sortable">*/
/* */
/*                 </div>  */
/*                 <div class="form-actions">*/
/*                 	<input class="btn btn-primary" type="submit" name="Enviar" value="Enviar">*/
/*                 </div>*/
/*             {{ form_widget(form._token) }}*/
/*             </form>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* {% endblock %}*/
/* */
