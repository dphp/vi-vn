<?php
/* vim: set expandtab tabstop=4 shiftwidth=4 softtabstop=4: */
/* This file MUST be saved in UTF-8 character encoding! */
/**
 * Utf8 support for vi_vn.
 *
 * LICENSE: See LICENSE.md
 * 
 * COPYRIGHT: See COPYRIGHT.md
 *
 * @package             Dphp
 * @subpackage          Vivn
 * @author              Thanh Ba Nguyen <btnguyen2k@gmail.com>
 * @copyright           See COPYRIGHT.md
 * @license             See LICENSE.md
 * @version             $Id$
 * @since               File available since v0.1
 */

namespace Dphp\Vivn;

/**
 * Utf8 support for vi_vn.
 *
 * @package             Dphp
 * @subpackage          Vivn
 * @author              Thanh Ba Nguyen <btnguyen2k@gmail.com>
 * @copyright           See COPYRIGHT.md
 * @license             See LICENSE.md
 * @version             $Id$
 * @since               Class available since v0.1
 */
class Utf8 {

    const ENCODING = 'UTF-8';

    private static $instance = NULL;
    
    private static $tblToneMarkMapping = Array (
            'à' => Constants::MARK_GRAVE,
            'ả' => Constants::MARK_FALLING,
            'ã' => Constants::MARK_TILDE,
            'á' => Constants::MARK_ACUTE,
            'ạ' => Constants::MARK_DROP,
            'ằ' => Constants::MARK_GRAVE,
            'ẳ' => Constants::MARK_FALLING,
            'ẵ' => Constants::MARK_TILDE,
            'ắ' => Constants::MARK_ACUTE,
            'ặ' => Constants::MARK_DROP,
            'ầ' => Constants::MARK_GRAVE,
            'ẩ' => Constants::MARK_FALLING,
            'ẫ' => Constants::MARK_TILDE,
            'ấ' => Constants::MARK_ACUTE,
            'ậ' => Constants::MARK_DROP,
            'è' => Constants::MARK_GRAVE,
            'ẻ' => Constants::MARK_FALLING,
            'ẽ' => Constants::MARK_TILDE,
            'é' => Constants::MARK_ACUTE,
            'ẹ' => Constants::MARK_DROP,
            'ề' => Constants::MARK_GRAVE,
            'ể' => Constants::MARK_FALLING,
            'ễ' => Constants::MARK_TILDE,
            'ế' => Constants::MARK_ACUTE,
            'ệ' => Constants::MARK_DROP,
            'ì' => Constants::MARK_GRAVE,
            'ỉ' => Constants::MARK_FALLING,
            'ĩ' => Constants::MARK_TILDE,
            'í' => Constants::MARK_ACUTE,
            'ị' => Constants::MARK_DROP,
            'ò' => Constants::MARK_GRAVE,
            'ỏ' => Constants::MARK_FALLING,
            'õ' => Constants::MARK_TILDE,
            'ó' => Constants::MARK_ACUTE,
            'ọ' => Constants::MARK_DROP,
            'ồ' => Constants::MARK_GRAVE,
            'ổ' => Constants::MARK_FALLING,
            'ỗ' => Constants::MARK_TILDE,
            'ố' => Constants::MARK_ACUTE,
            'ộ' => Constants::MARK_DROP,
            'ờ' => Constants::MARK_GRAVE,
            'ở' => Constants::MARK_FALLING,
            'ỡ' => Constants::MARK_TILDE,
            'ớ' => Constants::MARK_ACUTE,
            'ợ' => Constants::MARK_DROP,
            'ù' => Constants::MARK_GRAVE,
            'ủ' => Constants::MARK_FALLING,
            'ũ' => Constants::MARK_TILDE,
            'ú' => Constants::MARK_ACUTE,
            'ụ' => Constants::MARK_DROP,
            'ừ' => Constants::MARK_GRAVE,
            'ử' => Constants::MARK_FALLING,
            'ữ' => Constants::MARK_TILDE,
            'ứ' => Constants::MARK_ACUTE,
            'ự' => Constants::MARK_DROP,
            'ỳ' => Constants::MARK_GRAVE,
            'ỷ' => Constants::MARK_FALLING,
            'ỹ' => Constants::MARK_TILDE,
            'ý' => Constants::MARK_ACUTE,
            'ỵ' => Constants::MARK_DROP,
            'À' => Constants::MARK_GRAVE,
            'Ả' => Constants::MARK_FALLING,
            'Ã' => Constants::MARK_TILDE,
            'Á' => Constants::MARK_ACUTE,
            'Ạ' => Constants::MARK_DROP,
            'Ầ' => Constants::MARK_GRAVE,
            'Ẳ' => Constants::MARK_FALLING,
            'Ẵ' => Constants::MARK_TILDE,
            'Ắ' => Constants::MARK_ACUTE,
            'Ặ' => Constants::MARK_DROP,
            'Ầ' => Constants::MARK_GRAVE,
            'Ẩ' => Constants::MARK_FALLING,
            'Ẫ' => Constants::MARK_TILDE,
            'Ấ' => Constants::MARK_ACUTE,
            'Ậ' => Constants::MARK_DROP,
            'È' => Constants::MARK_GRAVE,
            'Ẻ' => Constants::MARK_FALLING,
            'Ẽ' => Constants::MARK_TILDE,
            'É' => Constants::MARK_ACUTE,
            'Ẹ' => Constants::MARK_DROP,
            'Ề' => Constants::MARK_GRAVE,
            'Ể' => Constants::MARK_FALLING,
            'Ễ' => Constants::MARK_TILDE,
            'Ế' => Constants::MARK_ACUTE,
            'Ệ' => Constants::MARK_DROP,
            'Ì' => Constants::MARK_GRAVE,
            'Ỉ' => Constants::MARK_FALLING,
            'Ĩ' => Constants::MARK_TILDE,
            'Í' => Constants::MARK_ACUTE,
            'Ị' => Constants::MARK_DROP,
            'Ò' => Constants::MARK_GRAVE,
            'Ỏ' => Constants::MARK_FALLING,
            'Õ' => Constants::MARK_TILDE,
            'Ó' => Constants::MARK_ACUTE,
            'Ọ' => Constants::MARK_DROP,
            'Ồ' => Constants::MARK_GRAVE,
            'Ổ' => Constants::MARK_FALLING,
            'Ỗ' => Constants::MARK_TILDE,
            'Ố' => Constants::MARK_ACUTE,
            'Ộ' => Constants::MARK_DROP,
            'Ờ' => Constants::MARK_GRAVE,
            'Ở' => Constants::MARK_FALLING,
            'Ỡ' => Constants::MARK_TILDE,
            'Ớ' => Constants::MARK_ACUTE,
            'Ợ' => Constants::MARK_DROP,
            'Ù' => Constants::MARK_GRAVE,
            'Ủ' => Constants::MARK_FALLING,
            'Ũ' => Constants::MARK_TILDE,
            'Ú' => Constants::MARK_ACUTE,
            'Ụ' => Constants::MARK_DROP,
            'Ừ' => Constants::MARK_GRAVE,
            'Ử' => Constants::MARK_FALLING,
            'Ữ' => Constants::MARK_TILDE,
            'Ứ' => Constants::MARK_ACUTE,
            'Ự' => Constants::MARK_DROP,
            'Ỳ' => Constants::MARK_GRAVE,
            'Ỷ' => Constants::MARK_FALLING,
            'Ỹ' => Constants::MARK_TILDE,
            'Ý' => Constants::MARK_ACUTE,
            'Ỵ' => Constants::MARK_DROP);

