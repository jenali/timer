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

namespace Jenali\Timer\Presenter;

/**
 * Interface PresenterInteface
 * @package Jenali\Timer\Presenter
 */
interface PresenterInterface
{
    public function show(array $data);
}