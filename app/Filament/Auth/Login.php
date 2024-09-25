<?php

namespace App\Filament\Auth;

use Filament\Forms\Form;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Component;
use Filament\Pages\Auth\Login as auth;
class Login extends auth
{
    public function form(Form $form): Form
    {
        return $form
            ->schema([
                $this->getUserNameFormComponent(),
                $this->getPasswordFormComponent(),
                $this->getRememberFormComponent(),
            ])
            ->statePath('data');
    }

    protected function getUserNameFormComponent()
    {
        return TextInput::make('username')
            ->label('username')
            ->required()
            ->autocomplete()
            ->autofocus()
            ->extraInputAttributes(['tabindex' => 1]);
    }

    protected function getCredentialsFromFormData(array $data): array
    {
        $login_type = filter_var($data['username'], FILTER_VALIDATE_EMAIL ) ? 'email' : 'name';

        return [
            $login_type => $data['username'],
            'password'  => $data['password'],
        ];
    }
}
