<div>
    {{-- Breadcrumb --}}
    <x-breadcrumb title="Gallery" subtitle="Moments That Define Us" />

    <style>
        /* Gallery Filter Buttons */
        .gallery-filter-btns {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            justify-content: center;
            margin-bottom: 40px;
        }
        .gallery-filter-btns button {
            background: transparent;
            border: 2px solid #e5e5e5;
            padding: 10px 24px;
            border-radius: 30px;
            font-size: 15px;
            font-weight: 600;
            color: #333;
            cursor: pointer;
            transition: all 0.3s ease;
        }
        .gallery-filter-btns button:hover,
        .gallery-filter-btns button.active-filter {
            background: #EB5310;
            border-color: #EB5310;
            color: #fff;
        }

        /* Gallery Grid */
        .gallery-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 24px;
        }
        @media (max-width: 1199px) {
            .gallery-grid {
                grid-template-columns: repeat(3, 1fr);
            }
        }
        @media (max-width: 767px) {
            .gallery-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }
        @media (max-width: 480px) {
            .gallery-grid {
                grid-template-columns: 1fr;
            }
        }

        /* Gallery Item */
        .gallery-item {
            position: relative;
            border-radius: 10px;
            overflow: hidden;
        }
        .gallery-item a {
            display: block;
            position: relative;
            overflow: hidden;
            border-radius: 10px;
        }
        .gallery-item img {
            width: 100%;
            height: 300px;
            object-fit: cover;
            display: block;
            transition: transform 0.4s ease;
            border-radius: 10px;
        }
        .gallery-item a:hover img {
            transform: scale(1.08);
        }
        .gallery-item .gallery-overlay {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            background: linear-gradient(to top, rgba(0,0,0,0.75) 0%, transparent 100%);
            padding: 20px;
            opacity: 0;
            transition: opacity 0.3s ease;
            border-radius: 0 0 10px 10px;
        }
        .gallery-item a:hover .gallery-overlay {
            opacity: 1;
        }
        .gallery-overlay .category-label {
            display: inline-block;
            background: #EB5310;
            color: #fff;
            padding: 4px 14px;
            border-radius: 20px;
            font-size: 13px;
            font-weight: 600;
            text-transform: capitalize;
        }
        .gallery-overlay .photo-caption {
            color: #fff;
            font-size: 15px;
            margin-top: 8px;
            font-weight: 500;
        }

        /* Gallery CTA Section */
        .gallery-cta {
            background: #1E252F;
            padding: 80px 0;
            text-align: center;
            position: relative;
            overflow: hidden;
        }
        .gallery-cta h2 {
            color: #fff;
            font-size: 36px;
            font-weight: 800;
            margin-bottom: 16px;
            font-family: var(--font-quicksand, 'Quicksand', sans-serif);
        }
        .gallery-cta p {
            color: rgba(255,255,255,0.7);
            font-size: 16px;
            margin-bottom: 32px;
            max-width: 600px;
            margin-left: auto;
            margin-right: auto;
        }
        .gallery-cta .cta-buttons {
            display: flex;
            gap: 16px;
            justify-content: center;
            flex-wrap: wrap;
        }
        .gallery-cta .ul-btn.btn-outline {
            background: transparent;
            border: 2px solid #fff;
            color: #fff;
        }
        .gallery-cta .ul-btn.btn-outline:hover {
            background: #fff;
            color: #1E252F;
        }
    </style>

    {{-- GALLERY SECTION --}}
    <section class="ul-projects ul-section-spacing">
        <div class="ul-container">
            {{-- Section Heading --}}
            <div class="ul-section-heading text-center justify-content-center wow animate__fadeInUp">
                <div>
                    <span class="ul-section-sub-title">Our Gallery</span>
                    <h2 class="ul-section-title">Moments That Define the Koje Experience</h2>
                    <p class="ul-section-descr" style="max-width: 680px; margin: 0 auto;">Browse photos from our events, fashion showcases, production workshops, and community moments.</p>
                </div>
            </div>

            {{-- Filter Buttons --}}
            <div class="gallery-filter-btns wow animate__fadeInUp" data-wow-delay="0.1s">
                <button type="button" wire:click="setFilter('all')"
                        class="{{ $activeFilter === 'all' ? 'active-filter' : '' }}">All</button>
                <button type="button" wire:click="setFilter('fashion')"
                        class="{{ $activeFilter === 'fashion' ? 'active-filter' : '' }}">Fashion</button>
                <button type="button" wire:click="setFilter('events')"
                        class="{{ $activeFilter === 'events' ? 'active-filter' : '' }}">Events</button>
                <button type="button" wire:click="setFilter('production')"
                        class="{{ $activeFilter === 'production' ? 'active-filter' : '' }}">Production</button>
            </div>

            {{-- Gallery Grid --}}
            <div class="gallery-grid wow animate__fadeInUp" data-wow-delay="0.2s" wire:key="gallery-{{ $activeFilter }}">
                @foreach($this->filteredImages as $image)
                    <div class="gallery-item" wire:key="img-{{ md5($image['src']) }}">
                        <a href="{{ asset($image['src']) }}" data-fslightbox="gallery">
                            <img src="{{ asset($image['src']) }}" alt="{{ $image['caption'] }}">
                            <div class="gallery-overlay">
                                <span class="category-label">{{ $image['category'] }}</span>
                                <p class="photo-caption">{{ $image['caption'] }}</p>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- CTA SECTION --}}
    <section class="gallery-cta">
        <div class="ul-container">
            <span class="ul-section-sub-title" style="color: #EB5310;">Join the Movement</span>
            <h2>Want to Be Part of the Next Edition?</h2>
            <p>Whether you're a creative entrepreneur looking for a platform or a brand seeking strategic partnerships, there's a place for you at Koje.</p>
            <div class="cta-buttons">
                <a href="{{ route('contact') }}" class="ul-btn"><i class="flaticon-fast-forward-double-right-arrows-symbol"></i> Get Involved</a>
                <a href="{{ route('contact') }}" class="ul-btn btn-outline"><i class="flaticon-fast-forward-double-right-arrows-symbol"></i> Partner With Us</a>
            </div>
        </div>
    </section>

    {{-- Reinitialize FSLightbox after Livewire DOM updates --}}
    @script
    <script>
        $wire.on('morphed', () => {
            if (typeof refreshFsLightbox === 'function') {
                refreshFsLightbox();
            }
        });

        // Also refresh on initial load and after any Livewire update
        document.addEventListener('livewire:navigated', () => {
            if (typeof refreshFsLightbox === 'function') {
                setTimeout(() => refreshFsLightbox(), 100);
            }
        });

        // Refresh after each Livewire update cycle
        Livewire.hook('morph.updated', () => {
            if (typeof refreshFsLightbox === 'function') {
                setTimeout(() => refreshFsLightbox(), 50);
            }
        });
    </script>
    @endscript
</div>
