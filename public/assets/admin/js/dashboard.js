(function ($) {
	'use strict';
	$(function () {
		var salesDifferencedata = {
			labels: ["50+", "35-50", "25-35", "18-25", "0-18"],
			datasets: [{
				label: 'Best Sellers',
				data: [22, 28, 18, 20, 12],
				backgroundColor: [
					'#8169f2',
					'#6a4df5',
					'#4f2def',
					'#2b0bc5',
					'#180183',
				],
				borderColor: [
					'#8169f2',
					'#6a4df5',
					'#4f2def',
					'#2b0bc5',
					'#180183',
				],
				borderWidth: 2,
				fill: false
			}],
		};
		var salesDifferenceOptions = {
			scales: {
				xAxes: [{
					position: 'bottom',
					display: false,
					gridLines: {
						display: false,
						drawBorder: true,
					},
					ticks: {
						display: false,//this will remove only the label
						beginAtZero: true
					}
				}],
				yAxes: [{
					display: true,
					gridLines: {
						drawBorder: true,
						display: false,
					},
					ticks: {
						beginAtZero: true
					},
				}]
			},
			legend: {
				display: false
			},
			tooltips: {
				show: false,
				backgroundColor: 'rgba(31, 59, 179, 1)',
			},
			plugins: {
				datalabels: {
					display: true,
					align: 'start',
					color: 'white',
				}
			}

		};
		if ($("#salesDifference").length) {
			var barChartCanvas = $("#salesDifference").get(0).getContext("2d");
			// This will get the first returned node in the jQuery collection.
			var barChart = new Chart(barChartCanvas, {
				type: 'horizontalBar',
				data: salesDifferencedata,
				options: salesDifferenceOptions,

			});
		}
		var bestSellersData = {
			datasets: [{
				data: [20, 15, 20, 35, 10],
				backgroundColor: [
					'#ee5b5b',
					'#fcd53b',
					'#0bdbb8',
					'#464dee',
					'#0ad7f7'
				],
				borderColor: [
					'#ee5b5b',
					'#fcd53b',
					'#0bdbb8',
					'#464dee',
					'#0ad7f7'
				],
			}],
			// These labels appear in the legend and in the tooltips when hovering different arcs
			labels: [
				'Automotive',
				'Books',
				'Software',
				'Toys',
				'Video games'
			]
		};
		var bestSellersOptions = {
			responsive: true,
			cutoutPercentage: 80,
			legend: {
				display: false,
			},
			animation: {
				animateScale: true,
				animateRotate: true
			},
			plugins: {
				datalabels: {
					display: false,
					align: 'center',
					anchor: 'center'
				}
			}

		};
		if ($("#bestSellers").length) {
			var pieChartCanvas = $("#bestSellers").get(0).getContext("2d");
			var pieChart = new Chart(pieChartCanvas, {
				type: 'doughnut',
				data: bestSellersData,
				options: bestSellersOptions
			});
		}

		var barChartStackedData = {
			datasets: [{
				label: 'Instagram (40%)',
				data: [60],
				backgroundColor: [
					'#ee5b5b'

				],
				borderColor: [
					'#ee5b5b'
				],
				borderWidth: 1,
				fill: false
			},
			{
				label: 'Facebook',
				data: [25],

				backgroundColor: [
					'#fcd53b'
				],
				borderColor: [
					'#fcd53b',

				],
				borderWidth: 1,
				fill: false
			},
			{
				label: 'Website',
				data: [10],

				backgroundColor: [
					'#0bdbb8'
				],
				borderColor: [
					'#0bdbb8',

				],
				borderWidth: 1,
				fill: false
			},
			{
				label: 'Youtube',
				data: [15],

				backgroundColor: [
					'#444bee'
				],
				borderColor: [
					"#444bee",

				],
				borderWidth: 1,
				fill: false
			}]
		};
		var barChartStackedOptions = {
			scales: {
				xAxes: [{
					display: false,
					stacked: true,
					gridLines: {
						display: false //this will remove only the label
					},
				}],
				yAxes: [{
					stacked: true,
					display: false,
				}]
			},
			legend: {
				display: false,
				position: "bottom"
			},
			elements: {
				point: {
					radius: 0
				},
				plugins: {
					datalabels: {
						display: false,
						align: 'center',
						anchor: 'center'
					}
				}

			}
		};
		if ($("#barChartStacked").length) {
			var barChartCanvas = $("#barChartStacked").get(0).getContext("2d");
			// This will get the first returned node in the jQuery collection.
			var barChart = new Chart(barChartCanvas, {
				type: 'horizontalBar',
				data: barChartStackedData,
				options: barChartStackedOptions
			});
		}

		var revenueChartData = {
			labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "No", "Dec"],
			datasets: [{
				label: 'Margin',
				data: [45, 45, 70, 70, 50, 50, 70, 60, 65, 60, 55, 55],
				backgroundColor: [
					'#0ddbb9',
				],
				borderColor: [
					'#0ddbb9'
				],
				borderWidth: 2,
				fill: false,
			},
			{
				label: 'Product',
				borderDash: [3, 4],
				data: [35, 35, 60, 60, 40, 40, 60, 50, 55, 50, 45, 45],
				borderColor: [
					'#464dee',
				],
				borderWidth: 2,
				fill: false,
				pointBorderWidth: 4,
			},
			{
				label: 'Cost',
				data: [25, 25, 50, 50, 30, 30, 50, 40, 45, 40, 35, 35],
				borderColor: [
					'#ee5b5b',
				],
				borderWidth: 2,
				fill: false,
				pointBorderWidth: 4,
			}],
		};
		var revenueChartOptions = {
			scales: {
				yAxes: [{
					display: true,
					gridLines: {
						drawBorder: false,
						display: false,
					},
				}],
				xAxes: [{
					position: 'bottom',
					gridLines: {
						drawBorder: false,
						display: false,
					},
					ticks: {
						beginAtZero: true,
						stepSize: 30
					}
				}],

			},
			legend: {
				display: false,
			},
			legendCallback: function (chart) {
				var text = [];
				text.push('<ul class="' + chart.id + '-legend">');
				for (var i = 0; i < chart.data.datasets.length; i++) {
					text.push('<li><span class="legend-box" style="background:' + chart.data.datasets[i].borderColor + ';"></span><span class="legend-label" style="">');
					if (chart.data.datasets[i].label) {
						text.push(chart.data.datasets[i].label);
					}
					text.push('</span></li>');
				}
				text.push('</ul>');
				return text.join("");
			},
			elements: {
				point: {
					radius: 0
				},
				line: {
					tension: 0
				}
			},
			tooltips: {
				backgroundColor: 'rgba(2, 171, 254, 1)',
			},
			plugins: {
				datalabels: {
					display: false,
					align: 'center',
					anchor: 'center'
				}
			}

		};
		if ($("#revenue-for-last-month-chart").length) {
			var lineChartCanvas = $("#revenue-for-last-month-chart").get(0).getContext("2d");
			var saleschart = new Chart(lineChartCanvas, {
				type: 'line',
				data: revenueChartData,
				options: revenueChartOptions
			});
			document.getElementById('revenuechart-legend').innerHTML = saleschart.generateLegend();
		}

		var serveLoadingData = {
			labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "No", "Dec"],
			datasets: [{
				label: 'Margin',
				data: [45, 45, 70, 70, 50, 50, 70, 60, 65, 60, 55, 55],
				backgroundColor: [
					'#0ddbb9',
				],
				borderColor: [
					'#0ddbb9'
				],
				borderWidth: 2,
				fill: false,
			},
			{
				label: 'Product',
				borderDash: [3, 4],
				data: [35, 35, 60, 60, 40, 40, 60, 50, 55, 50, 45, 45],
				borderColor: [
					'#464dee',
				],
				borderWidth: 2,
				fill: false,
				pointBorderWidth: 4,
			},
			{
				label: 'Cost',
				data: [25, 25, 50, 50, 30, 30, 50, 40, 45, 40, 35, 35],
				borderColor: [
					'#ee5b5b',
				],
				borderWidth: 2,
				fill: false,
				pointBorderWidth: 4,
			}],
		};
		var serveLoadingOptions = {
			scales: {
				yAxes: [{
					display: true,
					gridLines: {
						drawBorder: false,
						display: false,
					},
				}],
				xAxes: [{
					position: 'bottom',
					gridLines: {
						drawBorder: false,
						display: false,
					},
					ticks: {
						beginAtZero: false,
						stepSize: 200
					}
				}],

			},
			legend: {
				display: false,
			},
			legendCallback: function (chart) {
				var text = [];
				text.push('<ul class="' + chart.id + '-legend">');
				for (var i = 0; i < chart.data.datasets.length; i++) {
					text.push('<li><span class="legend-box" style="background:' + chart.data.datasets[i].borderColor + ';"></span><span class="legend-label" style="">');
					if (chart.data.datasets[i].label) {
						text.push(chart.data.datasets[i].label);
					}
					text.push('</span></li>');
				}
				text.push('</ul>');
				return text.join("");
			},
			elements: {
				point: {
					radius: 0
				},
				line: {
					tension: 0
				}
			},
			tooltips: {
				backgroundColor: 'rgba(2, 171, 254, 1)',
			},
			plugins: {
				datalabels: {
					display: false,
					align: 'center',
					anchor: 'center'
				}
			}

		};
		if ($("#serveLoading").length) {
			var lineChartCanvas = $("#serveLoading").get(0).getContext("2d");
			var saleschart = new Chart(lineChartCanvas, {
				type: 'line',
				data: serveLoadingData,
				options: serveLoadingOptions
			});
			document.getElementById('serveLoading-legend').innerHTML = saleschart.generateLegend();
		}
		var dataManagedData = {
			labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "No", "Dec"],
			datasets: [{
				label: 'Margin',
				data: [45, 45, 70, 70, 50, 50, 70, 60, 65, 60, 55, 55],
				backgroundColor: [
					'#0ddbb9',
				],
				borderColor: [
					'#0ddbb9'
				],
				borderWidth: 2,
				fill: false,
			},
			{
				label: 'Product',
				borderDash: [3, 4],
				data: [35, 35, 60, 60, 40, 40, 60, 50, 55, 50, 45, 45],
				borderColor: [
					'#464dee',
				],
				borderWidth: 2,
				fill: false,
				pointBorderWidth: 4,
			},
			{
				label: 'Cost',
				data: [25, 25, 50, 50, 30, 30, 50, 40, 45, 40, 35, 35],
				borderColor: [
					'#ee5b5b',
				],
				borderWidth: 2,
				fill: false,
				pointBorderWidth: 4,
			}
			],
		};
		var dataManagedOptions = {
			scales: {
				yAxes: [{
					display: true,
					gridLines: {
						drawBorder: false,
						display: false,
					},
				}],
				xAxes: [{
					position: 'bottom',
					gridLines: {
						drawBorder: false,
						display: false,
					},
					ticks: {
						beginAtZero: false,
						stepSize: 200
					}
				}],
			},
			legend: {
				display: false,
			},
			legendCallback: function (chart) {
				var text = [];
				text.push('<ul class="' + chart.id + '-legend">');
				for (var i = 0; i < chart.data.datasets.length; i++) {
					text.push('<li><span class="legend-box" style="background:' + chart.data.datasets[i].borderColor + ';"></span><span class="legend-label" style="">');
					if (chart.data.datasets[i].label) {
						text.push(chart.data.datasets[i].label);
					}
					text.push('</span></li>');
				}
				text.push('</ul>');
				return text.join("");
			},
			elements: {
				point: {
					radius: 0
				},
				line: {
					tension: 0
				}
			},
			tooltips: {
				backgroundColor: 'rgba(2, 171, 254, 1)',
			},
			plugins: {
				datalabels: {
					display: false,
					align: 'center',
					anchor: 'center'
				}
			}
		};
		if ($("#dataManaged").length) {
			var lineChartCanvas = $("#dataManaged").get(0).getContext("2d");
			var saleschart = new Chart(lineChartCanvas, {
				type: 'line',
				data: dataManagedData,
				options: serveLoadingOptions
			});
			document.getElementById('dataManaged-legend').innerHTML = saleschart.generateLegend();
		}
		var salesTraficData = {
			labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "No", "Dec"],
			datasets: [{
				label: 'Margin',
				data: [45, 45, 70, 70, 50, 50, 70, 60, 65, 60, 55, 55],
				backgroundColor: [
					'#0ddbb9',
				],
				borderColor: [
					'#0ddbb9'
				],
				borderWidth: 2,
				fill: false,
			},
			{
				label: 'Product',
				borderDash: [3, 4],
				data: [35, 35, 60, 60, 40, 40, 60, 50, 55, 50, 45, 45],
				borderColor: [
					'#464dee',
				],
				borderWidth: 2,
				fill: false,
				pointBorderWidth: 4,
			},
			{
				label: 'Cost',
				data: [25, 25, 50, 50, 30, 30, 50, 40, 45, 40, 35, 35],
				borderColor: [
					'#ee5b5b',
				],
				borderWidth: 2,
				fill: false,
				pointBorderWidth: 4,
			}
			],
		};
		var salesTraficOptions = {
			scales: {
				yAxes: [{
					display: true,
					gridLines: {
						drawBorder: false,
						display: false,
					},
				}],
				xAxes: [{
					position: 'bottom',
					gridLines: {
						drawBorder: false,
						display: false,
					},
					ticks: {
						beginAtZero: false,
						stepSize: 200
					}
				}],

			},
			legend: {
				display: false,
			},
			legendCallback: function (chart) {
				var text = [];
				text.push('<ul class="' + chart.id + '-legend">');
				for (var i = 0; i < chart.data.datasets.length; i++) {
					text.push('<li><span class="legend-box" style="background:' + chart.data.datasets[i].borderColor + ';"></span><span class="legend-label" style="">');
					if (chart.data.datasets[i].label) {
						text.push(chart.data.datasets[i].label);
					}
					text.push('</span></li>');
				}
				text.push('</ul>');
				return text.join("");
			},
			elements: {
				point: {
					radius: 0
				},
				line: {
					tension: 0
				}
			},
			tooltips: {
				backgroundColor: 'rgba(2, 171, 254, 1)',
			},
			plugins: {
				datalabels: {
					display: false,
					align: 'center',
					anchor: 'center'
				}
			}

		};
		if ($("#salesTrafic").length) {
			var lineChartCanvas = $("#salesTrafic").get(0).getContext("2d");
			var saleschart = new Chart(lineChartCanvas, {
				type: 'line',
				data: salesTraficData,
				options: salesTraficOptions
			});
			document.getElementById('salesTrafic-legend').innerHTML = saleschart.generateLegend();
		}

		var visitorsTodayData = {
			labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug"],
			datasets: [
				{
					label: 'Cost',
					data: [15, 25, 20, 18, 24, 20, 16, 20],
					backgroundColor: [
						'rgba(238, 91, 91, .9)',
					],
					borderColor: [
						'#ee5b5b',
					],
					borderWidth: 2,
					fill: true,
					pointBorderWidth: 4,
				},
				{
					label: 'Product',
					data: [20, 30, 25, 23, 29, 25, 21, 25],
					backgroundColor: [
						'rgba(70, 77, 238, 1)',
					],
					borderColor: [
						'#464dee',
					],
					borderWidth: 2,
					fill: true,
					pointBorderWidth: 4,
				},
				{
					label: 'Margin',
					data: [25, 35, 30, 28, 33, 30, 26, 30],
					backgroundColor: [
						'rgba(81, 225, 195, .9)',
					],
					borderColor: [
						'#51e1c3'
					],
					borderWidth: 2,
					fill: true,
				},
			],
		};
		var visitorsTodayOptions = {
			scales: {
				yAxes: [{
					display: false,
					gridLines: {
						drawBorder: false,
						display: false,
					},
				}],
				xAxes: [{
					position: 'bottom',
					display: true,
					gridLines: {
						drawBorder: false,
						display: true,
						color: "#f2f2f2",
						borderDash: [8, 4],
					},
					ticks: {
						beginAtZero: false,
						stepSize: 200
					}
				}],
			},
			legend: {
				display: false,
			},
			elements: {
				point: {
					radius: 0
				},
			},
			plugins: {
				datalabels: {
					display: false,
					align: 'center',
					anchor: 'center'
				}
			}
		};
		if ($("#visitorsToday").length) {
			var lineChartCanvas = $("#visitorsToday").get(0).getContext("2d");
			var saleschart = new Chart(lineChartCanvas, {
				type: 'line',
				data: visitorsTodayData,
				options: visitorsTodayOptions
			});
		}
		if ($('#circleProgress1').length) {
			var bar = new ProgressBar.Circle(circleProgress1, {
				color: '#0aadfe',
				strokeWidth: 10,
				trailWidth: 10,
				easing: 'easeInOut',
				duration: 1400,
				width: 42,
			});
			bar.animate(.18); // Number from 0.0 to 1.0
		}
		if ($('#circleProgress2').length) {
			var bar = new ProgressBar.Circle(circleProgress2, {
				color: '#fa424a',
				strokeWidth: 10,
				trailWidth: 10,
				easing: 'easeInOut',
				duration: 1400,
				width: 42,

			});
			bar.animate(.36); // Number from 0.0 to 1.0
		}
		var newClientData = {
			labels: ["Jan", "Feb", "Mar", "Apr", "May"],
			datasets: [{
				label: 'Margin',
				data: [35, 37, 34, 36, 32],
				backgroundColor: [
					'#f7f7f7',
				],
				borderColor: [
					'#dcdcdc'
				],
				borderWidth: 2,
				fill: true,
			},],
		};
		var newClientOptions = {
			scales: {
				yAxes: [{
					display: false,
				}],
				xAxes: [{
					display: false,
				}],
			},
			legend: {
				display: false,
			},
			elements: {
				point: {
					radius: 0
				},
			},
			plugins: {
				datalabels: {
					display: false,
					align: 'center',
					anchor: 'center'
				}
			}
		};
		if ($("#newClient").length) {
			var lineChartCanvas = $("#newClient").get(0).getContext("2d");
			var saleschart = new Chart(lineChartCanvas, {
				type: 'line',
				data: newClientData,
				options: newClientOptions
			});
		}
		var allProductsData = {
			labels: ["Jan", "Feb", "Mar", "Apr", "May"],
			datasets: [{
				label: 'Margin',
				data: [37, 36, 37, 35, 36],
				backgroundColor: [
					'#f7f7f7',
				],
				borderColor: [
					'#dcdcdc'
				],
				borderWidth: 2,
				fill: true,
			},],
		};
		var allProductsOptions = {
			scales: {
				yAxes: [{
					display: false,
				}],
				xAxes: [{
					display: false,
				}],
			},
			legend: {
				display: false,
			},
			elements: {
				point: {
					radius: 0
				},
			},
			plugins: {
				datalabels: {
					display: false,
					align: 'center',
					anchor: 'center'
				}
			}

		};
		if ($("#allProducts").length) {
			var lineChartCanvas = $("#allProducts").get(0).getContext("2d");
			var saleschart = new Chart(lineChartCanvas, {
				type: 'line',
				data: allProductsData,
				options: allProductsOptions
			});
		}
		var invoicesData = {
			labels: ["Jan", "Feb", "Mar", "Apr", "May"],
			datasets: [{
				label: 'Margin',
				data: [35, 37, 34, 36, 32],
				backgroundColor: [
					'#f7f7f7',
				],
				borderColor: [
					'#dcdcdc'
				],
				borderWidth: 2,
				fill: true,
			},],
		};
		var invoicesOptions = {
			scales: {
				yAxes: [{
					display: false,
				}],
				xAxes: [{
					display: false,
				}],
			},
			legend: {
				display: false,
			},
			elements: {
				point: {
					radius: 0
				},
			},
			plugins: {
				datalabels: {
					display: false,
					align: 'center',
					anchor: 'center'
				}
			}

		};
		if ($("#invoices").length) {
			var lineChartCanvas = $("#invoices").get(0).getContext("2d");
			var saleschart = new Chart(lineChartCanvas, {
				type: 'line',
				data: invoicesData,
				options: invoicesOptions
			});
		}
		var projectsData = {
			labels: ["Jan", "Feb", "Mar", "Apr", "May"],
			datasets: [{
				label: 'Margin',
				data: [38, 39, 37, 40, 36],
				backgroundColor: [
					'#f7f7f7',
				],
				borderColor: [
					'#dcdcdc'
				],
				borderWidth: 2,
				fill: true,
			},],
		};
		var projectsOptions = {
			scales: {
				yAxes: [{
					display: false,
				}],
				xAxes: [{
					display: false,
				}],
			},
			legend: {
				display: false,
			},
			elements: {
				point: {
					radius: 0
				},
			},
			plugins: {
				datalabels: {
					display: false,
					align: 'center',
					anchor: 'center'
				}
			}
		};
		if ($("#projects").length) {
			var lineChartCanvas = $("#projects").get(0).getContext("2d");
			var saleschart = new Chart(lineChartCanvas, {
				type: 'line',
				data: projectsData,
				options: projectsOptions
			});
		}
		var orderRecievedData = {
			labels: ["Jan", "Feb", "Mar", "Apr", "May"],
			datasets: [{
				label: 'Margin',
				data: [35, 37, 34, 36, 32],
				backgroundColor: [
					'#f7f7f7',
				],
				borderColor: [
					'#dcdcdc'
				],
				borderWidth: 2,
				fill: true,
			},],
		};
		var orderRecievedOptions = {
			scales: {
				yAxes: [{
					display: false,
				}],
				xAxes: [{
					display: false,
				}],
			},
			legend: {
				display: false,
			},
			elements: {
				point: {
					radius: 0
				},
			},
			plugins: {
				datalabels: {
					display: false,
					align: 'center',
					anchor: 'center'
				}
			}

		};
		if ($("#orderRecieved").length) {
			var lineChartCanvas = $("#orderRecieved").get(0).getContext("2d");
			var saleschart = new Chart(lineChartCanvas, {
				type: 'line',
				data: orderRecievedData,
				options: orderRecievedOptions
			});
		}
		var transactionsData = {
			labels: ["Jan", "Feb", "Mar", "Apr", "May"],
			datasets: [{
				label: 'Margin',
				data: [38, 35, 36, 38, 34],
				backgroundColor: [
					'#f7f7f7',
				],
				borderColor: [
					'#dcdcdc'
				],
				borderWidth: 2,
				fill: true,
			},],
		};
		var transactionsOptions = {
			scales: {
				yAxes: [{
					display: false,
				}],
				xAxes: [{
					display: false,
				}],
			},
			legend: {
				display: false,
			},
			elements: {
				point: {
					radius: 0
				},
			},
			plugins: {
				datalabels: {
					display: false,
					align: 'center',
					anchor: 'center'
				}
			}
		};
		if ($("#transactions").length) {
			var lineChartCanvas = $("#transactions").get(0).getContext("2d");
			var saleschart = new Chart(lineChartCanvas, {
				type: 'line',
				data: transactionsData,
				options: transactionsOptions
			});
		}
		var supportTrackerData = {
			labels: ["Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec",],
			datasets: [{
				label: 'New Tickets',
				data: [640, 750, 500, 400, 1200, 650, 550, 450, 400],
				backgroundColor: [
					'#464dee', '#464dee', '#464dee', '#464dee', '#464dee', '#464dee', '#464dee', '#464dee', '#464dee',
				],
				borderColor: [
					'#464dee', '#464dee', '#464dee', '#464dee', '#464dee', '#464dee', '#464dee', '#464dee', '#464dee',
				],
				borderWidth: 1,
				fill: false
			},
			{
				label: 'Open Tickets',
				data: [800, 550, 700, 600, 1100, 650, 550, 650, 850],
				backgroundColor: [
					'#d8d8d8', '#d8d8d8', '#d8d8d8', '#d8d8d8', '#d8d8d8', '#d8d8d8', '#d8d8d8', '#d8d8d8', '#d8d8d8',
				],
				borderColor: [
					'#d8d8d8', '#d8d8d8', '#d8d8d8', '#d8d8d8', '#d8d8d8', '#d8d8d8', '#d8d8d8', '#d8d8d8', '#d8d8d8',
				],
				borderWidth: 1,
				fill: false
			}
			]
		};
		var supportTrackerOptions = {
			scales: {
				xAxes: [{
					stacked: true,
					barPercentage: 0.6,
					position: 'bottom',
					display: true,
					gridLines: {
						display: false,
						drawBorder: false,
					},
					ticks: {
						display: true, //this will remove only the label
						stepSize: 300,
					}
				}],
				yAxes: [{
					stacked: true,
					display: true,
					gridLines: {
						drawBorder: false,
						display: true,
						color: "#f0f3f6",
						borderDash: [8, 4],
					},
					ticks: {
						beginAtZero: true,
						callback: function (value, index, values) {
							return '$' + value;
						}
					},
				}]
			},
			legend: {
				display: false
			},
			legendCallback: function (chart) {
				var text = [];
				text.push('<ul class="' + chart.id + '-legend">');
				for (var i = 0; i < chart.data.datasets.length; i++) {
					text.push('<li><span class="legend-box" style="background:' + chart.data.datasets[i].backgroundColor[i] + ';"></span><span class="legend-label text-dark">');
					if (chart.data.datasets[i].label) {
						text.push(chart.data.datasets[i].label);
					}
					text.push('</span></li>');
				}
				text.push('</ul>');
				return text.join("");
			},
			tooltips: {
				backgroundColor: 'rgba(0, 0, 0, 1)',
			},
			plugins: {
				datalabels: {
					display: false,
					align: 'center',
					anchor: 'center'
				}
			}
		};
		if ($("#supportTracker").length) {
			var barChartCanvas = $("#supportTracker").get(0).getContext("2d");
			// This will get the first returned node in the jQuery collection.
			var barChart = new Chart(barChartCanvas, {
				type: 'bar',
				data: supportTrackerData,
				options: supportTrackerOptions
			});
			document.getElementById('support-tracker-legend').innerHTML = barChart.generateLegend();
		}
		var productorderGage = new JustGage({
			id: 'productorder-gage',
			value: 3245,
			min: 0,
			max: 5000,
			hideMinMax: true,
			symbol: 'K',
			label: 'You have done 57.6% more ordes today',
			valueFontColor: "#001737",
			labelFontColor: "#001737",
			gaugeWidthScale: 0.3,
			counter: true,
			relativeGaugeSize: true,
			gaugeColor: "#f0f0f0",
			levelColors: ["#fcd53b"]
		});
		$("#productorder-gage").append('<div class="product-order"><div class="icon-inside-circle"><i class="mdi mdi-basket"></i></div></div>');

		// Remove pro banner on close
		document.querySelector('#bannerClose').addEventListener('click', function () {
			$('#pro-banner').slideUp();
		});
	});
})(jQuery);

