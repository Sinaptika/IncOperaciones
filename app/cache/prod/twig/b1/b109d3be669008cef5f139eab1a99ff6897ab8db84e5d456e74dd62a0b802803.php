<?php

/* IncentivesGarantiasBundle:Redenciones:novedad.html.twig */
class __TwigTemplate_e10d33afb748d1b996c0670174fcf7ceb4dfe92da978bc96d86bc274f62c1dc1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "IncentivesGarantiasBundle:Redenciones:novedad.html.twig", 1);
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Novedad";
    }

    // line 5
    public function block_cuerpo($context, array $blocks = array())
    {
        // line 6
        echo "<div class=\"box\">
    <div class=\"box-header well\" data-original-title=\"\">
        Registrar Novedad 
        <div class=\"box-icon\">
        <div class=\"box-icon\">
                    <a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("ordenes");
        echo "\" class=\"btn btn-round\"><i class=\"icon-arrow-left\"></i></a>
                </div>
      </div>
    </div>
</div>
    <div class=\"box span12\">
      <div class=\"box-content\">
        
        <div class=\"box-header well\">
        <h2>
        
        </i>Datos Redencion</h2>
        </h2>
      </div>
      

        <table class=\"table table-bordered table-striped\">
          <tbody>
            <tr><td>Programa</td><td>";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["redencion"]) ? $context["redencion"] : $this->getContext($context, "redencion")), "productocatalogo", array()), "catalogos", array()), "programa", array()), "nombre", array()), "html", null, true);
        echo "</td></tr>
            <tr><td>Participante</td><td>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["redencion"]) ? $context["redencion"] : $this->getContext($context, "redencion")), "participante", array()), "nombre", array()), "html", null, true);
        echo "</td></tr>
            <tr><td>Documento</td><td>";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["redencion"]) ? $context["redencion"] : $this->getContext($context, "redencion")), "participante", array()), "documento", array()), "html", null, true);
        echo "</td></tr>
            <tr><td>Fecha de solicitud</td><td>";
        // line 32
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["redencion"]) ? $context["redencion"] : $this->getContext($context, "redencion")), "fecha", array()), "Y-m-d"), "html", null, true);
        echo "</td></tr>
            <tr><td>Valor</td><td>";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["redencion"]) ? $context["redencion"] : $this->getContext($context, "redencion")), "valor", array()), "html", null, true);
        echo "</td></tr>
            <tr><td>Codigo</td><td>";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["redencion"]) ? $context["redencion"] : $this->getContext($context, "redencion")), "codigoredencion", array()), "html", null, true);
        echo "</td></tr>
            <tr><td>Estado</td><td>";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["redencion"]) ? $context["redencion"] : $this->getContext($context, "redencion")), "redencionestado", array()), "nombre", array()), "html", null, true);
        echo "</td></tr>
            
          </tbody>
        </table>
    </div>
  </div>


 <div class=\"box span12\">
<div class=\"box-header well\" data-original-title>
                        <h2><i class=\"icon-edit\"></i>Novedad</h2>
                        
                    </div>
<div class=\"box-content\">
<form action=\"\" method=\"POST\" ";
        // line 49
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " class=\"form-horizontal\">
    ";
        // line 50
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
    <fieldset>
        <div class=\"control-group\">
            ";
        // line 53
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "observacion", array()), 'label', array("label_attr" => array("class" => "control-label")) + (twig_test_empty($_label_ = ((array_key_exists("label", $context)) ? (_twig_default_filter((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), null)) : (null))) ? array() : array("label" => $_label_)));
        echo "
            <div class=\"controls\">
                ";
        // line 55
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "observacion", array()), 'widget', array("attr" => array("class" => "input-xlarge focused")));
        echo "
            </div>
        </div>
        <div class=\"control-group\">
            ";
        // line 59
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tipo", array()), 'label', array("label_attr" => array("class" => "control-label")) + (twig_test_empty($_label_ = ((array_key_exists("label", $context)) ? (_twig_default_filter((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), null)) : (null))) ? array() : array("label" => $_label_)));
        echo "
            <div class=\"controls\">
                ";
        // line 61
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tipo", array()), 'widget', array("attr" => array("class" => "input-xlarge focused")));
        echo "
            </div>
        </div>
        <div class=\"control-group\">
            ";
        // line 65
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "devolucionTipo", array()), 'label', array("label_attr" => array("class" => "control-label")) + (twig_test_empty($_label_ = ((array_key_exists("label", $context)) ? (_twig_default_filter((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), "Devolución Causa")) : ("Devolución Causa"))) ? array() : array("label" => $_label_)));
        echo "
            <div class=\"controls\">
                ";
        // line 67
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "devolucionTipo", array()), 'widget', array("attr" => array("class" => "input-xlarge focused")));
        echo "
            </div>
        </div>
        
    </fieldset>
 <div class=\"form-actions\">
    ";
        // line 73
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Enviar", array()), 'widget', array("attr" => array("class" => "btn btn-primary")));
        echo "
