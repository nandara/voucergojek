<?php
class frdy
{
    const ApiUrl = 'https://goid.gojekapi.com';
    const Api2Url = 'https://api.gojekapi.com';
    const appId = 'com.gojek.app';
    const phoneModel = 'Xiaomi, Redmi Note 8';
    const phoneMake = 'Xiaomi';
    const osDevice = 'Android,8';
    const xPlatform = 'Android';
    const appVersion = '3.51';
    const clientId = 'gojek:consumer:app';
    const clientSecret = 'pGwQ7oi8bKqqwvid09UrjqpkMEHklb';
    const userAgent = 'okhttp/3.12.1';

    private $authToken;
    private $pin;
    private $sessionId;
    private $uniqueId;
    
    public function __construct($token = false)
    {
    	$karakter = '123456789abcdefghijklmnopqrstuvwxyz';
        $karakter2 = '123456789abcdefghijklmnopqrstuvwxyz';
        $this->sessionId = '78EB815C-6AE5-4969-A6B1-$shuffle  = substr(str_shuffle($karakter), 0, 12)'; // generated from self::uuidv4();
        $this->uniqueId = $shuffle  = substr(str_shuffle($karakter2), 0, 16); // generated from self::uuidv4();
        
        if ($token) {
            $this->authToken = $token;
        }
    }
    
    public function uuidv4()
    {
        $data    = random_bytes(16);
        $data[6] = chr(ord($data[6]) & 0x0f | 0x40);
        $data[8] = chr(ord($data[8]) & 0x3f | 0x80);
        return strtoupper(vsprintf('%s%s-%s-%s-%s-%s%s%s', str_split(bin2hex($data), 4)));
    }
    
    public function getAuthToken($otpToken, $otpCode)
    {
        $payload = array(
            'data' => array(
                'otp_token' => $otpToken,
                'otp' => $otpCode
            ) ,
            'client_id' => self::clientId,
            'grant_type' => 'otp',
            'client_secret' => self::clientSecret
        );

        return self::Request(self::ApiUrl . '/goid/token', $payload, self::buildHeaders());
    }

    public function loginRequest($phoneNumber)
    {
        $payload = array(
            'client_id' => self::clientId,
            'client_secret' => self::clientSecret,
            'country_code' => '+62',
            'phone_number' => $phoneNumber
        );

        return self::Request(self::ApiUrl . '/goid/login/request', $payload, self::buildHeaders());
    }

    public function claimPromo()
    {
        
        return self::Request(self::Api2Url . '/go-promotions/v1/promotions/enrollments', false, self::buildHeaders());
    }

    protected function buildHeaders()
    {
        $headers = array(
            'x-appid: ' . self::appId,
            'x-phonemodel: ' . self::phoneModel,
            'user-agent: ' . self::userAgent,
            'x-session-id: ' . $this->sessionId,
            'x-phonemake: ' . self::phoneMake,
            'x-uniqueid: ' . $this->uniqueId,
            'x-deviceos: ' . self::osDevice,
            'x-platform: ' . self::xPlatform,
            'x-appversion: ' . self::appVersion,
            'accept: */*',
            'content-type: application/json',
            'x-user-type: customer'
        );

        if (!empty($this->authToken)) {
            array_push($headers, 'Authorization: Bearer ' . $this->authToken);
        }
        if (!empty($this->pin)) {
            array_push($headers, 'pin: ' . $this->pin);
        }
        return $headers;
    }

    protected function Request($url, $post = false, $headers = false)
    {
        $ch = curl_init();

        curl_setopt_array($ch, array(
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true
        ));

        if ($post) {
            curl_setopt($ch, CURLOPT_POST, true);
            curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($post));
        }

        if ($headers) {
            curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        }

        $result = curl_exec($ch);
        curl_close($ch);
        return $result;
    }

    public function getResponse($response, $key)
    {
        $json = json_decode($response, true);
        return $json['data'][$key];
    }
