	<?php
	/** Sessão 01 - Títulos da Banner **/
		$titulo_sessao_01 = jet_engine()->listings->data->get_option('config-sistema::titulo-sessao-banner-01');
		$subtitulo_sessao_01 = jet_engine()->listings->data->get_option('config-sistema::subtitulo-sessao-banner-01');
		$texto_sessao_01 = jet_engine()->listings->data->get_option('config-sistema::texto-sessao-banner-01');
		$texto_sessao_01t = str_replace(PHP_EOL, '', $texto_sessao_01);
