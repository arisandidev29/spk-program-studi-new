<?php

namespace App\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule as ValidationRule;
use Livewire\Attributes\Rule;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Livewire\WithFileUploads;

class ProfileForm extends Component
{

    use WithFileUploads;

    public $name;


    public $email;

    #[Validate('nullable|image|max:1024')]
    public $profile_pic;

    protected function rules()
    {
        return [
            'name' => ['required', ValidationRule::unique('users', 'name')->ignore(Auth::id())],
            'email' => ['required', 'email:rfc,dns', ValidationRule::unique('users', 'email')->ignore(Auth::id())]
        ];
    }


    public function mount()
    {
        $this->fill(
            Auth::user()->only(['name', 'email'])
        );
    }

    public function editProfile()
    {
        $this->validate();
        $user = User::find(Auth::id());
        $user->name = $this->name;
        $user->email = $this->email;
        if($this->profile_pic) {
            $oldImage = $user->profile_pic;
            Storage::disk('public')->delete($oldImage);
            $path = $this->uploadPhoto($user);
            $user->profile_pic = $path;
        }

        $user->save();


        $this->fill($user->only(['name','email']));

        $this->dispatch('profile-updated');






    }

     public function uploadPhoto($user) {
        $extension = $this->profile_pic->getClientOriginalExtension();
        $random = Str::random(6);
        $uploadedFile = $this->profile_pic->storeAs(path: "users",name: "{$user->name}-$random-avatar.$extension", options: 'public');
        return $uploadedFile;
    }

    public function render()
    {
        return view('livewire.profile-form');
    }
}
