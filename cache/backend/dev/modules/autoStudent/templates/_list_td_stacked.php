<td colspan="6">
  <?php echo __('%%id%% - %%student_code%% - %%user_id%% - %%thumb%% - %%created_at%% - %%updated_at%%', array('%%id%%' => link_to($student->getId(), 'student_edit', $student), '%%student_code%%' => $student->getStudentCode(), '%%user_id%%' => $student->getUserId(), '%%thumb%%' => $student->getThumb(), '%%created_at%%' => false !== strtotime($student->getCreatedAt()) ? format_date($student->getCreatedAt(), "f") : '&nbsp;', '%%updated_at%%' => false !== strtotime($student->getUpdatedAt()) ? format_date($student->getUpdatedAt(), "f") : '&nbsp;'), 'messages') ?>
</td>
