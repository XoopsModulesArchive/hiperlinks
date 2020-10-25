<?php

// $Id: modinfo.php,v 1.12 2005/04/11 15:20:05 okazu Exp $
// Module Info
// The name of this module
define('_MI_XDIR_NAME', 'Catálogo de Endereços');
// A brief description of this module
define('_MI_XDIR_DESC', 'Cria uma seção com catálogo de endereços onde os associados podem pesquisar/enviar/avaliar vários sites.');
// Names of blocks for this module (Not all module has blocks)
define('_MI_XDIR_BNAME1', 'Endereços recentes');
define('_MI_XDIR_BNAME2', 'Mais votados');
// Sub menu titles
define('_MI_XDIR_SMNAME1', 'Enviar');
define('_MI_XDIR_SMNAME2', 'Popular');
define('_MI_XDIR_SMNAME3', 'Mais votados');
// Names of admin menu items
define('_MI_XDIR_ADMENU2', 'Incluir/Alterar Endereço');
define('_MI_XDIR_ADMENU3', 'Endereços enviados');
define('_MI_XDIR_ADMENU4', 'Links rompidos');
define('_MI_XDIR_ADMENU5', 'Endereço alterado');
define('_MI_XDIR_ADMENU6', 'Verificador de links');
// Title of config items
define('_MI_XDIR_POPULAR', 'Número de acessos para que um endereço seja considerado popular');
define('_MI_XDIR_NEWLINKS', 'Número máximo de novos endereços mostrados na página principal');
define('_MI_XDIR_PERPAGE', 'Número máximo de endereços mostrados em cada página');
define('_MI_XDIR_USESHOTS', 'Mostrar imagem de captura de tela?');
define('_MI_XDIR_USEFRAMES', 'Usar frames?');
define('_MI_XDIR_SHOTWIDTH', 'Largura máxima da imagem de captura de tela');
define('_MI_XDIR_ANONPOST', 'Permitir comentários de associados anônimos?');
define('_MI_XDIR_AUTOAPPROVE', 'Aprovar automaticamente os novos endereços?');
// Description of each config items
define('_MI_XDIR_POPULARDSC', '');
define('_MI_XDIR_NEWLINKSDSC', '');
define('_MI_XDIR_PERPAGEDSC', '');
define('_MI_XDIR_USEFRAMEDSC', '');
define('_MI_XDIR_USESHOTSDSC', '');
define('_MI_XDIR_SHOTWIDTHDSC', '');
define('_MI_XDIR_AUTOAPPROVEDSC', '');
// Text for notifications
define('_MI_XDIR_GLOBAL_NOTIFY', 'Geral');
define('_MI_XDIR_GLOBAL_NOTIFYDSC', 'Opções de aviso gerais.');
define('_MI_XDIR_CATEGORY_NOTIFY', 'Categoria');
define('_MI_XDIR_CATEGORY_NOTIFYDSC', 'Opções de aviso relativas a categoria atual.');
define('_MI_XDIR_LINK_NOTIFY', 'Endereço');
define('_MI_XDIR_LINK_NOTIFYDSC', 'Opções de aviso relativas ao endereço atual.');
define('_MI_XDIR_GLOBAL_NEWCATEGORY_NOTIFY', 'Nova categoria');
define('_MI_XDIR_GLOBAL_NEWCATEGORY_NOTIFYCAP', 'Avise-me quando criada alguma nova categoria..');
define('_MI_XDIR_GLOBAL_NEWCATEGORY_NOTIFYDSC', 'Receber aviso quando alguma categoria for criada.');
define('_MI_XDIR_GLOBAL_NEWCATEGORY_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} Aviso: Inclusão de categoria');
define('_MI_XDIR_GLOBAL_LINKMODIFY_NOTIFY', 'Solicitação de alteração no endereço');
define('_MI_XDIR_GLOBAL_LINKMODIFY_NOTIFYCAP', 'Avise-me quando solicitada alguma alteração no endereço.');
define('_MI_XDIR_GLOBAL_LINKMODIFY_NOTIFYDSC', 'Receber aviso quando for solicitada alguma alteração no endereço.');
define('_MI_XDIR_GLOBAL_LINKMODIFY_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} Aviso: Solicitação de alteração no endereço');
define('_MI_XDIR_GLOBAL_LINKBROKEN_NOTIFY', 'Envio de link rompido');
define('_MI_XDIR_GLOBAL_LINKBROKEN_NOTIFYCAP', 'Avise-me quando informado algum link rompido.');
define('_MI_XDIR_GLOBAL_LINKBROKEN_NOTIFYDSC', 'Receber aviso quando for informado algum link rompido.');
define('_MI_XDIR_GLOBAL_LINKBROKEN_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} Aviso: Envio de link rompido');
define('_MI_XDIR_GLOBAL_LINKSUBMIT_NOTIFY', 'Sugestão de novo endereço');
define('_MI_XDIR_GLOBAL_LINKSUBMIT_NOTIFYCAP', 'Avise-me quando sugerido novo endereço (aguardando aprovação).');
define('_MI_XDIR_GLOBAL_LINKSUBMIT_NOTIFYDSC', 'Receber aviso quando for sugerido algum novo endereço (aguardando aprovação).');
define('_MI_XDIR_GLOBAL_LINKSUBMIT_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} Aviso: Sugestão de novo endereço');
define('_MI_XDIR_GLOBAL_NEWLINK_NOTIFY', 'Novo Endereço');
define('_MI_XDIR_GLOBAL_NEWLINK_NOTIFYCAP', 'Avise-me quando algum novo endereço for aprovado.');
define('_MI_XDIR_GLOBAL_NEWLINK_NOTIFYDSC', 'Receber aviso quando for aprovado algum novo endereço.');
define('_MI_XDIR_GLOBAL_NEWLINK_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} Aviso: Novo endereço');
define('_MI_XDIR_CATEGORY_LINKSUBMIT_NOTIFY', 'Sugestão de novo endereço');
define('_MI_XDIR_CATEGORY_LINKSUBMIT_NOTIFYCAP', 'Avise-me quando sugerido novo endereço (aguardando aprovação) nesta categoria.');
define('_MI_XDIR_CATEGORY_LINKSUBMIT_NOTIFYDSC', 'Receber aviso quando for sugerido algum novo endereço (aguardando aprovação) nesta categoria.');
define('_MI_XDIR_CATEGORY_LINKSUBMIT_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} Aviso: Sugestão de endereço na categoria');
define('_MI_XDIR_CATEGORY_NEWLINK_NOTIFY', 'Novo endereço');
define('_MI_XDIR_CATEGORY_NEWLINK_NOTIFYCAP', 'Avise-me quando algum novo endereço for aprovado nesta categoria.');
define('_MI_XDIR_CATEGORY_NEWLINK_NOTIFYDSC', 'Receber aviso quando for aprovado algum novo endereço nesta categoria.');
define('_MI_XDIR_CATEGORY_NEWLINK_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} Aviso: Novo endereço na categoria');
define('_MI_XDIR_LINK_APPROVE_NOTIFY', 'Endereço aprovado');
define('_MI_XDIR_LINK_APPROVE_NOTIFYCAP', 'Avise-me quando este endereço for aprovado.');
define('_MI_XDIR_LINK_APPROVE_NOTIFYDSC', 'Receber aviso quando for aprovado este endereço.');
define('_MI_XDIR_LINK_APPROVE_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} Aviso: Endereço aprovado');
