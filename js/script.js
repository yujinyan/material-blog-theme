/**
 * Created by yujin on 2016/2/8.
 */
$(function() {
    console.log('hello world');
    $('nav .menu-toggle').click(function() {
        $(this).toggleClass('is-active');
        $('.widget-area').toggleClass('show');
        $('.site-content').toggleClass('dimmed');
    });

    $('#wechat-button').click(function(e) {
        e.preventDefault();
        var imgLink = 'mywechat.jpg';
        var img = $('<img ="" width="270" height="322"></div>').attr('src',imgLink).on('load', function() {
            var modal = $('<div class="modal"></div>').append($(this));
            modal.fadeIn('fast');
            $('body').append(modal).click(function() {
                modal.fadeOut('fast');
                $(this).off('click');
            });

        });


    })
});