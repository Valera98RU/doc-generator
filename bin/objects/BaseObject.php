<?php


abstract class BaseObject implements IObject
{

    private $margin;
    private $padding;
    private $color;
    private $border;
    private $objectTag;
    private array $styles = [];
    private array $attributes = [];
    protected string $content = "";

    public function setBorder(string $border){
        $this->border = $border;
        $this->addAttribute('border',$border);
    }
    /**
     * @return mixed
     */
    public function getObjectTag()
    {
        return $this->objectTag;
    }

    /**
     * @param string $objectTag
     */
    public function setObjectTag(string $objectTag): void
    {
        $this->objectTag = $objectTag;
    }


    /**
     * @return mixed
     */
    public function getMargin()
    {
        return $this->margin;
    }

    /**
     * @param mixed $margin
     */
    public function setMargin($margin): void
    {
        $this->margin = $margin;
        $this->addStyleParameter('margin',$margin."px");
    }

    /**
     * @return mixed
     */
    public function getPadding()
    {
        return $this->padding;
    }

    /**
     * @param mixed $padding
     */
    public function setPadding($padding): void
    {
        $this->padding = $padding;
        $this->addStyleParameter('padding',$padding."px");
    }

    /**
     * @return mixed
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * @param mixed $color
     */
    public function setColor($color): void
    {
        $this->color = $color;
        $this->addStyleParameter('color',$color);
    }


    public function setContent(string $content)
    {
        $this->content = $content;
    }

    public abstract function getContent();

    public function generateObject(): string
    {
        return $this->generateHtml();
    }


    private function generateHtml(): string
    {

        $attribute = $this->getAttributes();
        $objectHtmlCode = "<" . $this->objectTag . " ".$attribute. " >";
        $objectHtmlCode .= $this->getContent();
        $objectHtmlCode .= "</" . $this->objectTag . ">";

        return $objectHtmlCode;

    }

    private function getStyles(): string
    {
        $style = implode(";", $this->styles);
        return $style;
    }

    protected function getAttributes(): string
    {
        if (!key_exists("style", $this->attributes) and !empty($this->styles)) {
            $this->addAttribute("style", $this->getStyles());
        }
        $attribute = implode(" ", $this->attributes);

        return $attribute;
    }

    public function addAttribute(string $attribute, $value)
    {
        array_push($this->attributes, $attribute . "='" . $value . "'");

    }
    public function setTextStyle(string $testStyle){
       // $this->addStyleParameter('font');
    }

    public function addStyleParameter(string $parameter, $value)
    {
        array_push($this->styles, $parameter . ":" . $value);
    }

    public function setTitle(string $title)
    {
        $this->addAttribute('title', $this);
    }


}