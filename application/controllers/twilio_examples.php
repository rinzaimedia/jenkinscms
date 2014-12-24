<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Twilio_Examples extends CI_Controller
{

	/**
	 * Usage example for dialing a number with Twilio_Incoming
	 */
	public function dial()
	{
		$this->load->library(array('Twilio_Incoming'));

		$number = '1235551212';
		$caller_id = '1235556677';
		$record = true;

		$this->twilio_incoming->dial($number, array('callerId' => $caller_id, 'record' => $record));

		$this->load->view('twiml');
	}

	/**
	 * Usage example for enqueuing a caller with Twilio_Incoming
	 */
	public function enqueue()
	{
		$this->load->library(array('Twilio_Incoming'));

		$this->twilio_incoming->enqueue('this-queue', array('method' => 'post', 'action' => '/action/url'));

		$this->load->view('twiml');
	}

	/**
	 * Usage example of getting a call by SID and redirecting it with Twilio_Outgoing
	 */
	public function redirect_call($call_sid = 'xxx')
	{
		$this->load->library(array('Twilio_Outgoing'));

		$twilio_call = $this->twilio_outgoing->account->calls->get($call_sid);

		$twilio_call->update(array('Url' => "/path/to/twiml", 'Method' => 'POST'));
	}

	/**
	 * Make a call through Twilio using Twilio_Outgoing
	 */
	public function make_call($uuid, $from, $to)
	{
		$this->load->library(array('Twilio_Outgoing'));

		$twilio_call = $this->twilio_outgoing->account->twilio_calls->create("+14158675309", "+14155551212", "http://demo.twilio.com/docs/voice.xml", array());
		echo $twilio_call->sid;
	}

	/**
	 * Create a capability token using Twilio_Capability
	 */
	public function get_capability_token($user = '')
	{
		$this->load->library(array('Twilio_Capability'));

		$app_sid = $this->config->item('app_sid', 'twilio');

		$this->twilio_capability->allowClientOutgoing($app_sid);

		if ( ! empty($user))
		{
			$this->twilio_capability->allowClientIncoming($user);
		}

		$token = $this->twilio_capability->generateToken(36000);

		echo $token;
	}
}