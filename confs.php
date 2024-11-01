<?php
//define(OAUTH_APP_ID, '196a0580d90c70ced1dd5078272a74f3ee89de79ccafec4f1384375b9c8b1c3a' ); // sandbox
define("OAUTH_APP_ID", '35c6a7bfe370187c8746a171fc7b8e646294dfe9e0cc5ab0985b1cf8a08417cf' );
//define(OAUTH_APP_SECRET, 'cc185f8d120c25fb8a2d45b5db6730b1d14d9a23a16dbacfd913ee685804a307' ); // sandbox
define("OAUTH_APP_SECRET", '8ffa0d3ca0b0999e13df923502b366436b6b043e0712ea67866e8f613266476a' );


define("URL_TM_API_CLIENTS", 'http://api.textmaster.com/v1/clients');
//define(URL_TM_API_CLIENTS, 'http://api.sandbox.textmaster.com/v1/clients');
define("URL_TM_API_PUBLIC", 'http://api.textmaster.com/v1/public');
//define(URL_TM_API_PUBLIC, 'http://api.sandbox.textmaster.com/v1/public');

define("URL_TM_API_OAUTH", 'http://eu.textmaster.com/oauth/token');
//define(URL_TM_API_OAUTH, 'http://eu.sandbox.textmaster.com/oauth/token');
define("URL_TM_API_OAUTH_USER", 'http://api.textmaster.com/admin/users');
//define(URL_TM_API_OAUTH_USER, 'http://api.sandbox.textmaster.com/admin/users');

//define(URL_TM_BOUTIQUE, 'sandbox.textmaster.com/clients/credits/new');
define("URL_TM_BOUTIQUE", 'app.textmaster.com/clients/credits/new/?pid=5310711603e44f00020006d3');
define("URL_TM_PROJET", 'app.textmaster.com/clients/projects/?pid=5310711603e44f00020006d3');

// 10 min
define("TMPS_SYNC_PROJETS", 300);
define("NB_SYNC_PROJETS", 40);

// le timout de connection aux API
define("MAIL_ALERT_ENABLE", FALSE);
define("MAIL_ALERTE_SUPPORT", "alert@textmaster.com");
define("TIMEOUT_API", 120); // en secondes

define("MAIL_ALERT_HTTP_ENABLE", FALSE);
define("MAIL_ALERTE_SUPPORT_HTTP", "lupuz.yonderboy@gmail.com");

// count des mots d'un text via api
define("WORDCOUNT_API_ENABLE", FALSE);

define("CATEGORIE_DEFAUT", 'C014');

// pour que les suivis de projets pointent sur le site textmaster
// tm -> site textmaster
// wp -> posts wordpress
define('SUIVI_PROJET_TM', 'tm');

// les plugins compatibles
define("PLUGIN_METABOX_VERSION", '4.3.8');
define("PLUGIN_ACF_VERSION", '4.4.0');
define("PLUGIN_WPML_VERSION", '2.6.0');

