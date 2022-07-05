<?php

namespace Biig\Component\Domain\Tests\Model\Instantiator\DoctrineConfig;

use Biig\Component\Domain\Tests\fixtures\Entity\FakeModel;
use Biig\Component\Domain\Event\DomainEventDispatcher;
use Biig\Component\Domain\Model\Instantiator\DoctrineConfig\Instantiator;
use Doctrine\Instantiator\InstantiatorInterface;
use PHPUnit\Framework\TestCase;

class InstantiatorTest extends TestCase
{
    public function testItIsInstanceOfInstantiatorOfDoctrine()
    {
        $instantiator = new Instantiator(new DomainEventDispatcher());
        $this->assertInstanceOf(InstantiatorInterface::class, $instantiator);
    }

    public function testItUseTheGivenInstantiator()
    {
        $instantiator = new Instantiator(new DomainEventDispatcher());

        $model = $instantiator->instantiate(new FakeModel);
        $this->assertTrue($model->hasDispatcher());
    }
}


