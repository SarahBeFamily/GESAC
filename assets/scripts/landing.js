import $ from "jquery"

$('#search-flight').submit(function (e) {
	e.preventDefault();

	const $this = $(this);
	const origin = $this.find('.origin').val();
	const dest = $this.find('.destination').val();
	const from = $.datepicker.formatDate('ymmdd', $this.find('.from').datepicker('getDate'));
	const to = $.datepicker.formatDate('ymmdd', $this.find('.to').datepicker('getDate'));

	let skyCTA = `https://www.skyscanner.it/trasporti/voli/${origin}/${dest}/${from}/${to}/`;

	// Append form params
	skyCTA += '?' + $this.serialize();

	window.open(skyCTA);

});

