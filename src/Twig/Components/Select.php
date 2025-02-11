<?php

namespace App\Twig\Components;

use Symfony\UX\LiveComponent\Attribute\AsLiveComponent;
use Symfony\UX\LiveComponent\Attribute\LiveAction;
use Symfony\UX\LiveComponent\Attribute\LiveProp;
use Symfony\UX\LiveComponent\ComponentToolsTrait;
use Symfony\UX\LiveComponent\DefaultActionTrait;

#[AsLiveComponent]
final class Select
{
    use DefaultActionTrait;
    use ComponentToolsTrait;

    #[LiveProp(writable: true)]
    public string $foods = "";

    public string $result = "failed";

    public function getFoods(): string {
        return $this->foods;
    }

    #[LiveAction]
    public function change(): void {
        // do something
        $this->emit('changeRequest', ['value' => 'test']);
        $this->result = "success";
    }
}
