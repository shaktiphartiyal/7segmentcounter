<!DOCTYPE html>
<html>
<head>
	<title>AWE</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/>
	<link rel="stylesheet" type="text/css" href="style.css" media="all">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
	<script type="text/javascript" src="cmd.js"></script>
	<meta name="author" content="Shakti Phartiyal">
</head>
<body>
	<div class="mainDiv">
		<div class="digitBar n3" id="n3-0"></div>
		<div class="digitBarLft n3" id="n3-1"></div>
		<div class="digitBarLftbtm n3" id="n3-2"></div>
		<div class="digitBarBtm n3" id="n3-3"></div>
		<div class="digitBarRgtbtm n3" id="n3-4"></div>
		<div class="digitBarRgt n3" id="n3-5"></div>
		<div class="digitBarmdl n3" id="n3-6"></div>
	</div>
		<div class="mainDiv">
		<div class="digitBar n2" id="n2-0"></div>
		<div class="digitBarLft n2" id="n2-1"></div>
		<div class="digitBarLftbtm n2" id="n2-2"></div>
		<div class="digitBarBtm n2" id="n2-3"></div>
		<div class="digitBarRgtbtm n2" id="n2-4"></div>
		<div class="digitBarRgt n2" id="n2-5"></div>
		<div class="digitBarmdl n2" id="n2-6"></div>
	</div>
	<div class="mainDiv">
		<div class="digitBar n1" id="n1-0"></div>
		<div class="digitBarLft n1" id="n1-1"></div>
		<div class="digitBarLftbtm n1" id="n1-2"></div>
		<div class="digitBarBtm n1" id="n1-3"></div>
		<div class="digitBarRgtbtm n1" id="n1-4"></div>
		<div class="digitBarRgt n1" id="n1-5"></div>
		<div class="digitBarmdl n1" id="n1-6"></div>
	</div>
	<div class="mainDiv">
		<div class="digitBar n0" id="n0-0"></div>
		<div class="digitBarLft n0" id="n0-1"></div>
		<div class="digitBarLftbtm n0" id="n0-2"></div>
		<div class="digitBarBtm n0" id="n0-3"></div>
		<div class="digitBarRgtbtm n0" id="n0-4"></div>
		<div class="digitBarRgt n0" id="n0-5"></div>
		<div class="digitBarmdl n0" id="n0-6"></div>
 	</div>
<button onClick="Timer.stop();">Stop</button>
</body>
<script type="text/javascript">
	$(document).ready(function(){
		Timer.init();
	});
</script>
</html>