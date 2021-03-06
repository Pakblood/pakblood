<?php

use App\Country;
use Illuminate\Database\Seeder;

class CountriesTableSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table('pb_countries')->delete();

        Country::create(['iso2' => 'AF', 'short_name' => 'Afghanistan', 'long_name' => 'Islamic Republic of Afghanistan', 'calling_code' => '93']);
        Country::create(['iso2' => 'AX', 'short_name' => 'Aland Islands', 'long_name' => '&Aring;land Islands', 'calling_code' => '358']);
        Country::create(['iso2' => 'AL', 'short_name' => 'Albania', 'long_name' => 'Republic of Albania', 'calling_code' => '355']);
        Country::create(['iso2' => 'DZ', 'short_name' => 'Algeria', 'long_name' => 'People\'s Democratic Republic of Algeria', 'calling_code' => '213']);
        Country::create(['iso2' => 'AS', 'short_name' => 'American Samoa', 'long_name' => 'American Samoa', 'calling_code' => '1+684']);
        Country::create(['iso2' => 'AD', 'short_name' => 'Andorra', 'long_name' => 'Principality of Andorra', 'calling_code' => '376']);
        Country::create(['iso2' => 'AO', 'short_name' => 'Angola', 'long_name' => 'Republic of Angola', 'calling_code' => '244']);
        Country::create(['iso2' => 'AI', 'short_name' => 'Anguilla', 'long_name' => 'Anguilla', 'calling_code' => '1+264']);
        Country::create(['iso2' => 'AQ', 'short_name' => 'Antarctica', 'long_name' => 'Antarctica', 'calling_code' => '672']);
        Country::create(['iso2' => 'AG', 'short_name' => 'Antigua and Barbuda', 'long_name' => 'Antigua and Barbuda', 'calling_code' => '1+268']);
        Country::create(['iso2' => 'AR', 'short_name' => 'Argentina', 'long_name' => 'Argentine Republic', 'calling_code' => '54']);
        Country::create(['iso2' => 'AM', 'short_name' => 'Armenia', 'long_name' => 'Republic of Armenia', 'calling_code' => '374']);
        Country::create(['iso2' => 'AW', 'short_name' => 'Aruba', 'long_name' => 'Aruba', 'calling_code' => '297']);
        Country::create(['iso2' => 'AU', 'short_name' => 'Australia', 'long_name' => 'Commonwealth of Australia', 'calling_code' => '61']);
        Country::create(['iso2' => 'AT', 'short_name' => 'Austria', 'long_name' => 'Republic of Austria', 'calling_code' => '43']);
        Country::create(['iso2' => 'AZ', 'short_name' => 'Azerbaijan', 'long_name' => 'Republic of Azerbaijan', 'calling_code' => '994']);
        Country::create(['iso2' => 'BS', 'short_name' => 'Bahamas', 'long_name' => 'Commonwealth of The Bahamas', 'calling_code' => '1+242']);
        Country::create(['iso2' => 'BH', 'short_name' => 'Bahrain', 'long_name' => 'Kingdom of Bahrain', 'calling_code' => '973']);
        Country::create(['iso2' => 'BD', 'short_name' => 'Bangladesh', 'long_name' => 'People\'s Republic of Bangladesh', 'calling_code' => '880']);
        Country::create(['iso2' => 'BB', 'short_name' => 'Barbados', 'long_name' => 'Barbados', 'calling_code' => '1+246']);
        Country::create(['iso2' => 'BY', 'short_name' => 'Belarus', 'long_name' => 'Republic of Belarus', 'calling_code' => '375']);
        Country::create(['iso2' => 'BE', 'short_name' => 'Belgium', 'long_name' => 'Kingdom of Belgium', 'calling_code' => '32']);
        Country::create(['iso2' => 'BZ', 'short_name' => 'Belize', 'long_name' => 'Belize', 'calling_code' => '501']);
        Country::create(['iso2' => 'BJ', 'short_name' => 'Benin', 'long_name' => 'Republic of Benin', 'calling_code' => '229']);
        Country::create(['iso2' => 'BM', 'short_name' => 'Bermuda', 'long_name' => 'Bermuda Islands', 'calling_code' => '1+441']);
        Country::create(['iso2' => 'BT', 'short_name' => 'Bhutan', 'long_name' => 'Kingdom of Bhutan', 'calling_code' => '975']);
        Country::create(['iso2' => 'BO', 'short_name' => 'Bolivia', 'long_name' => 'Plurinational State of Bolivia', 'calling_code' => '591']);
        Country::create(['iso2' => 'BQ', 'short_name' => 'Bonaire, Sint Eustatius and Saba', 'long_name' => 'Bonaire, Sint Eustatius and Saba', 'calling_code' => '599']);
        Country::create(['iso2' => 'BA', 'short_name' => 'Bosnia and Herzegovina', 'long_name' => 'Bosnia and Herzegovina', 'calling_code' => '387']);
        Country::create(['iso2' => 'BW', 'short_name' => 'Botswana', 'long_name' => 'Republic of Botswana', 'calling_code' => '267']);
        Country::create(['iso2' => 'BV', 'short_name' => 'Bouvet Island', 'long_name' => 'Bouvet Island', 'calling_code' => 'NONE']);
        Country::create(['iso2' => 'BR', 'short_name' => 'Brazil', 'long_name' => 'Federative Republic of Brazil', 'calling_code' => '55']);
        Country::create(['iso2' => 'IO', 'short_name' => 'British Indian Ocean Territory', 'long_name' => 'British Indian Ocean Territory', 'calling_code' => '246']);
        Country::create(['iso2' => 'BN', 'short_name' => 'Brunei', 'long_name' => 'Brunei Darussalam', 'calling_code' => '673']);
        Country::create(['iso2' => 'BG', 'short_name' => 'Bulgaria', 'long_name' => 'Republic of Bulgaria', 'calling_code' => '359']);
        Country::create(['iso2' => 'BF', 'short_name' => 'Burkina Faso', 'long_name' => 'Burkina Faso', 'calling_code' => '226']);
        Country::create(['iso2' => 'BI', 'short_name' => 'Burundi', 'long_name' => 'Republic of Burundi', 'calling_code' => '257']);
        Country::create(['iso2' => 'KH', 'short_name' => 'Cambodia', 'long_name' => 'Kingdom of Cambodia', 'calling_code' => '855']);
        Country::create(['iso2' => 'CM', 'short_name' => 'Cameroon', 'long_name' => 'Republic of Cameroon', 'calling_code' => '237']);
        Country::create(['iso2' => 'CA', 'short_name' => 'Canada', 'long_name' => 'Canada', 'calling_code' => '1']);
        Country::create(['iso2' => 'CV', 'short_name' => 'Cape Verde', 'long_name' => 'Republic of Cape Verde', 'calling_code' => '238']);
        Country::create(['iso2' => 'KY', 'short_name' => 'Cayman Islands', 'long_name' => 'The Cayman Islands', 'calling_code' => '1+345']);
        Country::create(['iso2' => 'CF', 'short_name' => 'Central African Republic', 'long_name' => 'Central African Republic', 'calling_code' => '236']);
        Country::create(['iso2' => 'TD', 'short_name' => 'Chad', 'long_name' => 'Republic of Chad', 'calling_code' => '235']);
        Country::create(['iso2' => 'CL', 'short_name' => 'Chile', 'long_name' => 'Republic of Chile', 'calling_code' => '56']);
        Country::create(['iso2' => 'CN', 'short_name' => 'China', 'long_name' => 'People\'s Republic of China', 'calling_code' => '86']);
        Country::create(['iso2' => 'CX', 'short_name' => 'Christmas Island', 'long_name' => 'Christmas Island', 'calling_code' => '61']);
        Country::create(['iso2' => 'CC', 'short_name' => 'Cocos (Keeling) Islands', 'long_name' => 'Cocos (Keeling) Islands', 'calling_code' => '61']);
        Country::create(['iso2' => 'CO', 'short_name' => 'Colombia', 'long_name' => 'Republic of Colombia', 'calling_code' => '57']);
        Country::create(['iso2' => 'KM', 'short_name' => 'Comoros', 'long_name' => 'Union of the Comoros', 'calling_code' => '269']);
        Country::create(['iso2' => 'CG', 'short_name' => 'Congo', 'long_name' => 'Republic of the Congo', 'calling_code' => '242']);
        Country::create(['iso2' => 'CK', 'short_name' => 'Cook Islands', 'long_name' => 'Cook Islands', 'calling_code' => '682']);
        Country::create(['iso2' => 'CR', 'short_name' => 'Costa Rica', 'long_name' => 'Republic of Costa Rica', 'calling_code' => '506']);
        Country::create(['iso2' => 'CI', 'short_name' => 'Cote d\'ivoire (Ivory Coast)', 'long_name' => 'Republic of C&ocirc;te D\'Ivoire (Ivory Coast)', 'calling_code' => '225']);
        Country::create(['iso2' => 'CR', 'short_name' => 'Croatia', 'long_name' => 'Republic of Croatia', 'calling_code' => '385']);
        Country::create(['iso2' => 'CU', 'short_name' => 'Cuba', 'long_name' => 'Republic of Cuba', 'calling_code' => '53']);
        Country::create(['iso2' => 'CW', 'short_name' => 'Curacao', 'long_name' => 'Cura&ccedil;ao', 'calling_code' => '599']);
        Country::create(['iso2' => 'CY', 'short_name' => 'Cyprus', 'long_name' => 'Republic of Cyprus', 'calling_code' => '357']);
        Country::create(['iso2' => 'CZ', 'short_name' => 'Czech Republic', 'long_name' => 'Czech Republic', 'calling_code' => '420']);
        Country::create(['iso2' => 'CD', 'short_name' => 'Democratic Republic of the Congo', 'long_name' => 'Democratic Republic of the Congo', 'calling_code' => '243']);
        Country::create(['iso2' => 'DK', 'short_name' => 'Denmark', 'long_name' => 'Kingdom of Denmark', 'calling_code' => '45']);
        Country::create(['iso2' => 'DJ', 'short_name' => 'Djibouti', 'long_name' => 'Republic of Djibouti', 'calling_code' => '253']);
        Country::create(['iso2' => 'DM', 'short_name' => 'Dominica', 'long_name' => 'Commonwealth of Dominica', 'calling_code' => '1+767']);
        Country::create(['iso2' => 'DO', 'short_name' => 'Dominican Republic', 'long_name' => 'Dominican Republic', 'calling_code' => '1+809, 8']);
        Country::create(['iso2' => 'EC', 'short_name' => 'Ecuador', 'long_name' => 'Republic of Ecuador', 'calling_code' => '593']);
        Country::create(['iso2' => 'EG', 'short_name' => 'Egypt', 'long_name' => 'Arab Republic of Egypt', 'calling_code' => '20']);
        Country::create(['iso2' => 'SV', 'short_name' => 'El Salvador', 'long_name' => 'Republic of El Salvador', 'calling_code' => '503']);
        Country::create(['iso2' => 'GQ', 'short_name' => 'Equatorial Guinea', 'long_name' => 'Republic of Equatorial Guinea', 'calling_code' => '240']);
        Country::create(['iso2' => 'ER', 'short_name' => 'Eritrea', 'long_name' => 'State of Eritrea', 'calling_code' => '291']);
        Country::create(['iso2' => 'EE', 'short_name' => 'Estonia', 'long_name' => 'Republic of Estonia', 'calling_code' => '372']);
        Country::create(['iso2' => 'ET', 'short_name' => 'Ethiopia', 'long_name' => 'Federal Democratic Republic of Ethiopia', 'calling_code' => '251']);
        Country::create(['iso2' => 'FK', 'short_name' => 'Falkland Islands (Malvinas)', 'long_name' => 'The Falkland Islands (Malvinas)', 'calling_code' => '500']);
        Country::create(['iso2' => 'FO', 'short_name' => 'Faroe Islands', 'long_name' => 'The Faroe Islands', 'calling_code' => '298']);
        Country::create(['iso2' => 'FJ', 'short_name' => 'Fiji', 'long_name' => 'Republic of Fiji', 'calling_code' => '679']);
        Country::create(['iso2' => 'FI', 'short_name' => 'Finland', 'long_name' => 'Republic of Finland', 'calling_code' => '358']);
        Country::create(['iso2' => 'FR', 'short_name' => 'France', 'long_name' => 'French Republic', 'calling_code' => '33']);
        Country::create(['iso2' => 'GF', 'short_name' => 'French Guiana', 'long_name' => 'French Guiana', 'calling_code' => '594']);
        Country::create(['iso2' => 'PF', 'short_name' => 'French Polynesia', 'long_name' => 'French Polynesia', 'calling_code' => '689']);
        Country::create(['iso2' => 'TF', 'short_name' => 'French Southern Territories', 'long_name' => 'French Southern Territories', 'calling_code' => '']);
        Country::create(['iso2' => 'GA', 'short_name' => 'Gabon', 'long_name' => 'Gabonese Republic', 'calling_code' => '241']);
        Country::create(['iso2' => 'GM', 'short_name' => 'Gambia', 'long_name' => 'Republic of The Gambia', 'calling_code' => '220']);
        Country::create(['iso2' => 'GE', 'short_name' => 'Georgia', 'long_name' => 'Georgia', 'calling_code' => '995']);
        Country::create(['iso2' => 'DE', 'short_name' => 'Germany', 'long_name' => 'Federal Republic of Germany', 'calling_code' => '49']);
        Country::create(['iso2' => 'GH', 'short_name' => 'Ghana', 'long_name' => 'Republic of Ghana', 'calling_code' => '233']);
        Country::create(['iso2' => 'GI', 'short_name' => 'Gibraltar', 'long_name' => 'Gibraltar', 'calling_code' => '350']);
        Country::create(['iso2' => 'GR', 'short_name' => 'Greece', 'long_name' => 'Hellenic Republic', 'calling_code' => '30']);
        Country::create(['iso2' => 'GL', 'short_name' => 'Greenland', 'long_name' => 'Greenland', 'calling_code' => '299']);
        Country::create(['iso2' => 'GD', 'short_name' => 'Grenada', 'long_name' => 'Grenada', 'calling_code' => '1+473']);
        Country::create(['iso2' => 'GP', 'short_name' => 'Guadaloupe', 'long_name' => 'Guadeloupe', 'calling_code' => '590']);
        Country::create(['iso2' => 'GU', 'short_name' => 'Guam', 'long_name' => 'Guam', 'calling_code' => '1+671']);
        Country::create(['iso2' => 'GT', 'short_name' => 'Guatemala', 'long_name' => 'Republic of Guatemala', 'calling_code' => '502']);
        Country::create(['iso2' => 'GG', 'short_name' => 'Guernsey', 'long_name' => 'Guernsey', 'calling_code' => '44']);
        Country::create(['iso2' => 'GN', 'short_name' => 'Guinea', 'long_name' => 'Republic of Guinea', 'calling_code' => '224']);
        Country::create(['iso2' => 'GW', 'short_name' => 'Guinea-Bissau', 'long_name' => 'Republic of Guinea-Bissau', 'calling_code' => '245']);
        Country::create(['iso2' => 'GY', 'short_name' => 'Guyana', 'long_name' => 'Co-operative Republic of Guyana', 'calling_code' => '592']);
        Country::create(['iso2' => 'HT', 'short_name' => 'Haiti', 'long_name' => 'Republic of Haiti', 'calling_code' => '509']);
        Country::create(['iso2' => 'HM', 'short_name' => 'Heard Island and McDonald Islands', 'long_name' => 'Heard Island and McDonald Islands', 'calling_code' => 'NONE']);
        Country::create(['iso2' => 'HN', 'short_name' => 'Honduras', 'long_name' => 'Republic of Honduras', 'calling_code' => '504']);
        Country::create(['iso2' => 'HK', 'short_name' => 'Hong Kong', 'long_name' => 'Hong Kong', 'calling_code' => '852']);
        Country::create(['iso2' => 'HU', 'short_name' => 'Hungary', 'long_name' => 'Hungary', 'calling_code' => '36']);
        Country::create(['iso2' => 'IS', 'short_name' => 'Iceland', 'long_name' => 'Republic of Iceland', 'calling_code' => '354']);
        Country::create(['iso2' => 'IN', 'short_name' => 'India', 'long_name' => 'Republic of India', 'calling_code' => '91']);
        Country::create(['iso2' => 'ID', 'short_name' => 'Indonesia', 'long_name' => 'Republic of Indonesia', 'calling_code' => '62']);
        Country::create(['iso2' => 'IR', 'short_name' => 'Iran', 'long_name' => 'Islamic Republic of Iran', 'calling_code' => '98']);
        Country::create(['iso2' => 'IQ', 'short_name' => 'Iraq', 'long_name' => 'Republic of Iraq', 'calling_code' => '964']);
        Country::create(['iso2' => 'IE', 'short_name' => 'Ireland', 'long_name' => 'Ireland', 'calling_code' => '353']);
        Country::create(['iso2' => 'IM', 'short_name' => 'Isle of Man', 'long_name' => 'Isle of Man', 'calling_code' => '44']);
        Country::create(['iso2' => 'IL', 'short_name' => 'Israel', 'long_name' => 'State of Israel', 'calling_code' => '972']);
        Country::create(['iso2' => 'IT', 'short_name' => 'Italy', 'long_name' => 'Italian Republic', 'calling_code' => '39']);
        Country::create(['iso2' => 'JM', 'short_name' => 'Jamaica', 'long_name' => 'Jamaica', 'calling_code' => '1+876']);
        Country::create(['iso2' => 'JP', 'short_name' => 'Japan', 'long_name' => 'Japan', 'calling_code' => '81']);
        Country::create(['iso2' => 'JE', 'short_name' => 'Jersey', 'long_name' => 'The Bailiwick of Jersey', 'calling_code' => '44']);
        Country::create(['iso2' => 'JO', 'short_name' => 'Jordan', 'long_name' => 'Hashemite Kingdom of Jordan', 'calling_code' => '962']);
        Country::create(['iso2' => 'KZ', 'short_name' => 'Kazakhstan', 'long_name' => 'Republic of Kazakhstan', 'calling_code' => '7']);
        Country::create(['iso2' => 'KE', 'short_name' => 'Kenya', 'long_name' => 'Republic of Kenya', 'calling_code' => '254']);
        Country::create(['iso2' => 'KI', 'short_name' => 'Kiribati', 'long_name' => 'Republic of Kiribati', 'calling_code' => '686']);
        Country::create(['iso2' => 'XK', 'short_name' => 'Kosovo', 'long_name' => 'Republic of Kosovo', 'calling_code' => '381']);
        Country::create(['iso2' => 'KW', 'short_name' => 'Kuwait', 'long_name' => 'State of Kuwait', 'calling_code' => '965']);
        Country::create(['iso2' => 'KG', 'short_name' => 'Kyrgyzstan', 'long_name' => 'Kyrgyz Republic', 'calling_code' => '996']);
        Country::create(['iso2' => 'LA', 'short_name' => 'Laos', 'long_name' => 'Lao People\'s Democratic Republic', 'calling_code' => '856']);
        Country::create(['iso2' => 'LV', 'short_name' => 'Latvia', 'long_name' => 'Republic of Latvia', 'calling_code' => '371']);
        Country::create(['iso2' => 'LB', 'short_name' => 'Lebanon', 'long_name' => 'Republic of Lebanon', 'calling_code' => '961']);
        Country::create(['iso2' => 'LS', 'short_name' => 'Lesotho', 'long_name' => 'Kingdom of Lesotho', 'calling_code' => '266']);
        Country::create(['iso2' => 'LR', 'short_name' => 'Liberia', 'long_name' => 'Republic of Liberia', 'calling_code' => '231']);
        Country::create(['iso2' => 'LY', 'short_name' => 'Libya', 'long_name' => 'Libya', 'calling_code' => '218']);
        Country::create(['iso2' => 'LI', 'short_name' => 'Liechtenstein', 'long_name' => 'Republic of Lithuania', 'calling_code' => '423']);
        Country::create(['iso2' => 'LT', 'short_name' => 'Lithuania', 'long_name' => 'Grand Duchy of Luxembourg', 'calling_code' => '370']);
        Country::create(['iso2' => 'LU', 'short_name' => 'Luxembourg', 'long_name' => 'The Macao Special Administrative Region', 'calling_code' => '352']);
        Country::create(['iso2' => 'MO', 'short_name' => 'Macao', 'long_name' => 'The Macao Special Administrative Region', 'calling_code' => '853']);
        Country::create(['iso2' => 'MK', 'short_name' => 'Macedonia', 'long_name' => 'The Former Yugoslav Republic of Macedonia', 'calling_code' => '389']);
        Country::create(['iso2' => 'MG', 'short_name' => 'Madagascar', 'long_name' => 'Republic of Madagascar', 'calling_code' => '261']);
        Country::create(['iso2' => 'MW', 'short_name' => 'Malawi', 'long_name' => 'Republic of Malawi', 'calling_code' => '265']);
        Country::create(['iso2' => 'MY', 'short_name' => 'Malaysia', 'long_name' => 'Malaysia', 'calling_code' => '60']);
        Country::create(['iso2' => 'MV', 'short_name' => 'Maldives', 'long_name' => 'Republic of Maldives', 'calling_code' => '960']);
        Country::create(['iso2' => 'ML', 'short_name' => 'Mali', 'long_name' => 'Republic of Mali', 'calling_code' => '223']);
        Country::create(['iso2' => 'MT', 'short_name' => 'Malta', 'long_name' => 'Republic of Malta', 'calling_code' => '356']);
        Country::create(['iso2' => 'MH', 'short_name' => 'Marshall Islands', 'long_name' => 'Republic of the Marshall Islands', 'calling_code' => '692']);
        Country::create(['iso2' => 'MQ', 'short_name' => 'Martinique', 'long_name' => 'Martinique', 'calling_code' => '596']);
        Country::create(['iso2' => 'MR', 'short_name' => 'Mauritania', 'long_name' => 'Islamic Republic of Mauritania', 'calling_code' => '222']);
        Country::create(['iso2' => 'MU', 'short_name' => 'Mauritius', 'long_name' => 'Republic of Mauritius', 'calling_code' => '230']);
        Country::create(['iso2' => 'YT', 'short_name' => 'Mayotte', 'long_name' => 'Mayotte', 'calling_code' => '262']);
        Country::create(['iso2' => 'MX', 'short_name' => 'Mexico', 'long_name' => 'United Mexican States', 'calling_code' => '52']);
        Country::create(['iso2' => 'FM', 'short_name' => 'Micronesia', 'long_name' => 'Federated States of Micronesia', 'calling_code' => '691']);
        Country::create(['iso2' => 'MD', 'short_name' => 'Moldava', 'long_name' => 'Republic of Moldova', 'calling_code' => '373']);
        Country::create(['iso2' => 'MC', 'short_name' => 'Monaco', 'long_name' => 'Principality of Monaco', 'calling_code' => '377']);
        Country::create(['iso2' => 'MN', 'short_name' => 'Mongolia', 'long_name' => 'Mongolia', 'calling_code' => '976']);
        Country::create(['iso2' => 'ME', 'short_name' => 'Montenegro', 'long_name' => 'Montenegro', 'calling_code' => '382']);
        Country::create(['iso2' => 'MS', 'short_name' => 'Montserrat', 'long_name' => 'Montserrat', 'calling_code' => '1+664']);
        Country::create(['iso2' => 'MA', 'short_name' => 'Morocco', 'long_name' => 'Kingdom of Morocco', 'calling_code' => '212']);
        Country::create(['iso2' => 'MZ', 'short_name' => 'Mozambique', 'long_name' => 'Republic of Mozambique', 'calling_code' => '258']);
        Country::create(['iso2' => 'MM', 'short_name' => 'Myanmar (Burma)', 'long_name' => 'Republic of the Union of Myanmar', 'calling_code' => '95']);
        Country::create(['iso2' => 'NA', 'short_name' => 'Namibia', 'long_name' => 'Republic of Namibia', 'calling_code' => '264']);
        Country::create(['iso2' => 'NR', 'short_name' => 'Nauru', 'long_name' => 'Republic of Nauru', 'calling_code' => '674']);
        Country::create(['iso2' => 'NP', 'short_name' => 'Nepal', 'long_name' => 'Federal Democratic Republic of Nepal', 'calling_code' => '977']);
        Country::create(['iso2' => 'NL', 'short_name' => 'Netherlands', 'long_name' => 'Kingdom of the Netherlands', 'calling_code' => '31']);
        Country::create(['iso2' => 'NC', 'short_name' => 'New Caledonia', 'long_name' => 'New Caledonia', 'calling_code' => '687']);
        Country::create(['iso2' => 'NZ', 'short_name' => 'New Zealand', 'long_name' => 'New Zealand', 'calling_code' => '64']);
        Country::create(['iso2' => 'NI', 'short_name' => 'Nicaragua', 'long_name' => 'Republic of Nicaragua', 'calling_code' => '505']);
        Country::create(['iso2' => 'NE', 'short_name' => 'Niger', 'long_name' => 'Republic of Niger', 'calling_code' => '227']);
        Country::create(['iso2' => 'NG', 'short_name' => 'Nigeria', 'long_name' => 'Federal Republic of Nigeria', 'calling_code' => '234']);
        Country::create(['iso2' => 'NU', 'short_name' => 'Niue', 'long_name' => 'Niue', 'calling_code' => '683']);
        Country::create(['iso2' => 'NF', 'short_name' => 'Norfolk Island', 'long_name' => 'Norfolk Island', 'calling_code' => '672']);
        Country::create(['iso2' => 'KP', 'short_name' => 'North Korea', 'long_name' => 'Democratic People\'s Republic of Korea', 'calling_code' => '850']);
        Country::create(['iso2' => 'MP', 'short_name' => 'Northern Mariana Islands', 'long_name' => 'Northern Mariana Islands', 'calling_code' => '1+670']);
        Country::create(['iso2' => 'NO', 'short_name' => 'Norway', 'long_name' => 'Kingdom of Norway', 'calling_code' => '47']);
        Country::create(['iso2' => 'OM', 'short_name' => 'Oman', 'long_name' => 'Sultanate of Oman', 'calling_code' => '968']);
        Country::create(['iso2' => 'PK', 'short_name' => 'Pakistan', 'long_name' => 'Islamic Republic of Pakistan', 'calling_code' => '92']);
        Country::create(['iso2' => 'PW', 'short_name' => 'Palau', 'long_name' => 'Republic of Palau', 'calling_code' => '680']);
        Country::create(['iso2' => 'PS', 'short_name' => 'Palestine', 'long_name' => 'State of Palestine (or Occupied Palestinian Territory)', 'calling_code' => '970']);
        Country::create(['iso2' => 'PA', 'short_name' => 'Panama', 'long_name' => 'Republic of Panama', 'calling_code' => '507']);
        Country::create(['iso2' => 'PG', 'short_name' => 'Papua New Guinea', 'long_name' => 'Independent State of Papua New Guinea', 'calling_code' => '675']);
        Country::create(['iso2' => 'PY', 'short_name' => 'Paraguay', 'long_name' => 'Republic of Paraguay', 'calling_code' => '595']);
        Country::create(['iso2' => 'PE', 'short_name' => 'Peru', 'long_name' => 'Republic of Peru', 'calling_code' => '51']);
        Country::create(['iso2' => 'PH', 'short_name' => 'Phillipines', 'long_name' => 'Republic of the Philippines', 'calling_code' => '63']);
        Country::create(['iso2' => 'PN', 'short_name' => 'Pitcairn', 'long_name' => 'Pitcairn', 'calling_code' => 'NONE']);
        Country::create(['iso2' => 'PL', 'short_name' => 'Poland', 'long_name' => 'Republic of Poland', 'calling_code' => '48']);
        Country::create(['iso2' => 'PT', 'short_name' => 'Portugal', 'long_name' => 'Portuguese Republic', 'calling_code' => '351']);
        Country::create(['iso2' => 'PR', 'short_name' => 'Puerto Rico', 'long_name' => 'Commonwealth of Puerto Rico', 'calling_code' => '1+939']);
        Country::create(['iso2' => 'QA', 'short_name' => 'Qatar', 'long_name' => 'State of Qatar', 'calling_code' => '974']);
        Country::create(['iso2' => 'RE', 'short_name' => 'Reunion', 'long_name' => 'R&eacute;union', 'calling_code' => '262']);
        Country::create(['iso2' => 'RO', 'short_name' => 'Romania', 'long_name' => 'Romania', 'calling_code' => '40']);
        Country::create(['iso2' => 'RU', 'short_name' => 'Russia', 'long_name' => 'Russian Federation', 'calling_code' => '7']);
        Country::create(['iso2' => 'RW', 'short_name' => 'Rwanda', 'long_name' => 'Republic of Rwanda', 'calling_code' => '250']);
        Country::create(['iso2' => 'BL', 'short_name' => 'Saint Barthelemy', 'long_name' => 'Saint Barth&eacute;lemy', 'calling_code' => '590']);
        Country::create(['iso2' => 'SH', 'short_name' => 'Saint Helena', 'long_name' => 'Saint Helena, Ascension and Tristan da Cunha', 'calling_code' => '290']);
        Country::create(['iso2' => 'KN', 'short_name' => 'Saint Kitts and Nevis', 'long_name' => 'Federation of Saint Christopher and Nevis', 'calling_code' => '1+869']);
        Country::create(['iso2' => 'LC', 'short_name' => 'Saint Lucia', 'long_name' => 'Saint Lucia', 'calling_code' => '1+758']);
        Country::create(['iso2' => 'MF', 'short_name' => 'Saint Martin', 'long_name' => 'Saint Martin', 'calling_code' => '590']);
        Country::create(['iso2' => 'PM', 'short_name' => 'Saint Pierre and Miquelon', 'long_name' => 'Saint Pierre and Miquelon', 'calling_code' => '508']);
        Country::create(['iso2' => 'VC', 'short_name' => 'Saint Vincent and the Grenadines', 'long_name' => 'Saint Vincent and the Grenadines', 'calling_code' => '1+784']);
        Country::create(['iso2' => 'WS', 'short_name' => 'Samoa', 'long_name' => 'Independent State of Samoa', 'calling_code' => '685']);
        Country::create(['iso2' => 'SM', 'short_name' => 'San Marino', 'long_name' => 'Republic of San Marino', 'calling_code' => '378']);
        Country::create(['iso2' => 'ST', 'short_name' => 'Sao Tome and Principe', 'long_name' => 'Democratic Republic of S&atilde;o Tom&eacute; and Pr&iacute;ncipe', 'calling_code' => '239']);
        Country::create(['iso2' => 'SA', 'short_name' => 'Saudi Arabia', 'long_name' => 'Kingdom of Saudi Arabia', 'calling_code' => '966']);
        Country::create(['iso2' => 'SN', 'short_name' => 'Senegal', 'long_name' => 'Republic of Senegal', 'calling_code' => '221']);
        Country::create(['iso2' => 'RS', 'short_name' => 'Serbia', 'long_name' => 'Republic of Serbia', 'calling_code' => '381']);
        Country::create(['iso2' => 'SC', 'short_name' => 'Seychelles', 'long_name' => 'Republic of Seychelles', 'calling_code' => '248']);
        Country::create(['iso2' => 'SL', 'short_name' => 'Sierra Leone', 'long_name' => 'Republic of Sierra Leone', 'calling_code' => '232']);
        Country::create(['iso2' => 'SG', 'short_name' => 'Singapore', 'long_name' => 'Republic of Singapore', 'calling_code' => '65']);
        Country::create(['iso2' => 'SX', 'short_name' => 'Sint Maarten', 'long_name' => 'Sint Maarten', 'calling_code' => '1+721']);
        Country::create(['iso2' => 'SK', 'short_name' => 'Slovakia', 'long_name' => 'Slovak Republic', 'calling_code' => '421']);
        Country::create(['iso2' => 'SI', 'short_name' => 'Slovenia', 'long_name' => 'Republic of Slovenia', 'calling_code' => '386']);
        Country::create(['iso2' => 'SB', 'short_name' => 'Solomon Islands', 'long_name' => 'Solomon Islands', 'calling_code' => '677']);
        Country::create(['iso2' => 'SO', 'short_name' => 'Somalia', 'long_name' => 'Somali Republic', 'calling_code' => '252']);
        Country::create(['iso2' => 'ZA', 'short_name' => 'South Africa', 'long_name' => 'Republic of South Africa', 'calling_code' => '27']);
        Country::create(['iso2' => 'GS', 'short_name' => 'South Georgia and the South Sandwich Islands', 'long_name' => 'South Georgia and the South Sandwich Islands', 'calling_code' => '500']);
        Country::create(['iso2' => 'KR', 'short_name' => 'South Korea', 'long_name' => 'Republic of Korea', 'calling_code' => '82']);
        Country::create(['iso2' => 'SS', 'short_name' => 'South Sudan', 'long_name' => 'Republic of South Sudan', 'calling_code' => '211']);
        Country::create(['iso2' => 'ES', 'short_name' => 'Spain', 'long_name' => 'Kingdom of Spain', 'calling_code' => '34']);
        Country::create(['iso2' => 'LK', 'short_name' => 'Sri Lanka', 'long_name' => 'Democratic Socialist Republic of Sri Lanka', 'calling_code' => '94']);
        Country::create(['iso2' => 'SD', 'short_name' => 'Sudan', 'long_name' => 'Republic of the Sudan', 'calling_code' => '249']);
        Country::create(['iso2' => 'SR', 'short_name' => 'Suriname', 'long_name' => 'Republic of Suriname', 'calling_code' => '597']);
        Country::create(['iso2' => 'SJ', 'short_name' => 'Svalbard and Jan Mayen', 'long_name' => 'Svalbard and Jan Mayen', 'calling_code' => '47']);
        Country::create(['iso2' => 'SZ', 'short_name' => 'Swaziland', 'long_name' => 'Kingdom of Swaziland', 'calling_code' => '268']);
        Country::create(['iso2' => 'SE', 'short_name' => 'Sweden', 'long_name' => 'Kingdom of Sweden', 'calling_code' => '46']);
        Country::create(['iso2' => 'CH', 'short_name' => 'Switzerland', 'long_name' => 'Swiss Confederation', 'calling_code' => '41']);
        Country::create(['iso2' => 'SY', 'short_name' => 'Syria', 'long_name' => 'Syrian Arab Republic', 'calling_code' => '963']);
        Country::create(['iso2' => 'TW', 'short_name' => 'Taiwan', 'long_name' => 'Republic of China (Taiwan)', 'calling_code' => '886']);
        Country::create(['iso2' => 'TJ', 'short_name' => 'Tajikistan', 'long_name' => 'Republic of Tajikistan', 'calling_code' => '992']);
        Country::create(['iso2' => 'TZ', 'short_name' => 'Tanzania', 'long_name' => 'United Republic of Tanzania', 'calling_code' => '255']);
        Country::create(['iso2' => 'TH', 'short_name' => 'Thailand', 'long_name' => 'Kingdom of Thailand', 'calling_code' => '66']);
        Country::create(['iso2' => 'TL', 'short_name' => 'Timor-Leste (East Timor)', 'long_name' => 'Democratic Republic of Timor-Leste', 'calling_code' => '670']);
        Country::create(['iso2' => 'TG', 'short_name' => 'Togo', 'long_name' => 'Togolese Republic', 'calling_code' => '228']);
        Country::create(['iso2' => 'TK', 'short_name' => 'Tokelau', 'long_name' => 'Tokelau', 'calling_code' => '690']);
        Country::create(['iso2' => 'TO', 'short_name' => 'Tonga', 'long_name' => 'Kingdom of Tonga', 'calling_code' => '676']);
        Country::create(['iso2' => 'TT', 'short_name' => 'Trinidad and Tobago', 'long_name' => 'Republic of Trinidad and Tobago', 'calling_code' => '1+868']);
        Country::create(['iso2' => 'TN', 'short_name' => 'Tunisia', 'long_name' => 'Republic of Tunisia', 'calling_code' => '216']);
        Country::create(['iso2' => 'TR', 'short_name' => 'Turkey', 'long_name' => 'Republic of Turkey', 'calling_code' => '90']);
        Country::create(['iso2' => 'TM', 'short_name' => 'Turkmenistan', 'long_name' => 'Turkmenistan', 'calling_code' => '993']);
        Country::create(['iso2' => 'TC', 'short_name' => 'Turks and Caicos Islands', 'long_name' => 'Turks and Caicos Islands', 'calling_code' => '1+649']);
        Country::create(['iso2' => 'TV', 'short_name' => 'Tuvalu', 'long_name' => 'Tuvalu', 'calling_code' => '688']);
        Country::create(['iso2' => 'UG', 'short_name' => 'Uganda', 'long_name' => 'Republic of Uganda', 'calling_code' => '256']);
        Country::create(['iso2' => 'UA', 'short_name' => 'Ukraine', 'long_name' => 'Ukraine', 'calling_code' => '380']);
        Country::create(['iso2' => 'AE', 'short_name' => 'United Arab Emirates', 'long_name' => 'United Arab Emirates', 'calling_code' => '971']);
        Country::create(['iso2' => 'GB', 'short_name' => 'United Kingdom', 'long_name' => 'United Kingdom of Great Britain and Nothern Ireland', 'calling_code' => '44']);
        Country::create(['iso2' => 'US', 'short_name' => 'United States', 'long_name' => 'United States of America', 'calling_code' => '1']);
        Country::create(['iso2' => 'UM', 'short_name' => 'United States Minor Outlying Islands', 'long_name' => 'United States Minor Outlying Islands', 'calling_code' => 'NONE']);
        Country::create(['iso2' => 'UY', 'short_name' => 'Uruguay', 'long_name' => 'Eastern Republic of Uruguay', 'calling_code' => '598']);
        Country::create(['iso2' => 'UZ', 'short_name' => 'Uzbekistan', 'long_name' => 'Republic of Uzbekistan', 'calling_code' => '998']);
        Country::create(['iso2' => 'VU', 'short_name' => 'Vanuatu', 'long_name' => 'Republic of Vanuatu', 'calling_code' => '678']);
        Country::create(['iso2' => 'VA', 'short_name' => 'Vatican City', 'long_name' => 'State of the Vatican City', 'calling_code' => '39']);
        Country::create(['iso2' => 'VE', 'short_name' => 'Venezuela', 'long_name' => 'Bolivarian Republic of Venezuela', 'calling_code' => '58']);
        Country::create(['iso2' => 'VN', 'short_name' => 'Vietnam', 'long_name' => 'Socialist Republic of Vietnam', 'calling_code' => '84']);
        Country::create(['iso2' => 'VG', 'short_name' => 'Virgin Islands, British', 'long_name' => 'British Virgin Islands', 'calling_code' => '1+284']);
        Country::create(['iso2' => 'VI', 'short_name' => 'Virgin Islands, US', 'long_name' => 'Virgin Islands of the United States', 'calling_code' => '1+340']);
        Country::create(['iso2' => 'WF', 'short_name' => 'Wallis and Futuna', 'long_name' => 'Wallis and Futuna', 'calling_code' => '681']);
        Country::create(['iso2' => 'EH', 'short_name' => 'Western Sahara', 'long_name' => 'Western Sahara', 'calling_code' => '212']);
        Country::create(['iso2' => 'YE', 'short_name' => 'Yemen', 'long_name' => 'Republic of Yemen', 'calling_code' => '967']);
        Country::create(['iso2' => 'ZM', 'short_name' => 'Zambia', 'long_name' => 'Republic of Zambia', 'calling_code' => '260']);
        Country::create(['iso2' => 'ZW', 'short_name' => 'Zimbabwe', 'long_name' => 'Republic of Zimbabwe', 'calling_code' => '263']);
    }
}