$(function() {
	$('#quickalert').delay(1500).fadeOut(1000);

	$("#ann-btn").on( "click", function() {
		$("#data-view").hide();
		$("#announce-view").fadeIn('fast');
		$(this).removeClass("btn-default").addClass("btn-success");
		$("#data-btn").removeClass("btn-success").addClass("btn-default");
	});

	$("#data-btn").on( "click", function() {
		$("#announce-view").hide();
		$("#data-view").fadeIn('fast');
		$(this).removeClass("btn-default").addClass("btn-success");   
		$("#ann-btn").removeClass("btn-success").addClass("btn-default");                             
	});

	$(".delete-btn").on( "click", function() {
		var this_btn = $(this).parent();
	  	$.ajax({
	        url: "./backend/announce/delete.php",
	        type: "post",
	        data: {a_id:$(this).data("item-id")},
	        success: function(results){
				this_btn.fadeOut();
	        },
	        error:function(){
	            alert("failure");
	        }
	    });
	});

	$(".show-btn").on( "click", function() {
		var valueT = 0;
		if($(this).hasClass("fa-check-square-o")) {
			valueT = 0;
			$(this).removeClass("fa-check-square-o").addClass("fa-square-o");
		}
		else {
			valueT = 1;
			$(this).removeClass("fa-square-o").addClass("fa-check-square-o");
		}

		$.ajax({
	        url: "./backend/announce/update.php",
	        type: "post",
	        data: {switchV:$(this).data("btn-type"),value:valueT,a_id:$(this).data("item-id")},
	        success: function(results){},
	        error:function(){
	            alert("Failure");
	        }
		});
	});

	$('#fileupload').fileupload();

	$('#fileupload').bind('fileuploadsubmit', function (e, data) {
	    var directory = $('input[name="directory"]:checked').val();
	    data.formData = {directory: directory};
	    if (!data.formData.directory) {
	    	$('.fileupload-radio-error').show();
			return false;
	    }
	});

	$('#warningModal').on('show.bs.modal', function (event) {
		var link = $(event.relatedTarget);
		var dir = link.data('dir');		
		var modal = $(this)
		var uri = '/admin/backend/data/clear.php?dir=' + dir;
		modal.find('.modal-footer .btn-danger').attr('href', uri);
	});

	$('input[name="search"]').on("keyup paste", function() {
		var s = $(this).val();
		var type = $('input[name="directory"]:checked').val();		
		if (s.length > 3) {
			if (!type) return;

			$.ajax({
		        url: "./backend/data/search.php",
		        type: "post",
		        data: {
		        	str : s,
		        	type : type
		        },
		        success: function(res){
		        	if (res === "") {
		        		$('.list-files').html('<tr><td colspan="2">Nothing found!</td></tr>');
		        		return;
		        	}
					$('.list-files').html(res);
		        },
		        error:function(){
		            console.log('Error');
		        }
		    });
		}
	});

	$('.table').on('change', 'input[type="checkbox"]', function() {
		$('input[type="checkbox"]:checked').length > 0 ? $('.delete-selected .btn').removeClass('disabled') : $('.delete-selected .btn').addClass('disabled');
	});

	$('.delete-selected .btn').on('click', function(e) {
		var checked = $('input[type="checkbox"]:checked');
		var list = new Array();
		if (checked.length > 0) {
			checked.each(function () {
				list.push($(this).data('url'));
			});
			$.ajax({
		        url: "./backend/data/delete.php",
		        type: "post",
		        data: {list: list},
		        success: function(results){
					checked.each(function () {
						$(this).closest('tr').fadeOut();
					});
		        },
		        error:function(){
		            alert("Action Failed!");
		        }
		    });
		}
	});

	$('#ul-form').on('submit', function(e){
		e.preventDefault();
		$('#ulSubmit').modal('show');
		$(this).unbind('submit').submit();
	});
});