<?php

/**
 * Force IE Edge
 *
 * Copyright (c) 2014 HBagency
 *
 * @package ForceIEEdge
 * @link    http://www.hbagency.com
 * @license http://www.gnu.org/licenses/lgpl-3.0.html LGPL
 */

namespace HBAgency\Hooks\GetCacheKey;


/**
 * Class ForceIEEdge
 *
 * Add the "X-UA-Compatible: IE=edge" header
 * @copyright  HBAgency 2014
 * @author     Blair Winans <bwinans@hbagency.com>
 * @package    ForceIEEdge
 */
class ForceIEEdge extends \Controller
{
    
    /**
     * $GLOBALS['TL_HOOKS']['getCacheKey']
     * 
	 * Add the "X-UA-Compatible: IE=edge" header
	 * @param string $strCacheKey     The cache key
	 *
	 * @return string
	 */
	public function run($strCacheKey)
	{
	    $arrHeaders = headers_list();
	    
	    if(!in_array('X-UA-Compatible: IE=edge', $arrHeaders))
	    {
    	    header('X-UA-Compatible: IE=edge');
	    }
	    
	    return $strCacheKey;
	}


}