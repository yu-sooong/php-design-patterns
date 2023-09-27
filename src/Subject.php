<?php

namespace Ting\Dp;

class Subject
{
    public array $observers = [];

    public function addObserver(Observer $observer): void
    {
        $this->observers[] = $observer;
    }

    public function removeObserver(Observer $observer): void
    {
        $index = array_search($observer, $this->observers);
        if (false !== $index) {
            unset($this->observers[$index]);
        }
    }

    public function notifyObserver($data): void
    {
        /** @var Observer  $observer */
        foreach ($this->observers as $observer) {
            $observer->update($data);
        }
    }

    public function getObservers(): array
    {
        return $this->observers;
    }
}