<html>
	<head>
		<title>::: CTI FUEL :::</title>
		<link rel=StyleSheet href="http://code.jquery.com/ui/1.9.0/themes/base/jquery-ui.css" type="text/css">
		<link rel=StyleSheet href="lib/css/clasica.css" type="text/css">
		<script type="text/javascript" src="lib/js/jquery.min.js"></script>
		<script type="text/javascript" src="lib/js/jquery-ui.js"></script>
		<script type="text/javascript" src="lib/js/general.js"></script>
		<script type="text/javascript" src="lib/js/jquery.validate.js"></script>
		<script type="text/javascript">
		$(function(){
			$('.navImg')
			.mouseover(function(){
				$(this)
				.animate({
					height: '60'
				}, 500)
				.delay(2000)
				.animate({
					height: '20'
				}, 500);
			});
			
			$('#ani-banner').slideUp().delay(500).slideDown();
		});
		</script>
	</head>
<body>
    <section id="body">
        <header id="head"><img src="files/imgs/logo-ctifuel.png" style="margin-left:20px; margin-top:20px;"><img id="ani-banner" src="files/imgs/fnd-body-top-right.png" style="display:none;"></header>
        <nav>
            <ul>
                <li><a href="#main" onClick="$('#ani-banner').slideUp().delay(500).slideDown(); $('body').css('background', 'fnd-body-bottom-left-main.png');">Inicio</a></li>
                <li><a href="#aboutus" onClick="$('#ani-banner').slideUp().delay(500).slideDown(); $('body').css('background', 'fnd-body-bottom-left-about.png');">Nosotros</a></li>
                <li><a href="#services" onClick="$('#ani-banner').slideUp().delay(500).slideDown();">Productos y Servicios</a></li>
                <li><a href="#customers" onClick="$('#ani-banner').slideUp().delay(500).slideDown();">Nuestros Clientes</a></li>
                <li><a href="#contact" onClick="$('#ani-banner').slideUp().delay(500).slideDown();">Contacto</a></li>
                <li><a href="#faq" onClick="$('#ani-banner').slideUp().delay(500).slideDown();">Preguntas Frecuentes</a></li>
            </ul>
        </nav>
        <article id="content">
            &nbsp;
        </article>
        <hr style="clear:both; border:none;">
    </section>
    <footer id="foot" align="center"><a href="" target="_blank"><img src="files/imgs/logo-twitter.png" border="0"></a><a href="https://www.facebook.com/pages/CTI-FUEL-Ltda/108035092550730" target="_blank"><img src="files/imgs/logo-facebook.png" border="0"></a><a href="" target="_blank"><img src="files/imgs/logo-skype.png" border="0"></a><br>&copy; Ctifuel 2012. Todos los derechos reservados. </footer>
    <div id="messageModal" class="info" align="center"><!--span class="close"><a href="javascript: $('#messageModal').slideUp();">X</a></span--></div>
</body>
</html>