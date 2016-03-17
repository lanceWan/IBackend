<div ng-controller="RoleController">
  <div class="modal fade bs-modal-lg" id="draggable" role="basic" aria-hidden="true">
      <div class="modal-dialog modal-lg">
          <div class="modal-content"></div>
      </div>
      <!-- /.modal-dialog -->
  </div>
  <div class="row margin-top-40">
      <div class="col-md-12">
          <!-- Begin: life time stats -->
          <div class="portlet light portlet-fit portlet-datatable bordered">
            <div class="portlet-title">
              <div class="caption">
                <i class="icon-settings font-dark"></i>
                <span class="caption-subject font-dark sbold uppercase">{{trans('label.role.index')}}</span>
              </div>
              <div class="actions">
                  {!! $createButton !!}
              </div>
            </div>
              <div class="portlet-body">
                <div class="table-container">
                  <table class="table table-striped table-bordered table-hover table-checkable" id="datatable_ajax">
                      <thead>
                          <tr role="row" class="heading">
                            <th><input type="checkbox" class="group-checkable"> </th>
                            <th width="15%"> {{ trans('model.role.name') }} </th>
                            <th width="15%"> {{ trans('model.role.slug') }} </th>
                            <th> {{ trans('model.role.description') }} </th>
                            <th> {{ trans('model.role.level') }} </th>
                            <th> {{ trans('model.role.status') }} </th>
                            <th width="12%"> {{ trans('model.role.created_at') }} </th>
                            <th width="12%"> {{ trans('model.role.updated_at') }} </th>
                            <th> {{ trans('label.action') }} </th>
                          </tr>
                          <tr role="row" class="filter">
                              <td> </td>
                              <td>
                                <div class="form-group form-md-line-input">
                                  <div class="input-group has-success">
                                      <span class="input-group-addon">
                                          <i class="fa fa-user"></i>
                                      </span>
                                      <input type="text" class="form-control form-filter" name="name" placeholder="{{ trans('model.role.name') }}">
                                      <div class="form-control-focus"> </div>
                                  </div>
                                </div>
                              <td> 
                                <div class="form-group form-md-line-input">
                                  <div class="input-group has-success">
                                      <span class="input-group-addon">
                                          <i class="fa fa-envelope"></i>
                                      </span>
                                      <input type="text" class="form-control form-filter" name="slug" placeholder="{{ trans('model.role.slug') }}">
                                      <div class="form-control-focus"> </div>
                                  </div>
                                </div>
                              </td>
                              <td>
                                <div class="form-group form-md-line-input">
                                  <div class="input-group has-success">
                                      <span class="input-group-addon">
                                          <i class="fa fa-book"></i>
                                      </span>
                                      <input type="text" class="form-control form-filter" name="description" placeholder="{{ trans('model.role.description') }}">
                                      <div class="form-control-focus"> </div>
                                  </div>
                                </div>
                              </td>
                              <td>
                                <div class="form-group form-md-line-input">
                                  <div class="input-group has-success">
                                      <span class="input-group-addon">
                                          <i class="fa fa-cogs"></i>
                                      </span>
                                      <input type="text" class="form-control form-filter" name="level" placeholder="{{ trans('model.role.level') }}">
                                      <div class="form-control-focus"> </div>
                                  </div>
                                </div>
                              </td>
                              <td>
                                <div class="form-group form-md-line-input">
                                  <select class="bs-select form-control form-filter" data-show-subtext="true" name="status">
                                    <option value="" data-icon="fa-glass icon-success">请选择...</option>
                                      @if(trans('label.role.status'))
                                        @foreach(trans('label.role.status') as $status_value)
                                          <option value="{{$status_value[2]}}" data-icon="{{$status_value[0]}}">{{$status_value[1]}}</option>
                                        @endforeach
                                      @endif
                                  </select>
                                </div>
                              </td>
                              <td>
                                <div class="input-group date date-picker margin-bottom-5" data-date-format="yyyy-mm-dd">
                                  <input type="text" class="form-control form-filter input-sm" readonly placeholder="From" name="created_at_from">
                                  <span class="input-group-addon">
                                    <i class="fa fa-calendar"></i>
                                  </span>
                                </div>

                                <div class="input-group date date-picker" data-date-format="yyyy-mm-dd">
                                  <input type="text" class="form-control form-filter input-sm" readonly placeholder="To" name="created_at_to">
                                  <span class="input-group-addon">
                                    <i class="fa fa-calendar"></i>
                                  </span>
                                </div>
                              </td>
                              <td>
                                  <div class="input-group date date-picker margin-bottom-5" data-date-format="yyyy-mm-dd">
                                    <input type="text" class="form-control form-filter input-sm" readonly placeholder="From" name="updated_at_from">
                                    <span class="input-group-addon">
                                      <i class="fa fa-calendar"></i>
                                    </span>
                                  </div>

                                  <div class="input-group date date-picker" data-date-format="yyyy-mm-dd">
                                    <input type="text" class="form-control form-filter input-sm" readonly placeholder="To" name="updated_at_to">
                                    <span class="input-group-addon">
                                      <i class="fa fa-calendar"></i>
                                    </span>
                                  </div>
                              </td>
                              <td>
                                  <div class="margin-bottom-5">
                                      <button class="btn btn-sm green btn-outline filter-submit margin-bottom">
                                          <i class="fa fa-search"></i> Search</button>
                                  </div>
                                  <button class="btn btn-sm red btn-outline filter-cancel">
                                      <i class="fa fa-times"></i> Reset</button>
                              </td>
                          </tr>
                      </thead>
                      <tbody> </tbody>
                  </table>
                </div>
              </div>
          </div>
          <!-- End: life time stats -->
      </div>
  </div>
  
  <script>
    jQuery(document).ready(function() {
      $('.input-group.date').datepicker({
        autoclose: true
      });
      $(".bs-select").selectpicker({
        iconBase: "fa",
        tickIcon: "fa-check"
      });
    });
  </script>
</div>