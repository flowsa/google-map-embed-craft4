/**
 * GoogleMapEmbed plugin for Craft CMS
 *
 * GoogleMapEmbed Field JS
 *
 * @author    Flow Communications
 * @copyright Copyright (c) 2018 Flow Communications
 * @link      https://www.flowsa.com
 * @package   GoogleMapEmbed
 * @since     0.0.1GoogleMapEmbedGoogleMapEmbed
 */

;(function ($, window, document, undefined) {

  var pluginName = "GoogleMapEmbedGoogleMapEmbed",
    defaults = {};

  // Plugin constructor
  function Plugin (element, options) {
    this.element = element;

    this.options = $.extend({}, defaults, options);

    this._defaults = defaults;
    this._name = pluginName;

    this.init();
  }

  Plugin.prototype = {

    init: function (id) {
      var _this = this;

      $(function () {

        console.log('FlowGoogleMapField Field JS _this', _this);

        var debounce = null;
        var input = $(_this.element).find('input');
        var iframe = $(_this.element).find('iframe');
        input.on('keyup', function () {
          debounce = setTimeout(function () {
            clearTimeout(debounce);
            updateIframeSrc();
          }, 750);

        });

        function updateIframeSrc () {
          iframe.attr('src', iframe.data('src') + input.val());
        }

        updateIframeSrc();

      });
    }
  };

  // A really lightweight plugin wrapper around the constructor,
  // preventing against multiple instantiations
  $.fn[pluginName] = function (options) {
    return this.each(function () {
      if (!$.data(this, "plugin_" + pluginName)) {
        $.data(this, "plugin_" + pluginName,
          new Plugin(this, options));
      }
    });
  };

})(jQuery, window, document);
