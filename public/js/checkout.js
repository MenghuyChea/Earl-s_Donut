Stripe.setPublishableKey('pk_test_51HDb9jDgrUuP0oTPQwu6ryMKkveKp2XYfJkrqrROdO9nlMP4zcGj96KQ6Zc63krOGl4iZ82LrYz2mwMsCLcuuMsO00i8qNSUmY');

var $check = $('#checkout-form');

$check.submit(function (event) {
    $('#charge-error').addClass('hidden');
    $check.find('button').prop('disabled',true);
    Stripe.card.createToken({
        number: $('#card-number').val(),
        cvc: $('#card-cvc').val(),
        exp_month: $('#card-expiry-month').val(),
        exp_year: $('#card-expiry-year').val(),
        name: $('#card-name').val(),
    }, stripeResponseHandler);
    return false;
})
function stripeResponseHandler(status,response) {
    if(response.error){
        $('#charge-error').removeClass('hidden');
        $('#charge-error').text(response.error.message);
        $check.find('button').prop('disabled',false);
    } else{
        var token = response.id;
        $check.append($('<input type="hidden" name="stripeToken" />').val(token));
        $check.get(0).submit();
    }
}

