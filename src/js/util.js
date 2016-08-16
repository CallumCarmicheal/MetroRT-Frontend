/**
 * Created by Callum Carmicheal on 09/04/2016.
 */

jQuery.fn.center = function () {
    this.css("position","absolute");
    this.css("top", Math.max(0, (($(window).height() - $(this).outerHeight()) / 2) +
            $(window).scrollTop()) + "px");
    this.css("left", Math.max(0, (($(window).width() - $(this).outerWidth()) / 2) +
            $(window).scrollLeft()) + "px");
    return this;
};


function strcmp(str1, str2) {
    return (str1.indexOf(str2)  == 0);
}

function strcnt(str1, str2) {
    return (str1.indexOf(str2) > -1);
}