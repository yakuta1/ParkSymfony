$(document).ready(function() {
		
			// process the form
			$('#filterForm').submit(function(event) {

				// get the form data
				var formData = {
					'yearfilter'              : $('#yearfilter').val(),
					'client'             : $('#client').val(),
					'product'    : $('#product').val()
				};

				// process the form
				$.ajax({
					type        : 'POST', 
					url         : 'mainScript.php', 
					data        : formData, 
					dataType    : 'html',
					success  	: function(html){
													$('#mainContent').empty();
													$('#loader').show().delay(600).hide();
													$('#mainContent').append(html);
												}
							   
				})
					
					.done(function(data) {

						
						console.log(data); 

					if ( ! data.success) {
					
							   
				} else {

					// ALL GOOD!
					$('#mainContent').append('<div class="alert alert-success">' + data.message + '</div>');

						}
					});

				// stop the form from submitting the normal way and refreshing the page
				event.preventDefault();
			});
			return false;
		});

		
