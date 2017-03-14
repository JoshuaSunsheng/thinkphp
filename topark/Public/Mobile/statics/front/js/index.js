$(function() {
    var Accordion = function(el, multiple) {
        this.el = el || {};
        this.multiple = multiple || false;

        // Variables privadas
        var links = this.el.find('.link');
        // Evento
        links.on('click', {el: this.el, multiple: this.multiple}, this.dropdown)
    }

    Accordion.prototype.dropdown = function(e) {
        var $el = e.data.el;
        $this = $(this),
            $next = $this.next();

        $next.slideToggle(300);
        $this.parent().toggleClass('open');
        $(".shade").slideToggle(100);

        if (!e.data.multiple) {
            $el.find('.submenu').not($next).slideUp().parent().removeClass('open');
        };
    }

    var accordion = new Accordion($('#accordion'), false);

    //点击其他区域关闭
    $('div.shade').on('click', function(){
        $next.slideUp();
        $(this).slideUp();
        $('.submenu').parent().removeClass('open');
    });

    //当前页链接变色
    $(".submenu li a").each(function(){
        $this = $(this);
        if($this[0].href==String(window.location)){
            $this.addClass("blueA-current");
        }
    });

    //点击回到顶部
    $('.backto-top').bind('touchstart click', function(){
        $('html, body').animate({scrollTop:0}, 'slow');
    });


});