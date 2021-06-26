<?php


abstract class BaseObject implements IObject
{

    private $margin;
    private $padding;
    private $color;
    private $objectTag;
    private array $styles;
    private array $attributes;

    /**
     * @return mixed
     */
    public function getObjectTag()
    {
        return $this->objectTag;
    }

    /**
     * @param mixed $objectTag
     */
    public function setObjectTag($objectTag): void
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
    }


    public abstract function setContent();
    public abstract function getContent();

    public function generateObjectCode():string{
        return $this->generateHtml();
    }


    private function generateHtml():string{
        $style = $this->getStyles();
        $attribute = $this->getAttributes();
        $objectHtmlCode = "<".$this->objectTag.">";
        $objectHtmlCode.= $this->getContent();
        $objectHtmlCode.="</".$this->objectTag.">";

        return$objectHtmlCode;

    }
    private function getStyles(): string{
        $style = implode(";",$this->styles);
        return $style;
    }
    private function getAttributes(): string{
        if(!key_exists("style",$this->attributes)){
            $this->addAttribute("style",$this->getStyles());
        }
        $attribute = implode(" ",$this->attributes);

        return $attribute;
    }
    public function addAttribute(string $attribute, $value){
        array_push($this->attributes,$attribute."='".$value."'");

    }
    public function addStyleParameter(string $parameter,$value){
        array_push($this->styles,$parameter.":".$value);
    }


}