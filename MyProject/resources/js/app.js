require('./bootstrap');

var $ = require('jquery');

$(".faq-element").click(faq)

function faq() {

    $(".faq-element").not(this).find(".faq-answer").slideUp()

    $(".faq-element").not(this).find("i").removeClass("fa-minus").addClass("fa-plus")

    $(this).find(".faq-answer").slideToggle() 
     
    $(this).find("i").toggleClass("fa-plus fa-minus")


}