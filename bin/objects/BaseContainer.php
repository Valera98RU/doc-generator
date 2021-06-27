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

    public function addHeading(string $level): Heading
    {
        $heading = new Heading($level);
        $this->addChild($heading);
        return $heading;
    }

    public function addParagraph():Paragraph
    {
        $paragraph = new Paragraph();
        $this->addChild($paragraph);
        return $paragraph;
    }

    public function addTextLink():TextLink
    {
        $textLink = new TextLink();
        $this->addChild($textLink);
        return $textLink;
    }

    public function addImage():Image
    {
        $image = new Image();
        $this->addChild($image);
        return $image;
    }


}