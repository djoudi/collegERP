<td>
    <ul class="sf_admin_td_actions">
        <?php echo $helper->linkToEdit($fields, array('params' => array(), 'class_suffix' => 'edit', 'label' => 'Edit',)) ?>
        <?php echo $helper->linkToDelete($fields, array('params' => array(), 'confirm' => 'Are you sure?', 'class_suffix' => 'delete', 'label' => 'Delete',)) ?>
        <?php
        if ($fields->getFieldtype() == "select" || $fields->getFieldtype() == "checkbox" || $fields->getFieldtype() == "radiobox")
            echo "<li>" . link_to("Талбарын утаг", "field_values/index?field=" . $fields->getId()) . "</li>";
        ?>
    </ul>
</td>
