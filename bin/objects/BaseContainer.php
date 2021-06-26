<?php


abstract class BaseContainer extends BaseObject implements IContainer
{
    /**
     * @var array<BaseObject>
     */
    protected array $childs;

    protected function addChild(BaseObject $child)
    {
        array_push($this->childs,$child);
    }

    public function getContent(){
        $content  = "";
        foreach ($this->childs as $child){
            $content.=$child->generateObjectCode();
        }
        return $content;
    }
    public function setContent(){

    }

    protected function getChild(int $index){
        return $this->childs[$index];
    }

    protected function getChilds(){
        return $this->childs;
    }




}