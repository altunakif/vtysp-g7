<?php 
/**
 * 
 */
include_once("config.php");
class gRecaptcha
{
	public $result;

	function __construct($gRecaptchaResponse)
	{
		$fields = [
			'secret' 	=> G_RECAPTCHASECRET,
			'response' 	=> $gRecaptchaResponse
		];
		$ch = curl_init();
		curl_setopt_array($ch, [
			CURLOPT_URL => "https://www.google.com/recaptcha/api/siteverify",
			CURLOPT_POST => true,
			CURLOPT_POSTFIELDS => http_build_query($fields),
			CURLOPT_RETURNTRANSFER => true 
		]);
		$result = curl_exec($ch);
		curl_close($ch);
		$result = json_decode($result, true);
		$this->result = $result;
	}
}
?>