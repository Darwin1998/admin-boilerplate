<?php

namespace Domain\Auth\Admin\DataTransferObjects;

final class AdminData 
{
    public function __construct(
        public readonly string $first_name,
        public readonly string $last_name,
        public readonly string $email,
        public readonly string $password,
        public readonly bool $active = false,
    ){ 
    }

    public static function fromArray(array $data): self
    {
        return new self(
            first_name: $data['first_name'],
            last_name: $data['last_name'],
            email: $data['email'],
            password: $data['password'],
            active: $data['active'],
        );
    }
}