<div>
    {{-- Stats Cards --}}
    <div class="row g-4 mb-4">
        <div class="col-sm-6 col-xl-4">
            <div class="stat-card">
                <div class="d-flex align-items-center gap-3">
                    <div class="stat-icon" style="background:rgba(235,83,16,0.1); color:#EB5310;">
                        <i class="bi bi-camera-video-fill"></i>
                    </div>
                    <div>
                        <div class="stat-value">{{ $totalRegistrations }}</div>
                        <div class="stat-label">Webinar Registrations</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-xl-4">
            <div class="stat-card">
                <div class="d-flex align-items-center gap-3">
                    <div class="stat-icon" style="background:rgba(250,160,25,0.1); color:#FAA019;">
                        <i class="bi bi-envelope-fill"></i>
                    </div>
                    <div>
                        <div class="stat-value">{{ $totalMessages }}</div>
                        <div class="stat-label">Contact Messages</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-xl-4">
            <div class="stat-card">
                <div class="d-flex align-items-center gap-3">
                    <div class="stat-icon" style="background:rgba(220,53,69,0.1); color:#dc3545;">
                        <i class="bi bi-envelope-exclamation-fill"></i>
                    </div>
                    <div>
                        <div class="stat-value">{{ $unreadMessages }}</div>
                        <div class="stat-label">Unread Messages</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row g-4">
        {{-- Recent Webinar Registrations --}}
        <div class="col-lg-6">
            <div class="data-card">
                <div class="card-header">
                    <h5><i class="bi bi-camera-video me-2"></i>Recent Registrations</h5>
                    <a href="{{ route('admin.webinar-registrations') }}" class="btn btn-sm btn-outline-secondary">View All</a>
                </div>
                <div class="table-responsive">
                    <table class="table table-hover mb-0">
                        <thead>
                            <tr>
                                <th class="ps-4">Name</th>
                                <th>Email</th>
                                <th>Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($recentRegistrations as $reg)
                                <tr>
                                    <td class="ps-4 fw-semibold">{{ $reg->full_name }}</td>
                                    <td>{{ $reg->email }}</td>
                                    <td><span class="text-muted">{{ $reg->created_at->format('M d, Y') }}</span></td>
                                </tr>
                            @empty
                                <tr><td colspan="3" class="text-center text-muted py-4">No registrations yet</td></tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        {{-- Recent Contact Messages --}}
        <div class="col-lg-6">
            <div class="data-card">
                <div class="card-header">
                    <h5><i class="bi bi-envelope me-2"></i>Recent Messages</h5>
                    <a href="{{ route('admin.contact-messages') }}" class="btn btn-sm btn-outline-secondary">View All</a>
                </div>
                <div class="table-responsive">
                    <table class="table table-hover mb-0">
                        <thead>
                            <tr>
                                <th class="ps-4">From</th>
                                <th>Subject</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($recentMessages as $msg)
                                <tr>
                                    <td class="ps-4 fw-semibold">{{ $msg->name }}</td>
                                    <td>{{ Str::limit($msg->subject, 30) }}</td>
                                    <td>
                                        @if($msg->read)
                                            <span class="badge bg-secondary">Read</span>
                                        @else
                                            <span class="badge badge-koje">New</span>
                                        @endif
                                    </td>
                                </tr>
                            @empty
                                <tr><td colspan="3" class="text-center text-muted py-4">No messages yet</td></tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
