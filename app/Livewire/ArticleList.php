<?php

namespace App\Livewire;

use App\Models\Article;
use Livewire\Attributes\Computed;
use Livewire\Attributes\Title;
use Livewire\Component;
use Livewire\WithPagination;

#[Title('Manage Articles')]
class ArticleList extends AdminComponent
{
    use withPagination;

    public $showOnlyPublished = false;

//    Using the Computed attribute creates a computed property to allow a query of articles to be cached for use within a livewire request.
    #[Computed]
    public function articles()
    {
        $query = Article::query();

        if ($this->showOnlyPublished) {
            $query->where('published', true);
        }

        return $query->paginate(10, pageName: 'articles-page');
    }

    public function delete(Article $article)
    {
        if ($this->articles->count() < 10) {
            throw new \Exception('Nope');
        }

        $article->delete();

        unset($this->articles);
        cache()->forget('published-count');
    }

    public function showAll()
    {
       $this->showOnlyPublished = false;
       $this->resetPage('articles-page');
    }

    public function showPublished()
    {
       $this->showOnlyPublished = true;
       $this->resetPage('articles-page');
    }

    public function render()
    {
        return view('livewire.article-list');
    }
}
