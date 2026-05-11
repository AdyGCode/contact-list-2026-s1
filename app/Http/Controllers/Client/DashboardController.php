<?php

declare(strict_types=1);

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\View\View;

final class DashboardController extends Controller
{
    public function dashboard(): View
    {
        $user = auth()->user();

        return view('client.static.dashboard')
            ->with('user', $user);
    }
}
