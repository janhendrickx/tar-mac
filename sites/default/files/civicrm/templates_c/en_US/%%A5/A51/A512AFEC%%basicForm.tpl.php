<?php /* Smarty version 2.6.27, created on 2015-04-30 20:56:46
         compiled from CRM/Form/basicForm.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'crmScope', 'CRM/Form/basicForm.tpl', 1, false),)), $this); ?>
<?php $this->_tag_stack[] = array('crmScope', array('extensionKey' => "")); $_block_repeat=true;smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><div class="crm-block crm-form-block crm-<?php echo $this->_tpl_vars['formName']; ?>
-block">
    <div class="crm-submit-buttons"><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/common/formButtons.tpl", 'smarty_include_vars' => array('location' => 'top')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></div>
    <?php if ($this->_tpl_vars['formName'] == 'Contribute_Preferences'): ?>
      <table class="form-layout">
        <tr class="crm-preferences-form-block-invoicing">
          <td>
            <?php echo $this->_tpl_vars['form']['invoicing']['html']; ?>
 <?php echo $this->_tpl_vars['form']['invoicing']['label']; ?>

          </td>
        </tr>
      </table>
    <?php endif; ?>
    <table class="form-layout" id="invoicing_blocks">
        <?php $_from = $this->_tpl_vars['fields']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['fieldName'] => $this->_tpl_vars['field']):
?>
            <?php $this->assign('n', $this->_tpl_vars['fieldName']); ?>
            <?php if ($this->_tpl_vars['form'][$this->_tpl_vars['n']]): ?>
              <tr class="crm-preferences-form-block-<?php echo $this->_tpl_vars['fieldName']; ?>
">
                    <?php if ($this->_tpl_vars['field']['html_type'] == 'checkbox' || $this->_tpl_vars['field']['html_type'] == 'checkboxes'): ?>
                        <td class="label"></td>
                        <td>
                            <?php echo $this->_tpl_vars['form'][$this->_tpl_vars['n']]['html']; ?>
 <?php echo $this->_tpl_vars['form'][$this->_tpl_vars['n']]['label']; ?>

                            <?php if ($this->_tpl_vars['field']['description']): ?>
                                <br /><span class="description"><?php echo $this->_tpl_vars['field']['description']; ?>
</span>
                            <?php endif; ?>
                        </td>
                    <?php else: ?>
                        <td class="label"><?php echo $this->_tpl_vars['form'][$this->_tpl_vars['n']]['label']; ?>
</td>
                        <td>
                            <?php echo $this->_tpl_vars['form'][$this->_tpl_vars['n']]['html']; ?>

                            <?php if ($this->_tpl_vars['field']['description']): ?>
                                <br /><span class="description"><?php echo $this->_tpl_vars['field']['description']; ?>
</span>
                            <?php endif; ?>
                        </td>
                    <?php endif; ?>
              </tr>
          <?php endif; ?>
        <?php endforeach; endif; unset($_from); ?>
  </table>

    <div class="crm-submit-buttons"><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/common/formButtons.tpl", 'smarty_include_vars' => array('location' => 'bottom')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></div>
</div>
<?php if ($this->_tpl_vars['formName'] == 'Contribute_Preferences'): ?>
  <?php echo '
    <script type="text/javascript">
      cj(document).ready(function() {
        if (document.getElementById("invoicing").checked) {
          cj("#invoicing_blocks").show();
        }
        else {
          cj("#invoicing_blocks").hide();
        }
      });
      cj(function () {
        cj("input[type=checkbox]").click(function() {
          if (cj("#invoicing").is(":checked")) {
            cj("#invoicing_blocks").show();
          }
          else {
            cj("#invoicing_blocks").hide();
          }
        });
      });
    </script>
  '; ?>

<?php endif; ?>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>