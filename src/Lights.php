<?php

/**
 * Class Lights
 */
class Lights extends HomeChecker
{
    /**
     * @param HomeStatus $home
     * @throws Exception
     */
    public function check(HomeStatus $home)
    {
        if (!$home->lightsOff) {
            throw new Exception('The lights are still on!! Abort abort.');
        }

        $this->next($home);
    }
}