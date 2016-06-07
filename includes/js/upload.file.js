$(function(){

	var ul = $('#progress ul');

	$('#drop').show('slow');	// Where the image is droped
	$('#progress').hide();		// Where the progress bar appears
	$('#show-file-attached').hide();		// Where the image uploaded is shown
	$('#show-file-options').hide();			// Where the options are shown
	$('#drop #background').text(window.parent.file_drop);
	$('#change_image').text(window.parent.change_image);
	$('#delete_image').text(window.parent.delete_image);

	// Simulate a click on the file input button
	// to show the file browser dialog
	$('#drop a').click(function(){
		$(this).parent().find('input').click();
	});

	// Action if change or delete image clicked
	$('#show-file-options span').click(function (e) {
		e.preventDefault();
		//alert($(this).attr('id'));
		$('#theImg').remove();
		window.parent.$('#image').val('');
		$('#show-file-attached').hide();		// Where the image uploaded is shown
		$('#show-file-options').hide();			// Where the options are shown
		$('#drop').show('slow');	// Where the image is droped
	});
	
	// Initialize the jQuery File Upload plugin
	$('#upload').fileupload({

		// This element will accept file drag/drop uploading
		dropZone: $('#drop'),

		// This function is called when a file is added to the queue;
		// either via the browse button, or via drag/drop:
		add: function (e, data) {

			// We can check the file type by the extension, more insecure
			/*
			var file_name = data.files[0]['name'];

			var exts = ['doc','docx','odt','rtf', 'txt', 'pdf'];
			// split file name at dot
			var ext = file_name.split('.');
			// check file type is valid as given in 'exts' array
			if ( $.inArray ( ext[1].toLowerCase(), exts ) > -1 ){
				//alert( 'Allowed extension!' );
			} else {
				alert("Only .doc, .docx, .odt, rtf, txt and .pdf is allowed.");
				return;
			}
			*/
			// or by the type of the file, more acurate. Must see if works in linux environments
			if(data.files[0]['type'] != 'image/png' && data.files[0]['type'] != 'image/jpg' && data.files[0]['type'] != 'image/jpeg'){
				//alert("Only .png, .jpg, and .jpeg is allowed.");
				alert(window.parent.file_type_not_allowed);
				return;
			}

			$('#drop').hide();	// Where the image is droped
			$('#progress').show();		// Where the progress bar appears
			
            var tpl = $('<li class="working"><input type="text" value="0" data-width="48" data-height="48"'+
                ' data-fgColor="#0788a5" data-readOnly="1" data-bgColor="#3e4043" /><p></p><span></span></li>');

            // Append the file name and file size
            //tpl.find('p').text(data.files[0].name)
			//	.append('<i>' + formatFileSize(data.files[0].size) + '</i>');

            // Add the HTML to the UL element
            data.context = tpl.appendTo(ul);

            // Initialize the knob plugin
            tpl.find('input').knob();
			
			// Automatically upload the file once it is added to the queue
			var jqXHR = data.submit().success(function(result, textStatus, jqXHR){

				var json = JSON.parse(result);
				var status = json['status'];
				var new_file_name = json['new_file_name'];
				var ext_name = json['ext_name'];

				if(status == 'success'){
					//alert(new_file_name+'.'+ext_name);
					$('#show-file-attached').prepend('<img id="theImg" src="/ext/carum/carum/uploads/'+new_file_name+'_tm.'+ext_name+'" style="left:200px;" />');
					$('#show-file-attached').show( "slow", function() {
						$('#progress').hide();		// Where the progress bar appears
						$('#show-file-options').show( "slow");
					  });

					//alert('Success '+data.files[0].name);
					window.parent.$('#image').val(new_file_name+'.'+ext_name);
				}
				
				if(status == 'error'){
					//alert('Error');
					data.context.addClass('error');
				}

				setTimeout(function(){
					data.context.fadeOut('slow');
				},3000);
			});
		},

		progress: function(e, data){

			$('#progress').show();		// Where the progress bar appears

			// Calculate the completion percentage of the upload
			var progress = parseInt(data.loaded / data.total * 100, 10);

			// Update the hidden input field and trigger a change
			// so that the jQuery knob plugin knows to update the dial
			data.context.find('input').val(progress).change();

			if(progress == 100){
				data.context.removeClass('working');
				//alert($('#cv-form-container .form-item-files-ts-form-attach').css( 'background-image' ));
				// Change the droping area background image
				//$('#cv-form-container .form-item-files-ts-form-attach').css( "background-image", 'url(/images/cv_uploaded.png)' );
			}
		},

		fail:function(e, data){
			// Something has gone wrong!
			data.context.addClass('error');
		}

	});


	// Prevent the default action when a file is dropped on the window
	$(document).on('drop dragover', function (e) {
		e.preventDefault();
	});

	// Helper function that formats the file sizes
	function formatFileSize(bytes) {
		if (typeof bytes !== 'number') {
			return '';
		}

		if (bytes >= 1000000000) {
			return (bytes / 1000000000).toFixed(2) + ' GB';
		}

		if (bytes >= 1000000) {
			return (bytes / 1000000).toFixed(2) + ' MB';
		}

		return (bytes / 1000).toFixed(2) + ' KB';
	}

});