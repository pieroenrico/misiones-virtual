(function($){

    $(document).ready(function(){
        $("#video1").bind("ended", function() {
            $('.animable').each(function(){
                $(this).removeClass('no-display').addClass($(this).attr('id'))
            })
        });
    })

    $(document).on('click', 'a.opener', function(e){
        e.preventDefault();
        $('.animable').each(function(){
            $(this).removeClass('no-display').addClass($(this).attr('id'))
        })
    })

})(jQuery);