@extends('layouts.app')

@section('title')
  {{__('Dashboard')}}
@endsection

@section('css')
    <link rel="stylesheet" href="{{url('plugins/swtich-netliva/css/netliva_switch.css')}}">
@endsection

@section('breadcrumb')
<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">
            <i class="nav-icon fas fa-th"></i>
            {{__('Dashboard')}}
          </h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item active">{{__('Dashboard')}}</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
@endsection
@section('content')
@can('admin')

<!-- Admin Reports -->
<div class="row">
    <div class="col-lg-2 col-6">
      <!-- small box -->
      <div class="small-box bg-primary">
        <div class="inner">
          <h3>{{$tests_count}}</h3>
          <p>{{__('Tests')}}</p>
        </div>
        <div class="icon">
          <i class="fa fa-flask"></i>
        </div>
        <a href="{{route('admin.tests.index')}}" class="small-box-footer">{{__('More info')}} <i class="fas fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-2 col-6">
      <!-- small box -->
      <div class="small-box bg-primary">
        <div class="inner">
          <h3>{{$cultures_count}}</h3>
          <p>{{__('Cultures')}}</p>
        </div>
        <div class="icon">
          <i class="fa fa-vial"></i>
        </div>
        <a href="{{route('admin.cultures.index')}}" class="small-box-footer">{{__('More info')}} <i class="fas fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-2 col-6">
      <!-- small box -->
      <div class="small-box bg-primary">
        <div class="inner">
          <h3>{{$antibiotics_count}}</h3>
          <p>{{__('Antibiotics')}}</p>
        </div>
        <div class="icon">
          <i class="fa fa-capsules"></i>
        </div>
        <a href="{{route('admin.antibiotics.index')}}" class="small-box-footer">{{__('More info')}} <i class="fas fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-2 col-6">
      <!-- small box -->
      <div class="small-box bg-primary">
        <div class="inner">
          <h3>{{$owners_count}}</h3>
          <p>{{__('Animal owners')}}</p>
        </div>
        <div class="icon">
          <i class="fa fa-id-card-alt"></i>
        </div>
        <a href="{{route('admin.owners.index')}}" class="small-box-footer">{{__('More info')}} <i class="fas fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <div class="col-lg-2 col-6">
      <!-- small box -->
      <div class="small-box bg-primary">
        <div class="inner">
          <h3>{{$animals_count}}</h3>
          <p>{{__('Animals')}}</p>
        </div>
        <div class="icon">
          <i class="fas fa-paw"></i>
        </div>
        <a href="{{route('admin.animals.index')}}" class="small-box-footer">{{__('More info')}} <i class="fas fa-arrow-circle-right"></i></a>
      </div>
    </div>
    
    <div class="col-lg-2 col-6">
      <!-- small box -->
      <div class="small-box bg-primary">
        <div class="inner">
          <h3>{{$visits_count}}</h3>
          <p>{{__('Home visits')}}</p>
        </div>
        <div class="icon">
          <i class="fa fa-home"></i>
        </div>
        <a href="{{route('admin.visits.index')}}" class="small-box-footer">{{__('More info')}} <i class="fas fa-arrow-circle-right"></i></a>
      </div>
    </div>

    <!-- today statistics -->
    <div class="col-md-4 col-sm-6 col-12">
      <div class="info-box bg-info color-palette">
        <span class="info-box-icon">
          <i class="fas fa-money-bill-wave"></i>
        </span>

        <div class="info-box-content">
          <span class="info-box-text">{{__('Today income amount')}}</span>
          <span class="info-box-number">{{$today_paid}} {{get_currency()}}</span>
        </div>
      </div>
    </div>

    <div class="col-md-4 col-sm-6 col-12">
      <div class="info-box bg-warning color-palette">
        <span class="info-box-icon">
          <i class="fas fa-money-bill-wave"></i>
        </span>

        <div class="info-box-content">
          <span class="info-box-text">{{__('Today expense amount')}}</span>
          <span class="info-box-number">{{$today_total_expense}} {{get_currency()}}</span>
        </div>
      </div>
    </div>

    <div class="col-md-4 col-sm-6 col-12">
      <div class="info-box bg-success color-palette">
        <span class="info-box-icon">
          <i class="fas fa-money-bill-wave"></i>
        </span>

        <div class="info-box-content">
          <span class="info-box-text">{{__('Today profit amount')}}</span>
          <span class="info-box-number">{{$today_profit}} {{get_currency()}}</span>
        </div>
      </div>
    </div>
    <!-- /today statistics -->

    <div class="col-md-4 col-sm-6 col-12">
      <div class="info-box bg-info">
        <span class="info-box-icon"><i class="fa fa-list"></i></span>

        <div class="info-box-content">
          <span class="info-box-text">{{__('Tests')}}</span>
          <span class="info-box-number">{{$group_tests_count}}</span>
        </div>
        <!-- /.info-box-content -->
      </div>
      <!-- /.info-box -->
    </div>
    <div class="col-md-4 col-sm-6 col-12">
      <div class="info-box bg-warning">
        <span class="info-box-icon"><i class="fa fa-pause-circle"></i></span>

        <div class="info-box-content">
          <span class="info-box-text">{{__('Pending Tests')}}</span>
          <span class="info-box-number">{{$pending_tests_count}}</span>
        </div>
        <!-- /.info-box-content -->
      </div>
      <!-- /.info-box -->
    </div>
    <div class="col-md-4 col-sm-6 col-12">
      <div class="info-box bg-success">
        <span class="info-box-icon"><i class="fa fa-check-double"></i></span>

        <div class="info-box-content">
          <span class="info-box-text">{{__('Completed Tests')}}</span>
          <span class="info-box-number">{{$done_tests_count}}</span>
        </div>
        <!-- /.info-box-content -->
      </div>
      <!-- /.info-box -->
    </div>
    <div class="col-md-4 col-sm-6 col-12">
      <div class="info-box bg-info">
        <span class="info-box-icon"><i class="fa fa-list"></i></span>

        <div class="info-box-content">
          <span class="info-box-text">{{__('Cultures')}}</span>
          <span class="info-box-number">{{$group_cultures_count}}</span>
        </div>
        <!-- /.info-box-content -->
      </div>
      <!-- /.info-box -->
    </div>
    <div class="col-md-4 col-sm-6 col-12">
      <div class="info-box bg-warning">
        <span class="info-box-icon"><i class="fa fa-pause-circle"></i></span>

        <div class="info-box-content">
          <span class="info-box-text">{{__('Pending Culltures')}}</span>
          <span class="info-box-number">{{$pending_cultures_count}}</span>
        </div>
        <!-- /.info-box-content -->
      </div>
      <!-- /.info-box -->
    </div>
    <div class="col-md-4 col-sm-6 col-12">
      <div class="info-box bg-success">
        <span class="info-box-icon"><i class="fa fa-check-double"></i></span>

        <div class="info-box-content">
          <span class="info-box-text">{{__('Completed Cultures')}}</span>
          <span class="info-box-number">{{$done_cultures_count}}</span>
        </div>
        <!-- /.info-box-content -->
      </div>
      <!-- /.info-box -->
    </div>
  </div>
  <!-- /.row -->
