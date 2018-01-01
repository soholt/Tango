<?php defined('SYSPATH') or die('No direct script access.');
/**
 * Fire log writer.
 * 
 * Originally forked from github.com/pedrosland/kohana-firephp
 * [!!] This is a complete rewrite
 * 
 * @package		Fire
 * @author		Kemal Delalic <github.com/kemo>
 * @author		Mathew Davies <github.com/ThePixelDeveloper>
 * @version		1.0.0.
 */
class Fire_Log_Writer extends Log_Writer {

	/**
	 * @var	FirePHP
	 */
	protected $_fire;
	
	/**
	 * Should the profiler be displayed
	 * @var bool
	 */
	protected $_log_profiler;
	
	/**
	 * Should sessions be logged?
	 * @var bool
	 */
	protected $_log_session;

	/**
	 * Creates a new fire logger.
	 * 
	 * Accepts array of params to override:
	 * 
	 *  Type    | Setting   | Description                   | Default Value
	 * ---------|-----------|-------------------------------|---------------
	 * `bool`   | profiling | Output profiler data in FB?   | Kohana::$profiling
	 * `bool`   | session   | Log the whole session?        | FALSE
	 * `FirePHP`| fire      | FirePHP Dependency Injection  | FirePHP singleton
	 *
	 * @param   string  Writer options
	 * @return  void
	 */
	public function __construct(array $options = array())
	{
		$this->_log_profiler = Arr::get($options, 'profiling', Kohana::$profiling);
		
		$this->_log_session = Arr::get($options, 'session', FALSE);
		
		$this->_fire = Arr::get($options, 'fire', FirePHP::getInstance(TRUE));
	}
	
	/**
	 * Handle objects' destruction, writing the Profiler and Session data
	 * if enabled
	 * 
	 * @return	void
	 */ 
	public function __destruct()
	{
		// Log the profiler
		if ($this->_log_profiler === TRUE)
		{
			$this->log_profiler();
		}
	
		// Log the current session by default?
		if ($this->_log_session === TRUE)
		{
			$this->log_session(Session::instance());
		}
	}

	/**
	 * Writes each of the messages to the console.
	 *
	 * @param   array   messages
	 * @return  void
	 */
	public function write(array $messages)
	{
		foreach ($messages as $message)
		{
			// Write each message to firePHP
			switch ($message['level'])
			{
				default :
				case Log::NOTICE :
					$this->_fire->log($message['body']);
				break;
				case Log::DEBUG :
				case Log::INFO :
					$this->_fire->info($message['body']);
				break;								
				case Log::EMERGENCY :
				case Log::CRITICAL :
				case Log::ERROR :
					$this->_fire->error($message['body']);
				break;
				case Log::WARNING :					
					$this->_fire->warn($message['body']);
				break;
			}
		}
	}
	
	/**
	 * Setter / getter for writer object
	 * 
	 * @param	FirePHP		optional, writer
	 * @return	FirePHP 	on get
	 * @return	object		chainable ($this) on set
	 */
	public function writer(FirePHP $writer = NULL)
	{
		if ($writer === NULL)
			return $this->_fire;
			
		$this->_fire = $writer;
		
		return $this;
	}
	
	/**
	 * Logs Kohana Profiler benchmark(s)
	 * 
	 * @return	void
	 */
	public function log_profiler()
	{
		$group_stats 	= Profiler::group_stats();
		$group_cols   	= array('min', 'max', 'average', 'total');
		
		// All profiler stats
		foreach (Profiler::groups() as $group => $benchmarks)
		{
			$table_head = array_merge(array('Benchmark'), $group_cols);
			$table 		= array($table_head);
			
			foreach ($benchmarks as $name => $tokens)
			{
				$stats 	= Profiler::stats($tokens);
				$row 	= array($name.' ('.count($tokens).')');
				
				foreach ($group_cols as $key)
				{
					$row[] = number_format($stats[$key]['time'], 6).' s / '
						.number_format($stats[$key]['memory'] / 1024, 4).' kB';
				}
				
				array_push($table, $row);
			}
			
			$this->_fire->table($group, $table);
		}
		
		
		// Application stats
		// @todo merge this with other stats
		$application		= Profiler::application();
		$application_cols 	= array('min', 'max', 'average', 'current');
		
		$table 	= array(array_merge(array('Benchmark'), $application_cols));
		$row 	= array('Execution');
		
		foreach ($application_cols as $key)
		{
			$row[] = number_format($application[$key]['time'], 6).' s / '
				.number_format($application[$key]['memory'] / 1024, 4).' kB';
		}
				
		array_push($table, $row);
		
		$this->_fire->table('application', $table);
	}
	
	/**
	 * Logs the session
	 * 
	 * @param	Session	session to log
	 * @return	void
	 */
	public function log_session(Session $session)
	{
		$this->_fire->log($session->as_array(), 'Session');
	}
	
} // End Fire_Log_Writer