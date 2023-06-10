<?php

namespace App\Policies;

use App\Enums\RoleEnum;
use App\Models\Product;
use App\Models\User;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Support\Facades\Auth;

class ProductPolicy
{
    private bool $IS_SUPER_USER;
    private bool $IS_PRODUCT_MANAGER;
    private bool $IS_VENDOR;

    public function __construct()
    {

        $userRoleId = Auth::user()->role_id;
        $this->IS_SUPER_USER = $userRoleId === RoleEnum::SUPER_USER;
        $this->IS_PRODUCT_MANAGER = $userRoleId === RoleEnum::PRODUCT_MANAGER;
        $this->IS_VENDOR = $userRoleId === RoleEnum::VENDOR;
    }

    /**
     * Determine whether the user can index models.
     */
    public function index(): bool
    {
        return $this->IS_PRODUCT_MANAGER or $this->IS_VENDOR or $this->IS_SUPER_USER;
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(): bool
    {
        return $this->IS_PRODUCT_MANAGER or $this->IS_VENDOR or $this->IS_SUPER_USER;
    }

    /**
     * Determine whether the user can edit the model.
     */
    public function edit(): bool
    {
        return $this->IS_PRODUCT_MANAGER or $this->IS_VENDOR or $this->IS_SUPER_USER;
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return $this->IS_SUPER_USER;
    }

    /**
     * Determine whether the user can store models.
     */
    public function store(): bool
    {
        return $this->IS_PRODUCT_MANAGER or $this->IS_VENDOR or $this->IS_SUPER_USER;
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Product $product): bool
    {
        return true;
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function destroy(User $user, Product $product): bool
    {
        return $this->IS_PRODUCT_MANAGER or $this->IS_VENDOR or $this->IS_SUPER_USER;
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Product $product): bool
    {
        return true;
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Product $product): bool
    {
        return true;
    }

    /**
     * @return bool
     */
    public function archive(): bool
    {
        return $this->IS_PRODUCT_MANAGER or $this->IS_VENDOR or $this->IS_SUPER_USER;
    }
}
