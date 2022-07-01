<?php declare(strict_types=1);

require 'data.php';
require 'functions.php';

$newsAbrigeString = getCorrectlyEndedSubstr($news, NEWS_ABRIGE_LENGTH);

$newsAbrigeArray = chopStringToMainPartAndEnding($newsAbrigeString);

require 'template.php';