<!-- /Admin Reports -->

<div class="row">
  <!-- Today scheduled visits -->
  @can('view_visit')
  <div class="col-lg-12 table-responsive">
      <div class="card card-info">
        <div class="card-header">
          <h5 class="card-title">
            <i class="fas fa-bell"></i> {{__('Today scheduled home visits')}}  ( {{count($today_visits)}} )
          </h5>
          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i>
            </button>
          </div>
        </div>
        <div class="card-body table-responsive">
          @if(count($today_visits))
          <table class="table table-bordered table-striped datatable-no-buttons">
            <thead>
              <tr>
                 <th>{{__('Animal')}}</th>
                 <th>{{__('Owner name')}}</th>
                 <th>{{__('Phone')}}</th>
                 <th>{{__('Address')}}</th>
                 <th width="10px" class="text-center">{{__('Status')}}</th>
                 <th width="10px" class="text-center">{{__('Viewed')}}</th>
              </tr>
            </thead>
            <tbody>
              @foreach($today_visits as $visit)
              <tr>
                <td>
                  @if(isset($visit['animal']))
                    {{$visit['animal']['name']}}
                  @endif
                </td>
                <td>
                  @if(isset($visit['animal']['owner']))
                    {{$visit['animal']['owner']['name']}}
                  @endif
                </td>
                <td>
                  @if(isset($visit['animal']['owner']))
                    {{$visit['animal']['owner']['phone']}}
                  @endif
                </td>
                <td>
                  @if(isset($visit['animal']['owner']))
                    {{$visit['animal']['owner']['address']}}
                  @endif
                </td>
                <td>
                  @if($visit['status'])
                    <input type="checkbox" id="change_status_{{$visit['id']}}" visit-id="{{$visit['id']}}" checked netliva-switch data-active-text="{{__('Completed')}}" data-passive-text=" {{__('Pending visit')}}"/>
                  @else 
                    <input type="checkbox" id="change_status_{{$visit['id']}}" visit-id="{{$visit['id']}}" netliva-switch data-active-text="{{__('Completed')}}" data-passive-text=" {{__('Pending visit')}}"/>
                  @endif
                </td>
                <td class="text-center">
                  @can('view_visit')
                    <a href="{{route('admin.visits.show',$visit['id'])}}" class="btn btn-danger btn-sm">
                      <i class="fa fa-eye"></i>
                    </a>
                  @endcan
                </td>
              </tr>
              @endforeach
            </tbody>
           
          </table>
          @else 
            <p class="text-danger text-center">{{__('No data available')}}</p>
          @endif
        </div>
      </div>
       
  </div>
  @endcan
  <!-- /Today scheduled visits -->

  <!-- Online Users -->
  <div class="col-lg-12">
    <div class="card card-success">
      <div class="card-header">
        <h3 class="card-title"><i class="fas fa-wifi"></i> {{__('Online users')}} ( <span class="online_count">0</span> )</h3>
        <div class="card-tools">
          <button type="button" class="btn btn-tool" data-card-widget="collapse">
            <i class="fas fa-minus"></i>
          </button>
          <button type="button" class="btn btn-tool" data-card-widget="remove">
            <i class="fas fa-times"></i>
          </button>
        </div>
      </div>
      <!-- /.card-header -->
      <div class="card-body pt-0 pb-0">
        <ul class="products-list product-list-in-card pl-2 pr-2 online_list">
        </ul>
      </div>
      <!-- /.card-body -->
    </div>
  </div>
  <!-- \Online Users -->
</div>
@endcan
@endsection

@section('scripts')
  <!-- Switch -->
  <script src="{{url('plugins/swtich-netliva/js/netliva_switch.js')}}"></script>
  <script src="{{url('js/admin/dashboard.js')}}"></script>
@endsection