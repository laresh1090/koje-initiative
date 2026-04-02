<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\WithPagination;
use App\Models\ContactMessage;

#[Layout('components.layouts.admin')]
#[Title('Contact Messages')]
class ContactMessages extends Component
{
    use WithPagination;

    public string $search = '';
    public string $filter = 'all';
    public ?int $viewingMessageId = null;

    protected $paginationTheme = 'bootstrap';

    public function updatingSearch(): void
    {
        $this->resetPage();
    }

    public function updatingFilter(): void
    {
        $this->resetPage();
    }

    public function viewMessage(int $id): void
    {
        $message = ContactMessage::findOrFail($id);
        $message->update(['read' => true]);
        $this->viewingMessageId = $id;
    }

    public function closeMessage(): void
    {
        $this->viewingMessageId = null;
    }

    public function toggleRead(int $id): void
    {
        $message = ContactMessage::findOrFail($id);
        $message->update(['read' => !$message->read]);
    }

    public function deleteMessage(int $id): void
    {
        ContactMessage::findOrFail($id)->delete();
        $this->viewingMessageId = null;
    }

    public function render()
    {
        $messages = ContactMessage::query()
            ->when($this->search, function ($query) {
                $query->where('name', 'like', "%{$this->search}%")
                      ->orWhere('email', 'like', "%{$this->search}%")
                      ->orWhere('subject', 'like', "%{$this->search}%");
            })
            ->when($this->filter === 'unread', fn ($q) => $q->where('read', false))
            ->when($this->filter === 'read', fn ($q) => $q->where('read', true))
            ->latest()
            ->paginate(15);

        $viewingMessage = $this->viewingMessageId
            ? ContactMessage::find($this->viewingMessageId)
            : null;

        return view('livewire.admin.contact-messages', [
            'messages' => $messages,
            'viewingMessage' => $viewingMessage,
        ]);
    }
}
