<?php

/* IncentivesSolicitudesBundle:Cotizaciones:editarvalores.html.twig */
class __TwigTemplate_056bbe1f81d72d6ff4fe2e525940b04c3bf2ca5df126ad68c9f75d5642b04282 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'cuerpo' => array($this, 'block_cuerpo'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate((($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "isXmlHttpRequest", array())) ? ("MDWDemoBundle::layout_ajax.html.twig") : ("::base.html.twig")), "IncentivesSolicitudesBundle:Cotizaciones:editarvalores.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6e1edc4c19f97bbd6df8f8e98b6eff8117c5b34df4a54421da1384d83c3613b0 = $this->env->getExtension("native_profiler");
        $__internal_6e1edc4c19f97bbd6df8f8e98b6eff8117c5b34df4a54421da1384d83c3613b0->enter($__internal_6e1edc4c19f97bbd6df8f8e98b6eff8117c5b34df4a54421da1384d83c3613b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IncentivesSolicitudesBundle:Cotizaciones:editarvalores.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6e1edc4c19f97bbd6df8f8e98b6eff8117c5b34df4a54421da1384d83c3613b0->leave($__internal_6e1edc4c19f97bbd6df8f8e98b6eff8117c5b34df4a54421da1384d83c3613b0_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_f5bdb73cb273187e6157f9b984ecf83e6a57ec3447f7358f26686b88e0f56ada = $this->env->getExtension("native_profiler");
        $__internal_f5bdb73cb273187e6157f9b984ecf83e6a57ec3447f7358f26686b88e0f56ada->enter($__internal_f5bdb73cb273187e6157f9b984ecf83e6a57ec3447f7358f26686b88e0f56ada_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Datos Cotización";
        
        $__internal_f5bdb73cb273187e6157f9b984ecf83e6a57ec3447f7358f26686b88e0f56ada->leave($__internal_f5bdb73cb273187e6157f9b984ecf83e6a57ec3447f7358f26686b88e0f56ada_prof);

    }

    // line 3
    public function block_cuerpo($context, array $blocks = array())
    {
        $__internal_1324abfe2059c55cb20bd0e2247e3853e7a9c24ef37f3312cc1f04947af3953c = $this->env->getExtension("native_profiler");
        $__internal_1324abfe2059c55cb20bd0e2247e3853e7a9c24ef37f3312cc1f04947af3953c->enter($__internal_1324abfe2059c55cb20bd0e2247e3853e7a9c24ef37f3312cc1f04947af3953c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cuerpo"));

        // line 4
        echo "<div class=\"row-fluid sortable ui-sortable\">
<div class=\"box\">
    <div class=\"box-header well\" data-original-title=\"\">
        Cotización\t
        <div class=\"box-icon\">
\t\t\t\t<div class=\"box-icon\">
                    <a href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cotizaciones_datos", array("id" => $this->getAttribute((isset($context["cotizaciones"]) ? $context["cotizaciones"] : $this->getContext($context, "cotizaciones")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-round\"><i class=\"icon-arrow-left\"></i></a>
                </div>
    \t</div>
    </div>
</div>
    <div class=\"box span12\">
\t    <div class=\"box-content\">
\t    \t
\t    \t<div class=\"box-header well\">
\t\t\t\t<h2>
\t\t\t\t</i>Datos Cotización</h2>
\t\t\t</div>

\t\t\t\t<table class=\"table table-bordered table-striped\">
\t\t\t\t\t<tbody>
\t\t\t\t\t\t<tr><td>Consecutivo</td><td>";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cotizaciones"]) ? $context["cotizaciones"] : $this->getContext($context, "cotizaciones")), "consecutivo", array()), "html", null, true);
        echo "</td></tr>
\t\t\t\t\t\t<tr><td>Fecha de solicitud</td><td>";
        // line 26
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["cotizaciones"]) ? $context["cotizaciones"] : $this->getContext($context, "cotizaciones")), "fechaCreacion", array()), "Y-m-d"), "html", null, true);
        echo "</td></tr>
\t\t\t\t\t</tbody>
\t\t\t\t</table>
\t\t</div>
\t</div>

\t<div class=\"box span12\">
\t\t<div class=\"box-content\">
\t\t\t
\t\t    <div class=\"box-header well\">
\t\t\t\t<h2>
\t\t\t\t\t<a href=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cotizaciones_agregarproducto", array("id" => $this->getAttribute((isset($context["cotizaciones"]) ? $context["cotizaciones"] : $this->getContext($context, "cotizaciones")), "id", array()))), "html", null, true);
        echo "\">

\t\t\t\t</a>
\t\t\t\t\tProductos
\t\t\t\t</h2>
\t\t\t</div>\t\t\t


