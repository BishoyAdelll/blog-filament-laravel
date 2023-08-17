<?php

namespace App\View\Components;

use App\Models\Category;
use Illuminate\Support\Facades\DB;
use Illuminate\View\Component;
use Illuminate\View\View;

class AppLayout extends Component
{
    public function __construct(public ?string $metaTitle=null,public ?string $metaDescription=null)
    {
        
    }

    /**
     * Get the view / contents that represents the component.
     */
    public function render(): View
    {
        $categories =Category::query()
        ->leftJoin('category_post','categories.id','=','category_post.category_id')
        ->select('categories.title','categories.slug',DB::raw('count(*) as total'))
        ->groupBy('categories.id')
        ->orderByDesc('total')        
        ->get();
        return view('layouts.app',compact('categories'));
    }
}
