<div class="col-md-12">
    <!-- BEGIN SAMPLE FORM PORTLET-->
    <div class="portlet light bordered">
        <div class="portlet-title">
            <div class="caption">
                <i class="icon-settings font-dark"></i>
                <span class="caption-subject font-dark sbold uppercase">{{trans('label.user.create')}}</span>
            </div>
        </div>
        <div class="portlet-body form">
            <form class="form-horizontal" role="form">
                <div class="form-body">
                    <div class="form-group">
                      <label class="col-md-3 control-label">{{ trans('model.user.name') }}</label>
                      <div class="col-md-9">
                        <div class="input-inline input-medium">
                          <div class="input-group">
                            <span class="input-group-addon">
                                <i class="fa fa-user"></i>
                            </span>
                            <input type="text" class="form-control" placeholder="{{ trans('model.user.name') }}" name="name">
                          </div>
                        </div>
                        <span class="help-inline"> </span>
                      </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label">{{ trans('model.user.email') }}</label>
                        <div class="col-md-9">
                            <div class="input-inline input-medium">
                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <i class="fa fa-envelope"></i>
                                    </span>
                                    <input type="email" class="form-control" placeholder="{{ trans('model.user.email') }}" name="email"> 
                                </div>
                            </div>
                            <span class="help-inline"> </span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-3 control-label">{{ trans('model.user.password') }}</label>
                        <div class="col-md-9">
                            <div class="input-inline input-medium">
                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <i class="fa fa-lock"></i>
                                    </span>
                                    <input type="password" class="form-control" placeholder="{{ trans('model.user.password') }}"> 
                                </div>
                            </div>
                            <span class="help-inline"> </span>
                        </div>
                    </div>
                    

                    <div class="form-group">
                        <label class="control-label col-md-3">HTML Text</label>
                        <div class="col-md-9">
                            <input type="checkbox" class="make-switch" name="my-checkbox" checked data-on-text="<i class='fa fa-check'></i>" data-off-text="<i class='fa fa-times'></i>">
                            <input type="checkbox" class="make-switch" checked data-on-text="<i class='fa fa-user'></i>" data-off-text="<i class='fa fa-trash-o'></i>"> </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label">Textarea</label>
                        <div class="col-md-9">
                            <textarea class="form-control" rows="3"></textarea>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label class="col-md-3 control-label">Checkboxes</label>
                        <div class="col-md-9">
                            <div class="checkbox-list">
                                <label>
                                    <input type="checkbox"> Checkbox 1 </label>
                                <label>
                                    <input type="checkbox"> Checkbox 1 </label>
                                <label>
                                    <input type="checkbox" disabled> Disabled </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-actions">
                    <div class="row">
                        <div class="col-md-offset-3 col-md-9">
                            <button type="submit" class="btn green">Submit</button>
                            <button type="button" class="btn default" ng-click="cancel()">Cancel</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>