var base_url = $("#base_url").val();
function getCoordinates() {
	var locationName = document.getElementById("address").value;
	fetch('https://nominatim.openstreetmap.org/search?format=json&q=' + locationName)
		.then(response => response.json())
		.then(data => {
			if (data.length > 0) {
				var latitude = data[0].lat;
				var longitude = data[0].lon;
				document.getElementById("latvalue").value = latitude;
				document.getElementById("lonvalue").value = longitude;
				document.getElementById("address").value = data[0].display_name;
			} else {
				$("#address").css("border-color", "red").focus();
			}
		})
		.catch(error => {
			console.error('Error fetching data:', error);
		});
}

$('#hubForm').submit(function (event) {
	event.preventDefault(); // Prevent default form submission

	function validateField(field) {
		if (!field.val()) {
			field.css('border', '1px solid red');
			return false;
		} else {
			field.css('border', '');
			return true;
		}
	}

	// Validate each field
	var isValid = true;
	isValid &= validateField($('#hubname'));
	isValid &= validateField($('#address'));
	isValid &= validateField($('#latvalue'));
	isValid &= validateField($('#lonvalue'));
	isValid &= validateField($('#mobilenumber'));
	isValid &= validateField($('#hubarea'));
	isValid &= validateField($('#capacity'));

	// Validate CKEditor fields
	if (!CKEDITOR.instances['description'].getData()) {
		$('#description').next('.cke').css('border', '1px solid red');
		isValid = false;
	} else {
		$('#description').next('.cke').css('border', '');
	}
	if (!CKEDITOR.instances['helpGuide'].getData()) {
		$('#helpGuide').next('.cke').css('border', '1px solid red');
		isValid = false;
	} else {
		$('#helpGuide').next('.cke').css('border', '');
	}

	// If validation fails, stop form submission
	if (!isValid) {
		return;
	}
	// Create a FormData object to handle file upload
	var formData = new FormData();

	// Append form data
	formData.append('hubname', $('#hubname').val());
	formData.append('address', $('#address').val());
	formData.append('latvalue', $('#latvalue').val());
	formData.append('lonvalue', $('#lonvalue').val());
	formData.append('mobilenumber', $('#mobilenumber').val());
	formData.append('hubarea', $('#hubarea').val());
	formData.append('capacity', $('#capacity').val());
	formData.append('hub_id', $('#hub_id').val());
	formData.append('hub_image', $('#hub_image').val());

	// Append file input data
	var fileInput = $('#hubImage')[0];
	if (fileInput.files.length > 0) {
		formData.append('hubImage', fileInput.files[0]);
	}

	// Append CKEditor data
	formData.append('description', CKEDITOR.instances['description'].getData());
	formData.append('helpGuide', CKEDITOR.instances['helpGuide'].getData());

	// Send data via AJAX
	$.ajax({
		type: 'POST',
		url: base_url + 'Myhub/add_hub', // Specify your CodeIgniter controller method
		data: formData,
		processData: false, // Required for FormData
		contentType: false, // Required for FormData
		success: function (response) {
			console.log('Data successfully sent!');
			fetchHubSummary();
			// Reset form fields
			$('#hubForm')[0].reset();
			// Clear CKEditor instances
			CKEDITOR.instances['description'].setData('');
			CKEDITOR.instances['helpGuide'].setData('');
			// Optionally, show a success message or redirect to another page
		},
		error: function (xhr, status, error) {
			console.error('Error:', error);
			// Optionally, show an error message to the user
		}
	});
});


