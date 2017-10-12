<?php

namespace WideImage\Operation;

/**
 * Correct exif class
 *
 * @package Internal/Operations
 * @link https://stackoverflow.com/questions/35399303/how-to-properly-call-a-wideimage-php-class-from-an-external-file
 * @link https://stackoverflow.com/questions/3657023/how-to-detect-shot-angle-of-photo-and-auto-rotate-for-website-display-like-desk
 * @link https://github.com/smottt/WideImage/pull/11/commits/264dd9183670b3bb7904d481ef1403caf1068039
 */
class CorrectExif
{
    /**
     * @param \WideImage\Image $image
     * @param int $orientation
     * @return \WideImage\Image
     */
    function execute($image, $orientation)
    {
        switch ($orientation) {
            case 2:
                return $image->mirror();
                break;

            case 3:
                return $image->rotate(180);
                break;

            case 4:
                return $image->rotate(180)->mirror();
                break;

            case 5:
                return $image->rotate(90)->mirror();
                break;

            case 6:
                return $image->rotate(90);
                break;

            case 7:
                return $image->rotate(-90)->mirror();
                break;

            case 8:
                return $image->rotate(-90);
                break;

            default:
                return $image->copy();
        }
    }
}
