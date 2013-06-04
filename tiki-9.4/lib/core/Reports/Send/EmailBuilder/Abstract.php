<?php
// (c) Copyright 2002-2012 by authors of the Tiki Wiki CMS Groupware Project
//
// All Rights Reserved. See copyright.txt for details and a complete list of authors.
// Licensed under the GNU LESSER GENERAL PUBLIC LICENSE. See license.txt for details.
// $Id: Abstract.php 41112 2012-04-25 21:56:43Z pkdille $

abstract class Reports_Send_EmailBuilder_Abstract
{
	abstract protected function getTitle();
	abstract public function getOutput(array $changes);
}
