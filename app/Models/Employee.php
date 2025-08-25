<?php

namespace App\Models;

class Employee
{
    public string $firstName;
    public string $lastName;
    public string $email;
    public string $hireDate;
    public ?string $endDate; // null, falls noch aktiv
    public bool $isActive;
    public ?int $position_id;
    public ?int $department_id;
    public string $created_at;
    public string $updated_at;
}