    private static $tblAllLettersLower = Array (
            'a', 'à', 'ả', 'ã', 'á', 'ạ',
            'ă', 'ằ', 'ẳ', 'ẵ', 'ắ', 'ặ',
            'â', 'ầ', 'ẩ', 'ẫ', 'ấ', 'ậ',
            'b', 'c', 'd', 'đ',
            'e', 'è', 'ẻ', 'ẽ', 'é', 'ẹ',
            'ê', 'ề', 'ể', 'ễ', 'ế', 'ệ',
            'f', 'g', 'h',
            'i', 'ì', 'ỉ', 'ĩ', 'í', 'ị',
            'j', 'k', 'l', 'm', 'n',
            'o', 'ò', 'ỏ', 'õ', 'ó', 'ọ',
            'ô', 'ồ', 'ổ', 'ỗ', 'ố', 'ộ',
            'ơ', 'ờ', 'ở', 'ỡ', 'ớ', 'ợ',
            'p', 'q', 'r', 's', 't',
            'u', 'ù', 'ủ', 'ũ', 'ú', 'ụ',
            'ư', 'ừ', 'ử', 'ữ', 'ứ', 'ự',
            'v', 'w', 'x',
            'y', 'ỳ', 'ỷ', 'ỹ', 'ý', 'ỵ',
            'z');

