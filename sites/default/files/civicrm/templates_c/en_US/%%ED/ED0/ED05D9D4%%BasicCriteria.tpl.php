<?php /* Smarty version 2.6.27, created on 2015-04-30 20:10:55
         compiled from CRM/Contact/Form/Search/BasicCriteria.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'crmScope', 'CRM/Contact/Form/Search/BasicCriteria.tpl', 1, false),array('block', 'ts', 'CRM/Contact/Form/Search/BasicCriteria.tpl', 30, false),array('modifier', 'crmAddClass', 'CRM/Contact/Form/Search/BasicCriteria.tpl', 79, false),)), $this); ?>
<?php $this->_tag_stack[] = array('crmScope', array('extensionKey' => "")); $_block_repeat=true;smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
<?php if ($this->_tpl_vars['context'] == 'smog'): ?>
    <?php ob_start(); ?><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Find Contacts within this Group<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->assign('editTitle', ob_get_contents());ob_end_clean(); ?>
<?php elseif ($this->_tpl_vars['context'] == 'amtg' && ! $this->_tpl_vars['rows']): ?>
    <?php ob_start(); ?><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Find Contacts to Add to this Group<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->assign('editTitle', ob_get_contents());ob_end_clean(); ?>
<?php else: ?>
    <?php ob_start(); ?><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Edit Search Criteria<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->assign('editTitle', ob_get_contents());ob_end_clean(); ?>
<?php endif; ?>

<?php echo '<div class="crm-block crm-form-block crm-basic-criteria-form-block"><div class="crm-accordion-wrapper crm-case_search-accordion '; ?><?php if ($this->_tpl_vars['rows']): ?><?php echo 'collapsed'; ?><?php endif; ?><?php echo '"><div class="crm-accordion-header crm-master-accordion-header">'; ?><?php echo $this->_tpl_vars['editTitle']; ?><?php echo '</div><!-- /.crm-accordion-header --><div class="crm-accordion-body"><div class="crm-section sort_name-section"><div class="label">'; ?><?php echo $this->_tpl_vars['form']['sort_name']['label']; ?><?php echo '</div><div class="content">'; ?><?php echo $this->_tpl_vars['form']['sort_name']['html']; ?><?php echo '</div><div class="clear"></div></div>'; ?><?php if ($this->_tpl_vars['form']['contact_type']): ?><?php echo '<div class="crm-section contact_type-section"><div class="label">'; ?><?php echo $this->_tpl_vars['form']['contact_type']['label']; ?><?php echo '</div><div class="content">'; ?><?php echo $this->_tpl_vars['form']['contact_type']['html']; ?><?php echo '</div><div class="clear"></div></div>'; ?><?php endif; ?><?php echo ''; ?><?php if ($this->_tpl_vars['form']['group']): ?><?php echo '<div class="crm-section group_selection-section"><div class="label">'; ?><?php if ($this->_tpl_vars['context'] == 'smog'): ?><?php echo ''; ?><?php echo $this->_tpl_vars['form']['group_contact_status']['label']; ?><?php echo ''; ?><?php else: ?><?php echo ''; ?><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php echo 'in'; ?><?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php echo ' &nbsp;'; ?><?php endif; ?><?php echo '</div><div class="content">'; ?><?php if ($this->_tpl_vars['context'] == 'smog'): ?><?php echo ''; ?><?php echo $this->_tpl_vars['form']['group_contact_status']['html']; ?><?php echo ''; ?><?php else: ?><?php echo ''; ?><?php echo ((is_array($_tmp=$this->_tpl_vars['form']['group']['html'])) ? $this->_run_mod_handler('crmAddClass', true, $_tmp, 'big') : smarty_modifier_crmAddClass($_tmp, 'big')); ?><?php echo ''; ?><?php endif; ?><?php echo '</div><div class="clear"></div></div>'; ?><?php endif; ?><?php echo ''; ?><?php if ($this->_tpl_vars['form']['tag']): ?><?php echo '<div class="crm-section tag-section"><div class="label">'; ?><?php echo $this->_tpl_vars['form']['tag']['label']; ?><?php echo '</div><div class="content">'; ?><?php echo ((is_array($_tmp=$this->_tpl_vars['form']['tag']['html'])) ? $this->_run_mod_handler('crmAddClass', true, $_tmp, 'medium') : smarty_modifier_crmAddClass($_tmp, 'medium')); ?><?php echo '</div><div class="clear"></div></div>'; ?><?php endif; ?><?php echo '<div class="crm-submit-buttons">'; ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/common/formButtons.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php echo '</div></div><!-- /.crm-accordion-body --></div><!-- /.crm-accordion-wrapper --></div><!-- /.crm-form-block -->'; ?>

<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>