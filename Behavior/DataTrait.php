<?php

namespace steevanb\SymfonyFormOptionsBuilder\Behavior;

trait DataTrait
{
    use OptionAccessorsTrait;

    /**
     * @param mixed $data
     * @return $this
     * @link http://symfony.com/doc/3.0/reference/forms/types/form.html#data
     */
    public function setData($data)
    {
        return $this->setOption('data', $data);
    }

    /**
     * @return mixed
     * @link http://symfony.com/doc/3.0/reference/forms/types/form.html#data
     */
    public function getData()
    {
        return $this->getOption('data');
    }

    /**
     * @return $this
     * @link http://symfony.com/doc/3.0/reference/forms/types/form.html#data
     */
    public function removeData()
    {
        return $this->removeOption('data');
    }
}
