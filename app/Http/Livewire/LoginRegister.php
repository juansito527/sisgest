<?php

namespace App\Http\Livewire;

use Livewire\Component;

class LoginRegister extends Component
{

    public $users, $email, $password, $name;
    public $registerForm = false;

    public function vistaReturn()
    {
        return view('livewire.login-register');
    }
    

   /*  public function login()
    {
        $validatedDate = $this->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
        
        if(\Auth::attempt(array('email' => $this->email, 'password' => $this->password))){
                session()->flash('message', "You are Login successful.");
        }else{
            session()->flash('error', 'email and password are wrong.');
        }
    } */

  

   
}
