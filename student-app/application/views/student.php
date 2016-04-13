
<body>

<div id="container">
	<?php $single_data = $student_data[0]; ?>
	<h1>Student Details</h1>

	<div id="body">
		<p>
			<?php echo anchor(site_url('/students'), "<strong>Turn Back</strong>"); ?>
		</p>
		<p>
			<strong>Student ID:</strong> <?php echo $single_data->student_id; ?>
		</p>
		<p>
			<strong>Name:</strong> <?php echo $single_data->name; ?>
		</p>
		<p>
			<strong>Surname:</strong> <?php echo $single_data->surname; ?>
		</p>
		<p>
			<strong>Gender:</strong> <?php echo $single_data->gender; ?>
		</p>

	</div>
