import $ from "jquery"

function formatState (state) {

    if (!state.id) {
        return state.text;
    }

    const city = state.data.CityName || state.text;
    const country = state.data.CountryName;

    const $state = $($('.option-template').html());
    $state.find('.titlelist').text(state.text)
    $state.find('.location').text(city + ", " + country)
    $state.find('.code').text(state.id)
    return $state;
}

function initSelect2() {

    const ssSuggest = 'https://www.skyscanner.net/g/autosuggest-search/api/v1/search-flight/IT/it-IT/{term}?isDestination=false';
    const select2Sel = '.select2-input';

    $(select2Sel).each(function (i, e) {

        const $e = $(e);
        let selConf = {
            ...{
                multiple: true,
                placeholder: $e.data('placeholder') ?? '',
                allowClear: true,
                containerCssClass: ':all:',
                maximumSelectionLength: 1,
                minimumInputLength: 0,
                minimumResultsForSearch: $e.data('mini-mum-results') !== undefined ? $e.data('mini-mum-results') : false,
                language: 'it',
                dropdownParent: $e.closest('.relative'),
                templateResult: formatState,
                ajax: {
                    url: function (params) {
                        return ssSuggest.replace("{term}", params.term);
                    },
                    dataType: 'json',
                    processResults: function (data) {

						let results= [];

						$.each(data, function(i, d) {

							results[i] = {
								id: d.PlaceId,
								text: d.PlaceName + ' (' + d.PlaceId + ')' ,
								data: d
							}
						});

                        return {
                            results: results
                        };
                    }
                }
            },
        }

        $e.select2(selConf);

        const select2Instance = $e.data('select2');
        select2Instance.on('results:message', function (params) {
            this.dropdown._resizeDropdown();
            this.dropdown._positionDropdown();
        });

        $e.on('select2:opening', function (e) {
            $e.val(null).trigger('change');
        });


    });

}

$(document).ready(function () {
    initSelect2();
});

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

