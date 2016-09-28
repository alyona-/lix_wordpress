/**
 * Created by Алёна on 17.08.2016.
 */
 
 alert('скрипт подключен успешно!');
 /*
$(function() {
	alert('работает');
    var left_menu = function(el, multiple) {
        this.el = el || {};
        this.multiple = multiple || false;

        // Variables privadas
        var links = this.el.find('.link');
        // Evento
        links.on('click', {el: this.el, multiple: this.multiple}, this.dropdown)
    }

    left_menu.prototype.dropdown = function(e) {
        var $el = e.data.el;
        $this = $(this),
            $next = $this.next();

        $next.slideToggle();
        $this.parent().toggleClass('open');

        if (!e.data.multiple) {
            $el.find('.submenu').not($next).slideUp().parent().removeClass('open');
        };
    }

    var left_menu = new left_menu($('#left_menu'), false);
});
*/