<td class="sf_admin_text sf_admin_list_td_id">
  <?php echo link_to($fields->getId(), 'fields_edit', $fields) ?>
</td>
<td class="sf_admin_text sf_admin_list_td_fieldname">
  <?php echo $fields->getFieldname() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_fieldtype">
  <?php echo $fields->getFieldtype() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_fieldkey">
  <?php echo $fields->getFieldkey() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_fieldorder">
  <?php echo $fields->getFieldorder() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_isNum">
  <?php echo $fields->getIsNum() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_isReq">
  <?php echo $fields->getIsReq() ?>
</td>
<td class="sf_admin_date sf_admin_list_td_created_at">
  <?php echo false !== strtotime($fields->getCreatedAt()) ? format_date($fields->getCreatedAt(), "f") : '&nbsp;' ?>
</td>
<td class="sf_admin_date sf_admin_list_td_updated_at">
  <?php echo false !== strtotime($fields->getUpdatedAt()) ? format_date($fields->getUpdatedAt(), "f") : '&nbsp;' ?>
</td>
