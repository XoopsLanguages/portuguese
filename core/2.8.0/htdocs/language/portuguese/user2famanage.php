<?php
/**
 * Two-factor management strings.
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

define('_US_2FAM_TITLE', 'Autenticação de dois fatores');
define('_US_2FAM_PASSWORD', 'A sua palavra-passe atual');
define('_US_2FAM_ENABLE', 'Configurar uma aplicação de autenticação');
define('_US_2FAM_CONFIRM', 'Confirmar aplicação de autenticação');
define('_US_2FAM_CHOOSE', 'Escolha como pretende receber o segundo passo: uma aplicação de autenticação ou um código por e-mail.');
define('_US_2FAM_ENABLE_EMAIL', 'Utilizar códigos por e-mail');
define('_US_2FAM_EMAIL_HELP', 'Códigos por e-mail: é enviado um código de seis dígitos para %s sempre que inicia sessão. Menos seguro do que uma aplicação de autenticação, porque quem conseguir ler o seu e-mail pode ultrapassar este passo.');
define('_US_2FAM_EMAIL_STEP', 'Enviámos um código de seis dígitos para %s. Introduza-o abaixo para confirmar. É válido durante dez minutos.');
define('_US_2FAM_CONFIRM_EMAIL', 'Confirmar códigos por e-mail');
define('_US_2FAM_CODE_HELP_EMAIL', 'O código de seis dígitos do e-mail que acabámos de lhe enviar.');
define('_US_2FAM_ENABLED_EMAIL', 'Os códigos por e-mail estão ativados. Para fazer uma alteração, introduza a sua palavra-passe atual e o código enviado por e-mail, ou um código de recuperação. Utilize o botão abaixo para pedir um código.');
define('_US_2FAM_SEND', 'Enviar-me um código');
define('_US_2FAM_MANUAL', 'Chave de configuração manual');
define('_US_2FAM_SCAN', 'Código QR para a sua aplicação de autenticação');
define('_US_2FAM_STEP_APP', 'Precisa de uma aplicação de autenticação: qualquer aplicação ou gestor de palavras-passe que gere códigos únicos baseados no tempo (TOTP) funciona, no telemóvel ou no computador. Se ainda não tiver uma, instale primeiro a que preferir (por exemplo, Google Authenticator, Microsoft Authenticator, Aegis ou FreeOTP).');
define('_US_2FAM_STEP_ADD', 'Na aplicação, adicione uma conta: digitalize este código QR, ou escolha a introdução manual e digite a chave de configuração apresentada abaixo.');
define('_US_2FAM_STEP_CODE', 'A aplicação mostra agora um código de seis dígitos que muda a cada 30 segundos. Introduza o código apresentado neste momento no campo abaixo e confirme.');
define('_US_2FAM_CODE_HELP', 'O código de seis dígitos que a sua aplicação de autenticação mostra neste momento.');
define('_US_2FAM_HTTP', 'Esta ligação utiliza HTTP simples. A sua palavra-passe, sessão, chave de configuração e códigos de recuperação podem ser intercetados. Utilize HTTPS sempre que possível.');
define('_US_2FAM_CODES', 'Guarde estes códigos de recuperação agora');
define('_US_2FAM_CODES_HELP', 'Cada código funciona uma única vez. Estes códigos não serão mostrados novamente. Guarde-os num local seguro, separado desta conta.');
define('_US_2FAM_DISABLE', 'Desativar a autenticação de dois fatores');
define('_US_2FAM_REGENERATE', 'Substituir códigos de recuperação');
define('_US_2FAM_ENABLED', 'Existe uma aplicação de autenticação configurada. Introduza a sua palavra-passe atual e um código de autenticação ou de recuperação para fazer uma alteração.');
define('_US_2FAM_DISABLED', 'A autenticação de dois fatores está desativada.');
define('_US_2FAM_PAUSED', 'O site colocou em pausa os desafios de dois fatores. O seu fator é mantido, e a opção "memorizar" continua indisponível para contas configuradas.');
define('_US_2FAM_UNAVAILABLE', 'A configuração ou gestão da autenticação de dois fatores não está disponível. Contacte o administrador do site.');
define('_US_2FAM_STARTAGAIN', 'A configuração expirou ou a conta foi alterada. Introduza a sua palavra-passe para recomeçar a configuração.');
define('_US_2FAM_BADPASSWORD', 'A sua palavra-passe atual não foi aceite.');
define('_US_2FAM_RESET', 'Repor a autenticação de dois fatores deste utilizador');
define('_US_2FAM_STATUS_NONE', 'Não configurada');
define('_US_2FAM_STATUS_TOTP', 'Aplicação de autenticação configurada');
define('_US_2FAM_STATUS_EMAIL', 'Códigos por e-mail configurados');
define('_US_2FAM_STATUS_UNAVAILABLE', 'Estado indisponível');
define('_US_2FAM_RESET_HELP', 'Isto desativa o segundo fator do utilizador, seja qual for o método configurado, e revoga os seus códigos de recuperação e cookies "memorizar". As sessões já iniciadas permanecem ativas. Introduza a sua própria palavra-passe de administrador para confirmar.');
define('_US_2FAM_RESET_DONE', 'A autenticação de dois fatores do utilizador foi reposta.');
define('_US_2FAM_BACK', 'Voltar à conta');
define('_US_2FAM_DONE', 'A autenticação de dois fatores está ativada.');
define('_US_2FAM_REPLACED', 'Os códigos de recuperação anteriores foram revogados.');
define('_US_2FAM_NOTICE_SUBJECT', '%s: autenticação de dois fatores alterada');
define('_US_2FAM_NOTICE_BODY', 'A autenticação de dois fatores ou os códigos de recuperação da sua conta em %s foram alterados a partir de %s. Se não foi você, contacte o administrador do site.');
define('_US_2FAM_RESET_SUBJECT', '%s: um administrador repôs a sua autenticação de dois fatores');
define('_US_2FAM_RESET_BODY', 'Um administrador desativou o seu segundo fator e revogou os respetivos códigos de recuperação em %s a partir de %s. As sessões já iniciadas permanecem ativas. Inicie sessão e configure novamente a autenticação de dois fatores. Contacte o administrador do site se isto foi inesperado.');
