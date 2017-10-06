/**
 * script.js
 */

jQuery(document).ready(function($){
	$('[btn-ajax-sum]').click(function(){
		var data = {
			action: 'sample_sum',
			num_1: $('input[name = num_1]').val(),
			num_2: $('input[name = num_2]').val(),
			security: $('input[name = nonce_field]').val()
		}

		$.post(ajaxurl, data, function(response){
			$('input[name = sum_result]').val(response);
		})
	})
})