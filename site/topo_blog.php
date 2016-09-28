
<style>
	.agrupa_menu{
		width:604px;
		/*border:solid 1px red;*/
		position:relative;
		top:-210px;
		left:350px;
		z-index:999;
	}
	.menu_blog{
		float:right;
		border:none;
		font-family:Arial, Helvetica, sans-serif;				   
		width:604px;
		font-weight:bold;
		height:65px;
		background:url('http://www.flaviopsicologo.com.br/site/imgs/bg_menu.png') top center no-repeat;
		margin-top:0px;
		z-index:999;
	}

	.menu_blog ul{
		list-style:none;
		margin:0;
		padding:0;
		z-index:999;
	}

	.menu_blog li{
		float:left;
		padding:0px;
		height:65px;
	}

	.menu_blog li a{
		font-family:"Arial", Helvetica, sans-serif;
		color:#FFFFFF ;
		display:block;
		height:65px;
		line-height:64px;
		margin:0px;
		font-size:12px;
		padding:0px 18px;
		text-align:center;
		text-decoration:none;
		text-transform:uppercase;
		z-index:999;
	}


	.menu_blog li a:hover, .menu_blog ul li:hover a{
		background:url("imgs/bg_menuh.png") top center repeat-x;
		color:#FFFFFF;
		height:64px;
		text-decoration:none;
	}

	.menu_blog li ul{
		display:none;
		height:auto;
		padding:0px;
		margin:0px;
		border:0px;
		position:absolute;
		width:180px;
		z-index:200;
		border:solid 2px #becd5c;
		background-color:#c6d660;

		}

	.menu_blog li:hover ul{
		display:block;
		}

	.menu_blog li li {
		background:url('imgs/sub_sep.gif') bottom left no-repeat;
		display:block;
		float:none;
		margin:0px;
		padding:0px;
		height:45px;
		}

	.menu_blog li:hover li a{
		background:none;height:45px;
		margin:0;
		}

	.menu_blog li ul a{
		display:block;
		font-style:normal;
		margin:0px;
		text-align:left;
		line-height:45px;
		margin:0px;
		font-size:12px;

		}

		.menu_blog li ul a:hover, .menu_blog li ul li:hover a{
			background-color:#5e7997;
			border:0px;
			color:#ffffff;
			text-decoration:none;
			}

	.menu_blog p{
		clear:left;
		}	


</style>
<body>
    <div class="agrupa_menu clearfix">
			<a class="social_topo" style="float:right; margin-right:5px;" href="http://www.facebook.com/flaviopsicologo" target="_blank">
           		<img src="http://www.flaviopsicologo.com.br/site/imgs/social_face.png">
            </a>
            <div class="menu_blog">
                <ul>
                     <li><a href="http://www.flaviopsicologo.com.br/site/quem_sou.php" >Quem Sou</a></li>
                     <li><a href="" >O Profissional</a>
                        <ul>
                            <li><a href="http://www.flaviopsicologo.com.br/site/atendimento.php">Atendimento</a></li>
                            <li><a href="http://www.flaviopsicologo.com.br/site/o_profissional.php">Curr&iacute;culo</a></li>
                        </ul>
                     </li>
                     <li><a href="http://www.flaviopsicologo.com.br/site/psicoterapia.php">Psicoterapia</a></li>
                     <li><a href="http://www.flaviopsicologo.com.br/blog" id="current">Blog</a></li>
                     <li><a href="http://www.flaviopsicologo.com.br/site/cursos.php" id="current">Cursos</a></li>
                     <li><a href="http://www.flaviopsicologo.com.br/site/contato.php">Contato</a></li>
                </ul>
            </div>

    </div>

</body>



