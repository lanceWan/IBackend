var TableDatatablesAjax = function() {
	var datatableAjax = function(){
		$('#datatable_ajax').DataTable({
			"processing": true,
      "serverSide": true,
      "ajax": '/admin/user/ajaxindex',
      "order" : [],
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
        	"data": "email",
        	"name": "email",
        	"orderable" : false,
        },
        { 
        	"data": "status",
        	"name": "status",
        	"orderable" : true,
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
        	"data": "updated_at",
        	"name": "updated_at",
        	"orderable" : false,
        },
    	]
    });
	};

	return {
		init : datatableAjax
	}
}();