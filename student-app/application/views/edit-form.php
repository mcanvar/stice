
<body>

<div id="container">
	<h1>Edit Student</h1>

	<div id="body">
		<p>
			<?php echo anchor(site_url('/students'), "<strong>Turn Back</strong>"); ?>
		</p>
		<p>
			<?php
				foreach ($student_data as $student) {
					echo form_open('student/update');
					echo form_label('Student ID ');
					echo form_input( array('id' => 'student_id', 'name' => 'student_id', 'value' => $student->student_id ) );
					echo "<br>";
					echo form_label('Name ');
					echo form_input( array('id' => 'name', 'name' => 'name', 'value' => $student->name ) );
					echo "<br>";
					echo form_label('Surname ');
					echo form_input( array('id' => 'surname', 'name' => 'surname', 'value' => $student->surname ) );
					echo "<br>";
					echo form_label('Gender ');
					if ( $student->gender === 'Male' )
						$temp = true;
					else
						$temp = false;
					echo form_radio('gender', 'Male', $temp)." Male".form_radio('gender', 'Female', !$temp)." Female";
					echo "<br>";
					echo form_hidden( array('id' => $student->id ) );
					echo form_submit('submit', 'Update Student!');
					echo form_close();
				}
			?>
		</p>
	</div>
