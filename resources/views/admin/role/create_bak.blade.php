<form class="form-horizontal" method="post" action="{{url('admin/role')}}">
{!! csrf_field() !!}
<div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
    <h4 class="modal-title"><i class="fa fa-sliders"></i> {{trans('label.role.create_role')}}</h4>
</div>
<div class="modal-body">
	<div class="form-group form-md-line-input">
      <label class="col-md-2 control-label" for="name">{{trans('model.role.name')}}</label>
      <div class="col-md-9">
          <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name">
          <div class="form-control-focus"> </div>
      </div>
  </div>
  <div class="form-group form-md-line-input">
      <label class="col-md-2 control-label" for="slug">{{trans('model.role.slug')}}</label>
      <div class="col-md-9">
          <input type="text" class="form-control" id="slug" name="slug" placeholder="Enter your slug">
          <div class="form-control-focus"> </div>
      </div>
  </div>
  <div class="form-group form-md-line-input">
      <label class="col-md-2 control-label" for="description">{{trans('model.role.description')}}</label>
      <div class="col-md-9">
          <input type="text" class="form-control" id="description" name="description" placeholder="Enter your description">
          <div class="form-control-focus"> </div>
      </div>
  </div>
  <div class="form-group form-md-line-input">
      <label class="col-md-2 control-label" for="level">{{trans('model.role.level')}}</label>
      <div class="col-md-9">
          <input type="text" class="form-control" id="level" name="level" placeholder="Enter your level">
          <div class="form-control-focus"> </div>
      </div>
  </div>
  <div class="form-group form-md-line-input">
      <label class="col-md-2 control-label" for="status">{{trans('model.role.status')}}</label>
      <div class="col-md-9">
      	<div class="md-radio-inline">
            <div class="md-radio">
                <input type="radio" id="radio14" name="status" value="{{trans('label.role.status.audit.2')}}" class="md-radiobtn">
                <label for="radio14">
                    <span></span>
                    <span class="check"></span>
                    <span class="box"></span> {{trans('label.role.status.audit.1')}} </label>
            </div>
            <div class="md-radio">
                <input type="radio" id="radio15" name="status" value="{{trans('label.role.status.active.2')}}" class="md-radiobtn">
                <label for="radio15">
                    <span></span>
                    <span class="check"></span>
                    <span class="box"></span> {{trans('label.role.status.active.1')}} </label>
            </div>
            <div class="md-radio">
                <input type="radio" id="radio16" name="status" value="{{trans('label.role.status.ban.2')}}" class="md-radiobtn">
                <label for="radio16">
                    <span></span>
                    <span class="check"></span>
                    <span class="box"></span> {{trans('label.role.status.ban.1')}} </label>
            </div>
        </div>
      </div>
  </div>
</div>
<div class="modal-footer">
    <button type="button" class="btn dark btn-outline" data-dismiss="modal">Close</button>
    <button type="button" class="btn green">Save changes</button>
</div>
</form>