function fetchHubSummary() {
	$.ajax({
		url: base_url + 'Myhub/Hubsummary', // Specify the URL of your hubsummary.php file
		type: 'GET',
		dataType: 'json', // Assuming your PHP script returns JSON data
		success: function (data) {
			if (data && data.length > 0) {
				var content = '';
				var content2 = '';

				// Loop through the data and add rows to the table
				for (var i = 0; i < data.length; i++) {
					content += '<tr>';
					content += '<td>' + data[i].hubname + '</td>';
					content += '<td>' + data[i].capacity + '</td>';
					content += '<td>' + '100% <i class="mdi mdi-arrow-up"></i>' + '</td>';
					content += '<td>' + '<label class="badge badge-success">On</label>' + '</td>';
					content += '</tr>';

					content2 += '<tr>';
					content2 += '<td>' + data[i].hubname + '</td>';
					content2 += '<td>' + data[i].address + '</td>';
					content2 += '<td>' + data[i].mobilenumber + '</td>';
					content2 += '<td>' + data[i].hubarea + '</td>';
					content2 += '<td>' + data[i].capacity + '</td>';
					content2 += '<td>';
					content2 += '<div class="input-group-prepend">';
					content2 += '<button class="btn btn-sm btn-outline-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Actions</button>';
					content2 += '<div class="dropdown-menu" id="dropbox'+data[i].id+'">';
					content2 += '<a class="dropdown-item" href="#" onclick="viewDetail(' + data[i].id + ')">View Detail</a>';
					content2 += '<a class="dropdown-item" href="#" onclick="editHub(' + data[i].id + ')">Edit</a>';
					content2 += '<a class="dropdown-item" href="#" onclick="deleteHub(' + data[i].id + ')">Delete</a>';
					content2 += '<a class="dropdown-item" href="javascript:void(0)" onclick="addPricing(' + data[i].id + ')">Add Pricing</a>';
					content2 += '</div>';
					content2 += '</div>';

					content2 += '</td>';
					content2 += '</tr>';
				}

				// Set the content of the element with ID "hubsummary"
				$("#hubsummary").html(content);
				$("#hubdetaillist").html(content2);
			} else {
				// Handle case when no data is returned
				$("#hubsummary").html('<p>No data available</p>');
				$("#hubdetaillist").html('<p>No data available</p>');
			}
		},
		error: function (xhr, status, error) {
			console.error('Error:', error);
			// Optionally, show an error message to the user
		}
	});
}

