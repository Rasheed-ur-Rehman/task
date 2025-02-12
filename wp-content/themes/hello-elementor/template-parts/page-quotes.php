<?php
/*
Template Name: Kanye Quotes
*/
get_header();


echo "This is rasheed Ur Rehman";

$quotes = [];
for ($i = 0; $i < 5; $i++) {
    $response = wp_remote_get('https://api.kanye.rest/');
    if (!is_wp_error($response)) {
        $body = wp_remote_retrieve_body($response);
        $data = json_decode($body, true);
        $quotes[] = $data['quote'];
    }
}

if (!empty($quotes)) {
    echo '<ul>';
    foreach ($quotes as $quote) {
        echo '<li>' . esc_html($quote) . '</li>';
    }
    echo '</ul>';
} else {
    echo '<p>Failed to fetch quotes.</p>';
}

get_footer();

echo '<pre>';
print_r($response);
echo '</pre>';
exit;