<td class="sf_admin_text sf_admin_list_td_id">
  <?php echo link_to($field_values->getId(), 'field_values_edit', $field_values) ?>
</td>
<td class="sf_admin_text sf_admin_list_td_value">
  <?php echo $field_values->getValue() ?>
</td>
<td class="sf_admin_foreignkey sf_admin_list_td_field_id">
  <?php echo $field_values->getFieldId() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_fielvaluedorder">
  <?php echo $field_values->getFielvaluedorder() ?>
</td>
<td class="sf_admin_date sf_admin_list_td_created_at">
  <?php echo false !== strtotime($field_values->getCreatedAt()) ? format_date($field_values->getCreatedAt(), "f") : '&nbsp;' ?>
</td>
<td class="sf_admin_date sf_admin_list_td_updated_at">
  <?php echo false !== strtotime($field_values->getUpdatedAt()) ? format_date($field_values->getUpdatedAt(), "f") : '&nbsp;' ?>
</td>
