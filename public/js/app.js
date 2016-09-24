(function($){

    $(document).ready(function(){
        $("#video1").bind("ended", function() {
            $('.animable').each(function(){
                $(this).removeClass('no-display').addClass($(this).attr('id'))
            })
        });
    })

})(jQuery);