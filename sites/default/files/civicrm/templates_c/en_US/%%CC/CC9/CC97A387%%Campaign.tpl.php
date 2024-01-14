<?php /* Smarty version 2.6.27, created on 2015-04-30 20:35:42
         compiled from CRM/Campaign/Form/Campaign.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'crmScope', 'CRM/Campaign/Form/Campaign.tpl', 1, false),array('block', 'ts', 'CRM/Campaign/Form/Campaign.tpl', 37, false),)), $this); ?>
<?php $this->_tag_stack[] = array('crmScope', array('extensionKey' => "")); $_block_repeat=true;smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><div class="crm-block crm-form-block crm-campaign-form-block">

<?php if ($this->_tpl_vars['cdType']): ?>
    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/Custom/Form/CustomData.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php else: ?>

<?php if ($this->_tpl_vars['action'] == 8): ?>
  <table class="form-layout">
    <tr>
      <td colspan="2">
        <div class="status"><div class="icon inform-icon"></div>&nbsp;<?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Are you sure you want to delete this Campaign?<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></div>
      </td>
    </tr>
  </table>
<?php else: ?>
  <div class="crm-submit-buttons">
       <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/common/formButtons.tpl", 'smarty_include_vars' => array('location' => 'top')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
  </div>

  <table class="form-layout-compressed">
  <tr class="crm-campaign-form-block-title">
      <td class="label"><?php echo $this->_tpl_vars['form']['title']['label']; ?>
</td>
      <td class="view-value"><?php echo $this->_tpl_vars['form']['title']['html']; ?>
</td>
  </tr>
  <tr class="crm-campaign-form-block-campaign_type_id">
      <td class="label"><?php echo $this->_tpl_vars['form']['campaign_type_id']['label']; ?>
</td>
      <td class="view-value"><?php echo $this->_tpl_vars['form']['campaign_type_id']['html']; ?>
</td>
  </tr>
  <tr class="crm-campaign-form-block-description">
      <td class="label"><?php echo $this->_tpl_vars['form']['description']['label']; ?>
</td>
      <td class="view-value"><?php echo $this->_tpl_vars['form']['description']['html']; ?>
</td>
  </tr>
  <tr class="crm-campaign-form-block-includeGroups">
      <td class="label"><?php echo $this->_tpl_vars['form']['includeGroups']['label']; ?>
</td>
      <td><?php echo $this->_tpl_vars['form']['includeGroups']['html']; ?>
</td>
  </tr>
  <tr class="crm-campaign-form-block-start_date">
      <td class="label"><?php echo $this->_tpl_vars['form']['start_date']['label']; ?>
</td>
      <td class="view-value"><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/common/jcalendar.tpl", 'smarty_include_vars' => array('elementName' => 'start_date')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
      </td>
  </tr>
  <tr class="crm-campaign-form-block-end_date">
      <td class="label"><?php echo $this->_tpl_vars['form']['end_date']['label']; ?>
</td>
      <td class="view-value"><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/common/jcalendar.tpl", 'smarty_include_vars' => array('elementName' => 'end_date')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></td>
  </tr>
  <tr class="crm-campaign-form-block-status_id">
      <td class="label"><?php echo $this->_tpl_vars['form']['status_id']['label']; ?>
</td>
      <td class="view-value"><?php echo $this->_tpl_vars['form']['status_id']['html']; ?>
</td>
  </tr>
  <tr class="crm-campaign-form-block-goal_general">
      <td class="label"><?php echo $this->_tpl_vars['form']['goal_general']['label']; ?>
</td>
      <td class="view-value"><?php echo $this->_tpl_vars['form']['goal_general']['html']; ?>
</td>
  </tr>
  <tr class="crm-campaign-form-block-goal_revenue">
      <td class="label"><?php echo $this->_tpl_vars['form']['goal_revenue']['label']; ?>
</td>
      <td class="view-value"><?php echo $this->_tpl_vars['form']['goal_revenue']['html']; ?>
</td>
  </tr>
  <tr class="crm-campaign-form-block-external_identifier">
      <td class="label"><?php echo $this->_tpl_vars['form']['external_identifier']['label']; ?>
</td>
      <td class="view-value"><?php echo $this->_tpl_vars['form']['external_identifier']['html']; ?>
</td>
  </tr>

    
  <tr class="crm-campaign-form-block-is_active">
      <td class="label"><?php echo $this->_tpl_vars['form']['is_active']['label']; ?>
</td>
      <td class="view-value"><?php echo $this->_tpl_vars['form']['is_active']['html']; ?>
</td>
  </tr>
  </table>

  <div id="customData"></div>

<?php endif; ?>
<div class="crm-submit-buttons">
     <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/common/formButtons.tpl", 'smarty_include_vars' => array('location' => 'bottom')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
</div>
</div>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/common/customData.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<?php echo '
<script type="text/javascript">
  CRM.$(function($) {
    '; ?>
<?php if ($this->_tpl_vars['customDataSubType']): ?>
      CRM.buildCustomData( '<?php echo $this->_tpl_vars['customDataType']; ?>
', <?php echo $this->_tpl_vars['customDataSubType']; ?>
 );
    <?php else: ?>
      CRM.buildCustomData( '<?php echo $this->_tpl_vars['customDataType']; ?>
' );
    <?php endif; ?>
    <?php echo '
  });
</script>
'; ?>



<?php endif; ?> 
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>