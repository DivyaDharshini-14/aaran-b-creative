<?php

return [
    App\Providers\AppServiceProvider::class,
    App\Providers\FortifyServiceProvider::class,
    App\Providers\JetstreamServiceProvider::class,
    App\Providers\EventServiceProvider::class,

    Aaran\Aadmin\Providers\AadminServiceProvider::class,
    Aaran\Member\Providers\MemberServiceProvider::class,
    Aaran\Web\Providers\WebServiceProvider::class,
];
