<?php
namespace JoeFallon\PhpTime;

class Chronograph
{
    const MILLISEC_PER_SECOND = 1000.0;

    /** @var float */
    private $_timeStartInMicroSeconds;
    /** @var float */
    private $_timeStopInMicroSeconds;

    /**
     * This function starts the chronograph.
     */
    public function start()
    {
        $this->_timeStartInMicroSeconds = microtime(true);
    }

    /**
     * This function stops the chronograph.
     */
    public function stop()
    {
        $this->_timeStopInMicroSeconds = microtime(true);
    }

    /**
     * This function returns the time that has passed between when start() was
     * called and when stop() was called in milliSeconds (mS).
     *
     * @return float
     */
    public function getElapsedTimeInMillisecs()
    {
        $seconds = $this->getElapsedTimeInSeconds();
        $milliSeconds = $seconds * self::MILLISEC_PER_SECOND;

        return round($milliSeconds, 1);
    }

    /**
     * This function returns the time that has passed between when start() was
     * called and when stop() was called in seconds (S).
     *
     * @return float
     */
    public function getElapsedTimeInSeconds()
    {
        if(!$this->_timeStartInMicroSeconds)
        {
            return 0;
        }

        $microSecsStart = $this->_timeStartInMicroSeconds;
        $microSecsStop = $this->_timeStopInMicroSeconds;

        if($microSecsStop == 0)
        {
            // The function stopTimer was not called.
            $microSecsStop = microtime(true);
        }

        $seconds = $microSecsStop - $microSecsStart;

        return round($seconds, 4);
    }
}
