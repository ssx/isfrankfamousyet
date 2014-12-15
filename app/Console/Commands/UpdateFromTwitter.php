<?php namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\InputArgument;

class UpdateFromTwitter extends Command {

	/**
	 * The console command name.
	 *
	 * @var string
	 */
	protected $name = 'twitter:update';

	/**
	 * The console command description.
	 *
	 * @var string
	 */
	protected $description = 'Update follow counts from Twitter.';

	/**
	 * Create a new command instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		parent::__construct();
	}

	/**
	 * Execute the console command.
	 *
	 * @return mixed
	 */
	public function fire()
	{
		$Users = User::all();
		foreach ($Users as $User)
		{
			$connection         		 = new \TwitterOAuth(getenv("TWITTER_CLIENT_ID"),  getenv("TWITTER_CLIENT_SECRET"), $User->oauth_token, $User->oauth_token_secret);
			$account            		 = $connection->get('account/verify_credentials');

			$User->username              = $account->screen_name;
			$User->fullname              = $account->name;
			$User->image_url             = $account->profile_image_url;
			$User->count_statuses        = $account->statuses_count;
			$User->count_followers       = $account->followers_count;
			$User->count_following       = $account->friends_count;
			if ($User->save())
			{
				$this->info("Successfully updated user: ".$User->username);
			} else
			{
				$this->error("Error updating user: ".$User->username);
			}
		}
	}

	/**
	 * Get the console command arguments.
	 *
	 * @return array
	 */
	protected function getArguments()
	{
		return [

		];
	}

	/**
	 * Get the console command options.
	 *
	 * @return array
	 */
	protected function getOptions()
	{
		return [

		];
	}

}
