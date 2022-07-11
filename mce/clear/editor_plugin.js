(function() {
  tinymce.create('tinymce.plugins.Clear', {
    /**
     * Initializes the plugin, this will be executed after the plugin has been created.
     * This call is done before the editor instance has finished it's initialization so use the onInit event
     * of the editor instance to intercept that event.
     *
     * @param {tinymce.Editor} ed Editor instance that the plugin is initialized in.
     * @param {string} url Absolute URL to where the plugin is located.
     */
    init : function(ed, url) {

      ed.addButton('clearboth', {
        title : 'Clear floats (' + ( tinymce.Env.mac ? '\u2303\u2325' : 'Shift+Alt+' ) + 'F' + ')',
        cmd : 'clearBoth',
        image : url + '/images/clear.svg',
        onPostRender : function() {
          var _this = this;
          // Highlight button on Clear element click
          ed.on('NodeChange', function(e) {
            _this.active(e.element.title == 'Clear');
          });
        }
      });
      var clearHTML = '<img src="' + url + '/images/transparent.gif" style="clear: both;" class="mceClear mceClearboth mceItemNoResize" title="Clear">';

      var insertClear = function(){
        var html = clearHTML;
        ed.execCommand('mceInsertContent', false, html);
      };

      ed.addCommand('clearBoth', function(){ insertClear(); });
      
      // Add editor shortcut
      ed.addShortcut('ctrl+alt+f', 'Clear floats', 'clearBoth');

      // Load plugin specific CSS into editor
      ed.on('Init', function() {
        ed.dom.loadCSS(url + '/css/clear.min.css');
      });

      // Replace clear with images
      ed.on('BeforeSetContent', function(e) {
        e.content = e.content.replace(/<br clear=" *([^" ]+) *">/g, clearHTML);
        e.content = e.content.replace(/<br style="clear:both;">/g, clearHTML);
        // Replace old versions of clear-floats
        e.content = e.content.replace(/<div class="clearfix divider"><\/div>/g, clearHTML);
      });

      // Replace images with clear
      ed.on('PostProcess', function(e) {
        if (e.get){
          e.content = e.content.replace(/<img[^>]+>/g, function(html) {
            if (html.indexOf('class="mceClear') !== -1) {
              var m, clear = (m = html.match(/mceClear([a-z]+)/)) ? m[1] : '';
              html = '<br style="clear:both;">';
            }
            return html;
          });
        }
      });
    },

    /**
     * Creates control instances based in the incomming name. This method is normally not
     * needed since the addButton method of the tinymce.Editor class is a more easy way of adding buttons
     * but you sometimes need to create more complex controls like listboxes, split buttons etc then this
     * method can be used to create those.
     *
     * @param {String} n Name of the control to create.
     * @param {tinymce.ControlManager} cm Control manager to use inorder to create new control.
     * @return {tinymce.ui.Control} New control instance or null if no control was created.
     */
    createControl : function(n, cm) {
      return null;
    },

    /**
     * Returns information about the plugin as a name/value array.
     * The current keys are longname, author, authorurl, infourl and version.
     *
     * @return {Object} Name/value array containing information about the plugin.
     */
    getInfo : function() {
      return {
        longname : 'Clear Floats Button',
        author : 'Graffino',
        authorurl : 'http://graffino.com',
        infourl : 'https://wordpress.org/plugins/clear-floats-button/',
        version : "1.2.5"
      };
    }
  });

  // Register plugin
  tinymce.PluginManager.add('clear', tinymce.plugins.Clear);
})();
