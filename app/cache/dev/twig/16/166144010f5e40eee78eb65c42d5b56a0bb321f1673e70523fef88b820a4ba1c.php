<?php

/* IncentivesSolicitudesBundle:Cotizaciones:editar.html.twig */
class __TwigTemplate_54c5781035dabd9c97d8e6f95b0b3bda3cda8bc22727b1a69a011cc2aea8b085 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "IncentivesSolicitudesBundle:Cotizaciones:editar.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'cuerpo' => array($this, 'block_cuerpo'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3104fbafa908eb8a197f8ce61de52301f25c11150339f7d66c2218f8e6d2a0b0 = $this->env->getExtension("native_profiler");
        $__internal_3104fbafa908eb8a197f8ce61de52301f25c11150339f7d66c2218f8e6d2a0b0->enter($__internal_3104fbafa908eb8a197f8ce61de52301f25c11150339f7d66c2218f8e6d2a0b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IncentivesSolicitudesBundle:Cotizaciones:editar.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3104fbafa908eb8a197f8ce61de52301f25c11150339f7d66c2218f8e6d2a0b0->leave($__internal_3104fbafa908eb8a197f8ce61de52301f25c11150339f7d66c2218f8e6d2a0b0_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_370e441301ee0f537235f160f64634adeb1c4bf4c996841df710baceb176797c = $this->env->getExtension("native_profiler");
        $__internal_370e441301ee0f537235f160f64634adeb1c4bf4c996841df710baceb176797c->enter($__internal_370e441301ee0f537235f160f64634adeb1c4bf4c996841df710baceb176797c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Editar Cotización";
        
        $__internal_370e441301ee0f537235f160f64634adeb1c4bf4c996841df710baceb176797c->leave($__internal_370e441301ee0f537235f160f64634adeb1c4bf4c996841df710baceb176797c_prof);

    }

    // line 5
    public function block_cuerpo($context, array $blocks = array())
    {
        $__internal_1b9ad4209f14343529670194e7764234c54b8ad3af96a102e4cd19e04a1f5729 = $this->env->getExtension("native_profiler");
        $__internal_1b9ad4209f14343529670194e7764234c54b8ad3af96a102e4cd19e04a1f5729->enter($__internal_1b9ad4209f14343529670194e7764234c54b8ad3af96a102e4cd19e04a1f5729_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cuerpo"));

        // line 6
        echo "<div class=\"row-fluid sortable ui-sortable\">
<div class=\"box span12\">
<div class=\"box-header well\" data-original-title>
                        <h2><i class=\"icon-edit\"></i>Editar Cotización</h2>
                        <div class=\"box-icon\">
                            <a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("cotizaciones");
        echo "\" class=\"btn btn-round\"><i class=\"icon-arrow-left\"></i></a>
                        </div>
                    </div>
<div class=\"box-content\">
<form action=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("cotizaciones_editar");
        echo "/";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\" method=\"POST\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " class=\"form-horizontal\" novalidate>
    ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
    <fieldset>
        <div class=\"control-group\">
            ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fechaCreacion", array()), 'label', array("label_attr" => array("class" => "control-label")) + (twig_test_empty($_label_ = ((array_key_exists("label", $context)) ? (_twig_default_filter((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), null)) : (null))) ? array() : array("label" => $_label_)));
        echo "
            <div class=\"controls\">
                ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fechaCreacion", array()), 'widget', array("id" => "fechaCreacion"));
        echo "
            </div>
        </div>
        <div class=\"control-group\">
            ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fechaVencimiento", array()), 'label', array("label_attr" => array("class" => "control-label")) + (twig_test_empty($_label_ = ((array_key_exists("label", $context)) ? (_twig_default_filter((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), null)) : (null))) ? array() : array("label" => $_label_)));
        echo "
            <div class=\"controls\">
                ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fechaVencimiento", array()), 'widget', array("id" => "fechaVencimiento"));
        echo "
            </div>
        </div>
        <div class=\"control-group\">
            ";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "logistica", array()), 'label', array("label_attr" => array("class" => "control-label")) + (twig_test_empty($_label_ = ((array_key_exists("label", $context)) ? (_twig_default_filter((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), null)) : (null))) ? array() : array("label" => $_label_)));
        echo "
            <div class=\"controls\">
                ";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "logistica", array()), 'widget', array("id" => "fechaCreacion"));
        echo "
            </div>
        </div>
        <div class=\"control-group\">
            ";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "condiciones", array()), 'label', array("label_attr" => array("class" => "control-label")) + (twig_test_empty($_label_ = ((array_key_exists("label", $context)) ? (_twig_default_filter((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), null)) : (null))) ? array() : array("label" => $_label_)));
        echo "
            <div class=\"controls\">
                ";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "condiciones", array()), 'widget', array("attr" => array("class" => "input-xlarge focused")));
        echo "
            </div>
        </div>
        <div class=\"control-group\">
             ";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "estado", array()), 'label', array("label_attr" => array("class" => "control-label")) + (twig_test_empty($_label_ = ((array_key_exists("label", $context)) ? (_twig_default_filter((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), null)) : (null))) ? array() : array("label" => $_label_)));
        echo "
            <div class=\"controls\">
                ";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "estado", array()), 'widget', array("attr" => array("class" => "input-xlarge focused")));
        echo "
            </div>
        </div>
        <div class=\"control-group\">
            ";
        // line 49
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "observaciones", array()), 'label', array("label_attr" => array("class" => "control-label")) + (twig_test_empty($_label_ = ((array_key_exists("label", $context)) ? (_twig_default_filter((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), null)) : (null))) ? array() : array("label" => $_label_)));
        echo "
            <div class=\"controls\">
                ";
        // line 51
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "observaciones", array()), 'widget', array("attr" => array("class" => "input-xlarge focused")));
        echo "
            </div>
        </div>

    </fieldset>
