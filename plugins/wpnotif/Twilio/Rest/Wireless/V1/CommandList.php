<?php

/**
 * This code was generated by
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */

namespace Twilio\Rest\Wireless\V1;

use Twilio\ListResource;
use Twilio\Options;
use Twilio\Serialize;
use Twilio\Values;
use Twilio\Version;

class CommandList extends ListResource {
	/**
	 * Construct the CommandList
	 *
	 * @param Version $version Version that contains the resource
	 *
	 * @return \Twilio\Rest\Wireless\V1\CommandList
	 */
	public function __construct( Version $version ) {
		parent::__construct( $version );

		// Path Solution
		$this->solution = array();

		$this->uri = '/Commands';
	}

	/**
	 * Reads CommandInstance records from the API as a list.
	 * Unlike stream(), this operation is eager and will load `limit` records into
	 * memory before returning.
	 *
	 * @param array|Options $options Optional Arguments
	 * @param int $limit Upper limit for the number of records to return. read()
	 *                   guarantees to never return more than limit.  Default is no
	 *                   limit
	 * @param mixed $pageSize Number of records to fetch per request, when not set
	 *                        will use the default value of 50 records.  If no
	 *                        page_size is defined but a limit is defined, read()
	 *                        will attempt to read the limit with the most
	 *                        efficient page size, i.e. min(limit, 1000)
	 *
	 * @return CommandInstance[] Array of results
	 */
	public function read( $options = array(), $limit = null, $pageSize = null ) {
		return iterator_to_array( $this->stream( $options, $limit, $pageSize ), false );
	}

	/**
	 * Streams CommandInstance records from the API as a generator stream.
	 * This operation lazily loads records as efficiently as possible until the
	 * limit
	 * is reached.
	 * The results are returned as a generator, so this operation is memory
	 * efficient.
	 *
	 * @param array|Options $options Optional Arguments
	 * @param int $limit Upper limit for the number of records to return. stream()
	 *                   guarantees to never return more than limit.  Default is no
	 *                   limit
	 * @param mixed $pageSize Number of records to fetch per request, when not set
	 *                        will use the default value of 50 records.  If no
	 *                        page_size is defined but a limit is defined, stream()
	 *                        will attempt to read the limit with the most
	 *                        efficient page size, i.e. min(limit, 1000)
	 *
	 * @return \Twilio\Stream stream of results
	 */
	public function stream( $options = array(), $limit = null, $pageSize = null ) {
		$limits = $this->version->readLimits( $limit, $pageSize );

		$page = $this->page( $options, $limits['pageSize'] );

		return $this->version->stream( $page, $limits['limit'], $limits['pageLimit'] );
	}

	/**
	 * Retrieve a single page of CommandInstance records from the API.
	 * Request is executed immediately
	 *
	 * @param array|Options $options Optional Arguments
	 * @param mixed $pageSize Number of records to return, defaults to 50
	 * @param string $pageToken PageToken provided by the API
	 * @param mixed $pageNumber Page Number, this value is simply for client state
	 *
	 * @return \Twilio\Page Page of CommandInstance
	 */
	public function page( $options = array(), $pageSize = Values::NONE, $pageToken = Values::NONE, $pageNumber = Values::NONE ) {
		$options = new Values( $options );
		$params  = Values::of( array(
			'Sim'       => $options['sim'],
			'Status'    => $options['status'],
			'Direction' => $options['direction'],
			'Transport' => $options['transport'],
			'PageToken' => $pageToken,
			'Page'      => $pageNumber,
			'PageSize'  => $pageSize,
		) );

		$response = $this->version->page(
			'GET',
			$this->uri,
			$params
		);

		return new CommandPage( $this->version, $response, $this->solution );
	}

	/**
	 * Retrieve a specific page of CommandInstance records from the API.
	 * Request is executed immediately
	 *
	 * @param string $targetUrl API-generated URL for the requested results page
	 *
	 * @return \Twilio\Page Page of CommandInstance
	 */
	public function getPage( $targetUrl ) {
		$response = $this->version->getDomain()->getClient()->request(
			'GET',
			$targetUrl
		);

		return new CommandPage( $this->version, $response, $this->solution );
	}

	/**
	 * Create a new CommandInstance
	 *
	 * @param string $command The message body of the Command or a Base64 encoded
	 *                        byte string in binary mode.
	 * @param array|Options $options Optional Arguments
	 *
	 * @return CommandInstance Newly created CommandInstance
	 * @throws TwilioException When an HTTP error occurs.
	 */
	public function create( $command, $options = array() ) {
		$options = new Values( $options );

		$data = Values::of( array(
			'Command'                  => $command,
			'Sim'                      => $options['sim'],
			'CallbackMethod'           => $options['callbackMethod'],
			'CallbackUrl'              => $options['callbackUrl'],
			'CommandMode'              => $options['commandMode'],
			'IncludeSid'               => $options['includeSid'],
			'DeliveryReceiptRequested' => Serialize::booleanToString( $options['deliveryReceiptRequested'] ),
		) );

		$payload = $this->version->create(
			'POST',
			$this->uri,
			array(),
			$data
		);

		return new CommandInstance( $this->version, $payload );
	}

	/**
	 * Constructs a CommandContext
	 *
	 * @param string $sid A 34 character string that uniquely identifies this
	 *                    resource.
	 *
	 * @return \Twilio\Rest\Wireless\V1\CommandContext
	 */
	public function getContext( $sid ) {
		return new CommandContext( $this->version, $sid );
	}

	/**
	 * Provide a friendly representation
	 *
	 * @return string Machine friendly representation
	 */
	public function __toString() {
		return '[Twilio.Wireless.V1.CommandList]';
	}
}