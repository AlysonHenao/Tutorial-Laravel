<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Demon extends Model
{
    /**
     * DEMON ATTRIBUTES
     * $this->attributes['id'] - int - contains the demon primary key
     * $this->attributes['name'] - string - contains the demon name
     * $this->attributes['blood_amount'] - int - contains the demon blood amount
     * $this->attributes['hierarchy'] - string - contains the demon hierarchy
     * $this->attributes['created_at'] - string - contains the demon creation timestamp
     * $this->attributes['updated_at'] - string - contains the demon update timestamp
     */

    protected $fillable = ['name', 'blood_amount', 'hierarchy'];

    public static function validate(Request $request): void
    {
        $request->validate([
            'name'         => 'required',
            'blood_amount' => 'required|integer',
            'hierarchy'    => 'required',
        ]);
    }

    public function getId(): int
    {
        return $this->attributes['id'];
    }

    public function getName(): string
    {
        return $this->attributes['name'];
    }

    public function setName(string $name): void
    {
        $this->attributes['name'] = $name;
    }

    public function getBloodAmount(): int
    {
        return $this->attributes['blood_amount'];
    }

    public function setBloodAmount(int $bloodAmount): void
    {
        $this->attributes['blood_amount'] = $bloodAmount;
    }

    public function getHierarchy(): string
    {
        return $this->attributes['hierarchy'];
    }

    public function setHierarchy(string $hierarchy): void
    {
        $this->attributes['hierarchy'] = $hierarchy;
    }

    public function getCreatedAt(): string
    {
        return $this->attributes['created_at'];
    }

    public function getUpdatedAt(): string
    {
        return $this->attributes['updated_at'];
    }
}