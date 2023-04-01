<?php

namespace Spatie\SchemaOrg;

use \Spatie\SchemaOrg\Contracts\ReceiveActionContract;
use \Spatie\SchemaOrg\Contracts\ActionContract;
use \Spatie\SchemaOrg\Contracts\ThingContract;
use \Spatie\SchemaOrg\Contracts\TransferActionContract;

/**
 * The act of physically/electronically taking delivery of an object thathas
 * been transferred from an origin to a destination. Reciprocal of SendAction.
 * 
 * Related actions:
 * 
 * * [[SendAction]]: The reciprocal of ReceiveAction.
 * * [[TakeAction]]: Unlike TakeAction, ReceiveAction does not imply that the
 * ownership has been transfered (e.g. I can receive a package, but it does not
 * mean the package is now mine).
 *
 * @see https://schema.org/ReceiveAction
 *
 */
class ReceiveAction extends BaseType implements ReceiveActionContract, ActionContract, ThingContract, TransferActionContract
{
    /**
     * Indicates the current disposition of the Action.
     *
     * @param \Spatie\SchemaOrg\Contracts\ActionStatusTypeContract|\Spatie\SchemaOrg\Contracts\ActionStatusTypeContract[] $actionStatus
     *
     * @return static
     *
     * @see https://schema.org/actionStatus
     */
    public function actionStatus($actionStatus)
    {
        return $this->setProperty('actionStatus', $actionStatus);
    }

    /**
     * An additional type for the item, typically used for adding more specific
     * types from external vocabularies in microdata syntax. This is a
     * relationship between something and a class that the thing is in. In RDFa
     * syntax, it is better to use the native RDFa syntax - the 'typeof'
     * attribute - for multiple types. Schema.org tools may have only weaker
     * understanding of extra types, in particular those defined externally.
     *
     * @param string|string[] $additionalType
     *
     * @return static
     *
     * @see https://schema.org/additionalType
     */
    public function additionalType($additionalType)
    {
        return $this->setProperty('additionalType', $additionalType);
    }

    /**
     * The direct performer or driver of the action (animate or inanimate). e.g.
     * *John* wrote a book.
     *
     * @param \Spatie\SchemaOrg\Contracts\OrganizationContract|\Spatie\SchemaOrg\Contracts\OrganizationContract[]|\Spatie\SchemaOrg\Contracts\PersonContract|\Spatie\SchemaOrg\Contracts\PersonContract[] $agent
     *
     * @return static
     *
     * @see https://schema.org/agent
     */
    public function agent($agent)
    {
        return $this->setProperty('agent', $agent);
    }

    /**
     * An alias for the item.
     *
     * @param string|string[] $alternateName
     *
     * @return static
     *
     * @see https://schema.org/alternateName
     */
    public function alternateName($alternateName)
    {
        return $this->setProperty('alternateName', $alternateName);
    }

    /**
     * A sub property of instrument. The method of delivery.
     *
     * @param \Spatie\SchemaOrg\Contracts\DeliveryMethodContract|\Spatie\SchemaOrg\Contracts\DeliveryMethodContract[] $deliveryMethod
     *
     * @return static
     *
     * @see https://schema.org/deliveryMethod
     */
    public function deliveryMethod($deliveryMethod)
    {
        return $this->setProperty('deliveryMethod', $deliveryMethod);
    }

    /**
     * A description of the item.
     *
     * @param string|string[] $description
     *
     * @return static
     *
     * @see https://schema.org/description
     */
    public function description($description)
    {
        return $this->setProperty('description', $description);
    }

    /**
     * A sub property of description. A short description of the item used to
     * disambiguate from other, similar items. Information from other properties
     * (in particular, name) may be necessary for the description to be useful
     * for disambiguation.
     *
     * @param string|string[] $disambiguatingDescription
     *
     * @return static
     *
     * @see https://schema.org/disambiguatingDescription
     */
    public function disambiguatingDescription($disambiguatingDescription)
    {
        return $this->setProperty('disambiguatingDescription', $disambiguatingDescription);
    }

    /**
     * The endTime of something. For a reserved event or service (e.g.
     * FoodEstablishmentReservation), the time that it is expected to end. For
     * actions that span a period of time, when the action was performed. e.g.
     * John wrote a book from January to *December*. For media, including audio
     * and video, it's the time offset of the end of a clip within a larger
     * file.
     * 
     * Note that Event uses startDate/endDate instead of startTime/endTime, even
     * when describing dates with times. This situation may be clarified in
     * future revisions.
     *
     * @param \DateTimeInterface|\DateTimeInterface[] $endTime
     *
     * @return static
     *
     * @see https://schema.org/endTime
     * @link https://github.com/schemaorg/schemaorg/issues/2493
     */
    public function endTime($endTime)
    {
        return $this->setProperty('endTime', $endTime);
    }

