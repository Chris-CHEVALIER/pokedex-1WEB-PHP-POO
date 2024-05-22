<?php

class Pokemon
{
    // Attributs 
    private int $id;
    private int $number;
    private string $name;
    private string $image;
    private string $type1;
    private string $type2;
    private string $nature;

    // Méthodes
    public function __construct(int $id, int $number, string $name, string $image, string $type1, string $type2, string $nature)
    {
        $this
            ->setId($id)
            ->setNumber($number)
            ->setName($name)
            ->setImage($image)
            ->setType1($type1)
            ->setType2($type2)
            ->setNature($nature);
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): self
    {
        $this->id = $id;
        return $this;
    }

    public function getNumber(): int
    {
        return $this->number;
    }

    public function setNumber(int $number): self
    {
        $this->number = $number;
        return $this;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;
        return $this;
    }

    public function getImage(): string
    {
        return $this->image;
    }

    public function setImage(string $image): self
    {
        $this->image = $image;
        return $this;
    }

    public function getType1(): string
    {
        return $this->type1;
    }

    public function setType1(string $type1): self
    {
        $this->type1 = $type1;
        return $this;
    }

    public function getType2(): string
    {
        return $this->type2;
    }

    public function setType2(string $type2): self
    {
        $this->type2 = $type2;
        return $this;
    }

    public function getNature(): string
    {
        return $this->nature;
    }

    public function setNature(string $nature): self
    {
        $this->nature = $nature;
        return $this;
    }
}
