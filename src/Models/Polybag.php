<?php

namespace Teresa\CartonBoxGuard\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Teresa\CartonBoxGuard\Traits\HasStringId;

class Polybag extends Model
{
    use HasStringId;

    protected $keyType = 'string';

    protected $primaryKey = 'id';

    protected $fillable = [];

    protected $guarded = [];

    public function prefixable(): array
    {
        return [
            'id_prefix' => 'CB',
            'company_id' => auth()->user()->company->id,
            'company_short_name' => auth()->user()->company->short_name,
        ];
    }

    public function __construct(array $attributes = [])
    {
        if (! isset($this->connection)) {
            $this->setConnection(config('carton-box-guard.database_connection'));
        }

        if (! isset($this->table)) {
            $this->setTable(config('carton-box-guard.polybag.table_name'));
        }

        parent::__construct($attributes);
    }

    public function cartonBox(): BelongsTo
    {
        return $this->belongsTo(CartonBox::class);
    }
}
