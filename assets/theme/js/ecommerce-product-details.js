/*************************************
*        Default Score Rating        *
**************************************/
$.fn.raty.defaults.path = '../../assets/theme/css/raty/';

$('.ratings').raty({
    readOnly: true,
    score: 4.5
});

// Star Review
$('#customer-review').raty({
    half: true,
});

$(".touchspin").TouchSpin({ min: 1, max: 99 });