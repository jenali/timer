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
 * Interface TimerInterface
 * @package Jenali\Timer
 */
interface  TimerInterface
{
    const ALL = 'All';

    const DEFAULT_NAME = 'app';

    const START_TIME_KEY = 'startTime';

    const END_TIME_KEY = 'endTime';

    const START_MEMORY_KEY = 'startMemory';

    const END_MEMORY_KEY = 'endMemory';

    /**
     * TimerInterface constructor.
     */
    public function __construct();

    /**
     * @param string $text
     * @return array;
     */
    public function mark(string $text=''): array ;

    /**
     * Start timer for name.
     *
     * @param string $name
     */
    public function start(string $name = self::DEFAULT_NAME): void;

    /**
     * End Timer for name.
     *
     * @param string $name
     */
    public function end(string $name = self::DEFAULT_NAME): void;

    /**
     * Get timer info for name or all.
     *
     * @param string $name
     * @return mixed
     */
    public function getInfo(string $name = self::ALL);
}