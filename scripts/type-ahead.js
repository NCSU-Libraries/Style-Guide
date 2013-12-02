/*jslint  browser: true, white: true, plusplus: true */
/*global $: true */

$(function () {
    'use strict';

    // Load countries then initialize plugin:
    $.ajax({
        url: 'scripts/countries.txt',
        dataType: 'json'
    }).done(function (source) {

        var countriesArray = $.map(source, function (value, key) { return { value: value, data: key }; }),
            countries = $.map(source, function (value) { return value; });

        // Initialize autocomplete with local lookup:
        $('#autocomplete').autocomplete({
            lookup: countriesArray,
            onSelect: function (suggestion) {
                $('#selection').html('You selected: ' + suggestion.value + ', ' + suggestion.data);
            }
        });

    });

});