function color($color = "default" , $text)
    {
        $arrayColor = array(
            'grey'      => '1;30',
            'red'       => '1;31',
            'green'     => '1;32',
            'yellow'    => '1;33',
            'blue'      => '1;34',
            'purple'    => '1;35',
            'nevy'      => '1;36',
            'white'     => '1;0',
        );  
        return "\033[".$arrayColor[$color]."m".$text."\033[0m";
    }
}
function request($url, $token = null, $data = null, $pin = null, $otpsetpin = null, $uuid = null){

$header[] = "Host: api.gojekapi.com";
$header[] = "User-Agent: okhttp/3.10.0";
$header[] = "Accept: application/json";
$header[] = "Accept-Language: id-ID";
$header[] = "Content-Type: application/json; charset=UTF-8";
$header[] = "X-AppVersion: 3.30.2";
$header[] = "X-UniqueId: ".time()."57".mt_rand(1000,9999);
$header[] = "Connection: keep-alive";
$header[] = "X-User-Locale: id_ID";
$header[] = "X-Location: -6.905".mt_rand(100,999).",107.39".mt_rand(1000,9999);
$header[] = "X-Location-Accuracy: 3.0";
if ($pin):
$header[] = "pin: $pin";
    endif;
if ($token):
$header[] = "Authorization: Bearer $token";
endif;
if ($otpsetpin):
$header[] = "otp: $otpsetpin";
endif;
if ($uuid):
$header[] = "User-uuid: $uuid";
endif;
$c = curl_init("https://api.gojekapi.com".$url);
    curl_setopt($c, CURLOPT_FOLLOWLOCATION, true);
    curl_setopt($c, CURLOPT_SSL_VERIFYPEER, false);
    if ($data):
    curl_setopt($c, CURLOPT_POSTFIELDS, $data);
    curl_setopt($c, CURLOPT_POST, true);
    endif;
    curl_setopt($c, CURLOPT_SSL_VERIFYHOST, 0);
    curl_setopt($c, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($c, CURLOPT_HEADER, true);
    curl_setopt($c, CURLOPT_HTTPHEADER, $header);
    $response = curl_exec($c);
    $httpcode = curl_getinfo($c);
    if (!$httpcode)
        return false;
    else {
        $header = substr($response, 0, curl_getinfo($c, CURLINFO_HEADER_SIZE));
        $body   = substr($response, curl_getinfo($c, CURLINFO_HEADER_SIZE));
    }
    $json = json_decode($body, true);
    return $body;
}
function save($filename, $content)
{
    $save = fopen($filename, "a");
    fputs($save, "$content\r\n");
    fclose($save);
}
function nama()
    {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "http://ninjaname.horseridersupply.com/dutch_name.php");
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    $ex = curl_exec($ch);
    // $rand = json_decode($rnd_get, true);
    preg_match_all('~(&bull; (.*?)<br/>&bull; )~', $ex, $name);
    return $name[2][mt_rand(0, 14) ];
    }
function getStr($a,$b,$c){
	$a = @explode($a,$c)[1];
	return @explode($b,$a)[0];
}
function getStr1($a,$b,$c,$d){
        $a = @explode($a,$c)[$d];
        return @explode($b,$a)[0];
}
function color($color = "default" , $text)
    {
        $arrayColor = array(
            'grey'      => '1;30',
            'red'       => '1;31',
            'green'     => '1;32',
            'yellow'    => '1;33',
            'blue'      => '1;34',
            'purple'    => '1;35',
            'nevy'      => '1;36',
            'white'     => '1;0',
        );  
        return "\033[".$arrayColor[$color]."m".$text."\033[0m";
    }
