<?php

// send mail function
if (!function_exists('sendMail')) {
    function sendMail()
    {
        // send mail
    }
}

// get country array
if (!function_exists('countryArray')) {

    function countryArray()
    {

        return array(
            'AW' => 'Aruba',
            'AF' => 'Afghanistan',
            'AO' => 'Angola',
            'AL' => 'Albania',
            'AD' => 'Andorra',
            'AE' => 'United Arab Emirates',
            'AR' => 'Argentina',
            'AM' => 'Armenia',
            'AS' => 'American Samoa',
            'AG' => 'Antigua and Barbuda',
            'AU' => 'Australia',
            'AT' => 'Austria',
            'AZ' => 'Azerbaijan',
            'BI' => 'Burundi',
            'BE' => 'Belgium',
            'BJ' => 'Benin',
            'BF' => 'Burkina Faso',
            'BD' => 'Bangladesh',
            'BG' => 'Bulgaria',
            'BH' => 'Bahrain',
            'BS' => 'Bahamas, The',
            'BA' => 'Bosnia and Herzegovina',
            'BY' => 'Belarus',
            'BZ' => 'Belize',
            'BM' => 'Bermuda',
            'BO' => 'Bolivia',
            'BR' => 'Brazil',
            'BB' => 'Barbados',
            'BN' => 'Brunei Darussalam',
            'BT' => 'Bhutan',
            'BW' => 'Botswana',
            'CF' => 'Central African Republic',
            'CA' => 'Canada',
            'CH' => 'Switzerland',
            'JG' => 'Channel Islands',
            'CL' => 'Chile',
            'CN' => 'China',
            'CI' => 'Cote d\'Ivoire',
            'CM' => 'Cameroon',
            'CD' => 'Congo, Dem. Rep.',
            'CG' => 'Congo, Rep.',
            'CO' => 'Colombia',
            'KM' => 'Comoros',
            'CV' => 'Cabo Verde',
            'CR' => 'Costa Rica',
            'CU' => 'Cuba',
            'CW' => 'Curacao',
            'KY' => 'Cayman Islands',
            'CY' => 'Cyprus',
            'CZ' => 'Czech Republic',
            'DE' => 'Germany',
            'DJ' => 'Djibouti',
            'DM' => 'Dominica',
            'DK' => 'Denmark',
            'DO' => 'Dominican Republic',
            'DZ' => 'Algeria',
            'EC' => 'Ecuador',
            'EG' => 'Egypt, Arab Rep.',
            'ER' => 'Eritrea',
            'ES' => 'Spain',
            'EE' => 'Estonia',
            'ET' => 'Ethiopia',
            'FI' => 'Finland',
            'FJ' => 'Fiji',
            'FR' => 'France',
            'FO' => 'Faroe Islands',
            'FM' => 'Micronesia, Fed. Sts.',
            'GA' => 'Gabon',
            'GB' => 'United Kingdom',
            'GE' => 'Georgia',
            'GH' => 'Ghana',
            'GI' => 'Gibraltar',
            'GN' => 'Guinea',
            'GM' => 'Gambia, The',
            'GW' => 'Guinea-Bissau',
            'GQ' => 'Equatorial Guinea',
            'GR' => 'Greece',
            'GD' => 'Grenada',
            'GL' => 'Greenland',
            'GT' => 'Guatemala',
            'GU' => 'Guam',
            'GY' => 'Guyana',
            'HK' => 'Hong Kong SAR, China',
            'HN' => 'Honduras',
            'HR' => 'Croatia',
            'HT' => 'Haiti',
            'HU' => 'Hungary',
            'ID' => 'Indonesia',
            'IM' => 'Isle of Man',
            'IN' => 'India',
            'IE' => 'Ireland',
            'IR' => 'Iran, Islamic Rep.',
            'IQ' => 'Iraq',
            'IS' => 'Iceland',
            'IL' => 'Israel',
            'IT' => 'Italy',
            'JM' => 'Jamaica',
            'JO' => 'Jordan',
            'JP' => 'Japan',
            'KZ' => 'Kazakhstan',
            'KE' => 'Kenya',
            'KG' => 'Kyrgyz Republic',
            'KH' => 'Cambodia',
            'KI' => 'Kiribati',
            'KN' => 'St. Kitts and Nevis',
            'KR' => 'Korea, Rep.',
            'KW' => 'Kuwait',
            'LA' => 'Lao PDR',
            'LB' => 'Lebanon',
            'LR' => 'Liberia',
            'LY' => 'Libya',
            'LC' => 'St. Lucia',
            'LI' => 'Liechtenstein',
            'LK' => 'Sri Lanka',
            'LS' => 'Lesotho',
            'LT' => 'Lithuania',
            'LU' => 'Luxembourg',
            'LV' => 'Latvia',
            'MO' => 'Macao SAR, China',
            'MF' => 'St. Martin (French part)',
            'MA' => 'Morocco',
            'MC' => 'Monaco',
            'MD' => 'Moldova',
            'MG' => 'Madagascar',
            'MV' => 'Maldives',
            'MX' => 'Mexico',
            'MH' => 'Marshall Islands',
            'MK' => 'Macedonia, FYR',
            'ML' => 'Mali',
            'MT' => 'Malta',
            'MM' => 'Myanmar',
            'ME' => 'Montenegro',
            'MN' => 'Mongolia',
            'MP' => 'Northern Mariana Islands',
            'MZ' => 'Mozambique',
            'MR' => 'Mauritania',
            'MU' => 'Mauritius',
            'MW' => 'Malawi',
            'MY' => 'Malaysia',
            'NA' => 'Namibia',
            'NC' => 'New Caledonia',
            'NE' => 'Niger',
            'NG' => 'Nigeria',
            'NI' => 'Nicaragua',
            'NL' => 'Netherlands',
            'NO' => 'Norway',
            'NP' => 'Nepal',
            'NR' => 'Nauru',
            'NZ' => 'New Zealand',
            'OM' => 'Oman',
            'PK' => 'Pakistan',
            'PA' => 'Panama',
            'PE' => 'Peru',
            'PH' => 'Philippines',
            'PW' => 'Palau',
            'PG' => 'Papua New Guinea',
            'PL' => 'Poland',
            'PR' => 'Puerto Rico',
            'KP' => 'Korea, Dem. People’s Rep.',
            'PT' => 'Portugal',
            'PY' => 'Paraguay',
            'PS' => 'West Bank and Gaza',
            'PF' => 'French Polynesia',
            'QA' => 'Qatar',
            'RO' => 'Romania',
            'RU' => 'Russian Federation',
            'RW' => 'Rwanda',
            'SA' => 'Saudi Arabia',
            'SD' => 'Sudan',
            'SN' => 'Senegal',
            'SG' => 'Singapore',
            'SB' => 'Solomon Islands',
            'SL' => 'Sierra Leone',
            'SV' => 'El Salvador',
            'SM' => 'San Marino',
            'SO' => 'Somalia',
            'RS' => 'Serbia',
            'SS' => 'South Sudan',
            'ST' => 'Sao Tome and Principe',
            'SR' => 'Suriname',
            'SK' => 'Slovak Republic',
            'SI' => 'Slovenia',
            'SE' => 'Sweden',
            'SZ' => 'Swaziland',
            'SX' => 'Sint Maarten (Dutch part)',
            'SC' => 'Seychelles',
            'SY' => 'Syrian Arab Republic',
            'TC' => 'Turks and Caicos Islands',
            'TD' => 'Chad',
            'TG' => 'Togo',
            'TH' => 'Thailand',
            'TJ' => 'Tajikistan',
            'TM' => 'Turkmenistan',
            'TL' => 'Timor-Leste',
            'TO' => 'Tonga',
            'TT' => 'Trinidad and Tobago',
            'TN' => 'Tunisia',
            'TR' => 'Turkey',
            'TV' => 'Tuvalu',
            'TW' => 'Taiwan, China',
            'TZ' => 'Tanzania',
            'UG' => 'Uganda',
            'UA' => 'Ukraine',
            'UY' => 'Uruguay',
            'US' => 'United States',
            'UZ' => 'Uzbekistan',
            'VC' => 'St. Vincent and the Grenadines',
            'VE' => 'Venezuela, RB',
            'VG' => 'British Virgin Islands',
            'VI' => 'Virgin Islands (U.S.)',
            'VN' => 'Vietnam',
            'VU' => 'Vanuatu',
            'WS' => 'Samoa',
            'XK' => 'Kosovo',
            'YE' => 'Yemen, Rep.',
            'ZA' => 'South Africa',
            'ZM' => 'Zambia',
            'ZW' => 'Zimbabwe',
        );
    }
}

