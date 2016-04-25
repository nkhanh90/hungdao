(function ($) {
  Drupal.behaviors.homepageSlider = {
    attach: function (context, settings) {
      $('.flexslider').flexslider({
        animation: "slide",
        smoothHeight: true,
        start: function () {
          $('body').removeClass('loading');
        }
      });
    }
  };
  Drupal.behaviors.accordionSlider = {
    attach: function () {
      $("#tabs").tabs().addClass("ui-tabs-vertical ui-helper-clearfix");
      $("#tabs li").removeClass("ui-corner-top").addClass("ui-corner-left");
    }
  };
})(jQuery);

