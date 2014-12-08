<?php

namespace Library\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class LibraryUserBundle extends Bundle
{
    public function getParent() {
        return 'FOSUserBundle';
    }
}
