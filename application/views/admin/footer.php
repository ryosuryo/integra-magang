<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="<?php echo base_url("assets/bootstrap/js/bootstrap.min.js") ?>"></script>
<script>
	$(document).ready(function(){
		$("#sidebarCollapse").on('click',function(){
			$("#sidebar").toggleClass('active');
		})
	})
</script>
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>
<!-- membuat javascript untuk membuat menu collapse di mobile -->
<script src="<?php echo base_url ("assets/bootstrap/js/collapse.js") ?>"> </script>


<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap.min.js"></script>
<script>
	$(document).ready(function() {
    $('#example').DataTable();
} );
	
</script>

<?php 
$data_grafik = grafik();
 ?>
<script>
	
	Highcharts.chart('container', {
		chart: {
			type: 'column'
		},
		title: {
			text: ' Grafik Magang <?php echo date("Y"); ?>'
		},

		xAxis: {
			categories: [
			'Jan',
			'Feb',
			'Mar',
			'Apr',
			'May',
			'Jun',
			'Jul',
			'Aug',
			'Sep',
			'Oct',
			'Nov',
			'Dec'
			],
			crosshair: true
		},
		yAxis: {
			allowDecimals: false,
			title: {
				text: 'Jumlah (orang)'
			}
		},
		tooltip: {
			headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
			pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
			'<td style="padding:0"><b>{point.y:.1f} orang</b></td></tr>',
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
			name: 'Bulan',
			data: [
			<?php foreach ($data_grafik as $key => $value): ?>
				<?php echo $value ?>,
			<?php endforeach ?>
			]
		}]
		});
	</script>
</body>
</html>