    private static $tblAllLettersUpper = Array (
            'A', 'À', 'Ả', 'Ã', 'Á', 'Ạ',
            'Ă', 'Ầ', 'Ẳ', 'Ẵ', 'Ắ', 'Ặ',
            'Â', 'Ầ', 'Ẩ', 'Ẫ', 'Ấ', 'Ậ',
            'B', 'C', 'D', 'Đ',
            'E', 'È', 'Ẻ', 'Ẽ', 'É', 'Ẹ',
            'Ê', 'Ề', 'Ể', 'Ễ', 'Ế', 'Ệ',
            'F', 'G', 'H',
            'I', 'Ì', 'Ỉ', 'Ĩ', 'Í', 'Ị',
            'J', 'K', 'L', 'M', 'N',
            'O', 'Ò', 'Ỏ', 'Õ', 'Ó', 'Ọ',
            'Ô', 'Ồ', 'Ổ', 'Ỗ', 'Ố', 'Ộ',
            'Ơ', 'Ờ', 'Ở', 'Ỡ', 'Ớ', 'Ợ',
            'P', 'Q', 'R', 'S', 'T',
            'U', 'Ù', 'Ủ', 'Ũ', 'Ú', 'Ụ',
            'Ư', 'Ừ', 'Ử', 'Ữ', 'Ứ', 'Ự',
            'V', 'W', 'Z',
            'Y', 'Ỳ', 'Ỷ', 'Ỹ', 'Ý', 'Ỵ',
            'Z');

    private static $toneMarkRemovalSearches = NULL;
    private static $toneMarkRemovalReplaces = NULL;
    
    private static $tblToneMarkRemoval = Array(
            'À' => 'A', 'à' => 'a',
            'Ả' => 'A', 'ả' => 'a',
            'Ã' => 'A', 'ã' => 'a',
            'Á' => 'A', 'á' => 'a',
            'Ạ' => 'A', 'ạ' => 'a',
            'Ằ' => 'Ă', 'ằ' => 'ă',
            'Ẳ' => 'Ă', 'ẳ' => 'ă',
            'Ẵ' => 'Ă', 'ẵ' => 'ă',
            'Ắ' => 'Ă', 'ắ' => 'ă',
            'Ặ' => 'Ă', 'ặ' => 'ă',
            'Ầ' => 'Â', 'ầ' => 'â',
            'Ẩ' => 'Â', 'ầ' => 'â',
            'Ẫ' => 'Â', 'ẫ' => 'â',
            'Ấ' => 'Â', 'ấ' => 'â',
            'Ậ' => 'Â', 'ậ' => 'â',
            'È' => 'E', 'è' => 'e',
            'Ẻ' => 'E', 'ẻ' => 'e',
            'Ẽ' => 'E', 'ẻ' => 'e',
            'É' => 'E', 'é' => 'e',
            'Ẹ' => 'E', 'é' => 'e',
            'Ề' => 'Ê', 'ề' => 'ê',
            'Ể' => 'Ê', 'ể' => 'ê',
            'Ễ' => 'Ê', 'ễ' => 'ê',
            'Ế' => 'Ê', 'ế' => 'ê',
            'Ệ' => 'Ê', 'ế' => 'ê',
            'Ì' => 'I', 'ì' => 'i',
            'Ỉ' => 'I', 'ỉ' => 'i',
            'Ĩ' => 'I', 'ĩ' => 'i',
            'Í' => 'I', 'í' => 'i',
            'Ị' => 'I', 'ị' => 'i',
            'Ò' => 'O', 'ò' => 'o',
            'Ỏ' => 'O', 'ỏ' => 'o',
            'Õ' => 'O', 'õ' => 'o',
            'Ó' => 'O', 'ó' => 'o',
            'Ọ' => 'O', 'ọ' => 'o',
            'Ồ' => 'Ô', 'ồ' => 'ô',
            'Ổ' => 'Ô', 'ồ' => 'ô',
            'Ỗ' => 'Ô', 'ỗ' => 'ô',
            'Ố' => 'Ô', 'ố' => 'ô',
            'Ộ' => 'Ô', 'ộ' => 'ô',
            'Ờ' => 'Ơ', 'ờ' => 'ơ',
            'Ở' => 'Ơ', 'ở' => 'ơ',
            'Ỡ' => 'Ơ', 'ỡ' => 'ơ',
            'Ớ' => 'Ơ', 'ớ' => 'ơ',
            'Ợ' => 'Ơ', 'ợ' => 'ơ',
            'Ù' => 'U', 'ù' => 'u',
            'Ủ' => 'U', 'ù' => 'u',
            'Ũ' => 'U', 'ũ' => 'u',
            'Ú' => 'U', 'ú' => 'u',
            'Ụ' => 'U', 'ú' => 'u',
            'Ừ' => 'Ư', 'ừ' => 'ư',
            'Ử' => 'Ư', 'ừ' => 'ư',
            'Ữ' => 'Ư', 'ữ' => 'ư',
            'Ứ' => 'Ư', 'ứ' => 'ư',
            'Ự' => 'Ư', 'ự' => 'ư',
            'Ỳ' => 'Y', 'ỳ' => 'y',
            'Ỷ' => 'Y', 'ỷ' => 'y',
            'Ỹ' => 'Y', 'ỹ' => 'y',
            'Ý' => 'Y', 'ý' => 'y',
            'Ỵ' => 'Y', 'ỵ' => 'y');
    
