<?php

/**
 * Class Alarm
 */
class Alarm extends HomeChecker
{
    /**
     * @param HomeStatus $home
     * @throws Exception
     */
    public function check(HomeStatus $home)
    {
        if (!$home->alarmOn) {
            throw new Exception('The alarm has not been set!! Abort abort.');
        }

        $this->next($home);
    }
}