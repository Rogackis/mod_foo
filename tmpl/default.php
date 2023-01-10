<?php
/*! \mainpage Dokumentacja kodu źródłowego PHP
 *
 *  \brief     Moduł dla Sportowiada JSM!<br/>
 *  \details   Przykładowy moduł Foo
 *  \author    RoGool
 *  \version   0.0.3
 *  \date      2022
 *  \copyright GNU General Public License version 2 or later; see LICENSE.txt
 */

// No direct access to this file
defined('_JEXEC') or die;

use Joomla\CMS\Language\Text;

echo "01. " . Text::_('MOD_FOO_DESCRIPTION') . "<br>"; 
echo "02. " . $test;
?>

<br/>

03. 
<?php $domain = $params->get('domain', 'https://www.joomla.org'); ?>

<a href="<?php echo $domain; ?>"> 
	<?php echo Text::_('MOD_FOO_FIELD_URL_LABEL' ); ?> 
</a>