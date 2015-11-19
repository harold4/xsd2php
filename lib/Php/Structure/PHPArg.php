<?php
namespace Goetas\Xsd\XsdToPhp\Php\Structure;

use Zend\Code\Generator\DocBlock\Tag\TagInterface;

class PHPArg
{

    protected $doc;

    protected $type;

    protected $name;

    protected $default;

    /** @var TagInterface[] */
    protected $tags = array();

    public function __construct($name = null)
    {
        $this->name = $name;
    }

    public function getDoc()
    {
        return $this->doc;
    }

    public function setDoc($doc)
    {
        $this->doc = $doc;
        return $this;
    }

    /**
     * @return PHPClass
     */
    public function getType()
    {
        return $this->type;
    }

    public function setType(PHPClass $type)
    {
        $this->type = $type;
        return $this;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    public function getDefault()
    {
        return $this->default;
    }

    public function setDefault($default)
    {
        $this->default = $default;
        return $this;
    }

    /**
     * @return TagInterface[]
     */
    public function getTags()
    {
        return $this->tags;
    }

    /**
     * @param TagInterface[] $tags
     * @return $this
     * @throws \Exception
     */
    public function setTags($tags)
    {
        if (!is_array($tags)) throw new \Exception("Invalid argument \$tags!");
        $this->tags = $tags;
        return $this;
    }

    /**
     * @param TagInterface $tag
     * @return $this
     */
    public function addTag(TagInterface $tag) {
        $this->tags[] = $tag;
        return $this;
    }

}
