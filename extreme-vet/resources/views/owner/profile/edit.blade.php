@extends('layouts.app')

@section('title')
{{__('Profile')}}
@endsection

@section('breadcrumb')
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark">{{__('Profile')}}</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="{{route('owner.index')}}">{{__('Home')}}</a></li>
          <li class="breadcrumb-item active">{{__('Profile')}}</li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>
@endsection

@section('content')
<div class="card card-primary">
  <div class="card-header">
    <h3 class="card-title">{{__('Edit Profile')}}</h3>
  </div>
  <!-- /.card-header -->
  <form method="POST" action="{{route('owner.profile.update')}}">
    @csrf
    <div class="card-body">

      <div class="row">
        <div class="col-lg-4">
           <div class="form-group">
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="basic-addon1">
                      <i class="fa fa-user"></i>
                  </span>
                </div>
                <input type="text" class="form-control" placeholder="{{__('Name')}}" name="name" id="name" @if(isset($owner)) value="{{$owner->name}}" @endif required>
            </div>
           </div>
        </div>
    
        <div class="col-lg-4">
            <div class="form-group">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="basic-addon1">
                        <i class="fas fa-envelope"></i>
                      </span>
                    </div>
                    <input type="email" class="form-control" placeholder="{{__('Email')}}" name="email" id="email" @if(isset($owner)) value="{{$owner->email}}" @endif required>
                </div>
            </div>
        </div>
    
        <div class="col-lg-4">
            <div class="form-group">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="basic-addon1">
                        <i class="fas fa-phone-alt"></i>
                      </span>
                    </div>
                    <input type="text" class="form-control" placeholder="Phone" name="phone" id="phone"  @if(isset($owner)) value="{{$owner->phone}}" @endif required>
                </div>
            </div>
            
        </div>

        <div class="col-lg-4">
            <div class="form-group">
                <div class="form-group">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                          <span class="input-group-text" id="basic-addon1">
                            <i class="fas fa-mars"></i>
                          </span>
                        </div>
                        <select class="form-control" name="gender" placeholder="{{__('Gender')}}" id="gender" required>
                            <option value="" disabled selected>{{__('Select Gender')}}</option>
                            <option value="male"  @if(isset($owner)&&$owner['gender']=='male') selected @endif>{{__('Male')}}</option>
                            <option value="female"  @if(isset($owner)&&$owner['gender']=='female') selected @endif>{{__('Female')}}</option>
                        </select>
                    </div>
                </div>
            </div>
           
        </div>

        <div class="col-lg-4">
          <div class="form-group">
              <div class="form-group">
                  <div class="input-group mb-3">
                      <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1">
                          <i class="fas fa-map-marker-alt"></i>
                        </span>
                      </div>
                      <input type="text" class="form-control" placeholder="{{__('Address')}}" name="address" id="address" @if(isset($owner)) value="{{$owner->address}}" @endif>
                  </div>
              </div>
          </div>
      </div>
      
        
    </div>
    

    </div>
    <!-- /.card-body -->
    <div class="card-footer">
      <button type="submit" class="btn btn-primary">
        <i class="fa fa-check"></i> {{__('Save')}}
      </button>
    </div>
  </form>

</div>

@endsection
@section('scripts')
  <script src="{{url('js/owner/profile.js')}}"></script>
@endsection