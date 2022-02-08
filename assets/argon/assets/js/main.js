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

// load progress presensi tiap divisi
chartData.forEach(el => {
	buildChart(`#${el.id}`, 'bar', el.data)
});

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

