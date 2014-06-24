/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$(window).load(function(){
    var parent_height = $('.centralized').parent().height();
    var image_height = $('.centralized').height();
    var top_margin = (parent_height - image_height)/2;
    $('.centralized').css('margin-top', top_margin);
});
