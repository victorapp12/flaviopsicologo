<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>

		<title>FLÁVIO PSICÓLOGO ..:: CONTATO</title>

        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

		<meta name="author" content="Lennon Rodrigues Costa" />

		<meta name="keywords" content="" />

		<meta name="description" content="" />

		<link rel="stylesheet" href="estilos.css?" type="text/css" media="all" />

		<link rel="stylesheet" href="menu_style.css" type="text/css" />

</head>



<body>

<!--DIV CENTER-->

<div align='center'>

    <!--ABRE TOPO-->

    <?php require("topo.php"); ?>

    <!--END TOPO-->

    

    <div class="destaque destaque_interno">

        <div class="destaque_interno2">

            Contato

        </div>

    </div>

        

    <!--CONTAINER / CONTEUDO-->

    <div id='container'>

        <div class="conteudo clearfix">

           		<div class="col_xx">

           <?							

							    if ($_POST)

							    {

								$headers  = "MIME-Version: 1.0\r\n";

								$headers .= "Content-type: text/html; charset=iso-8859-1\r\n";

								$headers .= "From: atendimento@flaviopsicologo.com.br\r\n";

                                    mail("atendimento@flaviopsicologo.com.br", 

                                         "..::SITE: $_POST[nome]", 

                                         "

										 NOME: $_POST[nome], 

										 E-MAIL: $_POST[email],

                                         TELEFONE: $_POST[telefone],

                                         ASSUNTO: $_POST[assunto],

                                         MENSAGEM: $_POST[mensagem],

										 "

										 ,$headers

										 );									

									

                                }

                            ?>

                          

				<form method="POST" id="CADASTROCLIENTE" class="form_contato clearfix" action="contato.php">

                    <fieldset>

                        <label class="first" for="title1">

                            Nome:

                           <input id="nome" name="nome" type="text" value="" />

                        </label>

                        <label class="first" for="title1">

                            Email:

                        <input id="email" name="email" type="text" value="" />

                        </label>

                        <label class="first" for="title1">

                            Telefone:

                        <input id="telefone" name="telefone" type="text" value="" />

                        </label>

                        <label for="">

                           Assunto:

                            <select class="select_contato" id="assunto" name="assunto">

                               <option id="assunto" selected="selected" name="assunto" value="duvidas"/>Dúvidas</option>

                               <option id="assunto" name="assunto" value="informacoes"/>Informações</option>

                               <option id="assunto" name="assunto" value="matriculas"/>Matriculas</option>

                               <option id="assunto" name="assunto" value="parcerias"/>Parcerias</option>

                               <option id="assunto" name="assunto" value="criticas"/>Críticas e sugestões</option>

                            </select>

                        </label>

                        <label class="text_area_label">

                            Mensagem:

                           <textarea id="mensagem" class="text_area_ca" name="mensagem" value="mensagem" cols="0" rows="10"  /></textarea>

                        </label>

                        

                        <label for="btn" class="btn">

                                <input class="btn_form" type="submit" value="ENVIAR MENSAGEM" />

                        </label>

                    </fieldset>

           		</form>	

           </div>

            <div class="col_x clearfix">

           		<div class="alerta_div">

                	<b>Consultório:</b>

                    

                    <p>

                    	 Rua Bernardo Guimarães, nº1209,<br />Sala 403 - Funcionários <br /> Belo Horizonte - MG



<br /><br />

						<b>Telefone:</b> <br />(31) 7524-3107 / 8739-1026<br /><br />

                        <b>E-mail:</b><br /> atendimento@flaviopsicologo.com.br<br /><br />
                        <b>Horário:</b><br />Segunda à sexta: de 8h às 19h<br />
                        						Sábado: de 8h às 14h
                    </p>

                </div>

                <iframe width="290" height="290" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com.br/maps?hl=pt-BR&amp;q=Rua+Bernardo+Guimar%C3%A3es,+1209,+funcion%C3%A1rios&amp;ie=UTF8&amp;hq=&amp;hnear=R.+Bernardo+Guimar%C3%A3es,+1209+-+Regi%C3%A3o+da+Ns.+da+Boa,+Belo+Horizonte+-+Minas+Gerais,+30140-081&amp;ll=-19.930348,-43.93546&amp;spn=0.01402,0.022724&amp;t=m&amp;z=14&amp;iwloc=A&amp;output=embed"></iframe><br /><small><a href="https://maps.google.com.br/maps?hl=pt-BR&amp;q=Rua+Bernardo+Guimar%C3%A3es,+1209,+funcion%C3%A1rios&amp;ie=UTF8&amp;hq=&amp;hnear=R.+Bernardo+Guimar%C3%A3es,+1209+-+Regi%C3%A3o+da+Ns.+da+Boa,+Belo+Horizonte+-+Minas+Gerais,+30140-081&amp;ll=-19.930348,-43.93546&amp;spn=0.01402,0.022724&amp;t=m&amp;z=14&amp;iwloc=A&amp;source=embed" style="color:#0000FF;text-align:left">Exibir mapa ampliado</a></small>

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

