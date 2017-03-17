<div class="site-menubar-body">
  <div>
    <div>
      <ul class="site-menu">
        @if($page == 'home')
        <li class="site-menu-item active">
          <a class="animsition-link" href="{{url('/')}}">
            <i class="site-menu-icon md-home light-blue-a400" aria-hidden="true"></i>
            <span class="site-menu-title">Beranda</span>
          </a>
        </li>
        @else
        <li class="site-menu-item">
          <a class="animsition-link" href="{{url('/')}}">
            <i class="site-menu-icon md-home light-blue-a400" aria-hidden="true"></i>
            <span class="site-menu-title">Beranda</span>
          </a>
        </li>
        @endif

        @if($page == 'logbook')
        <li class="site-menu-item active">
          <a class="animsition-link" href="{{url('logbook')}}">
            <i class="site-menu-icon md-assignment light-blue-a400" aria-hidden="true"></i>
            <span class="site-menu-title">Logbook Gangguan</span>
          </a>
        </li>
        @else
        <li class="site-menu-item">
          <a class="animsition-link" href="{{url('logbook')}}">
            <i class="site-menu-icon md-assignment light-blue-a400" aria-hidden="true"></i>
            <span class="site-menu-title">Logbook Gangguan</span>
          </a>
        </li>
        @endif

        @if(Auth::user()->level == 'Supervisor' or Auth::user()->level == 'Staff')
          @if($page == 'perbaikan' or $page == 'petugas' or $page == 'user')
          <li class="site-menu-item has-sub active open">
            <a href="javascript:void(0)">
              <i class="site-menu-icon md-book light-blue-a400" aria-hidden="true"></i>
              <span class="site-menu-title">Manajemen Logbook</span>
              <span class="site-menu-arrow"></span>
            </a>
            <ul class="site-menu-sub">
              @if($page == 'perbaikan')
              <li class="site-menu-item active">
                <a class="animsition-link" href="{{url('perbaikan')}}">
                  <span class="site-menu-title">Data Perbaikan</span>
                </a>
              </li>
              @else
              <li class="site-menu-item">
                <a class="animsition-link" href="{{url('perbaikan')}}">
                  <span class="site-menu-title">Data Perbaikan</span>
                </a>
              </li>
              @endif
              @if($page == 'petugas')
              <li class="site-menu-item active">
                <a class="animsition-link" href="{{url('petugas')}}">
                  <span class="site-menu-title">Data Petugas</span>
                </a>
              </li>
              @else
              <li class="site-menu-item">
                <a class="animsition-link" href="{{url('petugas')}}">
                  <span class="site-menu-title">Data Petugas</span>
                </a>
              </li>
              @endif
              @if(Auth::user()->level == 'Supervisor')
                @if($page == 'user')
                <li class="site-menu-item active">
                  <a class="animsition-link" href="{{url('user')}}">
                    <span class="site-menu-title">Data User</span>
                  </a>
                </li>
                @else
                <li class="site-menu-item">
                  <a class="animsition-link" href="{{url('user')}}">
                    <span class="site-menu-title">Data User</span>
                  </a>
                </li>
                @endif
              @endif
            </ul>
          </li>
          @else
          <li class="site-menu-item has-sub">
            <a href="javascript:void(0)">
              <i class="site-menu-icon md-book light-blue-a400" aria-hidden="true"></i>
              <span class="site-menu-title">Manajemen Logbook</span>
              <span class="site-menu-arrow"></span>
            </a>
            <ul class="site-menu-sub">
              <li class="site-menu-item">
                <a class="animsition-link" href="{{url('perbaikan')}}">
                  <span class="site-menu-title">Data Perbaikan</span>
                </a>
              </li>
              <li class="site-menu-item">
                <a class="animsition-link" href="{{url('petugas')}}">
                  <span class="site-menu-title">Data Petugas</span>
                </a>
              </li>
              @if(Auth::user()->level == 'Supervisor')
              <li class="site-menu-item">
                <a class="animsition-link" href="{{url('user')}}">
                  <span class="site-menu-title">Data User</span>
                </a>
              </li>
              @endif
            </ul>
          </li>
          @endif
        @endif

        @if($page == 'perhari' or $page == 'perbulan' or $page == 'pertahun')
        <li class="site-menu-item has-sub active open">
          <a href="javascript:void(0)">
            <i class="site-menu-icon md-chart light-blue-a400" aria-hidden="true"></i>
            <span class="site-menu-title">Grafik</span>
            <span class="site-menu-arrow"></span>
          </a>
          <ul class="site-menu-sub">
            @if($page == 'perhari')
            <li class="site-menu-item active">
              <a class="animsition-link" href="{{url('grafik/perhari')}}">
                <span class="site-menu-title">Grafik Perhari</span>
              </a>
            </li>
            @else
            <li class="site-menu-item">
              <a class="animsition-link" href="{{url('grafik/perhari')}}">
                <span class="site-menu-title">Grafik Perhari</span>
              </a>
            </li>
            @endif

            @if($page == 'perbulan')
            <li class="site-menu-item active">
              <a class="animsition-link" href="{{url('grafik/perbulan')}}">
                <span class="site-menu-title">Grafik Perbulan</span>
              </a>
            </li>
            @else
            <li class="site-menu-item">
              <a class="animsition-link" href="{{url('grafik/perbulan')}}">
                <span class="site-menu-title">Grafik Perbulan</span>
              </a>
            </li>
            @endif

            @if($page == 'pertahun')
            <li class="site-menu-item active">
              <a class="animsition-link" href="{{url('grafik/pertahun')}}">
                <span class="site-menu-title">Grafik Pertahun</span>
              </a>
            </li>
            @else
            <li class="site-menu-item">
              <a class="animsition-link" href="{{url('grafik/pertahun')}}">
                <span class="site-menu-title">Grafik Pertahun</span>
              </a>
            </li>
            @endif
          </ul>
        </li>
        @else
        <li class="site-menu-item has-sub">
          <a href="javascript:void(0)">
            <i class="site-menu-icon md-chart light-blue-a400" aria-hidden="true"></i>
            <span class="site-menu-title">Grafik</span>
            <span class="site-menu-arrow"></span>
          </a>
          <ul class="site-menu-sub">
            <li class="site-menu-item">
              <a class="animsition-link" href="{{url('grafik/perhari')}}">
                <span class="site-menu-title">Grafik Perhari</span>
              </a>
            </li>
            <li class="site-menu-item">
              <a class="animsition-link" href="{{url('grafik/perbulan')}}">
                <span class="site-menu-title">Grafik Perbulan</span>
              </a>
            </li>
            <li class="site-menu-item">
              <a class="animsition-link" href="{{url('grafik/pertahun')}}">
                <span class="site-menu-title">Grafik Pertahun</span>
              </a>
            </li>
          </ul>
        </li>
        @endif
        
        @if($page == 'print' or $page == 'excel')
        <li class="site-menu-item has-sub active open">
          <a href="javascript:void(0)">
            <i class="site-menu-icon md-file-text light-blue-a400" aria-hidden="true"></i>
            <span class="site-menu-title">Laporan</span>
            <span class="site-menu-arrow"></span>
          </a>
          <ul class="site-menu-sub">
            @if($page == 'print')
            <li class="site-menu-item active">
              <a class="animsition-link" href="{{url('laporan')}}">
                <span class="site-menu-title">Print</span>
              </a>
            </li>
            @else
            <li class="site-menu-item">
              <a class="animsition-link" href="{{url('laporan')}}">
                <span class="site-menu-title">Print</span>
              </a>
            </li>
            @endif
            @if($page == 'excel')
            <li class="site-menu-item active">
              <a class="animsition-link" href="{{url('laporan/excel')}}">
                <span class="site-menu-title">Excel</span>
              </a>
            </li>
            @else
            <li class="site-menu-item">
              <a class="animsition-link" href="{{url('laporan/excel')}}">
                <span class="site-menu-title">Excel</span>
              </a>
            </li>
            @endif
          </ul>
        </li>
        @else
        <li class="site-menu-item has-sub">
          <a href="javascript:void(0)">
            <i class="site-menu-icon md-file-text light-blue-a400" aria-hidden="true"></i>
            <span class="site-menu-title">Laporan</span>
            <span class="site-menu-arrow"></span>
          </a>
          <ul class="site-menu-sub">
            <li class="site-menu-item">
              <a class="animsition-link" href="{{url('laporan')}}">
                <span class="site-menu-title">Print</span>
              </a>
            </li>
            <li class="site-menu-item">
              <a class="animsition-link" href="{{url('laporan/excel')}}">
                <span class="site-menu-title">Excel</span>
              </a>
            </li>
          </ul>
        </li>
        @endif
        <li class="site-menu-item">
          <a class="animsition-link" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();"><i class="site-menu-icon md-power light-blue-a400" aria-hidden="true"></i><span class="site-menu-title">Logout</a>
          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            {{ csrf_field() }}
          </form>    
        </li>
      </ul>
    </div>
  </div>
</div>
</div>