</div>
";
        // line 75
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "_token", array()), 'widget');
        echo "
</form>
</div>
</div>

  ";
    }

    public function getTemplateName()
    {
        return "IncentivesGarantiasBundle:Redenciones:novedad.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  160 => 75,  155 => 73,  146 => 67,  141 => 65,  134 => 61,  129 => 59,  122 => 55,  117 => 53,  111 => 50,  107 => 49,  90 => 35,  86 => 34,  82 => 33,  78 => 32,  74 => 31,  70 => 30,  66 => 29,  45 => 11,  38 => 6,  35 => 5,  29 => 3,  11 => 1,);
    }
}
/* {% extends "::base.html.twig" %}*/
/* */
/* {% block title %}Novedad{% endblock %}*/
/* */
/* {% block cuerpo %}*/
/* <div class="box">*/
/*     <div class="box-header well" data-original-title="">*/
/*         Registrar Novedad */
/*         <div class="box-icon">*/
/*         <div class="box-icon">*/
/*                     <a href="{{ path('ordenes') }}" class="btn btn-round"><i class="icon-arrow-left"></i></a>*/
/*                 </div>*/
/*       </div>*/
/*     </div>*/
/* </div>*/
/*     <div class="box span12">*/
/*       <div class="box-content">*/
/*         */
/*         <div class="box-header well">*/
/*         <h2>*/
/*         */
/*         </i>Datos Redencion</h2>*/
/*         </h2>*/
/*       </div>*/
/*       */
/* */
/*         <table class="table table-bordered table-striped">*/
/*           <tbody>*/
/*             <tr><td>Programa</td><td>{{ redencion.productocatalogo.catalogos.programa.nombre }}</td></tr>*/
/*             <tr><td>Participante</td><td>{{ redencion.participante.nombre }}</td></tr>*/
/*             <tr><td>Documento</td><td>{{ redencion.participante.documento }}</td></tr>*/
/*             <tr><td>Fecha de solicitud</td><td>{{ redencion.fecha | date("Y-m-d") }}</td></tr>*/
/*             <tr><td>Valor</td><td>{{ redencion.valor }}</td></tr>*/
/*             <tr><td>Codigo</td><td>{{ redencion.codigoredencion }}</td></tr>*/
/*             <tr><td>Estado</td><td>{{ redencion.redencionestado.nombre }}</td></tr>*/
/*             */
/*           </tbody>*/
/*         </table>*/
/*     </div>*/
/*   </div>*/
/* */
/* */
/*  <div class="box span12">*/
/* <div class="box-header well" data-original-title>*/
/*                         <h2><i class="icon-edit"></i>Novedad</h2>*/
/*                         */
/*                     </div>*/
/* <div class="box-content">*/
/* <form action="" method="POST" {{ form_enctype(form) }} class="form-horizontal">*/
/*     {{ form_errors(form) }}*/
/*     <fieldset>*/
/*         <div class="control-group">*/
/*             {{ form_label(form.observacion, label|default(null), { 'label_attr': { 'class': 'control-label' } }) }}*/
/*             <div class="controls">*/
/*                 {{ form_widget(form.observacion, { 'attr': {'class': 'input-xlarge focused'} }) }}*/
/*             </div>*/
/*         </div>*/
/*         <div class="control-group">*/
/*             {{ form_label(form.tipo, label|default(null), { 'label_attr': { 'class': 'control-label' } }) }}*/
/*             <div class="controls">*/
/*                 {{ form_widget(form.tipo, { 'attr': {'class': 'input-xlarge focused'} }) }}*/
/*             </div>*/
/*         </div>*/
/*         <div class="control-group">*/
/*             {{ form_label(form.devolucionTipo, label|default('Devolución Causa'), { 'label_attr': { 'class': 'control-label' } }) }}*/
/*             <div class="controls">*/
/*                 {{ form_widget(form.devolucionTipo, { 'attr': {'class': 'input-xlarge focused'} }) }}*/
/*             </div>*/
/*         </div>*/
/*         */
/*     </fieldset>*/
/*  <div class="form-actions">*/
/*     {{ form_widget(form.Enviar, { 'attr': {'class': 'btn btn-primary'} }) }}*/
/* </div>*/
/* {{ form_widget(form._token) }}*/
/* </form>*/
/* </div>*/
/* </div>*/
/* */
/*   {% endblock %}*/
/* */
