<div>
    {{-- BREADCRUMB --}}
    <x-breadcrumb title="Contact Us" subtitle="Get in Touch with the Koje Group Team" />


    {{-- CONTACT INFO CARDS SECTION START --}}
    <div class="ul-contact-infos">
        <div class="ul-section-spacing ul-container">
            <div class="row row-cols-md-3 row-cols-2 row-cols-xxs-1 ul-bs-row">
                {{-- Address --}}
                <div class="col wow animate__fadeInUp">
                    <div class="ul-contact-info">
                        <div class="icon"><i class="flaticon-location"></i></div>
                        <div class="txt">
                            <span class="title">Our Address</span>
                            <span class="descr">Lagos, Nigeria</span>
                        </div>
                    </div>
                </div>
                {{-- Email --}}
                <div class="col wow animate__fadeInUp" data-wow-delay="0.1s">
                    <div class="ul-contact-info">
                        <div class="icon"><i class="flaticon-comment"></i></div>
                        <div class="txt">
                            <span class="title">Email Address</span>
                            <a href="mailto:hello@kojegroup.com">hello@kojegroup.com</a>
                        </div>
                    </div>
                </div>
                {{-- Phone --}}
                <div class="col wow animate__fadeInUp" data-wow-delay="0.2s">
                    <div class="ul-contact-info">
                        <div class="icon"><i class="flaticon-phone-call"></i></div>
                        <div class="txt">
                            <span class="title">Phone Number</span>
                            <a href="tel:+2348000000000">+234 800 000 0000</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- CONTACT INFO CARDS SECTION END --}}


    {{-- CONTACT FORM SECTION START --}}
    <section class="ul-inner-contact ul-section-spacing">
        <div class="ul-container">
            {{-- Heading --}}
            <div class="ul-section-heading justify-content-center text-center wow animate__fadeInUp">
                <div>
                    <span class="ul-section-sub-title">Send Us a Message</span>
                    <h2 class="ul-section-title">How Can We Help You?</h2>
                    <p class="ul-section-descr mt-2">Fill out the form below and we will get back to you as soon as possible.</p>
                </div>
            </div>

            <div class="row gy-5">
                {{-- LEFT: Contact Form --}}
                <div class="col-lg-8">
                    <div class="ul-inner-contact-container">
                        {{-- Success Message --}}
                        @if($showSuccess)
                            <div class="wow animate__fadeInUp" style="background: #E8F5E9; border: 1px solid #A5D6A7; border-radius: 8px; padding: 20px 24px; margin-bottom: 30px; text-align: center;">
                                <i class="flaticon-tick" style="font-size: 24px; color: #43A047; display: block; margin-bottom: 8px;"></i>
                                <h4 style="margin: 0 0 6px; font-size: 18px; font-weight: 700; color: #2E7D32;">Message Sent Successfully!</h4>
                                <p style="margin: 0; font-size: 14px; color: #555;">Thank you for reaching out. We will get back to you within 24-48 hours.</p>
                            </div>
                        @endif

                        <form wire:submit="submit" class="ul-contact-form ul-form wow animate__fadeInUp">
                            <div class="row row-cols-md-2 row-cols-1 ul-bs-row">
                                {{-- Name --}}
                                <div class="col">
                                    <div class="form-group">
                                        <input
                                            type="text"
                                            wire:model="name"
                                            placeholder="Full Name *"
                                            class="@error('name') is-invalid @enderror"
                                        >
                                        @error('name')
                                            <span style="color: #e53935; font-size: 13px; margin-top: 4px; display: block;">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                {{-- Email --}}
                                <div class="col">
                                    <div class="form-group">
                                        <input
                                            type="email"
                                            wire:model="email"
                                            placeholder="Email Address *"
                                            class="@error('email') is-invalid @enderror"
                                        >
                                        @error('email')
                                            <span style="color: #e53935; font-size: 13px; margin-top: 4px; display: block;">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                {{-- Phone --}}
                                <div class="col">
                                    <div class="form-group">
                                        <input
                                            type="tel"
                                            wire:model="phone"
                                            placeholder="Phone Number"
                                        >
                                        @error('phone')
                                            <span style="color: #e53935; font-size: 13px; margin-top: 4px; display: block;">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                {{-- Subject Dropdown --}}
                                <div class="col">
                                    <div class="form-group">
                                        <select
                                            wire:model="subject"
                                            class="@error('subject') is-invalid @enderror"
                                            style="width: 100%; padding: 14px 20px; border: 1px solid #e0e0e0; border-radius: 5px; font-size: 15px; color: #555; background: #fff; appearance: auto; outline: none; transition: border-color 0.3s ease;"
                                        >
                                            <option value="">Select Subject *</option>
                                            <option value="General Inquiry">General Inquiry</option>
                                            <option value="Bespoke Fashion">Bespoke Fashion</option>
                                            <option value="Ready-to-Wear">Ready-to-Wear</option>
                                            <option value="Bulk Production">Bulk Production</option>
                                            <option value="Events & Initiative">Events & Initiative</option>
                                            <option value="Advertising">Advertising</option>
                                            <option value="Partnership">Partnership</option>
                                            <option value="Other">Other</option>
                                        </select>
                                        @error('subject')
                                            <span style="color: #e53935; font-size: 13px; margin-top: 4px; display: block;">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                {{-- Message --}}
                                <div class="col-12">
                                    <div class="form-group">
                                        <textarea
                                            wire:model="message"
                                            placeholder="Your Message *"
                                            rows="6"
                                            class="@error('message') is-invalid @enderror"
                                        ></textarea>
                                        @error('message')
                                            <span style="color: #e53935; font-size: 13px; margin-top: 4px; display: block;">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                {{-- Submit Button --}}
                                <div class="col-12">
                                    <button type="submit" class="ul-btn" wire:loading.attr="disabled">
                                        <span wire:loading.remove wire:target="submit">
                                            <i class="flaticon-fast-forward-double-right-arrows-symbol"></i> Send Message
                                        </span>
                                        <span wire:loading wire:target="submit">
                                            <i class="flaticon-fast-forward-double-right-arrows-symbol"></i> Sending...
                                        </span>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                {{-- RIGHT: Contact Info Sidebar --}}
                <div class="col-lg-4">
                    <div class="wow animate__fadeInUp" data-wow-delay="0.1s">
                        {{-- Address Card --}}
                        <div style="background: #f8f9fa; border-radius: 10px; padding: 24px; margin-bottom: 20px;">
                            <div style="display: flex; align-items: flex-start; gap: 16px;">
                                <div style="width: 48px; height: 48px; background: linear-gradient(135deg, #EB5310, #FAA019); border-radius: 50%; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                                    <i class="flaticon-location" style="color: #fff; font-size: 20px;"></i>
                                </div>
                                <div>
                                    <h4 style="margin: 0 0 4px; font-size: 16px; font-weight: 700; color: #1E252F;">Our Office</h4>
                                    <p style="margin: 0; font-size: 14px; color: #666; line-height: 1.6;">Lagos, Nigeria</p>
                                </div>
                            </div>
                        </div>

                        {{-- Email Card --}}
                        <div style="background: #f8f9fa; border-radius: 10px; padding: 24px; margin-bottom: 20px;">
                            <div style="display: flex; align-items: flex-start; gap: 16px;">
                                <div style="width: 48px; height: 48px; background: linear-gradient(135deg, #EB5310, #FAA019); border-radius: 50%; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                                    <i class="flaticon-comment" style="color: #fff; font-size: 20px;"></i>
                                </div>
                                <div>
                                    <h4 style="margin: 0 0 4px; font-size: 16px; font-weight: 700; color: #1E252F;">Email Us</h4>
                                    <a href="mailto:hello@kojegroup.com" style="font-size: 14px; color: #EB5310; text-decoration: none;">hello@kojegroup.com</a>
                                </div>
                            </div>
                        </div>

                        {{-- Phone Card --}}
                        <div style="background: #f8f9fa; border-radius: 10px; padding: 24px; margin-bottom: 20px;">
                            <div style="display: flex; align-items: flex-start; gap: 16px;">
                                <div style="width: 48px; height: 48px; background: linear-gradient(135deg, #EB5310, #FAA019); border-radius: 50%; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                                    <i class="flaticon-phone-call" style="color: #fff; font-size: 20px;"></i>
                                </div>
                                <div>
                                    <h4 style="margin: 0 0 4px; font-size: 16px; font-weight: 700; color: #1E252F;">Call Us</h4>
                                    <a href="tel:+2348000000000" style="font-size: 14px; color: #EB5310; text-decoration: none;">+234 800 000 0000</a>
                                </div>
                            </div>
                        </div>

                        {{-- Business Hours Card --}}
                        <div style="background: #f8f9fa; border-radius: 10px; padding: 24px; margin-bottom: 20px;">
                            <div style="display: flex; align-items: flex-start; gap: 16px;">
                                <div style="width: 48px; height: 48px; background: linear-gradient(135deg, #EB5310, #FAA019); border-radius: 50%; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                                    <i class="flaticon-clock" style="color: #fff; font-size: 20px;"></i>
                                </div>
                                <div>
                                    <h4 style="margin: 0 0 4px; font-size: 16px; font-weight: 700; color: #1E252F;">Business Hours</h4>
                                    <p style="margin: 0; font-size: 14px; color: #666; line-height: 1.6;">Mon - Fri: 9:00 AM - 6:00 PM<br>Sat: 10:00 AM - 4:00 PM</p>
                                </div>
                            </div>
                        </div>

                        {{-- Social Links --}}
                        <div style="background: #1E252F; border-radius: 10px; padding: 24px; text-align: center;">
                            <h4 style="margin: 0 0 12px; font-size: 16px; font-weight: 700; color: #fff;">Follow Us</h4>
                            <div style="display: flex; gap: 12px; justify-content: center;">
                                <a href="#" aria-label="Facebook" style="width: 42px; height: 42px; display: inline-flex; align-items: center; justify-content: center; border-radius: 50%; background: rgba(255,255,255,0.1); color: #fff; font-size: 18px; transition: all 0.3s ease;">
                                    <i class="flaticon-facebook"></i>
                                </a>
                                <a href="#" aria-label="Twitter" style="width: 42px; height: 42px; display: inline-flex; align-items: center; justify-content: center; border-radius: 50%; background: rgba(255,255,255,0.1); color: #fff; font-size: 18px; transition: all 0.3s ease;">
                                    <i class="flaticon-twitter"></i>
                                </a>
                                <a href="#" aria-label="Instagram" style="width: 42px; height: 42px; display: inline-flex; align-items: center; justify-content: center; border-radius: 50%; background: rgba(255,255,255,0.1); color: #fff; font-size: 18px; transition: all 0.3s ease;">
                                    <i class="flaticon-instagram"></i>
                                </a>
                                <a href="#" aria-label="YouTube" style="width: 42px; height: 42px; display: inline-flex; align-items: center; justify-content: center; border-radius: 50%; background: rgba(255,255,255,0.1); color: #fff; font-size: 18px; transition: all 0.3s ease;">
                                    <i class="flaticon-youtube"></i>
                                </a>
                                <a href="#" aria-label="LinkedIn" style="width: 42px; height: 42px; display: inline-flex; align-items: center; justify-content: center; border-radius: 50%; background: rgba(255,255,255,0.1); color: #fff; font-size: 18px; transition: all 0.3s ease;">
                                    <i class="flaticon-linkedin-big-logo"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- CONTACT FORM SECTION END --}}


    {{-- MAP SECTION START --}}
    <div class="ul-contact-map">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d253462.4!2d3.1!3d6.5!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x103b8b2ae68280c1%3A0xdc9e87a367c3d9cb!2sLagos%2C%20Nigeria!5e0!3m2!1sen!2sng!4v1700000000000!5m2!1sen!2sng"
            allowfullscreen=""
            loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"
        ></iframe>
    </div>
    {{-- MAP SECTION END --}}
</div>
