<!DOCTYPE html>
<html>
	<meta charset="utf-8">
	<head>
		<title>Meu site</title>
	</head>
	<body>
		<h1>Topo</h1>
		<a href="<?php echo BASE_URL; ?>">Home</a>
		<a href="<?php echo BASE_URL; ?>galeria">Galeria</a>
		<hr/>
		<?php $this->loadViewInTemplate($viewName, $viewData); ?>
	</body>
</html>