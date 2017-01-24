<?php

namespace Viweb\LexiconBundle\Entity;
use Sylius\Component\Resource\Model\ResourceInterface;
use Sylius\Component\Resource\Model\TranslatableInterface;
use Sylius\Component\Resource\Model\TranslatableTrait;

/**
 * Entry
 */
class Entry implements ResourceInterface, TranslatableInterface
{
    use TranslatableTrait {
    __construct as intializeTranslationCollection;
    }

    public function __construct()
{
    $this->currentLocale = $this->fallbackLocale = 'en';
    $this->intializeTranslationCollection();
}
    /**
     * @var int
     */
    private $id;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    public function createTranslation()
    {
        return new EntryTranslation();
    }

    public function getTerm()
    {
        return $this->getTranslation()->getTerm();
    }

    public function getDefinition()
    {
        return $this->getTranslation()->getDefinition();
    }
}

