<?php

namespace Spatie\SchemaOrg;

use \Spatie\SchemaOrg\Contracts\LymphaticVesselContract;
use \Spatie\SchemaOrg\Contracts\AnatomicalStructureContract;
use \Spatie\SchemaOrg\Contracts\MedicalEntityContract;
use \Spatie\SchemaOrg\Contracts\ThingContract;
use \Spatie\SchemaOrg\Contracts\VesselContract;

/**
 * A type of blood vessel that specifically carries lymph fluid unidirectionally
 * toward the heart.
 *
 * @see https://schema.org/LymphaticVessel
 * @see http://health-lifesci.schema.org
 *
 */
class LymphaticVessel extends BaseType implements LymphaticVesselContract, AnatomicalStructureContract, MedicalEntityContract, ThingContract, VesselContract
{
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
     * If applicable, a description of the pathophysiology associated with the
     * anatomical system, including potential abnormal changes in the
     * mechanical, physical, and biochemical functions of the system.
     *
     * @param string|string[] $associatedPathophysiology
     *
     * @return static
     *
     * @see https://schema.org/associatedPathophysiology
     * @see http://health-lifesci.schema.org
     */
    public function associatedPathophysiology($associatedPathophysiology)
    {
        return $this->setProperty('associatedPathophysiology', $associatedPathophysiology);
    }

    /**
     * Location in the body of the anatomical structure.
     *
     * @param string|string[] $bodyLocation
     *
     * @return static
     *
     * @see https://schema.org/bodyLocation
     * @see http://health-lifesci.schema.org
     */
    public function bodyLocation($bodyLocation)
    {
        return $this->setProperty('bodyLocation', $bodyLocation);
    }

    /**
     * A medical code for the entity, taken from a controlled vocabulary or
     * ontology such as ICD-9, DiseasesDB, MeSH, SNOMED-CT, RxNorm, etc.
     *
     * @param \Spatie\SchemaOrg\Contracts\MedicalCodeContract|\Spatie\SchemaOrg\Contracts\MedicalCodeContract[] $code
     *
     * @return static
     *
     * @see https://schema.org/code
     * @see http://health-lifesci.schema.org
     */
    public function code($code)
    {
        return $this->setProperty('code', $code);
    }

