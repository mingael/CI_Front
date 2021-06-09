<?php

namespace Infrastructure\Core;

use GuzzleHttp\Client;

abstract class GuzzleClient
{
    private static Client $guzzle;

    abstract public static function of(): self;

	protected function guzzleInit(string $base_uri, array $config=[]): void
	{
		self::$guzzle = new Client([
			// Base URI is used with relative requests
			'base_uri' => $base_uri,
			'headers' => [
				'Accept' => 'application/json',
				'Referer' => $_ENV['BASE_URI'] . '/',
			],
			'allow_redirects' => [
				'referer' => TRUE,
			],
			// You can set any number of default request options.
			'timeout' => 2.0,
		]);
	}

	protected function get(string $url, array $params=[])
	{
		return json_decode(self::$guzzle->get($url, [
			'query' => $params
		])->getBody(), TRUE);
	}

	protected function post(string $url, array $params=[], bool $multipart=FALSE)
	{
		if(!$multipart)
		{
			$data = [
				'body' => json_encode($params),
				'headers' => [
					'Content-Type' => 'application/json',
				],
			];
		}
		else
		{
			$arr = [];

			forEach($params as $key => $value)
			{
				if(is_object($value))
				{
					array_push($arr, [
						'name' => $key,
						'filename' => $value->getName(),
						'contents' => fopen($value->getTempName(), 'r'),
					]);
				}
				else
				{
					array_push($arr, [
						'name' => $key,
						'contents' => $value,
					]);
				}
			}

			$data = ['multipart' => $arr];
		}

		$request = self::$guzzle->post($url, $data);

		return json_decode($request->getBody(), TRUE);
	}

	protected function patch(string $url, array $params=[])
	{
		return json_decode(self::$guzzle->patch($url, [
			'json' => $params
		])->getBody(), TRUE);
	}

	protected function put(string $url, array $params=[])
	{
		return json_decode(self::$guzzle->put($url, [
			'json' => $params
		])->getBody(), TRUE);
	}

	protected function delete(string $url)
	{
		return json_decode(self::$guzzle->delete($url)->getBody(), TRUE);
	}
}
?>