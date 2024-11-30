<?php

use Livewire\Volt\Actions;
use Livewire\Volt\CompileContext;
use Livewire\Volt\Contracts\Compiled;
use Livewire\Volt\Component;

new class extends Component implements Livewire\Volt\Contracts\FunctionalComponent
{
    public static CompileContext $__context;

    use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

    #[\Livewire\Attributes\Locked()]
    public $user;

    public $name;

    public $email;

    public $current_password;

    public $new_password;

    public $new_password_confirmation;

    public $delete_confirm_password;

    public function mount()
    {
        (new Actions\InitializeState)->execute(static::$__context, $this, get_defined_vars());

        (new Actions\CallHook('mount'))->execute(static::$__context, $this, get_defined_vars());
    }

    public function updateProfile()
    {
        $arguments = [static::$__context, $this, func_get_args()];

        return (new Actions\CallMethod('updateProfile'))->execute(...$arguments);
    }

    public function updatePassword()
    {
        $arguments = [static::$__context, $this, func_get_args()];

        return (new Actions\CallMethod('updatePassword'))->execute(...$arguments);
    }

    public function destroy(\Illuminate\Http\Request $request)
    {
        $arguments = [static::$__context, $this, func_get_args()];

        return (new Actions\CallMethod('destroy'))->execute(...$arguments);
    }

    protected function rules()
    {
        return (new Actions\ReturnRules)->execute(static::$__context, $this, []);
    }

};