    /**
     * For failed actions, more information on the cause of the failure.
     *
     * @param \Spatie\SchemaOrg\Contracts\ThingContract|\Spatie\SchemaOrg\Contracts\ThingContract[] $error
     *
     * @return static
     *
     * @see https://schema.org/error
     */
    public function error($error)
    {
        return $this->setProperty('error', $error);
    }

    /**
     * A sub property of location. The original location of the object or the
     * agent before the action.
     *
     * @param \Spatie\SchemaOrg\Contracts\PlaceContract|\Spatie\SchemaOrg\Contracts\PlaceContract[] $fromLocation
     *
     * @return static
     *
     * @see https://schema.org/fromLocation
     */
    public function fromLocation($fromLocation)
    {
        return $this->setProperty('fromLocation', $fromLocation);
    }

    /**
     * The identifier property represents any kind of identifier for any kind of
     * [[Thing]], such as ISBNs, GTIN codes, UUIDs etc. Schema.org provides
     * dedicated properties for representing many of these, either as textual
     * strings or as URL (URI) links. See [background
     * notes](/docs/datamodel.html#identifierBg) for more details.
     *
     * @param \Spatie\SchemaOrg\Contracts\PropertyValueContract|\Spatie\SchemaOrg\Contracts\PropertyValueContract[]|string|string[] $identifier
     *
     * @return static
     *
     * @see https://schema.org/identifier
     */
    public function identifier($identifier)
    {
        return $this->setProperty('identifier', $identifier);
    }

    /**
     * An image of the item. This can be a [[URL]] or a fully described
     * [[ImageObject]].
     *
     * @param \Spatie\SchemaOrg\Contracts\ImageObjectContract|\Spatie\SchemaOrg\Contracts\ImageObjectContract[]|string|string[] $image
     *
     * @return static
     *
     * @see https://schema.org/image
     */
    public function image($image)
    {
        return $this->setProperty('image', $image);
    }

    /**
     * The object that helped the agent perform the action. e.g. John wrote a
     * book with *a pen*.
     *
     * @param \Spatie\SchemaOrg\Contracts\ThingContract|\Spatie\SchemaOrg\Contracts\ThingContract[] $instrument
     *
     * @return static
     *
     * @see https://schema.org/instrument
     */
    public function instrument($instrument)
    {
        return $this->setProperty('instrument', $instrument);
    }

    /**
     * The location of for example where the event is happening, an organization
     * is located, or where an action takes place.
     *
     * @param \Spatie\SchemaOrg\Contracts\PlaceContract|\Spatie\SchemaOrg\Contracts\PlaceContract[]|\Spatie\SchemaOrg\Contracts\PostalAddressContract|\Spatie\SchemaOrg\Contracts\PostalAddressContract[]|\Spatie\SchemaOrg\Contracts\VirtualLocationContract|\Spatie\SchemaOrg\Contracts\VirtualLocationContract[]|string|string[] $location
     *
     * @return static
     *
     * @see https://schema.org/location
     */
    public function location($location)
    {
        return $this->setProperty('location', $location);
    }

    /**
     * Indicates a page (or other CreativeWork) for which this thing is the main
     * entity being described. See [background
     * notes](/docs/datamodel.html#mainEntityBackground) for details.
     *
     * @param \Spatie\SchemaOrg\Contracts\CreativeWorkContract|\Spatie\SchemaOrg\Contracts\CreativeWorkContract[]|string|string[] $mainEntityOfPage
     *
     * @return static
     *
     * @see https://schema.org/mainEntityOfPage
     */
    public function mainEntityOfPage($mainEntityOfPage)
    {
        return $this->setProperty('mainEntityOfPage', $mainEntityOfPage);
    }

    /**
     * The name of the item.
     *
     * @param string|string[] $name
     *
     * @return static
     *
     * @see https://schema.org/name
     */
    public function name($name)
    {
        return $this->setProperty('name', $name);
    }

    /**
     * The object upon which the action is carried out, whose state is kept
     * intact or changed. Also known as the semantic roles patient, affected or
     * undergoer (which change their state) or theme (which doesn't). e.g. John
     * read *a book*.
     *
     * @param \Spatie\SchemaOrg\Contracts\ThingContract|\Spatie\SchemaOrg\Contracts\ThingContract[] $object
     *
     * @return static
     *
     * @see https://schema.org/object
     */
    public function object($object)
    {
        return $this->setProperty('object', $object);
    }

