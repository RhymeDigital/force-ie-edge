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

namespace HBAgency\Hooks\ModifyFrontendPage;


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
     * $GLOBALS['TL_HOOKS']['modifyFrontendPage']
     * 
	 * Add the "X-UA-Compatible: IE=edge" header
	 * @param string $strBuffer     The template string bufffer
	 * @return string $strTemplate  The name of the template
	 *
	 * @return string
	 */
	public function run($strBuffer, $strTemplate)
	{
	    $arrHeaders = headers_list();
	
	    if(strpos($strTemplate, 'fe_') !== false && !in_array('X-UA-Compatible: IE=edge', $arrHeaders))
	    {
    	    header('X-UA-Compatible: IE=edge');
	    }
	    
	    return $strBuffer;
	}


}