<?php

namespace App\Policies;

use App\Models\Order;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class OrderPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user)
    {
        if ($user->hasRole("customer")) {
            return true;
        } else {
            return $user->hasPermissionTo("order:delete");
        }
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Order $order)
    {
        if ($user->hasRole("customer")) {
            return $order->user_id === $user->id;
        } else {
            return $user->hasPermissionTo("order:view");
        }
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user)
    {
        if ($user->hasRole("customer")) {
            return true;
        } else {
            return $user->hasPermissionTo("order:create");
        }
    }

    public function delete(User $user, Order $order)
    {
        if ($user->hasRole("customer")) {
            return $order->user_id === $user->id;
        } else {
            return $user->hasPermissionTo("order:delete");
        }
    }

}
