<?php
	$host = strtolower( $_SERVER[ 'HTTP_HOST' ] );

	switch ( $host ) {
		case 'localhost':
			$config = array(
				// Basic config
				'DEBUG' => true,
				'ENVIRONMENT' => 'dev',
				'SITE_ROOT' => '/myapp/public',

				// Database
				'MYSQL_DB'	=> '',
				'MYSQL_HOST' => 'localhost',
				'MYSQL_USER' => '',
				'MYSQL_PASSWORD' => '',
				'MYSQL_PORT' => null,
				'MYSQL_SOCKET' => null,
				'MYSQL_TBLPREF' => null,

				// Output Caching
				// Turn output caching on or off
				'OUTPUT_CACHE_ENABLED' => false,

				// Default caching rule: everything/nothing
				'OUTPUT_CACHE_ALL' => false,
				//'OUTPUT_CACHE_PATH_DEFAULT' => 'app_cache',
				'OUTPUT_CACHE_COMPRESS_DEFAULT' => null,

				// Cache lifetime in seconds. use null to never expire automatically
				'OUTPUT_CACHE_TTL' => null
			);

			break;
		default:
			$config = array(
				'DEBUG' => false,
				'ENVIRONMENT' => 'production',
				'SITE_ROOT' => '',
				'MYSQL_DB'	=> '',
				'MYSQL_HOST' => '',
				'MYSQL_USER' => '',
				'MYSQL_PASSWORD' => '',
				'MYSQL_PORT' => null,
				'MYSQL_SOCKET' => null,
				'MYSQL_TBLPREF' => null
			);
	}