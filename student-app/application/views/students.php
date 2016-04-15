<?php
/*
	* Author: mevlutcanvar@gmail.com
*/
?>
<body>

<div id="container">
	<h1>Students List</h1>

	<div id="body">
		<p>
			<?php echo anchor(site_url('student/add'), "<strong>Add New Student</strong>"); ?>
		</p>
		<p>
			<table>
				<thead>
					<tr>
						<th>Student ID</th>
						<th>Name</th>
						<th>Surname</th>
						<th>Gender</th>
						<th>Process</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($students_data as $student): ?>
						<tr>
							<td>
								<?php echo $student->student_id; ?>
							</td>
							<td>
								<?php echo anchor(site_url("student/".$student->id), $student->name); ?>
							</td>
							<td>
								<?php echo anchor(site_url("student/".$student->id), $student->surname); ?>
							</td>
							<td>
								<?php echo $student->gender; ?>
							</td>
							<td>
								<?php echo anchor(site_url("student/delete/".$student->id), "DEL"); ?> -
								<?php echo anchor(site_url("student/edit/".$student->id), "EDIT"); ?>
							</td>
						</tr>
					<?php endforeach; ?>
				</tbody>
			</table>
		</p>
	</div>
