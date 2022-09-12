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
        @if (session('status'))
        <div class="col-12">
          <div class="alert alert-success alert-dismissible " role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                <strong>Selamat !</strong> {{ session('status') }}.
          </div>
        </div>
        @endif

        <div class="col-md-12 col-sm-12 ">
            <div class="x_panel">
                  <div class="x_title">
                    <h2>Data Testing</h2>
                    <a href="/data-testing/tambah" class="btn btn-sm btn-primary ml-5">Tambah</a>
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
                              <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                                <thead>
                                  <tr>
                                    <th>Jujur</th>
                                    <th>Wibawa</th>
                                    <th>Hafalan Imriti</th>
                                    <th>Tangkas</th>
                                    <th>Ulet</th>
                                    <th>Disiplin</th>
                                    <th>Pengurus</th>
                                    <th>Aksi</th>
                                  </tr>
                                </thead>
                                @if(count($data) <= 0)
                                  <tr>
                                    <td colspan="10" class="text-center">Tidak Ada Data</td>
                                  </tr>
                                @else
                                <tbody>
                                  @foreach($data as $item)
                                  <tr>
                                    <td>{{ $item->jujur }}</td>
                                    <td>{{ $item->wibawa }}</td>
                                    <td>{{ $item->hafalan_imriti }}</td>
                                    <td>{{ $item->tangkas }}</td>
                                    <td>{{ $item->ulet }}</td>
                                    <td>{{ $item->disiplin }}</td>
                                    <td>{{ $item->keterangan == 1 ? 'Ya' : 'Tidak'  }}</td>
                                    <td class="d-flex">
                                      <a href="/data-testing/{{ $item->id }}/edit" class="btn btn-sm btn-primary"><i class="fa fa-pencil-square"></i></a>
                                      <form action="/data-testing/{{ $item->id }}/delete" method="post">
                                          @method('delete')
                                          @csrf
                                          <button type="submit" class="btn btn-sm btn-danger"><i class="fa fa-trash-o"></i></button>
                                      </form>
                                      </a>
                                    </td>
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