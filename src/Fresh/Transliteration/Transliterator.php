<?php
/*
 * This file is part of the Transliteration library
 *
 * (c) Artem Genvald <genvaldartem@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Fresh\Transliteration;

/**
 * Transliterator
 *
 * @author Artem Genvald <genvaldartem@gmail.com>
 */
class Transliterator
{
    /**
     * Transliterate Ukrainian text to English
     *
     * @param string $ukrainianText Ukrainian text
     *
     * @return string
     */
    public function fromUkrainianToEnglish($ukrainianText)
    {
        $transliterator = new UkrainianToEnglish();

        return $transliterator($ukrainianText);
    }
}
