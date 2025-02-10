<?php

namespace App\Livewire;

use App\Livewire\Forms\ArticleForm;
use App\Models\Article;
use Illuminate\Support\Facades\Storage;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Livewire\WithFileUploads;

class EditArticle extends AdminComponent
{
    use WithFileUploads;

    public ArticleForm $form;

    public function mount(Article $article)
    {
        $this->form->setArticle($article);
    }

    public function downloadPhoto()
    {
        $extension = pathinfo($this->form->photo_path, PATHINFO_EXTENSION);
        return response()->download(
            Storage::disk('public')->path($this->form->photo_path),
            'article.' . $extension,
        );

//        return response()->streamDownload(function () {
//
//        }, 'article.'.$extension);
    }

    public function save(Article $article)
    {
        $this->form->update();

        session()->flash('status', 'Article updated successfully.');

//        $this->redirect('/dashboard/articles', navigate: true);
        $this->redirect(ArticleList::class, navigate: true);
    }

    public function render()
    {
        return view('livewire.edit-article');
    }
}
