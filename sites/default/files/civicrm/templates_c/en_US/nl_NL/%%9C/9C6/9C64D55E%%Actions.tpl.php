<?php /* Smarty version 2.6.27, created on 2015-04-30 21:41:08
         compiled from CRM/Report/Form/Actions.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'crmScope', 'CRM/Report/Form/Actions.tpl', 1, false),array('block', 'ts', 'CRM/Report/Form/Actions.tpl', 45, false),array('modifier', 'cat', 'CRM/Report/Form/Actions.tpl', 31, false),array('modifier', 'crmAddClass', 'CRM/Report/Form/Actions.tpl', 54, false),)), $this); ?>
<?php $this->_tag_stack[] = array('crmScope', array('extensionKey' => "")); $_block_repeat=true;smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php if (! $this->_tpl_vars['printOnly']): ?> 
    <?php if ($this->_tpl_vars['rows']): ?>
    <div class="crm-tasks">
      <?php $this->assign('print', ((is_array($_tmp=((is_array($_tmp='_qf_')) ? $this->_run_mod_handler('cat', true, $_tmp, $this->_tpl_vars['form']['formName']) : smarty_modifier_cat($_tmp, $this->_tpl_vars['form']['formName'])))) ? $this->_run_mod_handler('cat', true, $_tmp, '_submit_print') : smarty_modifier_cat($_tmp, '_submit_print'))); ?>
      <?php $this->assign('pdf', ((is_array($_tmp=((is_array($_tmp='_qf_')) ? $this->_run_mod_handler('cat', true, $_tmp, $this->_tpl_vars['form']['formName']) : smarty_modifier_cat($_tmp, $this->_tpl_vars['form']['formName'])))) ? $this->_run_mod_handler('cat', true, $_tmp, '_submit_pdf') : smarty_modifier_cat($_tmp, '_submit_pdf'))); ?>
      <?php $this->assign('csv', ((is_array($_tmp=((is_array($_tmp='_qf_')) ? $this->_run_mod_handler('cat', true, $_tmp, $this->_tpl_vars['form']['formName']) : smarty_modifier_cat($_tmp, $this->_tpl_vars['form']['formName'])))) ? $this->_run_mod_handler('cat', true, $_tmp, '_submit_csv') : smarty_modifier_cat($_tmp, '_submit_csv'))); ?>
      <?php $this->assign('group', ((is_array($_tmp=((is_array($_tmp='_qf_')) ? $this->_run_mod_handler('cat', true, $_tmp, $this->_tpl_vars['form']['formName']) : smarty_modifier_cat($_tmp, $this->_tpl_vars['form']['formName'])))) ? $this->_run_mod_handler('cat', true, $_tmp, '_submit_group') : smarty_modifier_cat($_tmp, '_submit_group'))); ?>
      <?php $this->assign('chart', ((is_array($_tmp=((is_array($_tmp='_qf_')) ? $this->_run_mod_handler('cat', true, $_tmp, $this->_tpl_vars['form']['formName']) : smarty_modifier_cat($_tmp, $this->_tpl_vars['form']['formName'])))) ? $this->_run_mod_handler('cat', true, $_tmp, '_submit_chart') : smarty_modifier_cat($_tmp, '_submit_chart'))); ?>
      <table style="border:0;">
        <tr>
          <td>
            <table class="form-layout-compressed">
              <tr>
                <td><?php echo $this->_tpl_vars['form'][$this->_tpl_vars['print']]['html']; ?>
&nbsp;&nbsp;</td>
                <td><?php echo $this->_tpl_vars['form'][$this->_tpl_vars['pdf']]['html']; ?>
&nbsp;&nbsp;</td>
                <td><?php echo $this->_tpl_vars['form'][$this->_tpl_vars['csv']]['html']; ?>
&nbsp;&nbsp;</td>
                <?php if ($this->_tpl_vars['instanceUrl']): ?>
                  <td>&nbsp;&nbsp;&raquo;&nbsp;<a href="<?php echo $this->_tpl_vars['instanceUrl']; ?>
"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Existing report(s) from this template<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></a></td>
                <?php endif; ?>
              </tr>
            </table>
          </td>
          <td>
            <table class="form-layout-compressed" align="right">
              <?php if ($this->_tpl_vars['chartSupported']): ?>
                <tr>
                  <td><?php echo ((is_array($_tmp=$this->_tpl_vars['form']['charts']['html'])) ? $this->_run_mod_handler('crmAddClass', true, $_tmp, 'big') : smarty_modifier_crmAddClass($_tmp, 'big')); ?>
</td>
                  <td align="right"><?php echo $this->_tpl_vars['form'][$this->_tpl_vars['chart']]['html']; ?>
</td>
                </tr>
              <?php endif; ?>
              <?php if ($this->_tpl_vars['form']['groups']): ?>
                <tr>
                  <td>
                    <?php echo $this->_tpl_vars['form']['groups']['html']; ?>
<?php echo $this->_tpl_vars['form'][$this->_tpl_vars['group']]['html']; ?>

                    <script type="text/javascript">
                      <?php echo '
                      (function($) {
                        $(\'#groups\').val(\'\').change(function() {
                          CRM.confirm({
                            message: ts('; ?>
'<?php $this->_tag_stack[] = array('ts', array('escape' => 'js','1' => '<em>%1</em>')); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Add all contacts to %1 group?<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>'<?php echo ', {1: $(\'option:selected\', \'#groups\').text()})
                          })
                            .on({
                              \'crmConfirm:yes\': function() {
                                $(\'#groups\').siblings(\':submit\').click();
                              },
                              \'crmConfirm:no dialogclose\': function() {
                                $(\'#groups\').select2(\'val\', \'\');
                              }
                            });
                        });
                      })(CRM.$);
                      '; ?>

                    </script>
                  </td>
                </tr>
              <?php endif; ?>
            </table>
          </td>
        </tr>
      </table>
    </div>
  <?php endif; ?>

<?php echo '
  <script type="text/javascript">
    CRM.$(function($) {
      // Disable print/pdf output of charts
      $(\'select[name=charts]\', \'form.crm-report-form\').change(function() {
        var viewType = $(this).val(),
          flashChartType = \''; ?>
<?php if ($this->_tpl_vars['chartType']): ?><?php echo $this->_tpl_vars['chartType']; ?>
<?php else: ?><?php endif; ?><?php echo '\';
        $(\'#_qf_Summary_submit_pdf, #_qf_Summary_submit_print\').prop(\'disabled\', (viewType && flashChartType != viewType));
      });
    });
  </script>
'; ?>

<?php endif; ?> <?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>