<style>
		html{
			background-color:rgba(0,0,0,0.2);
		}
</style>
<pre>
<?php
	print_r (
		$arr = array(
			rand(),
			rand(),
			rand(),
				array(
					rand(),
					rand(),
					rand(),
					array(
						0,
						rand(),
						rand(),
						array(
							rand(),
							rand(),
							rand(),
							array(
								rand(),
								rand(),
								rand(),
							),
						),
					),
				), 

		)
	);
	echo "<br>";

	function CheckArr($array,$i){
		$i++;
		echo "<br>";
		foreach ($array as $num) {
			if (is_array($num)) {
				CheckArr($num,$i++);
			}
			else{
				switch ($i) {
					case 1:
						Color($num,"red");
						break;
					case 2:
						Color($num,"blue");
						break;
					case 3:
						Color($num,"green");
						break;
					case 4:
						Color($num,"purple");
						break;
					case 5:
						Color($num,"yellow");
						break;
				}
				echo "<br>";
			}

		}
	}
	function SortArr($array,$i){
		$i++;
		echo "<br>";
		foreach ($array as $num) {
			if (is_array($num)) {
				SortArr($num,$i++);
			} 
			elseif($num != 0){
				if ($num % 2 == 0) {
					Color($num,"red");
				}
				else{
					Color($num,"purple");
				}
			}
			echo "<br>";

		}
	}

	echo "<div style='float:left;'>";
	CheckArr($arr,0);
	echo "</div>";
	echo "<div style='float:left;margin-left:20px;'>";
	SortArr($arr,0);
	echo "</div>";
	function Color($num,$clr)
	{
		echo "<span style='color:$clr;'>$num</span>";
	}

	?>
</pre>