\t\t\t";
        // line 45
        if ((twig_length_filter($this->env, (isset($context["productos"]) ? $context["productos"] : $this->getContext($context, "productos"))) != 0)) {
            // line 46
            echo "\t\t\t<table class=\"table table-bordered table-striped\">
\t\t\t\t<thead>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th>Referencia</th>
\t\t\t\t\t\t<th>Id</th>
\t\t\t\t\t\t<th>Codigo de Barras</th>
\t\t\t\t\t\t<th>Codigo Incentives</th>
\t\t\t\t\t\t<th>Cantidad</th>
\t\t\t\t\t\t<th>Valor unitario</th>
\t\t\t\t\t\t<th>Valor total</th>
\t\t\t\t\t\t<th></th>
\t\t\t\t\t</tr>
\t\t\t\t</thead>
\t\t\t\t";
            // line 59
            $context["total"] = 0;
            // line 60
            echo "\t\t\t\t<tbody>
\t\t\t\t\t";
            // line 61
            $context["j"] = 0;
            // line 62
            echo "\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["productos"]) ? $context["productos"] : $this->getContext($context, "productos")));
            foreach ($context['_seq'] as $context["_key"] => $context["producto"]) {
                echo "\t
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t";
                // line 64
                $context["j"] = ((isset($context["j"]) ? $context["j"] : $this->getContext($context, "j")) + 1);
                // line 65
                echo "\t\t\t\t\t\t\t";
                $context["i"] = 0;
                // line 66
                echo "
\t\t\t\t\t\t\t\t\t<td>";
                // line 67
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["producto"], "producto", array()), "referencia", array()), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t\t\t<td>";
                // line 68
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["producto"], "producto", array()), "id", array()), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t\t\t<td>";
                // line 69
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["producto"], "producto", array()), "codEAN", array()), "html", null, true);
                echo "</td>\t
\t\t\t\t\t\t\t\t\t<td>";
                // line 70
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["producto"], "producto", array()), "codInc", array()), "html", null, true);
                echo "</td>\t\t
