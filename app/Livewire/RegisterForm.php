<?php

namespace App\Livewire;

use Livewire\Component;

class RegisterForm extends Component
{
    public string $email = '';
    public string $password = '';
    public string $firstName = '';
    public string $lastName = '';
    public string $role = 'customer';
    public string $company_name = '';
    public string $vat_number = '';

    protected $rules = [
            'firstName'=>['required','min:2'],
            'lastName'=>['required','min:2'],
            'email'=>['required','email'],
            'password'=>['required','min:8'],
            'company_name'=>['required_if:role,vendor'],
            'vat_number'=>['required_if:role,vendor']
    ];
    public function render()
    {
        return view('livewire.register-form');
    }

    public function submit()
    {
        $this->validate();
        session()->flash('message','Customer was created');
        $this->reset('firstName','lastName','email','password','role','company_name','vat_number');
    }

    public function updated($property)
    {
        $this->validateOnly($property);
    }
}
