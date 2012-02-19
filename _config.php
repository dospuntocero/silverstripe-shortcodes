<?php

ShortcodeParser::get()->register('youtube',		array('ShortCodes','YouTubeShortCodeHandler'));
ShortcodeParser::get()->register('vimeo',		array('ShortCodes','VimeoShortCodeHandler'));
ShortcodeParser::get()->register('soundcloud',	array('ShortCodes','SoundcloudShortCodeHandler'));

