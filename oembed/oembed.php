<?php

$url = 'https://twitter.com/dhrrgn/status/440968615697715200';

$embedly = new Embedly\Embedly([
	'key' => getenv('EMBEDLY_KEY'),
]);

if (preg_match('#https?://(?:www.)?twitter.com/[^/]+/status/([0-9]+)#i', $url, $match)) {
    $oembed = json_decode(file_get_contents('https://api.twitter.com/1/statuses/oembed.json?id='.$match[1]), true);
} else {
    $oembed = (array) $embedly->oembed($url);
}

// Do something with $oembed
