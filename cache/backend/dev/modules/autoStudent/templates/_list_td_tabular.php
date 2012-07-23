<td class="sf_admin_text sf_admin_list_td_id">
  <?php echo link_to($student->getId(), 'student_edit', $student) ?>
</td>
<td class="sf_admin_text sf_admin_list_td_student_code">
  <?php echo $student->getStudentCode() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_user_id">
  <?php echo $student->getUserId() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_thumb">
  <?php echo $student->getThumb() ?>
</td>
<td class="sf_admin_date sf_admin_list_td_created_at">
  <?php echo false !== strtotime($student->getCreatedAt()) ? format_date($student->getCreatedAt(), "f") : '&nbsp;' ?>
</td>
<td class="sf_admin_date sf_admin_list_td_updated_at">
  <?php echo false !== strtotime($student->getUpdatedAt()) ? format_date($student->getUpdatedAt(), "f") : '&nbsp;' ?>
</td>
