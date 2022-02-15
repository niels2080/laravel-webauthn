<?php

namespace LaravelWebauthn\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @method static \LaravelWebauthn\Models\WebauthnKey create(\Illuminate\Contracts\Auth\Authenticatable $user, string $keyName, \Webauthn\PublicKeyCredentialSource $publicKeyCredentialSource)
 * @method static void login(\Illuminate\Contracts\Auth\Authenticatable $user)
 * @method static void logout()
 * @method static bool check()
 * @method static \Webauthn\PublicKeyCredentialRequestOptions prepareAssertion(\Illuminate\Contracts\Auth\Authenticatable $user)
 * @method static bool validateAssertion(\Illuminate\Contracts\Auth\Authenticatable $user, array $data)
 * @method static \Webauthn\PublicKeyCredentialCreationOptions prepareAttestation(\Illuminate\Contracts\Auth\Authenticatable $user)
 * @method static \LaravelWebauthn\Models\WebauthnKey validateAttestation(\Illuminate\Contracts\Auth\Authenticatable $user, array $data, string $keyName)
 * @method static bool webauthnEnabled()
 * @method static bool enabled(\Illuminate\Contracts\Auth\Authenticatable $user)
 * @method static bool canRegister(\Illuminate\Contracts\Auth\Authenticatable $user)
 * @method static bool hasKey(\Illuminate\Contracts\Auth\Authenticatable $user)
 * @method static string redirects(string $redirect, $default = null)
 *
 * @see \LaravelWebauthn\Webauthn
 */
class Webauthn extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return \LaravelWebauthn\Services\Webauthn::class;
    }
}
