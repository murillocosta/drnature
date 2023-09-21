<?php

namespace App\Providers;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Validator;
use Illuminate\Translation\TranslationServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->register(TranslationServiceProvider::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Validator::extend('cpf', function ($attribute, $value, $parameters, $validator) {
            $value = preg_replace('/[^0-9]/', '', $value);

            if (strlen($value) != 11) {
                return false;
            }

            // Verifica se todos os dígitos são iguais (CPF inválido)
            if (preg_match('/(\d)\1{10}/', $value)) {
                return false;
            }

            $sum = 0;

            for ($i = 0; $i < 9; $i++) {
                $sum += intval($value[$i]) * (10 - $i);
            }

            $remainder = $sum % 11;
            $digit1 = ($remainder < 2) ? 0 : 11 - $remainder;

            if ($value[9] != $digit1) {
                return false;
            }

            $sum = 0;

            for ($i = 0; $i < 10; $i++) {
                $sum += intval($value[$i]) * (11 - $i);
            }

            $remainder = $sum % 11;
            $digit2 = ($remainder < 2) ? 0 : 11 - $remainder;

            return $value[10] == $digit2;
        });
    }
}
