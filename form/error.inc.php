<h1>Uh Oh!</h1>
<p>You seem to have missed a required field or two.</p>
<p>Please hit <a href="#" onClick="history.go(-1)">back</a> and complete the following:</p>

<ul>
<?php
	for($i=0; $i<count($this->missing_required_fields); $i++){
		echo "<li>" . $this->missing_required_fields[$i]['title'] . "</li>\n";
	}
?>
</ul>

<p><strong><a href="#" onClick="history.go(-1)">Thanks, take me back!</a></strong></p>