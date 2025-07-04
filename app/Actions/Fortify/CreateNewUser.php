<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Laravel\Jetstream\Jetstream;
use App\Models\Doctor;
use App\Models\UserDetails;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array  $input
     * @return \App\Models\User
     */
    public function create(array $input)
    {

        Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => $this->passwordRules(),
            'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['accepted', 'required'] : '',
        ])->validate();

        $user =  User::create([
            'name' => $input['name'],
            'email' => $input['email'],
            // 'type' => $input['type'], 
            'type' => 'doctor', 
            'password' => Hash::make($input['password']),
        ]);

        $doctorInfo = Doctor::create([
                'doc_id' => $user->id,
                'status' => 'active',
        ]);

        $userInfo = UserDetails::create([
    'user_id' => $user->id,
    'status' => 'active',
]);

        // dd('Entered CreateNewUser', $user);


         return $user;
    }
    
}
