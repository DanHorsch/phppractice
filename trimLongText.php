<?php

$charLimit = 12;
$longText = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer leo sem, ullamcorper et enim et, lobortis pulvinar tellus. Donec eros ante, consequat et imperdiet eu, dapibus a ex. Nam quis finibus arcu. In hac habitasse platea dictumst. Donec at feugiat arcu. In vitae aliquet enim, non auctor magna. In hac habitasse platea dictumst. Duis dignissim quam eu mauris volutpat feugiat. Praesent vel diam suscipit, lobortis velit quis, egestas erat. Duis eleifend felis eu massa fermentum, quis consequat nunc pulvinar. Integer condimentum augue in risus sodales iaculis.";
$longText .= " ";
$longText = substr($longText, 0, strrpos(substr($longText, 0, $charLimit), " "));
$longText .= "...";

echo "The string below was cut to $charLimit characters <br>" . $longText;