    /**
     * Other anatomical structures to which this structure is connected.
     *
     * @param \Spatie\SchemaOrg\Contracts\AnatomicalStructureContract|\Spatie\SchemaOrg\Contracts\AnatomicalStructureContract[] $connectedTo
     *
     * @return static
     *
     * @see https://schema.org/connectedTo
     * @see http://health-lifesci.schema.org
     */
    public function connectedTo($connectedTo)
    {
        return $this->setProperty('connectedTo', $connectedTo);
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
     * An image containing a diagram that illustrates the structure and/or its
     * component substructures and/or connections with other structures.
     *
     * @param \Spatie\SchemaOrg\Contracts\ImageObjectContract|\Spatie\SchemaOrg\Contracts\ImageObjectContract[] $diagram
     *
     * @return static
     *
     * @see https://schema.org/diagram
     * @see http://health-lifesci.schema.org
     */
    public function diagram($diagram)
    {
        return $this->setProperty('diagram', $diagram);
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
     * A medical guideline related to this entity.
     *
     * @param \Spatie\SchemaOrg\Contracts\MedicalGuidelineContract|\Spatie\SchemaOrg\Contracts\MedicalGuidelineContract[] $guideline
     *
     * @return static
     *
     * @see https://schema.org/guideline
     * @see http://health-lifesci.schema.org
     */
    public function guideline($guideline)
    {
        return $this->setProperty('guideline', $guideline);
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
     * The drug or supplement's legal status, including any controlled substance
     * schedules that apply.
     *
     * @param \Spatie\SchemaOrg\Contracts\DrugLegalStatusContract|\Spatie\SchemaOrg\Contracts\DrugLegalStatusContract[]|\Spatie\SchemaOrg\Contracts\MedicalEnumerationContract|\Spatie\SchemaOrg\Contracts\MedicalEnumerationContract[]|string|string[] $legalStatus
     *
     * @return static
     *
     * @see https://schema.org/legalStatus
     * @see http://health-lifesci.schema.org
     */
    public function legalStatus($legalStatus)
    {
        return $this->setProperty('legalStatus', $legalStatus);
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
     * The system of medicine that includes this MedicalEntity, for example
     * 'evidence-based', 'homeopathic', 'chiropractic', etc.
     *
     * @param \Spatie\SchemaOrg\Contracts\MedicineSystemContract|\Spatie\SchemaOrg\Contracts\MedicineSystemContract[] $medicineSystem
     *
     * @return static
     *
     * @see https://schema.org/medicineSystem
     * @see http://health-lifesci.schema.org
     */
    public function medicineSystem($medicineSystem)
    {
        return $this->setProperty('medicineSystem', $medicineSystem);
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
     * The vasculature the lymphatic structure originates, or afferents, from.
     *
     * @param \Spatie\SchemaOrg\Contracts\VesselContract|\Spatie\SchemaOrg\Contracts\VesselContract[] $originatesFrom
     *
     * @return static
     *
     * @see https://schema.org/originatesFrom
     * @see http://health-lifesci.schema.org
     */
    public function originatesFrom($originatesFrom)
    {
        return $this->setProperty('originatesFrom', $originatesFrom);
    }

    /**
     * The anatomical or organ system that this structure is part of.
     *
     * @param \Spatie\SchemaOrg\Contracts\AnatomicalSystemContract|\Spatie\SchemaOrg\Contracts\AnatomicalSystemContract[] $partOfSystem
     *
     * @return static
     *
     * @see https://schema.org/partOfSystem
     * @see http://health-lifesci.schema.org
     */
    public function partOfSystem($partOfSystem)
    {
        return $this->setProperty('partOfSystem', $partOfSystem);
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
     * If applicable, the organization that officially recognizes this entity as
     * part of its endorsed system of medicine.
     *
     * @param \Spatie\SchemaOrg\Contracts\OrganizationContract|\Spatie\SchemaOrg\Contracts\OrganizationContract[] $recognizingAuthority
     *
     * @return static
     *
     * @see https://schema.org/recognizingAuthority
     * @see http://health-lifesci.schema.org
     */
    public function recognizingAuthority($recognizingAuthority)
    {
        return $this->setProperty('recognizingAuthority', $recognizingAuthority);
    }

    /**
     * The anatomical or organ system drained by this vessel; generally refers
     * to a specific part of an organ.
     *
     * @param \Spatie\SchemaOrg\Contracts\AnatomicalStructureContract|\Spatie\SchemaOrg\Contracts\AnatomicalStructureContract[]|\Spatie\SchemaOrg\Contracts\AnatomicalSystemContract|\Spatie\SchemaOrg\Contracts\AnatomicalSystemContract[] $regionDrained
     *
     * @return static
     *
     * @see https://schema.org/regionDrained
     * @see http://health-lifesci.schema.org
     */
    public function regionDrained($regionDrained)
    {
        return $this->setProperty('regionDrained', $regionDrained);
    }

    /**
     * A medical condition associated with this anatomy.
     *
     * @param \Spatie\SchemaOrg\Contracts\MedicalConditionContract|\Spatie\SchemaOrg\Contracts\MedicalConditionContract[] $relatedCondition
     *
     * @return static
     *
     * @see https://schema.org/relatedCondition
     * @see http://health-lifesci.schema.org
     */
    public function relatedCondition($relatedCondition)
    {
        return $this->setProperty('relatedCondition', $relatedCondition);
    }

    /**
     * A medical therapy related to this anatomy.
     *
     * @param \Spatie\SchemaOrg\Contracts\MedicalTherapyContract|\Spatie\SchemaOrg\Contracts\MedicalTherapyContract[] $relatedTherapy
     *
     * @return static
     *
     * @see https://schema.org/relatedTherapy
     * @see http://health-lifesci.schema.org
     */
    public function relatedTherapy($relatedTherapy)
    {
        return $this->setProperty('relatedTherapy', $relatedTherapy);
    }

    /**
     * If applicable, a medical specialty in which this entity is relevant.
     *
     * @param \Spatie\SchemaOrg\Contracts\MedicalSpecialtyContract|\Spatie\SchemaOrg\Contracts\MedicalSpecialtyContract[] $relevantSpecialty
     *
     * @return static
     *
     * @see https://schema.org/relevantSpecialty
     * @see http://health-lifesci.schema.org
     */
    public function relevantSpecialty($relevantSpecialty)
    {
        return $this->setProperty('relevantSpecialty', $relevantSpecialty);
    }

    /**
     * The vasculature the lymphatic structure runs, or efferents, to.
     *
     * @param \Spatie\SchemaOrg\Contracts\VesselContract|\Spatie\SchemaOrg\Contracts\VesselContract[] $runsTo
     *
     * @return static
     *
     * @see https://schema.org/runsTo
     * @see http://health-lifesci.schema.org
     */
    public function runsTo($runsTo)
    {
        return $this->setProperty('runsTo', $runsTo);
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
     * A medical study or trial related to this entity.
     *
     * @param \Spatie\SchemaOrg\Contracts\MedicalStudyContract|\Spatie\SchemaOrg\Contracts\MedicalStudyContract[] $study
     *
     * @return static
     *
     * @see https://schema.org/study
     * @see http://health-lifesci.schema.org
     */
    public function study($study)
    {
        return $this->setProperty('study', $study);
    }

    /**
     * Component (sub-)structure(s) that comprise this anatomical structure.
     *
     * @param \Spatie\SchemaOrg\Contracts\AnatomicalStructureContract|\Spatie\SchemaOrg\Contracts\AnatomicalStructureContract[] $subStructure
     *
     * @return static
     *
     * @see https://schema.org/subStructure
     * @see http://health-lifesci.schema.org
     */
    public function subStructure($subStructure)
    {
        return $this->setProperty('subStructure', $subStructure);
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