function fetch_value($str,$find_start,$find_end) {
	$start = @strpos($str,$find_start);
	if ($start === false) {
		return "";
	}
	$length = strlen($find_start);
	$end    = strpos(substr($str,$start +$length),$find_end);
	return trim(substr($str,$start +$length,$end));
}
function requestedd($url, $token = null, $data = null, $pin = null, $otpsetpin = null, $uuid = null){
$header[] = "Host: api.gojekapi.com";
$header[] = "User-Agent: okhttp/3.10.0";
$header[] = "Accept: application/json";
$header[] = "Accept-Language: id-ID";
$header[] = "Content-Type: application/json; charset=UTF-8";
$header[] = "X-AppVersion: 3.55.0";
$header[] = "X-UniqueId: ".time()."57".mt_rand(1000,9999);
$header[] = "Connection: keep-alive";
$header[] = "X-User-Locale: id_ID";
$header[] = "X-Location: -6.902".mt_rand(100,999).",107.34".mt_rand(1000,9999);
$header[] = "X-Location-Accuracy: 3.0";
if ($pin):
$header[] = "pin: $pin";
    endif;
if ($token):
$header[] = "Authorization: Bearer $token";
endif;
if ($otpsetpin):
$header[] = "otp: $otpsetpin";
endif;
if ($uuid):
$header[] = "User-uuid: $uuid";
endif;
$c = curl_init("https://api.gojekapi.com".$url);
    curl_setopt($c, CURLOPT_FOLLOWLOCATION, true);
    curl_setopt($c, CURLOPT_SSL_VERIFYPEER, false);
    if ($data):
    curl_setopt($c, CURLOPT_POSTFIELDS, $data);
    curl_setopt($c, CURLOPT_POST, true);
    endif;
    curl_setopt($c, CURLOPT_SSL_VERIFYHOST, 0);
    curl_setopt($c, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($c, CURLOPT_HEADER, true);
    curl_setopt($c, CURLOPT_HTTPHEADER, $header);
    $response = curl_exec($c);
    $httpcode = curl_getinfo($c);
    if (!$httpcode)
        return false;
    else {
        $header = substr($response, 0, curl_getinfo($c, CURLINFO_HEADER_SIZE));
        $body   = substr($response, curl_getinfo($c, CURLINFO_HEADER_SIZE));
    }
    $json = json_decode($body, true);
    return $body;
}
function savedd($filename, $content)
{
    $savedd = fopen($filename, "a");
    fputs($saved, "$content\r\n");
    fclose($saved);
}
function getStr01($a,$b,$c){
	$a = @explode($a,$c)[1];
	return @explode($b,$a)[0];
}
function getStr23($a,$b,$c,$d){
        $a = @explode($a,$c)[$d];
        return @explode($b,$a)[0];
}

function colorss($colors = "default" , $text)
    {
        $arrayColor = array(
            'grey'      => '1;30',
            'red'       => '1;31',
            'green'     => '1;32',
            'yellow'    => '1;33',
            'blue'      => '1;34',
            'purple'    => '1;35',
            'nevy'      => '1;36',
            'white'     => '1;0',
        );  
        return "\033[".$arrayColor[$colors]."m".$text."\033[0m";
    }
function fetch_value12($str,$find_start,$find_end) {
	$start = @strpos($str,$find_start);
	if ($start === false) {
		return "";
	}
	$length = strlen($find_start);
	$end    = strpos(substr($str,$start +$length),$find_end);
	return trim(substr($str,$start +$length,$end));
}

function requested($url, $token = null, $data = null, $pin = null, $otpsetpin = null, $uuid = null){
$header[] = "Host: api.gojekapi.com";
$header[] = "User-Agent: okhttp/3.10.0";
$header[] = "Accept: application/json";
$header[] = "Accept-Language: id-ID";
$header[] = "Content-Type: application/json; charset=UTF-8";
$header[] = "X-AppVersion: 3.55.0";
$header[] = "X-UniqueId: ".time()."57".mt_rand(1000,9999);
$header[] = "Connection: keep-alive";
$header[] = "X-User-Locale: id_ID";
$header[] = "X-Location: -6.904".mt_rand(100,999).",107.43".mt_rand(1000,9999);
$header[] = "X-Location-Accuracy: 3.0";
if ($pin):
$header[] = "pin: $pin";
    endif;
if ($token):
$header[] = "Authorization: Bearer $token";
endif;
if ($otpsetpin):
$header[] = "otp: $otpsetpin";
endif;
if ($uuid):
$header[] = "User-uuid: $uuid";
endif;
$c = curl_init("https://api.gojekapi.com".$url);
    curl_setopt($c, CURLOPT_FOLLOWLOCATION, true);
    curl_setopt($c, CURLOPT_SSL_VERIFYPEER, false);
    if ($data):
    curl_setopt($c, CURLOPT_POSTFIELDS, $data);
    curl_setopt($c, CURLOPT_POST, true);
    endif;
    curl_setopt($c, CURLOPT_SSL_VERIFYHOST, 0);
    curl_setopt($c, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($c, CURLOPT_HEADER, true);
    curl_setopt($c, CURLOPT_HTTPHEADER, $header);
    $response = curl_exec($c);
    $httpcode = curl_getinfo($c);
    if (!$httpcode)
        return false;
    else {
        $header = substr($response, 0, curl_getinfo($c, CURLINFO_HEADER_SIZE));
        $body   = substr($response, curl_getinfo($c, CURLINFO_HEADER_SIZE));
    }
    $json = json_decode($body, true);
    return $body;
}
function saved($filename, $content)
{
    $saved = fopen($filename, "a");
    fputs($saved, "$content\r\n");
    fclose($saved);
}
function namaq()
    {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "http://ninjaname.horseridersupply.com/indonesian_name.php");
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    $ex = curl_exec($ch);
    // $rand = json_decode($rnd_get, true);
    preg_match_all('~(&bull; (.*?)<br/>&bull; )~', $ex, $name);
    return $name[2][mt_rand(0, 14) ];
    }
function getStr0($a,$b,$c){
	$a = @explode($a,$c)[1];
	return @explode($b,$a)[0];
}
function getStr2($a,$b,$c,$d){
        $a = @explode($a,$c)[$d];
        return @explode($b,$a)[0];
}

function colors($colors = "default" , $text)
    {
        $arrayColor = array(
            'grey'      => '1;30',
            'red'       => '1;31',
            'green'     => '1;32',
            'yellow'    => '1;33',
            'blue'      => '1;34',
            'purple'    => '1;35',
            'nevy'      => '1;36',
            'white'     => '1;0',
        );  
        return "\033[".$arrayColor[$colors]."m".$text."\033[0m";
    }
function fetch_value1($str,$find_start,$find_end) {
	$start = @strpos($str,$find_start);
	if ($start === false) {
		return "";
	}
	$length = strlen($find_start);
	$end    = strpos(substr($str,$start +$length),$find_end);
	return trim(substr($str,$start +$length,$end));
}
function requestreff($url, $token = null, $data = null, $pin = null, $otpsetpin = null, $uuid = null){

$header[] = "Host: api.gojekapi.com";
$header[] = "User-Agent: okhttp/3.12.1";
$header[] = "Accept: application/json";
$header[] = "Accept-Language: id-ID";
$header[] = "Content-Type: application/json; charset=UTF-8";
$header[] = "X-AppVersion: 3.50.1";
$header[] = "X-UniqueId: ".time()."57".mt_rand(1000,9999);
$header[] = "Connection: keep-alive";
$header[] = "X-User-Locale: id_ID";
$header[] = "X-Location: -6.909".mt_rand(100,999).",107.46".mt_rand(1000,9999);
$header[] = "X-Location-Accuracy: 3.0";
if ($pin):
$header[] = "pin: $pin";
    endif;
if ($token):
$header[] = "Authorization: Bearer $token";
endif;
if ($otpsetpin):
$header[] = "otp: $otpsetpin";
endif;
if ($uuid):
$header[] = "User-uuid: $uuid";
endif;
$c = curl_init("https://api.gojekapi.com".$url);
    curl_setopt($c, CURLOPT_FOLLOWLOCATION, true);
    curl_setopt($c, CURLOPT_SSL_VERIFYPEER, false);
    if ($data):
    curl_setopt($c, CURLOPT_POSTFIELDS, $data);
    curl_setopt($c, CURLOPT_POST, true);
    endif;
    curl_setopt($c, CURLOPT_SSL_VERIFYHOST, 0);
    curl_setopt($c, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($c, CURLOPT_HEADER, true);
    curl_setopt($c, CURLOPT_HTTPHEADER, $header);
    $response = curl_exec($c);
    $httpcode = curl_getinfo($c);
    if (!$httpcode)
        return false;
    else {
        $header = substr($response, 0, curl_getinfo($c, CURLINFO_HEADER_SIZE));
        $body   = substr($response, curl_getinfo($c, CURLINFO_HEADER_SIZE));
    }
    $json = json_decode($body, true);
    return $body;
}
function savereff($filename, $content)
{
    $save = fopen($filename, "a");
    fputs($save, "$content\r\n");
    fclose($save);
}
function namareff()
    {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "http://ninjaname.horseridersupply.com/indonesian_name.php");
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    $ex = curl_exec($ch);
    // $rand = json_decode($rnd_get, true);
    preg_match_all('~(&bull; (.*?)<br/>&bull; )~', $ex, $name);
    return $name[2][mt_rand(0, 14) ];
    }
function getStr8($a,$b,$c){
	$a = @explode($a,$c)[1];
	return @explode($b,$a)[0];
}
function getStr9($a,$b,$c,$d){
        $a = @explode($a,$c)[$d];
        return @explode($b,$a)[0];
}
function colorreff($color = "default" , $text)
    {
        $arrayColor = array(
            'grey'      => '1;30',
            'red'       => '1;31',
            'green'     => '1;32',
            'yellow'    => '1;33',
            'blue'      => '1;34',
            'purple'    => '1;35',
            'nevy'      => '1;36',
            'white'     => '1;0',
        );  
        return "\033[".$arrayColor[$color]."m".$text."\033[0m";
    }
function fetch_value5($str,$find_start,$find_end) {
	$start = @strpos($str,$find_start);
	if ($start === false) {
		return "";
	}
	$length = strlen($find_start);
	$end    = strpos(substr($str,$start +$length),$find_end);
	return trim(substr($str,$start +$length,$end));
}
?>
