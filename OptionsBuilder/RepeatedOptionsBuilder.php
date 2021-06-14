<?php

declare(strict_types=1);

namespace steevanb\SymfonyFormOptionsBuilder\OptionsBuilder;

use Symfony\Component\Form\Extension\Core\Type\RepeatedType;

class RepeatedOptionsBuilder extends AbstractOptionsBuilder
{
    public static function getBuilderType(): string
    {
        return RepeatedType::class;
    }

    public function setFirstOptions(array $options = []): OptionsBuilderInterface
    {
        return $this->setOption('first_options', $options);
    }

    public function getFistOptions(): array
    {
        return $this->getOption('first_options');
    }

    public function removeFistOptions(): OptionsBuilderInterface
    {
        return $this->removeOption('first_options');
    }

    public function setSecondOptions(array $options = []): OptionsBuilderInterface
    {
        return $this->setOption('second_options', $options);
    }

    public function getSecondOptions(): array
    {
        return $this->getOption('second_options');
    }

    public function removeSecondOptions(): OptionsBuilderInterface
    {
        return $this->removeOption('second_options');
    }
}
