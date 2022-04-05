<!DOCTYPE html>
<html lang="tr">

<?php $this->load->view("includes/header.php"); ?>
<body>
	<div class="container-contact100">
		<div class="wrap-contact100">
			<table class="table table-hover">
				<thead>
					<tr>
						<th scope="col">id</th>
						<th scope="col">Adı Soyadı</th>
						<th scope="col">Email</th>
						<th scope="col">Telefon Numarası</th>
						<th scope="col">Departman</th>
						<th scope="col">Mesaj</th>

					</tr>
				</thead>
				<tbody>

					<?php foreach ($items as $item) {
					?>
						<tr>
							<th scope="row"><?php echo $item->id; ?></th>
							<td><?php echo $item->name; ?></td>
							<td><?php echo $item->email; ?></td>
							<td><?php echo $item->phone; ?></td>
							<td><?php echo $item->service; ?></td>
							<td><?php echo $item->message; ?></td>

						</tr>
					<?php } ?>


				</tbody>
			</table>
		</div>
	</div>



	<div id="dropDownSelect1"></div>

	<?php $this->load->view("includes/footer.php"); ?>

</body>

</html>