<td class="sf_admin_text sf_admin_list_td_id">
  <?php echo link_to($school_year->getId(), 'school_year_edit', $school_year) ?>
</td>
<td class="sf_admin_text sf_admin_list_td_value">
  <?php echo $school_year->getValue() ?>
</td>
<td class="sf_admin_date sf_admin_list_td_start_at">
  <?php echo false !== strtotime($school_year->getStartAt()) ? format_date($school_year->getStartAt(), "f") : '&nbsp;' ?>
</td>
<td class="sf_admin_date sf_admin_list_td_end_at">
  <?php echo false !== strtotime($school_year->getEndAt()) ? format_date($school_year->getEndAt(), "f") : '&nbsp;' ?>
</td>
<td class="sf_admin_date sf_admin_list_td_created_at">
  <?php echo false !== strtotime($school_year->getCreatedAt()) ? format_date($school_year->getCreatedAt(), "f") : '&nbsp;' ?>
</td>
<td class="sf_admin_date sf_admin_list_td_updated_at">
  <?php echo false !== strtotime($school_year->getUpdatedAt()) ? format_date($school_year->getUpdatedAt(), "f") : '&nbsp;' ?>
</td>