// Define the functions for the dropdown actions
function viewDetail(id) {
	// Implement the view detail logic here
	console.log('View detail for ID:', id);
}

function editHub(id) {
    // AJAX request to fetch hub details by ID
    $.ajax({
        url: base_url + 'Myhub/get_hub_details', // Specify the URL of your controller method to fetch hub details
        type: 'POST',
        data: { id: id },
        dataType: 'json',
        success: function(response) {
            // Populate the form fields with the retrieved data
            $('#hubname').val(response.hubname);
            $('#address').val(response.address);
            $('#latvalue').val(response.latvalue);
            $('#lonvalue').val(response.lonvalue);
            $('#mobilenumber').val(response.mobilenumber);
            $('#hubarea').val(response.hubarea);
            $('#capacity').val(response.capacity);
            $('#hub_image').val(response.hub_image);
            $('#hub_id').val(response.id);
			CKEDITOR.instances['description'].setData(response.description);
            CKEDITOR.instances['helpGuide'].setData(response.helpGuide);
        },
        error: function(xhr, status, error) {
            console.error('Error:', error);
            // Handle error
        }
    });
}


function deleteHub(id) {
	// Implement the delete logic here
	console.log('Delete hub with ID:', id);
}

function addPricing(id) {
	// Implement the add pricing logic here
	$.ajax({
        url: base_url + 'Myhub/get_pricing_details', // Specify the URL of your controller method to fetch hub details
        type: 'POST',
        data: { id: id },
        dataType: 'json',
        success: function(response) {
            // Populate the form fields with the retrieved data
			var res = response;
			if(res.row){
				$('#hourlyPrice1').val(res.row.hourlyPrice1);
				$('#dailyPrice1').val(res.row.dailyPrice1);
				$('#hourlyPrice2').val(res.row.hourlyPrice2);
				$('#dailyPrice2').val(res.row.dailyPrice2);
				$('#hourlyPrice3').val(res.row.hourlyPrice3);
				$('#dailyPrice3').val(res.row.dailyPrice3);
				$('#hourlyPrice4').val(res.row.hourlyPrice4);
				$('#dailyPrice4').val(res.row.dailyPrice4);
				$('#premiumServiceRate1').val(res.row.premiumServiceRate1);
				$('#premiumServiceRate2').val(res.row.premiumServiceRate2);
				$('#premiumServiceRate3').val(res.row.premiumServiceRate3);
			}
			
			$('#hub_id').val(id);
			$("#addPricingModal").modal("show");
			console.log('Add pricing for ID:', id);
        },
        error: function(xhr, status, error) {
            console.error('Error:', error);
            // Handle error
        }
    });
	
}