    private static $deVietnameseSearches = NULL;
    private static $deVietnameseReplaces = NULL;
    private static $tblDeVietnamese = Array(
            'À' => 'A', 'à' => 'a',
            'Ả' => 'A', 'ả' => 'a',
            'Ã' => 'A', 'ã' => 'a',
            'Á' => 'A', 'á' => 'a',
            'Ạ' => 'A', 'ạ' => 'a',
            'Ă' => 'A', 'ă' => 'a',
            'Ằ' => 'A', 'ằ' => 'a',
            'Ẳ' => 'A', 'ẳ' => 'a',
            'Ẵ' => 'A', 'ẵ' => 'a',
            'Ắ' => 'A', 'ắ' => 'a',
            'Ặ' => 'A', 'ặ' => 'a',
            'Â' => 'A', 'â' => 'a',
            'Ầ' => 'A', 'ầ' => 'a',
            'Ẩ' => 'A', 'ẩ' => 'a',
            'Ẫ' => 'A', 'ẫ' => 'a',
            'Ấ' => 'A', 'ấ' => 'a',
            'Ậ' => 'A', 'ậ' => 'a',
            'Đ' => 'D', 'đ' => 'd',
            'È' => 'E', 'è' => 'e',
            'Ẻ' => 'E', 'ẻ' => 'e',
            'Ẽ' => 'E', 'ẽ' => 'e',
            'É' => 'E', 'é' => 'e',
            'Ẹ' => 'E', 'ẹ' => 'e',
            'Ê' => 'E', 'ê' => 'e',
            'Ề' => 'E', 'ề' => 'e',
            'Ể' => 'E', 'ể' => 'e',
            'Ễ' => 'E', 'ễ' => 'e',
            'Ế' => 'E', 'ế' => 'e',
            'Ệ' => 'E', 'ệ' => 'e',
            'Ì' => 'I', 'ì' => 'i',
            'Ỉ' => 'I', 'ỉ' => 'i',
            'Ĩ' => 'I', 'ĩ' => 'i',
            'Í' => 'I', 'í' => 'i',
            'Ị' => 'I', 'ị' => 'i',
            'Ò' => 'O', 'ò' => 'o',
            'Ỏ' => 'O', 'ỏ' => 'o',
            'Õ' => 'O', 'õ' => 'o',
            'Ó' => 'O', 'ó' => 'o',
            'Ọ' => 'O', 'ọ' => 'o',
            'Ô' => 'O', 'ô' => 'o',
            'Ồ' => 'O', 'ồ' => 'o',
            'Ổ' => 'O', 'ổ' => 'o',
            'Ỗ' => 'O', 'ỗ' => 'o',
            'Ố' => 'O', 'ố' => 'o',
            'Ộ' => 'O', 'ộ' => 'o',
            'Ơ' => 'O', 'ơ' => 'o',
            'Ờ' => 'O', 'ờ' => 'o',
            'Ở' => 'O', 'ở' => 'o',
            'Ỡ' => 'O', 'ỡ' => 'o',
            'Ớ' => 'O', 'ớ' => 'o',
            'Ợ' => 'O', 'ợ' => 'o',
            'Ù' => 'U', 'ù' => 'u',
            'Ủ' => 'U', 'ủ' => 'u',
            'Ũ' => 'U', 'ũ' => 'u',
            'Ú' => 'U', 'ú' => 'u',
            'Ụ' => 'U', 'ụ' => 'u',
            'Ư' => 'U', 'ư' => 'u',
            'Ừ' => 'U', 'ừ' => 'u',
            'Ử' => 'U', 'ử' => 'u',
            'Ữ' => 'U', 'ữ' => 'u',
            'Ứ' => 'U', 'ứ' => 'u',
            'Ự' => 'U', 'ự' => 'u',
            'Ỳ' => 'Y', 'ỳ' => 'y',
            'Ỷ' => 'Y', 'ỷ' => 'y',
            'Ỹ' => 'Y', 'ỹ' => 'y',
            'Ý' => 'Y', 'ý' => 'y',
            'Ỵ' => 'Y', 'ỵ' => 'y');

