@extends('admin.permission.layout')

@section('custom_css')
  <link href="{{asset('backend/plugins/datatables/datatables.min.css')}}" rel="stylesheet" type="text/css" />
  <link href="{{asset('backend/plugins/datatables/plugins/bootstrap/datatables.bootstrap.css')}}" rel="stylesheet" type="text/css" />
  <link href="{{asset('backend/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css')}}" rel="stylesheet" type="text/css" />
@endsection

@section('content')
	<div class="row margin-top-40">
	    <div class="col-md-12">
	        <!-- Begin: life time stats -->
	        <div class="portlet light portlet-fit portlet-datatable bordered">
            <div class="portlet-title">
              <div class="caption">
                <i class="icon-settings font-dark"></i>
                <span class="caption-subject font-dark sbold uppercase">{{trans('label.user.index')}}</span>
              </div>
              <div class="actions">
                <div class="btn-group">
                  <a class="btn red btn-outline btn-circle" href="javascript:;" data-toggle="dropdown">
                    <i class="fa fa-share"></i>
                    <span class="hidden-xs"> Tools </span>
                    <i class="fa fa-angle-down"></i>
                  </a>
                  <ul class="dropdown-menu pull-right">
                    <li><a href="javascript:;"> Export to Excel </a></li>
                    <li><a href="javascript:;"> Export to CSV </a></li>
                    <li><a href="javascript:;"> Export to XML </a></li>
                    <li class="divider"> </li>
                    <li><a href="javascript:;"> Print Invoices </a></li>
                  </ul>
                </div>
              </div>
            </div>
	            <div class="portlet-body">
                <div class="table-container">
                  <table class="table table-striped table-bordered table-hover table-checkable" id="datatable_ajax">
                      <thead>
                          <tr role="row" class="heading">
                            <th><input type="checkbox" class="group-checkable"> </th>
                            <th> {{ trans('model.user.name') }} </th>
                            <th> {{ trans('model.user.email') }} </th>
                            <th> {{ trans('model.user.status') }} </th>
                            <th width="12%"> {{ trans('model.user.created_at') }} </th>
                            <th width="12%"> {{ trans('model.user.updated_at') }} </th>
                            <th> {{ trans('label.action') }} </th>
                          </tr>
                          <tr role="row" class="filter">
                              <td> </td>
                              <td>
                                <input type="text" class="form-control form-filter input-sm" name="order_id"> </td>
                              <td>
                                <input type="text" class="form-control form-filter input-sm" name="order_id"> </td>
                              </td>
                              <td>
                                <select name="order_status" class="form-control form-filter input-sm">
                                  <option value="">Select...</option>
                                  <option value="pending">Pending</option>
                                  <option value="closed">Closed</option>
                                  <option value="hold">On Hold</option>
                                  <option value="fraud">Fraud</option>
                                </select>
                              <td>
                                <div class="input-group date date-picker margin-bottom-5" data-date-format="yyyy-mm-dd">
                                  <input type="text" class="form-control form-filter input-sm" readonly placeholder="From">
                                  <span class="input-group-addon">
                                    <i class="fa fa-calendar"></i>
                                  </span>
                                </div>

                                <div class="input-group date date-picker" data-date-format="yyyy-mm-dd">
                                  <input type="text" class="form-control form-filter input-sm" readonly placeholder="To">
                                  <span class="input-group-addon">
                                    <i class="fa fa-calendar"></i>
                                  </span>
                                </div>
                              <td>
                                  <div class="input-group date date-picker margin-bottom-5" data-date-format="yyyy-mm-dd">
                                    <input type="text" class="form-control form-filter input-sm" readonly placeholder="From">
                                    <span class="input-group-addon">
                                      <i class="fa fa-calendar"></i>
                                    </span>
                                  </div>

                                  <div class="input-group date date-picker" data-date-format="yyyy-mm-dd">
                                    <input type="text" class="form-control form-filter input-sm" readonly placeholder="To">
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
@endsection

@section('custom_js')

	<script src="{{asset('backend/plugins/datatables/datatables.min.js')}}" type="text/javascript"></script>
	<script src="{{asset('backend/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js')}}" type="text/javascript"></script>
  <script src="{{asset('backend/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js')}}" type="text/javascript"></script>
	<script src="{{asset('backend/js/user/datatable-ajax.js')}}"></script>
	<script>
		jQuery(document).ready(function() {
			TableDatatablesAjax.init();

      $('.input-group.date').datepicker({
        autoclose: true
      });


		});
	</script>
@endsection