<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1 user-scalable=no">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>

<?php
echo $html->script(array('jquery/jquery-1.6.4.min.js'));
?>
<script type="text/javascript">
jQuery(document).bind("mobileinit", function(){
jQuery.mobile.ajaxEnabled = false;
});
</script>

<?php
echo $html->script(array('jquery/jquery.mobile-1.0.min.js','jquery.validation.min.js'));
echo $html->css(array('jquery/jquery.mobile-1.0.min','common'));
echo $scripts_for_layout;
?>
</head>

<body>
    <?php echo $content_for_layout; ?>
</body>
</html>
