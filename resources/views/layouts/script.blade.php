  <script src="{{asset('assets/libs/jquery/dist/jquery.min.js')}}"></script>
  <script src="{{asset('assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('assets/js/sidebarmenu.js')}}"></script>
  <script src="{{asset('assets/js/app.min.js')}}"></script>
  <script src="{{asset('assets/libs/apexcharts/dist/apexcharts.min.js')}}"></script>
  <script src="{{asset('assets/libs/simplebar/dist/simplebar.js')}}"></script>
  <script src="{{asset('assets/js/dashboard.js')}}"></script>

    <!-- jQuery -->
    <script src="{{asset('assets/bower_components/jquery/dist/jquery.min.js')}}"></script>
     <!-- Bootstrap Core JavaScript -->
    <script src="{{asset('assets/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="{{asset('assets/bower_components/metisMenu/dist/metisMenu.min.js')}}"></script>

    <!-- Custom Theme JavaScript -->
    <script src="{{asset('assets/bower_components/dist/js/sb-admin-2.js')}}"></script>
	<script src="{{asset('assets/bower_components/moment.js')}}"></script>
	<script src="{{asset('assets/bower_components/daterangepicker.js')}}"></script>
	<script src="{{asset('assets/bower_components/js/jquery.doubleScroll.js')}}"></script>
	<script src="{{asset('assets/bower_components/js/chzn/chosen.jquery.js')}}"></script>

     <!-- jQuery -->
     <script src="{{asset('assets/bower_components/jquery/dist/jquery.min.js')}}"></script>
     <!-- Bootstrap Core JavaScript -->
    <script src="{{asset('assets/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="{{asset('assets/bower_components/metisMenu/dist/metisMenu.min.js')}}"></script>

    <!-- Custom Theme JavaScript -->
    <script src="{{asset('assets/bower_components/dist/js/sb-admin-2.js')}}"></script>
	<script src="{{asset('assets/bower_components/moment.js')}}"></script>
	<script src="{{asset('assets/bower_components/daterangepicker.js')}}"></script>
	<script src="{{asset('assets/bower_components/js/jquery.doubleScroll.js')}}"></script>
	<script src="{{asset('assets/bower_components/js/chzn/chosen.jquery.js')}}"></script>

    <script src="{{asset('js/chart/code/highcharts.js')}}"></script>
    <script src="{{asset('js/chart/code/modules/exporting.js')}}"></script>
    <script src="https://code.highcharts.com/highcharts.js"></script>

     <!-- jQuery -->
     <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
     <!-- DataTables JS -->
     <script src="https://cdn.datatables.net/1.11.2/js/jquery.dataTables.min.js"></script>
     <!-- DataTables Bootstrap 4 JS -->
     <script src="https://cdn.datatables.net/1.11.2/js/dataTables.bootstrap4.min.js"></script>

    <!-- Tambahkan script JavaScript untuk Bootstrap dan Bootstrap Datepicker -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-datepicker@1.9.0/dist/js/bootstrap-datepicker.min.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            fetch('/chart-data')
                .then(response => response.json())
                .then(data => {
                    const chart = Highcharts.chart('chartContainer', {
                        chart: {
                            type: 'pie'

                        },
                        title: {
                            text: 'Data Jumlah Pegawai Direktorat Jenderal Cipta Karya'
                        },
                        tooltip: {
								pointFormat: '<b>{point.y:.0f} Pegawai</b>'
								//pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
							},
                        plotOptions: {
								pie: {
									allowPointSelect: true,
									cursor: 'pointer',
									dataLabels: {
										enabled: true,
										format: '<b>{point.name}</b>: {point.y:.0f} Pegawai',
										style: {
											color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
										}
									}
								}
							},
                        series: [{
                            name: 'Pegawai',
                            data: [
                                ['PNS', data.pns],
                                ['Non PNS Pendukung', data.pendukung],
                                ['Non PNS Substansi', data.substansi],
                                ['Bukan Non PNS', data.ki],
                            ]
                        }]
                    });
                });
        });
    </script>

<script>
    $(document).ready(function() {
        $('#data_table').DataTable();
    });
</script>
<script>
    // Panggil datepicker
    $(document).ready(function () {
        $('.datepicker').datepicker({
            format: 'yyyy-mm-dd',
            autoclose: true,
            todayHighlight: true,
        });
    });
</script>

