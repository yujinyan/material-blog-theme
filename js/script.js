/**
 * Created by yujin on 2016/2/8.
 */
$(function() {
    console.log('hello world');

    /* handheld menu toggle */
    $('nav .menu-toggle').click(function() {
        $(this).toggleClass('is-active');
        $('.widget-area').toggleClass('show');
        $('.site-content').toggleClass('dimmed');
    });

    /* Wechat info display button */
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
    });

    /* fold posts */
    if(!$('body').hasClass('single-post')) {
        $('.entry-content').each(function() {
            var height = $(this).height();
            if (height>300) {
                $(this).parents('article.post').addClass('collapsed');
            }
            var that = $(this);
            var collapsed = true;
            $(this).parent().next().find('.continue-reading').on('click', function() {
                console.log(collapsed);
                collapsed = toggleCard(that, $(this), height, collapsed);
            });

            function toggleCard(elem, button, fullHeight, collapsed) {
                if (collapsed) {
                    elem.animate({'height': fullHeight});
                    button.text('收起卡片');
                    collapsed = false;
                } else {
                    elem.animate({'height': 300});
                    button.text('继续阅读');
                    collapsed = true;
                }
                return collapsed;
            }

        });
    }

    /* Menu border bottom */
    var pages = ['placeholder','work','about'];
    var pathName = document.location.pathname;
    for (var i = 0; i < pages.length; i++) {
        if (pathName.search(pages[i]) > -1) {
            $('#primary-menu li a').removeClass('active');
            $('#primary-menu li a').eq(i).addClass('active');
            break;
        }
        $('#primary-menu li a').eq(0).addClass('active');
    }



});