<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class EncryptUserPasswords extends Command
{
    // Komutun terminalde çalıştırılacağı hali
    protected $signature = 'users:encrypt-passwords';

    // Komutun kısa açıklaması
    protected $description = 'Düz şifreleri Hash::make ile şifreler';
}