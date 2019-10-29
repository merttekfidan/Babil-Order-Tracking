<?php

namespace App\Policies;

use App\ShippingCompany;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class ShippingCompanyPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any shipping companies.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        if ($user->hasAnyRole('admin')) {
            return true;
        }
    }
}
