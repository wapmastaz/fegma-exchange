<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Faq;
use App\Models\Order;
use App\Models\Rate;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class DashboardController extends Controller
{
    //
    public function index()
    {
        // all orders
        $countAllOrders = Order::count();

        // approved order
        $countApprovedOrders = Order::where('status', 1)->count();

        // all Rates
        $countRates = Rate::count();

        // all Faqs
        $countFaqs = Faq::count();

        // orders
        $orders = Order::latest()->take(5)->get();

        return view('admin.dashboard.index', [
            'title' => 'Dashboard',
            'countAllOrder' => $countAllOrders,
            'countApprovedOrders' => $countApprovedOrders,
            'countRates' => $countRates,
            'countFaqs' => $countFaqs,
            'orders' => $orders,
        ]);
    }

    public function profile()
    {
        return view('admin.dashboard.profile', [
            'title' => 'Profile',
            'user' => auth()->user(),
        ]);
    }

    public function changePassword(Request $request, $id)
    {
        // find user
        $user = User::find($id);
        if (!$user) {
            $notify[] = ['error', 'User not found'];
            return redirect()->back()->with('notify', $notify);
        }
        // validate
        $data = $request->validate([
            'old_password' => ['required'],
            'password' => ['required', 'string', 'confirmed'],
        ]);

        // check if old password match
        if (!Hash::check($data['old_password'], $user->password)) {
            $notify[] = ['error', 'Old password incorrect'];
            return redirect()->back()->with('notify', $notify);
        }

        // update password
        $user->password = Hash::make($data['password']);
        $notify[] = ['notice', 'Password changed successfully'];
        return redirect()->back()->with('notify', $notify);
    }

    public function updateProfile(Request $request, $id)
    {

        $data = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
        ]);

        // find user
        $user = User::find($id);
        if (!$user) {
            $notify[] = ['error', 'User not found'];
            return redirect()->back()->with('notify', $notify);
        }

        if ($request->image != null) {
            // validate
            $request->validate([
                'image' => ['image', 'mimes:png,jpg,gif,jpeg'],
            ]);
            // handle file upload
            $avatar = $request->image;
            $fileName = 'avatar-' . uniqid('AV') . '.' . $avatar->getClientOriginalExtension();
            # for save original image
            $originalPath = $avatar->storeAs('avatar', $fileName, 'public');
            // update
            $user->avatar = $fileName;
        }

        $user->name = $data['name'];
        $user->email = $data['email'];
        $user->username = $request->username;
        $user->save();
        // redirect
        $notify[] = ['notice', 'Profile updated successfully'];
        return redirect()->back()->with('notify', $notify);
    }
}