<div class="modal fade" id="owner_modal" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">{{__('Create owner')}}</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <form action="{{route('ajax.create_owner')}}" method="POST" id="create_owner">
            @csrf
            <div class="text-danger" id="owner_modal_error"></div>
            <div class="modal-body" id="create_owner_inputs">
                <div class="row">
                    
                    <div class="col-lg-4">
                       <div class="form-group">
                          <label for="create_owner_name">{{__('Name')}}</label>
                          <input type="text" class="form-control" placeholder="{{__('Name')}}" name="name" id="create_owner_name"  required>
                       </div>
                    </div>
              
                    <div class="col-lg-4">
                        <div class="form-group">
                            <div class="form-group">
                                <label for="create_owner_gender">{{__('Gender')}}</label>
                                <select class="form-control" name="gender" placeholder="{{__('Gender')}}" id="create_owner_gender" required>
                                  <option value="" disabled selected>{{__('Select Gender')}}</option>
                                  <option value="male" >{{__('Male')}}</option>
                                  <option value="female">{{__('Female')}}</option>
                              </select>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="form-group">
                           <label for="create_owner_email">{{__('Email')}}</label>
                           <input type="email" class="form-control" placeholder="{{__('Email')}}" name="email" id="create_owner_email"  required>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="form-group">
                           <label for="create_owner_phone">{{__('Phone')}}</label>
                           <input type="text" class="form-control" placeholder="{{__('Phone')}}" name="phone" id="create_owner_phone"  required>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="form-group">
                           <label for="create_owner_address">{{__('Address')}}</label>
                           <input type="text" class="form-control" placeholder="{{__('Address')}}" name="address" id="create_owner_address">
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