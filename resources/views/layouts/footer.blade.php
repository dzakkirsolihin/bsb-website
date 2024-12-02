<footer class="py-5 mt-4" style="background-color: #008000;">
    <div class="container-fluid w-100 d-flex justify-content-center">
        <div class="row d-flex justify-content-center gap-5">
            <div class="col-md-7 d-flex flex-row align-items-center gap-5">
                <div>
                    <a class="navbar-brand d-flex align-items-center gap-2" href="{{ route('index') }}">
                        <x-application-logo class="d-inline-block align-text-top me-2"  width="150" height="150" />
                    </a>
                </div>
                <div class="d-flex flex-column">
                    <h2 class="text-lime-400 mb-3">YAYASAN BAITUSH SHOLIHIN</h2>
                    <address class="text-white fs-5">
                        <p>Jl. Kanayakan No.344/15b, Dago, Kecamatan Coblong, Kota Bandung, Jawa Barat 40135</p>
                        <p>Telp. <br> (+62) 8xxxxxxxxx <br> (+62) 8xxxxxxxxx</p>
                    </address>
                </div>
            </div>
            <div class="col-md-4">
                <div class="d-flex flex-row gap-5">
                    <div class="col-md-6">
                        <div class="d-flex flex-column">
                            <p class="text-white fs-4 fw-bold mb-3">QUICK LINKS</p>
                            <ul class="text-white d-flex flex-column list-unstyled gap-3">
                                <li>
                                    <x-nav-link :href="route('index')">
                                        {{ __('HOME') }}
                                    </x-nav-link>
                                </li>
                                <li>
                                    <x-nav-link :href="route('profile-yayasan')">
                                        {{ __('PROFILE') }}
                                    </x-nav-link>
                                </li>
                                <li>
                                    <x-nav-link >
                                        {{ __('DAYCARE') }}
                                    </x-nav-link>
                                </li>
                                <li>
                                    <x-nav-link >
                                        {{ __('TK') }}
                                    </x-nav-link>
                                </li>
                                <li>
                                    <x-nav-link :href="route('program-unggulan')">
                                        {{ __('PROGRAM UNGGULAN') }}
                                    </x-nav-link>
                                </li>
                                <li>
                                    <x-nav-link :href="route('faq')">
                                        {{ __('FAQ') }}
                                    </x-nav-link>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="d-flex flex-column">
                            <p class="text-white fs-4 fw-bold mb-3">SOSIAL MEDIA</p>
                            <div class="d-flex flex-column gap-4 justify-content-between align-items-start">
                                <a href="#" aria-label="Visit our WhatsApp page" class="icon-link icon-link-hover link-light">
                                    <i class="bi bi-whatsapp fs-2"></i>
                                </a>
                                <a href="#" aria-label="Visit our Instagram page" class="icon-link icon-link-hover link-light">
                                    <i class="bi bi-instagram fs-2"></i>
                                </a>
                                <a href="#" aria-label="Visit our TikTok page" class="icon-link icon-link-hover link-light">
                                    <i class="bi bi-tiktok fs-2"></i>
                                </a>
                                <a href="#" aria-label="Visit our YouTube page" class="icon-link icon-link-hover link-light">
                                    <i class="bi bi-youtube fs-2"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<div class="text-center text-white py-3 fw-bold" style="background-color: #006400;">
    Yayasan Baitush Sholihin &copy;2024. All Rights Reserved.
</div>
