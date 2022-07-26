<div class="row select_animal">
    <div class="col-lg-12">
        <div class="form-group">
            <label for="animal_id">{{__('Select Animal')}}</label>
            @can('create_animal')
                <button type="button" class="btn btn-secondary btn-sm add_animal float-right"  data-toggle="modal" data-target="#animal_modal">
                    <i class="fa fa-exclamation-triangle"></i>  {{__('Not Listed ?')}}
                </button>
            @endcan
            <select id="animal_id" name="animal_id" class="form-control" required>
                @if(isset($visit)&&isset($visit['animal']))
                    <option value="{{$visit['animal']['id']}}" selected>{{$visit['animal']['name']}}</option>
                @endif
            </select>
        </div>
    </div>
</div>


<div class="row animal_info">

    <div class="col-lg-4">
       <div class="form-group">
        <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text" id="basic-addon1">
                  <i class="fas fa-dog"></i>
              </span>
            </div>
            <input type="text" class="form-control" placeholder="{{__('Name')}}" name="name" id="name" @if(isset($visit)&&isset($visit['animal'])) value="{{$visit['animal']['name']}}"  @endif disabled required>
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
                    <select class="form-control" name="gender" placeholder="{{__('Gender')}}" id="gender" @if(isset($visit)&&isset($visit['patient']))  @endif disabled required>
                        <option value="" disabled selected>{{__('Select Gender')}}</option>
                        <option value="male"  @if(isset($visit)&&$visit['animal']['gender']=='male') selected @endif>{{__('Male')}}</option>
                        <option value="female"  @if(isset($visit)&&$visit['animal']['gender']=='female') selected @endif>{{__('Female')}}</option>
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
                        <i class="fas fa-baby"></i>
                      </span>
                    </div>
                    <input type="text" class="form-control datepicker" id="dob" placeholder="{{__('Date of birth')}}" name="dob" required @if(isset($visit)&&isset($visit['animal'])) value="{{$visit['animal']['dob']}}"  @endif style="z-index: 1000!important" disabled>
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
                        <i class="fas fa-user"></i>
                      </span>
                    </div>
                    <input type="text" class="form-control" id="owner_name" placeholder="{{__('Owner name')}}" required @if(isset($visit)&&isset($visit['animal'])) value="{{$visit['animal']['owner']['name']}}"  @endif disabled>
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
                        <i class="fas fa-envelope"></i>
                      </span>
                    </div>
                    <input type="email" class="form-control" id="email" placeholder="{{__('Email')}}" name="email" required @if(isset($visit)&&isset($visit['animal'])) value="{{$visit['animal']['owner']['email']}}"  @endif disabled>
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
                        <i class="fas fa-phone"></i>
                      </span>
                    </div>
                    <input type="text" class="form-control" id="phone" placeholder="{{__('Phone')}}" name="phone" required @if(isset($visit)&&isset($visit['animal'])) value="{{$visit['animal']['owner']['phone']}}"  @endif disabled>
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
                    <input type="text" class="form-control" placeholder="{{__('Address')}}" name="address" id="address" @if(isset($visit)&&isset($visit['animal'])) value="{{$visit['animal']['owner']['address']}}"  @endif disabled required>
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
                        <i class="fas fa-calendar"></i>
                    </span>
                    </div>
                    <input type="text" class="form-control datepicker" id="visit_date" placeholder="{{__('Visit Date')}}" name="visit_date" required @if(isset($visit)) value="{{$visit['visit_date']}}" @endif style="z-index: 1000!important" readonly>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-12">
         <div class="card card-primary">
             <div class="card-header">
                 <h5 class="card-title">
                     <i  class="fas fa-map-marked-alt nav-icon"></i>
                     {{__('Location on map')}}
                 </h5>
             </div>
             <input type="hidden" name="lat" id="visit_lat" @if(isset($visit)) value="{{$visit['lat']}}" @endif>
             <input type="hidden" name="lng" id="visit_lng" @if(isset($visit)) value="{{$visit['lng']}}" @endif>
             <input type="hidden" name="zoom_level" id="zoom_level" @if(isset($visit)) value="{{$visit['zoom_level']}}" @endif>
             <div class="card-body">
                 <div id="map" style="min-height:500px"></div>
             </div>
         </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-12">
        <div class="card card-primary">
            <div class="card-header">
                <h5 class="card-title">
                     <i  class="fas fa-file-pdf nav-icon"></i>
                    {{__('Attachment')}}
                </h5>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputFile">
                        {{__('Attachment Image')}} ({{__('optional')}})
                        @if(!empty($visit)&&!empty($visit['attach']))
                            <a href="{{url('uploads/visits/'.$visit['attach'])}}" class="btn btn-primary btn-sm">
                                <i class="fa fa-eye"></i>
                            </a>
                        @endif
                    </label>
                    <div class="input-group">
                        <div class="custom-file">
                            <input type="file" name="attach" accept="image/*" class="custom-file-input" id="attachment">
                            <label class="custom-file-label" for="attachment">{{__('Choose file')}}</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
 
