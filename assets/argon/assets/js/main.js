// Build Chart Each Division

let buildChart = (element, type, data) => {

    var $chart = $(element)

    function initChart($chart) {

		// Create chart
		var chart = new Chart($chart, {
			type,
			data,
		});

		// Save to jQuery object
		$chart.data('chart', chart);
	}


	// Init chart
	if ($chart.length) {
		initChart($chart);
	}
}


let labels = ['Pelatihan 1', 'Pelatihan 2', 'Pelatihan 3', 'Pelatihan 4', 'Pelatihan 5', 'Pelatihan 6', 'Pelatihan 7', 'Pelatihan 8', 'Pelatihan 9', 'Pelatihan 10', 'Pelatihan 11', 'Pelatihan 12']
let dataMember = {
	labels: labels,
	datasets: [
		{
			label: 'Member',
			data: [10, 5, 15, 24, 32, 6, 10, 9, 6, 18, 68, 80]
		}
	]
}
var DivisiMobileChart   = buildChart('#chart-divisi-mobile', 'bar', dataMember)
var DivisiWebChart      = buildChart('#chart-divisi-web', 'bar', dataMember)
var DivisiDesktopChart  = buildChart('#chart-divisi-desktop', 'bar', dataMember)
var DivisiHSpChart      = buildChart('#chart-divisi-hs', 'bar', dataMember)
var DivisiNetworkChart  = buildChart('#chart-divisi-network', 'bar', dataMember)

// detail chart sample
let labelMateri = ['sangat mudah', 'mudah', 'medium', 'sulit', 'sangat sulit']
let dataPie = {
	labels: labelMateri,
	datasets: [
		{
			label: 'Materi',
			data: [1, 2, 10, 6, 10],
			backgroundColor: [
				'rgb(32, 223, 120)', // sangat mudah
				'rgb(47, 245, 138)', // mudah
				'rgb(245, 227, 57)', // medium
				'rgb(245, 192, 57)', // sulit
				'rgb(255, 147, 86)', // sangat sulit
			],
		}
	]
}
let dataPie2 = {
	labels: ['Sangat Seru', 'Seru', 'Biasa', 'Biasa aja', 'B AJA'],
		datasets: [
			{
				label: 'Suasana Kelas',
				data: [24, 2, 10, 6, 1],
				backgroundColor: [
					'rgb(32, 223, 120)', // sangat mudah
					'rgb(47, 245, 138)', // mudah
					'rgb(245, 227, 57)', // medium
					'rgb(245, 192, 57)', // sulit
					'rgb(255, 147, 86)', // sangat sulit
				],
			}
		]
}
var materi = buildChart('#chart-materi', 'pie', dataPie);
var penyampaian = buildChart('#chart-penyampaian', 'pie', dataPie);
var kelas = buildChart('#chart-kelas', 'pie', dataPie2);

// Filepond upload files
// FilePond.registerPlugin(
// 	FilePondPluginImagePreview,
// 	FilePondPluginFileValidateSize,
// );

// FilePond.create(
// 	document.querySelector('#import-data')
// );