    /**
     * Other co-agents that participated in the action indirectly. e.g. John
     * wrote a book with *Steve*.
     *
     * @param \Spatie\SchemaOrg\Contracts\OrganizationContract|\Spatie\SchemaOrg\Contracts\OrganizationContract[]|\Spatie\SchemaOrg\Contracts\PersonContract|\Spatie\SchemaOrg\Contracts\PersonContract[] $participant
     *
     * @return static
     *
     * @see https://schema.org/participant
     */
    public function participant($participant)
    {
        return $this->setProperty('participant', $participant);
    }

    /**
     * Indicates a potential Action, which describes an idealized action in
     * which this thing would play an 'object' role.
     *
     * @param \Spatie\SchemaOrg\Contracts\ActionContract|\Spatie\SchemaOrg\Contracts\ActionContract[] $potentialAction
     *
     * @return static
     *
     * @see https://schema.org/potentialAction
     */
    public function potentialAction($potentialAction)
    {
        return $this->setProperty('potentialAction', $potentialAction);
    }

    /**
     * The result produced in the action. e.g. John wrote *a book*.
     *
     * @param \Spatie\SchemaOrg\Contracts\ThingContract|\Spatie\SchemaOrg\Contracts\ThingContract[] $result
     *
     * @return static
     *
     * @see https://schema.org/result
     */
    public function result($result)
    {
        return $this->setProperty('result', $result);
    }

    /**
     * URL of a reference Web page that unambiguously indicates the item's
     * identity. E.g. the URL of the item's Wikipedia page, Wikidata entry, or
     * official website.
     *
     * @param string|string[] $sameAs
     *
     * @return static
     *
     * @see https://schema.org/sameAs
     */
    public function sameAs($sameAs)
    {
        return $this->setProperty('sameAs', $sameAs);
    }

    /**
     * A sub property of participant. The participant who is at the sending end
     * of the action.
     *
     * @param \Spatie\SchemaOrg\Contracts\AudienceContract|\Spatie\SchemaOrg\Contracts\AudienceContract[]|\Spatie\SchemaOrg\Contracts\OrganizationContract|\Spatie\SchemaOrg\Contracts\OrganizationContract[]|\Spatie\SchemaOrg\Contracts\PersonContract|\Spatie\SchemaOrg\Contracts\PersonContract[] $sender
     *
     * @return static
     *
     * @see https://schema.org/sender
     */
    public function sender($sender)
    {
        return $this->setProperty('sender', $sender);
    }

    /**
     * The startTime of something. For a reserved event or service (e.g.
     * FoodEstablishmentReservation), the time that it is expected to start. For
     * actions that span a period of time, when the action was performed. e.g.
     * John wrote a book from *January* to December. For media, including audio
     * and video, it's the time offset of the start of a clip within a larger
     * file.
     * 
     * Note that Event uses startDate/endDate instead of startTime/endTime, even
     * when describing dates with times. This situation may be clarified in
     * future revisions.
     *
     * @param \DateTimeInterface|\DateTimeInterface[] $startTime
     *
     * @return static
     *
     * @see https://schema.org/startTime
     * @link https://github.com/schemaorg/schemaorg/issues/2493
     */
    public function startTime($startTime)
    {
        return $this->setProperty('startTime', $startTime);
    }

    /**
     * A CreativeWork or Event about this Thing.
     *
     * @param \Spatie\SchemaOrg\Contracts\CreativeWorkContract|\Spatie\SchemaOrg\Contracts\CreativeWorkContract[]|\Spatie\SchemaOrg\Contracts\EventContract|\Spatie\SchemaOrg\Contracts\EventContract[] $subjectOf
     *
     * @return static
     *
     * @see https://schema.org/subjectOf
     * @link https://github.com/schemaorg/schemaorg/issues/1670
     */
    public function subjectOf($subjectOf)
    {
        return $this->setProperty('subjectOf', $subjectOf);
    }

    /**
     * Indicates a target EntryPoint for an Action.
     *
     * @param \Spatie\SchemaOrg\Contracts\EntryPointContract|\Spatie\SchemaOrg\Contracts\EntryPointContract[] $target
     *
     * @return static
     *
     * @see https://schema.org/target
     */
    public function target($target)
    {
        return $this->setProperty('target', $target);
    }

    /**
     * A sub property of location. The final location of the object or the agent
     * after the action.
     *
     * @param \Spatie\SchemaOrg\Contracts\PlaceContract|\Spatie\SchemaOrg\Contracts\PlaceContract[] $toLocation
     *
     * @return static
     *
     * @see https://schema.org/toLocation
     */
    public function toLocation($toLocation)
    {
        return $this->setProperty('toLocation', $toLocation);
    }

    /**
     * URL of the item.
     *
     * @param string|string[] $url
     *
     * @return static
     *
     * @see https://schema.org/url
     */
    public function url($url)
    {
        return $this->setProperty('url', $url);
    }

}