<div class=\"form-actions\">
    ";
        // line 57
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Enviar", array()), 'widget', array("attr" => array("class" => "btn btn-primary")));
        echo "
</div>
";
        // line 59
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "_token", array()), 'widget');
        echo "
</form>
</div>
</div>
 </div>
";
        
        $__internal_1b9ad4209f14343529670194e7764234c54b8ad3af96a102e4cd19e04a1f5729->leave($__internal_1b9ad4209f14343529670194e7764234c54b8ad3af96a102e4cd19e04a1f5729_prof);

    }

    // line 67
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_4d6c4bbe5ee877ac7a723130ce42150d67249d28bf87f8522b7da2b236bd4b2c = $this->env->getExtension("native_profiler");
        $__internal_4d6c4bbe5ee877ac7a723130ce42150d67249d28bf87f8522b7da2b236bd4b2c->enter($__internal_4d6c4bbe5ee877ac7a723130ce42150d67249d28bf87f8522b7da2b236bd4b2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 68
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

    <script>
        \$( \"#fechaCreacion\" ).datepicker({ dateFormat: 'yy-mm-dd' });
        \$( \"#fechaVencimiento\" ).datepicker({ dateFormat: 'yy-mm-dd' });
    </script>

";
        
        $__internal_4d6c4bbe5ee877ac7a723130ce42150d67249d28bf87f8522b7da2b236bd4b2c->leave($__internal_4d6c4bbe5ee877ac7a723130ce42150d67249d28bf87f8522b7da2b236bd4b2c_prof);

    }

    public function getTemplateName()
    {
        return "IncentivesSolicitudesBundle:Cotizaciones:editar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  180 => 68,  174 => 67,  161 => 59,  156 => 57,  147 => 51,  142 => 49,  135 => 45,  130 => 43,  123 => 39,  118 => 37,  111 => 33,  106 => 31,  99 => 27,  94 => 25,  87 => 21,  82 => 19,  76 => 16,  68 => 15,  61 => 11,  54 => 6,  48 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends "::base.html.twig" %}*/
/* */
/* {% block title %}Editar Cotización{% endblock %}*/
/* */
/* {% block cuerpo %}*/
/* <div class="row-fluid sortable ui-sortable">*/
/* <div class="box span12">*/
/* <div class="box-header well" data-original-title>*/
/*                         <h2><i class="icon-edit"></i>Editar Cotización</h2>*/
/*                         <div class="box-icon">*/
/*                             <a href="{{ path('cotizaciones') }}" class="btn btn-round"><i class="icon-arrow-left"></i></a>*/
/*                         </div>*/
/*                     </div>*/
/* <div class="box-content">*/
/* <form action="{{ path('cotizaciones_editar') }}/{{ id }}" method="POST" {{ form_enctype(form) }} class="form-horizontal" novalidate>*/
/*     {{ form_errors(form) }}*/
/*     <fieldset>*/
/*         <div class="control-group">*/
/*             {{ form_label(form.fechaCreacion, label|default(null), { 'label_attr': { 'class': 'control-label' } }) }}*/
/*             <div class="controls">*/
/*                 {{ form_widget(form.fechaCreacion, { 'id': 'fechaCreacion' }) }}*/
/*             </div>*/
/*         </div>*/
/*         <div class="control-group">*/
/*             {{ form_label(form.fechaVencimiento, label|default(null), { 'label_attr': { 'class': 'control-label' } }) }}*/
/*             <div class="controls">*/
/*                 {{ form_widget(form.fechaVencimiento, { 'id': 'fechaVencimiento' }) }}*/
/*             </div>*/
/*         </div>*/
/*         <div class="control-group">*/
/*             {{ form_label(form.logistica, label|default(null), { 'label_attr': { 'class': 'control-label' } }) }}*/
/*             <div class="controls">*/
/*                 {{ form_widget(form.logistica, { 'id': 'fechaCreacion' }) }}*/
/*             </div>*/
/*         </div>*/
/*         <div class="control-group">*/
/*             {{ form_label(form.condiciones, label|default(null), { 'label_attr': { 'class': 'control-label' } }) }}*/
/*             <div class="controls">*/
/*                 {{ form_widget(form.condiciones, { 'attr': {'class': 'input-xlarge focused'} }) }}*/
/*             </div>*/
/*         </div>*/
/*         <div class="control-group">*/
/*              {{ form_label(form.estado, label|default(null), { 'label_attr': { 'class': 'control-label' } }) }}*/
/*             <div class="controls">*/
/*                 {{ form_widget(form.estado, { 'attr': {'class': 'input-xlarge focused'} }) }}*/
/*             </div>*/
/*         </div>*/
/*         <div class="control-group">*/
/*             {{ form_label(form.observaciones, label|default(null), { 'label_attr': { 'class': 'control-label' } }) }}*/
/*             <div class="controls">*/
/*                 {{ form_widget(form.observaciones, { 'attr': {'class': 'input-xlarge focused'} }) }}*/
/*             </div>*/
/*         </div>*/
/* */
/*     </fieldset>*/
/* <div class="form-actions">*/
/*     {{ form_widget(form.Enviar, { 'attr': {'class': 'btn btn-primary'} }) }}*/
/* </div>*/
/* {{ form_widget(form._token) }}*/
/* </form>*/
/* </div>*/
/* </div>*/
/*  </div>*/
/* {% endblock %}*/
/* */
/* */
/* {% block javascripts %}*/
/*     {{ parent() }}*/
/* */
/*     <script>*/
/*         $( "#fechaCreacion" ).datepicker({ dateFormat: 'yy-mm-dd' });*/
/*         $( "#fechaVencimiento" ).datepicker({ dateFormat: 'yy-mm-dd' });*/
/*     </script>*/
/* */
/* {% endblock %}*/
/* */
