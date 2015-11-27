<?php

namespace steevanb\FormUtils\OptionsBuilder;

class Integer extends AbstractOptionBuilder
{
    use Behavior\FormTypeTrait;
    use Behavior\GroupingTrait;
    use Behavior\ScaleTrait;
    use Behavior\RoundingModeTrait;
    use Behavior\PlaceHolderTrait;
    use Behavior\AutofocusTrait;
    use Behavior\AutocompleteTrait;
}
