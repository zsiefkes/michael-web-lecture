<!DOCTYPE html>
<!-- ^ "an incantation" -->
<html>
	<head>
		<meta charset="utf-8" />
		<!-- the meta charset tag needs to appear in first 512 bytes of file supposedly. ending /> isn't mandatory anymore -->
		<link rel="stylesheet" type="text/css" href="style.css" />
		<title>My first web page</title>
	</head>
	<?php $name = "Z"; ?>
	<body>
		<h1>
			<?= "Hello, $name!" ?>
		</h1>
		<p>
			<?= $name ?>
			<?php echo "$name" ?>
			<?php echo "use backslash to escape recognising $ as preceding a variable: \$name" ?>
		</p>
		<!-- img tag "pointlessly abbreviated" -->
		<!-- <h1>Hello World</h1> -->
		<a href="https://en.wikipedia.org/wiki/South_Philadelphia" target="_blank">
			<img
				src="u8xxve11y9451.jpg"
				height="400"
				alt="View of South Philadelphia"
			/>
		</a>
		<p>
			<a href="second.html">Other page</a>
		</p>
		
		<h2>About Me</h2>
		<!-- section tag breaks page into pieces - super important for accessibility eg. screen readers. also for search engines... SEO. use "both to be a good person and to benefit your page monetarily" -->
		<section>
			<p>
				My <a href="https://en.wikipedia.org/wiki/Name" target="_blank">name</a> is Zachary and I live in <a href="https://en.wikipedia.org/wiki/Wellington" target="_blank">Te Whanganui-a-Tara</a>, Aotearoa.
			</p>
		</section>
		<!-- php arrays are basically ordered hashmaps. can assign key-value pairs. eg: -->
		<?php $population = array();
		$population["Wellington"] = 215100;
		$population["Christchurch"] = 383200;

		// simple ordered array:
		$data = array("Wellington", "Christchurch");
		
		// print:
		for ($i = 0; $i < count($data); $i++) {
			echo $data[$i];
			echo "\n";
		} ?>
		<table>
			<tr>
				<th>Place</th>
				<th>Population</th>
			</tr>
			<tr>
				<td>Wellington</td>
				<td>215,100</td>
			</tr>
		</table>
	</body>
</html>