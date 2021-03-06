<?php

/* IncentivesFacturacionBundle:Facturas:nuevaRedenciones.html.twig */
class __TwigTemplate_07db9aee36162bd26c904db8cc1d88a7e7c2383ae07c26a6c6a4b0b963adea42 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "IncentivesFacturacionBundle:Facturas:nuevaRedenciones.html.twig", 1);
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
        $__internal_2ef31cd0b738db1ef01762a8017780d18e13965650e4372266e683491f207734 = $this->env->getExtension("native_profiler");
        $__internal_2ef31cd0b738db1ef01762a8017780d18e13965650e4372266e683491f207734->enter($__internal_2ef31cd0b738db1ef01762a8017780d18e13965650e4372266e683491f207734_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IncentivesFacturacionBundle:Facturas:nuevaRedenciones.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2ef31cd0b738db1ef01762a8017780d18e13965650e4372266e683491f207734->leave($__internal_2ef31cd0b738db1ef01762a8017780d18e13965650e4372266e683491f207734_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_1da4ec3d7fc86d5a7ca3ddbf24c3389b7ca690f91ded649ec05d7cbe3a7d016f = $this->env->getExtension("native_profiler");
        $__internal_1da4ec3d7fc86d5a7ca3ddbf24c3389b7ca690f91ded649ec05d7cbe3a7d016f->enter($__internal_1da4ec3d7fc86d5a7ca3ddbf24c3389b7ca690f91ded649ec05d7cbe3a7d016f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Nueva Factura Redenciones";
        
        $__internal_1da4ec3d7fc86d5a7ca3ddbf24c3389b7ca690f91ded649ec05d7cbe3a7d016f->leave($__internal_1da4ec3d7fc86d5a7ca3ddbf24c3389b7ca690f91ded649ec05d7cbe3a7d016f_prof);

    }

    // line 5
    public function block_cuerpo($context, array $blocks = array())
    {
        $__internal_e6ff6f05a04e389ef69a3a5624fd90cebab6ea4c3ee6614ec43fa04296e26223 = $this->env->getExtension("native_profiler");
        $__internal_e6ff6f05a04e389ef69a3a5624fd90cebab6ea4c3ee6614ec43fa04296e26223->enter($__internal_e6ff6f05a04e389ef69a3a5624fd90cebab6ea4c3ee6614ec43fa04296e26223_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cuerpo"));

        // line 6
        echo "<div class=\"row-fluid sortable ui-sortable\">
<div class=\"box span8\">
    <div class=\"box-header well\" data-original-title>
        <h2><i class=\"icon-edit\"></i>Nueva Factura Redenciones</h2>
            <div class=\"box-icon\">
                <a href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("facturas_listado", array("programa" => $this->getAttribute((isset($context["programa"]) ? $context["programa"] : $this->getContext($context, "programa")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-round\"><i class=\"icon-arrow-left\"></i></a>
            </div>
    </div>
<div class=\"box-content\">
    <table class=\"table table-bordered table-striped\">
\t\t\t\t\t<tbody>
\t\t\t\t\t\t<tr><td>Programa</td><td>";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["programa"]) ? $context["programa"] : $this->getContext($context, "programa")), "nombre", array()), "html", null, true);
        echo "</td></tr>
\t\t\t\t\t\t<tr><td>Cliente</td><td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["programa"]) ? $context["programa"] : $this->getContext($context, "programa")), "cliente", array()), "nombre", array()), "html", null, true);
        echo "</td></tr>
\t\t\t\t\t\t<tr><td>Pais</td><td>";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pais"]) ? $context["pais"] : $this->getContext($context, "pais")), "nombre", array()), "html", null, true);
        echo "</td></tr>
