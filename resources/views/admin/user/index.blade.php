@extends('admin.user.layout')

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
                    <div class="table-actions-wrapper">
                      <span> </span>
                      <select class="table-group-action-input form-control input-inline input-small input-sm">
                        <option value="">Select...</option>
                        <option value="Cancel">Cancel</option>
                        <option value="Cancel">Hold</option>
                        <option value="Cancel">On Hold</option>
                        <option value="Close">Close</option>
                      </select>
                      <button class="btn btn-sm green table-group-action-submit"><i class="fa fa-check"></i> Submit</button>
                    </div>
	                    <table class="table table-striped table-bordered table-hover table-checkable" id="datatable_ajax">
	                        <thead>
                            <tr role="row" class="heading">
                              <th width="2%"></th>
                              <th width="15%"><input type="text"></th>
                              <th width="200"><input type="text"></th>
                              <th width="10%">
                                <select name="status">
                                  <option value="1">正常</option>
                                  <option value="2">禁止</option>
                                </select>
                              </th>
                              <th width="10%"></th>
                              <th width="10%"></th>
                              <th width="10%"></th>
                            </tr>
                            <tr role="row" class="heading">
                              <th width="2%"><input type="checkbox" class="group-checkable"> </th>
                              <th width="15%"> {{ trans('model.user.name') }} </th>
                              <th width="200"> {{ trans('model.user.email') }} </th>
                              <th width="10%"> {{ trans('model.user.status') }} </th>
                              <th width="10%"> {{ trans('model.user.created_at') }} </th>
                              <th width="10%"> {{ trans('model.user.updated_at') }} </th>
                              <th width="10%"> {{ trans('label.action') }} </th>
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

	<script src="{{asset('backend/js/user/datatable-ajax.js')}}"></script>
	<script>
		jQuery(document).ready(function() {
			TableDatatablesAjax.init()
		});
	</script>
@endsection