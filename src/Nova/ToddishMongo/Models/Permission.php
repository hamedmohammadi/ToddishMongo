<?php
namespace Toddish\Verify\Models;

class Permission extends BaseModel
{
    /**
     * Roles
     *
     * @return object
     */
    public function roles()
    {
        return $this->belongsToMany(
                'Toddish\Verify\Models\Role',
                $this->prefix.'permission_role'
            )
        ->withTimestamps();
    }
}