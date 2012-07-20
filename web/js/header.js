$(function(){

    //userinfo
    $('.user-info').click(function(){
        if(!$(this).hasClass('user-active')) {
            console.log('no class');
            var $userInfo = $(this);
            var $userDrop = $('.user-dropbox');

            $userDrop.slideDown('fast');
            $userInfo.addClass('user-active');					//add class to change color and background

        } else {
            console.log('has class');
            $(this).removeClass('user-active');
            $('.user-dropbox').hide();
        }

        //remove notification box if visible
        $('.notification-counter').removeClass('notification-active');
        $('.notification-box').hide();

        return false;
    });


    //notification onclick
    $('.notification-counter').click(function(){

        var $counter = $(this);

        if(!$counter.hasClass('notification-active')) {
            $counter.addClass('notification-active');
            $('.notification-box').slideDown('fast');			//show notification box

        } else {
            $counter.removeClass('notification-active');
            $('.notification-box').hide();
        }

        //this will hide user info drop down when visible
        $('.user-info').removeClass('user-active');
        $('.user-dropbox').hide();

        return false;
    });

    $(document).mouseup(function(e) {
        if($(e.target).parents().index() < 4 || $(e.target).parents().index() > 7){
            $('.notification-counter').removeClass('notification-active');
            $('.notification-box').hide();

            $('.user-info').removeClass('user-active');
            $('.user-dropbox').hide();
        }
    });

    // Widget hover event
    // show arrow image in the right side of the title upon hover
    $('.utopia-widget-title').hover(function(){
        $(this).after().append('<span class="collapse-widget">&nbsp;&nbsp;</span>');
    }, function(){
        $(this).children('.collapse-widget').remove()
    });

    //show/hide widget content when widget title is clicked
    $('.utopia-widget-title').click(function(){
        if($(this).next().is(':visible')) {
            $(this).next().slideUp('fast');
            $(this).css('border-bottom','none');
            $(this).addClass('utopia-widget-title-toggle');
        } else {
            $(this).next().slideDown('fast');
            $(this).removeClass('utopia-widget-title-toggle');
            $(this).css('border-bottom','1px solid #eee');
        }

    });


    $('.search-panel').hover(function(){
        $('.search-box img').hide();
        $('.search-box form').show();
    }, function(){
        $('.search-box form').hide();
        $('.search-box img').show();
    });
});