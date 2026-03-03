<?php

declare(strict_types=1);

namespace App\DependencyInjection;

use Symfony\Component\DependencyInjection\EnvVarProcessorInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * Builds MAILER_DSN from MAILER_USER, MAILER_PASSWORD, MAILER_HOST, MAILER_PORT.
 * Password is URL-encoded so special characters (@, #, etc.) work in the DSN.
 */
class MailerDsnEnvVarProcessor implements EnvVarProcessorInterface
{
    public static function getProvidedTypes(): array
    {
        return ['mailer_dsn' => 'string'];
    }

    public function getEnv(string $prefix, string $name, \Closure $getEnv): string
    {
        $user = $getEnv('MAILER_USER');
        $password = $getEnv('MAILER_PASSWORD');
        $host = $getEnv('MAILER_HOST');
        $port = $getEnv('MAILER_PORT');

        if ($user === '' || $host === '') {
            throw new RuntimeException('MAILER_USER and MAILER_HOST must be set.');
        }

        $port = $port !== '' ? $port : '465';
        $safeUser = rawurlencode((string) $user);
        $safePassword = rawurlencode((string) $password);

        return sprintf('smtps://%s:%s@%s:%s', $safeUser, $safePassword, $host, $port);
    }
}
