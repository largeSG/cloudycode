
<?php

//print phpCountryDropdown('EN');
//print phpCountryDropdown('ES');
class CountryDropdown {

    private static $country_dropdown = array("ES" => array(
            "AF" => "Afganistán",
            "AL" => "Albania",
            "DE" => "Alemania",
            "AD" => "Andorra",
            "AO" => "Angola",
            "AI" => "Anguilla",
            "AQ" => "Antártida",
            "AG" => "Antigua y Barbuda",
            "AN" => "Antillas Holandesas",
            "SA" => "Arabia Saudí",
            "DZ" => "Argelia",
            "AR" => "Argentina",
            "AM" => "Armenia",
            "AW" => "Aruba",
            "AU" => "Australia",
            "AT" => "Austria",
            "AZ" => "Azerbaiyán",
            "BS" => "Bahamas",
            "BH" => "Bahrein",
            "BD" => "Bangladesh",
            "BB" => "Barbados",
            "BE" => "Bélgica",
            "BZ" => "Belice",
            "BJ" => "Benin",
            "BM" => "Bermudas",
            "BY" => "Bielorrusia",
            "MM" => "Birmania",
            "BO" => "Bolivia",
            "BA" => "Bosnia y Herzegovina",
            "BW" => "Botswana",
            "BR" => "Brasil",
            "BN" => "Brunei",
            "BG" => "Bulgaria",
            "BF" => "Burkina Faso",
            "BI" => "Burundi",
            "BT" => "Bután",
            "CV" => "Cabo Verde",
            "KH" => "Camboya",
            "CM" => "Camerún",
            "CA" => "Canadá",
            "TD" => "Chad",
            "CL" => "Chile",
            "CN" => "China",
            "CY" => "Chipre",
            "VA" => "Ciudad del Vaticano (Santa Sede)",
            "CO" => "Colombia",
            "KM" => "Comores",
            "CG" => "Congo",
            "CD" => "Congo, República Democrática del",
            "KR" => "Corea",
            "KP" => "Corea del Norte",
            "CI" => "Costa de Marfíl",
            "CR" => "Costa Rica",
            "HR" => "Croacia (Hrvatska)",
            "CU" => "Cuba",
            "DK" => "Dinamarca",
            "DJ" => "Djibouti",
            "DM" => "Dominica",
            "EC" => "Ecuador",
            "EG" => "Egipto",
            "SV" => "El Salvador",
            "AE" => "Emiratos Árabes Unidos",
            "ER" => "Eritrea",
            "SI" => "Eslovenia",
            "ES" => "España",
            "US" => "Estados Unidos",
            "EE" => "Estonia",
            "ET" => "Etiopía",
            "FJ" => "Fiji",
            "PH" => "Filipinas",
            "FI" => "Finlandia",
            "FR" => "Francia",
            "GA" => "Gabón",
            "GM" => "Gambia",
            "GE" => "Georgia",
            "GH" => "Ghana",
            "GI" => "Gibraltar",
            "GD" => "Granada",
            "GR" => "Grecia",
            "GL" => "Groenlandia",
            "GP" => "Guadalupe",
            "GU" => "Guam",
            "GT" => "Guatemala",
            "GY" => "Guayana",
            "GF" => "Guayana Francesa",
            "GN" => "Guinea",
            "GQ" => "Guinea Ecuatorial",
            "GW" => "Guinea-Bissau",
            "HT" => "Haití",
            "HN" => "Honduras",
            "HU" => "Hungría",
            "IN" => "India",
            "ID" => "Indonesia",
            "IQ" => "Irak",
            "IR" => "Irán",
            "IE" => "Irlanda",
            "BV" => "Isla Bouvet",
            "CX" => "Isla de Christmas",
            "IS" => "Islandia",
            "KY" => "Islas Caimán",
            "CK" => "Islas Cook",
            "CC" => "Islas de Cocos o Keeling",
            "FO" => "Islas Faroe",
            "HM" => "Islas Heard y McDonald",
            "FK" => "Islas Malvinas",
            "MP" => "Islas Marianas del Norte",
            "MH" => "Islas Marshall",
            "UM" => "Islas menores de Estados Unidos",
            "PW" => "Islas Palau",
            "SB" => "Islas Salomón",
            "SJ" => "Islas Svalbard y Jan Mayen",
            "TK" => "Islas Tokelau",
            "TC" => "Islas Turks y Caicos",
            "VI" => "Islas Vírgenes (EE.UU.)",
            "VG" => "Islas Vírgenes (Reino Unido)",
            "WF" => "Islas Wallis y Futuna",
            "IL" => "Israel",
            "IT" => "Italia",
            "JM" => "Jamaica",
            "JP" => "Japón",
            "JO" => "Jordania",
            "KZ" => "Kazajistán",
            "KE" => "Kenia",
            "KG" => "Kirguizistán",
            "KI" => "Kiribati",
            "KW" => "Kuwait",
            "LA" => "Laos",
            "LS" => "Lesotho",
            "LV" => "Letonia",
            "LB" => "Líbano",
            "LR" => "Liberia",
            "LY" => "Libia",
            "LI" => "Liechtenstein",
            "LT" => "Lituania",
            "LU" => "Luxemburgo",
            "MK" => "Macedonia, Ex-República Yugoslava de",
            "MG" => "Madagascar",
            "MY" => "Malasia",
            "MW" => "Malawi",
            "MV" => "Maldivas",
            "ML" => "Malí",
            "MT" => "Malta",
            "MA" => "Marruecos",
            "MQ" => "Martinica",
            "MU" => "Mauricio",
            "MR" => "Mauritania",
            "YT" => "Mayotte",
            "MX" => "México",
            "FM" => "Micronesia",
            "MD" => "Moldavia",
            "MC" => "Mónaco",
            "MN" => "Mongolia",
            "MS" => "Montserrat",
            "MZ" => "Mozambique",
            "NA" => "Namibia",
            "NR" => "Nauru",
            "NP" => "Nepal",
            "NI" => "Nicaragua",
            "NE" => "Níger",
            "NG" => "Nigeria",
            "NU" => "Niue",
            "NF" => "Norfolk",
            "NO" => "Noruega",
            "NC" => "Nueva Caledonia",
            "NZ" => "Nueva Zelanda",
            "OM" => "Omán",
            "NL" => "Países Bajos",
            "PA" => "Panamá",
            "PG" => "Papúa Nueva Guinea",
            "PK" => "Paquistán",
            "PY" => "Paraguay",
            "PE" => "Perú",
            "PN" => "Pitcairn",
            "PF" => "Polinesia Francesa",
            "PL" => "Polonia",
            "PT" => "Portugal",
            "PR" => "Puerto Rico",
            "QA" => "Qatar",
            "UK" => "Reino Unido",
            "CF" => "República Centroafricana",
            "CZ" => "República Checa",
            "ZA" => "República de Sudáfrica",
            "DO" => "República Dominicana",
            "SK" => "República Eslovaca",
            "RE" => "Reunión",
            "RW" => "Ruanda",
            "RO" => "Rumania",
            "RU" => "Rusia",
            "EH" => "Sahara Occidental",
            "KN" => "Saint Kitts y Nevis",
            "WS" => "Samoa",
            "AS" => "Samoa Americana",
            "SM" => "San Marino",
            "VC" => "San Vicente y Granadinas",
            "SH" => "Santa Helena",
            "LC" => "Santa Lucía",
            "ST" => "Santo Tomé y Príncipe",
            "SN" => "Senegal",
            "SC" => "Seychelles",
            "SL" => "Sierra Leona",
            "SG" => "Singapur",
            "SY" => "Siria",
            "SO" => "Somalia",
            "LK" => "Sri Lanka",
            "PM" => "St. Pierre y Miquelon",
            "SZ" => "Suazilandia",
            "SD" => "Sudán",
            "SE" => "Suecia",
            "CH" => "Suiza",
            "SR" => "Surinam",
            "TH" => "Tailandia",
            "TW" => "Taiwán",
            "TZ" => "Tanzania",
            "TJ" => "Tayikistán",
            "TF" => "Territorios Franceses del Sur",
            "TP" => "Timor Oriental",
            "TG" => "Togo",
            "TO" => "Tonga",
            "TT" => "Trinidad y Tobago",
            "TN" => "Túnez",
            "TM" => "Turkmenistán",
            "TR" => "Turquía",
            "TV" => "Tuvalu",
            "UA" => "Ucrania",
            "UG" => "Uganda",
            "UY" => "Uruguay",
            "UZ" => "Uzbekistán",
            "VU" => "Vanuatu",
            "VE" => "Venezuela",
            "VN" => "Vietnam",
            "YE" => "Yemen",
            "YU" => "Yugoslavia",
            "ZM" => "Zambia",
            "ZW" => "Zimbawe",
        ),
        "EN" => array(
            'AF' => 'Afghanistan',
            'AL' => 'Albania',
            'DZ' => 'Algeria',
            'AS' => 'American Samoa',
            'AD' => 'Andorra',
            'AO' => 'Angola',
            'AI' => 'Anguilla',
            'AQ' => 'Antarctica',
            'AG' => 'Antigua And Barbuda',
            'AR' => 'Argentina',
            'AM' => 'Armenia',
            'AW' => 'Aruba',
            'AU' => 'Australia',
            'AT' => 'Austria',
            'AZ' => 'Azerbaijan',
            'BS' => 'Bahamas',
            'BH' => 'Bahrain',
            'BD' => 'Bangladesh',
            'BB' => 'Barbados',
            'BY' => 'Belarus',
            'BE' => 'Belgium',
            'BZ' => 'Belize',
            'BJ' => 'Benin',
            'BM' => 'Bermuda',
            'BT' => 'Bhutan',
            'BO' => 'Bolivia',
            'BA' => 'Bosnia And Herzegowina',
            'BW' => 'Botswana',
            'BV' => 'Bouvet Island',
            'BR' => 'Brazil',
            'IO' => 'British Indian Ocean Territory',
            'BN' => 'Brunei Darussalam',
            'BG' => 'Bulgaria',
            'BF' => 'Burkina Faso',
            'BI' => 'Burundi',
            'KH' => 'Cambodia',
            'CM' => 'Cameroon',
            'CA' => 'Canada',
            'CV' => 'Cape Verde',
            'KY' => 'Cayman Islands',
            'CF' => 'Central African Republic',
            'TD' => 'Chad',
            'CL' => 'Chile',
            'CN' => 'China',
            'CX' => 'Christmas Island',
            'CC' => 'Cocos (Keeling) Islands',
            'CO' => 'Colombia',
            'KM' => 'Comoros',
            'CG' => 'Congo',
            'CD' => 'Congo, The Democratic Republic Of The',
            'CK' => 'Cook Islands',
            'CR' => 'Costa Rica',
            'CI' => 'Cote D\'Ivoire',
            'HR' => 'Croatia (Local Name: Hrvatska)',
            'CU' => 'Cuba',
            'CY' => 'Cyprus',
            'CZ' => 'Czech Republic',
            'DK' => 'Denmark',
            'DJ' => 'Djibouti',
            'DM' => 'Dominica',
            'DO' => 'Dominican Republic',
            'TP' => 'East Timor',
            'EC' => 'Ecuador',
            'EG' => 'Egypt',
            'SV' => 'El Salvador',
            'GQ' => 'Equatorial Guinea',
            'ER' => 'Eritrea',
            'EE' => 'Estonia',
            'ET' => 'Ethiopia',
            'FK' => 'Falkland Islands (Malvinas)',
            'FO' => 'Faroe Islands',
            'FJ' => 'Fiji',
            'FI' => 'Finland',
            'FR' => 'France',
            'FX' => 'France, Metropolitan',
            'GF' => 'French Guiana',
            'PF' => 'French Polynesia',
            'TF' => 'French Southern Territories',
            'GA' => 'Gabon',
            'GM' => 'Gambia',
            'GE' => 'Georgia',
            'DE' => 'Germany',
            'GH' => 'Ghana',
            'GI' => 'Gibraltar',
            'GR' => 'Greece',
            'GL' => 'Greenland',
            'GD' => 'Grenada',
            'GP' => 'Guadeloupe',
            'GU' => 'Guam',
            'GT' => 'Guatemala',
            'GN' => 'Guinea',
            'GW' => 'Guinea-Bissau',
            'GY' => 'Guyana',
            'HT' => 'Haiti',
            'HM' => 'Heard And Mc Donald Islands',
            'VA' => 'Holy See (Vatican City State)',
            'HN' => 'Honduras',
            'HK' => 'Hong Kong',
            'HU' => 'Hungary',
            'IS' => 'Iceland',
            'IN' => 'India',
            'ID' => 'Indonesia',
            'IR' => 'Iran (Islamic Republic Of)',
            'IQ' => 'Iraq',
            'IE' => 'Ireland',
            'IL' => 'Israel',
            'IT' => 'Italy',
            'JM' => 'Jamaica',
            'JP' => 'Japan',
            'JO' => 'Jordan',
            'KZ' => 'Kazakhstan',
            'KE' => 'Kenya',
            'KI' => 'Kiribati',
            'KP' => 'Korea, Democratic People\'s Republic Of',
            'KR' => 'Korea, Republic Of',
            'KW' => 'Kuwait',
            'KG' => 'Kyrgyzstan',
            'LA' => 'Lao People\'s Democratic Republic',
            'LV' => 'Latvia',
            'LB' => 'Lebanon',
            'LS' => 'Lesotho',
            'LR' => 'Liberia',
            'LY' => 'Libyan Arab Jamahiriya',
            'LI' => 'Liechtenstein',
            'LT' => 'Lithuania',
            'LU' => 'Luxembourg',
            'MO' => 'Macau',
            'MK' => 'Macedonia, Former Yugoslav Republic Of',
            'MG' => 'Madagascar',
            'MW' => 'Malawi',
            'MY' => 'Malaysia',
            'MV' => 'Maldives',
            'ML' => 'Mali',
            'MT' => 'Malta',
            'MH' => 'Marshall Islands',
            'MQ' => 'Martinique',
            'MR' => 'Mauritania',
            'MU' => 'Mauritius',
            'YT' => 'Mayotte',
            'MX' => 'Mexico',
            'FM' => 'Micronesia, Federated States Of',
            'MD' => 'Moldova, Republic Of',
            'MC' => 'Monaco',
            'MN' => 'Mongolia',
            'MS' => 'Montserrat',
            'MA' => 'Morocco',
            'MZ' => 'Mozambique',
            'MM' => 'Myanmar',
            'NA' => 'Namibia',
            'NR' => 'Nauru',
            'NP' => 'Nepal',
            'NL' => 'Netherlands',
            'AN' => 'Netherlands Antilles',
            'NC' => 'New Caledonia',
            'NZ' => 'New Zealand',
            'NI' => 'Nicaragua',
            'NE' => 'Niger',
            'NG' => 'Nigeria',
            'NU' => 'Niue',
            'NF' => 'Norfolk Island',
            'MP' => 'Northern Mariana Islands',
            'NO' => 'Norway',
            'OM' => 'Oman',
            'PK' => 'Pakistan',
            'PW' => 'Palau',
            'PA' => 'Panama',
            'PG' => 'Papua New Guinea',
            'PY' => 'Paraguay',
            'PE' => 'Peru',
            'PH' => 'Philippines',
            'PN' => 'Pitcairn',
            'PL' => 'Poland',
            'PT' => 'Portugal',
            'PR' => 'Puerto Rico',
            'QA' => 'Qatar',
            'RE' => 'Reunion',
            'RO' => 'Romania',
            'RU' => 'Russian Federation',
            'RW' => 'Rwanda',
            'KN' => 'Saint Kitts And Nevis',
            'LC' => 'Saint Lucia',
            'VC' => 'Saint Vincent And The Grenadines',
            'WS' => 'Samoa',
            'SM' => 'San Marino',
            'ST' => 'Sao Tome And Principe',
            'SA' => 'Saudi Arabia',
            'SN' => 'Senegal',
            'SC' => 'Seychelles',
            'SL' => 'Sierra Leone',
            'SG' => 'Singapore',
            'SK' => 'Slovakia (Slovak Republic)',
            'SI' => 'Slovenia',
            'SB' => 'Solomon Islands',
            'SO' => 'Somalia',
            'ZA' => 'South Africa',
            'GS' => 'South Georgia, South Sandwich Islands',
            'ES' => 'Spain',
            'LK' => 'Sri Lanka',
            'SH' => 'St. Helena',
            'PM' => 'St. Pierre And Miquelon',
            'SD' => 'Sudan',
            'SR' => 'Suriname',
            'SJ' => 'Svalbard And Jan Mayen Islands',
            'SZ' => 'Swaziland',
            'SE' => 'Sweden',
            'CH' => 'Switzerland',
            'SY' => 'Syrian Arab Republic',
            'TW' => 'Taiwan',
            'TJ' => 'Tajikistan',
            'TZ' => 'Tanzania, United Republic Of',
            'TH' => 'Thailand',
            'TG' => 'Togo',
            'TK' => 'Tokelau',
            'TO' => 'Tonga',
            'TT' => 'Trinidad And Tobago',
            'TN' => 'Tunisia',
            'TR' => 'Turkey',
            'TM' => 'Turkmenistan',
            'TC' => 'Turks And Caicos Islands',
            'TV' => 'Tuvalu',
            'UG' => 'Uganda',
            'UA' => 'Ukraine',
            'AE' => 'United Arab Emirates',
            'GB' => 'United Kingdom',
            'US' => 'United States',
            'UM' => 'United States Minor Outlying Islands',
            'UY' => 'Uruguay',
            'UZ' => 'Uzbekistan',
            'VU' => 'Vanuatu',
            'VE' => 'Venezuela',
            'VN' => 'Viet Nam',
            'VG' => 'Virgin Islands (British)',
            'VI' => 'Virgin Islands (U.S.)',
            'WF' => 'Wallis And Futuna Islands',
            'EH' => 'Western Sahara',
            'YE' => 'Yemen',
            'YU' => 'Yugoslavia',
            'ZM' => 'Zambia',
            'ZW' => 'Zimbabwe'
    ));

