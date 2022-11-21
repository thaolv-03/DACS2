var rangeSlider = $(".price-range"),
    minamount = $("#minamount"),
    maxamount = $("#maxamount"),
    minPrice = rangeSlider.data('min'),
    maxPrice = rangeSlider.data('max'),
    minValue = rangeSlider.data('min-value') !== '' ? rangeSlider.data('min-value') : minPrice,
    maxValue = rangeSlider.data('max-value') !== '' ? rangeSlider.data('max-value') : maxPrice;

rangeSlider.slider({
    range: true,
    min: minPrice,
    max: maxPrice,
    values: [minValue, maxValue],
    slide: function (event, ui) {
        minamount.val(ui.values[0] + ',000,000₫');
        maxamount.val(ui.values[1] + ',000,000₫');
    }
});
minamount.val(rangeSlider.slider("values", 0) + ',000,000₫');
maxamount.val(rangeSlider.slider("values", 1) + ',000,000₫');