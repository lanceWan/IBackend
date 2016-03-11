var TableDatatablesAjax = function() {
	var datatableAjax = function(){
    dt = $('#datatable_ajax');
		ajax_datatable = dt.DataTable({
		"processing": true,
      	"serverSide": true,
      	"searching" : false,
      "ajax": {
        'url' : '/admin/permission/ajaxindex',
        "data": function ( d ) {
          d.name = $('.filter input[name="name"]').val();
          d.slug = $('.filter input[name="slug"]').val();
          d.description = $('.filter input[name="description"]').val();
          d.model = $('.filter input[name="model"]').val();
          d.status = $('.filter select[name="status"] option:selected').val();
          d.created_at_from = $('.filter input[name="created_at_from"]').val();
          d.created_at_to = $('.filter input[name="created_at_to"]').val();
          d.updated_at_from = $('.filter input[name="updated_at_from"]').val();
          d.updated_at_to = $('.filter input[name="updated_at_to"]').val();
        }
      },
      "pagingType": "bootstrap_full_number",
      "order" : [],
      "orderCellsTop": true,
      "dom" : "<'row'<'col-sm-3'l><'col-sm-6'<'customtoolbar'>><'col-sm-3'f>>" +"<'row'<'col-sm-12'tr>>" +"<'row'<'col-sm-5'i><'col-sm-7'p>>",
      "columnDefs": [
          { "type": "html", "targets": 0 }
        ],
      "columns": [
        {
        	"data": "id",
        	"name" : "id",
        	"orderable" : false,
      	},
        {
        	"data": "name",
        	"name" : "name",
        	"orderable" : false,
        },
        {
        	"data": "slug",
        	"name": "slug",
        	"orderable" : false,
        },
        { 
          "data": "description",
          "name": "description",
          "orderable" : true,
        },
        { 
        	"data": "model",
        	"name": "model",
        	"orderable" : false,
        },
        { 
          "data": "status",
          "name": "status",
          "type":"html",
          "orderable" : false,
          render:function(data){
            if (data == 1) {
              return '<span class="label label-success"> 正常 </span>';
            }else if(data == 2){
              return '<span class="label label-warning"> 待审核 </span>';
            }else{
              return '<span class="label label-danger"> 禁用 </span>';
            }
          }
        },
        { 
        	"data": "created_at",
        	"name": "created_at",
        	"orderable" : true,
        },
        { 
        	"data": "updated_at",
        	"name": "updated_at",
        	"orderable" : true,
        },
        { 
        	"data": "actionButton",
        	"name": "actionButton",
          "type": "html",
        	"orderable" : false,
        },
    	],
      "drawCallback": function( settings ) {
          ajax_datatable.$('.tooltips').tooltip( {
            placement : 'top',
            html : true
      });  
      }
    });

    dt.on('click', '.filter-submit', function(){
      ajax_datatable.ajax.reload(); 
    });

    dt.on('click', '.filter-cancel', function(){
      $('input.form-filter', dt).each(function() {
          $(this).val("");
      });

      $('input.form-filter[type="checkbox"]', dt).each(function() {
          $(this).attr("checked", false);
      });
      ajax_datatable.ajax.reload();
    });
	};

	return {
		init : datatableAjax
	}
}();