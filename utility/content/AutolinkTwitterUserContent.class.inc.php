<?

Loader::load('utility', 'Content');

final class AutolinkTwitterUserContent extends Content
{

	private static $USER_PATTERN = '/@([a-z0-9_]+)/i';
	private static $USER_LINK = '<a href="http://twitter.com/%s" target="_blank">%s</a>';

	protected function execute()
	{
		if(stristr($this->content, '@') === false)
			return;
		
		// yeah yeah, i'm currently ignoring the link, whatevs
		$parameters = func_get_args();
		if(count($parameters) > 1 || (count($parameters) == 1 && !is_array($parameters[0])))
		{
			trigger_error('Unexpected parameters passed into AutolinkTwitterUser!');
			return;
		}
		$parameters = array_shift($parameters);
		
		$found_user = preg_match_all(self::$USER_PATTERN, $this->content, $matches, PREG_SET_ORDER);
		if($found_user === false || $found_user === 0)
			return;
		
		foreach($matches as $match)
		{
			$replacement = $this->get_replacement_link($match[1], $match[0]);
			$this->content = str_replace($match[0], $replacement, $this->content);
		}
		
		return;
	}

	private function get_replacement_link($handle_link, $handle_display)
	{
		return sprintf(self::$USER_LINK, $handle_link, $handle_display);
	}

}