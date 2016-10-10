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
    $(document).on('click', '#slide', function(e){

        if($('body').hasClass('home')) {
            e.preventDefault();
            window.location = '/lobby'

        }
    })

})(jQuery);