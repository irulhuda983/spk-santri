@extends('layouts.app')

@section('style')
<link href="cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
<link href="{{ asset('dist/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css') }}" rel="stylesheet">
<link href="{{ asset('dist/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css') }}" rel="stylesheet">
<link href="{{ asset('dist/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css') }}" rel="stylesheet">
<link href="{{ asset('dist/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css') }}" rel="stylesheet">
<link href="{{ asset('dist/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css') }}" rel="stylesheet">
@endsection

@section('content')
<div class="right_col" role="main">
    <div class="row">
        <div class="col-md-12 col-sm-12 ">
          <div class="x_panel">
            <div class="x_title">
                    <h2>Hasil Perhitungan</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a></li>
                    </ul>
                    <div class="clearfix"></div>
              </div>

              <div class="x_content">
                <div class="row">
                  <div class="col-sm-12">
                            <div class="card-box table-responsive">
                              <table class="table table-striped table-bordered" style="width:100%">
                                <thead>
                                  <tr>
                                    <th>No</th>
                                    <th>Jujur</th>
                                    <th>Wibawa</th>
                                    <th>Hafalan Imriti</th>
                                    <th>Tangkas</th>
                                    <th>Ulet</th>
                                    <th>Disiplin</th>
                                    <th>Kesimpulan</th>
                                  </tr>
                                </thead>
                                @if(count($uji) <= 0)
                                  <tr>
                                    <td colspan="10" class="text-center">Tidak Ada Data</td>
                                  </tr>
                                @else
                                <tbody>
                                  <tr>
                                    <td>{{ $uji['nama'] }}</td>
                                    <td>{{ $uji['jujur'] }}</td>
                                    <td>{{ $uji['wibawa'] }}</td>
                                    <td>{{ $uji['hafalan_imriti'] }}</td>
                                    <td>{{ $uji['tangkas'] }}</td>
                                    <td>{{ $uji['ulet'] }}</td>
                                    <td>{{ $uji['disiplin'] }}</td>
                                    <td>{{ $uji['kesimpulan'] == 1 ? 'Pengurus' : 'Tidak Pengurus'  }}</td>
                                  </tr>
                                </tbody>
                                @endif
                              </table>
                            </div>
                  </div>
                </div>
              </div>
          </div>
        </div>
        <div class="col-md-12 col-sm-12 ">
            <div class="x_panel">
                  <div class="x_title">
                    <h2>Hasil Klasifikasi</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a></li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                      <div class="row">
                          <div class="col-sm-12">
                            <div class="card-box table-responsive">
                              <table class="table table-striped table-bordered" style="width:100%">
                                <thead>
                                  <tr>
                                    <th>Rank</th>
                                    <th>Jujur</th>
                                    <th>Wibawa</th>
                                    <th>Hafalan Imriti</th>
                                    <th>Tangkas</th>
                                    <th>Ulet</th>
                                    <th>Disiplin</th>
                                    <th>Jarak</th>
                                  </tr>
                                </thead>
                                @if(count($training) <= 0)
                                  <tr>
                                    <td colspan="10" class="text-center">Tidak Ada Data</td>
                                  </tr>
                                @else
                                <tbody>
                                  @foreach($training as $item)
                                  <tr>
                                    <td>{{ $item['no'] }}</td>
                                    <td>{{ $item['jujur'] }}</td>
                                    <td>{{ $item['wibawa'] }}</td>
                                    <td>{{ $item['hafalan_imriti'] }}</td>
                                    <td>{{ $item['tangkas'] }}</td>
                                    <td>{{ $item['ulet'] }}</td>
                                    <td>{{ $item['disiplin'] }}</td>
                                    <td>{{ $item['jarak']  }}</td>
                                  </tr>
                                  @endforeach
                                </tbody>
                                @endif
                              </table>
                            </div>
                          </div>
                      </div>
                  </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<!-- Datatables -->
<script src="{{ asset('dist/vendors/datatables.net/js/jquery.dataTables.js') }}"></script>
<script src="{{ asset('dist/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js') }}"></script>
<script src="{{ asset('dist/vendors/datatables.net-buttons/js/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('dist/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js') }}"></script>
<script src="{{ asset('dist/vendors/datatables.net-buttons/js/buttons.flash.min.js') }}"></script>
<script src="{{ asset('dist/vendors/datatables.net-buttons/js/buttons.html5.min.js') }}"></script>
<script src="{{ asset('dist/vendors/datatables.net-buttons/js/buttons.print.min.js') }}"></script>
<script src="{{ asset('dist/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js') }}"></script>
<script src="{{ asset('dist/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js') }}"></script>
<script src="{{ asset('dist/vendors/datatables.net-responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('dist/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js') }}"></script>
<script src="{{ asset('dist/vendors/datatables.net-scroller/js/dataTables.scroller.min.js') }}"></script>
<script src="{{ asset('dist/vendors/jszip/dist/jszip.min.js') }}"></script>
<script src="{{ asset('dist/vendors/pdfmake/build/pdfmake.min.js') }}"></script>
<script src="{{ asset('dist/vendors/pdfmake/build/vfs_fonts.js') }}"></script>

@endsection