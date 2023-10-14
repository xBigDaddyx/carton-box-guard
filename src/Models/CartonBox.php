<?php

namespace Teresa\CartonBoxGuard\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Builder;

class CartonBox extends Model
{

    protected $primary = 'id';

    protected $keyType = 'string';

    protected $primaryKey = 'id';
    public function __construct(array $attributes = [])
    {
        if (!isset($this->connection)) {
            $this->setConnection(config('carton-box-guard.database_connection'));
        }

        if (!isset($this->table)) {
            $this->setTable(config('carton-box-guard.carton.table_name'));
        }

        parent::__construct($attributes);
    }
    protected $guarded = [];
    protected $casts = [
        'is_completed' => 'boolean',
    ];

    public function polybags(): HasMany
    {
        return $this->hasMany(Polybag::class);
    }
    public function scopeCompleted(Builder $query): Builder
    {
        return $query
            ->where('is_completed', true);
    }
}
