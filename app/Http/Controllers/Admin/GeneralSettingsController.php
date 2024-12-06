<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\LiveChatScript;
use App\Models\RestaurantAddress;
use App\Models\SocialMediaHandle;
use App\Http\Controllers\Controller;
use App\Models\RestaurantPhoneNumber;
use App\Models\RestaurantWorkingHour;
use App\Http\Requests\LiveChatScriptRequest;

class GeneralSettingsController extends Controller
{
    public function index()
    {
        $addresses = RestaurantAddress::all();
        $phoneNumbers = RestaurantPhoneNumber::all();
        $workingHours = RestaurantWorkingHour::all();
        $socialMediaHandles = SocialMediaHandle::all();
        $script = LiveChatScript::latest()->first();




        return view('admin.general-settings', compact('addresses', 'phoneNumbers', 'workingHours','socialMediaHandles','script'));
    }

    // Restaurant Phone Number CRUD
    public function storePhoneNumber(Request $request)
    {
        $request->validate([
            'phone_number' => 'required|string',
            'use_whatsapp' => 'nullable|integer|in:0,1',
        ]);
    
        // If 'use_whatsapp' is checked, set all others to 0 first
        if ($request->has('use_whatsapp') && $request->use_whatsapp == 1) {
            RestaurantPhoneNumber::where('use_whatsapp', 1)->update(['use_whatsapp' => 0]);
        }
    
        // Create the new phone number
        RestaurantPhoneNumber::create([
            'phone_number' => $request->phone_number,
            'use_whatsapp' => $request->has('use_whatsapp') ? 1 : 0,
        ]);
    
        return redirect()->route('admin.general-settings');
    }
    
    
    

    public function updatePhoneNumber(Request $request, $id)
    {
        $request->validate([
            'phone_number' => 'required|string',
            'use_whatsapp' => 'nullable|integer|in:0,1',
        ]);
    
        $phoneNumber = RestaurantPhoneNumber::findOrFail($id);
    
        // If 'use_whatsapp' is checked, set all others to 0 first
        if ($request->has('use_whatsapp') && $request->use_whatsapp == 1) {
            RestaurantPhoneNumber::where('use_whatsapp', 1)->update(['use_whatsapp' => 0]);
        }
    
        // Update the specific record
        $phoneNumber->update([
            'phone_number' => $request->phone_number,
            'use_whatsapp' => $request->has('use_whatsapp') ? 1 : 0,
        ]);
    
        return redirect()->route('admin.general-settings');
    }
    
    

    public function deletePhoneNumber($id)
    {
        RestaurantPhoneNumber::findOrFail($id)->delete();
        return redirect()->route('admin.general-settings');
    }

    // Restaurant Address CRUD
    public function storeAddress(Request $request)
    {
        $request->validate(['address' => 'required|string']);
        RestaurantAddress::create(['address' => $request->address]);
        return redirect()->route('admin.general-settings');
    }

    public function updateAddress(Request $request, $id)
    {
        $request->validate(['address' => 'required|string']);
        $address = RestaurantAddress::findOrFail($id);
        $address->update(['address' => $request->address]);
        return redirect()->route('admin.general-settings');
    }

    public function deleteAddress($id)
    {
        RestaurantAddress::findOrFail($id)->delete();
        return redirect()->route('admin.general-settings');
    }


    // social media handles CRUD
    public function storeSocialMediaHandle(Request $request)
    {
        $request->validate([
            'handle' => 'required|string',
            'social_media' => 'required|in:facebook,instagram,youtube,tiktok',
        ]);

        SocialMediaHandle::create($request->all());
        return redirect()->route('admin.general-settings');
    }

    public function updateSocialMediaHandle(Request $request, $id)
    {
        $request->validate([
            'handle' => 'required|string',
            'social_media' => 'required|in:facebook,instagram,youtube,tiktok',
        ]);

        $socialMediaHandle = SocialMediaHandle::findOrFail($id);
        $socialMediaHandle->update($request->all());

        return redirect()->route('admin.general-settings');
    }

    public function deleteSocialMediaHandle($id)
    {
        $socialMediaHandle = SocialMediaHandle::findOrFail($id);
        $socialMediaHandle->delete();

        return redirect()->route('admin.general-settings');
    }
 



    // Restaurant Working Hour CRUD
    public function storeWorkingHour(Request $request)
    {
        $request->validate(['working_hours' => 'required|string']);
        RestaurantWorkingHour::create(['working_hours' => $request->working_hours]);
        return redirect()->route('admin.general-settings');
    }

    public function updateWorkingHour(Request $request, $id)
    {
        $request->validate(['working_hours' => 'required|string']);
        $workingHour = RestaurantWorkingHour::findOrFail($id);
        $workingHour->update(['working_hours' => $request->working_hours]);
        return redirect()->route('admin.general-settings');
    }

    public function deleteWorkingHour($id)
    {
        RestaurantWorkingHour::findOrFail($id)->delete();
        return redirect()->route('admin.general-settings');
    }



    // live chat script CRUD
    public function createLiveChatScript(LiveChatScriptRequest $request)
    {
        LiveChatScript::create($request->validated());

        return redirect()->back()->with('success', 'Live chat script created successfully!');
    }


    public function updateLiveChatScript(LiveChatScriptRequest $request, $id)
    {
        $script = LiveChatScript::findOrFail($id);
        $script->update($request->validated());

        return redirect()->back()->with('success', 'Live chat script updated successfully!');
    }


    public function destroyLiveChatScript($id)
    {
        $script = LiveChatScript::findOrFail($id);
        $script->delete();

        return redirect()->back()->with('success', 'Live chat script deleted successfully!');

    }

}
