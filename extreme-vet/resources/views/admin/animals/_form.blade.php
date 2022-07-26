<div class="row">

      <div class="col-lg-4">
        <div class="form-group">
        <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text" id="basic-addon1">
                  <i class="fas fa-user"></i>
              </span>
            </div>
            <select name="owner_id" class="form-control" id="owner_id">
              @if(isset($animal))
                <option value="{{$animal['owner_id']}}" selected>{{$animal['owner']['name']}}</option>
              @endif
            </select>
        </div>
        </div>
    </div>
    
    <div class="col-lg-4">
       <div class="form-group">
        <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text" id="basic-addon1">
                  <i class="fas fa-dog"></i>
              </span>
            </div>
            <input type="text" class="form-control" placeholder="{{__('Name')}}" name="name" id="name" @if(isset($animal)) value="{{$animal->name}}" @endif required>
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
                      <option value="male"  @if(isset($animal)&&$animal['gender']=='male') selected @endif>{{__('Male')}}</option>
                      <option value="female"  @if(isset($animal)&&$animal['gender']=='female') selected @endif>{{__('Female')}}</option>
                  </select>
              </div>
          </div>
      </div>
  </div>

  <div class="col-lg-4">
      <div class="form-group">
          <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">
                  <i class="fas fa-birthday-cake"></i>
                </span>
              </div>
              <input type="text" class="form-control datepicker" placeholder="{{__('DOB')}}" name="dob" id="dob"  @if(isset($animal)) value="{{$animal->dob}}" @endif readonly required>
          </div>
      </div>
  </div>

    
</div>
