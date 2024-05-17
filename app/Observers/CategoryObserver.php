<?php

namespace App\Observers;

use App\Models\Category;
use Illuminate\Support\Facades\Cache;

class CategoryObserver
{
        /**
     * Handle the Category "created" event.
     *
     * @param  \App\Models\Category  $category
     * @return void
     */
    public function created(Category $category)
    {
        $this->clearCache();
    }

    /**
     * Handle the Category "updated" event.
     *
     * @param  \App\Models\Category  $category
     * @return void
     */
    public function updated(Category $category)
    {
        $this->clearCache();
    }

    /**
     * Handle the Category "deleted" event.
     *
     * @param  \App\Models\Category  $category
     * @return void
     */
    public function deleted(Category $category)
    {
        $this->clearCache();
    }

    /**
     * Clear the cache for categories.
     *
     * @return void
     */
    protected function clearCache()
    {
        Cache::forget('categories');
    }
}
