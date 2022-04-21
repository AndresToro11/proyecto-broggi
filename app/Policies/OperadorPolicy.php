<?php

namespace App\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;
use App\Models\Operador;
use App\Models\Usuari;

class OperadorPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Models\Usuari  $usuari
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function viewAny(Usuari $usuari)
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\Usuari  $usuari
     * @param  \App\Models\Operador  $operador
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(Usuari $usuari, Operador $operador)
    {
        //
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\Usuari  $usuari
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(Usuari $usuari)
    {
        //
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\Usuari  $usuari
     * @param  \App\Models\Operador  $operador
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(Usuari $usuari, Operador $operador)
    {
        //
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\Usuari  $usuari
     * @param  \App\Models\Operador  $operador
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(Usuari $usuari, Operador $operador)
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\Usuari  $usuari
     * @param  \App\Models\Operador  $operador
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(Usuari $usuari, Operador $operador)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\Usuari  $usuari
     * @param  \App\Models\Operador  $operador
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(Usuari $usuari, Operador $operador)
    {
        //
    }
}