if (!function_exists('allCountry')) {
    function allCountry()
    {
        $countrys = array(
            array('code' => 'AL',
                'countryname' => 'Albania',
                'currencyname' => 'Albanian lek',
                'symbol' => '&#76;'),

            array('code' => 'AF',
                'countryname' => 'Afghanistan',
                'name' => 'Afghanistan Afghani',
                'symbol' => '&#1547;'),

            array('code' => 'AR',
                'countryname' => 'Argentina',
                'name' => 'Argentine Peso',
                'symbol' => '&#36;'),

            array('code' => 'AW',
                'countryname' => 'Aruba',
                'name' => 'Aruban florin',
                'symbol' => '&#402;'),

            array('code' => 'AU',
                'countryname' => 'Australia',
                'name' => 'Australian Dollar',
                'symbol' => '&#65;&#36;'),

            array('code' => 'AZ',
                'countryname' => 'Azerbaijan',
                'name' => 'Azerbaijani Manat',
                'symbol' => '&#8380;'),

            array('code' => 'BS',
                'countryname' => 'The Bahamas',
                'name' => 'Bahamas Dollar',
                'symbol' => '&#66;&#36;'),

            array('code' => 'BB',
                'countryname' => 'Barbados',
                'name' => 'Barbados Dollar',
                'symbol' => '&#66;&#100;&#115;&#36;'),

            array('code' => 'BD',
                'countryname' => 'People\'s Republic of Bangladesh',
                'name' => 'Bangladeshi taka',
                'symbol' => '&#2547;'),

            array('code' => 'BY',
                'countryname' => 'Belarus',
                'name' => 'Belarus Ruble',
                'symbol' => '&#66;&#114;'),

            array('code' => 'BZ',
                'countryname' => 'Belize',
                'name' => 'Belize Dollar',
                'symbol' => '&#66;&#90;&#36;'),

            array('code' => 'BM',
                'countryname' => 'British Overseas Territory of Bermuda',
                'name' => 'Bermudian Dollar',
                'symbol' => '&#66;&#68;&#36;'),

            array('code' => 'BO',
                'countryname' => 'Bolivia',
                'name' => 'Boliviano',
                'symbol' => '&#66;&#115;'),

            array('code' => 'BA',
                'countryname' => 'Bosnia and Herzegovina',
                'name' => 'Bosnia-Herzegovina Convertible Marka',
                'symbol' => '&#75;&#77;'),

            array('code' => 'BW',
                'countryname' => 'Botswana',
                'name' => 'Botswana pula',
                'symbol' => '&#80;'),

            array('code' => 'BG',
                'countryname' => 'Bulgaria',
                'name' => 'Bulgarian lev',
                'symbol' => '&#1083;&#1074;'),

            array('code' => 'BR',
                'countryname' => 'Brazil',
                'name' => 'Brazilian real',
                'symbol' => '&#82;&#36;'),

            array('code' => 'BN',
                'countryname' => 'Sultanate of Brunei',
                'name' => 'Brunei dollar',
                'symbol' => '&#66;&#36;'),

            array('code' => 'KH',
                'countryname' => 'Cambodia',
                'name' => 'Cambodian riel',
                'symbol' => '&#6107;'),

            array('code' => 'CA',
                'countryname' => 'Canada',
                'name' => 'Canadian dollar',
                'symbol' => '&#67;&#36;'),

            array('code' => 'KY',
                'countryname' => 'Cayman Islands',
                'name' => 'Cayman Islands dollar',
                'symbol' => '&#36;'),

            array('code' => 'CL',
                'countryname' => 'Chile',
                'name' => 'Chilean peso',
                'symbol' => '&#36;'),

            array('code' => 'CN',
                'countryname' => 'China',
                'name' => 'Chinese Yuan Renminbi',
                'symbol' => '&#165;'),

            array('code' => 'CO',
                'countryname' => 'Colombia',
                'name' => 'Colombian peso',
                'symbol' => '&#36;'),

            array('code' => 'CR',
                'countryname' => 'Costa Rica',
                'name' => 'Costa Rican colón',
                'symbol' => '&#8353;'),

            array('code' => 'HR',
                'countryname' => 'Croatia',
                'name' => 'Croatian kuna',
                'symbol' => '&#107;&#110;'),

            array('code' => 'CU',
                'countryname' => 'Cuba',
                'name' => 'Cuban peso',
                'symbol' => '&#8369;'),

            array('code' => 'CZ',
                'countryname' => 'Czech Republic',
                'name' => 'Czech koruna',
                'symbol' => '&#75;&#269;'),

            array('code' => 'DK',
                'countryname' => 'Denmark, Greenland, and the Faroe Islands',
                'name' => 'Danish krone',
                'symbol' => '&#107;&#114;'),

            array('code' => 'DO',
                'countryname' => 'Dominican Republic',
                'name' => 'Dominican peso',
                'symbol' => '&#82;&#68;&#36;'),

            array('code' => 'XC',
                'countryname' => 'Antigua and Barbuda, Commonwealth of Dominica, Grenada, Montserrat, St. Kitts and Nevis, Saint Lucia and St. Vincent and the Grenadines',
                'name' => 'Eastern Caribbean dollar',
                'symbol' => '&#36;'),

            array('code' => 'EG',
                'countryname' => 'Egypt',
                'name' => 'Egyptian pound',
                'symbol' => '&#163;'),

            array('code' => 'SV',
                'countryname' => 'El Salvador',
                'name' => 'Salvadoran colón',
                'symbol' => '&#36;'),

            array('code' => 'EE',
                'countryname' => 'Estonia',
                'name' => 'Estonian kroon',
                'symbol' => '&#75;&#114;'),

            array('code' => 'EU',
                'countryname' => 'European Union, Italy, Belgium, Bulgaria, Croatia, Cyprus, Czechia, Denmark, Estonia, Finland, France, Germany,
                              Greece, Hungary, Ireland, Latvia, Lithuania, Luxembourg, Malta, Netherlands, Poland,
                              Portugal, Romania, Slovakia, Slovenia, Spain, Sweden',
                'name' => 'Euro',
                'symbol' => '&#8364;'),

            array('code' => 'FK',
                'countryname' => 'Falkland Islands',
                'name' => 'Falkland Islands (Malvinas) Pound',
                'symbol' => '&#70;&#75;&#163;'),

            array('code' => 'FJ',
                'countryname' => 'Fiji',
                'name' => 'Fijian dollar',
                'symbol' => '&#70;&#74;&#36;'),

            array('code' => 'GH',
                'countryname' => 'Ghana',
                'name' => 'Ghanaian cedi',
                'symbol' => '&#71;&#72;&#162;'),

            array('code' => 'GI',
                'countryname' => 'Gibraltar',
                'name' => 'Gibraltar pound',
                'symbol' => '&#163;'),

            array('code' => 'GT',
                'countryname' => 'Guatemala',
                'name' => 'Guatemalan quetzal',
                'symbol' => '&#81;'),

            array('code' => 'GG',
                'countryname' => 'Guernsey',
                'name' => 'Guernsey pound',
                'symbol' => '&#81;'),

            array('code' => 'GY',
                'countryname' => 'Guyana',
                'name' => 'Guyanese dollar',
                'symbol' => '&#71;&#89;&#36;'),

            array('code' => 'HN',
                'countryname' => 'Honduras',
                'name' => 'Honduran lempira',
                'symbol' => '&#76;'),

            array('code' => 'HK',
                'countryname' => 'Hong Kong',
                'name' => 'Hong Kong dollar',
                'symbol' => '&#72;&#75;&#36;'),

            array('code' => 'HU',
                'countryname' => 'Hungary',
                'name' => 'Hungarian forint',
                'symbol' => '&#70;&#116;'),

            array('code' => 'IS',
                'countryname' => 'Iceland',
                'name' => 'Icelandic króna',
                'symbol' => '&#237;&#107;&#114;'),

            array('code' => 'IN',
                'countryname' => 'India',
                'name' => 'Indian rupee',
                'symbol' => '&#8377;'),

            array('code' => 'ID',
                'countryname' => 'Indonesia',
                'name' => 'Indonesian rupiah',
                'symbol' => '&#82;&#112;'),

            array('code' => 'IR',
                'countryname' => 'Iran',
                'name' => 'Iranian rial',
                'symbol' => '&#65020;'),

            array('code' => 'IM',
                'countryname' => 'Isle of Man',
                'name' => 'Manx pound',
                'symbol' => '&#163;'),

            array('code' => 'IL',
                'countryname' => 'Israel, Palestinian territories of the West Bank and the Gaza Strip',
                'name' => 'Israeli Shekel',
                'symbol' => '&#8362;'),

            array('code' => 'JM',
                'countryname' => 'Jamaica',
                'name' => 'Jamaican dollar',
                'symbol' => '&#74;&#36;'),

            array('code' => 'JP',
                'countryname' => 'Japan',
                'name' => 'Japanese yen',
                'symbol' => '&#165;'),

            array('code' => 'JE',
                'countryname' => 'Jersey',
                'name' => 'Jersey pound',
                'symbol' => '&#163;'),

            array('code' => 'KZ',
                'countryname' => 'Kazakhstan',
                'name' => 'Kazakhstani tenge',
                'symbol' => '&#8376;'),

            array('code' => 'KP',
                'countryname' => 'North Korea',
                'name' => 'North Korean won',
                'symbol' => '&#8361;'),

            array('code' => 'KP',
                'countryname' => 'South Korea',
                'name' => 'South Korean won',
                'symbol' => '&#8361;'),

            array('code' => 'KG',
                'countryname' => 'Kyrgyz Republic',
                'name' => 'Kyrgyzstani som',
                'symbol' => '&#1083;&#1074;'),

            array('code' => 'LA',
                'countryname' => 'Laos',
                'name' => 'Lao kip',
                'symbol' => '&#8365;'),

            array('code' => 'LA',
                'countryname' => 'Laos',
                'name' => 'Latvian lats',
                'symbol' => '&#8364;'),

            array('code' => 'LV',
                'countryname' => 'Laos',
                'name' => 'Latvian lats',
                'symbol' => '&#8364;'),

            array('code' => 'LB',
                'countryname' => 'Lebanon',
                'name' => 'Lebanese pound',
                'symbol' => '&#76;&#163;'),

            array('code' => 'LR',
                'countryname' => 'Liberia',
                'name' => 'Liberian dollar',
                'symbol' => '&#76;&#68;&#36;'),

            array('code' => 'LT',
                'countryname' => 'Lithuania',
                'name' => 'Lithuanian litas',
                'symbol' => '&#8364;'),

            array('code' => 'MK',
                'countryname' => 'North Macedonia',
                'name' => 'Macedonian denar',
                'symbol' => '&#1076;&#1077;&#1085;'),

            array('code' => 'MY',
                'countryname' => 'Malaysia',
                'name' => 'Malaysian ringgit',
                'symbol' => '&#82;&#77;'),

            array('code' => 'MU',
                'countryname' => 'Mauritius',
                'name' => 'Mauritian rupee',
                'symbol' => '&#82;&#115;'),

            array('code' => 'MX',
                'countryname' => 'Mexico',
                'name' => 'Mexican peso',
                'symbol' => '&#77;&#101;&#120;&#36;'),

            array('code' => 'MN',
                'countryname' => 'Mongolia',
                'name' => 'Mongolian tögrög',
                'symbol' => '&#8366;'),

            array('code' => 'MZ',
                'countryname' => 'Mozambique',
                'name' => 'Mozambican metical',
                'symbol' => '&#77;&#84;'),

            array('code' => 'NA',
                'countryname' => 'Namibia',
                'name' => 'Namibian dollar',
                'symbol' => '&#78;&#36;'),

            array('code' => 'NP',
                'countryname' => 'Federal Democratic Republic of Nepal',
                'name' => 'Nepalese rupee',
                'symbol' => '&#82;&#115;&#46;'),

            array('code' => 'CW',
                'countryname' => 'Curaçao and Sint Maarten',
                'name' => 'Netherlands Antillean guilder',
                'symbol' => '&#402;'),

            array('code' => 'NZ',
                'countryname' => 'New Zealand, the Cook Islands, Niue, the Ross Dependency, Tokelau, the Pitcairn Islands',
                'name' => 'New Zealand dollar',
                'symbol' => '&#36;'),

            array('code' => 'NI',
                'countryname' => 'Nicaragua',
                'name' => 'Nicaraguan córdoba',
                'symbol' => '&#67;&#36;'),

            array('code' => 'NG',
                'countryname' => 'Nigeria',
                'name' => 'Nigerian naira',
                'symbol' => '&#8358;'),

            array('code' => 'NO',
                'countryname' => 'Norway and its dependent territories',
                'name' => 'Norwegian krone',
                'symbol' => '&#107;&#114;'),

            array('code' => 'OM',
                'countryname' => 'Oman',
                'name' => 'Omani rial',
                'symbol' => '&#65020;'),

            array('code' => 'PK',
                'countryname' => 'Pakistan',
                'name' => 'Pakistani rupee',
                'symbol' => '&#82;&#115;'),

            array('code' => 'PA',
                'countryname' => 'Panama',
                'name' => 'Panamanian balboa',
                'symbol' => '&#66;&#47;&#46;'),

            array('code' => 'PY',
                'countryname' => 'Paraguay',
                'name' => 'Paraguayan Guaraní',
                'symbol' => '&#8370;'),

            array('code' => 'PEN',
                'countryname' => 'Peru',
                'name' => 'Sol',
                'symbol' => '&#83;&#47;&#46;'),

            array('code' => 'PH',
                'countryname' => 'Philippines',
                'name' => 'Philippine peso',
                'symbol' => '&#8369;'),

            array('code' => 'PL',
                'countryname' => 'Poland',
                'name' => 'Polish złoty',
                'symbol' => '&#122;&#322;'),

            array('code' => 'QA',
                'countryname' => 'State of Qatar',
                'name' => 'Qatari Riyal',
                'symbol' => '&#65020;'),

            array('code' => 'RO',
                'countryname' => 'Romania',
                'name' => 'Romanian leu (Leu românesc)',
                'symbol' => '&#76;'),

            array('code' => 'RU',
                'countryname' => 'Russian Federation, Abkhazia and South Ossetia, Donetsk and Luhansk',
                'name' => 'Russian ruble',
                'symbol' => '&#8381;'),

            array('code' => 'SH',
                'countryname' => 'Saint Helena, Ascension and Tristan da Cunha',
                'name' => 'Saint Helena pound',
                'symbol' => '&#163;'),

            array('code' => 'SA',
                'countryname' => 'Saudi Arabia',
                'name' => 'Saudi riyal',
                'symbol' => '&#65020;'),

            array('code' => 'RS',
                'countryname' => 'Serbia',
                'name' => 'Serbian dinar',
                'symbol' => '&#100;&#105;&#110;'),

            array('code' => 'SC',
                'countryname' => 'Seychelles',
                'name' => 'Seychellois rupee',
                'symbol' => '&#82;&#115;'),

            array('code' => 'SG',
                'countryname' => 'Singapore',
                'name' => 'Singapore dollar',
                'symbol' => '&#83;&#36;'),

            array('code' => 'SB',
                'countryname' => 'Solomon Islands',
                'name' => 'Solomon Islands dollar',
                'symbol' => '&#83;&#73;&#36;'),

            array('code' => 'SO',
                'countryname' => 'Somalia',
                'name' => 'Somali shilling',
                'symbol' => '&#83;&#104;&#46;&#83;&#111;'),

            array('code' => 'ZA',
                'countryname' => 'South Africa',
                'name' => 'South African rand',
                'symbol' => '&#82;'),

            array('code' => 'LK',
                'countryname' => 'Sri Lanka',
                'name' => 'Sri Lankan rupee',
                'symbol' => '&#82;&#115;'),

            array('code' => 'SE',
                'countryname' => 'Sweden',
                'name' => 'Swedish krona',
                'symbol' => '&#107;&#114;'),

            array('code' => 'CH',
                'countryname' => 'Switzerland',
                'name' => 'Swiss franc',
                'symbol' => '&#67;&#72;&#102;'),

            array('code' => 'SR',
                'countryname' => 'Suriname',
                'name' => 'Suriname Dollar',
                'symbol' => '&#83;&#114;&#36;'),

            array('code' => 'SY',
                'countryname' => 'Syria',
                'name' => 'Syrian pound',
                'symbol' => '&#163;&#83;'),

            array('code' => 'TW',
                'countryname' => 'Taiwan',
                'name' => 'New Taiwan dollar',
                'symbol' => '&#78;&#84;&#36;'),

            array('code' => 'TH',
                'countryname' => 'Thailand',
                'name' => 'Thai baht',
                'symbol' => '&#3647;'),

            array('code' => 'TT',
                'countryname' => 'Trinidad and Tobago',
                'name' => 'Trinidad and Tobago dollar',
                'symbol' => '&#84;&#84;&#36;'),

            array('code' => 'TR',
                'countryname' => 'Turkey, Turkish Republic of Northern Cyprus',
                'name' => 'Turkey Lira',
                'symbol' => '&#8378;'),

            array('code' => 'TV',
                'countryname' => 'Tuvalu',
                'name' => 'Tuvaluan dollar',
                'symbol' => '&#84;&#86;&#36;'),

            array('code' => 'UA',
                'countryname' => 'Ukraine',
                'name' => 'Ukrainian hryvnia',
                'symbol' => '&#8372;'),

            array('code' => 'GB',
                'countryname' => 'United Kingdom, Jersey, Guernsey, the Isle of Man, Gibraltar, South Georgia and the South Sandwich Islands, the British Antarctic Territory, and Tristan da Cunha',
                'name' => 'Pound sterling',
                'symbol' => '&#163;'),

            array('code' => 'UG',
                'countryname' => 'Uganda',
                'name' => 'Ugandan shilling',
                'symbol' => '&#85;&#83;&#104;'),

            array('code' => 'US',
                'countryname' => 'United States',
                'name' => 'United States dollar',
                'symbol' => '&#36;'),

            array('code' => 'UY',
                'countryname' => 'Uruguayan',
                'name' => 'Peso Uruguayolar',
                'symbol' => '&#36;&#85;'),

            array('code' => 'UZ',
                'countryname' => 'Uzbekistan',
                'name' => 'Uzbekistani soʻm',
                'symbol' => '&#1083;&#1074;'),

            array('code' => 'VE',
                'countryname' => 'Venezuela',
                'name' => 'Venezuelan bolívar',
                'symbol' => '&#66;&#115;'),

            array('code' => 'VN',
                'countryname' => 'Vietnam',
                'name' => 'Vietnamese dong (Đồng)',
                'symbol' => '&#8363;'),

            array('code' => 'VN',
                'countryname' => 'Yemen',
                'name' => 'Yemeni rial',
                'symbol' => '&#65020;'),

            array('code' => 'ZW',
                'countryname' => 'Zimbabwe',
                'name' => 'Zimbabwean dollar',
                'symbol' => '&#90;&#36;'),

        );

        return $countrys;
    }
}

if (!function_exists('getCountryName')) {
    function getCountryName($value)
    {
        // return $value;
        foreach (countryArray() as $key => $country) {
            if (strtolower($key) == $value) {
                return $country;
            }
        }
        return false;

    }
}

if (!function_exists('getCountryData')) {
    function getCountryData($value)
    {
        // return $value;
        foreach (allCountry() as $key => $country) {
            if (strtolower($country['code']) == $value) {
                return $country;
            }
        }
        return false;

    }
}

if (!function_exists('moneyFormat')) {
    function moneyFormat($currency, $value)
    {
        foreach (allCountry() as $key => $country) {
            if (strtolower($country['code']) == $currency) {
                return $country['symbol'] . '' . number_format($value, 2);
            }
        }
        return false;

    }
}