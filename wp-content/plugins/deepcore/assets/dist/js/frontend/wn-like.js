!function(e){function n(e,a){a(document).on("click",".wn-like-button",function(){var e=a(this),n=e.attr("data-post-id"),t=e.attr("data-nonce"),e=e.attr("data-iscomment"),i=a("1"===e?".wn-like-comment-button-"+n:".wn-like-button-"+n),l=i.next("#wn-like-loader");return""!==n&&a.ajax({type:"POST",url:deep_localize.deep_ajax,data:{action:"process_simple_like",post_id:n,nonce:t,is_comment:e},beforeSend:function(){l.html('&nbsp;<div class="loader">Loading...</div>'),a(".wn-like-counter").hide()},success:function(e){var n,t=e.icon,o=e.count;i.html(t+o),"unliked"===e.status?(n=deep_localize.like,i.prop("title",n),i.removeClass("liked")):(n=deep_localize.unlike,i.prop("title",n),i.addClass("liked")),l.empty(),a(".wn-like-counter").show()}}),!1})}e(window).on("elementor/frontend/init",function(){elementorFrontend.hooks.addAction("frontend/element_ready/lvs.default",n)})}(jQuery);