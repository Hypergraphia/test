$(function () {
    var ractive = new Ractive({
  el: '#container',
  template: '#template',
  data: {} });

})

//hanko.js

$(function () {

    $('.submit').click(function () {

        $("#hanko").delay(1800).animate({
            opacity: 1,
            "z-index": "11",
            "top": "50%",
            "left": "47%",
            "width": "64px"
        }, 1000, function () {});
    });
});


// fadeOut.js
$(function () {

    $('.submit').click(function () {
        $('.background2').fadeOut(3000);
    });

});

