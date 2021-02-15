<?php

namespace App\Hydra;

use Symfony\Component\Serializer\Annotation\SerializedName;

class View
{
    /**
     * @SerializedName("@id")
     */
    private $id;
    /**
     * @SerializedName("@type")
     */
    private $type;

    /**
     * @SerializedName("hydra:first")
     */
    private $first;

    /**
     * @SerializedName("hydra:last")
     */
    private $last;

    /**
     * @SerializedName("hydra:next")
     */
    private $next;

    /**
     * @return mixed
     */
    public function getFirst()
    {
        return $this->first;
    }

    public function setFirst($first)
    {
        $this->first = $first;

        return $this;
    }

    public function getNext()
    {
        return $this->next;
    }

    public function setNext($next)

    {
        $this->next = $next;
        return $this;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    public function getType()
    {
        return $this->type;
    }

    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    public function getLast()
    {
        return $this->last;
    }

    public function setLast($last)
    {
        $this->last = $last;

        return $this;
    }
}