<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CarModelsSeeder extends Seeder
{
    public function run()
    {
        $brands = DB::table('car_brands')->pluck('id', 'name');

        $models = [
            // Toyota
            [
                'brand_id' => $brands['Toyota'],
                'name' => 'Camry',
                'generation' => 'XV70 (2017-2023)',
                'year' => 2017
            ],
            [
                'brand_id' => $brands['Toyota'],
                'name' => 'Camry',
                'generation' => 'XV50 (2011-2017)',
                'year' => 2011
            ],
            [
                'brand_id' => $brands['Toyota'],
                'name' => 'Camry',
                'generation' => 'XV40 (2006-2011)',
                'year' => 2006
            ],
            [
                'brand_id' => $brands['Toyota'],
                'name' => 'RAV4',
                'generation' => 'XA50 (2018-2023)',
                'year' => 2018
            ],
            [
                'brand_id' => $brands['Toyota'],
                'name' => 'RAV4',
                'generation' => 'XA40 (2012-2018)',
                'year' => 2012
            ],
            [
                'brand_id' => $brands['Toyota'],
                'name' => 'RAV4',
                'generation' => 'XA30 (2005-2012)',
                'year' => 2005
            ],

            // Honda
            [
                'brand_id' => $brands['Honda'],
                'name' => 'Civic',
                'generation' => '11th gen (2021-)',
                'year' => 2021
            ],
            [
                'brand_id' => $brands['Honda'],
                'name' => 'Civic',
                'generation' => '10th gen (2015-2021)',
                'year' => 2015
            ],
            [
                'brand_id' => $brands['Honda'],
                'name' => 'Civic',
                'generation' => '9th gen (2011-2015)',
                'year' => 2011
            ],
            [
                'brand_id' => $brands['Honda'],
                'name' => 'CR-V',
                'generation' => '5th gen (2016-2022)',
                'year' => 2016
            ],
            [
                'brand_id' => $brands['Honda'],
                'name' => 'CR-V',
                'generation' => '4th gen (2011-2016)',
                'year' => 2011
            ],
            [
                'brand_id' => $brands['Honda'],
                'name' => 'CR-V',
                'generation' => '3rd gen (2006-2011)',
                'year' => 2006
            ],

            // Ford
            [
                'brand_id' => $brands['Ford'],
                'name' => 'Focus',
                'generation' => '4th gen (2018-)',
                'year' => 2018
            ],
            [
                'brand_id' => $brands['Ford'],
                'name' => 'Focus',
                'generation' => '3rd gen (2011-2018)',
                'year' => 2011
            ],
            [
                'brand_id' => $brands['Ford'],
                'name' => 'Focus',
                'generation' => '2nd gen (2004-2011)',
                'year' => 2004
            ],
            [
                'brand_id' => $brands['Ford'],
                'name' => 'Fiesta',
                'generation' => '7th gen (2017-)',
                'year' => 2017
            ],
            [
                'brand_id' => $brands['Ford'],
                'name' => 'Fiesta',
                'generation' => '6th gen (2008-2017)',
                'year' => 2008
            ],
            [
                'brand_id' => $brands['Ford'],
                'name' => 'Fiesta',
                'generation' => '5th gen (2002-2008)',
                'year' => 2002
            ],

            // Chevrolet
            [
                'brand_id' => $brands['Chevrolet'],
                'name' => 'Cruze',
                'generation' => '2nd gen (2016-2019)',
                'year' => 2016
            ],
            [
                'brand_id' => $brands['Chevrolet'],
                'name' => 'Cruze',
                'generation' => '1st gen (2008-2016)',
                'year' => 2008
            ],
            [
                'brand_id' => $brands['Chevrolet'],
                'name' => 'Malibu',
                'generation' => '9th gen (2016-2021)',
                'year' => 2016
            ],
            [
                'brand_id' => $brands['Chevrolet'],
                'name' => 'Malibu',
                'generation' => '8th gen (2012-2016)',
                'year' => 2012
            ],
            [
                'brand_id' => $brands['Chevrolet'],
                'name' => 'Malibu',
                'generation' => '7th gen (2008-2012)',
                'year' => 2008
            ],

            // Volkswagen
            [
                'brand_id' => $brands['Volkswagen'],
                'name' => 'Golf',
                'generation' => 'Mk8 (2019-)',
                'year' => 2019
            ],
            [
                'brand_id' => $brands['Volkswagen'],
                'name' => 'Golf',
                'generation' => 'Mk7 (2012-2019)',
                'year' => 2012
            ],
            [
                'brand_id' => $brands['Volkswagen'],
                'name' => 'Golf',
                'generation' => 'Mk6 (2008-2012)',
                'year' => 2008
            ],
            [
                'brand_id' => $brands['Volkswagen'],
                'name' => 'Passat',
                'generation' => 'B8 (2014-2023)',
                'year' => 2014
            ],
            [
                'brand_id' => $brands['Volkswagen'],
                'name' => 'Passat',
                'generation' => 'B7 (2010-2014)',
                'year' => 2010
            ],
            [
                'brand_id' => $brands['Volkswagen'],
                'name' => 'Passat',
                'generation' => 'B6 (2005-2010)',
                'year' => 2005
            ],

            // BMW
            [
                'brand_id' => $brands['BMW'],
                'name' => '3 Series',
                'generation' => 'G20 (2018-)',
                'year' => 2018
            ],
            [
                'brand_id' => $brands['BMW'],
                'name' => '3 Series',
                'generation' => 'F30 (2011-2018)',
                'year' => 2011
            ],
            [
                'brand_id' => $brands['BMW'],
                'name' => '3 Series',
                'generation' => 'E90 (2005-2011)',
                'year' => 2005
            ],
            [
                'brand_id' => $brands['BMW'],
                'name' => '5 Series',
                'generation' => 'G30 (2016-)',
                'year' => 2016
            ],
            [
                'brand_id' => $brands['BMW'],
                'name' => '5 Series',
                'generation' => 'F10 (2010-2016)',
                'year' => 2010
            ],
            [
                'brand_id' => $brands['BMW'],
                'name' => '5 Series',
                'generation' => 'E60 (2003-2010)',
                'year' => 2003
            ],

            // Mercedes-Benz
            [
                'brand_id' => $brands['Mercedes-Benz'],
                'name' => 'C-Class',
                'generation' => 'W206 (2021-)',
                'year' => 2021
            ],
            [
                'brand_id' => $brands['Mercedes-Benz'],
                'name' => 'C-Class',
                'generation' => 'W205 (2014-2021)',
                'year' => 2014
            ],
            [
                'brand_id' => $brands['Mercedes-Benz'],
                'name' => 'C-Class',
                'generation' => 'W204 (2007-2014)',
                'year' => 2007
            ],
            [
                'brand_id' => $brands['Mercedes-Benz'],
                'name' => 'E-Class',
                'generation' => 'W213 (2016-)',
                'year' => 2016
            ],
            [
                'brand_id' => $brands['Mercedes-Benz'],
                'name' => 'E-Class',
                'generation' => 'W212 (2009-2016)',
                'year' => 2009
            ],
            [
                'brand_id' => $brands['Mercedes-Benz'],
                'name' => 'E-Class',
                'generation' => 'W211 (2002-2009)',
                'year' => 2002
            ],

            // Audi
            [
                'brand_id' => $brands['Audi'],
                'name' => 'A4',
                'generation' => 'B9 (2015-2023)',
                'year' => 2015
            ],
            [
                'brand_id' => $brands['Audi'],
                'name' => 'A4',
                'generation' => 'B8 (2008-2015)',
                'year' => 2008
            ],
            [
                'brand_id' => $brands['Audi'],
                'name' => 'A4',
                'generation' => 'B7 (2004-2008)',
                'year' => 2004
            ],
            [
                'brand_id' => $brands['Audi'],
                'name' => 'Q5',
                'generation' => '2nd gen (2017-)',
                'year' => 2017
            ],
            [
                'brand_id' => $brands['Audi'],
                'name' => 'Q5',
                'generation' => '1st gen (2008-2017)',
                'year' => 2008
            ],

            // Nissan
            [
                'brand_id' => $brands['Nissan'],
                'name' => 'Qashqai',
                'generation' => '3rd gen (2021-)',
                'year' => 2021
            ],
            [
                'brand_id' => $brands['Nissan'],
                'name' => 'Qashqai',
                'generation' => '2nd gen (2013-2021)',
                'year' => 2013
            ],
            [
                'brand_id' => $brands['Nissan'],
                'name' => 'Qashqai',
                'generation' => '1st gen (2006-2013)',
                'year' => 2006
            ],
            [
                'brand_id' => $brands['Nissan'],
                'name' => 'X-Trail',
                'generation' => '4th gen (2022-)',
                'year' => 2022
            ],
            [
                'brand_id' => $brands['Nissan'],
                'name' => 'X-Trail',
                'generation' => '3rd gen (2013-2022)',
                'year' => 2013
            ],
            [
                'brand_id' => $brands['Nissan'],
                'name' => 'X-Trail',
                'generation' => '2nd gen (2007-2013)',
                'year' => 2007
            ],

            // Hyundai
            [
                'brand_id' => $brands['Hyundai'],
                'name' => 'Tucson',
                'generation' => '4th gen (2020-)',
                'year' => 2020
            ],
            [
                'brand_id' => $brands['Hyundai'],
                'name' => 'Tucson',
                'generation' => '3rd gen (2015-2020)',
                'year' => 2015
            ],
            [
                'brand_id' => $brands['Hyundai'],
                'name' => 'Tucson',
                'generation' => '2nd gen (2009-2015)',
                'year' => 2009
            ],
            [
                'brand_id' => $brands['Hyundai'],
                'name' => 'Santa Fe',
                'generation' => '4th gen (2018-)',
                'year' => 2018
            ],
            [
                'brand_id' => $brands['Hyundai'],
                'name' => 'Santa Fe',
                'generation' => '3rd gen (2012-2018)',
                'year' => 2012
            ],
            [
                'brand_id' => $brands['Hyundai'],
                'name' => 'Santa Fe',
                'generation' => '2nd gen (2006-2012)',
                'year' => 2006
            ],

            // Kia
            [
                'brand_id' => $brands['Kia'],
                'name' => 'Sportage',
                'generation' => '5th gen (2021-)',
                'year' => 2021
            ],
            [
                'brand_id' => $brands['Kia'],
                'name' => 'Sportage',
                'generation' => '4th gen (2015-2021)',
                'year' => 2015
            ],
            [
                'brand_id' => $brands['Kia'],
                'name' => 'Sportage',
                'generation' => '3rd gen (2010-2015)',
                'year' => 2010
            ],
            [
                'brand_id' => $brands['Kia'],
                'name' => 'Sorento',
                'generation' => '4th gen (2020-)',
                'year' => 2020
            ],
            [
                'brand_id' => $brands['Kia'],
                'name' => 'Sorento',
                'generation' => '3rd gen (2014-2020)',
                'year' => 2014
            ],
            [
                'brand_id' => $brands['Kia'],
                'name' => 'Sorento',
                'generation' => '2nd gen (2009-2014)',
                'year' => 2009
            ],

            // Volvo
            [
                'brand_id' => $brands['Volvo'],
                'name' => 'XC60',
                'generation' => '2nd gen (2017-)',
                'year' => 2017
            ],
            [
                'brand_id' => $brands['Volvo'],
                'name' => 'XC60',
                'generation' => '1st gen (2008-2017)',
                'year' => 2008
            ],
            [
                'brand_id' => $brands['Volvo'],
                'name' => 'XC90',
                'generation' => '2nd gen (2015-)',
                'year' => 2015
            ],
            [
                'brand_id' => $brands['Volvo'],
                'name' => 'XC90',
                'generation' => '1st gen (2002-2015)',
                'year' => 2002
            ],

            // Subaru
            [
                'brand_id' => $brands['Subaru'],
                'name' => 'Forester',
                'generation' => '5th gen (2018-)',
                'year' => 2018
            ],
            [
                'brand_id' => $brands['Subaru'],
                'name' => 'Forester',
                'generation' => '4th gen (2012-2018)',
                'year' => 2012
            ],
            [
                'brand_id' => $brands['Subaru'],
                'name' => 'Forester',
                'generation' => '3rd gen (2008-2012)',
                'year' => 2008
            ],
            [
                'brand_id' => $brands['Subaru'],
                'name' => 'Outback',
                'generation' => '6th gen (2019-)',
                'year' => 2019
            ],
            [
                'brand_id' => $brands['Subaru'],
                'name' => 'Outback',
                'generation' => '5th gen (2014-2019)',
                'year' => 2014
            ],
            [
                'brand_id' => $brands['Subaru'],
                'name' => 'Outback',
                'generation' => '4th gen (2009-2014)',
                'year' => 2009
            ],

            // Mazda
            [
                'brand_id' => $brands['Mazda'],
                'name' => 'CX-5',
                'generation' => '2nd gen (2017-)',
                'year' => 2017
            ],
            [
                'brand_id' => $brands['Mazda'],
                'name' => 'CX-5',
                'generation' => '1st gen (2012-2017)',
                'year' => 2012
            ],
            [
                'brand_id' => $brands['Mazda'],
                'name' => '6',
                'generation' => '4th gen (2012-2021)',
                'year' => 2012
            ],
            [
                'brand_id' => $brands['Mazda'],
                'name' => '6',
                'generation' => '3rd gen (2007-2012)',
                'year' => 2007
            ],
            [
                'brand_id' => $brands['Mazda'],
                'name' => '6',
                'generation' => '2nd gen (2002-2007)',
                'year' => 2002
            ],

            // Lexus
            [
                'brand_id' => $brands['Lexus'],
                'name' => 'RX',
                'generation' => '4th gen (2015-)',
                'year' => 2015
            ],
            [
                'brand_id' => $brands['Lexus'],
                'name' => 'RX',
                'generation' => '3rd gen (2009-2015)',
                'year' => 2009
            ],
            [
                'brand_id' => $brands['Lexus'],
                'name' => 'RX',
                'generation' => '2nd gen (2003-2009)',
                'year' => 2003
            ],
            [
                'brand_id' => $brands['Lexus'],
                'name' => 'NX',
                'generation' => '2nd gen (2021-)',
                'year' => 2021
            ],
            [
                'brand_id' => $brands['Lexus'],
                'name' => 'NX',
                'generation' => '1st gen (2014-2021)',
                'year' => 2014
            ],

            // Jeep
            [
                'brand_id' => $brands['Jeep'],
                'name' => 'Grand Cherokee',
                'generation' => '5th gen (2021-)',
                'year' => 2021
            ],
            [
                'brand_id' => $brands['Jeep'],
                'name' => 'Grand Cherokee',
                'generation' => '4th gen (2010-2021)',
                'year' => 2010
            ],
            [
                'brand_id' => $brands['Jeep'],
                'name' => 'Grand Cherokee',
                'generation' => '3rd gen (2005-2010)',
                'year' => 2005
            ],
            [
                'brand_id' => $brands['Jeep'],
                'name' => 'Wrangler',
                'generation' => 'JL (2017-)',
                'year' => 2017
            ],
            [
                'brand_id' => $brands['Jeep'],
                'name' => 'Wrangler',
                'generation' => 'JK (2006-2017)',
                'year' => 2006
            ],
            [
                'brand_id' => $brands['Jeep'],
                'name' => 'Wrangler',
                'generation' => 'TJ (1996-2006)',
                'year' => 1996
            ],

            // Tesla
            [
                'brand_id' => $brands['Tesla'],
                'name' => 'Model 3',
                'generation' => '2nd gen (2020-)',
                'year' => 2020
            ],
            [
                'brand_id' => $brands['Tesla'],
                'name' => 'Model 3',
                'generation' => '1st gen (2017-2020)',
                'year' => 2017
            ],
            [
                'brand_id' => $brands['Tesla'],
                'name' => 'Model S',
                'generation' => '2nd gen (2021-)',
                'year' => 2021
            ],
            [
                'brand_id' => $brands['Tesla'],
                'name' => 'Model S',
                'generation' => '1st gen (2012-2021)',
                'year' => 2012
            ],

            // Porsche
            [
                'brand_id' => $brands['Porsche'],
                'name' => '911',
                'generation' => '992 (2019-)',
                'year' => 2019
            ],
            [
                'brand_id' => $brands['Porsche'],
                'name' => '911',
                'generation' => '991 (2011-2019)',
                'year' => 2011
            ],
            [
                'brand_id' => $brands['Porsche'],
                'name' => '911',
                'generation' => '997 (2004-2011)',
                'year' => 2004
            ],
            [
                'brand_id' => $brands['Porsche'],
                'name' => 'Cayenne',
                'generation' => '3rd gen (2018-)',
                'year' => 2018
            ],
            [
                'brand_id' => $brands['Porsche'],
                'name' => 'Cayenne',
                'generation' => '2nd gen (2010-2018)',
                'year' => 2010
            ],
            [
                'brand_id' => $brands['Porsche'],
                'name' => 'Cayenne',
                'generation' => '1st gen (2002-2010)',
                'year' => 2002
            ],

            // Ferrari
            [
                'brand_id' => $brands['Ferrari'],
                'name' => '488',
                'generation' => 'GTB (2015-2019)',
                'year' => 2015
            ],
            [
                'brand_id' => $brands['Ferrari'],
                'name' => 'F8',
                'generation' => 'Tributo (2019-)',
                'year' => 2019
            ],
            [
                'brand_id' => $brands['Ferrari'],
                'name' => 'Roma',
                'generation' => '1st gen (2020-)',
                'year' => 2020
            ],

            // Lamborghini
            [
                'brand_id' => $brands['Lamborghini'],
                'name' => 'Huracan',
                'generation' => 'Evo (2019-)',
                'year' => 2019
            ],
            [
                'brand_id' => $brands['Lamborghini'],
                'name' => 'Huracan',
                'generation' => '1st gen (2014-2019)',
                'year' => 2014
            ],
            [
                'brand_id' => $brands['Lamborghini'],
                'name' => 'Aventador',
                'generation' => 'S (2017-2022)',
                'year' => 2017
            ],
            [
                'brand_id' => $brands['Lamborghini'],
                'name' => 'Aventador',
                'generation' => '1st gen (2011-2017)',
                'year' => 2011
            ],

            // Land Rover
            [
                'brand_id' => $brands['Land Rover'],
                'name' => 'Range Rover',
                'generation' => '5th gen (2022-)',
                'year' => 2022
            ],
            [
                'brand_id' => $brands['Land Rover'],
                'name' => 'Range Rover',
                'generation' => '4th gen (2012-2022)',
                'year' => 2012
            ],
            [
                'brand_id' => $brands['Land Rover'],
                'name' => 'Range Rover',
                'generation' => '3rd gen (2002-2012)',
                'year' => 2002
            ],
            [
                'brand_id' => $brands['Land Rover'],
                'name' => 'Discovery',
                'generation' => '5th gen (2017-)',
                'year' => 2017
            ],
            [
                'brand_id' => $brands['Land Rover'],
                'name' => 'Discovery',
                'generation' => '4th gen (2009-2017)',
                'year' => 2009
            ],
            [
                'brand_id' => $brands['Land Rover'],
                'name' => 'Discovery',
                'generation' => '3rd gen (2004-2009)',
                'year' => 2004
            ],

            // Jaguar
            [
                'brand_id' => $brands['Jaguar'],
                'name' => 'XF',
                'generation' => '2nd gen (2015-)',
                'year' => 2015
            ],
            [
                'brand_id' => $brands['Jaguar'],
                'name' => 'XF',
                'generation' => '1st gen (2007-2015)',
                'year' => 2007
            ],
            [
                'brand_id' => $brands['Jaguar'],
                'name' => 'F-Pace',
                'generation' => '1st gen (2016-)',
                'year' => 2016
            ],

            // Mitsubishi
            [
                'brand_id' => $brands['Mitsubishi'],
                'name' => 'Outlander',
                'generation' => '4th gen (2021-)',
                'year' => 2021
            ],
            [
                'brand_id' => $brands['Mitsubishi'],
                'name' => 'Outlander',
                'generation' => '3rd gen (2012-2021)',
                'year' => 2012
            ],
            [
                'brand_id' => $brands['Mitsubishi'],
                'name' => 'Outlander',
                'generation' => '2nd gen (2005-2012)',
                'year' => 2005
            ],
            [
                'brand_id' => $brands['Mitsubishi'],
                'name' => 'Lancer',
                'generation' => '10th gen (2007-2017)',
                'year' => 2007
            ],
            [
                'brand_id' => $brands['Mitsubishi'],
                'name' => 'Lancer',
                'generation' => '9th gen (2003-2007)',
                'year' => 2003
            ],
            [
                'brand_id' => $brands['Mitsubishi'],
                'name' => 'Lancer',
                'generation' => '8th gen (2000-2003)',
                'year' => 2000
            ],

            // Peugeot
            [
                'brand_id' => $brands['Peugeot'],
                'name' => '308',
                'generation' => '3rd gen (2021-)',
                'year' => 2021
            ],
            [
                'brand_id' => $brands['Peugeot'],
                'name' => '308',
                'generation' => '2nd gen (2013-2021)',
                'year' => 2013
            ],
            [
                'brand_id' => $brands['Peugeot'],
                'name' => '308',
                'generation' => '1st gen (2007-2013)',
                'year' => 2007
            ],
            [
                'brand_id' => $brands['Peugeot'],
                'name' => '3008',
                'generation' => '2nd gen (2016-)',
                'year' => 2016
            ],
            [
                'brand_id' => $brands['Peugeot'],
                'name' => '3008',
                'generation' => '1st gen (2008-2016)',
                'year' => 2008
            ],

            // Renault
            [
                'brand_id' => $brands['Renault'],
                'name' => 'Megane',
                'generation' => '4th gen (2022-)',
                'year' => 2022
            ],
            [
                'brand_id' => $brands['Renault'],
                'name' => 'Megane',
                'generation' => '3rd gen (2016-2022)',
                'year' => 2016
            ],
            [
                'brand_id' => $brands['Renault'],
                'name' => 'Megane',
                'generation' => '2nd gen (2008-2016)',
                'year' => 2008
            ],
            [
                'brand_id' => $brands['Renault'],
                'name' => 'Kadjar',
                'generation' => '1st gen (2015-2021)',
                'year' => 2015
            ],

            // Citroen
            [
                'brand_id' => $brands['Citroen'],
                'name' => 'C4',
                'generation' => '3rd gen (2020-)',
                'year' => 2020
            ],
            [
                'brand_id' => $brands['Citroen'],
                'name' => 'C4',
                'generation' => '2nd gen (2010-2018)',
                'year' => 2010
            ],
            [
                'brand_id' => $brands['Citroen'],
                'name' => 'C4',
                'generation' => '1st gen (2004-2010)',
                'year' => 2004
            ],
            [
                'brand_id' => $brands['Citroen'],
                'name' => 'C5 Aircross',
                'generation' => '1st gen (2017-)',
                'year' => 2017
            ],

            // Fiat
            [
                'brand_id' => $brands['Fiat'],
                'name' => '500',
                'generation' => '3rd gen (2020-)',
                'year' => 2020
            ],
            [
                'brand_id' => $brands['Fiat'],
                'name' => '500',
                'generation' => '2nd gen (2007-2020)',
                'year' => 2007
            ],
            [
                'brand_id' => $brands['Fiat'],
                'name' => 'Panda',
                'generation' => '3rd gen (2011-)',
                'year' => 2011
            ],
            [
                'brand_id' => $brands['Fiat'],
                'name' => 'Panda',
                'generation' => '2nd gen (2003-2011)',
                'year' => 2003
            ],

            // Alfa Romeo
            [
                'brand_id' => $brands['Alfa Romeo'],
                'name' => 'Giulia',
                'generation' => '1st gen (2015-)',
                'year' => 2015
            ],
            [
                'brand_id' => $brands['Alfa Romeo'],
                'name' => 'Stelvio',
                'generation' => '1st gen (2016-)',
                'year' => 2016
            ],

            // Skoda
            [
                'brand_id' => $brands['Skoda'],
                'name' => 'Octavia',
                'generation' => '4th gen (2020-)',
                'year' => 2020
            ],
            [
                'brand_id' => $brands['Skoda'],
                'name' => 'Octavia',
                'generation' => '3rd gen (2013-2020)',
                'year' => 2013
            ],
            [
                'brand_id' => $brands['Skoda'],
                'name' => 'Octavia',
                'generation' => '2nd gen (2004-2013)',
                'year' => 2004
            ],
            [
                'brand_id' => $brands['Skoda'],
                'name' => 'Kodiaq',
                'generation' => '1st gen (2016-)',
                'year' => 2016
            ],

            // Seat
            [
                'brand_id' => $brands['Seat'],
                'name' => 'Leon',
                'generation' => '4th gen (2020-)',
                'year' => 2020
            ],
            [
                'brand_id' => $brands['Seat'],
                'name' => 'Leon',
                'generation' => '3rd gen (2012-2020)',
                'year' => 2012
            ],
            [
                'brand_id' => $brands['Seat'],
                'name' => 'Leon',
                'generation' => '2nd gen (2005-2012)',
                'year' => 2005
            ],
            [
                'brand_id' => $brands['Seat'],
                'name' => 'Ateca',
                'generation' => '1st gen (2016-)',
                'year' => 2016
            ]
        ];

        DB::table('car_models')->insert($models);
    }
}
