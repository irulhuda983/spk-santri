<div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.html" class="site_title"><span>SPK SANTRI</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="{{ asset('dist/images/img.jpg') }}" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2>{{ request()->user()->nama }}</h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>Live On</h3>
                <ul class="nav side-menu">
                  <li class="@if(request()->segment(1) == '') active @endif"><a href="/"><i class="fa fa-home"></i> Home</a></li>
                  <li class="@if(request()->segment(1) == 'klasifikasi') active @endif"><a href="/klasifikasi"><i class="fa fa-line-chart"></i> Klasifikasi</a></li>
                </ul>
              </div>
              <div class="menu_section">
                <h3>Master Data</h3>
                <ul class="nav side-menu">
                  <li class="@if(request()->segment(1) == 'data-santri') active @endif"><a href="/data-santri"><i class="fa fa-users"></i> Data Santri</a></li>
                  <li class="@if(request()->segment(1) == 'data-testing') active @endif"><a href="/data-testing"><i class="fa fa-th-list"></i> Data Testing</a></li>
                  <li class="@if(request()->segment(1) == 'profil') active @endif"><a href="/profil"><i class="fa fa-user"></i> Profil</a></li>
                  <li><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="fa fa-sign-out"></i> Logout</a></li>

                  <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                  </form>
                </ul>
              </div>

            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <!-- <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div> -->
            <!-- /menu footer buttons -->
          </div>
        </div>