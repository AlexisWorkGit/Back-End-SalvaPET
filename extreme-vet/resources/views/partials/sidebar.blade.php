<!-- Sidebar -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <img src="{{url('img/logo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">{{$info['name']}}</span>
    </a>
    <!-- \Brand Logo -->

    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="{{url('dist/img/LOGO.png')}}" class="img-circle elevation-2" alt="User Image">
          </div>
          <div class="info">
            <a href="#" class="d-block">
              @if(Auth::guard('admin')->check())
                {{Auth::guard('admin')->user()->name}}
              @else
                {{Auth::guard('owner')->user()->name}}<br>
                {{__('Code')}}: {{Auth::guard('owner')->user()->code}}
              @endif
            </a>
          </div>
        </div>
        <!-- Sidebar Menu -->
        <!-- Admin sidebar -->
        @can('admin')
        @include('partials.admin_sidebar')
        <!-- \Admin sidebar -->
        <!-- Owner sidebar -->
        @elsecan('owner')
          @include('partials.owner_sidebar')
        @endcan
        <!-- \Owner sidebar -->
      <!-- /.sidebar-menu -->
    </div>
</aside>
<!-- /.sidebar -->
