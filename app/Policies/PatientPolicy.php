<?php

namespace App\Policies;

use App\User;
use App\Patient;
use Illuminate\Auth\Access\HandlesAuthorization;

class PatientPolicy
{
    use HandlesAuthorization;


//la fonction before sera la premiere fonction à tester, si ça retourne vrai la systeme ne testes pas le reste
    public function before($user, $ability){
        if($user->is_admin )
        {
            return true;
        }
    }
    /**
     * Determine whether the user can view the patient.
     *
     * @param  \App\User  $user
     * @param  \App\Patient  $patient
     * @return mixed
     */
    public function view(User $user, Patient $patient)
    {
        return true;
    }

    /**
     * Determine whether the user can create patients.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    //tout le monde peut créer un patient
    public function create(User $user)
    {
        return true;
    }

    /**
     * Determine whether the user can update the patient.
     *
     * @param  \App\User  $user
     * @param  \App\Patient  $patient
     * @return mixed
     */

    public function update(User $user, Patient $patient)
    {
        //l'user propriétaire du patient peut le modifier(user authentifié)
        //c'est une condition
        return $user->id == $patient->user_id;
    }

    /**
     * Determine whether the user can delete the patient.
     *
     * @param  \App\User  $user
     * @param  \App\Patient  $patient
     * @return mixed
     */
    public function delete(User $user, Patient $patient)
    {
        return $user->id == $patient->user_id;

    }
}
