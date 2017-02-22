<?php
$data = json_decode(file_get_contents('php://input'), true);
$human = $data['human'];
$first = $data['first'];

if(strcmp($first, '1') === 0) {
     $response = array("eliza" => "Eliza: Please tell me how you are feeling.");
}
else {
    $input = phrase($human);

    $response = array("eliza" => "You: " . $human . "<br>Eliza: " . $input);
}
$json = json_encode($response);

echo $json;

function phrase($human) {
    $human = preg_replace('/\s+/', '', $human);
    $phrase = "Sorry, I didn't catch that.";

    $list = array("Why do you feel that way?", "What makes you feel that way?", "Hmmmm I see, please go on.", "Interesting, can you elaborate?");

    if(strcmp($human, '') !== 0) {
        $phrase = $list[array_rand($list)];
    }

    return $phrase;
}
?>
