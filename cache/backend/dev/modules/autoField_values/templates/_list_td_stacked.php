<td colspan="6">
  <?php echo __('%%id%% - %%value%% - %%field_id%% - %%fielvaluedorder%% - %%created_at%% - %%updated_at%%', array('%%id%%' => link_to($field_values->getId(), 'field_values_edit', $field_values), '%%value%%' => $field_values->getValue(), '%%field_id%%' => $field_values->getFieldId(), '%%fielvaluedorder%%' => $field_values->getFielvaluedorder(), '%%created_at%%' => false !== strtotime($field_values->getCreatedAt()) ? format_date($field_values->getCreatedAt(), "f") : '&nbsp;', '%%updated_at%%' => false !== strtotime($field_values->getUpdatedAt()) ? format_date($field_values->getUpdatedAt(), "f") : '&nbsp;'), 'messages') ?>
</td>