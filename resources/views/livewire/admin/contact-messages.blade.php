<div>
    <div class="row g-4">
        {{-- Messages List --}}
        <div class="{{ $viewingMessage ? 'col-lg-5' : 'col-12' }}">
            <div class="data-card">
                <div class="card-header flex-wrap gap-2">
                    <h5><i class="bi bi-envelope me-2"></i>Messages</h5>
                    <div class="d-flex align-items-center gap-2">
                        <select class="form-select form-select-sm" wire:model.live="filter" style="width:120px; font-size:13px;">
                            <option value="all">All</option>
                            <option value="unread">Unread</option>
                            <option value="read">Read</option>
                        </select>
                        <div class="input-group" style="width:240px;">
                            <span class="input-group-text bg-white border-end-0"><i class="bi bi-search text-muted"></i></span>
                            <input type="text" class="form-control border-start-0 ps-0" placeholder="Search..."
                                   wire:model.live.debounce.300ms="search" style="font-size:14px;">
                        </div>
                    </div>
                </div>

                <div class="table-responsive">
                    <table class="table table-hover mb-0">
                        <thead>
                            <tr>
                                <th class="ps-4">From</th>
                                <th>Subject</th>
                                <th>Date</th>
                                <th>Status</th>
                                <th class="text-end pe-4">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($messages as $msg)
                                <tr style="cursor:pointer; {{ !$msg->read ? 'font-weight:600;' : '' }}"
                                    wire:click="viewMessage({{ $msg->id }})">
                                    <td class="ps-4">{{ $msg->name }}</td>
                                    <td>{{ Str::limit($msg->subject, 35) }}</td>
                                    <td><span class="text-muted">{{ $msg->created_at->format('M d') }}</span></td>
                                    <td>
                                        @if(!$msg->read)
                                            <span class="badge badge-koje">New</span>
                                        @else
                                            <span class="badge bg-secondary">Read</span>
                                        @endif
                                    </td>
                                    <td class="text-end pe-4" onclick="event.stopPropagation()">
                                        <button class="btn btn-sm btn-outline-danger" wire:click="deleteMessage({{ $msg->id }})"
                                                wire:confirm="Delete this message?">
                                            <i class="bi bi-trash"></i>
                                        </button>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="5" class="text-center text-muted py-5">
                                        <i class="bi bi-inbox" style="font-size:32px;"></i>
                                        <p class="mt-2 mb-0">No messages found</p>
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>

                @if($messages->hasPages())
                    <div class="px-4 py-3 border-top">
                        {{ $messages->links() }}
                    </div>
                @endif
            </div>
        </div>

        {{-- Message Detail --}}
        @if($viewingMessage)
            <div class="col-lg-7">
                <div class="data-card">
                    <div class="card-header">
                        <h5>{{ $viewingMessage->subject }}</h5>
                        <div class="d-flex gap-2">
                            <button class="btn btn-sm btn-outline-secondary" wire:click="toggleRead({{ $viewingMessage->id }})">
                                <i class="bi bi-{{ $viewingMessage->read ? 'envelope' : 'envelope-open' }}"></i>
                                Mark {{ $viewingMessage->read ? 'Unread' : 'Read' }}
                            </button>
                            <button class="btn btn-sm btn-outline-secondary" wire:click="closeMessage">
                                <i class="bi bi-x-lg"></i>
                            </button>
                        </div>
                    </div>
                    <div class="p-4">
                        <div class="d-flex justify-content-between mb-4 pb-3 border-bottom">
                            <div>
                                <strong style="font-size:16px;">{{ $viewingMessage->name }}</strong>
                                <div class="text-muted" style="font-size:13px;">{{ $viewingMessage->email }}</div>
                                @if($viewingMessage->phone)
                                    <div class="text-muted" style="font-size:13px;">
                                        <i class="bi bi-telephone me-1"></i>{{ $viewingMessage->phone }}
                                    </div>
                                @endif
                            </div>
                            <div class="text-muted" style="font-size:13px;">
                                {{ $viewingMessage->created_at->format('M d, Y \a\t H:i') }}
                            </div>
                        </div>
                        <div style="font-size:15px; line-height:1.7; white-space:pre-wrap;">{{ $viewingMessage->message }}</div>
                    </div>
                </div>
            </div>
        @endif
    </div>

    <div class="mt-3 text-muted" style="font-size:13px;">
        Total: {{ $messages->total() }} message(s)
    </div>
</div>
