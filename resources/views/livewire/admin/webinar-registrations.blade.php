<div>
    <div class="data-card">
        <div class="card-header">
            <h5><i class="bi bi-camera-video me-2"></i>Webinar Registrations</h5>
            <div class="d-flex align-items-center gap-2">
                <div class="input-group" style="width:280px;">
                    <span class="input-group-text bg-white border-end-0"><i class="bi bi-search text-muted"></i></span>
                    <input type="text" class="form-control border-start-0 ps-0" placeholder="Search name, email, phone..."
                           wire:model.live.debounce.300ms="search" style="font-size:14px;">
                </div>
            </div>
        </div>

        <div class="table-responsive">
            <table class="table table-hover mb-0">
                <thead>
                    <tr>
                        <th class="ps-4" style="cursor:pointer;" wire:click="sortBy('full_name')">
                            Name
                            @if($sortField === 'full_name')
                                <i class="bi bi-chevron-{{ $sortDirection === 'asc' ? 'up' : 'down' }}"></i>
                            @endif
                        </th>
                        <th style="cursor:pointer;" wire:click="sortBy('email')">
                            Email
                            @if($sortField === 'email')
                                <i class="bi bi-chevron-{{ $sortDirection === 'asc' ? 'up' : 'down' }}"></i>
                            @endif
                        </th>
                        <th>Phone</th>
                        <th>Source</th>
                        <th style="cursor:pointer;" wire:click="sortBy('created_at')">
                            Registered
                            @if($sortField === 'created_at')
                                <i class="bi bi-chevron-{{ $sortDirection === 'asc' ? 'up' : 'down' }}"></i>
                            @endif
                        </th>
                        <th class="text-end pe-4">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($registrations as $reg)
                        <tr>
                            <td class="ps-4 fw-semibold">{{ $reg->full_name }}</td>
                            <td>{{ $reg->email }}</td>
                            <td>{{ $reg->phone ?? '-' }}</td>
                            <td>
                                <span class="badge bg-light text-dark">
                                    {{ \App\Models\WebinarRegistration::SOURCE_OPTIONS[$reg->source] ?? $reg->source }}
                                </span>
                            </td>
                            <td><span class="text-muted">{{ $reg->created_at->format('M d, Y H:i') }}</span></td>
                            <td class="text-end pe-4">
                                <button class="btn btn-sm btn-outline-danger" wire:click="deleteRegistration({{ $reg->id }})"
                                        wire:confirm="Are you sure you want to delete this registration?">
                                    <i class="bi bi-trash"></i>
                                </button>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="text-center text-muted py-5">
                                <i class="bi bi-inbox" style="font-size:32px;"></i>
                                <p class="mt-2 mb-0">No registrations found</p>
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        @if($registrations->hasPages())
            <div class="px-4 py-3 border-top">
                {{ $registrations->links() }}
            </div>
        @endif
    </div>

    <div class="mt-3 text-muted" style="font-size:13px;">
        Total: {{ $registrations->total() }} registration(s)
    </div>
</div>
