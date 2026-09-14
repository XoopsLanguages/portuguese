<?php
/**
 * Second-factor challenge strings.
 *
 * A file of their own, apart from user.php: xoops_loadLanguage() falls back
 * to English for a missing file but never fills gaps in a present one, so
 * a language pack that predates the challenge renders it in English rather
 * than failing on an undefined constant.
 *
 * You may not change or alter any portion of this comment or credits
 * of supporting developers from this source code or any supporting source code
 * which is considered copyrighted (c) material of the original comment or credit authors.
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 *
 * @copyright       (c) 2000-2026 XOOPS Project (https://xoops.org)
 * @license             GNU GPL 2 (https://www.gnu.org/licenses/gpl-2.0.html)
 * @package             core
 * @since               2.7.4
 */

// XOOPS 2.7.4: two-factor challenge
define('_US_2FA_TITLE', 'Segundo passo');
define('_US_2FA_PROMPT', 'Introduza o código da sua aplicação de autenticação');
define('_US_2FA_CODE', 'Código de autenticação');
define('_US_2FA_PROMPT_EMAIL', 'Enviámos um código de seis dígitos para %s. Introduza-o abaixo.');
define('_US_2FA_CODE_EMAIL', 'Código recebido por e-mail');
define('_US_2FA_SEND', 'Enviar um novo código');
define('_US_2FA_SENT', 'Foi enviado um novo código para %s. É válido durante dez minutos.');
define('_US_2FA_SEND_WAIT', 'Foi enviado um código há menos de um minuto. Verifique a caixa de entrada e a pasta de spam antes de pedir outro.');
define('_US_2FA_SEND_FAILED', 'Não foi possível enviar o código neste momento. Tente novamente dentro de instantes, ou utilize um código de recuperação.');
define('_US_2FA_EMAIL_SUBJECT', '%s: o seu código de início de sessão');
define('_US_2FA_EMAIL_BODY', 'O seu código de início de sessão para %s é:

%s

É válido durante %d minutos e funciona uma única vez. Se não foi você a pedi-lo, ignore esta mensagem e considere alterar a sua palavra-passe.');
define('_US_2FA_RECOVERY', 'Utilizar antes um código de recuperação');
define('_US_2FA_RECOVERY_HINT', 'Cada código de recuperação funciona uma única vez. Ao utilizá-lo é-lhe enviado um e-mail.');
define('_US_2FA_SUBMIT', 'Continuar');
define('_US_2FA_STARTAGAIN', 'Este início de sessão expirou ou foi interrompido. Comece novamente.');
define('_US_2FA_BACKTOLOGIN', 'Voltar ao formulário de início de sessão');
define('_US_2FA_BADCODE', 'Esse código não foi aceite.');
define('_US_2FA_LOCKED', 'Demasiadas tentativas. O segundo passo está bloqueado durante quinze minutos; um código de recuperação continua a funcionar.');
define('_US_2FA_UNAVAILABLE', 'O segundo passo não está disponível neste momento. Um código de recuperação continua a funcionar, ou contacte o administrador do site.');
define('_US_2FA_REQUIRED', 'Esta conta tem a autenticação de dois fatores ativada. Inicie sessão através da página de início de sessão do site.');
define('_US_2FA_HTTP_LOGIN', 'Esta janela não pode concluir um início de sessão de dois fatores por HTTP porque a sua palavra-passe seria enviada sem encriptação. Utilize antes o início de sessão do site, ou peça ao administrador para ativar o HTTPS no site.');
define('_US_2FA_LOCKED_MAIL_SUBJECT', '%s: segundo passo bloqueado');
define('_US_2FA_LOCKED_MAIL_BODY', 'Foram introduzidos cinco códigos incorretos do segundo passo para a sua conta em %s a partir de %s. O segundo passo está bloqueado durante quinze minutos. Se não foi você, altere a sua palavra-passe.');
define('_US_2FA_RECOVERY_MAIL_SUBJECT', '%s: foi utilizado um código de recuperação');
define('_US_2FA_RECOVERY_MAIL_BODY', 'Foi utilizado um código de recuperação para iniciar sessão na sua conta em %s a partir de %s. Esse código já não funciona. Se não foi você, altere a sua palavra-passe e reponha os seus códigos de recuperação.');
