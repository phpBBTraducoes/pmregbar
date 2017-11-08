<?php
/**
*
* @package phpBB Extension - PM Notify & Guest Register bar
* @copyright (c) 2015 dmzx - http://www.dmzx-web.net
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
* @Author Stoker - http://www.phpbb3bbcodes.com
* Brazilian Portuguese translation by eunaumtenhoid (c) 2017 [ver 1.0.5] (https://github.com/phpBBTraducoes)
*/

if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine
//
// Some characters for use
// ’ » “ ” …

$lang = array_merge($lang, array(
	'PMREGBAR_CONFIG_SAVED'			=> 'Configurações de PM Notify & Guest Register bar salvas',
	'PMREGBAR_VERSION'				=> 'Versão',
	'PMREGBAR_ENABLEPM'				=> 'Ativar barra de mensagens privadas',
	'PMREGBAR_ENABLEPM_EXPLAIN'		=> 'Ativar ou desativar a barra de mensagens privada',
	'PMREGBAR_ENABLEREG'			=> 'Ativar barra de registro',
	'PMREGBAR_ENABLEREG_EXPLAIN'	=> 'Ativar ou desativar a barra de registro',
	'PMREGBAR_ENABLE_TEXT'			=> 'Ativar texto alternativo para a barra de registro de visitantes',
	'PMREGBAR_ENABLE_TEXT_EXPLAIN'	=> 'Se sim preencher o campo de texto abaixo para barra de registro de visitantes alternativa',
	'PMREGBAR_TEXT_FIELD'			=> 'Campo de texto alternativo para a barra de registro de visitantes',
	'PMREGBAR_TEXT_FIELD_EXPLAIN'	=> 'Preencha o texto alternativo',
	'PMREGBAR_MESSAGE'				=> 'Ola %s você tem uma mensagem privada',
	'PMREGBAR_WELCOME'				=> 'Bem-vindo ao %s clique aqui para se cadastrar',
));
