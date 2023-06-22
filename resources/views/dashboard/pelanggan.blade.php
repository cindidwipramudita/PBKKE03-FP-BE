<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard Pelanggan</title>
</head>
<body>
    <h1>Halo, {{ $user->username }}</h1>

    <form action="{{ route('logout') }}" method="post">
        @csrf
        <button type="submit">Logout</button>
    </form>
    
    <br>
    <h2>Jadwal Kereta</h2>
    <table border="2" cellpadding="4">
        <tr>
            <th>No.</th>
            <th>Nomor Kereta</th>
            <th>Kereta</th>
            <th>Rute</th>
            <th>Asal</th>
            <th>Tujuan</th>
            <th>Waktu Keberangkatan</th>
            <th>Tarif</th>
            <th>Kapasitas</th>
        </tr>

        @foreach ($jadwal_kereta as $jadwal)
            <tr>
                <td>{{ $jadwal->id }}</td>
                <td>{{ $jadwal->nomor_kereta }}</td>
                <td>{{ $jadwal->nama_kereta }}</td>
                <td>{{ $jadwal->rute }}</td>
                <td>{{ $jadwal->asal }}</td>
                <td>{{ $jadwal->tujuan }}</td>
                <td>{{ $jadwal->waktu_keberangkatan }}</td>
                <td>{{ $jadwal->tarif }}</td>
                <td>{{ $jadwal->kapasitas }}</td>
            </tr>    
        @endforeach

    </table>

    <br><br>

    <a href="/pesan-tiket">Pesan Tiket</a>
    
</body>
</html>


{{-- <!DOCTYPE html>
<html lang="en">

  <body>

    <div class="be-wrapper be-fixed-sidebar">


		<!--Log on to codeastro.com for more projects!-->
      <div class="be-content">
        <div class="main-content container-fluid">
          <div class="row">
            
            <div class="col-12 col-lg-6 col-xl-4">
              <a href="{{ route('pass-my-booked-train') }}">
                <div class="widget widget-tile">
                  <div class="chart sparkline"><i class="material-icons">add_shopping_cart</i></div>
                  <div class="data-info">
                    <div class="desc">Booked Train</div>
                  </div>
                </div>
              </a>
            </div>
            <div class="col-12 col-lg-6 col-xl-4">
              <a href="{{ route('pass-cancel-train') }}">
                  <div class="widget widget-tile">
                    <div class="chart sparkline"><i class ="material-icons">backspace</i></div>
                    <div class="data-info">
                      <div class="desc">Cancel Booking</div>
                    </div>
                  </div>
              </a>
            </div>
			<!--Log on to codeastro.com for more projects!-->
            <div class="col-12 col-lg-6 col-xl-4">
              <a href="{{ route('pass-print-ticket') }}">
                <div class="widget widget-tile">
                  <div class="chart sparkline" ><i class ="material-icons">burst_mode</i></div>
                  <div class="data-info">
                    <div class="desc">Tickets</div>
                  </div>
                </div>
              </a>
            </div>
            
          </div>
          <div class="row">
            <div class="col-sm-12">
              <div class="card card-table">
                <div class="card-header">Available Trains
                
                  <div class="tools dropdown"><span class=""></span><a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown"><span class=""></span></a>
                    
                  </div>
                </div>
                <div class="card-body">
                <!--Start Table-->
                  <table class="table table-striped table-bordered table-hover table-fw-widget" id="table1">
                    <thead class="thead-dark">
                    <tr>
            <th>No.</th>
            <th>Nomor Kereta</th>
            <th>Kereta</th>
            <th>Rute</th>
            <th>Asal</th>
            <th>Tujuan</th>
            <th>Waktu Keberangkatan</th>
            <th>Tarif</th>
            <th>Kapasitas</th>
        </tr>
                    </thead>
                    <tbody>
                      @foreach ($trains as $train)
                      <tr>
                <td>{{ $jadwal->id }}</td>
                <td>{{ $jadwal->nomor_kereta }}</td>
                <td>{{ $jadwal->nama_kereta }}</td>
                <td>{{ $jadwal->rute }}</td>
                <td>{{ $jadwal->asal }}</td>
                <td>{{ $jadwal->tujuan }}</td>
                <td>{{ $jadwal->waktu_keberangkatan }}</td>
                <td>{{ $jadwal->tarif }}</td>
                <td>{{ $jadwal->kapasitas }}</td>
            </tr>    
                      @endforeach
                    </tbody>
                  </table>
                  <!--eND Table-->
                </div>
              </div>
            </div>
          </div>
         <!--Log on to codeastro.com for more projects!-->
        </div>
        <!--footer-->
        @include('assets/inc/footer')
        <!--EndFooter-->
      </div>
     
    </div>

    <script src="{{ asset('assets/lib/jquery/jquery.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/lib/perfect-scrollbar/js/perfect-scrollbar.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/lib/bootstrap/dist/js/bootstrap.bundle.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/js/app.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/lib/jquery-flot/jquery.flot.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/lib/jquery-flot/jquery.flot.pie.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/lib/jquery-flot/jquery.flot.time.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/lib/jquery-flot/jquery.flot.resize.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/lib/jquery-flot/plugins/jquery.flot.orderBars.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/lib/jquery-flot/plugins/curvedLines.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/lib/jquery-flot/plugins/jquery.flot.tooltip.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/lib/jquery.sparkline/jquery.sparkline.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/lib/countup/countUp.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/lib/jquery-ui/jquery-ui.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/lib/jqvmap/jquery.vmap.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/lib/jqvmap/maps/jquery.vmap.world.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/lib/datatables/datatables.net/js/jquery.dataTables.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/lib/datatables/datatables.net-bs4/js/dataTables.bootstrap4.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/lib/datatables/datatables.net-buttons/js/dataTables.buttons.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/lib/datatables/datatables.net-buttons/js/buttons.flash.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/lib/datatables/jszip/jszip.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/lib/datatables/pdfmake/pdfmake.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/lib/datatables/pdfmake/vfs_fonts.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/lib/datatables/datatables.net-buttons/js/buttons.colVis.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/lib/datatables/datatables.net-buttons/js/buttons.print.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/lib/datatables/datatables.net-buttons/js/buttons.html5.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/lib/datatables/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/lib/datatables/datatables.net-responsive/js/dataTables.responsive.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/lib/datatables/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js') }}" type="text/javascript"></script>
    
    <script type="text/javascript">
      $(document).ready(function(){
      	//-initialize the javascript
      	App.init();
      	App.dashboard();
      
      });
    </script>
  </body>
</html> --}}