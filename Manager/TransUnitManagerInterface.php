<?php

namespace Lexik\Bundle\TranslationBundle\Manager;

/**
 * TransUnit manager interface.
 *
 * @author Cédric Girard <c.girard@lexik.fr>
 */
interface TransUnitManagerInterface
{
    /**
     * Returns a new TransUnit instance with new translations for each $locales.
     *
     * @param array $locales
     * @return TransUnitInterface
     */
    public function newInstance($locales = array());

    /**
     * Create a new trans unit.
     *
     * @param string  $keyName
     * @param string  $domainName
     * @param boolean $flush
     * @return TransUnitInterface
     */
    public function create($keyName, $domainName, $flush = false);

    /**
     * Add a new translation to the given trans unit.
     *
     * @param TransUnitInterface    $transUnit
     * @param string                $locale
     * @param string                $content
     * @param FileInterface         $file
     * @param boolean               $flush
     * @return TranslationInterface
     */
    public function addTranslation(TransUnitInterface $transUnit, $locale, $content, FileInterface $file = null, $flush = false);

    /**
     * Update the translated content of a trans unit for the given locale.
     *
     * @param TransUnitInterface    $transUnit
     * @param string                $locale
     * @param string                $content
     * @param boolean               $flush
     * @param boolean               $merge
     * @param \DateTime|null        $modifiedOn
     * @param boolean|null          $confirmed
     * @return TranslationInterface
     */
    public function updateTranslation(TransUnitInterface $transUnit, $locale, $content, $flush = false, $merge = false, \DateTime $modifiedOn = null,$confirmed=null);

    /**
     * Update the content of each translations for the given trans unit.
     *
     * @param TransUnitInterface    $transUnit
     * @param array                 $translations
     * @param boolean               $flush
     * @param array               $confirmations
     */
    public function updateTranslationsContent(TransUnitInterface $transUnit, array $translations, $flush = false,array $confirmations,array $updatedAt);
}