    /**
     * Draws a select box containing countries.
     *
     * @param $currentValue The current value - either the name of the country or the country shortcode. Defaults to null.
     * @param $shortCodeValues If set to true, values passed on form submission will be the country shortcode. Full name otherwise. Defaults to true.
     * @param $name The name of the select form element. Defaults to 'country'.
     * @param $id The ID of the select form element. Defaults to 'countryDropdown'.
     * @param $html Any other arbitrary HTML for inclusion in the initial <select> tag.
     * @return string The country dropdown.
     */
    public static function phpCountryDropdown($country, $currentValue = null, $shortCodeValues = true, $name = 'country', $id = 'countryDropdown', $html = '') {
        //if ($country == 'EN') {
            $countries = self::$country_dropdown[$country];
        /*} else {
            $countries = getCountryArrayES();
        }*/
        return self::phpLocationDropdown($countries, $currentValue, $shortCodeValues, $name, $id, $html);
    }

    /**
     * Draws a select box containing arbitrary locale information.
     *
     * @param $locaitons The list of locations to use, with shortcodes as the key and the full names as the value
     * @param $currentValue The current value - either the name of the country or the country shortcode. Defaults to null.
     * @param $shortCodeValues If set to true, values passed on form submission will be the country shortcode. Full name otherwise. Defaults to true.
     * @param $name The name of the select form element. Defaults to 'country'.
     * @param $id The ID of the select form element. Defaults to 'countryDropdown'.
     * @param $html Any other arbitrary HTML for inclusion in the initial <select> tag.
     * @return string The country dropdown.
     */
    private static function phpLocationDropdown($locations, $currentValue = null, $shortCodeValues = true, $name = 'country', $id = 'countryDropdown', $html = '') {

        return '<select name="' . $name . '" id="' . $id . '" ' . $html . '>' . self::phpLocationDropdownOptions($locations, $shortCodeValues, $currentValue) . '</select>';
    }

    /**
     * Returns a list of countries for inclusion in a select tag.
     * @param $locaitons The list of locations to use, with shortcodes as the key and the full names as the value
     * @param $currentValue The current value - either the name of the country or the country shortcode. Defaults to null.
     * @param $shortCodeValues If set to true, values passed on form submission will be the country shortcode. Full name otherwise. Defaults to true.
     * @return string The options to include.
     */
    private static function phpLocationDropdownOptions($locations, $shortcodeValues = true, $currentValue = null) {

        $currentValue = strtolower($currentValue);
        $options = '';

        foreach ($locations as $shortcode => $name) {
            $options .= '<option value="';
            if ($shortcodeValues)
                $options .= $shortcode;
            else
                $options .= $name;
            $options .= '"';
            if ($currentValue == strtolower($shortcode) || $currentValue == strtolower($name))
                $options .= ' selected="selected"';
            $options .= '>' . $name . '</option>';
        }

        return $options;
    }

}
?>


