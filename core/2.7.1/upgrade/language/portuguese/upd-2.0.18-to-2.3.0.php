<?php
// _LANGCODE: pt
// _CHARSET : UTF-8
// Translator: XOOPS Translation Team

define('LEGEND_XOOPS_PATHS', 'Caminhos físicos XOOPS');
define('LEGEND_DATABASE', 'Conjunto de caracteres do banco de dados');

define('XOOPS_LIB_PATH_LABEL', 'XOOPS diretório da biblioteca');
define('XOOPS_LIB_PATH_HELP', 'Physical path to the XOOPS library directory WITHOUT trailing slash, for forward compatibility. Locate the folder out of ' . XOOPS_ROOT_PATH . ' to make it secure.');
define('XOOPS_DATA_PATH_LABEL', 'XOOPS diretório de arquivos de dados');
define('XOOPS_DATA_PATH_HELP', 'Physical path to the XOOPS datafiles (writable) directory WITHOUT trailing slash, for forward compatibility. Locate the folder out of ' . XOOPS_ROOT_PATH . ' to make it secure.');

define('DB_COLLATION_LABEL', 'Conjunto de caracteres e agrupamento do banco de dados');
define('DB_COLLATION_HELP', "A partir da versão 4.12, MySQL suporta agrupamento e conjunto de caracteres personalizados. No entanto, é mais complexo do que o esperado, por isso NÃO faça nenhuma alteração a menos que esteja confiante na sua escolha.");
define('DB_COLLATION_NOCHANGE', 'Não altere');

define('XOOPS_PATH_FOUND', 'Caminho encontrado.');
define('ERR_COULD_NOT_ACCESS', 'Não foi possível acessar a pasta especificada. Verifique se ele existe e pode ser lido pelo servidor.');
define('CHECKING_PERMISSIONS', 'Verificando permissões de arquivos e diretórios...');
define('ERR_NEED_WRITE_ACCESS', 'O servidor deve ter acesso de gravação aos seguintes arquivos e pasta<br>(ou seja, <em>chmod 777 directory_name</em> em um servidor UNIX/LINUX)');
define('IS_NOT_WRITABLE', '%s NÃO é gravável.');
define('IS_WRITABLE', '%s é gravável.');
define('ERR_COULD_NOT_WRITE_MAINFILE', 'Erro ao gravar conteúdo em mainfile.php, grave o conteúdo em mainfile.php manualmente.');
