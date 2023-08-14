<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Contact;
use App\Models\Content;
use App\Models\Partner;
use App\Models\Slider;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    public function index()
    {
        $partners = Partner::all();
        $sliders = Slider::where('status', 1)->orderBy('order', 'asc')->get();
        return view('frontend.index', get_defined_vars());
    }

    public function search($categoryID, $keyword)
    {
        $category = Category::where('id', $categoryID)->with('content')->first();
        $contents = Content::where('category_id', $categoryID)
            ->where('slug', 'LIKE', '%' . $keyword . '%')
            ->whereTranslation('name', 'LIKE', '%' . $keyword . '%')
            ->whereTranslation('description', 'LIKE', '%' . $keyword . '%')
            ->whereTranslation('meta_description', 'LIKE', '%' . $keyword . '%')
            ->whereTranslation('meta_title', 'LIKE', '%' . $keyword . '%')
            ->whereTranslation('alt', 'LIKE', '%' . $keyword . '%')
            ->paginate(9);
        return view('frontend.content.index',get_defined_vars());
    }

    public function sendMessage(Request $request)
    {
//        dd($request->all());
        try {
            $receiver = settings('mail_receiver');
            $contact = new Contact();
            $contact->name = $request->name;
            $contact->phone = $request->phone;
            $contact->email = $request->email;
            $contact->subject = $request->subject;
            $contact->read_status = 0;
            $contact->message = $request->message;
            $contact->save();
//            $data = [
//                'name' => $contact->name,
//                'phone' => $contact->phone,
//                'email' => $contact->email,
//                'subject' => $contact->subject,
//                'msg' => $contact->message
//            ];
//            Mail::send('backend.mail.send', $data, function ($message) use ($receiver) {
//                $message->to($receiver);
//                $message->subject(__('backend.you-have-new-message'));
//            });
            alert()->success(__('messages.success'));
            return redirect(route('frontend.contact-us-page'));
        } catch (Exception $e) {
            alert()->error(__('backend.error'));
            return redirect(route('frontend.contact-us-page'));
        }
    }
}
