var host = $("meta[name='host']").attr("content");  
$(document).ready(function(){
	'use strict'

	//Orders
		$(document).on('click', '.cancelOrder', function(){
			var id = $(this).data('id');
			Swal.fire({
			  title: 'Are you sure?',
			  text: "You want to cancel this order!",
			  icon: 'warning',
			  showCancelButton: true,
			  confirmButtonColor: '#3085d6',
			  cancelButtonColor: '#d33',
			  confirmButtonText: 'Yes, cancel it!'
			}).then((result) => {
			  if (result.isConfirmed) {
			    window.location.href = host+'/orders/cancel/'+id;
 			  }
			});
		});
		$(document).on('click', '.deliverOrder', function(){
			var id = $(this).data('id');
			Swal.fire({
			  title: 'Are you sure?',
			  text: "You want to deliver this order!",
			  icon: 'warning',
			  showCancelButton: true,
			  confirmButtonColor: '#3085d6',
			  cancelButtonColor: '#d33',
			  confirmButtonText: 'Yes, deliver it!'
			}).then((result) => {
			  if (result.isConfirmed) {
			    window.location.href = host+'/orders/deliver/'+id;
 			  }
			});
		});
		$(document).on('click', '.downloadMedia', function(){
			var id = $(this).data('id');
			$('#downloadMediaModal').modal('toggle');
			$('#downloadMediaModal .modal-content').html('<img src="'+host+'/../public/loader.gif">');
			$.get(host+'/orders/downloadMedia/'+id, function(data){
				$('#downloadMediaModal .modal-content').html(data);
			});
		});

	//Users
		$(document).on('click', '.blockUser', function(){
			var id = $(this).data('id');
			Swal.fire({
			  title: 'Are you sure?',
			  text: "You want to block this user!",
			  icon: 'warning',
			  showCancelButton: true,
			  confirmButtonColor: '#3085d6',
			  cancelButtonColor: '#d33',
			  confirmButtonText: 'Yes, block it!'
			}).then((result) => {
			  if (result.isConfirmed) {
			    window.location.href = host+'/users/block/'+id;
 			  }
			});
		});
		$(document).on('click', '.activeUser', function(){
			var id = $(this).data('id');
			Swal.fire({
			  title: 'Are you sure?',
			  text: "You want to active this user!",
			  icon: 'warning',
			  showCancelButton: true,
			  confirmButtonColor: '#3085d6',
			  cancelButtonColor: '#d33',
			  confirmButtonText: 'Yes, active it!'
			}).then((result) => {
			  if (result.isConfirmed) {
			    window.location.href = host+'/users/active/'+id;
 			  }
			});
		});
});