<?php

declare(strict_types=1);

$highpoints = [
    'denali-ak' => 'Denali, Alaska',
    'mount-whitney-ca' => 'Mount Whitney, California',
    'mount-elbert-co' => 'Mount Elbert, Colorado',
    'mauna-kea-hi' => 'Mauna Kea, Hawaii',
    'mount-rainier-wa' => 'Mount Rainier, Washington',
    'gannett-peak-wy' => 'Gannett Peak, Wyoming',
    'mount-hood-or' => 'Mount Hood, Oregon',
    'borah-peak-id' => 'Borah Peak, Idaho',
    'granite-peak-mt' => 'Granite Peak, Montana',
    'wheeler-peak-nm' => 'Wheeler Peak, New Mexico',
    'boundary-peak-nv' => 'Boundary Peak, Nevada',
    'kings-peak-ut' => 'Kings Peak, Utah',
    'humphreys-peak-az' => 'Humphreys Peak, Arizona',
    'guadalupe-peak-tx' => 'Guadalupe Peak, Texas',
    'black-elk-peak-sd' => 'Black Elk Peak, South Dakota',
    'white-butte-nd' => 'White Butte, North Dakota',
    'panorama-point-ne' => 'Panorama Point, Nebraska',
    'mount-sunflower-ks' => 'Mount Sunflower, Kansas',
    'black-mesa-ok' => 'Black Mesa, Oklahoma',
    'mount-magazine-ar' => 'Mount Magazine, Arkansas',
    'clingmans-dome-tn' => 'Clingmans Dome, Tennessee',
    'mount-mitchell-nc' => 'Mount Mitchell, North Carolina',
    'mount-rogers-va' => 'Mount Rogers, Virginia',
    'spruce-knob-wv' => 'Spruce Knob, West Virginia',
    'mount-davis-pa' => 'Mount Davis, Pennsylvania',
    'mount-marcy-ny' => 'Mount Marcy, New York',
    'mount-mansfield-vt' => 'Mount Mansfield, Vermont',
    'mount-washington-nh' => 'Mount Washington, New Hampshire',
    'katahdin-me' => 'Katahdin, Maine',
    'mount-greylock-ma' => 'Mount Greylock, Massachusetts',
    'mount-frissell-ct' => 'Mount Frissell, Connecticut',
    'jerimoth-hill-ri' => 'Jerimoth Hill, Rhode Island',
    'high-point-nj' => 'High Point, New Jersey',
    'ebright-azimuth-de' => 'Ebright Azimuth, Delaware',
    'backbone-mountain-md' => 'Backbone Mountain, Maryland',
    'mount-arvon-mi' => 'Mount Arvon, Michigan',
    'eagle-mountain-mn' => 'Eagle Mountain, Minnesota',
    'timms-hill-wi' => 'Timms Hill, Wisconsin',
    'charles-mound-il' => 'Charles Mound, Illinois',
    'taum-sauk-mountain-mo' => 'Taum Sauk Mountain, Missouri',
    'hoosier-hill-in' => 'Hoosier Hill, Indiana',
    'campbell-hill-oh' => 'Campbell Hill, Ohio',
    'black-mountain-ky' => 'Black Mountain, Kentucky',
    'cheaha-mountain-al' => 'Cheaha Mountain, Alabama',
    'woodall-mountain-ms' => 'Woodall Mountain, Mississippi',
    'driskill-mountain-la' => 'Driskill Mountain, Louisiana',
    'magazine-mountain-ga' => 'Magazine Mountain, Georgia',
    'britton-hill-fl' => 'Britton Hill, Florida',
    'mount-rogers-sc' => 'Mount Rogers, South Carolina',
];

$imageDir = __DIR__ . '/../public/images/highpoints';
if (!file_exists($imageDir)) {
    mkdir($imageDir, 0755, true);
}

$unsplashAccessKey = '0R1wdRhZp3FGW3MnvWBFJdqsNGQMl2igV4jke4281Dw';

function makeRequest($url, $headers = []) {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    $response = curl_exec($ch);
    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);
    return ['body' => $response, 'status' => $httpCode];
}

foreach ($highpoints as $slug => $name) {
    $imagePath = "images/highpoints/{$slug}.jpg";
    $fullPath = __DIR__ . '/../public/' . $imagePath;
    
    if (file_exists($fullPath)) {
        echo "Image already exists for {$name}\n";
        continue;
    }

    // Search for the highpoint on Unsplash
    $searchUrl = 'https://api.unsplash.com/search/photos?' . http_build_query([
        'query' => $name,
        'orientation' => 'landscape',
        'per_page' => 1
    ]);

    $response = makeRequest($searchUrl, [
        "Authorization: Client-ID {$unsplashAccessKey}"
    ]);

    if ($response['status'] === 200) {
        $data = json_decode($response['body'], true);
        if (!empty($data['results'])) {
            $photo = $data['results'][0];
            $imageUrl = $photo['urls']['regular'];
            
            // Download the image
            $imageResponse = makeRequest($imageUrl);
            if ($imageResponse['status'] === 200) {
                file_put_contents($fullPath, $imageResponse['body']);
                echo "Downloaded image for {$name}\n";
            } else {
                echo "Failed to download image for {$name}\n";
            }
        } else {
            echo "No image found for {$name}\n";
        }
    } else {
        echo "Failed to search for {$name}\n";
    }

    // Sleep to respect Unsplash API rate limits
    sleep(1);
}

echo "Image download complete!\n"; 