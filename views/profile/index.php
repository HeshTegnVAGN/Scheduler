<div id="wrapper">
    <?php include ROOT.'views/inc/sidebar.php'; ?>
    <main class="w-100">
        <div class="container p-3 py-4">
            <h2>Статистика</h2>
            <?php $stat = $user->getChartsstatistics();?>
            <canvas id="byObject" class="chartjs" data-custom="customChartJs"></canvas>
            <script>

                var customChartJs = {
                    type: 'line',
                    data: {
                        labels: <?='["'.implode('","',$stat[4]).'"]'?>,
                        datasets: [
                            {
                                label: 'Завершено',
                                data: <?='["'.implode('","',$stat[2]).'"]'?>,
                                fill: true,

                                pointHoverRadius: 4,
                                pointHoverBorderWidth: 12,
                                pointBackgroundColor:			 '#004d00',
                                pointBorderColor:					 'rgba(133, 145, 255, 0)',
                                pointHoverBackgroundColor:	'rgba(133, 145, 255, 0)',
                                pointHoverBorderColor:			'rgba(133, 145, 255, 0)',
                                borderWidth: 0,

                                backgroundColor:						'#00b300',
                                borderColor:								'#ffffff    ',
                            },
                            {
                                label: 'Добавлено',
                                data: <?='["'.implode('","',$stat[0]).'"]'?>,
                                fill: true,

                                pointHoverRadius: 4,
                                pointHoverBorderWidth: 12,
                                pointBackgroundColor:			 'rgba(133, 133, 145, 0)',
                                pointBorderColor:					 'rgba(133, 145, 255, 0)',
                                pointHoverBackgroundColor:	'rgba(133, 145, 255, 0)',
                                pointHoverBorderColor:			'rgba(133, 145, 255, 0)',
                                borderWidth: 0,

                                backgroundColor:						'gray',
                                borderColor:								'rgb(133, 145, 255, 0)',

                                categoryPercentage: 0.35,
                                barPercentage: 0.70,
                                // categoryPercentage: 0.6, // bar width adjust
                                // barPercentage: 1,				// bar width adjust

                            },
                            {
                                label: 'Взято в работу',
                                data: <?='["'.implode('","',$stat[1]).'"]'?>,
                                fill: true,

                                pointHoverRadius: 4,
                                pointHoverBorderWidth: 12,
                                pointBackgroundColor:			 'rgba(133, 133, 145, 0)',
                                pointBorderColor:					 'rgba(133, 145, 255, 0)',
                                pointHoverBackgroundColor:	'rgba(133, 145, 255, 0)',
                                pointHoverBorderColor:			'rgba(133, 145, 255, 0)',
                                borderWidth: 0,

                                backgroundColor:						'rgba(133, 145, 255, 0.9)',
                                borderColor:								'rgb(133, 145, 255, 0)',
                            },

                        ]
                    },

                    options: {
                        responsive: true,
                        maintainAspectRatio: true,
                        hover: {
                            mode: 'index'
                        },
                        legend: {
                            display: true,
                            position: 'top',
                        },

                        scales: {
                            xAxes: [{
                                display: true,
                                scaleLabel: {
                                    display: false,
                                    labelString: 'Month'
                                },
                                ticks: {
                                    display: true,
                                    beginAtZero: true,
                                    fontColor: '#999999',
                                    fontSize: 13,
                                    padding: 10
                                },
                                display: true,
                                gridLines: false,
                            }],

                            yAxes: [{
                                display: true,
                                scaleLabel: {
                                    display: false,
                                    labelString: 'Value'
                                },

                                gridLines: {
                                    color:							'#dddddd',
                                    borderDash:				 [2, 3],
                                    zeroLineBorderDash: [2, 3],
                                    zeroLineWidth: 1,
                                },

                                ticks: {
                                    max:						<?=$stat[3]+1?>,
                                    stepSize:			 1,
                                    display:				true,
                                    beginAtZero:		true,
                                    fontColor:			'#999999',
                                    fontSize:			 13,
                                    padding:				10
                                }
                            }]
                        },

                        title: {
                            display: false,
                            text: 'Legend Position: top'
                        },


                        tooltips: {
                            enabled: true,
                            intersect: false,
                            mode: 'nearest',
                            bodySpacing: 5,
                            yPadding: 10,
                            xPadding: 15,
                            caretPadding: 0,
                            displayColors: false,
                            backgroundColor: '#121212',
                            titleFontColor: '#ffffff',
                            cornerRadius: 4,
                            footerSpacing: 0,
                            titleSpacing: 0
                        },

                        layout: {
                            padding: {
                                left:	 0,
                                right:	0,
                                top:		0,
                                bottom: 0
                            }
                        }
                    }
                };
            </script>
        </div>
    </main>
</div>