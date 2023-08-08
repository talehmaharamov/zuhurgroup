<?php

namespace App\Providers;

use App\Models\Category;
use App\Models\Faq;
use App\Models\Slider;
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
        $sliders = Slider::where('status', 1)->orderBy('order', 'asc')->get();
        view()->share([
            'generalCategories' => $generalCategories,
            'mainCategories' => $mainCategories,
            'faqs' => $faqs,
            'faqSchemas' => $faqSchemas,
            'sliders' => $sliders,
        ]);
    }
}
