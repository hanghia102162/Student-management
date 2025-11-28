<?php

namespace App\Policies;

use App\Models\User;
use App\Models\scoreboard_details;
use Illuminate\Auth\Access\Response;

class ScoreboardDetailsPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return false;
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, scoreboard_details $scoreboardDetails): bool
    {
        return false;
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return false;
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, scoreboard_details $scoreboardDetails): bool
    {
        return false;
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, scoreboard_details $scoreboardDetails): bool
    {
        return false;
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, scoreboard_details $scoreboardDetails): bool
    {
        return false;
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, scoreboard_details $scoreboardDetails): bool
    {
        return false;
    }
}
