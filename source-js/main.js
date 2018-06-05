jQuery(document).ready(function() {
  jQuery('.menu-trigger').click(function() {
    jQuery('.custom-menu-class').slideToggle();
  });
});

jQuery(function($){
  if ($('.ajax-blog').length > 0 ) {
    $(window).scroll(function(){
      var bottomOffset = 2000; // отступ от нижней границы сайта, до которого должен доскроллить пользователь, чтобы подгрузились новые посты
      var data = {
        'action': 'loadmore',
        'query': true_posts,
        'page' : current_page
      };
      if( $(document).scrollTop() > ($(document).height() - bottomOffset) && !$('body').hasClass('loading')){
        $.ajax({
          url:ajaxurl,
          data:data,
          type:'POST',
          beforeSend: function( xhr){
            $('body').addClass('loading');
          },
          success:function(data){
            if( data ) {
              $('#true_loadmore').before(data);
              $('body').removeClass('loading');
              current_page++;
            }
          }
        });
      }
    });
  }});

