<?php

namespace HabuIO\ComposerFileHandler;

use Composer\Script\Event;

class ScriptHandler
{
    public static function buildComposerFile(Event $event)
    {
        $extras = $event->getComposer()->getPackage()->getExtra();
        print_r($extras);
    }
}
