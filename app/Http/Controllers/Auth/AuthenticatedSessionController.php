<?
use Illuminate\Support\Facades\Session;

// ...

class AuthenticatedSessionController extends Controller
{
    /**
     * Handle an incoming authentication request.
     *
     * @param  \App\Http\Requests\Auth\LoginRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(LoginRequest $request)
    {
        $request->authenticate();
        $request->session()->regenerate();

        $intendedUrl = Session::get('url.intended', RouteServiceProvider::HOME);
        Session::forget('url.intended');

        return redirect($intendedUrl);
    }

    // ...
}