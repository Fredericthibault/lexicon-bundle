<?php
namespace Viweb\LexiconBundle\Entity;

use Sylius\Component\Resource\Model\AbstractTranslation;
use Sylius\Component\Resource\Model\ResourceInterface;

/**
 * EntryTranslation
 */
class EntryTranslation extends AbstractTranslation implements ResourceInterface
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $term;

    /**
     * @var string
     */
    private $definition;

    /**
     * @var string
     */
    private $firstLetter;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set term
     *
     * @param string $term
     *
     * @return EntryTranslation
     */
    public function setTerm($term)
    {
        $this->term = $term;

        return $this;
    }

    /**
     * Get term
     *
     * @return string
     */
    public function getTerm()
    {
        return $this->term;
    }

    /**
     * Set definition
     *
     * @param string $definition
     *
     * @return EntryTranslation
     */
    public function setDefinition($definition)
    {
        $this->definition = $definition;

        return $this;
    }

    /**
     * Get definition
     *
     * @return string
     */
    public function getDefinition()
    {
        return $this->definition;
    }

    /**
     * Set firstLetter
     *
     * @param string $firstLetter
     *
     * @return EntryTranslation
     */
    public function setFirstLetter($firstLetter)
    {
        $this->firstLetter = $firstLetter;

        return $this;
    }

    /**
     * Get firstLetter
     *
     * @return string
     */
    public function getFirstLetter()
    {
        return $this->firstLetter;
    }
}

