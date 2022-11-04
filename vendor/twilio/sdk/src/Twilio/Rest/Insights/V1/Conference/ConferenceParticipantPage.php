<?php

/**
 * This code was generated by
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */

namespace Twilio\Rest\Insights\V1\Conference;

use Twilio\Http\Response;
use Twilio\Page;
use Twilio\Version;

class ConferenceParticipantPage extends Page {
    /**
     * @param Version $version Version that contains the resource
     * @param Response $response Response from the API
     * @param array $solution The context solution
     */
    public function __construct(Version $version, Response $response, array $solution) {
        parent::__construct($version, $response);

        // Path Solution
        $this->solution = $solution;
    }

    /**
     * @param array $payload Payload response from the API
     * @return ConferenceParticipantInstance \Twilio\Rest\Insights\V1\Conference\ConferenceParticipantInstance
     */
    public function buildInstance(array $payload): ConferenceParticipantInstance {
        return new ConferenceParticipantInstance(
            $this->version,
            $payload,
            $this->solution['conferenceSid']
        );
    }

    /**
     * Provide a friendly representation
     *
     * @return string Machine friendly representation
     */
    public function __toString(): string {
        return '[Twilio.Insights.V1.ConferenceParticipantPage]';
    }
}