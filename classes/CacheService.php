<?php

class CacheService {
	private $prefix;
	private $mem;

	public function __construct()
	{
		$this->prefix = "comicfeeds_";

		if (class_exists("Memcached"))
			$this->mem = new Memcached;
		else
			$this->mem = null;
	}

	public function get($name)
	{
		if (empty($this->mem))
			return false;

		try
		{
			return $this->mem->get($this->prefix . $name);
		}
		catch (Exception $ex)
		{
			return false;
		}

		return true;
	}

	public function set($name, $value, $expirationSeconds)
	{
		if (empty($this->mem))
			return false;

		try
		{
			$this->mem->set($this->prefix . $name, $value, time() + $expirationSeconds);
		}
		catch (Exception $ex)
		{
			return false;
		}

		return true;
	}

	public function getAllKeys()
	{
		if (empty($this->mem))
			return false;

		try
		{
			return $this->mem->getAllKeys();
		}
		catch (Exception $ex)
		{
			return false;
		}

		return true;
	}
}
