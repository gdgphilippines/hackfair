<?php

if(isset($_POST['day'])) {
	$day = $_POST['day'];
	if($day == 1) {
?>
<table class="agenda">
	<tr>
		<td>8:30 - 9:30am</td>
		<td>Registration</td>
	</tr>
	<tr>
		<td>9:30 - 9:45am</td>
		<td>Welcome Talk</td>
	</tr>
	<tr>
		<td>9:45 - 10:30am</td>
		<td>Keynote: Innovation and Creativity Jay Fajardo of Launch Garage Director and Serial Entrepreneur</td>
	</tr>
	<tr>
		<td>10:30 - 11:15am</td>
		<td>Doodle your own Cardboard</td>
	</tr>
	<tr>
		<td>11:30 - 12:00pm</td>
		<td>Android Studio or Firebase Talk</td>
	</tr>
	<tr>
		<td>12:00 - 1:00pm</td>
		<td>Lunch</td>
	</tr>
	<tr>
		<td>1:00 - 2:00pm</td>
		<td>Arduino by Mithi Sevilla</td>
	</tr>
	<tr>
		<td>2:00 - 3:00pm</td>
		<td>Hour of Code by Claudine Rodrigues and Carl Flor</td>
	</tr>
	<tr>
		<td>3:00 - 5:30pm</td>
		<td>Presentations from Exhibitors</td>
	</tr>
</table>
<?php
	} elseif($day == 2) {
?>
<table class="agenda">
	<tr>
		<td>8:30 - 9:30am</td>
		<td>Registration</td>
	</tr>
	<tr>
		<td>9:30 - 9:45am</td>
		<td>Welcome Talk</td>
	</tr>
	<tr>
		<td>9:45 - 10:30am</td>
		<td>Voice API</td>
	</tr>
	<tr>
		<td>10:30 - 12:00pm</td>
		<td>Exhibitors Talk</td>
	</tr>
	<tr>
		<td>12:00 - 1:00pm</td>
		<td>Lunch</td>
	</tr>
	<tr>
		<td>1:00 - 2:00pm</td>
		<td>Turning your Idea into a Startup by Jon Lansangan (Startup Weekend Mentor)</td>
	</tr>
	<tr>
		<td>2:00 - 3:00pm</td>
		<td>UI Talk c/o Chrys Francisco - Googler (Zurich based)</td>
	</tr>
	<tr>
		<td>3:00 - 5:30pm</td>
		<td>Closing Keynote c/o Ken Lingan (Country Head) and Awarding to the Exhibitors</td>
	</tr>
</table>
<?php
	}
}