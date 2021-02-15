<?php

namespace App\Hydra;

use Symfony\Component\Serializer\Annotation\SerializedName;

class ApiCollection
{
    /**
     * @SerializedName("@context")
     */
    private $context;

    /**
     * @SerializedName("@id")
     */
    private $id;

    /**
     * @SerializedName("@type")
     */
    private $type;

    /**
     * @SerializedName("hydra:totalItems")
     */
    private $totalItems;

    /**
     * @SerializedName("hydra:member")
     * @var Item[]
     */
    private $items;

    /**
     *
     * @SerializedName("hydra:view")
     * @var View
     */
    private $view;

    public function getContext(): string
    {
        return $this->context;
    }

    public function setContext($context): self
    {
        $this->context = $context;

        return $this;
    }

    public function getItems()
    {
        return $this->items;
    }

    public function setItems($items)
    {
        $this->items = $items;
        return $this;
    }

    public function getTotalItems()
    {
        return $this->totalItems;
    }

    public function setTotalItems($totalItems): self
    {
        $this->totalItems = $totalItems;

        return $this;
    }

    public function getMembers()
    {
        return $this->members;
    }

    public function setMembers($members): self
    {
        $this->members = $members;

        return $this;
    }

    public function getView(): View
    {
        return $this->view;
    }

    public function setView(View $view): ApiCollection
    {
        $this->view = $view;

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
}