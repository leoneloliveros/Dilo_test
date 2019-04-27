var MoNetcool=function() {

    return {
        imporFile:function(urlImport,form){
            $('#preload').fadeIn('slow');
          var formData= new FormData();
            formData.append('file', $('#file')[0].files[0]);
            $.ajax({
                url: urlImport,
                type: "POST",
                data:  new FormData(form),
                contentType: false,
                cache: false,
                processData:false,
                success: function(data)
                {
                    swal({
                        title: "Importe Exitoso!",
                        text: "Se importaron "+data+' Registros al sistema',
                        icon: "success",
                        confirmButtonText: "<span><i class='la la-download'></i><span>Aceptar</span></span>",
                        confirmButtonClass: "btn btn-accent m-btn m-btn--pill m-btn--air m-btn--icon",
                        showCancelButton: false

                    }).then(function(e) {
                        location.reload();
                    })
                },
                error: function(e)
                {
                    $('#preload').fadeOut();
                }
            });


        },
        chartOptions: function(){
            return {
                chart: {
                    type: 'column',
                    renderTo: '',
                    options3d: {
                        enabled: true,
                        alpha: 15,
                        beta: 0,
                        depth: 100,
                        viewDistance: 25
                    }

                },
                title: {
                    text: ''
                },
                credits: {
                    enabled: false
                },
                subtitle: {
                    text: ''
                },
                xAxis: {
                    categories: [ ],
                    crosshair: true
                },
                yAxis: {
                    min: 0,
                    title: {
                        text: 'Cantidad '
                    }
                },
                tooltip: {
                    headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
                    pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                        '<td style="padding:0"><b>{point.y} </b></td></tr>',
                    footerFormat: '</table>',
                    shared: true,
                    useHTML: true
                },
                plotOptions: {
                    column: {
                        dataLabels: {
                            enabled: true
                        },
                        series: {
                            cursor:''
                        }
                        // pointPadding: 0.2,
                        //borderWidth: 0
                    }
                },
                series: []

            };
        },
        openModal:function(grupo,prioridad,titulo,estado,urlLoadItems){
            $('#modal-title').html(titulo);
            $.get(urlLoadItems,{grupo:grupo,prioridad:prioridad,fecha:$('#filtro-fecha').val(),estado:estado},function (res) {
                $('#modal-body').html(res);
                $('#listar-tareas').modal('show');
                $('#tabla_tareas').dataTable();
                $('#preload').fadeOut('slow');
            });
        },
        dashBoardTareas: function(url,desde,hasta,urlLoadItems) {

            $('#preload').show('slow');

            $.get(url,{inicio:desde,fin:hasta},function (res) {


                $('#tas_asig').html(res.total);

                $('#por_asig').css('width',100+'%');
                $('#tast_cerradas').html(res.cerradas);

                $('#porc_cerradas').css('width', parseInt(res.porc_cerradas)+'%');
                $('#por_cerradas_num').html(parseInt(res.porc_cerradas)+'%');
                $('#tast_abiertas').html(res.abiertas);

                $('#porc_abiertas').css('width', parseInt(res.porc_abiertas)+'%');
                $('#por_abiertas_num').html(parseInt(res.porc_abiertas)+'%');

                var chartOptions = BoTx.chartOptions();

                var objectA = {name: "Abiertas",color: '#efb223', data: []};
                var objectC = {name: "Cerradas", color: '#35a86e',data: []};
                $.each(res.infoGrupos.data, function( key,record ) {
                    objectA.data.push(record.abiertos);
                    objectC.data.push(record.cerrados);
                    chartOptions.xAxis.categories.push(key);
                });

                chartOptions.title.text='Tareas Por Grupo';
                chartOptions.series.push( objectA );
                chartOptions.series.push( objectC );
                chartOptions.chart.renderTo='chartTareas';
                 new Highcharts.Chart(chartOptions);

                chartOptions = BoTx.chartOptions();

                var objectA = {name: "Alta",color: '#d30606', data: []};
                var objectC = {name: "Media",color: '#f2b721',data: []};
                var objectD = {name: "Baja",color: '#81c49d',data: []};
                $.each(res.infoGrupos.prioridad, function( key,record ) {
                    objectA.data.push(record.alta);
                    objectC.data.push(record.media);
                    objectD.data.push(record.baja);
                    chartOptions.xAxis.categories.push(key);
                });

                chartOptions.title.text='GRAFICAS ABIERTAS POR PRIORIDAD ';
                chartOptions.series.push( objectA );
                chartOptions.series.push( objectC );
                chartOptions.series.push( objectD );
                chartOptions.plotOptions.series={
                        cursor: 'pointer',
                        point: {
                            events: {
                                click: function () {
                                    $('#preload').show('slow');
                                    BoTx.openModal( this.category, this.series.name,'Liata de tareas del grupo '+this.category+' con prioridad '+this.series.name,1,urlLoadItems);
                                }
                            }
                        }
                    };
                chartOptions.chart.renderTo='prioridadesPorGrupo';
                new Highcharts.Chart(chartOptions);

                $('#preload').fadeOut('slow');
            })
        }
    }
}();

