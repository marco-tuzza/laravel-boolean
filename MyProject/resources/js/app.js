require('./bootstrap');

var $ = require('jquery');

$(".faq-element").click(faq)

function faq() {

    $(".faq-element").not(this).find(".faq-answer").slideUp()

    $(this).find(".faq-answer").slideToggle()   
}