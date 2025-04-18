<?php
class Plan {
    protected string $name;
    protected string $price;
    protected string $service;

    public function getName(): string {
        return $this->name;
    }

    public function getPrice(): string {
        return $this->price;
    }

    public function getService(): string {
        return $this->service;
    }
}