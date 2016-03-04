<?php

use Illuminate\Database\Seeder;

class ConstantsSeeder extends Seeder {

    public function run() {


        $order_statuses = [
            [
                'id' => 1,
                'name' => 'Completed'
            ],
            [
                'id' => 2,
                'name' => 'Refunded'
            ],
            [
                'id' => 3,
                'name' => 'Partially Refunded'
            ],
            [
                'id' => 4,
                'name' => 'Cancelled'
            ],
        ];

        DB::table('order_statuses')->insert($order_statuses);

        $ticket_statuses = [
            [
                'id' => 1,
                'name' => 'Sold Out'
            ],
            [
                'id' => 2,
                'name' => 'Sales Have Ended'
            ],
            [
                'id' => 3,
                'name' => 'Not On Sale Yet'
            ],
            [
                'id' => 4,
                'name' => 'On Sale'
            ],
            [
                'id' => 5,
                'name' => 'On Sale'
            ]
        ];

        DB::table('ticket_statuses')->insert($ticket_statuses);

        
        /*
         * Question Types
         */
                $question_types = [
            [
                'id' => 0,
                'name' => 'Single-line text box',
                'allow_multiple' => 0
            ],
            [
                'id' => 1,
                'name' => 'Multi-line text box',
                'allow_multiple' => 0
            ],
            [
                'id' => 2,
                'name' => 'Drop down options (single section)',
                'allow_multiple' => 0
            ],
            [
                'id' => 3,
                'name' => 'Drop down options (multiple section)',
                'allow_multiple' => 1
            ],
            [
                'id' => 4,
                'name' => 'Check Boxes',
                'allow_multiple' => 1
            ]
                    
        ];

        //DB::table('question_types')->insert($question_types);

        

        $currencies = array(
            array(
                'id' => 1,
                'title' => 'U.S. Dollar',
                'symbol_left' => '$',
                'symbol_right' => '',
                'code' => 'USD',
                'decimal_place' => 2,
                'value' => 1.00000000,
                'decimal_point' => '.',
                'thousand_point' => ',',
                'status' => 1,
                'created_at' => '2013-11-29 19:51:38',
                'updated_at' => '2013-11-29 19:51:38',
            ),
            array(
                'id' => 2,
                'title' => 'Euro',
                'symbol_left' => '€',
                'symbol_right' => '',
                'code' => 'EUR',
                'decimal_place' => 2,
                'value' => 0.74970001,
                'decimal_point' => '.',
                'thousand_point' => ',',
                'status' => 1,
                'created_at' => '2013-11-29 19:51:38',
                'updated_at' => '2013-11-29 19:51:38',
            ),
            array(
                'id' => 3,
                'title' => 'Pound Sterling',
                'symbol_left' => '£',
                'symbol_right' => '',
                'code' => 'GBP',
                'decimal_place' => 2,
                'value' => 0.62220001,
                'decimal_point' => '.',
                'thousand_point' => ',',
                'status' => 1,
                'created_at' => '2013-11-29 19:51:38',
                'updated_at' => '2013-11-29 19:51:38',
            ),
            array(
                'id' => 4,
                'title' => 'Australian Dollar',
                'symbol_left' => '$',
                'symbol_right' => '',
                'code' => 'AUD',
                'decimal_place' => 2,
                'value' => 0.94790000,
                'decimal_point' => '.',
                'thousand_point' => ',',
                'status' => 1,
                'created_at' => '2013-11-29 19:51:38',
                'updated_at' => '2013-11-29 19:51:38',
            ),
            array(
                'id' => 5,
                'title' => 'Canadian Dollar',
                'symbol_left' => '$',
                'symbol_right' => '',
                'code' => 'CAD',
                'decimal_place' => 2,
                'value' => 0.98500001,
                'decimal_point' => '.',
                'thousand_point' => ',',
                'status' => 1,
                'created_at' => '2013-11-29 19:51:38',
                'updated_at' => '2013-11-29 19:51:38',
            )
//            array(
//                'id' => 6,
//                'title' => 'Czech Koruna',
//                'symbol_left' => '',
//                'symbol_right' => 'Kč',
//                'code' => 'CZK',
//                'decimal_place' => 2,
//                'value' => 19.16900063,
//                'decimal_point' => '.',
//                'thousand_point' => ',',
//                'status' => 1,
//                'created_at' => '2013-11-29 19:51:38',
//                'updated_at' => '2013-11-29 19:51:38',
//            ),
//            array(
//                'id' => 7,
//                'title' => 'Danish Krone',
//                'symbol_left' => 'kr',
//                'symbol_right' => '',
//                'code' => 'DKK',
//                'decimal_place' => 2,
//                'value' => 5.59420013,
//                'decimal_point' => '.',
//                'thousand_point' => ',',
//                'status' => 1,
//                'created_at' => '2013-11-29 19:51:38',
//                'updated_at' => '2013-11-29 19:51:38',
//            ),
//            array(
//                'id' => 8,
//                'title' => 'Hong Kong Dollar',
//                'symbol_left' => '$',
//                'symbol_right' => '',
//                'code' => 'HKD',
//                'decimal_place' => 2,
//                'value' => 7.75290012,
//                'decimal_point' => '.',
//                'thousand_point' => ',',
//                'status' => 1,
//                'created_at' => '2013-11-29 19:51:38',
//                'updated_at' => '2013-11-29 19:51:38',
//            ),
//            array(
//                'id' => 9,
//                'title' => 'Hungarian Forint',
//                'symbol_left' => 'Ft',
//                'symbol_right' => '',
//                'code' => 'HUF',
//                'decimal_place' => 2,
//                'value' => 221.27000427,
//                'decimal_point' => '.',
//                'thousand_point' => ',',
//                'status' => 1,
//                'created_at' => '2013-11-29 19:51:38',
//                'updated_at' => '2013-11-29 19:51:38',
//            ),
//            array(
//                'id' => 10,
//                'title' => 'Israeli New Sheqel',
//                'symbol_left' => '?',
//                'symbol_right' => '',
//                'code' => 'ILS',
//                'decimal_place' => 2,
//                'value' => 3.73559999,
//                'decimal_point' => '.',
//                'thousand_point' => ',',
//                'status' => 1,
//                'created_at' => '2013-11-29 19:51:38',
//                'updated_at' => '2013-11-29 19:51:38',
//            ),
//            array(
//                'id' => 11,
//                'title' => 'Japanese Yen',
//                'symbol_left' => '¥',
//                'symbol_right' => '',
//                'code' => 'JPY',
//                'decimal_place' => 2,
//                'value' => 88.76499939,
//                'decimal_point' => '.',
//                'thousand_point' => ',',
//                'status' => 1,
//                'created_at' => '2013-11-29 19:51:38',
//                'updated_at' => '2013-11-29 19:51:38',
//            ),
//            array(
//                'id' => 12,
//                'title' => 'Mexican Peso',
//                'symbol_left' => '$',
//                'symbol_right' => '',
//                'code' => 'MXN',
//                'decimal_place' => 2,
//                'value' => 12.63899994,
//                'decimal_point' => '.',
//                'thousand_point' => ',',
//                'status' => 1,
//                'created_at' => '2013-11-29 19:51:38',
//                'updated_at' => '2013-11-29 19:51:38',
//            ),
//            array(
//                'id' => 13,
//                'title' => 'Norwegian Krone',
//                'symbol_left' => 'kr',
//                'symbol_right' => '',
//                'code' => 'NOK',
//                'decimal_place' => 2,
//                'value' => 5.52229977,
//                'decimal_point' => '.',
//                'thousand_point' => ',',
//                'status' => 1,
//                'created_at' => '2013-11-29 19:51:38',
//                'updated_at' => '2013-11-29 19:51:38',
//            ),
//            array(
//                'id' => 14,
//                'title' => 'New Zealand Dollar',
//                'symbol_left' => '$',
//                'symbol_right' => '',
//                'code' => 'NZD',
//                'decimal_place' => 2,
//                'value' => 1.18970001,
//                'decimal_point' => '.',
//                'thousand_point' => ',',
//                'status' => 1,
//                'created_at' => '2013-11-29 19:51:38',
//                'updated_at' => '2013-11-29 19:51:38',
//            ),
//            array(
//                'id' => 15,
//                'title' => 'Philippine Peso',
//                'symbol_left' => 'Php',
//                'symbol_right' => '',
//                'code' => 'PHP',
//                'decimal_place' => 2,
//                'value' => 40.58000183,
//                'decimal_point' => '.',
//                'thousand_point' => ',',
//                'status' => 1,
//                'created_at' => '2013-11-29 19:51:38',
//                'updated_at' => '2013-11-29 19:51:38',
//            ),
//            array(
//                'id' => 16,
//                'title' => 'Polish Zloty',
//                'symbol_left' => '',
//                'symbol_right' => 'zł',
//                'code' => 'PLN',
//                'decimal_place' => 2,
//                'value' => 3.08590007,
//                'decimal_point' => '.',
//                'thousand_point' => ',',
//                'status' => 1,
//                'created_at' => '2013-11-29 19:51:38',
//                'updated_at' => '2013-11-29 19:51:38',
//            ),
//            array(
//                'id' => 17,
//                'title' => 'Singapore Dollar',
//                'symbol_left' => '$',
//                'symbol_right' => '',
//                'code' => 'SGD',
//                'decimal_place' => 2,
//                'value' => 1.22560000,
//                'decimal_point' => '.',
//                'thousand_point' => ',',
//                'status' => 1,
//                'created_at' => '2013-11-29 19:51:38',
//                'updated_at' => '2013-11-29 19:51:38',
//            ),
//            array(
//                'id' => 18,
//                'title' => 'Swedish Krona',
//                'symbol_left' => 'kr',
//                'symbol_right' => '',
//                'code' => 'SEK',
//                'decimal_place' => 2,
//                'value' => 6.45870018,
//                'decimal_point' => '.',
//                'thousand_point' => ',',
//                'status' => 1,
//                'created_at' => '2013-11-29 19:51:38',
//                'updated_at' => '2013-11-29 19:51:38',
//            ),
//            array(
//                'id' => 19,
//                'title' => 'Swiss Franc',
//                'symbol_left' => 'CHF',
//                'symbol_right' => '',
//                'code' => 'CHF',
//                'decimal_place' => 2,
//                'value' => 0.92259997,
//                'decimal_point' => '.',
//                'thousand_point' => ',',
//                'status' => 1,
//                'created_at' => '2013-11-29 19:51:38',
//                'updated_at' => '2013-11-29 19:51:38',
//            ),
//            array(
//                'id' => 20,
//                'title' => 'Taiwan New Dollar',
//                'symbol_left' => 'NT$',
//                'symbol_right' => '',
//                'code' => 'TWD',
//                'decimal_place' => 2,
//                'value' => 28.95199966,
//                'decimal_point' => '.',
//                'thousand_point' => ',',
//                'status' => 1,
//                'created_at' => '2013-11-29 19:51:38',
//                'updated_at' => '2013-11-29 19:51:38',
//            ),
//            array(
//                'id' => 21,
//                'title' => 'Thai Baht',
//                'symbol_left' => '฿',
//                'symbol_right' => '',
//                'code' => 'THB',
//                'decimal_place' => 2,
//                'value' => 30.09499931,
//                'decimal_point' => '.',
//                'thousand_point' => ',',
//                'status' => 1,
//                'created_at' => '2013-11-29 19:51:38',
//                'updated_at' => '2013-11-29 19:51:38',
//            )
        );

        DB::table('currencies')->insert($currencies);

        \App\Models\DateTimeFormat::create(array('format' => 'd/M/Y g:i a', 'label' => '10/Mar/2013'));
        \App\Models\DateTimeFormat::create(array('format' => 'd-M-Yk g:i a', 'label' => '10-Mar-2013'));
        \App\Models\DateTimeFormat::create(array('format' => 'd/F/Y g:i a', 'label' => '10/March/2013'));
        \App\Models\DateTimeFormat::create(array('format' => 'd-F-Y g:i a', 'label' => '10-March-2013'));
        \App\Models\DateTimeFormat::create(array('format' => 'M j, Y g:i a', 'label' => 'Mar 10, 2013 6:15 pm'));
        \App\Models\DateTimeFormat::create(array('format' => 'F j, Y g:i a', 'label' => 'March 10, 2013 6:15 pm'));
        \App\Models\DateTimeFormat::create(array('format' => 'D M jS, Y g:ia', 'label' => 'Mon March 10th, 2013 6:15 pm'));

        \App\Models\DateFormat::create(array('format' => 'd/M/Y', 'picker_format' => 'dd/M/yyyy', 'label' => '10/Mar/2013'));
        \App\Models\DateFormat::create(array('format' => 'd-M-Y', 'picker_format' => 'dd-M-yyyy', 'label' => '10-Mar-2013'));
        \App\Models\DateFormat::create(array('format' => 'd/F/Y', 'picker_format' => 'dd/MM/yyyy', 'label' => '10/March/2013'));
        \App\Models\DateFormat::create(array('format' => 'd-F-Y', 'picker_format' => 'dd-MM-yyyy', 'label' => '10-March-2013'));
        \App\Models\DateFormat::create(array('format' => 'M j, Y', 'picker_format' => 'M d, yyyy', 'label' => 'Mar 10, 2013'));
        \App\Models\DateFormat::create(array('format' => 'F j, Y', 'picker_format' => 'MM d, yyyy', 'label' => 'March 10, 2013'));
        \App\Models\DateFormat::create(array('format' => 'D M j, Y', 'picker_format' => 'D MM d, yyyy', 'label' => 'Mon March 10, 2013'));

        /* 	
          d, dd: Numeric date, no leading zero and leading zero, respectively. Eg, 5, 05.
          D, DD: Abbreviated and full weekday names, respectively. Eg, Mon, Monday.
          m, mm: Numeric month, no leading zero and leading zero, respectively. Eg, 7, 07.
          M, MM: Abbreviated and full month names, respectively. Eg, Jan, January
          yy, yyyy: 2- and 4-digit years, respectively. Eg, 12, 2012.)
         */



        $timezones = array(
            'Pacific/Midway' => "(GMT-11:00) Midway Island",
            'US/Samoa' => "(GMT-11:00) Samoa",
            'US/Hawaii' => "(GMT-10:00) Hawaii",
            'US/Alaska' => "(GMT-09:00) Alaska",
            'US/Pacific' => "(GMT-08:00) Pacific Time (US &amp; Canada)",
            'America/Tijuana' => "(GMT-08:00) Tijuana",
            'US/Arizona' => "(GMT-07:00) Arizona",
            'US/Mountain' => "(GMT-07:00) Mountain Time (US &amp; Canada)",
            'America/Chihuahua' => "(GMT-07:00) Chihuahua",
            'America/Mazatlan' => "(GMT-07:00) Mazatlan",
            'America/Mexico_City' => "(GMT-06:00) Mexico City",
            'America/Monterrey' => "(GMT-06:00) Monterrey",
            'Canada/Saskatchewan' => "(GMT-06:00) Saskatchewan",
            'US/Central' => "(GMT-06:00) Central Time (US &amp; Canada)",
            'US/Eastern' => "(GMT-05:00) Eastern Time (US &amp; Canada)",
            'US/East-Indiana' => "(GMT-05:00) Indiana (East)",
            'America/Bogota' => "(GMT-05:00) Bogota",
            'America/Lima' => "(GMT-05:00) Lima",
            'America/Caracas' => "(GMT-04:30) Caracas",
            'Canada/Atlantic' => "(GMT-04:00) Atlantic Time (Canada)",
            'America/La_Paz' => "(GMT-04:00) La Paz",
            'America/Santiago' => "(GMT-04:00) Santiago",
            'Canada/Newfoundland' => "(GMT-03:30) Newfoundland",
            'America/Buenos_Aires' => "(GMT-03:00) Buenos Aires",
            'Greenland' => "(GMT-03:00) Greenland",
            'Atlantic/Stanley' => "(GMT-02:00) Stanley",
            'Atlantic/Azores' => "(GMT-01:00) Azores",
            'Atlantic/Cape_Verde' => "(GMT-01:00) Cape Verde Is.",
            'Africa/Casablanca' => "(GMT) Casablanca",
            'Europe/Dublin' => "(GMT) Dublin",
            'Europe/Lisbon' => "(GMT) Lisbon",
            'Europe/London' => "(GMT) London",
            'Africa/Monrovia' => "(GMT) Monrovia",
            'Europe/Amsterdam' => "(GMT+01:00) Amsterdam",
            'Europe/Belgrade' => "(GMT+01:00) Belgrade",
            'Europe/Berlin' => "(GMT+01:00) Berlin",
            'Europe/Bratislava' => "(GMT+01:00) Bratislava",
            'Europe/Brussels' => "(GMT+01:00) Brussels",
            'Europe/Budapest' => "(GMT+01:00) Budapest",
            'Europe/Copenhagen' => "(GMT+01:00) Copenhagen",
            'Europe/Ljubljana' => "(GMT+01:00) Ljubljana",
            'Europe/Madrid' => "(GMT+01:00) Madrid",
            'Europe/Paris' => "(GMT+01:00) Paris",
            'Europe/Prague' => "(GMT+01:00) Prague",
            'Europe/Rome' => "(GMT+01:00) Rome",
            'Europe/Sarajevo' => "(GMT+01:00) Sarajevo",
            'Europe/Skopje' => "(GMT+01:00) Skopje",
            'Europe/Stockholm' => "(GMT+01:00) Stockholm",
            'Europe/Vienna' => "(GMT+01:00) Vienna",
            'Europe/Warsaw' => "(GMT+01:00) Warsaw",
            'Europe/Zagreb' => "(GMT+01:00) Zagreb",
            'Europe/Athens' => "(GMT+02:00) Athens",
            'Europe/Bucharest' => "(GMT+02:00) Bucharest",
            'Africa/Cairo' => "(GMT+02:00) Cairo",
            'Africa/Harare' => "(GMT+02:00) Harare",
            'Europe/Helsinki' => "(GMT+02:00) Helsinki",
            'Europe/Istanbul' => "(GMT+02:00) Istanbul",
            'Asia/Jerusalem' => "(GMT+02:00) Jerusalem",
            'Europe/Kiev' => "(GMT+02:00) Kyiv",
            'Europe/Minsk' => "(GMT+02:00) Minsk",
            'Europe/Riga' => "(GMT+02:00) Riga",
            'Europe/Sofia' => "(GMT+02:00) Sofia",
            'Europe/Tallinn' => "(GMT+02:00) Tallinn",
            'Europe/Vilnius' => "(GMT+02:00) Vilnius",
            'Asia/Baghdad' => "(GMT+03:00) Baghdad",
            'Asia/Kuwait' => "(GMT+03:00) Kuwait",
            'Africa/Nairobi' => "(GMT+03:00) Nairobi",
            'Asia/Riyadh' => "(GMT+03:00) Riyadh",
            'Asia/Tehran' => "(GMT+03:30) Tehran",
            'Europe/Moscow' => "(GMT+04:00) Moscow",
            'Asia/Baku' => "(GMT+04:00) Baku",
            'Europe/Volgograd' => "(GMT+04:00) Volgograd",
            'Asia/Muscat' => "(GMT+04:00) Muscat",
            'Asia/Tbilisi' => "(GMT+04:00) Tbilisi",
            'Asia/Yerevan' => "(GMT+04:00) Yerevan",
            'Asia/Kabul' => "(GMT+04:30) Kabul",
            'Asia/Karachi' => "(GMT+05:00) Karachi",
            'Asia/Tashkent' => "(GMT+05:00) Tashkent",
            'Asia/Kolkata' => "(GMT+05:30) Kolkata",
            'Asia/Kathmandu' => "(GMT+05:45) Kathmandu",
            'Asia/Yekaterinburg' => "(GMT+06:00) Ekaterinburg",
            'Asia/Almaty' => "(GMT+06:00) Almaty",
            'Asia/Dhaka' => "(GMT+06:00) Dhaka",
            'Asia/Novosibirsk' => "(GMT+07:00) Novosibirsk",
            'Asia/Bangkok' => "(GMT+07:00) Bangkok",
            'Asia/Jakarta' => "(GMT+07:00) Jakarta",
            'Asia/Krasnoyarsk' => "(GMT+08:00) Krasnoyarsk",
            'Asia/Chongqing' => "(GMT+08:00) Chongqing",
            'Asia/Hong_Kong' => "(GMT+08:00) Hong Kong",
            'Asia/Kuala_Lumpur' => "(GMT+08:00) Kuala Lumpur",
            'Australia/Perth' => "(GMT+08:00) Perth",
            'Asia/Singapore' => "(GMT+08:00) Singapore",
            'Asia/Taipei' => "(GMT+08:00) Taipei",
            'Asia/Ulaanbaatar' => "(GMT+08:00) Ulaan Bataar",
            'Asia/Urumqi' => "(GMT+08:00) Urumqi",
            'Asia/Irkutsk' => "(GMT+09:00) Irkutsk",
            'Asia/Seoul' => "(GMT+09:00) Seoul",
            'Asia/Tokyo' => "(GMT+09:00) Tokyo",
            'Australia/Adelaide' => "(GMT+09:30) Adelaide",
            'Australia/Darwin' => "(GMT+09:30) Darwin",
            'Asia/Yakutsk' => "(GMT+10:00) Yakutsk",
            'Australia/Brisbane' => "(GMT+10:00) Brisbane",
            'Australia/Canberra' => "(GMT+10:00) Canberra",
            'Pacific/Guam' => "(GMT+10:00) Guam",
            'Australia/Hobart' => "(GMT+10:00) Hobart",
            'Australia/Melbourne' => "(GMT+10:00) Melbourne",
            'Pacific/Port_Moresby' => "(GMT+10:00) Port Moresby",
            'Australia/Sydney' => "(GMT+10:00) Sydney",
            'Asia/Vladivostok' => "(GMT+11:00) Vladivostok",
            'Asia/Magadan' => "(GMT+12:00) Magadan",
            'Pacific/Auckland' => "(GMT+12:00) Auckland",
            'Pacific/Fiji' => "(GMT+12:00) Fiji",
        );

        foreach ($timezones as $name => $location) {
            \App\Models\Timezone::create(array('name' => $name, 'location' => $location));
        }
    }

}