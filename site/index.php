<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
		<title>FLÁVIO PSICÓLOGO</title>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
		<meta name="author" content="Lennon Rodrigues Costa" />
		<meta name="keywords" content="" />
		<meta name="description" content="" />
		<!--STYLES DO SITE-->
		<link rel="stylesheet" href="estilos.css?" type="text/css" media="all" />
		<link rel="stylesheet" href="menu_style.css" type="text/css" />
        <!--STYLES DO SLIDER-->
        <link rel="stylesheet" href="slider/themes/default/default.css" type="text/css" media="screen" />
    	<link rel="stylesheet" href="slider/nivo-slider.css" type="text/css" media="screen" />
        <link rel="stylesheet" type="text/css" href="css/accordion.css" />
        <!-- SCRIPT PADRÃO -->
		<script type="text/javascript" src="slider/demo/scripts/jquery-1.7.1.min.js"></script>
        <!--<script language="javascript" type="text/javascript" src="js/jquery-1.3.2.min.js"></script>-->
        <!-- SCRIPT ACORDEON -->
		<script language="javascript" type="text/javascript" src="js/jquery.msAccordion.js"></script>
        <!-- SCRIPT SLIDER -->
		<script type="text/javascript" src="slider/jquery.nivo.slider.js"></script>
        <!-- SCRIPT EXECUTE SLIDER E ACORDEON -->
		<script language="javascript" type="text/javascript">
$(document).ready(function() {
						   $("#accordionGiftLelo").msAccordion({defaultid:1});
						   $("#accordionGiftLelo2").msAccordion({defaultid:0, event:"mouseover"});
						   $('#slider').nivoSlider();
						   }
						   )
		</script>
        <script type="text/javascript">

		  var _gaq = _gaq || [];
		  _gaq.push(['_setAccount', 'UA-36479712-1']);
		  _gaq.push(['_trackPageview']);
		
		  (function() {
			var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
			ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
			var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		  })();
		
		</script>
</head>

<body>
<!--DIV CENTER-->
<div align='center'>
    <!--ABRE TOPO-->
    <?php require("topo.php"); ?>
    <!--END TOPO-->
    
    <div class="destaque">
    <div class="destaque2">
            <div class="slider-wrapper theme-default">
                <div id="slider" class="nivoSlider">
                    <a href="">
                        <img src="slider/demo/images/bg_dest4.jpg" data-thumb="slider/demo/images/toystory.jpg" alt="" title="#htmlcaption" />                
                    </a>
                    <a href="">
                        <img src="slider/demo/images/bg_dest3.jpg" data-thumb="slider/demo/images/toystory.jpg" alt="" title="#htmlcaption2" />                
                    </a>
                    <a href="">
                        <img src="slider/demo/images/bg_dest5.jpg" data-thumb="slider/demo/images/toystory.jpg" alt="" title="#htmlcaption3" />                
                    </a>
              </div>
              <div id="htmlcaption" class="nivo-html-caption">
                    <p>
                        <span>
                            "Que obra de arte é o homem: Tão nobre no raciocínio, tão vário na capacidade,
                        </span>
                    </p>
              </div>
              <div id="htmlcaption2" class="nivo-html-caption">
                    <p>
                        <span>
                            em forma e movimento, tão preciso e admirável, na ação é como um anjo, no entendimento
                        </span>
                   </p>
              </div>
              <div id="htmlcaption3" class="nivo-html-caption">
                    <p>
                        <span>
                            é como um Deus, a beleza do mundo, o exemplo dos animais."
                        </span>
                        <span class="span_menor">
                            Hamlet, William Shakespeare.
                        </span>
                    </p>
              </div>
    		</div>
    </div>
    </div>
        
    <!--CONTAINER / CONTEUDO-->
    <div id='container'>
        <div class="conteudo clearfix">
      			<div class="premio_50">
                	<img src="imgs/premio.png" style="width:110px;" />
                    <h2>Psicólogo destaque de Minas Gerais 2013</h2>
                    <p>Premiado e homonageado com o honroso título: <b>"Gente de expressão de Minas Gerais 2013"</b> pela excelência dos trabalhos prestados </p>
                </div>
                <div class="premio_50" style="float:right;">
                	<img src="imgs/selo_2014.png" />
                    <h2>Psicólogo destaque especial por excelência clínica em 2014</h2>
                    <p>Premiado e homonageado com o honroso título: <b>"Gente de expressão de Minas Gerais 2014"</b> pelo sucesso profissional</p>
                </div>
           		<div class="col_cont">
                	<div class="foto_col">
                    	<a href="psicoterapia.php">
                    		<img src="imgs/conteudo1.jpg" />
                        </a>
                    </div>
                    <h2><a href="psicoterapia.php">O que é Psicoterapia?</a></h2>
                    <p>A psicoterapia refere-se à um processo dialético efetuado entre um profissional...</p>
                </div>
                <div class="col_cont sem_margem">
                	<div class="foto_col">
                    	<a href="atendimento.php">
                        	<img src="imgs/conteudo2.jpg" />
                        </a>
                    </div>
                    <h2><a href="atendimento.php">Atendimento Especial</a></h2>
                    <p>Convênios, Particular, Atendimento Domiciliar e Assessoria a organizações...</p>
                </div>
                
                <div class="convenios">
                	<p>Convênios:</p>
                    <a href="atendimento.php">
                        <div class="conv">
                            <img src="imgs/bradesco.jpg" />
                        </div>
                        <div class="conv">
                            <img src="imgs/unimed.jpg" />
                        </div>
                        <div class="conv">
                            <img src="imgs/amil.jpg" />
                        </div>
                        <div class="conv">
                            <img src="imgs/santa_casa.jpg" />
                        </div>
                        <div class="conv sem_margem">
                            <img src="imgs/goldens_cross.jpg" />
                        </div>
                    </a>
                </div>
        </div>
    </div>
    <!--FECHA CONTAINER / CONTEUDO-->

	<!--ABRE RODAPÉ-->
    <?php require("rodape.php"); ?>
    <!--FECHA RODAPÉ-->

</div>
<!--END DIV CENTER-->
</body>
</html>
