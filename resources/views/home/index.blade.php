@extends('layouts.app')

@section('content')
        <!-- page content -->
        <div class="right_col" role="main">
          <!-- top tiles -->
          <div class="row">
                      <div class="animated flipInY col-lg-3 col-md-3 col-sm-6  ">
                        <div class="tile-stats">
                          <div class="icon"><i class="fa fa-users"></i>
                          </div>
                          <div class="count">{{ $data['jml_santri'] }}</div>

                          <h3>Total Santri</h3>
                          <p>Jumlah semua data santri.</p>
                        </div>
                      </div>
                      <div class="animated flipInY col-lg-3 col-md-3 col-sm-6  ">
                        <div class="tile-stats">
                          <div class="icon"><i class="fa fa-sort-amount-desc"></i>
                          </div>
                          <div class="count">{{ $data['jml_training'] }}</div>

                          <h3>Total Data Tes</h3>
                          <p>Semua data training.</p>
                        </div>
                      </div>
                      <div class="animated flipInY col-lg-3 col-md-3 col-sm-6  ">
                        <div class="tile-stats">
                          <div class="icon"><i class="fa fa-user"></i>
                          </div>
                          <div class="count">{{ $data['jml_admin'] }}</div>

                          <h3>Data Admin</h3>
                          <p>Jumlah semua data admin.</p>
                        </div>
                      </div>
                      <div class="animated flipInY col-lg-3 col-md-3 col-sm-6  ">
                        <div class="tile-stats">
                          <div class="icon"><i class="fa fa-file-text-o"></i>
                          </div>
                          <div class="count">{{ $data['jml_hasil'] }}</div>

                          <h3>Hasil</h3>
                          <p>Jumlah hasil klasifikasi.</p>
                        </div>
                      </div>
                    </div>
          <!-- /top tiles -->

          <div class="row">
            <div class="col-md-12">
              <div class="x_panel">
                <div class="x_content"> <h1>SISTEM PENDUKUNG KEPUTUSAN PEMILIHAN PENGURUS HARIAN PONDOK PESANTREN</h1> </div>
              </div>
            </div>
          </div>
          <br />

        </div>
        <!-- /page content -->
@endsection