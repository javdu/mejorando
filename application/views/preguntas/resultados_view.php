<section id="resultados">
    <div class="container">
        <div class="row">
            <img src="cuestionario/resultados/makegraphic" alt="" border="0"> 
            <div class="col-xs-9 col-xs-offset-2 col-sm-8 col-sm-offset-2 col-md-8 col-md-offset-2 col-lg-8 col-lg-offset-2">
                <form name="resultadosForm" id="resultadosForm" action="cuestionario/resultados/guardar">
                    <div style="border: 2px solid #DDDDDD !important; margin: 15px;"><div id="chart" name="chart"></div></div>
                    <div style="border: 2px solid #DDDDDD !important; margin: 15px;"><div id="chart1" name="chart1"></div></div>
                    <div style=" border: 2px solid #DDDDDD !important; margin: 15px;"><div id="chart2" name="chart2"></div></div>
                    <div style="border: 2px solid #DDDDDD !important; margin: 15px;"><div id="chart3" name="chart3"></div></div>
                    <div style="border: 2px solid #DDDDDD !important; margin: 15px;"><div id="basicline" name="basicline"></div></div>
                    <br>
                    <div class="clearfix"></div>
                    <div class="row">
                        <div class="form-group">
                            <div id='toolbar'>
                                <div class='wrapper text-center'>
                                    <div class="btn-group">
                                        <input type="submit" class="btn btn-default" style="padding: 10px 20px; width: 200px; color: #0E6E8C;" value="FINALIZAR">
                                        <a id="volverResultados" name="volverResultados" class="btn btn-default" style="padding: 10px 20px; width: 200px; color: #0E6E8C;">VOLVER</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<script>
    $( document ).ready(function() {
        $('html, body').animate({ scrollTop: 0 }, 500);
        
        $( "#contanos" ).css('border-bottom', '5px solid #7f8c8d');
        $( "#juga" ).css('border-bottom', '5px solid #7f8c8d');
        $( "#resultados" ).css('border-bottom', '5px solid #2196F3');
        
        $( "#resultadosForm" ).submit(function( event ) {
            event.preventDefault();
            $.ajax({url: "cuestionario/resultados/guardar", success: function(result){
                $("#cuestionario").html(result);
            }});
        }); 
        
        $( "#volverResultados" ).bind( "click", function(event) {
            event.preventDefault();
            $.ajax({url: "cuestionario/preguntas1/formulario", success: function(result){
                $("#box-preguntas").html(result);
            }});
        });
        
        $(function () { 
            $('#chart').highcharts({
                chart: {
                    type: 'bar'
                },
                title: {
                    text: '<?= $aPersona['vcpernombre']; ?>'
                },
                xAxis: {
                    categories: ['HABILIDADES PSICOMOTORAS', 'HABILIDADES COGNITIVAS', 'HABILIDADES SOCIO-EMOCIONALES'],
                    title: {
                        text: null
                    }
                },
                yAxis: {
                    min: 0,
                    max: 100,
                    title: {
                        text: 'Porcentaje %',
                        align: 'high'
                    },
                    labels: {
                        overflow: 'justify'
                    }
                },
                tooltip: {
                    valueSuffix: ' %'
                },
                plotOptions: {
                    bar: {
                        dataLabels: {
                            enabled: true
                        }
                    }
                },
                legend: {
                    layout: 'vertical',
                    align: 'right',
                    verticalAlign: 'top',
                    x: -40,
                    y: 80,
                    floating: true,
                    borderWidth: 1,
                    backgroundColor: ((Highcharts.theme && Highcharts.theme.legendBackgroundColor) || '#FFFFFF'),
                    shadow: true
                },
                credits: {
                    enabled: false
                },
                series: [{
                    name: 'Estado Actual',
                    data: [<?php echo join($aAuxPorcentaje, ',') ?>]
                }],
                exporting: {
                    enabled: true,
                    filename: "chart",
                    type: "image/png",
                    url: 'http://localhost:8080/mejorando/assets/img',
                    allowHTML: false,
                    fallbackToExportServer: true
                  }
            });
            // the button handler
            $('#save_img').click(function () {
                var chart = $('#chart').highcharts();
                //chart.print();
                chart.exportChart('http://localhost:8080/mejorando/assets/img');
            });
        });
        <?php foreach ($aAuxGraf as $elemGraf):?>
        $(function () {
            $('#chart<?= $elemGraf['idfactor']; ?>').highcharts({
                chart: {
                    type: 'column'
                },
                title: {
                    text: '<?= $aPersona['vcpernombre']; ?>'
                },
                xAxis: {
                    categories: [<?php for($i = 0; $i < count($elemGraf['factFecha']); $i++){ echo "'".$elemGraf['factFecha'][$i]."'"; echo ",";} ?>],
                    crosshair: true
                },
                yAxis: {
                    min: 0,
                    title: {
                        text: 'Aprendisaje %'
                    }
                },
                tooltip: {
                    valueSuffix: '%'
                },
                tooltip: {
                    headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
                    pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                        '<td style="padding:0"><b>{point.y:.1f} mm</b></td></tr>',
                    footerFormat: '</table>',
                    shared: true,
                    useHTML: true
                },
                plotOptions: {
                    column: {
                        pointPadding: 0.2,
                        borderWidth: 0
                    }
                },
                series: [{
                    name: '<?= $elemGraf['vcfactnombre']; ?>',
                    data: [<?= join($elemGraf['factValor'], ','); ?>]
        
                }]
            });
        });
        <?php endforeach; ?>
        $(function () {
            $('#basicline').highcharts({
                title: {
                    text: 'CUADRO COMPARATIVO',
                    x: -20 //center
                },
                subtitle: {
                    text: 'DURAN, FRANCISCO JAVIER',
                    x: -20
                },
                yAxis: {
                    min: 0,
                    max: 100,
                    title: {
                        text: 'Porcentaje %',
                        align: 'high'
                    },
                    labels: {
                        overflow: 'justify'
                    }
                },
                xAxis: {
                    categories: [<?php for($i = 0; $i < count($aAuxGraf[0]['factFecha']); $i++){ echo "'".$aAuxGraf[0]['factFecha'][$i]."'"; echo ",";} ?>]
                },
                tooltip: {
                    valueSuffix: '%'
                },
                legend: {
                    layout: 'vertical',
                    align: 'right',
                    verticalAlign: 'middle',
                    borderWidth: 0
                },
                credits: {
                    enabled: false
                },
                series: [{
                    name: '<?= $aAuxGraf[0]['vcfactnombre']?>',
                    data: [<?= join($aAuxGraf[0]['factValor'], ','); ?>]
                }, {
                    name: '<?= $aAuxGraf[1]['vcfactnombre']?>',
                    data: [<?= join($aAuxGraf[1]['factValor'], ','); ?>]
                }, {
                    name: '<?= $aAuxGraf[2]['vcfactnombre']?>',
                    data: [<?= join($aAuxGraf[2]['factValor'], ','); ?>]
                }]
            });
        });  
    });
</script>