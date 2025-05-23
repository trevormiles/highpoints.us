<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Models\Highpoint;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

final class HighpointSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create the specific highpoints with their exact data
        $highpoints = [
            [
                'name' => 'Denali',
                'slug' => 'denali',
                'state' => 'AK',
                'elevation' => 20310,
                'difficulty' => 'extreme',
                'image_path' => 'images/highpoints/denali-ak.jpg',
                'image_alt' => 'Denali (Mount McKinley), Alaska - The highest mountain peak in North America',
            ],
            [
                'name' => 'Mount Whitney',
                'slug' => 'mount-whitney',
                'state' => 'CA',
                'elevation' => 14494,
                'difficulty' => 'challenging',
                'image_path' => 'images/highpoints/mount-whitney-ca.jpg',
                'image_alt' => 'Mount Whitney, California - The highest summit in the contiguous United States',
            ],
            [
                'name' => 'Mount Elbert',
                'slug' => 'mount-elbert',
                'state' => 'CO',
                'elevation' => 14433,
                'difficulty' => 'challenging',
                'image_path' => 'images/highpoints/mount-elbert-co.jpg',
                'image_alt' => 'Mount Elbert, Colorado - The highest summit of the Rocky Mountains',
            ],
            [
                'name' => 'Mauna Kea',
                'slug' => 'mauna-kea',
                'state' => 'HI',
                'elevation' => 13803,
                'difficulty' => 'moderate',
                'image_path' => 'images/highpoints/mauna-kea-hi.jpg',
                'image_alt' => 'Mauna Kea, Hawaii - The highest point in Hawaii',
            ],
            [
                'name' => 'Mount Rainier',
                'slug' => 'mount-rainier',
                'state' => 'WA',
                'elevation' => 14411,
                'difficulty' => 'difficult',
                'image_path' => 'images/highpoints/mount-rainier-wa.jpg',
                'image_alt' => 'Mount Rainier, Washington - The most prominent mountain in the Cascade Range',
            ],
            [
                'name' => 'Gannett Peak',
                'slug' => 'gannett-peak',
                'state' => 'WY',
                'elevation' => 13804,
                'difficulty' => 'difficult',
                'image_path' => 'images/highpoints/gannett-peak-wy.jpg',
                'image_alt' => 'Gannett Peak, Wyoming - The highest point in the Wind River Range',
            ],
            [
                'name' => 'Mount Hood',
                'slug' => 'mount-hood',
                'state' => 'OR',
                'elevation' => 11239,
                'difficulty' => 'challenging',
                'image_path' => 'images/highpoints/mount-hood-or.jpg',
                'image_alt' => 'Mount Hood, Oregon - The highest point in Oregon',
            ],
            [
                'name' => 'Borah Peak',
                'slug' => 'borah-peak',
                'state' => 'ID',
                'elevation' => 12662,
                'difficulty' => 'challenging',
                'image_path' => 'images/highpoints/borah-peak-id.jpg',
                'image_alt' => 'Borah Peak, Idaho - The highest point in Idaho',
            ],
            [
                'name' => 'Granite Peak',
                'slug' => 'granite-peak',
                'state' => 'MT',
                'elevation' => 12799,
                'difficulty' => 'difficult',
                'image_path' => 'images/highpoints/granite-peak-mt.jpg',
                'image_alt' => 'Granite Peak, Montana - The highest point in Montana',
            ],
            [
                'name' => 'Wheeler Peak',
                'slug' => 'wheeler-peak',
                'state' => 'NM',
                'elevation' => 13161,
                'difficulty' => 'moderate',
                'image_path' => 'images/highpoints/wheeler-peak-nm.jpg',
                'image_alt' => 'Wheeler Peak, New Mexico - The highest point in New Mexico',
            ],
            [
                'name' => 'Boundary Peak',
                'slug' => 'boundary-peak',
                'state' => 'NV',
                'elevation' => 13140,
                'difficulty' => 'challenging',
                'image_path' => 'images/highpoints/boundary-peak-nv.jpg',
                'image_alt' => 'Boundary Peak, Nevada - The highest point in Nevada',
            ],
            [
                'name' => 'Kings Peak',
                'slug' => 'kings-peak',
                'state' => 'UT',
                'elevation' => 13528,
                'difficulty' => 'challenging',
                'image_path' => 'images/highpoints/kings-peak-ut.jpg',
                'image_alt' => 'Kings Peak, Utah - The highest point in Utah',
            ],
            [
                'name' => 'Humphreys Peak',
                'slug' => 'humphreys-peak',
                'state' => 'AZ',
                'elevation' => 12633,
                'difficulty' => 'moderate',
                'image_path' => 'images/highpoints/humphreys-peak-az.jpg',
                'image_alt' => 'Humphreys Peak, Arizona - The highest point in Arizona',
            ],
            [
                'name' => 'Guadalupe Peak',
                'slug' => 'guadalupe-peak',
                'state' => 'TX',
                'elevation' => 8749,
                'difficulty' => 'moderate',
                'image_path' => 'images/highpoints/guadalupe-peak-tx.jpg',
                'image_alt' => 'Guadalupe Peak, Texas - The highest point in Texas',
            ],
            [
                'name' => 'Black Elk Peak',
                'slug' => 'black-elk-peak',
                'state' => 'SD',
                'elevation' => 7242,
                'difficulty' => 'easy',
                'image_path' => 'images/highpoints/black-elk-peak-sd.jpg',
                'image_alt' => 'Black Elk Peak, South Dakota - The highest point in South Dakota',
            ],
            [
                'name' => 'White Butte',
                'slug' => 'white-butte',
                'state' => 'ND',
                'elevation' => 3506,
                'difficulty' => 'easy',
                'image_path' => 'images/highpoints/white-butte-nd.jpg',
                'image_alt' => 'White Butte, North Dakota - The highest point in North Dakota',
            ],
            [
                'name' => 'Panorama Point',
                'slug' => 'panorama-point',
                'state' => 'NE',
                'elevation' => 5424,
                'difficulty' => 'easy',
                'image_path' => 'images/highpoints/panorama-point-ne.jpg',
                'image_alt' => 'Panorama Point, Nebraska - The highest point in Nebraska',
            ],
            [
                'name' => 'Mount Sunflower',
                'slug' => 'mount-sunflower',
                'state' => 'KS',
                'elevation' => 4039,
                'difficulty' => 'easy',
                'image_path' => 'images/highpoints/mount-sunflower-ks.jpg',
                'image_alt' => 'Mount Sunflower, Kansas - The highest point in Kansas',
            ],
            [
                'name' => 'Black Mesa',
                'slug' => 'black-mesa',
                'state' => 'OK',
                'elevation' => 4973,
                'difficulty' => 'easy',
                'image_path' => 'images/highpoints/black-mesa-ok.jpg',
                'image_alt' => 'Black Mesa, Oklahoma - The highest point in Oklahoma',
            ],
            [
                'name' => 'Mount Magazine',
                'slug' => 'mount-magazine',
                'state' => 'AR',
                'elevation' => 2753,
                'difficulty' => 'easy',
                'image_path' => 'images/highpoints/mount-magazine-ar.jpg',
                'image_alt' => 'Mount Magazine, Arkansas - The highest point in Arkansas',
            ],
            [
                'name' => 'Clingmans Dome',
                'slug' => 'clingmans-dome',
                'state' => 'TN',
                'elevation' => 6643,
                'difficulty' => 'easy',
                'image_path' => 'images/highpoints/clingmans-dome-tn.jpg',
                'image_alt' => 'Clingmans Dome, Tennessee - The highest point in Tennessee',
            ],
            [
                'name' => 'Mount Mitchell',
                'slug' => 'mount-mitchell',
                'state' => 'NC',
                'elevation' => 6684,
                'difficulty' => 'easy',
                'image_path' => 'images/highpoints/mount-mitchell-nc.jpg',
                'image_alt' => 'Mount Mitchell, North Carolina - The highest point in North Carolina',
            ],
            [
                'name' => 'Mount Rogers',
                'slug' => 'mount-rogers',
                'state' => 'VA',
                'elevation' => 5729,
                'difficulty' => 'moderate',
                'image_path' => 'images/highpoints/mount-rogers-va.jpg',
                'image_alt' => 'Mount Rogers, Virginia - The highest point in Virginia',
            ],
            [
                'name' => 'Spruce Knob',
                'slug' => 'spruce-knob',
                'state' => 'WV',
                'elevation' => 4861,
                'difficulty' => 'easy',
                'image_path' => 'images/highpoints/spruce-knob-wv.jpg',
                'image_alt' => 'Spruce Knob, West Virginia - The highest point in West Virginia',
            ],
            [
                'name' => 'Mount Davis',
                'slug' => 'mount-davis',
                'state' => 'PA',
                'elevation' => 3213,
                'difficulty' => 'easy',
                'image_path' => 'images/highpoints/mount-davis-pa.jpg',
                'image_alt' => 'Mount Davis, Pennsylvania - The highest point in Pennsylvania',
            ],
            [
                'name' => 'Mount Marcy',
                'slug' => 'mount-marcy',
                'state' => 'NY',
                'elevation' => 5344,
                'difficulty' => 'moderate',
                'image_path' => 'images/highpoints/mount-marcy-ny.jpg',
                'image_alt' => 'Mount Marcy, New York - The highest point in New York',
            ],
            [
                'name' => 'Mount Mansfield',
                'slug' => 'mount-mansfield',
                'state' => 'VT',
                'elevation' => 4393,
                'difficulty' => 'moderate',
                'image_path' => 'images/highpoints/mount-mansfield-vt.jpg',
                'image_alt' => 'Mount Mansfield, Vermont - The highest point in Vermont',
            ],
            [
                'name' => 'Mount Washington',
                'slug' => 'mount-washington',
                'state' => 'NH',
                'elevation' => 6288,
                'difficulty' => 'challenging',
                'image_path' => 'images/highpoints/mount-washington-nh.jpg',
                'image_alt' => 'Mount Washington, New Hampshire - The highest point in New Hampshire',
            ],
            [
                'name' => 'Katahdin',
                'slug' => 'katahdin',
                'state' => 'ME',
                'elevation' => 5268,
                'difficulty' => 'challenging',
                'image_path' => 'images/highpoints/katahdin-me.jpg',
                'image_alt' => 'Katahdin, Maine - The highest point in Maine',
            ],
            [
                'name' => 'Mount Greylock',
                'slug' => 'mount-greylock',
                'state' => 'MA',
                'elevation' => 3489,
                'difficulty' => 'easy',
                'image_path' => 'images/highpoints/mount-greylock-ma.jpg',
                'image_alt' => 'Mount Greylock, Massachusetts - The highest point in Massachusetts',
            ],
            [
                'name' => 'Mount Frissell-South Slope',
                'slug' => 'mount-frissell-south-slope',
                'state' => 'CT',
                'elevation' => 2380,
                'difficulty' => 'moderate',
                'image_path' => 'images/highpoints/mount-frissell-ct.jpg',
                'image_alt' => 'Mount Frissell, Connecticut - The highest point in Connecticut',
            ],
            [
                'name' => 'Jerimoth Hill',
                'slug' => 'jerimoth-hill',
                'state' => 'RI',
                'elevation' => 812,
                'difficulty' => 'easy',
                'image_path' => 'images/highpoints/jerimoth-hill-ri.jpg',
                'image_alt' => 'Jerimoth Hill, Rhode Island - The highest point in Rhode Island',
            ],
            [
                'name' => 'High Point',
                'slug' => 'high-point',
                'state' => 'NJ',
                'elevation' => 1803,
                'difficulty' => 'easy',
                'image_path' => 'images/highpoints/high-point-nj.jpg',
                'image_alt' => 'High Point, New Jersey - The highest point in New Jersey',
            ],
            [
                'name' => 'Ebright Azimuth',
                'slug' => 'ebright-azimuth',
                'state' => 'DE',
                'elevation' => 448,
                'difficulty' => 'easy',
                'image_path' => 'images/highpoints/ebright-azimuth-de.jpg',
                'image_alt' => 'Ebright Azimuth, Delaware - The highest point in Delaware',
            ],
            [
                'name' => 'Backbone Mountain',
                'slug' => 'backbone-mountain',
                'state' => 'MD',
                'elevation' => 3360,
                'difficulty' => 'easy',
                'image_path' => 'images/highpoints/backbone-mountain-md.jpg',
                'image_alt' => 'Backbone Mountain, Maryland - The highest point in Maryland',
            ],
            [
                'name' => 'Mount Arvon',
                'slug' => 'mount-arvon',
                'state' => 'MI',
                'elevation' => 1979,
                'difficulty' => 'easy',
                'image_path' => 'images/highpoints/mount-arvon-mi.jpg',
                'image_alt' => 'Mount Arvon, Michigan - The highest point in Michigan',
            ],
            [
                'name' => 'Eagle Mountain',
                'slug' => 'eagle-mountain',
                'state' => 'MN',
                'elevation' => 2301,
                'difficulty' => 'easy',
                'image_path' => 'images/highpoints/eagle-mountain-mn.jpg',
                'image_alt' => 'Eagle Mountain, Minnesota - The highest point in Minnesota',
            ],
            [
                'name' => 'Timms Hill',
                'slug' => 'timms-hill',
                'state' => 'WI',
                'elevation' => 1951,
                'difficulty' => 'easy',
                'image_path' => 'images/highpoints/timms-hill-wi.jpg',
                'image_alt' => 'Timms Hill, Wisconsin - The highest point in Wisconsin',
            ],
            [
                'name' => 'Charles Mound',
                'slug' => 'charles-mound',
                'state' => 'IL',
                'elevation' => 1235,
                'difficulty' => 'easy',
                'image_path' => 'images/highpoints/charles-mound-il.jpg',
                'image_alt' => 'Charles Mound, Illinois - The highest point in Illinois',
            ],
            [
                'name' => 'Taum Sauk Mountain',
                'slug' => 'taum-sauk-mountain',
                'state' => 'MO',
                'elevation' => 1772,
                'difficulty' => 'easy',
                'image_path' => 'images/highpoints/taum-sauk-mountain-mo.jpg',
                'image_alt' => 'Taum Sauk Mountain, Missouri - The highest point in Missouri',
            ],
            [
                'name' => 'Hoosier Hill',
                'slug' => 'hoosier-hill',
                'state' => 'IN',
                'elevation' => 1257,
                'difficulty' => 'easy',
                'image_path' => 'images/highpoints/hoosier-hill-in.jpg',
                'image_alt' => 'Hoosier Hill, Indiana - The highest point in Indiana',
            ],
            [
                'name' => 'Campbell Hill',
                'slug' => 'campbell-hill',
                'state' => 'OH',
                'elevation' => 1550,
                'difficulty' => 'easy',
                'image_path' => 'images/highpoints/campbell-hill-oh.jpg',
                'image_alt' => 'Campbell Hill, Ohio - The highest point in Ohio',
            ],
            [
                'name' => 'Black Mountain',
                'slug' => 'black-mountain',
                'state' => 'KY',
                'elevation' => 4145,
                'difficulty' => 'moderate',
                'image_path' => 'images/highpoints/black-mountain-ky.jpg',
                'image_alt' => 'Black Mountain, Kentucky - The highest point in Kentucky',
            ],
            [
                'name' => 'Cheaha Mountain',
                'slug' => 'cheaha-mountain',
                'state' => 'AL',
                'elevation' => 2407,
                'difficulty' => 'easy',
                'image_path' => 'images/highpoints/cheaha-mountain-al.jpg',
                'image_alt' => 'Cheaha Mountain, Alabama - The highest point in Alabama',
            ],
            [
                'name' => 'Woodall Mountain',
                'slug' => 'woodall-mountain',
                'state' => 'MS',
                'elevation' => 806,
                'difficulty' => 'easy',
                'image_path' => 'images/highpoints/woodall-mountain-ms.jpg',
                'image_alt' => 'Woodall Mountain, Mississippi - The highest point in Mississippi',
            ],
            [
                'name' => 'Driskill Mountain',
                'slug' => 'driskill-mountain',
                'state' => 'LA',
                'elevation' => 535,
                'difficulty' => 'easy',
                'image_path' => 'images/highpoints/driskill-mountain-la.jpg',
                'image_alt' => 'Driskill Mountain, Louisiana - The highest point in Louisiana',
            ],
            [
                'name' => 'Magazine Mountain',
                'slug' => 'magazine-mountain',
                'state' => 'GA',
                'elevation' => 4784,
                'difficulty' => 'easy',
                'image_path' => 'images/highpoints/magazine-mountain-ga.jpg',
                'image_alt' => 'Magazine Mountain, Georgia - The highest point in Georgia',
            ],
            [
                'name' => 'Britton Hill',
                'slug' => 'britton-hill',
                'state' => 'FL',
                'elevation' => 345,
                'difficulty' => 'easy',
                'image_path' => 'images/highpoints/britton-hill-fl.jpg',
                'image_alt' => 'Britton Hill, Florida - The highest point in Florida',
            ],
            [
                'name' => 'Mount Rogers',
                'slug' => 'mount-rogers-sc',
                'state' => 'SC',
                'elevation' => 3560,
                'difficulty' => 'easy',
                'image_path' => 'images/highpoints/mount-rogers-sc.jpg',
                'image_alt' => 'Mount Rogers, South Carolina - The highest point in South Carolina',
            ],
            [
                'name' => 'Hawkeye Point',
                'slug' => 'hawkeye-point-ia',
                'state' => 'IA',
                'elevation' => 1670,
                'difficulty' => 'easy',
                'image_path' => 'images/highpoints/hawkeye-point-ia.jpg',
                'image_alt' => 'Hawkeye Point, Iowa - The highest point in Iowa',
            ],
        ];

        // Create each highpoint with its specific data
        foreach ($highpoints as $highpoint) {
            Highpoint::factory()->create($highpoint);
        }
    }
}
