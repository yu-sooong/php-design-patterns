<?php

namespace Feature;

use PHPUnit\Framework\TestCase;
use PHPUnit\TextUI\XmlConfiguration\PHPUnit;
use Ting\Dp\ConcreteObserver;
use Ting\Dp\Observer;
use Ting\Dp\Subject;

class ObserverTest extends TestCase
{
    public function test_successful()
    {
        $subject = new Subject();

        $observer1 = new ConcreteObserver("Observer 1");
        $observer2 = new ConcreteObserver("Observer 2");
        $observer3 = new ConcreteObserver("Observer 3");

        $subject->addObserver($observer1);
        $subject->addObserver($observer2);
        $subject->addObserver($observer3);

        $subject->notifyObserver("訊息1");
        $subject->notifyObserver("訊息2");
        $subject->notifyObserver("訊息3");

        $subject->removeObserver($observer1);

        // obeserver1 被移除了 所以剩下兩個
        foreach ($subject->getObservers() as $observer) {
            $this->assertTrue($observer->name !== $observer1->name);
        }

        $this->assertTrue(count($subject->getObservers()) === 2);
    }
}