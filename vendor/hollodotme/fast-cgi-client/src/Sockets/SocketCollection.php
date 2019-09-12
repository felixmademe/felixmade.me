<?php declare(strict_types=1);

namespace hollodotme\FastCGI\Sockets;

use Countable;
use Exception;
use hollodotme\FastCGI\Exceptions\ReadFailedException;
use hollodotme\FastCGI\Exceptions\WriteFailedException;
use hollodotme\FastCGI\Interfaces\ConfiguresSocketConnection;
use hollodotme\FastCGI\Interfaces\EncodesNameValuePair;
use hollodotme\FastCGI\Interfaces\EncodesPacket;
use function array_search;
use function count;

final class SocketCollection implements Countable
{
	/** @var Socket[] */
	private $sockets = [];

	/**
	 * @param ConfiguresSocketConnection $connection
	 * @param EncodesPacket              $packetEncoder
	 * @param EncodesNameValuePair       $nameValuePairEncoder
	 *
	 * @return Socket
	 * @throws Exception
	 * @throws WriteFailedException
	 */
	public function new(
		ConfiguresSocketConnection $connection,
		EncodesPacket $packetEncoder,
		EncodesNameValuePair $nameValuePairEncoder
	) : Socket
	{
		for ( $i = 0; $i < 10; $i++ )
		{
			$socket = new Socket( $connection, $packetEncoder, $nameValuePairEncoder );

			if ( $this->exists( $socket->getId() ) )
			{
				continue;
			}

			$this->sockets[ $socket->getId() ] = $socket;

			return $socket;
		}

		throw new WriteFailedException( 'Could not allocate a new request ID' );
	}

	/**
	 * @param int $socketId
	 *
	 * @return Socket
	 * @throws ReadFailedException
	 */
	public function getById( int $socketId ) : Socket
	{
		$this->guardSocketExists( $socketId );

		return $this->sockets[ $socketId ];
	}

	/**
	 * @param array $resources
	 *
	 * @return array
	 * @throws ReadFailedException
	 */
	public function getSocketIdsByResources( array $resources ) : array
	{
		$socketIds = [];

		foreach ( $resources as $resource )
		{
			$socketIds[] = $this->getByResource( $resource )->getId();
		}

		return $socketIds;
	}

	/**
	 * @param resource $resource
	 *
	 * @return Socket
	 * @throws ReadFailedException
	 */
	public function getByResource( $resource ) : Socket
	{
		$socketId = array_search( $resource, $this->collectResources(), true );

		if ( false === $socketId )
		{
			throw new ReadFailedException( 'Socket not found for resource' );
		}

		return $this->sockets[ $socketId ];
	}

	/**
	 * @param int $socketId
	 *
	 * @throws ReadFailedException
	 */
	private function guardSocketExists( int $socketId ) : void
	{
		if ( !$this->exists( $socketId ) )
		{
			throw new ReadFailedException( 'Socket not found for request ID: ' . $socketId );
		}
	}

	private function exists( int $socketId ) : bool
	{
		return isset( $this->sockets[ $socketId ] );
	}

	public function remove( int $socketId ) : void
	{
		unset( $this->sockets[ $socketId ] );
	}

	public function getIdleSocket() : ?Socket
	{
		if ( $this->isEmpty() )
		{
			return null;
		}

		foreach ( $this->sockets as $socket )
		{
			if ( !$socket->isIdle() )
			{
				continue;
			}

			if ( !$socket->isUsable() )
			{
				$this->remove( $socket->getId() );
				continue;
			}

			return $socket;
		}

		return null;
	}

	public function hasBusySockets() : bool
	{
		if ( $this->isEmpty() )
		{
			return false;
		}

		foreach ( $this->sockets as $socket )
		{
			if ( $socket->isBusy() )
			{
				return true;
			}
		}

		return false;
	}

	public function collectResources() : array
	{
		$resources = [];

		foreach ( $this->sockets as $socket )
		{
			$socket->collectResource( $resources );
		}

		return $resources;
	}

	public function count() : int
	{
		return count( $this->sockets );
	}

	public function isEmpty() : bool
	{
		return [] === $this->sockets;
	}
}