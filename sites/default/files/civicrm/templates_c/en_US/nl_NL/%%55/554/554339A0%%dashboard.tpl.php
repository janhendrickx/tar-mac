<?php /* Smarty version 2.6.27, created on 2015-04-30 21:26:10
         compiled from CRM/common/dashboard.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'crmScope', 'CRM/common/dashboard.tpl', 1, false),array('function', 'crmURL', 'CRM/common/dashboard.tpl', 51, false),array('function', 'crmKey', 'CRM/common/dashboard.tpl', 53, false),)), $this); ?>
<?php $this->_tag_stack[] = array('crmScope', array('extensionKey' => "")); $_block_repeat=true;smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php echo '
<script type="text/javascript">

CRM.$(function($) {
  // The set of options we can use to initialize jQuery.dashboard().
  var options = {
    // Optional. Defaults to 3.  You\'ll need to change the width of columns in CSS too.
    columns: 2,

    // Set this to a link to your server-side script that adds widgets to the dashboard.
    // The server will need to choose a column to add it to, and change the user\'s settings
    // stored server-side.
    // Required.
    emptyPlaceholderInner: \'\',

    // These define the urls and data objects used for all of the ajax requests to the server.
    // data objects are extended with more properties, as defined below.
    // All are required.  All should return JSON.
    ajaxCallbacks: {

      // Server returns the configuration of widgets for this user;
      // An array (keyed by zero-indexed column ID), of arrays (keyed by widget ID) of
      // booleans; true if the widget is minimized.  False if not.
      // E.g. [{ widgetID: isMinimized, ...}, ...]
      getWidgetsByColumn: {
        url:  '; ?>
'<?php echo CRM_Utils_System::crmURL(array('p' => 'civicrm/ajax/dashboard','h' => 0), $this);?>
'<?php echo ',
        data: {
          op: \'get_widgets_by_column\', key: '; ?>
"<?php echo smarty_function_crmKey(array('name' => 'civicrm/ajax/dashboard'), $this);?>
"<?php echo '
        }
      },

      // Given the widget ID, the server returns the widget object as an associative array.
      // E.g. {content: \'<p>Widget content</p>\', title: \'Widget Title\', }
      //
      // Required properties:
      //  * title: Text string.  Widget title
      //  * content: HTML string.  Widget content
      //
      // Optional properties:
      //  * classes: String CSS classes that will be added to the widget\'s <li>
      //  * fullscreen: HTML string for the content of the widget\'s full screen display.
      //  * settings: Boolean.  True if widget has settings pane/display and server-side
      //    callback.
      //
      // Server-side executable script callbacks are called and executed on certain
      // events.  They can use the widgets property of the dashboard object returned
      // from jQuery.dashboard().  E.g. dashboard.widgets[widgetID].  They should be
      // javascript files on the server.  Set the property to the path of the js file:
      //  * initScript:  Called when dashboard is initialising (but not finished).
      //  * fullscreenInitScript:  Called when the full screen element is initialising
      //    (being created for the first time).
      //  * fullscreenScript:  Called when switching into full screen mode.  Executed
      //    every time the widget goes into full-screen mode.
      //  * reloadContentScript:  Called when the widget\'s reloadContent() method is
      //    called.  (The widget.reloadContent() method is not used internally so must
      //    have either the callback function or this server-side executable javascript
      //    file implemented for the method to do anything.)
      //
      // The \'id\' property of data is reserved for the widget ID – a string.
      getWidget: {
        url: '; ?>
'<?php echo CRM_Utils_System::crmURL(array('p' => 'civicrm/ajax/dashboard','h' => 0), $this);?>
'<?php echo ',
        data: {
          // id: widgetID,
          op: \'get_widget\', key: '; ?>
"<?php echo smarty_function_crmKey(array('name' => 'civicrm/ajax/dashboard'), $this);?>
"<?php echo '
        }
      },

      // jQuery.dashboard() POSTs the widget-to-column settings here.  The server\'s
      // response is sent to console.log() (if it exists), but is not used.  No checks
      // for errors have been implemented yet.
      // The \'columns\' property of data is reserved for the widget-to-columns settings:
      //    An array (keyed by zero-indexed column ID), of arrays (keyed by widget ID)
      //    of ints; 1 if the widget is minimized.  0 if not.
      saveColumns: {
        url: '; ?>
'<?php echo CRM_Utils_System::crmURL(array('p' => 'civicrm/ajax/dashboard','h' => 0), $this);?>
'<?php echo ',
        data: {
          // columns: array(0 => array(widgetId => isMinimized, ...), ...),
          op: \'save_columns\', key: '; ?>
"<?php echo smarty_function_crmKey(array('name' => 'civicrm/ajax/dashboard'), $this);?>
"<?php echo '
        }
      },

      // jQuery.dashboard() GETs a widget\'s settings object and POST\'s a users submitted
      // settings back to the server.  The return, in both cases, is an associative
      // array with the new settings markup and other info:
      //
      // Required properties:
      //  * markup: HTML string.  The inner HTML of the settings form.  jQuery.dashboard()
      //    provides the Save and Cancel buttons and wrapping <form> element.  Can include
      //    <input>s of any standard type and <select>s, nested in <div>s etc.
      //
      // Server-side executable script callbacks (See documentation for
      // ajaxCallbacks.getWidgets):
      //  * initScript:  Called when widget settings are initialising.
      //  * script:  Called when switching into settings mode.  Executed every time
      //    the widget goes into settings-edit mode.
      //
      // The \'id\' property of data is reserved for the widget ID.
      // The \'settings\' property of data is reserved for the user-submitted settings.
      //    An array (keyed by the name="" attributes of <input>s), of <input> values.
      widgetSettings: {
        url: '; ?>
'<?php echo CRM_Utils_System::crmURL(array('p' => 'civicrm/ajax/dashboard','h' => 0), $this);?>
'<?php echo ',
        data: {
          // id: widgetId,
          // settings: array(name => value, ...),
          op: \'widget_settings\', key: '; ?>
"<?php echo smarty_function_crmKey(array('name' => 'civicrm/ajax/dashboard'), $this);?>
"<?php echo '
        }
      }
    },

    // Optional javascript callbacks for dashboard events.
    // All callbacks have the dashboard object available as the \'this\' variable.
    // This property and all of it\'s members are optional.
    callbacks: {
      // Called when dashboard is initializing.
      init: function() {
        var dashboard = this;
      },

      // Called when dashboard has finished initializing.
      ready: function() {
        var dashboard = this;
      },

      // Called when dashboard has saved columns to the server.
      saveColumns: function() {
        var dashboard = this;
      },

      // Called when a widget has gone into fullscreen mode.
      // Takes one argument for the widget.
      enterFullscreen: function(widget) {
        var dashboard = this;
      },

      // Called when a widget has come out of fullscreen mode.
      // Takes one argument for the widget.
      exitFullscreen: function(widget) {
        var dashboard = this;
      }
    },

    // Optional javascript callbacks for widget events.
    // All callbacks have the respective widget object available as the \'this\' variable.
    // This property and all of it\'s members are optional.
    widgetCallbacks: {
      // Called when a widget has been gotten from the server.
      get: function() {
        var widget = this;
      },

      // Called when an external script has invoked the widget.reloadContent() method.
      // (The widget.reloadContent() method is not used internally so must have either
      // this callback function or a server-side executable javascript file implemented
      // for the method to do anything.)
      reloadContent: function() {
        var widget = this;
      },

      // Called when the widget has gone into settings-edit mode.
      showSettings: function() {
        var widget = this;
      },

      // Called when the widget\'s settings have been saved to the server.
      saveSettings: function() {
        var widget = this;
      },

      // Called when the widget has gone out of settings-edit mode.
      hideSettings: function() {
        var widget = this;
      },

      // Called when the widget has been removed from the dashboard.
      remove: function() {
        var widget = this;
      }
    }
  };

  // Initialize the dashboard using these options
  $(\'#civicrm-dashboard\').dashboard(options);

});

</script>
'; ?>

<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>