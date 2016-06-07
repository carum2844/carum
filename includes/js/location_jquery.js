jQuery( document ).ready(function() {
	var url_call = '';
	// Countries
	url_call = url_countries_call;
	url_call = url_call.replace("COUNTRY_ID", country_id);
	$.ajax({
		url: url_call,
		dataType: 'json',
	})
	.done(function(countries) {
		cargaSelect('location_country_id', country_id, countries);
		$('#location_country_id').removeAttr('disabled'); 
	});

	// If the state select exists....
	if ( $( "#location_state_id" ).length ) {
		if (country_id != "0"){
			// States
			url_call = url_states_call;
			url_call = url_call.replace("COUNTRY_ID", country_id);
			url_call = url_call.replace("STATE_ID", state_id);
			$.ajax({
				url: url_call,
				dataType: 'json',
			})
			.done(function(states) {
				cargaSelect('location_state_id', state_id, states);
				$('#location_state_id').removeAttr('disabled'); 
			});

			// If the city select exists....
			if ( $( "#location_city_id" ).length ) {

				if (state_id != "0"){
					// Cities
					url_call = url_cities_call;
					url_call = url_call.replace("COUNTRY_ID", country_id);
					url_call = url_call.replace("STATE_ID", state_id);
					url_call = url_call.replace("CITY_ID", city_id);
					$.ajax({
						url: url_call,
						dataType: 'json',
					})
					.done(function(cities) {
						cargaSelect('location_city_id', city_id, cities);
						$('#location_city_id').removeAttr('disabled'); 
					});
				}else{
					$("#location_city_id").attr("disabled","disabled");
					$("#location_alt_city").fadeOut();
				}
			}else{
				$("#location_state_id").attr("disabled","disabled");
				$("#location_city_id").attr("disabled","disabled");
				$("#location_alt_city").fadeOut();
			}

			if (city_id != "-"){
				$("#location_alt_city").hide();
			}
		}
	}

});

$(function() {
	$("#location_country_id").change(function(event) {
		$("option", "#location_state_id").remove();
		$("#location_state_id").attr("disabled","disabled");
		$("option", "#location_city_id").remove();
		$("#location_city_id").attr("disabled","disabled");
		$("#location_alt_city").fadeOut();
		country_id = $("#location_country_id").val();
		state_id = "0";
		url_call = url_states_call;
		url_call = url_call.replace("COUNTRY_ID", country_id);
		url_call = url_call.replace("STATE_ID", state_id);
		$.ajax({
			url: url_call,
			dataType: 'json',
		})
			.done(function(states) {
				cargaSelect('location_state_id', country_id, states);
				$('#location_state_id').removeAttr('disabled'); 
			});	
	});

	$("#location_state_id").change(function(event) {
		$("option", "#location_city_id").remove();
		$("#location_city_id").attr("disabled","disabled");
		$("#location_alt_city").fadeOut();
		country_id = $("#location_country_id").val();
		state_id = $("#location_state_id").val();
		city_id = "0";
		url_call = url_cities_call;
		url_call = url_call.replace("COUNTRY_ID", country_id);
		url_call = url_call.replace("STATE_ID", state_id);
		url_call = url_call.replace("CITY_ID", city_id);
		$.ajax({
			url: url_call,
			dataType: 'json',
		})
		.done(function(cities) {
			cargaSelect('location_city_id', city_id, cities);
			$('#location_city_id').removeAttr('disabled');
		});
	});
	// Mostrar ciudad alternativa si mostramos las ciudades.
	$("#location_city_id").change(function(event) {
		if ($("option:selected", this).val() == "-") {
			$("#location_alt_city").fadeIn();
		} else {
			$("#location_alt_city").fadeOut();
		}
	});
});


function cargaSelect(objeto, seleccion, data){

	var miselect = $("#"+objeto);

	miselect.find('option').remove();
	miselect.empty();
	$.each( data, function( index, value ) {
		miselect.append('<option value="' + index + '">' + value + '</option>');
	});
	miselect.each(function() {         
							// Sort all the options by text. I could easily sort these by val.
							$(this).html($('option', $(this)).sort(function(a, b) {
								return a.text == b.text ? 0 : a.text < b.text ? -1 : 1
							}));
						});
	$('#'+objeto+' option').each(function() {
		if($(this).val() == seleccion) {
			$(this).prop("selected", true);
		}
	});

};
