<?php

/* IncentivesCatalogoBundle:Catalogos:listado.html.twig */
class __TwigTemplate_12bc8432f0fb792c3471787d0750b6c1b40474d5ffc9fe1aa40a9fea96c250bc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "IncentivesCatalogoBundle:Catalogos:listado.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'sidebar' => array($this, 'block_sidebar'),
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
        $__internal_d9dbd65384c145e28c55d4e64b070d263015700e13100babcc251a3071edac45 = $this->env->getExtension("native_profiler");
        $__internal_d9dbd65384c145e28c55d4e64b070d263015700e13100babcc251a3071edac45->enter($__internal_d9dbd65384c145e28c55d4e64b070d263015700e13100babcc251a3071edac45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IncentivesCatalogoBundle:Catalogos:listado.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d9dbd65384c145e28c55d4e64b070d263015700e13100babcc251a3071edac45->leave($__internal_d9dbd65384c145e28c55d4e64b070d263015700e13100babcc251a3071edac45_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_0ee9d53522a823ed7a81d13fa7dfd8d848dfb3add066f8166fd4568e49ce112e = $this->env->getExtension("native_profiler");
        $__internal_0ee9d53522a823ed7a81d13fa7dfd8d848dfb3add066f8166fd4568e49ce112e->enter($__internal_0ee9d53522a823ed7a81d13fa7dfd8d848dfb3add066f8166fd4568e49ce112e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Catalogos";
        
        $__internal_0ee9d53522a823ed7a81d13fa7dfd8d848dfb3add066f8166fd4568e49ce112e->leave($__internal_0ee9d53522a823ed7a81d13fa7dfd8d848dfb3add066f8166fd4568e49ce112e_prof);

    }

    // line 4
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_23f23f9040a44593ba35927c60b8505343398cd58232e9e7470ed48b47651ffd = $this->env->getExtension("native_profiler");
        $__internal_23f23f9040a44593ba35927c60b8505343398cd58232e9e7470ed48b47651ffd->enter($__internal_23f23f9040a44593ba35927c60b8505343398cd58232e9e7470ed48b47651ffd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 5
        $this->displayParentBlock("sidebar", $context, $blocks);
        echo "
";
        
        $__internal_23f23f9040a44593ba35927c60b8505343398cd58232e9e7470ed48b47651ffd->leave($__internal_23f23f9040a44593ba35927c60b8505343398cd58232e9e7470ed48b47651ffd_prof);

    }

    // line 7
    public function block_cuerpo($context, array $blocks = array())
    {
        $__internal_3403e386db0218faa3afc71a2067c824db74556fc162d19030e9c60eab22dd37 = $this->env->getExtension("native_profiler");
        $__internal_3403e386db0218faa3afc71a2067c824db74556fc162d19030e9c60eab22dd37->enter($__internal_3403e386db0218faa3afc71a2067c824db74556fc162d19030e9c60eab22dd37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cuerpo"));

        // line 8
        echo "<div class=\"row-fluid sortable ui-sortable\">
\t<div class=\"box span12\">
\t\t<div class=\"box-header well\">
\t\t\t<h2><i class=\"icon-th-list\"></i>Catalogos</h2>
      <div class=\"box-icon\"> 
          <a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("catalogo_nuevo");
        echo "\" class=\"btn btn-round\" title=\"Agregar\"><i class=\"icon-plus\"></i></a>
      </div>
\t\t</div>
\t\t<div class=\"box-content\">
\t\t\t<div id=\"dashboard\">
          <div id=\"tabla\" class=\"\" cellspacing=\"0\" width=\"100%\">
                      <table id=\"catalogos\" class=\"display\">
                        <thead style=\"display:table-row-group;\" >
                          <tr>
                            <th>Id</th>
                            <th>Nombre</th>
                            <th>Programa</th>
                            <th>Cliente</th>
                            <th>Fecha Inicio</th>
                            <th>Fecha Fin</th>
                            ";
        // line 28
        if ( !$this->env->getExtension('security')->isGranted("ROLE_CLI")) {
            // line 29
            echo "                            <th>Valor punto</th>
                            <th>Puntos maximo</th>
                            <th>Pais</th>
                            <th>Estado</th>
                            ";
        }
        // line 34
        echo "                          </tr>
                        </thead>
                        <tbody>
                          ";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listado"]) ? $context["listado"] : $this->getContext($context, "listado")));
        foreach ($context['_seq'] as $context["_key"] => $context["catalogo"]) {
            // line 38
            echo "                          <tr>
                            <td>";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($context["catalogo"], "id", array()), "html", null, true);
            echo "</td>
                            <td><a href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("catalogo_datos", array("id" => $this->getAttribute($context["catalogo"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["catalogo"], "nombre", array()), "html", null, true);
            echo "</a></td>
                            <td>";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["catalogo"], "programa", array()), "nombre", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["catalogo"], "programa", array()), "cliente", array()), "nombre", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 43
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($context["catalogo"], "programa", array()), "fechainicio", array()), "Y-m-d"), "html", null, true);
            echo "</td>
                            <td>";
            // line 44
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($context["catalogo"], "programa", array()), "fechafin", array()), "Y-m-d"), "html", null, true);
            echo "</td>
                            ";
            // line 45
            if ( !$this->env->getExtension('security')->isGranted("ROLE_CLI")) {
                // line 46
                echo "                            <td>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["catalogo"], "valorPunto", array()), "html", null, true);
                echo "</td>
                            <td>";
                // line 47
                echo twig_escape_filter($this->env, $this->getAttribute($context["catalogo"], "puntosMaximos", array()), "html", null, true);
                echo "</td>
                            <td>";
                // line 48
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["catalogo"], "pais", array()), "nombre", array()), "html", null, true);
                echo "</td>
                            <td>";
                // line 49
                if (($this->getAttribute($this->getAttribute($context["catalogo"], "estado", array()), "id", array()) != 1)) {
                    echo "<a class=\"btn btn-danger 1\" onClick=\"confirmar('";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("catalogo_estado", array("id" => $this->getAttribute($context["catalogo"], "id", array()))), "html", null, true);
                    echo "')\" href=\"#\">Inactivo</a>";
                } else {
                    echo "<a class=\"btn btn-success 1\" onClick=\"confirmar('";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("catalogo_estado", array("id" => $this->getAttribute($context["catalogo"], "id", array()))), "html", null, true);
                    echo "')\" href=\"#\">Activo</a>";
                }
                echo "</td>
                            ";
            }
            // line 51
            echo "                          </tr>
                          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['catalogo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "                        </tbody>
                         <tfoot style=\"display: table-header-group;\">
                          <tr>
                            <th>Id</th>
                            <th>Nombre</th>
                            <th>Programa</th>
                            <th>Cliente</th>
                            <th>Fecha Inicio</th>
                            <th>Fecha Fin</th>
                            ";
        // line 62
        if ( !$this->env->getExtension('security')->isGranted("ROLE_CLI")) {
            // line 63
            echo "                            <th>Valor punto</th>
                            <th>Puntos maximo</th>
                            <th>Pais</th>
                            <th>Estado</th>
                            ";
        }
        // line 68
        echo "                          </tr>
                        </tfoot>
                      </table>
                    </div>
      </div>
\t\t</div>
\t</div>
</div>
";
        
        $__internal_3403e386db0218faa3afc71a2067c824db74556fc162d19030e9c60eab22dd37->leave($__internal_3403e386db0218faa3afc71a2067c824db74556fc162d19030e9c60eab22dd37_prof);

    }

    // line 78
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_25e7027826ff0ae96d61c7e6392ce2eb99cc56df6f3427c4f9cf63c0dd48627a = $this->env->getExtension("native_profiler");
        $__internal_25e7027826ff0ae96d61c7e6392ce2eb99cc56df6f3427c4f9cf63c0dd48627a->enter($__internal_25e7027826ff0ae96d61c7e6392ce2eb99cc56df6f3427c4f9cf63c0dd48627a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 79
        echo "
";
        // line 80
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

\t<script type=\"text/javascript\">
 \$(document).ready(function() {
//    inifuntion
 var table = \$('#catalogos').dataTable({

            \"sDom\": 'T<\"clear\">lfrtip',
             \"bPaginate\": true,
             \"bLengthChange\": true,
             \"bFilter\": true,
             \"bSort\": true,
             \"bInfo\": false,
             \"bAutoWidth\": true,
             \"bJQueryUI\": false,
             \"sPaginationType\": \"full_numbers\",
             \"iDisplayLength\": 20,
             \"aLengthMenu\": [ [10, 25, 50, -1], [10, 25, 50, \"Todo\"] ],
              initComplete: function () {
                    this.api().columns().every( function () {
                        var column = this;
                        var select = \$('<select style=\"width: 100%\"><option value=\"\"></option></select>')
                            .appendTo( \$(column.footer()).empty() )
                            .on( 'change', function () {
                                var val = \$.fn.dataTable.util.escapeRegex(
                                    \$(this).val()
                                );
         
                                column
                                    .search( val ? '^'+val+'\$' : '', true, false )
                                    .draw();
                            } );
         
                        column.data().unique().sort().each( function ( d, j ) {
                            //limpiar
                            //d
                            select.append( '<option value=\"'+d+'\">'+d+'</option>' )
                        } );
                    } );
                }
    });

})
  </script>

  <script type=\"text/javascript\">
      function confirmar(ruta)
      {
        if (confirm(\"Desea cambiar el estado\")==true){
            self.location=ruta;
        }else{
            alert(\"OK\");
        }
        
      }
  </script>

";
        
        $__internal_25e7027826ff0ae96d61c7e6392ce2eb99cc56df6f3427c4f9cf63c0dd48627a->leave($__internal_25e7027826ff0ae96d61c7e6392ce2eb99cc56df6f3427c4f9cf63c0dd48627a_prof);

    }

    public function getTemplateName()
    {
        return "IncentivesCatalogoBundle:Catalogos:listado.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  221 => 80,  218 => 79,  212 => 78,  197 => 68,  190 => 63,  188 => 62,  177 => 53,  170 => 51,  157 => 49,  153 => 48,  149 => 47,  144 => 46,  142 => 45,  138 => 44,  134 => 43,  130 => 42,  126 => 41,  120 => 40,  116 => 39,  113 => 38,  109 => 37,  104 => 34,  97 => 29,  95 => 28,  77 => 13,  70 => 8,  64 => 7,  55 => 5,  49 => 4,  37 => 3,  11 => 1,);
    }
}
/* {% extends "::base.html.twig" %}*/
/* */
/* {% block title %}Catalogos{% endblock %}*/
/* {% block sidebar %}*/
/* {{ parent() }}*/
/* {% endblock %}*/
/* {% block cuerpo %}*/
/* <div class="row-fluid sortable ui-sortable">*/
/* 	<div class="box span12">*/
/* 		<div class="box-header well">*/
/* 			<h2><i class="icon-th-list"></i>Catalogos</h2>*/
/*       <div class="box-icon"> */
/*           <a href="{{ path('catalogo_nuevo') }}" class="btn btn-round" title="Agregar"><i class="icon-plus"></i></a>*/
/*       </div>*/
/* 		</div>*/
/* 		<div class="box-content">*/
/* 			<div id="dashboard">*/
/*           <div id="tabla" class="" cellspacing="0" width="100%">*/
/*                       <table id="catalogos" class="display">*/
/*                         <thead style="display:table-row-group;" >*/
/*                           <tr>*/
/*                             <th>Id</th>*/
/*                             <th>Nombre</th>*/
/*                             <th>Programa</th>*/
/*                             <th>Cliente</th>*/
/*                             <th>Fecha Inicio</th>*/
/*                             <th>Fecha Fin</th>*/
/*                             {% if not is_granted('ROLE_CLI') %}*/
/*                             <th>Valor punto</th>*/
/*                             <th>Puntos maximo</th>*/
/*                             <th>Pais</th>*/
/*                             <th>Estado</th>*/
/*                             {% endif %}*/
/*                           </tr>*/
/*                         </thead>*/
/*                         <tbody>*/
/*                           {% for catalogo in listado %}*/
/*                           <tr>*/
/*                             <td>{{ catalogo.id }}</td>*/
/*                             <td><a href="{{ path("catalogo_datos", {"id": catalogo.id}) }}">{{ catalogo.nombre }}</a></td>*/
/*                             <td>{{ catalogo.programa.nombre }}</td>*/
/*                             <td>{{ catalogo.programa.cliente.nombre }}</td>*/
/*                             <td>{{ catalogo.programa.fechainicio | date("Y-m-d")  }}</td>*/
/*                             <td>{{ catalogo.programa.fechafin | date("Y-m-d") }}</td>*/
/*                             {% if not is_granted('ROLE_CLI') %}*/
/*                             <td>{{ catalogo.valorPunto }}</td>*/
/*                             <td>{{ catalogo.puntosMaximos }}</td>*/
/*                             <td>{{ catalogo.pais.nombre }}</td>*/
/*                             <td>{% if (catalogo.estado.id!=1) %}<a class="btn btn-danger 1" onClick="confirmar('{{ url("catalogo_estado", {"id": catalogo.id}) }}')" href="#">Inactivo</a>{% else %}<a class="btn btn-success 1" onClick="confirmar('{{ url("catalogo_estado", {"id": catalogo.id}) }}')" href="#">Activo</a>{% endif %}</td>*/
/*                             {% endif %}*/
/*                           </tr>*/
/*                           {% endfor %}*/
/*                         </tbody>*/
/*                          <tfoot style="display: table-header-group;">*/
/*                           <tr>*/
/*                             <th>Id</th>*/
/*                             <th>Nombre</th>*/
/*                             <th>Programa</th>*/
/*                             <th>Cliente</th>*/
/*                             <th>Fecha Inicio</th>*/
/*                             <th>Fecha Fin</th>*/
/*                             {% if not is_granted('ROLE_CLI') %}*/
/*                             <th>Valor punto</th>*/
/*                             <th>Puntos maximo</th>*/
/*                             <th>Pais</th>*/
/*                             <th>Estado</th>*/
/*                             {% endif %}*/
/*                           </tr>*/
/*                         </tfoot>*/
/*                       </table>*/
/*                     </div>*/
/*       </div>*/
/* 		</div>*/
/* 	</div>*/
/* </div>*/
/* {% endblock %}*/
/* */
/* {% block javascripts %}*/
/* */
/* {{ parent() }}*/
/* */
/* 	<script type="text/javascript">*/
/*  $(document).ready(function() {*/
/* //    inifuntion*/
/*  var table = $('#catalogos').dataTable({*/
/* */
/*             "sDom": 'T<"clear">lfrtip',*/
/*              "bPaginate": true,*/
/*              "bLengthChange": true,*/
/*              "bFilter": true,*/
/*              "bSort": true,*/
/*              "bInfo": false,*/
/*              "bAutoWidth": true,*/
/*              "bJQueryUI": false,*/
/*              "sPaginationType": "full_numbers",*/
/*              "iDisplayLength": 20,*/
/*              "aLengthMenu": [ [10, 25, 50, -1], [10, 25, 50, "Todo"] ],*/
/*               initComplete: function () {*/
/*                     this.api().columns().every( function () {*/
/*                         var column = this;*/
/*                         var select = $('<select style="width: 100%"><option value=""></option></select>')*/
/*                             .appendTo( $(column.footer()).empty() )*/
/*                             .on( 'change', function () {*/
/*                                 var val = $.fn.dataTable.util.escapeRegex(*/
/*                                     $(this).val()*/
/*                                 );*/
/*          */
/*                                 column*/
/*                                     .search( val ? '^'+val+'$' : '', true, false )*/
/*                                     .draw();*/
/*                             } );*/
/*          */
/*                         column.data().unique().sort().each( function ( d, j ) {*/
/*                             //limpiar*/
/*                             //d*/
/*                             select.append( '<option value="'+d+'">'+d+'</option>' )*/
/*                         } );*/
/*                     } );*/
/*                 }*/
/*     });*/
/* */
/* })*/
/*   </script>*/
/* */
/*   <script type="text/javascript">*/
/*       function confirmar(ruta)*/
/*       {*/
/*         if (confirm("Desea cambiar el estado")==true){*/
/*             self.location=ruta;*/
/*         }else{*/
/*             alert("OK");*/
/*         }*/
/*         */
/*       }*/
/*   </script>*/
/* */
/* {% endblock %}*/
/* */
/* */