$arrayPays = array();
$arrayPays['AD'] = 'Andorre';
$arrayPays['AE'] = 'Emirats Arabes Unis';
$arrayPays['AF'] = 'Afghanistan';
$arrayPays['AG'] = 'Antigua-Et-Barbuda';
$arrayPays['AI'] = 'Anguilla';
$arrayPays['AL'] = 'Albanie';
$arrayPays['AM'] = 'Arménie';
$arrayPays['AN'] = 'Antilles Néerlandaises';
$arrayPays['AO'] = 'Angola';
$arrayPays['AQ'] = 'Antarctique';
$arrayPays['AR'] = 'Argentine';
$arrayPays['AS'] = 'Samoa Américaines';
$arrayPays['AT'] = 'Autriche';
$arrayPays['AU'] = 'Australie';
$arrayPays['AW'] = 'Aruba';
$arrayPays['AX'] = 'Åland, Iles';
$arrayPays['AZ'] = 'Azerbaïdjan';
$arrayPays['BA'] = 'Bosnie-Herzégovine';
$arrayPays['BB'] = 'Barbade';
$arrayPays['BD'] = 'Bangladesh';
$arrayPays['BE'] = 'Belgique';
$arrayPays['BF'] = 'Burkina Faso';
$arrayPays['BG'] = 'Bulgarie';
$arrayPays['BH'] = 'Bahreïn';
$arrayPays['BI'] = 'Burundi';
$arrayPays['BJ'] = 'Bénin';
$arrayPays['BL'] = 'Saint-Barthélemy';
$arrayPays['BM'] = 'Bermudes';
$arrayPays['BN'] = 'Brunéi Darussalam';
$arrayPays['BO'] = 'Bolivie';
$arrayPays['BR'] = 'Brésil';
$arrayPays['BS'] = 'Bahamas';
$arrayPays['BT'] = 'Bhoutan';
$arrayPays['BV'] = 'Bouvet, Ile';
$arrayPays['BW'] = 'Botswana';
$arrayPays['BY'] = 'Bélarus';
$arrayPays['BZ'] = 'Belize';
$arrayPays['CA'] = 'Canada';
$arrayPays['CC'] = 'Cocos (Keeling), Iles';
$arrayPays['CD'] = 'Congo, La République Démocratique Du';
$arrayPays['CF'] = 'République Centrafricaine';
$arrayPays['CG'] = 'Congo';
$arrayPays['CH'] = 'Suisse';
$arrayPays['CI'] = 'Côte D\'ivoire';
$arrayPays['CK'] = 'Cook, Iles';
$arrayPays['CL'] = 'Chili';
$arrayPays['CM'] = 'Cameroun';
$arrayPays['CN'] = 'Chine';
$arrayPays['CO'] = 'Colombie';
$arrayPays['CR'] = 'Costa Rica';
$arrayPays['CU'] = 'Cuba';
$arrayPays['CV'] = 'Cap-Vert';
$arrayPays['CX'] = 'Christmas, Ile';
$arrayPays['CY'] = 'Chypre';
$arrayPays['CZ'] = 'République Tchèque';
$arrayPays['DE'] = 'Allemagne';
$arrayPays['DJ'] = 'Djibouti';
$arrayPays['DK'] = 'Danemark';
$arrayPays['DM'] = 'Dominique';
$arrayPays['DO'] = 'République Dominicaine';
$arrayPays['DZ'] = 'Algérie';
$arrayPays['EC'] = 'Equateur';
$arrayPays['EE'] = 'Estonie';
$arrayPays['EG'] = 'Egypte';
$arrayPays['EH'] = 'Sahara Occidental';
$arrayPays['ER'] = 'Erythrée';
$arrayPays['ES'] = 'Espagne';
$arrayPays['ET'] = 'Ethiopie';
$arrayPays['FI'] = 'Finlande';
$arrayPays['FJ'] = 'Fidji';
$arrayPays['FK'] = 'Falkland, Iles (Malvinas)';
$arrayPays['FM'] = 'Micronésie';
$arrayPays['FO'] = 'Féroé, Iles';
$arrayPays['FR'] = 'France';
$arrayPays['GA'] = 'Gabon';
$arrayPays['GB'] = 'Royaume-Uni';
$arrayPays['GD'] = 'Grenade';
$arrayPays['GE'] = 'Géorgie';
$arrayPays['GF'] = 'Guyane Française';
$arrayPays['GG'] = 'Guernesey';
$arrayPays['GH'] = 'Ghana';
$arrayPays['GI'] = 'Gibraltar';
$arrayPays['GL'] = 'Groenland';
$arrayPays['GM'] = 'Gambie';
$arrayPays['GN'] = 'Guinée';
$arrayPays['GP'] = 'Guadeloupe';
$arrayPays['GQ'] = 'Guinée Equatoriale';
$arrayPays['GR'] = 'Grèce';
$arrayPays['GS'] = 'Géorgie Du Sud Et Les Iles Sandwich Du Sud';
$arrayPays['GT'] = 'Guatemala';
$arrayPays['GU'] = 'Guam';
$arrayPays['GW'] = 'Guinée-Bissau';
$arrayPays['GY'] = 'Guyana';
$arrayPays['HK'] = 'Hong-Kong';
$arrayPays['HM'] = 'Heard, Ile Et Mcdonald, Iles';
$arrayPays['HN'] = 'Honduras';
$arrayPays['HR'] = 'Croatie';
$arrayPays['HT'] = 'Haïti';
$arrayPays['HU'] = 'Hongrie';
$arrayPays['ID'] = 'Indonésie';
$arrayPays['IE'] = 'Irlande';
$arrayPays['IL'] = 'Israël';
$arrayPays['IM'] = 'Ile De Man';
$arrayPays['IN'] = 'Inde';
$arrayPays['IO'] = 'Territoire Britannique De L\'océan Indien';
$arrayPays['IQ'] = 'Iraq';
$arrayPays['IR'] = 'Iran';
$arrayPays['IS'] = 'Islande';
$arrayPays['IT'] = 'Italie';
$arrayPays['JE'] = 'Jersey';
$arrayPays['JM'] = 'Jamaïque';
$arrayPays['JO'] = 'Jordanie';
$arrayPays['JP'] = 'Japon';
$arrayPays['KE'] = 'Kenya';
$arrayPays['KG'] = 'Kirghizistan';
$arrayPays['KH'] = 'Cambodge';
$arrayPays['KI'] = 'Kiribati';
$arrayPays['KM'] = 'Comores';
$arrayPays['KN'] = 'Saint-Kitts-Et-Nevis';
$arrayPays['KP'] = 'Corée, République Populaire Démocratique De';
$arrayPays['KR'] = 'Corée, République De';
$arrayPays['KW'] = 'Koweït';
$arrayPays['KY'] = 'Caïmanes, Iles';
$arrayPays['KZ'] = 'Kazakhstan';
$arrayPays['LA'] = 'Laos';
$arrayPays['LB'] = 'Liban';
$arrayPays['LC'] = 'Sainte-Lucie';
$arrayPays['LI'] = 'Liechtenstein';
$arrayPays['LK'] = 'Sri Lanka';
$arrayPays['LR'] = 'Libéria';
$arrayPays['LS'] = 'Lesotho';
$arrayPays['LT'] = 'Lituanie';
$arrayPays['LU'] = 'Luxembourg';
$arrayPays['LV'] = 'Lettonie';
$arrayPays['LY'] = 'Libye';
$arrayPays['MA'] = 'Maroc';
$arrayPays['MC'] = 'Monaco';
$arrayPays['MD'] = 'Moldavie';
$arrayPays['ME'] = 'Monténégro';
$arrayPays['MF'] = 'Saint-Martin';
$arrayPays['MG'] = 'Madagascar';
$arrayPays['MH'] = 'Marshall, Iles';
$arrayPays['MK'] = 'Macédoine';
$arrayPays['ML'] = 'Mali';
$arrayPays['MM'] = 'Myanmar';
$arrayPays['MN'] = 'Mongolie';
$arrayPays['MO'] = 'Macao';
$arrayPays['MP'] = 'Mariannes Du Nord, Iles';
$arrayPays['MQ'] = 'Martinique';
$arrayPays['MR'] = 'Mauritanie';
$arrayPays['MS'] = 'Montserrat';
$arrayPays['MT'] = 'Malte';
$arrayPays['MU'] = 'Maurice';
$arrayPays['MV'] = 'Maldives';
$arrayPays['MW'] = 'Malawi';
$arrayPays['MX'] = 'Mexique';
$arrayPays['MY'] = 'Malaisie';
$arrayPays['MZ'] = 'Mozambique';
$arrayPays['NA'] = 'Namibie';
$arrayPays['NC'] = 'Nouvelle-Calédonie';
$arrayPays['NE'] = 'Niger';
$arrayPays['NF'] = 'Norfolk, Ile';
$arrayPays['NG'] = 'Nigéria';
$arrayPays['NI'] = 'Nicaragua';
$arrayPays['NL'] = 'Pays-Bas';
$arrayPays['NN'] = 'Norvège';
$arrayPays['NP'] = 'Népal';
$arrayPays['NR'] = 'Nauru';
$arrayPays['NU'] = 'Niué';
$arrayPays['NZ'] = 'Nouvelle-Zélande';
$arrayPays['OM'] = 'Oman';
$arrayPays['PA'] = 'Panama';
$arrayPays['PE'] = 'Pérou';
$arrayPays['PF'] = 'Polynésie Française';
$arrayPays['PG'] = 'Papouasie-Nouvelle-Guinée';
$arrayPays['PH'] = 'Philippines';
$arrayPays['PK'] = 'Pakistan';
$arrayPays['PL'] = 'Pologne';
$arrayPays['PM'] = 'Saint-Pierre-Et-Miquelon';
$arrayPays['PN'] = 'Pitcairn';
$arrayPays['PR'] = 'Porto Rico';
$arrayPays['PS'] = 'Palestinien Occupé, Territoire';
$arrayPays['PT'] = 'Portugal';
$arrayPays['PW'] = 'Palaos';
$arrayPays['PY'] = 'Paraguay';
$arrayPays['QA'] = 'Qatar';
$arrayPays['RE'] = 'Réunion';
$arrayPays['RO'] = 'Roumanie';
$arrayPays['RS'] = 'Serbie';
$arrayPays['RU'] = 'Russie';
$arrayPays['RW'] = 'Rwanda';
$arrayPays['SA'] = 'Arabie Saoudite';
$arrayPays['SB'] = 'Salomon, Iles';
$arrayPays['SC'] = 'Seychelles';
$arrayPays['SD'] = 'Soudan';
$arrayPays['SE'] = 'Suède';
$arrayPays['SG'] = 'Singapour';
$arrayPays['SH'] = 'Sainte-Hélène';
$arrayPays['SI'] = 'Slovénie';
$arrayPays['SJ'] = 'Svalbard Et Ile Jan Mayen';
$arrayPays['SK'] = 'Slovaquie';
$arrayPays['SL'] = 'Sierra Leone';
$arrayPays['SM'] = 'Saint-Marin';
$arrayPays['SN'] = 'Sénégal';
$arrayPays['SO'] = 'Somalie';
$arrayPays['SR'] = 'Suriname';
$arrayPays['ST'] = 'Sao Tomé-Et-Principe';
$arrayPays['SV'] = 'El Salvador';
$arrayPays['SY'] = 'Syrie';
$arrayPays['SZ'] = 'Swaziland';
$arrayPays['TC'] = 'Turks Et Caïques, Iles';
$arrayPays['TD'] = 'Tchad';
$arrayPays['TF'] = 'Terres Australes Françaises';
$arrayPays['TG'] = 'Togo';
$arrayPays['TH'] = 'Thaïlande';
$arrayPays['TJ'] = 'Tadjikistan';
$arrayPays['TK'] = 'Tokelau';
$arrayPays['TL'] = 'Timor Oriental';
$arrayPays['TM'] = 'Turkménistan';
$arrayPays['TN'] = 'Tunisie';
$arrayPays['TO'] = 'Tonga';
$arrayPays['TR'] = 'Turquie';
$arrayPays['TT'] = 'Trinité-Et-Tobago';
$arrayPays['TV'] = 'Tuvalu';
$arrayPays['TW'] = 'Taïwan';
$arrayPays['TZ'] = 'Tanzanie';
$arrayPays['UA'] = 'Ukraine';
$arrayPays['UG'] = 'Ouganda';
$arrayPays['UM'] = 'Iles Mineures Eloignées Des Etats-Unis';
$arrayPays['US'] = 'Etats-Unis';
$arrayPays['UY'] = 'Uruguay';
$arrayPays['UZ'] = 'Ouzbékistan';
$arrayPays['VA'] = 'Saint-Siège (Vatican)';
$arrayPays['VC'] = 'Saint-Vincent-Et-Les Grenadines';
$arrayPays['VE'] = 'Venezuela';
$arrayPays['VG'] = 'Iles Vierges Britanniques';
$arrayPays['VI'] = 'Iles Vierges Des Etats-Unis';
$arrayPays['VN'] = 'Viet Nam';
$arrayPays['VU'] = 'Vanuatu';
$arrayPays['WF'] = 'Wallis Et Futuna';
$arrayPays['WS'] = 'Samoa';
$arrayPays['YE'] = 'Yémen';
$arrayPays['YT'] = 'Mayotte';
$arrayPays['ZA'] = 'Afrique Du Sud';
$arrayPays['ZM'] = 'Zambie';
$arrayPays['ZW'] = 'Zimbabwe';
?>