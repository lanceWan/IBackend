<div class="col-md-10">
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
          <div class="form-group form-md-line-input">
              <label for="inputEmail12" class="col-md-2 control-label">Email</label>
              <div class="col-md-4">
                  <div class="input-icon">
                      <input type="email" class="form-control" placeholder="Email">
                      <div class="form-control-focus"> </div>
                      <i class="fa fa-envelope-o"></i>
                  </div>
              </div>
          </div>
          
          <div class="form-group form-md-line-input has-danger">
              <label class="col-md-3 control-label" for="name">{{ trans('model.user.name') }}</label>
              <div class="col-md-9">
                  <div class="input-icon">
                      <input type="text" class="form-control" id="name" placeholder="{{ trans('model.user.name') }}" name="name" ng-model="name">
                      <div class="form-control-focus"> </div>
                      <span class="help-block">@{{name_error}}</span>
                      <i class="fa fa-user"></i>
                  </div>
              </div>
          </div>

          <div class="form-group form-md-line-input has-danger">
              <label class="col-md-3 control-label" for="email">{{ trans('model.user.email') }}</label>
              <div class="col-md-9">
                  <div class="input-icon">
                      <input type="text" class="form-control" id="name" placeholder="{{ trans('model.user.email') }}" name="email" ng-model="email">
                      <div class="form-control-focus"> </div>
                      <span class="help-block">@{{email_error}}</span>
                      <i class="fa fa-user"></i>
                  </div>
              </div>
          </div>

          <div class="form-group form-md-line-input has-danger">
              <label class="col-md-3 control-label" for="password">{{ trans('model.user.password') }}</label>
              <div class="col-md-9">
                  <div class="input-icon">
                      <input type="text" class="form-control" id="password" placeholder="{{ trans('model.user.password') }}" name="password" ng-model="password">
                      <div class="form-control-focus"> </div>
                      <span class="help-block">@{{password_error}}</span>
                      <i class="fa fa-user"></i>
                  </div>
              </div>
          </div>

          <div class="form-group form-md-line-input has-danger">
            <label class="control-label col-md-3">状态</label>
            <div class="col-md-9">
              <input 
                bs-switch
                ng-model="status"
                type="checkbox"
                switch-on-text="<i class='fa fa-check'></i>"
                switch-off-text="<i class='fa fa-times'></i>"
                ng-true-value="'yep'"
                ng-false-value="'nope'">
            </div>

            
          </div>
        </div>
        <div class="form-actions">
            <div class="row">
                <div class="col-md-offset-3 col-md-9">
                    <button type="submit" class="btn green" ng-click="ok()">Submit</button>
                    <button type="button" class="btn default" ng-click="cancel()">Cancel</button>
                </div>
            </div>
        </div>
      </form>
    </div>
  </div>
</div>