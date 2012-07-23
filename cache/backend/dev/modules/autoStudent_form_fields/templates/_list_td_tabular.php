<td class="sf_admin_text sf_admin_list_td_id">
  <?php echo link_to($student_form_fields->getId(), 'student_form_fields_edit', $student_form_fields) ?>
</td>
<td class="sf_admin_foreignkey sf_admin_list_td_field_id">
  <?php echo $student_form_fields->getFieldId() ?>
</td>
<td class="sf_admin_date sf_admin_list_td_created_at">
  <?php echo false !== strtotime($student_form_fields->getCreatedAt()) ? format_date($student_form_fields->getCreatedAt(), "f") : '&nbsp;' ?>
</td>
<td class="sf_admin_date sf_admin_list_td_updated_at">
  <?php echo false !== strtotime($student_form_fields->getUpdatedAt()) ? format_date($student_form_fields->getUpdatedAt(), "f") : '&nbsp;' ?>
</td>
