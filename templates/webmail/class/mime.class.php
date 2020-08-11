<?php

/**
 * mime.class
 *
 * This file loads classes needed to handle mime messages.
 *
 * @copyright &copy; 2003-2007 The SquirrelMail Project Team
 * @license http://opensource.org/licenses/gpl-license.php GNU Public License
 * @version $Id: mime.class.php 12127 2007-01-13 20:07:24Z kink $
 * @package squirrelmail
 * @subpackage mime
 */

/** @ignore */
if (! defined('SM_PATH')) define('SM_PATH','../');

/** Load in the entire MIME system */
require_once(SM_PATH . 'class/mime/Rfc822Header.class.php');
require_once(SM_PATH . 'class/mime/MessageHeader.class.php');
require_once(SM_PATH . 'class/mime/AddressStructure.class.php');
require_once(SM_PATH . 'class/mime/Message.class.php');
require_once(SM_PATH . 'class/mime/SMimeMessage.class.php');
require_once(SM_PATH . 'class/mime/Disposition.class.php');
require_once(SM_PATH . 'class/mime/Language.class.php');
require_once(SM_PATH . 'class/mime/ContentType.class.php');

?>