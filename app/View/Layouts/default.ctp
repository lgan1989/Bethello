
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $this->fetch('title'); ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

        echo $this->Html->css('style.css');
        echo $this->Html->script('jquery.js');

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
    ?>
    <link href='http://fonts.googleapis.com/css?family=Graduate' rel='stylesheet' type='text/css'>



</head>
<body>

<div id="footer_container">
        <div id="fadebottom"></div>
        <div id="footer">
                 Powered by BatThel.
        </div>
</div>
 

</body>
</html>
