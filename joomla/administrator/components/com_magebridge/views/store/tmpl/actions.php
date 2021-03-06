<?php 
/*
 * Joomla! component MageBridge
 *
 * @author Yireo (info@yireo.com)
 * @package MageBridge
 * @copyright Copyright 2015
 * @license GNU Public License
 * @link http://www.yireo.com
 */

defined('_JEXEC') or die('Restricted access');

$form = $this->actions_form;
$fieldCount = count($form->getFieldset('actions'));
?>
<?php if($fieldCount > 0) : ?>
<table class="admintable">
<?php foreach($form->getFieldset('actions') as $field): ?>
    <tr>
        <td class="key"><?php echo $field->label; ?></td>
        <td class="value"><?php echo $field->input; ?></td>
    </tr>
<?php endforeach; ?>
</table>
<?php else: ?>
<p><?php echo JText::_('COM_MAGEBRIDGE_STORE_NO_PLUGINS'); ?></p>
<?php endif; ?>