$('#pricingForm').submit(function(event) {
    event.preventDefault(); // Prevent default form submission

    // Get form data
    var formData = {
        hub_id: $('#hub_id').val(),
                // Add new input fields to the formData object
        hourlyPrice1: $('#hourlyPrice1').val(),
        dailyPrice1: $('#dailyPrice1').val(),
        hourlyPrice2: $('#hourlyPrice2').val(),
        dailyPrice2: $('#dailyPrice2').val(),
        hourlyPrice3: $('#hourlyPrice3').val(),
        dailyPrice3: $('#dailyPrice3').val(),
        hourlyPrice4: $('#hourlyPrice4').val(),
        dailyPrice4: $('#dailyPrice4').val(),
        premiumServiceRate1: $('#premiumServiceRate1').val(),
        premiumServiceRate2: $('#premiumServiceRate2').val(),
        premiumServiceRate3: $('#premiumServiceRate3').val()
        // Add more fields as needed
    };

    // Send data via AJAX
    $.ajax({
        type: 'POST',
        url: base_url + 'Myhub/addPricing', // Specify your CodeIgniter controller URL
        data: formData,
        success: function(response) {
            console.log('Data successfully sent!');
            // Optionally, show a success message or redirect to another page
        },
        error: function(xhr, status, error) {
            console.error('Error:', error);
            // Optionally, show an error message to the user
        }
    });
});

