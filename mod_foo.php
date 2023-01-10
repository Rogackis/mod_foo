<?php
/*! \mainpage Dokumentacja kodu źródłowego PHP
 *
 *  \brief     Moduł dla Sportowiada JSM!<br/>
 *  \details   Przykładowy moduł Foo
 *  \author    RoGool
 *  \version   0.0.5
 *  \date      2022
 *  \copyright GNU General Public License version 2 or later; see LICENSE.txt
 */

// No direct access to this file
defined('_JEXEC') or die;

use Joomla\CMS\Helper\ModuleHelper;
use Joomla\Module\Foo\Site\Helper\FooHelper;

$test  = FooHelper::getText();

require ModuleHelper::getLayoutPath('mod_foo', $params->get('layout', 'default'));