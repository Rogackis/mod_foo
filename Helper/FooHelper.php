<?php
/*! \mainpage Dokumentacja kodu źródłowego PHP
 *
 *  \brief     Moduł dla Sportowiada JSM!<br/>
 *  \details   Przykładowy moduł Foo
 *  \author    RoGool
 *  \version   0.0.1
 *  \date      2022
 *  \copyright GNU General Public License version 2 or later; see LICENSE.txt
 */

 namespace Joomla\Module\Foo\Site\Helper;

 // No direct access to this file
defined('_JEXEC') or die;

/*!
 *  \brief      Helper dla mod_foo
 * 
 *  \since      4.0
 */
 class FooHelper
 {
     /*!
      * Pobiera test foo
      *
      * \param   Rejestr         $params  Parametry modułu
      * \param   AplikacjaCMS    $app     Aplikacja
      *
      * \return  tablice
      */
     public static function getText()
     {
         return 'FooHelpertest';
     }
 }