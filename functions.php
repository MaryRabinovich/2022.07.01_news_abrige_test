<?php declare(strict_types=1);

/**
 * Обрезает строку по пробельному символу,
 * оставляя целевое или меньшее количество символов
 */
function getCorrectlyEndedSubstr(string $string, int $length): string
{
    $string = substr($string, 0, $length + 1);

    do {
        $lastChar = substr($string, -1);
        $string = substr($string, 0, $length);
        $length--;
    } while (!ctype_space($lastChar));
    
    return $string;
}

/**
 * Возвращает массив с корректно разделёнными 
 * началом строки
 * и концовкой из двух последних слов с многоточием 
 * 
 * @return array[
 * 
 *      основная часть обрезанной строки,
 * 
 *      конец строки с многоточием для ссылки
 * ]
 */
function chopStringToMainPartAndEnding(string $string): array
{
    $position = strlen($string) - 1;

    while (!ctype_space($string[$position])) $position--;
    $position--;
    while (!ctype_space($string[$position])) $position--;

    return [
        substr($string, 0, $position),
        substr($string, $position) . ' ...'
    ];
}
