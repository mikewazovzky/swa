<?php
namespace App;

class Mailer 
{
	protected $driver;
	protected $host;
	protected $port;
	protected $from;
	protected $encryption;
	protected $username;
	protected $password; 
	protected $admin;
	
	public function __construct() 
	{
		$this->driver = env('MAIL_DRIVER', 'smtp');
		$this->host = env('MAIL_HOST', 'smtp.yandex.ru');
		$this->port = env('MAIL_PORT', 465);
		$this->from = [ 
			'address' => 'mike.wazovzky@yandex.ru',
			'name' => 'mike.wazovzky',
			];
		$this->encryption = env('MAIL_ENCRYPTION', 'ssl');
		$this->username = env('MAIL_USERNAME');
		$this->password = env('MAIL_PASSWORD'); 
		$this->admin = env('MAIL_ADMIN', 'mike.wazovzky@gmail.com');

	}
	
	public function send($to, $subj, $body) 
	{
		$transport = \Swift_SmtpTransport::newInstance($this->host, $this->port, $this->encryption)
		   ->setUsername($this->username)
		   ->setPassword($this->password);
		$mailer = \Swift_Mailer::newInstance($transport);
				
		$message = \Swift_Message::newInstance()
			->setSubject($subj)
			->setFrom([$this->from['address'] => $this->from['name']])
			->setTo($to)
			->setBody($body);
	
		return $mailer->send($message);
	}	
	
	public function sendToAdmin($data) 
	{
		$message = 'Message from: ' . $data['name'] . '[' . $data['email'] . "]: \n" . $data['body'];
				
		$this->send($this->admin, $data['subj'], $message);
	}	
	
}