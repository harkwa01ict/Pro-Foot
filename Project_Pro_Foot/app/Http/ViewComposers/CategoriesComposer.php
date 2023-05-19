<?php
namespace App\Http\ViewComposers;

use Illuminate\View\View;
use App\Models\categories;


class CategoriesComposer{

    public function compose(View $view): void
    {
        $view->with('categories', categories::where('is_online', 1)->get());
    }
}
