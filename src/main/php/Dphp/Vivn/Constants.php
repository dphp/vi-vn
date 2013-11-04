<?php
/* vim: set expandtab tabstop=4 shiftwidth=4 softtabstop=4: */
/**
 * Defines global constants used by Dphp\Vivn package.
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
 * Defines global constants used by Dphp\Vivn package.
 *
 * @package             Dphp
 * @subpackage          Vivn
 * @author              Thanh Ba Nguyen <btnguyen2k@gmail.com>
 * @copyright           See COPYRIGHT.md
 * @license             See LICENSE.md
 * @version             $Id$
 * @since               Class available since v0.1
 */
class Constants {
    //sorting order NONE, GRAVE, FALLING, TILDE, ACUTE, DROP
    //trat tu sap xep: không dấu, huyền, hỏi, ngã, sắc, nặng
    
    /**
     * Khong dau
     */
    const MARK_NONE    = 0; //khong dau
    
    /**
     * Dau huyen
     */
    const MARK_GRAVE   = 1; //huyen
    
    /**
     * Dau hoi
     */
    const MARK_FALLING = 2; //hoi
    
    /**
     * Dau nga
     */
    const MARK_TILDE   = 3; //nga
    
    /**
     * Dau sac
     */
    const MARK_ACUTE   = 4; //sac
    
    /**
     * Dau nang
     */
    const MARK_DROP    = 5; //nang    
}
