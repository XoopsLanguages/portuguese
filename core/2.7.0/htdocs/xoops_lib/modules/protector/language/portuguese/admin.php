<?php
// mymenu
define('_MD_A_MYMENU_MYTPLSADMIN','');
define('_MD_A_MYMENU_MYBLOCKSADMIN','Permissões');
define('_MD_A_MYMENU_MYPREFERENCES','Preferências');
// index.php
define('_AM_TH_DATETIME', 'Hora');
define('_AM_TH_USER', 'Utilizador');
define('_AM_TH_IP', 'IP');
define('_AM_TH_AGENTE', 'AGENT');
define('_AM_TH_TYPE', 'Tipo');
define('_AM_TH_DESCRIPTION', 'Descrição');
define('_AM_TH_BADIPS','IPs ruins<br><br><span style="font-weight:normal;">Escreva cada IP uma linha<br>em branco significa que todos os IPs são permitidos</span>');
define('_AM_TH_GROUP1IPS','IPs permitidos para grupo=1<br><br><span style="font-weight:normal;">Escreva cada IP uma linha.<br>192.168. significa 192.168.*<br>em branco significa que todos os IPs são permitidos</span>');
define('_AM_LABEL_COMPACTLOG', 'Log compacto');
define('_AM_BUTTON_COMPACTLOG', 'Compactar!');
define('_AM_JS_COMPACTLOGCONFIRM', 'Registros duplicados (IP,Type) serão removidos');
define('_AM_LABEL_REMOVEALL', 'Remover todos os registros');
define('_AM_BUTTON_REMOVEALL', 'Remover tudo!');
define('_AM_JS_REMOVEALLCONFIRM', 'Todos os logs são removidos completamente. Você está realmente bem?');
define('_AM_LABEL_REMOVE', 'Remova os registros verificados:');
define('_AM_BUTTON_REMOVE', 'Remover!');
define('_AM_JS_REMOVECONFIRM', 'Remover OK?');
define('_AM_MSG_IPFILESUPDATED', 'Arquivos para IPs foram atualizados');
define('_AM_MSG_BADIPSCANTOPEN', 'O arquivo com erro IP não pode ser aberto');
define('_AM_MSG_GROUP1IPSCANTOPEN', 'O arquivo para permitir o grupo=1 não pode ser aberto');
define('_AM_MSG_REMOVED', 'Registros removidos');
define('_AM_MSG_DELFAILED', 'Falha ao excluir registros');
define('_AM_FMT_CONFIGSNOTWRITABLE', 'Torne o diretório de configurações gravável: %s');
// prefix_manager.php
define('_AM_H3_PREFIXMAN', 'Gerenciador de prefixos');
define('_AM_MSG_DBUPDATED', 'Base de dados atualizada com sucesso!');
define('_AM_CONFIRM_DELETE', 'Todos os dados serão descartados. OK?');
define('_AM_TXT_HOWTOCHANGEDB',"Se você deseja alterar o prefixo,<br> edite %s/data/secure.php manualmente.<br><br>define('XOOPS_DB_PREFIX', '<b>%s</b>');");
// advisory.php
define('_AM_ADV_NOTSECURE', 'Não é seguro');
define('_AM_ADV_TRUSTPATHPUBLIC', 'Se você conseguir ver uma imagem -NG- ou o link retornar à página normal, seu XOOPS_TRUST_PATH não está colocado corretamente. O melhor lugar para XOOPS_TRUST_PATH é fora do DocumentRoot. Se você não puder fazer isso, coloque .htaccess (DENY FROM ALL) logo abaixo de XOOPS_TRUST_PATH como a segunda melhor maneira.');
define('_AM_ADV_TRUSTPATHPUBLICLINK', 'Verifique se os arquivos PHP dentro de TRUST_PATH estão configurados como somente leitura (deve ser erro 404.403 ou 500)');
define('_AM_ADV_REGISTERGLOBALS',"Se estiver 'ON', esta configuração convida a uma variedade de ataques de injeção. Se puder, desative 'register_globals' no php.ini ou, se não for possível, crie ou edite .htaccess em seu diretório XOOPS:");
define('_AM_ADV_ALLOWURLFOPEN',"Se estiver 'ON', esta configuração permite que invasores executem scripts arbitrários em servidores remotos.<br>Somente o administrador pode alterar esta opção.<br>Se você for um administrador, edite php.ini ou httpd.conf.<br><b>Exemplo de httpd.conf:<br> &nbsp; php_admin_flag &nbsp; permitir_url_fopen &nbsp; off</b><br>Else, reivindique-o aos seus administradores.");
define('_AM_ADV_USETRANSSID',"Se estiver 'ON', seu ID de sessão será exibido em tags de âncora, etc.<br>Para evitar o sequestro de sessão, adicione uma linha em .htaccess em XOOPS_ROOT_PATH.<br><b>php_flag session.use_trans_sid off</b>");
define('_AM_ADV_DBPREFIX',"Esta configuração convida 'Injeções de SQL'.<br>Não se esqueça de ativar 'Forçar sanitização *' nas preferências deste módulo.");
define('_AM_ADV_LINK_TO_PREFIXMAN', 'Vá para o gerenciador de prefixos');
define('_AM_ADV_MAINUNPATCHED', 'Você deve editar seu mainfile.php como está escrito no README.');
define('_AM_ADV_DBFACTORYPATCHED', 'Sua fábrica de banco de dados está pronta para DBLayer Trapping anti-SQL-Injection');
define('_AM_ADV_DBFACTORYUNPATCHED', 'Sua fábrica de banco de dados não está pronta para DBLayer Trapping anti-SQL-Injection. Alguns patches são necessários.');
define('_AM_ADV_SUBTITLECHECK', 'Verifique se o Protetor funciona bem');
define('_AM_ADV_CHECKCONTAMI', 'Contaminação');
define('_AM_ADV_CHECKISOCOM', 'Comentários isolados');
//XOOPS 2.5.4
define('_AM_ADV_REGISTERGLOBALS2', 'e coloque nele a linha abaixo:');
//XOOPS 2.5.8
define('_AM_PROTECTOR_PREFIX', 'Prefixo');
define('_AM_PROTECTOR_TABLES', 'Tabelas');
define('_AM_PROTECTOR_UPDATED', 'Atualizado');
define('_AM_PROTECTOR_COPY', 'Copiar');
define('_AM_PROTECTOR_ACTIONS', 'Ações');
// XOOPS 2.5.10 v Protector 3.60
define('_AM_LABEL_BAN_BY_IP', 'Banir os IPs nos registros verificados:');
define('_AM_BUTTON_BAN_BY_IP', 'IP Banimento!');
define('_AM_JS_BANCONFIRM', 'IP Banimentos, OK?');
define('_AM_MSG_BANNEDIP', 'IPs estão banidos');
define('_AM_ADMINSTATS_TITLE', 'Resumo do log do Protector');
// XOOPS 2.5.11
define('_AM_ADMINSTATS_LAST_MONTH', 'Mês passado');
define('_AM_ADMINSTATS_LAST_WEEK', 'Semana passada');
define('_AM_ADMINSTATS_LAST_DAY', 'Ontem');
define('_AM_ADMINSTATS_LAST_HOUR', 'Última hora');