    /**
     * Constructs a new Utf8 object.
     */
    protected function __construct() {
        self::$toneMarkRemovalSearches = Array();
        self::$toneMarkRemovalReplaces = Array();
        foreach ( self::$tblToneMarkRemoval as $key => $value ) {
            self::$toneMarkRemovalSearches[] = $key;
            self::$toneMarkRemovalReplaces[] = $value;
        }
    
        self::$deVietnameseSearches = Array();
        self::$deVietnameseReplaces = Array();
        foreach ( self::$tblDeVietnamese as $key => $value ) {
            self::$deVietnameseSearches[] = $key;
            self::$deVietnameseReplaces[] = $value;
        }
    }
    
    /**
     * Gets instance of this class.
     *
     * @return Utf8
     */
    public static function getInstance() {
        if ( self::$instance === NULL ) {
            self::$instance = new Utf8();
        }
        return self::$instance;
    }
    
    /**
     * Compares 2 Vietnamese letters.
     *
     * @param char
     * @param char
     * @param bool specify if the comparison is case-insensitive or not
     * @return int negative if the first letter is ordered first, positive otherwise,
     * and zero if both letters are equal
     */
    protected function compareLetters($letter1, $letter2, $caseInsensitive=FALSE) {
        $isLower1 = TRUE;
        $pos1 = array_search($letter1, self::$tblAllLettersLower);
        if ( $pos1 === FALSE ) {
            $isLower1 = FALSE;
            $pos1 = array_search($letter1, self::$tblAllLettersUpper);
        }
    
        $isLower2 = TRUE;
        $pos2 = array_search($letter2, self::$tblAllLettersLower);
        if ( $pos2 === FALSE ) {
            $isLower2 = FALSE;
            $pos2 = array_search($letter2, self::$tblAllLettersUpper);
        }
    
        if ( $pos1===FALSE || $pos2===FALSE ) {
            //not Vietnamese letter
            if ( $caseInsensitive ) {
                $letter1 = strtolower($letter1);
                $letter2 = strtolower($letter2);
            }
            return $letter1 < $letter2 ? -1 : ($letter1 > $letter2 ? 1 : 0);
        }
    
        if ( !$caseInsensitive ) {
            if ( $isLower1 ) {
                $pos1 += count(self::$tblAllLettersLower);
            }
            if ( $isLower2 ) {
                $pos2 += count(self::$tblAllLettersLower);
            }
        }
        return $pos1 < $pos2 ? -1 : ($pos1 > $pos2 ? 1 : 0);
    }
    
    //taken from http://vn.php.net/mb_split
    private function mbStringToArray($str) {
        $len = mb_strlen($str);
        $result = Array();
        while ( $len ) {
            $result[] = mb_substr($str, 0, 1, self::ENCODING);
            $str = mb_substr($str, 1, $len, self::ENCODING);
            $len = mb_strlen($str);
        }
        return $result;
    }
    
