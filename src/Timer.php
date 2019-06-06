<?php
/*
 * This file is part of the Timer package.
 *
 * Copyright (c) Evhenii Yolkin
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @author Evhenii Yolkin <e.v.yolkin@gmail.com>
 */
namespace Jenali\Timer;

/**
 * Class Timer
 * @package Jenali\Timer
 */
class Timer implements TimerInterface
{
    /**
     * @var int
     */
    protected $time;

    /**
     * @var int
     */
    protected $memory;

    /**
     * @var array
     */
    protected $timers = [];



    /**
     * TimerInterface constructor.
     */
    public function __construct()
    {
        $this->time = $this->getMicroTime();
        $this->memory = $this->getMemory();
    }
    /**
     * Start timer for name.
     *
     * @param string $name
     */
    public function start(string $name = self::DEFAULT_NAME): void
    {
        if(!in_array($name, $this->timers)) {
            $this->timers[$name][self::START_TIME_KEY] = $this->getMicroTime();
            $this->timers[$name][self::START_MEMORY_KEY] = $this->getMemory();
        }
    }

    /**
     * End Timer for name.
     *
     * @param string $name
     */
    public function end(string $name = self::DEFAULT_NAME): void
    {
        if(!in_array($name, $this->timers)) {
            $this->timers[$name][self::END_TIME_KEY] = $this->getMicroTime();
            $this->timers[$name][self::END_MEMORY_KEY] = $this->getMemory();
        }
    }

    /**
     * Get timer info for name or all.
     *
     * @param string $name
     * @return mixed
     */
    public function getInfo(string $name = self::ALL)
    {

    }

    /**
     * @return int
     */
    private function getMicroTime()
    {
        return microtime(true);
    }

    /**
     * @return int
     */
    private function getMemory()
    {
        return memory_get_peak_usage(true);
    }

    /**
     * @param string $text
     * @return array;
     */
    public function mark(string $text = ''): array
    {
        // @todo: implement this method;
        return [];
    }
}