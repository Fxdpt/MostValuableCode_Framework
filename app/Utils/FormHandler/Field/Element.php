<?php

namespace App\FormHandler\Fields;

abstract class Element{


    /************************************** */
    //              PROPERTIES
    /************************************** */


    /**
     * Shortcut key to focus an element
     *
     * @var string
     */
    protected $accesskey;

    /**
     * Class(es) for an element
     *
     * @var string
     */
    protected $class;

    /**
     * Unique id for an element
     *
     * @var string
     */
    protected $id;

    /**
     * Value of "style" attribute
     *
     * @var string
     */
    protected $style;

    /**
     * Value of "title" attribute
     *
     * @var string
     */
    protected $title;

    /**
     * Value of "tabindex" attribute
     *
     * @var int
     */
    protected $tabindex;

    /**
     * Array of attributes name => value
     *
     * @var array
     */
    protected $attributes;


    /************************************** */
    //            GETTERS & SETTERS
    /************************************** */


    /**
     * Get shortcut key to focus an element
     *
     * @return  string
     */ 
    public function getAccesskey() : string
    {
        return $this->accesskey;
    }

    /**
     * Set shortcut key to focus an element
     *
     * @param  string  $accesskey  Shortcut key to focus an element
     *
     * @return  self
     */ 
    public function setAccesskey(string $accesskey) : self
    {
        $this->accesskey = $accesskey;

        return $this;
    }

    /**
     * Get class(es) for an element
     *
     * @return  string
     */ 
    public function getClass() : string
    {
        return $this->class;
    }

    /**
     * Set class(es) for an element
     *
     * @param  string  $class  Class(es) for an element
     *
     * @return  self
     */ 
    public function setClass(string $class) : self
    {
        $this->class = $class;

        return $this;
    }

    public function addClass($class) : self{
        if(empty($this->class)){
            $this->class = trim($class);
        }else{
            $this->class .= ' '. trim($class);
        }

        return $this;
    }

    /**
     * Get unique id for an element
     *
     * @return  string
     */ 
    public function getId() : string
    {
        return $this->id;
    }

    /**
     * Set unique id for an element
     *
     * @param  string  $id  Unique id for an element
     *
     * @return  self
     */ 
    public function setId(string $id) : self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get value of "style" attribute
     *
     * @return  string
     */ 
    public function getStyle() : string
    {
        return $this->style;
    }

    /**
     * Set value of "style" attribute
     *
     * @param  string  $style  Value of "style" attribute
     *
     * @return  self
     */ 
    public function setStyle(string $style) : self
    {
        $this->style = $style;

        return $this;
    }

    /**
     * Append style to the current value
     *
     * @param string $style
     * @return self
     */
    public function addStyle(string $style) : self
    {
        $this->style .= $style;
        return $this;
    }

    /**
     * Get value of "title" attribute
     *
     * @return  string
     */ 
    public function getTitle() : string
    {
        return $this->title;
    }

    /**
     * Set value of "title" attribute
     *
     * @param  string  $title  Value of "title" attribute
     *
     * @return  self
     */ 
    public function setTitle(string $title) : self
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get value of "tabindex" attribute
     *
     * @return  int
     */ 
    public function getTabindex() : int
    {
        return $this->tabindex;
    }

    /**
     * Set value of "tabindex" attribute
     *
     * @param  int  $tabindex  Value of "tabindex" attribute
     *
     * @return  self
     */ 
    public function setTabindex(int $tabindex) : self
    {
        $this->tabindex = $tabindex;

        return $this;
    }

    /**
     * Get array of attributes name => value
     *
     * @return  array
     */ 
    public function getAttributes() : array
    {
        return $this->attributes;
    }

    /**
     * Get a single attribute
     *
     * @param string $name
     * @return string
     */
    public function getAttribute(string $name) : string
    {
        if(array_key_exists($name,$this->attributes)){
            return $this->attributes[$name];
        }
        return 'attribute not found';
    }

    /**
     * Append an attribute in attributes array
     *
     * @param string $name
     * @param string $value
     * @return self
     */
    public function setAttribute(string $name, $value = '' ) : self
    {
        $this->attributes[$name] = $value;
        return $this;
    }

    /**
     * Return a rendered object if it's called as a string
     * @return string
     */
    public function __toString()
    {
        return $this->render();
    }

    abstract public function render();

}