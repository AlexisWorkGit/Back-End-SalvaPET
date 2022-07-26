<div class="modal fade" id="animal_modal" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">{{__('Create animal')}}</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <form action="{{route('ajax.create_animal')}}" method="POST" id="create_animal">
          @csrf
          <div class="text-danger" id="animal_modal_error"></div>
          <div class="modal-body" id="create_animal_inputs">
              <div class="row">
                  <div class="col-lg-4">
                    <div class="form-group">
                      <label for="create_owner_id">{{__('Owner')}}</label>
                      @can('create_owner')
                        <button type="button" class="btn btn-secondary btn-sm add_owner float-right"  data-toggle="modal" data-target="#owner_modal">
                            <i class="fa fa-exclamation-triangle"></i>  {{__('Not Listed ?')}}
                        </button>
                      @endcan
                      <select name="owner_id" class="form-control" id="create_owner_id" width="100%"></select>
                    </div>
                  </div>

                  <div class="col-lg-4">
                     <div class="form-group">
                        <label for="create_name">{{__('Name')}}</label>
                        <input type="text" class="form-control" placeholder="{{__('Name')}}" name="name" id="create_name"  required>
                     </div>
                  </div>
            
                  <div class="col-lg-4">
                      <div class="form-group">
                          <div class="form-group">
                              <label for="create_gender">{{__('Gender')}}</label>
                              <select class="form-control" name="gender" placeholder="{{__('Gender')}}" id="create_gender" required>
                                <option value="" disabled selected>{{__('Select Gender')}}</option>
                                <option value="male" >{{__('Male')}}</option>
                                <option value="female">{{__('Female')}}</option>
                            </select>
                          </div>
                      </div>
                  </div>
              
                  <div class="col-lg-4">
                      <div class="form-group">
                          <div class="form-group">
                              <label for="create_dob">{{__('Date of birth')}}</label>
                              <input type="text" class="form-control datepicker" id="create_dob" placeholder="{{__('Date of birth')}}" name="dob" required>
                          </div>
                      </div>
                  </div>
                  
                  
              </div>
              
              
          </div>
          <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-danger" data-dismiss="modal">
                <i class="fa fa-times"></i>
                {{__('Close')}}
              </button>
              <button type="submit" class="btn btn-primary">
                <i class="fa fa-check"></i>
                {{__('Save')}}
              </button>
          </div>
      </form>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>