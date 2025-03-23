<?php

namespace App\Livewire;

use App\Models\User;
use App\Service\TokenServiceInterface;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Sleep;
use Illuminate\Support\Str;
use Illuminate\Validation\Rules\Password;
use Livewire\Attributes\Rule;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Livewire\WithFileUploads;

class SingupForm extends Component
{
    use WithFileUploads;

    #[Rule('required')]
    #[Rule('unique:users,name')]
    public $username;

    #[Rule('required')]
    #[Rule('email:rfc,dns')]
    #[Rule('unique:users,email')]
    public $email;

    public $password;

    public $password_confirm;

    public $token;

    #[Validate('nullable|image|max:1024')]
    public $profile_pic;


    protected function rules() {
        return [
            'password' => ['required', Password::min(8)->letters()->numbers()->symbols(),],
            'password_confirm' => 'required|required_with:password|same:password',
            'email' => 'unique:users,email_address',
            'token' => [
                'required',
                'min:6',
                'max:6',
                function ($attribute, $value, $fail) {
                    $tokenService = app(TokenServiceInterface::class);
                    if(!$tokenService->validateToken($value)) {
                        $fail('Token Wrong !!! ');
                    }
                }
            ]
        ];
    }


    public function uploadPhoto($user) {
        $extension = $this->profile_pic->getClientOriginalExtension();
        $random = Str::random(6);
        $uploadedFile = $this->profile_pic->storeAs(path: "users",name: "{$user->name}-$random-avatar.$extension", options: 'public');
        return $uploadedFile;
    }


    public function register() {
        $this->validate();

        $newUser = User::create([
            'name' => $this->username,
            'email' => $this->email,
            'password' => Hash::make($this->password),
            'role' => 'users'
        ]);

        $path =  $this->uploadPhoto($newUser);

        $newUser->profile_pic = $path;
        $newUser->save();

      


        return redirect()->route('login')->with('message',"Akun Berhasil Di buat, Silakan Login !");



        
    }


    public function render()
    {
        return view('livewire.singup-form');
    }
}