$('#userForm').submit(function(event) {
    event.preventDefault(); // Prevent the default form submission

    var formData = new FormData();
	formData.append('full_name', $('#full_name').val());
	formData.append('user_id', $('#user_id').val());
	formData.append('prev_identity', $('#prev_identity').val());
	formData.append('prev_profile_pic', $('#prev_profile_pic').val());
	formData.append('about', $('#about').val());
	formData.append('email', $('#email').val());
	formData.append('mobilenumber', $('#mobilenumber').val());
	formData.append('identity', $('#identity').val());
	formData.append('profile_pic', $('#profile_pic').val());
	formData.append('established_date', $('#established_date').val());
    
	var fileInput = $('#identity')[0];
	if (fileInput.files.length > 0) {
		formData.append('identity', fileInput.files[0]);
	}

	var fileInput = $('#profile_pic')[0];
	if (fileInput.files.length > 0) {
		formData.append('profile_pic', fileInput.files[0]);
	}

    $.ajax({
        type: 'POST',
        url: base_url + 'Adminprofile/update_user', // Update with your controller URL
        data: formData,
        contentType: false,
        processData: false,
        success: function(response) {
            console.log('Data successfully updated!');
            // Optionally, show a success message or redirect to another page
        },
        error: function(xhr, status, error) {
            console.error('Error:', error);
            // Optionally, show an error message to the user
        }
    });
});

function changeStatus(bookingId, status) {
    // Your AJAX call to update the booking status
    $.ajax({
        url: base_url+'Bookings/update_booking_status', // Update with your URL
        type: 'POST',
        data: {
            booking_id: bookingId,
            status: status
        },
        success: function(response) {
            // Handle success response
            // alert('Status updated successfully!');
			$("#booking_status"+bookingId).html(status);
			$("#dropdown"+bookingId).removeClass('show');
        },
        error: function(xhr, status, error) {
            // Handle error response
            alert('Error updating status!');
        }
    });
}