\t\t\t\t\t</tbody>
\t\t\t\t</table>
<form action=\"";
        // line 22
        echo $this->env->getExtension('routing')->getPath("factura_redencionesgenerar");
        echo "\" method=\"POST\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " class=\"form-horizontal\" novalidate>
    <fieldset>
        <input type='hidden' name='pais' value=";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pais"]) ? $context["pais"] : $this->getContext($context, "pais")), "id", array()), "html", null, true);
        echo ">
        <input type='hidden' name='programa' value=";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["programa"]) ? $context["programa"] : $this->getContext($context, "programa")), "id", array()), "html", null, true);
        echo ">
        <div class=\"control-group\">
            ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "periodo", array()), 'label', array("label_attr" => array("class" => "control-label")) + (twig_test_empty($_label_ = ((array_key_exists("label", $context)) ? (_twig_default_filter((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), null)) : (null))) ? array() : array("label" => $_label_)));
        echo "
            <div class=\"controls\">
                ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "periodo", array()), 'widget', array("id" => "fecha", "value" => twig_date_format_filter($this->env, (isset($context["fechaInicio"]) ? $context["fechaInicio"] : $this->getContext($context, "fechaInicio")), "Y-m-d")));
        echo "
            </div>
        </div>
        <div class=\"control-group\">
            ";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fecha", array()), 'label', array("label_attr" => array("class" => "control-label")) + (twig_test_empty($_label_ = ((array_key_exists("label", $context)) ? (_twig_default_filter((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), null)) : (null))) ? array() : array("label" => $_label_)));
        echo "
            <div class=\"controls\">
                ";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fecha", array()), 'widget', array("id" => "fecha", "value" => twig_date_format_filter($this->env, (isset($context["fecha"]) ? $context["fecha"] : $this->getContext($context, "fecha")), "Y-m-d")));
        echo "
            </div>
        </div>
        <div class=\"control-group\">
            ";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fechaInicio", array()), 'label', array("label_attr" => array("class" => "control-label")) + (twig_test_empty($_label_ = ((array_key_exists("label", $context)) ? (_twig_default_filter((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), null)) : (null))) ? array() : array("label" => $_label_)));
        echo "
            <div class=\"controls\">
                ";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fechaInicio", array()), 'widget', array("id" => "fecha", "value" => twig_date_format_filter($this->env, (isset($context["fechaInicio"]) ? $context["fechaInicio"] : $this->getContext($context, "fechaInicio")), "Y-m-d")));
        echo "
            </div>
        </div>
        <div class=\"control-group\">
            ";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fechaFin", array()), 'label', array("label_attr" => array("class" => "control-label")) + (twig_test_empty($_label_ = ((array_key_exists("label", $context)) ? (_twig_default_filter((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), null)) : (null))) ? array() : array("label" => $_label_)));
        echo "
            <div class=\"controls\">
                ";
        // line 47
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fechaFin", array()), 'widget', array("id" => "fecha", "value" => twig_date_format_filter($this->env, (isset($context["fechaFin"]) ? $context["fechaFin"] : $this->getContext($context, "fechaFin")), "Y-m-d")));
        echo "
            </div>
        </div>
    </fieldset>

<div class=\"form-actions\">
    ";
        // line 53
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Enviar", array()), 'widget', array("attr" => array("class" => "btn btn-primary")));
        echo "
</div>
";
        // line 55
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "_token", array()), 'widget');
        echo "
</form>
</div>
</div>
 </div>
