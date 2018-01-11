<div class="wrap">
	<h1 class="wp-heading-inline"><?php echo $title; ?></h1>
	<a href="#" class="page-title-action">Add new item</a>
	<table class="widefat fixed" cellspacing="0">
		<thead>
		<tr>

			<th id="columnname" class="manage-column column-columnname" scope="col">Name</th>
			<th id="columnname" class="manage-column column-columnname num" scope="col">About</th>

		</tr>
		</thead>

		<tfoot>
		<tr>

			<th class="manage-column column-cb check-column" scope="col"></th>
			<th class="manage-column column-columnname" scope="col"></th>
			<th class="manage-column column-columnname num" scope="col"></th>

		</tr>
		</tfoot>

		<tbody>
		<?php foreach ($data as $item): ?>
			<tr class="alternate">
				<td class="column-columnname"><a class="row-title" href="<?php echo admin_url() . 'admin.php?page=md_submenu_update&post=' . $item->id ?>"><?php  echo $item->name ?></a></td>
				<td class="column-columnname"><?php  echo $item->about ?></td>
			</tr>

			<tr valign="top">
				<th class="check-column" scope="row"></th>
				<td class="column-columnname">
					<div class="row-actions">
						<span><a href="<?php echo admin_url() . 'admin.php?page=md_submenu_update&post=' . $item->id ?>">Изменить</a> |</span>
						<span><a href="#">Удалить</a></span>
					</div>
				</td>
				<td class="column-columnname"></td>
			</tr>
		<?php endforeach; ?>
		</tbody>
	</table>
</div>