<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\BankDetails;
use App\Models\BusinessDetails;
use App\Models\Vendor;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function dashboard()
    {
        $title = [
            'title' => 'Dashboard'
        ];
        return view('admin.dashboard', $title);
    }

    public function login(Request $request)
    {
        $title = [
            'title' => 'Login'
        ];

        if ($request->isMethod('post')) {

            $data = $request->all();

            $rules = [
                'email' => 'email|required',
                'password' => 'required',
            ];

            $messages = [
                'email.required' => 'Email field is required.',
                'email.email' => 'Valid email is required.',
                'password.required' => 'Password field is required.',
            ];

            $this->validate($request, $rules, $messages);
            $isActive = 1;

            if (Auth::guard('admin')->attempt([
                'email' => $data['email'],
                'password' => $data['password'],
                'status' => $isActive

            ])) {
                return redirect()->route('adminDashboard');
            } else {

                return redirect()->back()->with('error', 'Invalid email or password');
            }
        }

        return view('admin.auth.login', $title);
    }

    public function checkAdminPassword(Request $request)
    {
        $adminData = $request->all();

        if (Hash::check($adminData['old_password'], Auth::guard('admin')->user()->password)) {
            return 'true';
        } else {
            return 'false';
        }
    }

    public function updateAdminPassword(Request $request)
    {
        $title = [
            'title' => 'Update password'
        ];

        if ($request->isMethod('post')) {

            $data = $request->all();

            $rules = [
                'old_password' => 'required',
                'new_password' => 'required|min:8',
                'confirm_password' => 'required|min:8',
            ];

            $messages = [
                'old_password.required' => 'Old password is required.',
                'new_password.required' => 'New password is required.',
                'confirm_password.required' => 'Confirm password is required.',
            ];

            $this->validate($request, $rules, $messages);

            if (Hash::check($request->old_password, Auth::guard('admin')->user()->password)) {
                if ($request->new_password === $request->confirm_password) {
                    if (strlen($request->new_password) > 7) {
                        $admin = Admin::findorFail(Auth::guard('admin')->user()->id);
                        if ($admin) {
                            $admin->password = Hash::make($request->new_password);
                            $admin->update();
                            return redirect()->route('adminDashboard')->with('success', 'Your password successful updated');
                        }
                    } else {
                        return redirect()->back()->with('error', 'New password should contains at least 8 characters');
                    }
                } else {
                    return redirect()->back()->with('error', 'New password does not match');
                }
            } else {
                return redirect()->back()->with('error', 'Current password is not correct');
            }

            return redirect()->route('adminDashboard');
        }

        $adminData = Admin::where('email', Auth::guard('admin')->user()->email)->get();

        return view('admin.auth.update-password', $title, compact('adminData'));
    }

    public function updateAdminProfile(Request $request)
    {
        $title = [
            'title' => 'Update profile'
        ];

        if ($request->isMethod('post')) {

            $data = $request->all();

            $rules = [
                'name' => 'required|regex:/^[\pL\s\-]+$/u'
            ];

            $messages = [
                'name.required' => 'Name is required.'
            ];

            $this->validate($request, $rules, $messages);

            $admin = Admin::findorFail(Auth::guard('admin')->user()->id);

            $admin->name = $data['name'];

            if ($request->hasfile('profile')) {
                $image_file = $request->file('profile');

                if ($image_file->isValid()) {
                    $extension = $image_file->getClientOriginalExtension();
                    $filename = time() . '.' . $extension;
                    $image_path = 'profile/admin/';
                    $image_file->move($image_path, $filename);
                    $final_image_path = $image_path . $filename;
                }

                $admin->profile = $final_image_path;
            }

            $admin->update();

            return redirect()->route('adminDashboard')->with('success', 'Your profile successful updated');
        }

        return view('admin.auth.update-profile', $title);
    }


    public function updateVendorDetails(Request $request, $slug)
    {
        $title = [
            'title' => 'Update information'
        ];
        if ($slug == "personal") {
            if ($request->isMethod('post')) {
                $data = $request->all();
                $rules = [
                    'name' => 'required|regex:/^[\pL\s\-]+$/u',
                    'contact' => 'required',
                    'address' => 'required',
                    'email' => 'required|email'
                ];

                $messages = [
                    'name.required' => 'Name is required.',
                    'contact.required' => 'Contact is required.',
                    'address.required' => 'Address is required.',
                    'email.required' => 'Name is required.',
                    'email.email' => 'Valid email is required.'
                ];

                $this->validate($request, $rules, $messages);

                $vendor = Vendor::where('email', Auth::guard('admin')->user()->email)->first();
                $admin = Admin::where('email', Auth::guard('admin')->user()->email)->first();

                $admin->name = $data['name'];

                $vendor->name = $data['name'];
                $vendor->contact = $data['contact'];
                $vendor->address = $data['address'];

                $vendor->update();
                $admin->update();

                // echo "<pre>"; print_r($vendor); die;
                //dd($vendor);

                return redirect()->back()->with('success', 'Your information successful updated');
            }

            $vendorDetails = Vendor::where('id', Auth::guard('admin')->user()->vendor_id)->first()->toArray();
            return view('vendor.update-details', $title)->with(compact('slug', 'vendorDetails'));
        } else if ($slug == "business") {
            if ($request->isMethod('post')) {
                $data = $request->all();
                $rules = [
                    'name' => 'required|regex:/^[\pL\s\-]+$/u',
                    'contact' => 'required',
                    'address' => 'required',
                    'email' => 'required|email',
                    'town' => 'required|regex:/^[\pL\s\-]+$/u',
                    'tin_number' => 'required',
                    'business_license' => 'required',
                    'website' => 'required',
                ];

                $messages = [
                    'name.required' => 'Name is required.',
                    'contact.required' => 'Contact is required.',
                    'address.required' => 'Address is required.',
                    'email.required' => 'Email is required.',
                    'email.email' => 'Valid email is required.',
                    'town.required' => 'Town is required.',
                    'tin_number.required' => 'TIN Number is required.',
                    'business_license.required' => 'Business license is required.',
                    'website.required' => 'Website is required.',
                ];

                $this->validate($request, $rules, $messages);

                $businessDetails = BusinessDetails::where('vendor_id', Auth::guard('admin')->user()->vendor_id)->first();

                $businessDetails->shop_name = $data['name'];
                $businessDetails->shop_contact = $data['contact'];
                $businessDetails->shop_address = $data['address'];
                $businessDetails->shop_town = $data['town'];
                $businessDetails->shop_email = $data['email'];
                $businessDetails->shop_tin_number = $data['tin_number'];
                $businessDetails->shop_business_license = $data['business_license'];
                $businessDetails->shop_website = $data['website'];

                if ($request->hasfile('shop_profile')) {
                    $image_file = $request->file('shop_profile');

                    if ($image_file->isValid()) {
                        $extension = $image_file->getClientOriginalExtension();
                        $filename = time() . '.' . $extension;
                        $image_path = 'shop/profile/';
                        $image_file->move($image_path, $filename);
                        $final_image_path = $image_path . $filename;
                    }

                    $businessDetails->shop_proof_image = $final_image_path;

                    $businessDetails->update();
                }

                // echo "<pre>"; print_r($vendor); die;
                // dd($businessDetails);

                return redirect()->back()->with('success', 'Bussiness information successful updated');
            }

            $businessDetails = BusinessDetails::where('id', Auth::guard('admin')->user()->vendor_id)->first()->toArray();
            return view('vendor.update-details', $title)->with(compact('slug', 'businessDetails'));
        } else if ($slug == "bank") {

            if ($request->isMethod('post')) {
                $data = $request->all();
                $rules = [
                    'holder_name' => 'required|regex:/^[\pL\s\-]+$/u',
                    'bank_name' => 'required|regex:/^[\pL\s\-]+$/u',
                    'account_number' => 'required'
                ];

                $messages = [
                    'holder_name.required' => 'Holder name is required.',
                    'bank_name.required' => 'Bank name is required.',
                    'account_number.required' => 'Account number is required.'
                ];

                $this->validate($request, $rules, $messages);

                $bankDetails = BankDetails::where('vendor_id', Auth::guard('admin')->user()->vendor_id)->first();

                $bankDetails->account_holder_name = $data['holder_name'];
                $bankDetails->bank_name = $data['bank_name'];
                $bankDetails->account_number = $data['account_number'];

                $bankDetails->update();

                // echo "<pre>"; print_r($bankDetails); die;
                // dd($bankDetails);

                return redirect()->back()->with('success', 'Bank information successful updated');
            }

            $bankDetails = BankDetails::where('id', Auth::guard('admin')->user()->vendor_id)->first()->toArray();
            return view('vendor.update-details', $title)->with(compact('slug', 'bankDetails'));
        }

        return view('vendor.update-details', $title)->with(compact('slug', 'vendorDetails'));
    }

    public function adminLists($type = null)
    {
        $admins = Admin::query();
        if (!empty($type)) {

            $title = [
                'title' => ucfirst($type).'s'
            ];
            
            $admins = $admins->where('type', $type);
        }
        else{
            $title = [
                'title' => 'All users'
            ];
        }
            
            $admins = $admins->get();

        return view('admin.users.admins.index', $title)->with(compact('admins'));
    }






    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect()->route('adminLogin')->with('success', 'You are successful logout');
    }
}
