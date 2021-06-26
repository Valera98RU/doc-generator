<?php


abstract class BaseContainer extends BaseObject implements IContainer
{
    /**
     * @var array<BaseObject>
     */
    protected array $childs;

    protected function addChild(BaseObject $child)
    {
        array_push($this->childs, $child);
    }


    public function getContent(): string
    {
        $content = $this->content;
        foreach ($this->childs as $child) {
            $content .= $child->generateObject();
        }
        return $content;
    }

    protected function getChild(int $index)
    {
        return $this->childs[$index];
    }

    protected function getChilds()
    {
        return $this->childs;
    }

    public function addHeading(Heading $heading){
        $this->addChild($heading);
    }

    public function addParagraph(Paragraph $textBlock)
    {
        $this->addChild($textBlock);
    }

    public function addTextLink(TextLink $textLink)
    {
        $this->addChild($textLink);
    }

    public function addImage(Image $image)
    {
        $this->addChild($image);
    }


}