\t\t\t\t\t\t\t\t\t<td>";
                // line 71
                echo twig_escape_filter($this->env, $this->getAttribute($context["producto"], "cantidad", array()), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t\t\t<td>";
                // line 72
                echo twig_escape_filter($this->env, $this->getAttribute($context["producto"], "valorunidad", array()), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t\t\t<td>";
                // line 73
                echo twig_escape_filter($this->env, $this->getAttribute($context["producto"], "valortotal", array()), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t\t\t";
                // line 74
                $context["total"] = ((isset($context["total"]) ? $context["total"] : $this->getContext($context, "total")) + $this->getAttribute($context["producto"], "valortotal", array()));
                // line 75
                echo "\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<td colspan=\"2\">";
                // line 76
                echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("IncentivesSolicitudesBundle:Cotizaciones:valores", array("id" => $this->getAttribute($context["producto"], "id", array()))));
                echo "</td>
\t\t\t\t\t\t\t\t\t";
                // line 77
                $context["i"] = ((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) + 1);
                // line 78
                echo "
\t\t\t\t\t\t</tr>\t
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['producto'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 81
            echo "\t\t\t\t</tbody>
\t\t\t</table>
\t\t\t";
        }
        // line 84
        echo "\t\t</div>
\t</div>

";
        
        $__internal_1324abfe2059c55cb20bd0e2247e3853e7a9c24ef37f3312cc1f04947af3953c->leave($__internal_1324abfe2059c55cb20bd0e2247e3853e7a9c24ef37f3312cc1f04947af3953c_prof);

    }

    // line 89
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_fc6790e6c771a05853107a7060d6f7dcf74b549aa715859879c640749ffb81ea = $this->env->getExtension("native_profiler");
        $__internal_fc6790e6c771a05853107a7060d6f7dcf74b549aa715859879c640749ffb81ea->enter($__internal_fc6790e6c771a05853107a7060d6f7dcf74b549aa715859879c640749ffb81ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 90
        echo "\t";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
\t<script>

\tfunction confirmar(ruta)
\t{
\t  if (confirm(\"Cambiar estado\")==true){
\t  \tself.location=ruta;
\t  }else{
\t  \talert(\"OK\");
\t  }
\t  
\t}

\t</script>
";
        
        $__internal_fc6790e6c771a05853107a7060d6f7dcf74b549aa715859879c640749ffb81ea->leave($__internal_fc6790e6c771a05853107a7060d6f7dcf74b549aa715859879c640749ffb81ea_prof);

    }

    public function getTemplateName()
    {
        return "IncentivesSolicitudesBundle:Cotizaciones:editarvalores.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  216 => 90,  210 => 89,  200 => 84,  195 => 81,  187 => 78,  185 => 77,  181 => 76,  178 => 75,  176 => 74,  172 => 73,  168 => 72,  164 => 71,  160 => 70,  156 => 69,  152 => 68,  148 => 67,  145 => 66,  142 => 65,  140 => 64,  132 => 62,  130 => 61,  127 => 60,  125 => 59,  110 => 46,  108 => 45,  97 => 37,  83 => 26,  79 => 25,  61 => 10,  53 => 4,  47 => 3,  35 => 2,  20 => 1,);
    }
}
/* {% extends app.request.isXmlHttpRequest ? "MDWDemoBundle::layout_ajax.html.twig" : "::base.html.twig" %}*/
/* {% block title %}Datos Cotización{% endblock %}*/
/* {% block cuerpo %}*/
/* <div class="row-fluid sortable ui-sortable">*/
/* <div class="box">*/
/*     <div class="box-header well" data-original-title="">*/
/*         Cotización	*/
/*         <div class="box-icon">*/
/* 				<div class="box-icon">*/
/*                     <a href="{{ path('cotizaciones_datos',  {"id": cotizaciones.id}) }}" class="btn btn-round"><i class="icon-arrow-left"></i></a>*/
/*                 </div>*/
/*     	</div>*/
/*     </div>*/
/* </div>*/
/*     <div class="box span12">*/
/* 	    <div class="box-content">*/
/* 	    	*/
/* 	    	<div class="box-header well">*/
/* 				<h2>*/
/* 				</i>Datos Cotización</h2>*/
/* 			</div>*/
/* */
/* 				<table class="table table-bordered table-striped">*/
/* 					<tbody>*/
/* 						<tr><td>Consecutivo</td><td>{{ cotizaciones.consecutivo }}</td></tr>*/
/* 						<tr><td>Fecha de solicitud</td><td>{{ cotizaciones.fechaCreacion | date("Y-m-d") }}</td></tr>*/
/* 					</tbody>*/
/* 				</table>*/
/* 		</div>*/
/* 	</div>*/
/* */
/* 	<div class="box span12">*/
/* 		<div class="box-content">*/
/* 			*/
/* 		    <div class="box-header well">*/
/* 				<h2>*/
/* 					<a href="{{ path('cotizaciones_agregarproducto',  {"id": cotizaciones.id}) }}">*/
/* */
/* 				</a>*/
/* 					Productos*/
/* 				</h2>*/
/* 			</div>			*/
/* */
/* */
/* 			{% if productos | length!=0 %}*/
/* 			<table class="table table-bordered table-striped">*/
/* 				<thead>*/
/* 					<tr>*/
/* 						<th>Referencia</th>*/
/* 						<th>Id</th>*/
/* 						<th>Codigo de Barras</th>*/
/* 						<th>Codigo Incentives</th>*/
/* 						<th>Cantidad</th>*/
/* 						<th>Valor unitario</th>*/
/* 						<th>Valor total</th>*/
/* 						<th></th>*/
/* 					</tr>*/
/* 				</thead>*/
/* 				{% set total=0 %}*/
/* 				<tbody>*/
/* 					{% set j=0 %}*/
/* 					{% for producto in productos %}	*/
/* 						<tr>*/
/* 							{% set j=j+1 %}*/
/* 							{% set i=0 %}*/
/* */
/* 									<td>{{ producto.producto.referencia }}</td>*/
/* 									<td>{{ producto.producto.id }}</td>*/
/* 									<td>{{ producto.producto.codEAN  }}</td>	*/
/* 									<td>{{ producto.producto.codInc  }}</td>		*/
/* 									<td>{{ producto.cantidad  }}</td>*/
/* 									<td>{{ producto.valorunidad  }}</td>*/
/* 									<td>{{ producto.valortotal  }}</td>*/
/* 									{% set total=total+producto.valortotal  %}*/
/* 									*/
/* 									<td colspan="2">{{ render(controller('IncentivesSolicitudesBundle:Cotizaciones:valores', { "id": producto.id})) }}</td>*/
/* 									{% set i=i+1 %}*/
/* */
/* 						</tr>	*/
/* 					{% endfor %}*/
/* 				</tbody>*/
/* 			</table>*/
/* 			{% endif %}*/
/* 		</div>*/
/* 	</div>*/
/* */
/* {% endblock %}*/
/* */
/* {% block javascripts %}*/
/* 	{{ parent() }}*/
/* 	<script>*/
/* */
/* 	function confirmar(ruta)*/
/* 	{*/
/* 	  if (confirm("Cambiar estado")==true){*/
/* 	  	self.location=ruta;*/
/* 	  }else{*/
/* 	  	alert("OK");*/
/* 	  }*/
/* 	  */
/* 	}*/
/* */
/* 	</script>*/
/* {% endblock %}*/
/* */
