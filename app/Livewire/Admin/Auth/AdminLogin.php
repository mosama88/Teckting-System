<?php

namespace App\Livewire\Admin\Auth;

use Livewire\Component;
use App\Http\Requests\Admin\AdminLoginRequest;

class AdminLogin extends Component
{

    public $username, $password, $remember;

    public function rules()
    {
        return (new AdminLoginRequest())->rules();
    }


    public function messages()
    {
        return (new AdminLoginRequest())->messages();
    }

    public function submit()
    {
        $this->validate();
    }

    public function render()
    {
        return view('admin.auth.admin-login');
    }
}