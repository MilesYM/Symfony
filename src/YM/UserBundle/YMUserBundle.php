<?php
// src/YM/UserBundle/YMUserBundle.php
namespace YM\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class YMUserBundle extends Bundle
{
	public function getParent()
    {
        return 'FOSUserBundle';
    }
}
