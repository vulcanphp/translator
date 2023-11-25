<?php

namespace VulcanPhp\Translator\Interfaces;

interface ITranslatorDriver
{
    public function getEngine(): ITranslatorEngine;

    public function getManager(): ITranslatorManager;

    public function translate($text = ''): ?string;
}
