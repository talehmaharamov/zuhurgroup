<?php

namespace App\Providers;

use App\Models\Category;
use App\Models\Faq;
use App\Models\MetaTag;
use App\Models\Paylasim;
use App\Models\Setting;
use App\Models\SiteLanguage;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public function register()
    {
    }

    public function boot(): void
    {
        $generalCategories = Category::with('subcategories.subcategories')->get();
        $mainCategories = Category::where('parent_id', null)->with('subcategories.subcategories')->get();
        $faqs = Faq::where('status', 1)->get();
        $faqSchemas = Faq::where('status', 1)->with('translation')->get()->pluck('translation.schema')->toArray();
        view()->share([
            'generalCategories' => $generalCategories,
            'mainCategories' => $mainCategories,
            'faqs' => $faqs,
            'faqSchemas' => $faqSchemas,
        ]);
    }
}