";
        
        $__internal_e6ff6f05a04e389ef69a3a5624fd90cebab6ea4c3ee6614ec43fa04296e26223->leave($__internal_e6ff6f05a04e389ef69a3a5624fd90cebab6ea4c3ee6614ec43fa04296e26223_prof);

    }

    // line 62
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_6155f133f671ac7fa5a74b8df7f376929c437a66f7d25d6cafec29eb9cb3c9fd = $this->env->getExtension("native_profiler");
        $__internal_6155f133f671ac7fa5a74b8df7f376929c437a66f7d25d6cafec29eb9cb3c9fd->enter($__internal_6155f133f671ac7fa5a74b8df7f376929c437a66f7d25d6cafec29eb9cb3c9fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 63
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

    <script>
        \$( \"#fecha\" ).datepicker({ dateFormat: 'yy-mm-dd' });
        \$( \"#fechaInicio\" ).datepicker({ dateFormat: 'yy-mm-dd' });
        \$( \"#fechaFin\" ).datepicker({ dateFormat: 'yy-mm-dd' });
    </script>


";
        
        $__internal_6155f133f671ac7fa5a74b8df7f376929c437a66f7d25d6cafec29eb9cb3c9fd->leave($__internal_6155f133f671ac7fa5a74b8df7f376929c437a66f7d25d6cafec29eb9cb3c9fd_prof);

    }

    public function getTemplateName()
    {
        return "IncentivesFacturacionBundle:Facturas:nuevaRedenciones.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  174 => 63,  168 => 62,  155 => 55,  150 => 53,  141 => 47,  136 => 45,  129 => 41,  124 => 39,  117 => 35,  112 => 33,  105 => 29,  100 => 27,  95 => 25,  91 => 24,  84 => 22,  78 => 19,  74 => 18,  70 => 17,  61 => 11,  54 => 6,  48 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends "::base.html.twig" %}*/
/* */
/* {% block title %}Nueva Factura Redenciones{% endblock %}*/
/* */
/* {% block cuerpo %}*/
/* <div class="row-fluid sortable ui-sortable">*/
/* <div class="box span8">*/
/*     <div class="box-header well" data-original-title>*/
/*         <h2><i class="icon-edit"></i>Nueva Factura Redenciones</h2>*/
/*             <div class="box-icon">*/
/*                 <a href="{{ path('facturas_listado', {"programa": programa.id }) }}" class="btn btn-round"><i class="icon-arrow-left"></i></a>*/
/*             </div>*/
/*     </div>*/
/* <div class="box-content">*/
/*     <table class="table table-bordered table-striped">*/
/* 					<tbody>*/
/* 						<tr><td>Programa</td><td>{{ programa.nombre }}</td></tr>*/
/* 						<tr><td>Cliente</td><td>{{ programa.cliente.nombre }}</td></tr>*/
/* 						<tr><td>Pais</td><td>{{ pais.nombre }}</td></tr>*/
/* 					</tbody>*/
/* 				</table>*/
/* <form action="{{ path('factura_redencionesgenerar') }}" method="POST" {{ form_enctype(form) }} class="form-horizontal" novalidate>*/
/*     <fieldset>*/
/*         <input type='hidden' name='pais' value={{ pais.id }}>*/
/*         <input type='hidden' name='programa' value={{ programa.id }}>*/
/*         <div class="control-group">*/
/*             {{ form_label(form.periodo, label|default(null), { 'label_attr': { 'class': 'control-label' } }) }}*/
/*             <div class="controls">*/
/*                 {{ form_widget(form.periodo, { 'id': 'fecha', 'value' :  fechaInicio|date("Y-m-d") }) }}*/
/*             </div>*/
/*         </div>*/
/*         <div class="control-group">*/
/*             {{ form_label(form.fecha, label|default(null), { 'label_attr': { 'class': 'control-label' } }) }}*/
/*             <div class="controls">*/
/*                 {{ form_widget(form.fecha, { 'id': 'fecha', 'value' :  fecha|date("Y-m-d") }) }}*/
/*             </div>*/
/*         </div>*/
/*         <div class="control-group">*/
/*             {{ form_label(form.fechaInicio, label|default(null), { 'label_attr': { 'class': 'control-label' } }) }}*/
/*             <div class="controls">*/
/*                 {{ form_widget(form.fechaInicio, { 'id': 'fecha', 'value' :  fechaInicio|date("Y-m-d") }) }}*/
/*             </div>*/
/*         </div>*/
/*         <div class="control-group">*/
/*             {{ form_label(form.fechaFin, label|default(null), { 'label_attr': { 'class': 'control-label' } }) }}*/
/*             <div class="controls">*/
/*                 {{ form_widget(form.fechaFin, { 'id': 'fecha', 'value' :  fechaFin|date("Y-m-d") }) }}*/
/*             </div>*/
/*         </div>*/
/*     </fieldset>*/
/* */
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
/* {% block javascripts %}*/
/*     {{ parent() }}*/
/* */
/*     <script>*/
/*         $( "#fecha" ).datepicker({ dateFormat: 'yy-mm-dd' });*/
/*         $( "#fechaInicio" ).datepicker({ dateFormat: 'yy-mm-dd' });*/
/*         $( "#fechaFin" ).datepicker({ dateFormat: 'yy-mm-dd' });*/
/*     </script>*/
/* */
/* */
/* {% endblock %}*/
/* */
