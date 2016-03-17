<div class="portlet light bordered">
    <div class="portlet-title">
        <div class="caption font-red-sunglo">
            <i class="fa fa-sliders font-red-sunglo"></i>
            <span class="caption-subject bold uppercase"> {{trans('label.role.create_role')}} </span>
        </div>
    </div>
    <div class="portlet-body form">
    	<form class="form-horizontal" role="form" method="post" action="{{url('admin/role')}}">
    		{!! csrf_field() !!}
    		<div class="form-body">
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

				  <div class="form-group form-md-line-input">
				  	<label class="col-md-2 control-label" for="level">{{trans('model.role.level')}}</label>
			      <div class="col-md-9">
		          <div class="table-scrollable">
                <table class="table">
                    <thead>
                        <tr>
                            <th class="col-md-1 text-center">模块</th>
                            <th class="col-md-10 text-center">权限</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="text-center"> 菜单 </td>
                            <td>
                            	<div class="col-md-4">
                            		<div class="md-checkbox">
                                    <input type="checkbox" id="checkbox6" class="md-check">
                                    <label for="checkbox6">
                                        <span></span>
                                        <span class="check"></span>
                                        <span class="box"></span> Option 1 </label>
                                </div>
                            	</div>
                            	<div class="col-md-4">
                            		<div class="md-checkbox">
                                    <input type="checkbox" id="checkbox7" class="md-check">
                                    <label for="checkbox7">
                                        <span></span>
                                        <span class="check"></span>
                                        <span class="box"></span> Option 2 </label>
                                </div>
                            	</div>
                            	<div class="col-md-4">
                            		<div class="md-checkbox">
                                    <input type="checkbox" id="checkbox8" class="md-check">
                                    <label for="checkbox8">
                                        <span></span>
                                        <span class="check"></span>
                                        <span class="box"></span> Option 3 </label>
                                </div>
                            	</div>
                            	<div class="col-md-4">
                            		<div class="md-checkbox">
                                    <input type="checkbox" id="checkbox9" class="md-check">
                                    <label for="checkbox9">
                                        <span></span>
                                        <span class="check"></span>
                                        <span class="box"></span> Option 4 </label>
                                </div>
                            	</div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
			      </div>
				  </div>
    		</div>
    		<div class="form-actions noborder">
            <button type="button" class="btn blue">Submit</button>
            <button type="button" class="btn default">Cancel</button>
        </div>
			</form>
    </div>
</div>