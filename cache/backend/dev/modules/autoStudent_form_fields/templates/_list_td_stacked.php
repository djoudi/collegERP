<td colspan="4">
  <?php echo __('%%id%% - %%field_id%% - %%created_at%% - %%updated_at%%', array('%%id%%' => link_to($student_form_fields->getId(), 'student_form_fields_edit', $student_form_fields), '%%field_id%%' => $student_form_fields->getFieldId(), '%%created_at%%' => false !== strtotime($student_form_fields->getCreatedAt()) ? format_date($student_form_fields->getCreatedAt(), "f") : '&nbsp;', '%%updated_at%%' => false !== strtotime($student_form_fields->getUpdatedAt()) ? format_date($student_form_fields->getUpdatedAt(), "f") : '&nbsp;'), 'messages') ?>
</td>
