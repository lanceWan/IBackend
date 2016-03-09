var TableDatatablesAjax = function() {
	var datatableAjax = function(){
		$('#datatable_ajax').DataTable({
			"processing": true,
      "serverSide": true,
      "ajax": '/admin/user/ajaxindex',
      "order" : [],
      "dom" : "<'row'<'col-sm-3'l><'col-sm-6'<'customtoolbar'>><'col-sm-3'f>>" +"<'row'<'col-sm-12'tr>>" +"<'row'<'col-sm-5'i><'col-sm-7'p>>",
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
    	],
    });

    console.log($("div.toolbar").html());
    $("div.customtoolbar").html($("div.toolbar").html());
	};

	return {
		init : datatableAjax
	}
}();