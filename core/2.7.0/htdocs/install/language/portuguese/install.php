<?php
/**
 * Installer main english strings declaration file
 *
 * @copyright    (c) 2000-2026 XOOPS Project (https://xoops.org)
 * @license          GNU GPL 2.0 or later (https://www.gnu.org/licenses/gpl-2.0.html)
 * @package          installer
 * @since            2.3.0
 * @author           Haruki Setoyama  <haruki@planewave.org>
 * @author           Kazumi Ono <webmaster@myweb.ne.jp>
 * @author           Skalpa Keo <skalpa@xoops.org>
 * @author           Taiwen Jiang <phppp@users.sourceforge.net>
 * @author           dugris <dugris@frxoops.org>
 */
// _LANGCODE: pt
// _CHARSET : UTF-8
// Translator: XOOPS Translation Team
define('SHOW_HIDE_HELP', 'Mostrar/ocultar texto de ajuda');
// License
//define('LICENSE_NOT_WRITEABLE', 'O arquivo de licença "%s" NÃO é gravável!');
//define('LICENSE_IS_WRITEABLE', '%s A licença é gravável.');
// Configuration check page
define('SERVER_API', 'API do servidor');
define('PHP_EXTENSION', '%s extensão');
define('CHAR_ENCODING', 'Codificação de caracteres');
define('XML_PARSING', 'Análise XML');
define('REQUIREMENTS', 'Requisitos');
define('_PHP_VERSION', 'Versão PHP');
define('RECOMMENDED_SETTINGS', 'Configurações recomendadas');
define('RECOMMENDED_EXTENSIONS', 'Extensões recomendadas');
define('SETTING_NAME', 'Nome da configuração');
define('RECOMMENDED', 'Recomendado');
define('CURRENT', 'Atual');
define('RECOMMENDED_EXTENSIONS_MSG', 'Essas extensões não são necessárias para uso normal, mas podem ser necessárias para explorar
 alguns recursos específicos (como suporte multilíngue ou RSS). Portanto, é recomendável instalá-los.');
define('NONE', 'Nenhum');
define('SUCCESS', 'Sucesso');
define('WARNING', 'Aviso');
define('FAILED', 'Falhou');
// Titles (main and pages)
define('XOOPS_INSTALL_WIZARD', 'Assistente de instalação XOOPS');
define('LANGUAGE_SELECTION', 'Seleção de idioma');
define('LANGUAGE_SELECTION_TITLE', 'Selecione seu idioma');        // L128
define('INTRODUCTION', 'Introdução');
define('INTRODUCTION_TITLE', 'Bem-vindo ao Assistente de instalação do XOOPS');        // L0
define('CONFIGURATION_CHECK', 'Verificação de configuração');
define('CONFIGURATION_CHECK_TITLE', 'Verificando a configuração do servidor');
define('PATHS_SETTINGS', 'Configurações de caminhos');
define('PATHS_SETTINGS_TITLE', 'Configurações de caminhos');
define('DATABASE_CONNECTION', 'Ligação à base de dados');
define('DATABASE_CONNECTION_TITLE', 'Ligação à base de dados');
define('DATABASE_CONFIG', 'Configuração da base de dados');
define('DATABASE_CONFIG_TITLE', 'Configuração da base de dados');
define('CONFIG_SAVE', 'Salvar configuração');
define('CONFIG_SAVE_TITLE', 'Salvando a configuração do seu sistema');
define('TABLES_CREATION', 'Criação de tabelas');
define('TABLES_CREATION_TITLE', 'Criação de tabelas de banco de dados');
define('INITIAL_SETTINGS', 'Configurações iniciais');
define('INITIAL_SETTINGS_TITLE', 'Por favor insira suas configurações iniciais');
define('DATA_INSERTION', 'Inserção de dados');
define('DATA_INSERTION_TITLE', 'Salvando suas configurações no banco de dados');
define('WELCOME', 'Bem-vindo');
define('WELCOME_TITLE', 'Bem-vindo ao seu site XOOPS');        // L0
// Settings (labels and help text)
define('XOOPS_PATHS', 'Caminhos físicos XOOPS');
define('XOOPS_URLS', 'Localizações web');
define('XOOPS_ROOT_PATH_LABEL', 'XOOPS documenta o caminho físico da raiz');
define('XOOPS_ROOT_PATH_HELP', 'Caminho físico para o diretório de documentos XOOPS (servidos) SEM barra final');
define('XOOPS_LIB_PATH_LABEL', 'XOOPS diretório da biblioteca');
define('XOOPS_LIB_PATH_HELP', 'Physical path to the XOOPS library directory WITHOUT trailing slash, for forward compatibility. Locate the folder out of ' . XOOPS_ROOT_PATH_LABEL . ' to make it secure.');
define('XOOPS_DATA_PATH_LABEL', 'XOOPS diretório de arquivos de dados');
define('XOOPS_DATA_PATH_HELP', 'Physical path to the XOOPS data files (writable) directory WITHOUT trailing slash, for forward compatibility. Locate the folder out of ' . XOOPS_ROOT_PATH_LABEL . ' to make it secure.');
define('XOOPS_URL_LABEL', 'Localização do site (URL)'); // L56
define('XOOPS_URL_HELP', 'URL principal que será usado para acessar sua instalação XOOPS'); // L58
define('LEGEND_CONNECTION', 'Conexão ao servidor');
define('LEGEND_DATABASE', 'Banco de dados'); // L51
define('DB_HOST_LABEL', 'Nome do host do servidor');    // L27
define('DB_HOST_HELP', 'Nome do host do servidor de banco de dados. Se você não tiver certeza, <em>localhost</em> funciona na maioria dos casos'); // L67
define('DB_USER_LABEL', 'Nome de usuário');    // L28
define('DB_USER_HELP', 'Nome da conta de usuário que será usada para conectar ao servidor de banco de dados'); // L65
define('DB_PASS_LABEL', 'Senha');    // L52
define('DB_PASS_HELP', 'Senha da sua conta de usuário do banco de dados'); // L68
define('DB_NAME_LABEL', 'Nome do banco de dados');    // L29
define('DB_NAME_HELP', 'O nome do banco de dados no host. O instalador tentará criar o banco de dados se não existir'); // L64
define('DB_CHARSET_LABEL', 'Conjunto de caracteres do banco de dados');
define('DB_CHARSET_HELP', 'MySQL inclui suporte a conjuntos de caracteres que permite armazenar dados usando uma variedade de conjuntos de caracteres e realizar comparações de acordo com uma variedade de agrupamentos.');
define('DB_COLLATION_LABEL', 'Ordenação do banco de dados');
define('DB_COLLATION_HELP', 'Um agrupamento é um conjunto de regras para comparar caracteres em um conjunto de caracteres.');
define('DB_PREFIX_LABEL', 'Prefixo de tabela');    // L30
define('DB_PREFIX_HELP', 'Este prefixo será adicionado a todas as novas tabelas criadas para evitar conflitos de nomes no banco de dados. Se você não tiver certeza, basta manter o padrão'); // L63
define('DB_PCONNECT_LABEL', 'Usar conexão persistente');    // L54
define('DB_PCONNECT_HELP', "O padrão é 'Não'. Deixe em branco se não tiver certeza"); // L69
define('DB_DATABASE_LABEL', 'Banco de dados');
define('LEGEND_ADMIN_ACCOUNT', 'Conta de administrador');
define('ADMIN_LOGIN_LABEL', 'Login do administrador'); // L37
define('ADMIN_EMAIL_LABEL', 'E-mail do administrador'); // L38
define('ADMIN_PASS_LABEL', 'Senha do administrador'); // L39
define('ADMIN_CONFIRMPASS_LABEL', 'Confirmar senha'); // L74
// Buttons
define('BUTTON_PREVIOUS', 'Anterior'); // L42
define('BUTTON_NEXT', 'Continuar'); // L47
// Messages
define('XOOPS_FOUND', '%s encontrado');
define('CHECKING_PERMISSIONS', 'Verificando permissões de arquivos e diretórios...'); // L82
define('IS_NOT_WRITABLE', '%s NÃO é gravável.'); // L83
define('IS_WRITABLE', '%s é gravável.'); // L84
define('XOOPS_PATH_FOUND', 'Caminho encontrado.');
//define('READY_CREATE_TABLES', 'Nenhuma tabela XOOPS foi detectada.<br>O instalador agora está pronto para criar as tabelas do sistema XOOPS.');
define('XOOPS_TABLES_FOUND', 'As tabelas de sistema XOOPS já existem em seu banco de dados.'); // L131
define('XOOPS_TABLES_CREATED', 'XOOPS tabelas de sistema foram criadas.');
//define('READY_INSERT_DATA', 'O instalador agora está pronto para inserir os dados iniciais em seu banco de dados.');
//define('READY_SAVE_MAINFILE', 'O instalador agora está pronto para salvar as configurações especificadas em <em>mainfile.php</em>.');
define('SAVED_MAINFILE', 'Configurações salvas');
define('SAVED_MAINFILE_MSG', 'O instalador salvou as configurações especificadas em <em>mainfile.php</em> e <em>secure.php</em>.');
define('DATA_ALREADY_INSERTED', 'XOOPS dados encontrados no banco de dados.');
define('DATA_INSERTED', 'Dados iniciais foram inseridos no banco de dados.');
// %s is database name
define('DATABASE_CREATED', 'Banco de dados %s criado!'); // L43
// %s is table name
define('TABLE_NOT_CREATED', 'Não foi possível criar a tabela %s'); // L118
define('TABLE_CREATED', 'Tabela %s criada.'); // L45
define('ROWS_INSERTED', '%d entradas inseridas na tabela %s.'); // L119
define('ROWS_FAILED', 'Falha ao inserir entradas %d na tabela %s.'); // L120
define('TABLE_ALTERED', 'Tabela %s atualizada.'); // L133
define('TABLE_NOT_ALTERED', 'Falha ao atualizar a tabela %s.'); // L134
define('TABLE_DROPPED', 'Tabela %s eliminada.'); // L163
define('TABLE_NOT_DROPPED', 'Falha ao excluir tabela %s.'); // L164
// Error messages
define('ERR_COULD_NOT_ACCESS', 'Não foi possível acessar a pasta especificada. Verifique se ele existe e pode ser lido pelo servidor.');
define('ERR_NO_XOOPS_FOUND', 'Nenhuma instalação do XOOPS foi encontrada na pasta especificada.');
define('ERR_INVALID_EMAIL', 'E-mail inválido'); // L73
define('ERR_REQUIRED', 'Informação é obrigatória.'); // L41
define('ERR_PASSWORD_MATCH', 'As duas senhas não coincidem');
define('ERR_NEED_WRITE_ACCESS', 'O servidor deve ter acesso de gravação aos seguintes arquivos e pastas<br>(ou seja, <em>chmod 775 directory_name</em> em um servidor UNIX/LINUX)<br>Se eles não estiverem disponíveis ou não forem criados corretamente, crie manualmente e defina as permissões adequadas.');
define('ERR_NO_DATABASE', 'Não foi possível criar o banco de dados. Entre em contato com o administrador do servidor para obter detalhes.'); // L31
define('ERR_NO_DBCONNECTION', 'Não foi possível conectar ao servidor de banco de dados.'); // L106
define('ERR_WRITING_CONSTANT', 'Falha ao gravar constante %s.'); // L122
define('ERR_COPY_MAINFILE', 'Não foi possível copiar o arquivo de distribuição para %s');
define('ERR_WRITE_MAINFILE', 'Não foi possível escrever em %s. Verifique a permissão do arquivo e tente novamente.');
define('ERR_READ_MAINFILE', 'Não foi possível abrir %s para leitura');
define('ERR_INVALID_DBCHARSET', "O conjunto de caracteres '%s' não é suportado.");
define('ERR_INVALID_DBCOLLATION', "O agrupamento '%s' não é suportado.");
define('ERR_CHARSET_NOT_SET', 'O conjunto de caracteres padrão não está definido para o banco de dados XOOPS.');
define('_INSTALL_CHARSET', 'UTF-8');
define('SUPPORT', 'Suporte');
define('LOGIN', 'Autenticação');
define('LOGIN_TITLE', 'Autenticação');
define('USER_LOGIN', 'Login do administrador');
define('USERNAME', 'Nome de usuário:');
define('PASSWORD', 'Palavra-passe :');
define('ICONV_CONVERSION', 'Conversão de conjunto de caracteres');
define('ZLIB_COMPRESSION', 'Compressão Zlib');
define('IMAGE_FUNCTIONS', 'Funções de imagem');
define('IMAGE_METAS', 'Metadados de imagem (exif)');
define('FILTER_FUNCTIONS', 'Funções de filtro');
define('ADMIN_EXIST', 'A conta de administrador já existe.');
define('CONFIG_SITE', 'Configuração do site');
define('CONFIG_SITE_TITLE', 'Configuração do site');
define('MODULES', 'Instalação de módulos');
define('MODULES_TITLE', 'Instalação de módulos');
define('THEME', 'Selecionar tema');
define('THEME_TITLE', 'Selecione o tema padrão');
define('INSTALLED_MODULES', 'Os seguintes módulos foram instalados.');
define('NO_MODULES_FOUND', 'Nenhum módulo encontrado.');
define('NO_INSTALLED_MODULES', 'Nenhum módulo instalado.');
define('THEME_NO_SCREENSHOT', 'Nenhuma captura de tela encontrada');
define('IS_VALOR', ' => ');
// password message
define('PASSWORD_LABEL', 'Força da senha');
define('PASSWORD_DESC', 'Senha não inserida');
define('PASSWORD_GENERATOR', 'Gerador de senha');
define('PASSWORD_GENERATE', 'Gerar');
define('PASSWORD_COPY', 'Copiar');
define('PASSWORD_VERY_WEAK', 'Muito fraca');
define('PASSWORD_WEAK', 'Fraca');
define('PASSWORD_BETTER', 'Melhor');
define('PASSWORD_MEDIUM', 'Médio');
define('PASSWORD_STRONG', 'Forte');
define('PASSWORD_STRONGEST', 'Mais forte');
//2.5.7
define('WRITTEN_LICENSE', 'Escreveu XOOPS %s Chave de licença: <strong>%s</strong>');
//2.5.8
define('CHMOD_CHGRP_REPEAT', 'Tentar novamente');
define('CHMOD_CHGRP_IGNORE', 'Usar assim mesmo');
define('CHMOD_CHGRP_ERROR', 'O instalador pode não conseguir gravar o arquivo de configuração %1$s.<p>PHP está gravando arquivos no usuário %2$s e no grupo %3$s.<p>O diretório %4$s/ possui o usuário %5$s e o grupo %6$s');
//2.5.9
define("CURL_HTTP", "Biblioteca Cliente URL (cURL)");
define('XOOPS_COOKIE_DOMAIN_LABEL', 'Domínio de Cookies para o Site');
define('XOOPS_COOKIE_DOMAIN_HELP', 'Domínio para definir cookies. Pode estar em branco, o host completo de URL (www.example.com) ou o domínio registrado sem subdomínios (example.com) para compartilhar entre subdomínios (www.example.com e blog.example.com).');
define('INTL_SUPPORT', 'Funções de internacionalização');
define('XOOPS_SOURCE_CODE', "XOOPS em GitHub");
define('XOOPS_INSTALLING', 'Instalando');
define('XOOPS_ERROR_ENCOUNTERED', 'Erro');
define('XOOPS_ERROR_SEE_BELOW', 'Veja abaixo as mensagens.');
define('MODULES_AVAILABLE', 'Módulos disponíveis');
define('INSTALL_THIS_MODULE', 'Adicionar %s');
//2.5.11
define('ERR_COPY_CONFIG_FILE', 'Não foi possível copiar o arquivo de configuração %s');
//2.7.0
// website name and slogan
define('_WEBSITE_NAME', 'XOOPS Site');
define('_WEBSITE_SLOGAN', 'Basta usar!');
define('_WEBSITE_META_KEYWORDS', 'xoops, estrutura de aplicação web, cms, sistema de gerenciamento de conteúdo');
define('_WEBSITE_FOOTER', "Desenvolvido por XOOPS © 2001-{X_YEAR} <a href='https://xoops.org' rel='external' title='The XOOPS Project'>O Projeto XOOPS</a>");
define('_WEBSITE_COPYRIGHT', 'Direitos autorais © 2001-{X_YEAR}');
define('_WEBSITE_DESCRIPTION', 'XOOPS é um script de portal de código aberto baseado em orientação a objetos dinâmico escrito em PHP.');
define('_WEBSITE_CENSOR_REPLACE', 'Ops');
