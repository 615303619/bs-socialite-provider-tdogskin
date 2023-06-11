<?php

namespace TDoGSkinChina\BsSocialiteProviderTDoGSkin;

use SocialiteProviders\Manager\SocialiteWasCalled;

class TDoGSkinExtendSocialite
{
    /**
     * Execute the provider.
     */
    public function handle(SocialiteWasCalled $socialiteWasCalled)
    {
        $socialiteWasCalled->extendSocialite('tdogskin', __NAMESPACE__.'\Provider');
    }
}
