<?php

/**
 * This code was generated by
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */

namespace Twilio\Rest\Chat\V2\Service\User;

use Twilio\Options;
use Twilio\Values;

abstract class UserChannelOptions {
    /**
     * @param string $xTwilioWebhookEnabled The X-Twilio-Webhook-Enabled HTTP
     *                                      request header
     * @return DeleteUserChannelOptions Options builder
     */
    public static function delete(string $xTwilioWebhookEnabled = Values::NONE): DeleteUserChannelOptions {
        return new DeleteUserChannelOptions($xTwilioWebhookEnabled);
    }

    /**
     * @param string $notificationLevel The push notification level to assign to
     *                                  the User Channel
     * @param int $lastConsumedMessageIndex The index of the last Message that the
     *                                      Member has read within the Channel
     * @param \DateTime $lastConsumptionTimestamp The ISO 8601 based timestamp
     *                                            string that represents the
     *                                            datetime of the last Message read
     *                                            event for the Member within the
     *                                            Channel
     * @return UpdateUserChannelOptions Options builder
     */
    public static function update(string $notificationLevel = Values::NONE, int $lastConsumedMessageIndex = Values::NONE, \DateTime $lastConsumptionTimestamp = Values::NONE): UpdateUserChannelOptions {
        return new UpdateUserChannelOptions($notificationLevel, $lastConsumedMessageIndex, $lastConsumptionTimestamp);
    }
}

class DeleteUserChannelOptions extends Options {
    /**
     * @param string $xTwilioWebhookEnabled The X-Twilio-Webhook-Enabled HTTP
     *                                      request header
     */
    public function __construct(string $xTwilioWebhookEnabled = Values::NONE) {
        $this->options['xTwilioWebhookEnabled'] = $xTwilioWebhookEnabled;
    }

    /**
     * The X-Twilio-Webhook-Enabled HTTP request header
     *
     * @param string $xTwilioWebhookEnabled The X-Twilio-Webhook-Enabled HTTP
     *                                      request header
     * @return $this Fluent Builder
     */
    public function setXTwilioWebhookEnabled(string $xTwilioWebhookEnabled): self {
        $this->options['xTwilioWebhookEnabled'] = $xTwilioWebhookEnabled;
        return $this;
    }

    /**
     * Provide a friendly representation
     *
     * @return string Machine friendly representation
     */
    public function __toString(): string {
        $options = \http_build_query(Values::of($this->options), '', ' ');
        return '[Twilio.Chat.V2.DeleteUserChannelOptions ' . $options . ']';
    }
}

class UpdateUserChannelOptions extends Options {
    /**
     * @param string $notificationLevel The push notification level to assign to
     *                                  the User Channel
     * @param int $lastConsumedMessageIndex The index of the last Message that the
     *                                      Member has read within the Channel
     * @param \DateTime $lastConsumptionTimestamp The ISO 8601 based timestamp
     *                                            string that represents the
     *                                            datetime of the last Message read
     *                                            event for the Member within the
     *                                            Channel
     */
    public function __construct(string $notificationLevel = Values::NONE, int $lastConsumedMessageIndex = Values::NONE, \DateTime $lastConsumptionTimestamp = Values::NONE) {
        $this->options['notificationLevel'] = $notificationLevel;
        $this->options['lastConsumedMessageIndex'] = $lastConsumedMessageIndex;
        $this->options['lastConsumptionTimestamp'] = $lastConsumptionTimestamp;
    }

    /**
     * The push notification level to assign to the User Channel. Can be: `default` or `muted`.
     *
     * @param string $notificationLevel The push notification level to assign to
     *                                  the User Channel
     * @return $this Fluent Builder
     */
    public function setNotificationLevel(string $notificationLevel): self {
        $this->options['notificationLevel'] = $notificationLevel;
        return $this;
    }

    /**
     * The index of the last [Message](https://www.twilio.com/docs/chat/rest/message-resource) in the [Channel](https://www.twilio.com/docs/chat/channels) that the Member has read.
     *
     * @param int $lastConsumedMessageIndex The index of the last Message that the
     *                                      Member has read within the Channel
     * @return $this Fluent Builder
     */
    public function setLastConsumedMessageIndex(int $lastConsumedMessageIndex): self {
        $this->options['lastConsumedMessageIndex'] = $lastConsumedMessageIndex;
        return $this;
    }

    /**
     * The [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) timestamp of the last [Message](https://www.twilio.com/docs/chat/rest/message-resource) read event for the Member within the [Channel](https://www.twilio.com/docs/chat/channels).
     *
     * @param \DateTime $lastConsumptionTimestamp The ISO 8601 based timestamp
     *                                            string that represents the
     *                                            datetime of the last Message read
     *                                            event for the Member within the
     *                                            Channel
     * @return $this Fluent Builder
     */
    public function setLastConsumptionTimestamp(\DateTime $lastConsumptionTimestamp): self {
        $this->options['lastConsumptionTimestamp'] = $lastConsumptionTimestamp;
        return $this;
    }

    /**
     * Provide a friendly representation
     *
     * @return string Machine friendly representation
     */
    public function __toString(): string {
        $options = \http_build_query(Values::of($this->options), '', ' ');
        return '[Twilio.Chat.V2.UpdateUserChannelOptions ' . $options . ']';
    }
}