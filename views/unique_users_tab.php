<p>
<table class="unique_users table table-striped table-bordered">
	<thead>
		<tr>
            <th data-i18n="unique_users.unique_users"></th>
		</tr>
	</thead>
	<tbody>
<?php $unique_usersitemobj = new unique_users_model(); ?>
      <?php foreach($unique_usersitemobj->retrieve_records($serial_number) as $item): ?>
        <tr>
          <td><?php echo $item->user; ?></td>
        </tr>
  <?php endforeach; ?>	</tbody>
</table>

<script>
  $(document).on('appReady', function(e, lang) {

        // Initialize datatables
            $('.unique_users').dataTable({
                "bServerSide": false,
                "aaSorting": [[3,'asc']]
            });
  });
</script>
