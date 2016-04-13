
<body>

<div id="container">
	<h1>Add New Student</h1>

	<div id="body">
		<p>
			<?php echo anchor(site_url('/student'), "<strong>Turn Back</strong>"); ?>
		</p>
		<p>
			<?php
				echo form_open('student/insert');
				echo form_label('Student ID ');
				echo form_input( array('id' => 'student_id', 'name' => 'student_id') );
				echo "<br>";
				echo form_label('Name ');
				echo form_input( array('id' => 'name', 'name' => 'name', 'maxlength'   => '50') );
				echo "<br>";
				echo form_label('Surname ');
				echo form_input( array('id' => 'surname', 'name' => 'surname') );
				echo "<br>";
				echo form_label('Gender ');
				echo form_radio('gender', 'Male', TRUE)." Male".form_radio('gender', 'Female', FALSE)." Female";
				echo "<br>";
				echo form_submit('submit', 'Add Student!');
				echo form_close();
			?>
		</p>
	</div>
