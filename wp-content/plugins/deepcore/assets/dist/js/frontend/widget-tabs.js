!function(t){function e(t,e){jQuery(".widget-tabs").each(function(){jQuery(this).find(".tab_content").hide(),document.location.hash&&1<=jQuery(this).find("ul.tabs li a[href='"+document.location.hash+"']").length?(jQuery(this).find("ul.tabs li a[href='"+document.location.hash+"']").parent().addClass("active").show(),jQuery(this).find(document.location.hash+".tab_content").show()):(jQuery(this).find("ul.tabs li:first").addClass("active").show(),jQuery(this).find(".tab_content:first").show())}),jQuery("ul.tabs li").on("click",function(t){jQuery(this).parents(".widget-tabs").find("ul.tabs li").removeClass("active"),jQuery(this).addClass("active"),jQuery(this).parents(".widget-tabs").find(".tab_content").hide();var e=jQuery(this).find("a").attr("href");jQuery(this).parents(".widget-tabs").find(e).fadeIn(),t.preventDefault()})}t(window).on("elementor/frontend/init",function(){elementorFrontend.hooks.addAction("frontend/element_ready/w_tab.default",e)})}(jQuery);