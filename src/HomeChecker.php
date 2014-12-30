<?php

/**
 * Class HomeChecker
 */
abstract class HomeChecker
{

    /**
     * @var
     */
    protected $successor;

    /**
     * @param HomeStatus $home
     * @return mixed
     */
    public abstract function check(HomeStatus $home);

    /**
     * @param HomeChecker $successor
     */
    public function succeedWith(HomeChecker $successor)
    {
        $this->successor = $successor;
    }

    /**
     * @param HomeStatus $home
     */
    public function next(HomeStatus $home)
    {
        if ($this->successor) {
            $this->successor->check($home);
        }
    }
}