    /**
     * Compares 2 Vietnamese strings.
     *
     * @param string
     * @param string
     * @param bool specify if the comparison is case-insensitive or not
     * @return int negative if the first string is ordered first, positive otherwise,
     * and zero if both strings are equal
     */
    public function compareStrings($str1, $str2, $caseInsensitive=FALSE) {
        $letters1 = $this->mbStringToArray($str1);
        $letters2 = $this->mbStringToArray($str2);
        $n1 = count($letters1);
        $n2 = count($letters2);
        for ( $i = 0, $n = min(Array($n1, $n2)); $i < $n; $i++ ) {
            $result = $this->compareLetters($letters1[$i], $letters2[$i], $caseInsensitive);
            if ( $result !== 0 ) {
                return $result;
            }
        }
        //all equals, see who is longer
        return $n1 < $n2 ? -1 : ($n1 > $n2 ? 1 : 0);
    }
    
    /**
     * Compares 2 Vietnamese words.
     *
     * This method compares 2 Vietnamese words according to Vietnamese name
     * ordering rule. E.g:
     * <code>
     * - words are trimmed period to comparison
     * - "hòa" is equal to "hoà" (same words, different position of tone mark)
     * </code>
     *
     * @param string
     * @param string
     * @param bool specify if the comparison is case-insensitive or not
     * @return int negative if the first word is ordered first, positive otherwise,
     * zero if both words are equal
     */
    public function compareWords($word1, $word2, $caseInsensitive=FALSE) {
        $word1 = trim($word1);
        $mark1 = $this->getWordToneMark($word1);
        $word1 = $this->removeToneMarks($word1);
        $word2 = trim($word2);
        $mark2 = $this->getWordToneMark($word2);
        $word2 = $this->removeToneMarks($word2);
        $result = $this->compareStrings($word1, $word2, $caseInsensitive);
        if ( $result !== 0 ) {
            //word ordering has higher priority than tone mark ordering
            return $result;
        }
        return $mark1 < $mark2 ? -1 : ($mark1 > $mark2 ? 1 : 0);
    }
    
    /**
     * De-Vietnameses a string.
     *
     * @param string
     * @return string the string after de-Vietnamesed
     */
    public function deVietnamese($str) {
        if ( !is_string($str) ) {
            return $str;
        }
        return str_replace(self::$deVietnameseSearches, self::$deVietnameseReplaces, $str);
    }
    
    /**
     * Detects Vietnamese tone mark from a single letter.
     *
     * @param $letter char
     * @return int see {@link Constants Constants} class for list of tone marks
     */
    public function getLetterToneMark($letter) {
        if ( isset(self::$tblToneMarkMapping[$letter]) ) {
            return self::$tblToneMarkMapping[$letter];
        }
        return Constants::MARK_NONE;
    }
    
    /**
     * Detects Vietnamese tone mark from a word.
     *
     * Note: if word has more than 1 tone mark (which is *not* spelling-correct), only
     * the first tone mark is counted, all other tone marks are discarded.
     *
     * @param $word string
     * @return int see {@link Constants Constants} class for list of tone marks
     */
    public function getWordToneMark($word) {
        if ( !is_string($word) ) {
            return Constants::MARK_NONE;
        }
        $mark = Constants::MARK_NONE;
        $len = mb_strlen($word);
        while ( $len ) {
            $letter = mb_substr($word, 0, 1, self::ENCODING);
            $mark = $this->getLetterToneMark($letter);
            if ( $mark !== Constants::MARK_NONE ) {
                break;
            }
            $word = mb_substr($word, 1, $len, self::ENCODING);
            $len = mb_strlen($word);
        }
        return $mark;
    }
    
    /**
     * Removes tone marks from a string.
     *
     * @param string
     * @return string the string after removing tone marks
     */
    public function removeToneMarks($str) {
        if ( !is_string($str) ) {
            return $str;
        }
        return str_replace(self::$toneMarkRemovalSearches, self::$toneMarkRemovalReplaces, $str);
    }
    
    /**
     * Makes a string lower-cased.
     *
     * @param string
     * @return string the string after lower-cased
     */
    public function toLower($str) {
        if ( !is_string($str) ) {
            return $str;
        }
        return str_replace(self::$tblAllLettersUpper, self::$tblAllLettersLower, $str);
    }
    
    /**
     * Makes a string upper-cased.
     *
     * @param string
     * @return string the string after upper-cased
     */
    public function toUpper($str) {
        if ( !is_string($str) ) {
            return $str;
        }
        return str_replace(self::$tblAllLettersLower, self::$tblAllLettersUpper, $str);
    }
}