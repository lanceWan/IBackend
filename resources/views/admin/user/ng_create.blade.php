<div ng-controller="UserCreateController">
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
            <div class="form-group form-md-line-input has-danger">
              <label class="col-md-3 control-label" for="name">{{ trans('model.user.name') }}</label>
              <div class="col-md-6">
                  <div class="input-icon">
                      <input type="text" class="form-control" id="name" placeholder="{{ trans('model.user.name') }}" name="name">
                      <div class="form-control-focus"> </div>
                      <span class="help-block">@{{name_error}}</span>
                      <i class="fa fa-user"></i>
                  </div>
              </div>
            </div>

            <div class="form-group form-md-line-input has-danger">
                <label class="col-md-3 control-label" for="email">{{ trans('model.user.email') }}</label>
                <div class="col-md-6">
                    <div class="input-icon">
                        <input type="text" class="form-control" id="name" placeholder="{{ trans('model.user.email') }}" name="email">
                        <div class="form-control-focus"> </div>
                        <span class="help-block">@{{email_error}}</span>
                        <i class="fa fa-envelope-o"></i>
                    </div>
                </div>
            </div>

            <div class="form-group form-md-line-input has-danger">
                <label class="col-md-3 control-label" for="password">{{ trans('model.user.password') }}</label>
                <div class="col-md-6">
                    <div class="input-icon">
                        <input type="text" class="form-control" id="password" placeholder="{{ trans('model.user.password') }}" name="password">
                        <div class="form-control-focus"> </div>
                        <span class="help-block">@{{password_error}}</span>
                        <i class="fa fa-lock"></i>
                    </div>
                </div>
            </div>

            <div class="form-group form-md-line-input has-danger">
                <label class="col-md-3 control-label" for="password">{{ trans('model.user.status') }}</label>
                <div class="col-md-6">
                    <div class="input-icon">
                        <input type="checkbox" checked class="make-switch switch-large" data-label-icon="fa fa-fullscreen" data-on-text="<i class='fa fa-check'></i>" data-off-text="<i class='fa fa-times'></i>">
                        <div class="form-control-focus"> </div>
                        <span class="help-block">@{{password_error}}</span>
                    </div>
                </div>
            </div>

            <div class="form-group form-md-line-input has-danger">
                <label class="col-md-3 control-label" for="password">{{ trans('model.user.role') }}</label>
                <select id="select2-multiple-input-lg" class="form-control input-lg select2-multiple" multiple>
                    <optgroup label="Alaskan">
                        <option value="AK">Alaska</option>
                        <option value="HI" disabled="disabled">Hawaii</option>
                    </optgroup>
                    <optgroup label="Pacific Time Zone">
                        <option value="CA">California</option>
                        <option value="NV">Nevada</option>
                        <option value="OR">Oregon</option>
                        <option value="WA">Washington</option>
                    </optgroup>
                    <optgroup label="Mountain Time Zone">
                        <option value="AZ">Arizona</option>
                        <option value="CO">Colorado</option>
                        <option value="ID">Idaho</option>
                        <option value="MT">Montana</option>
                        <option value="NE">Nebraska</option>
                        <option value="NM">New Mexico</option>
                        <option value="ND">North Dakota</option>
                        <option value="UT">Utah</option>
                        <option value="WY">Wyoming</option>
                    </optgroup>
                    <optgroup label="Central Time Zone">
                        <option value="AL">Alabama</option>
                        <option value="AR">Arkansas</option>
                        <option value="IL">Illinois</option>
                        <option value="IA">Iowa</option>
                        <option value="KS">Kansas</option>
                        <option value="KY">Kentucky</option>
                        <option value="LA">Louisiana</option>
                        <option value="MN">Minnesota</option>
                        <option value="MS">Mississippi</option>
                        <option value="MO">Missouri</option>
                        <option value="OK">Oklahoma</option>
                        <option value="SD">South Dakota</option>
                        <option value="TX">Texas</option>
                        <option value="TN">Tennessee</option>
                        <option value="WI">Wisconsin</option>
                    </optgroup>
                    <optgroup label="Eastern Time Zone">
                        <option value="CT">Connecticut</option>
                        <option value="DE">Delaware</option>
                        <option value="FL">Florida</option>
                        <option value="GA">Georgia</option>
                        <option value="IN">Indiana</option>
                        <option value="ME">Maine</option>
                        <option value="MD">Maryland</option>
                        <option value="MA">Massachusetts</option>
                        <option value="MI">Michigan</option>
                        <option value="NH">New Hampshire</option>
                        <option value="NJ">New Jersey</option>
                        <option value="NY">New York</option>
                        <option value="NC">North Carolina</option>
                        <option value="OH">Ohio</option>
                        <option value="PA">Pennsylvania</option>
                        <option value="RI">Rhode Island</option>
                        <option value="SC">South Carolina</option>
                        <option value="VT">Vermont</option>
                        <option value="VA">Virginia</option>
                        <option value="WV">West Virginia</option>
                    </optgroup>
                </select>
            </div>

          </div>
          <div class="form-actions">
              <div class="row">
                  <div class="col-md-offset-3 col-md-6">
                      <button type="submit" class="btn green">Submit</button>
                  </div>
              </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>