



$response = new Services_Twilio_Twiml;

$body = $_REQUEST['Body'];



if( $body == 'hello' ){

    $response->message('Hi!');

}else if( $body == 'bye' ){

    $response->message('Goodbye');

}

print $response;



