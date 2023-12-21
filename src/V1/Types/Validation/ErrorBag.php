<?php

declare(strict_types=1);

namespace LightSideSoftware\EVat\V1\Types\Validation;

use function array_key_exists;
use function array_merge;
use function array_merge_recursive;
use function array_reduce;

/**
 * @author Szekeres Tamás <szektam2@gmail.com>
 */
final class ErrorBag
{
    /**
     * @var array<string, array<int, string>>
     */
    private array $errors = [];

    public function addError(string $key, string $message): void
    {
        if (array_key_exists($key, $this->errors)) {
            $this->errors[$key][] = $message;
        } else {
            $this->errors[$key] = [$message];
        }
    }

    public function hasErrors(?string $key = null): bool
    {
        return !empty($this->getErrors($key));
    }

    public function merge(self $errorBag): self
    {
        $this->errors = array_merge_recursive($this->errors, $errorBag->getErrors());

        return $this;
    }

    /**
     * @return array<string, array<int, string>>
     */
    public function getErrors(?string $key = null): array
    {
        if ($key) {
            return $this->errors[$key] ?? [];
        } else {
            return $this->errors;
        }
    }

    /**
     * @return array<int, string>
     */
    public function getMessages(): array
    {
        return array_reduce(
            $this->errors,
            static fn (array $allMessages, array $messages) => array_merge($allMessages, $messages),
            []
        );
    }
}
