  <script src="{{ asset('assets/libs/jquery/dist/jquery.min.js') }}"></script>
  <script src="{{ asset('assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('assets/js/sidebarmenu.js') }}"></script>
  <script src="{{ asset('assets/js/app.min.js') }}"></script>
  <script src="{{ asset('assets/libs/apexcharts/dist/apexcharts.min.js') }}"></script>
  <script src="{{ asset('assets/libs/simplebar/dist/simplebar.js') }}"></script>
  <script src="{{ asset('assets/js/dashboard.js') }}"></script>

  <!-- jQuery -->
  <script src="{{ asset('assets/bower_components/jquery/dist/jquery.min.js') }}"></script>
  <!-- Bootstrap Core JavaScript -->
  <script src="{{ asset('assets/bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>

  <!-- Metis Menu Plugin JavaScript -->
  <script src="{{ asset('assets/bower_components/metisMenu/dist/metisMenu.min.js') }}"></script>

  <!-- Custom Theme JavaScript -->
  <script src="{{ asset('assets/bower_components/dist/js/sb-admin-2.js') }}"></script>
  <script src="{{ asset('assets/bower_components/moment.js') }}"></script>
  <script src="{{ asset('assets/bower_components/daterangepicker.js') }}"></script>
  <script src="{{ asset('assets/bower_components/js/jquery.doubleScroll.js') }}"></script>
  <script src="{{ asset('assets/bower_components/js/chzn/chosen.jquery.js') }}"></script>

  <!-- jQuery -->
  <script src="{{ asset('assets/bower_components/jquery/dist/jquery.min.js') }}"></script>
  <!-- Bootstrap Core JavaScript -->
  <script src="{{ asset('assets/bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>

  <!-- Metis Menu Plugin JavaScript -->
  <script src="{{ asset('assets/bower_components/metisMenu/dist/metisMenu.min.js') }}"></script>

  <!-- Custom Theme JavaScript -->
  <script src="{{ asset('assets/bower_components/dist/js/sb-admin-2.js') }}"></script>
  <script src="{{ asset('assets/bower_components/moment.js') }}"></script>
  <script src="{{ asset('assets/bower_components/daterangepicker.js') }}"></script>
  <script src="{{ asset('assets/bower_components/js/jquery.doubleScroll.js') }}"></script>
  <script src="{{ asset('assets/bower_components/js/chzn/chosen.jquery.js') }}"></script>

  <script src="{{ asset('js/chart/code/highcharts.js') }}"></script>
  <script src="{{ asset('js/chart/code/modules/exporting.js') }}"></script>
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

  <!-- Tambahkan script JavaScript untuk eksport PDF, EXCEL, SVG -->
  <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
  <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/buttons/2.4.1/js/dataTables.buttons.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
  <script src="https://cdn.datatables.net/buttons/2.4.1/js/buttons.html5.min.js"></script>
  <script src="https://cdn.datatables.net/buttons/2.4.1/js/buttons.print.min.js"></script>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <!-- Include Bootstrap JS -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
  
  <script>
      document.addEventListener('DOMContentLoaded', function() {
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
                                      color: (Highcharts.theme && Highcharts.theme
                                          .contrastTextColor) || 'black'
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
          $('#dtHorizontalVerticalExample').DataTable({
              "scrollX": true,
              dom: 'Bfrtip',
              buttons: [
                  'csv', 'excel', 'pdf'
              ]
          });
          $('.dataTables_length').addClass('bs-select');
      });

      new DataTable('#example', {
          "scrollX": true,
      });
  </script>

  <script>
      // Panggil datepicker
      $(document).ready(function() {
          $('.datepicker').datepicker({
              format: 'yyyy-mm-dd',
              autoclose: true,
              todayHighlight: true,
          });
      });
  </script>

  {{-- filter data karyawan --}}
  {{-- <script>
       // Script untuk mengisi opsi satker berdasarkan pilihan direktorat
    document.getElementById('direktorat').addEventListener('change', function() {
        const selectedDirektoratId = this.value;
        const satkerSelect = document.getElementById('satker');

        // Clear opsi satker sebelumnya
        satkerSelect.innerHTML = '<option value="">-- Pilih Satker --</option>';

        // Jika direktorat terpilih, ambil data satker melalui AJAX
        if (selectedDirektoratId) {
            fetch(`/get-satker/${selectedDirektoratId}`)
                .then(response => response.json())
                .then(data => {
                    data.forEach(satker => {
                        const option = document.createElement('option');
                        option.value = satker.satker_id;
                        option.textContent = satker.nama;
                        satkerSelect.appendChild(option);
                    });
                });
        }
    });
  </script> --}}
