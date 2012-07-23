<td class="sf_admin_text sf_admin_list_td_id">
  <?php echo link_to($school_year_term->getId(), 'school_year_term_edit', $school_year_term) ?>
</td>
<td class="sf_admin_foreignkey sf_admin_list_td_term_id">
  <?php echo $school_year_term->getTermId() ?>
</td>
<td class="sf_admin_foreignkey sf_admin_list_td_school_year_id">
  <?php echo $school_year_term->getSchoolYearId() ?>
</td>
<td class="sf_admin_date sf_admin_list_td_created_at">
  <?php echo false !== strtotime($school_year_term->getCreatedAt()) ? format_date($school_year_term->getCreatedAt(), "f") : '&nbsp;' ?>
</td>
<td class="sf_admin_date sf_admin_list_td_updated_at">
  <?php echo false !== strtotime($school_year_term->getUpdatedAt()) ? format_date($school_year_term->getUpdatedAt(), "f") : '&nbsp;' ?>
</td>
