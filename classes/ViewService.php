<?php

class ViewService
{
	protected $log;
	protected $store;

	public function __construct(Logger $logger, StorageService $store)
	{
		$this->log = $logger;
		$this->store = $store;
	}

	public function getFeed($feedName, $feedType)
	{
		$valid_types = ['default', 'rss'];
		if (!in_array($feedType, $valid_types))
		{
			$feedType = reset($valid_types);
		}

		$filename = "feed_{$feedName}_{$feedType}";

		return $this->store->load($filename);
	}
}
