"use strict";
var today = $("#today").val();
	$(document).ready(function(){

		"use strict";
		var myurl =baseurl+'report/reports/salereport';
		var csrf = $('#csrfhashresarvation').val();
	    var dataString = 'from_date='+today&'to_date='+today+'&csrf_test_name='+csrf;
		 $.ajax({
		 type: "POST",
		 url: myurl,
		 data: dataString,
		 success: function(data) {
			 $('#getresult2').html(data);
			  $('#respritbl').DataTable({ 
        responsive: true, 
        paging: true,
		"language": {
			"sProcessing":     lang.Processingod,
			"sSearch":         lang.search,
			"sLengthMenu":     lang.sLengthMenu,
			"sInfo":           lang.sInfo,
			"sInfoEmpty":      lang.sInfoEmpty,
			"sInfoFiltered":   lang.sInfoFiltered,
			"sInfoPostFix":    "",
			"sLoadingRecords": lang.sLoadingRecords,
			"sZeroRecords":    lang.sZeroRecords,
			"sEmptyTable":     lang.sEmptyTable,
			"oPaginate": {
				"sFirst":      lang.sFirst,
				"sPrevious":   lang.sPrevious,
				"sNext":       lang.sNext,
				"sLast":       lang.sLast
			},
			"oAria": {
				"sSortAscending":  ":"+lang.sSortAscending+'"',
				"sSortDescending": ":"+lang.sSortDescending+'"'
			},
				"select": {
						"rows": {
							"_": lang._sign,
							"0": lang._0sign,
							"1": lang._1sign
						}  
		},
			buttons: {
					copy: lang.copy,
					csv: lang.csv,
					excel: lang.excel,
					pdf: lang.pdf,
					print: lang.print,
					colvis: lang.colvis
				}
		},
        dom: 'Blfrtip',
		lengthChange: true, 
        "lengthMenu": [[ 25, 50, 100, 150, 200, 500, -1], [ 25, 50, 100, 150, 200, 500, "All"]], 
        buttons: [  
            {extend: 'copy', className: 'btn-sm',footer: true}, 
            {extend: 'csv', title: 'Report', className: 'btn-sm',footer: true}, 
            {extend: 'excel', title: 'Report', className: 'btn-sm', title: 'exportTitle',footer: true}, 
            {extend: 'pdf', title: 'Report', className: 'btn-sm',footer: true}, 
            {extend: 'print', className: 'btn-sm',footer: true},
			{extend: 'colvis', className: 'btn-sm',footer: true}  
        ],
		"searching": true,
		  "processing": true,
		
    		});
			 
		 }
	});
});