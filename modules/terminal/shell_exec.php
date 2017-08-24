<?php
function exec_ogp_module() {

	$command = $_POST["command"]; 
	$output = shell_exec("$command  2>&1");
	echo "<div class='shell-wrap'>
		<p class='shell-top-bar'>Terminal</p>
		<ul class='shell-body'>";
		if ( isset($command) && !empty($command)){
			echo "<li>&nbsp;</li>
			<li>$command</li>
			<li>&nbsp;</li>";
		}
		foreach(preg_split("/((\r?\n)|(\r\n?))/", $output) as $line){
			echo "<li>$line</li>";
		}
		echo "<li>&nbsp;</li>
			<li><form action='home.php?m=terminal&p=terminal' method='post'>
			<input type='text' name='command' autofocus='autofocus'/>
			<input type='submit' style='height: 0px; width: 0px; border: none; padding: 0px; margin: 0px;' hidefocus='true' />
			</form></li>"; ?>
		</ul>
	</div>
<?php 
} 
?>