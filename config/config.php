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
 
 
/**
 * Hooks
 */
$GLOBALS['TL_HOOKS']['modifyFrontendPage'][] = array('\HBAgency\Hooks\ModifyFrontendPage\ForceIEEdge', 'run');
$GLOBALS['TL_HOOKS']['getCacheKey'][] = array('\HBAgency\Hooks\GetCacheKey\ForceIEEdge', 'run');