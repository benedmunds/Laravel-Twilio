#Twilio bundle for Laravel

##Setup
Install the bundle  

	$ php artisan bundle:install twilio

Include it in application/bundles.php  

	return array('twilio');


##Usage
In application/routes.php you can add a simple route to send a text message with  

	Route::get('/, home', function()
	{
		Bundle::start('twilio');
		
		//twilio account settings
		$account_sid = 'ABC123456789';
		$auth_token  = '123456789';

		$client = new Services_Twilio($account_sid, $auth_token);
		$message = $client->account->sms_messages->create(
			'1112223456', // From a valid Twilio number
			'7062894115', // Text this number
			"Ben Edmunds is Awesome!" //Text body
		);

		echo $message->sid;
	});


See [the Twilio documentation](http://readthedocs.org/docs/twilio-php/en/latest/) for API details.

Bundle created by [Ben Edmunds](http://benedmunds.com).