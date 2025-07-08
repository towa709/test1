<?php

namespace App\Providers;

use App\Actions\Fortify\CreateNewUser;
use App\Actions\Fortify\ResetUserPassword;
use App\Actions\Fortify\UpdateUserPassword;
use App\Actions\Fortify\UpdateUserProfileInformation;
use Illuminate\Support\ServiceProvider;
use Laravel\Fortify\Fortify;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class FortifyServiceProvider extends ServiceProvider
{
  public function register()
  {
    //
  }

  public function boot()
  {
    Fortify::createUsersUsing(CreateNewUser::class);
    Fortify::updateUserProfileInformationUsing(UpdateUserProfileInformation::class);
    Fortify::updateUserPasswordsUsing(UpdateUserPassword::class);
    Fortify::resetUserPasswordsUsing(ResetUserPassword::class);

    // 登録ページのView設定
    Fortify::registerView(function () {
      return view('auth.register');
    });

    // ログインページのView設定（必要に応じて）
    Fortify::loginView(function () {
      return view('auth.login');
    });
  }
}
