@extends('app', ['title' => 'Kuesioner MBG'])
@section('content')
    <section class="relative overflow-hidden bg-slate-50 text-slate-900">
        <div
            class="absolute inset-0 bg-[radial-gradient(circle_at_top_left,rgba(45,212,191,0.12),transparent_34%),radial-gradient(circle_at_top_right,rgba(250,204,21,0.12),transparent_28%),linear-gradient(180deg,rgba(248,250,252,0.96),rgba(241,245,249,1))]">
        </div>
        <div class="absolute -top-24 -left-24 h-72 w-72 rounded-full bg-emerald-400/10 blur-3xl"></div>
        <div class="absolute -right-20 top-24 h-80 w-80 rounded-full bg-amber-300/10 blur-3xl"></div>

        <div class="container relative z-10 mx-auto px-4 py-10 sm:px-6 sm:py-14 lg:px-10 lg:py-16">
            <div class="mx-auto max-w-4xl">
                <div class="mb-6 flex items-center gap-3 text-sm text-slate-600">
                    <span
                        class="inline-flex items-center rounded-full border border-emerald-400/30 bg-emerald-400/10 px-3 py-1 font-medium text-emerald-700">
                        Kuesioner MBG
                    </span>
                    <span class="hidden h-px flex-1 bg-slate-200 sm:block"></span>
                    <span>Form pendapat tentang Makan Bergizi Gratis</span>
                </div>

                <div class="grid gap-6 lg:grid-cols-[1.1fr_0.9fr]">
                    <div
                        class="rounded-4xl border border-slate-200 bg-white/95 p-6 shadow-2xl shadow-slate-200/60 backdrop-blur-xl sm:p-8">
                        <div class="mb-8">
                            <p
                                class="mb-3 inline-flex items-center rounded-full bg-slate-100 px-3 py-1 text-xs font-semibold uppercase tracking-[0.24em] text-slate-600">
                                Survei Singkat
                            </p>
                            <h1 class="max-w-2xl text-3xl font-semibold tracking-tight text-slate-900 sm:text-4xl">
                                Kuesioner Q&amp;N tentang MBG
                            </h1>
                            <p class="mt-4 max-w-2xl text-base leading-7 text-slate-600 sm:text-lg">
                                Berikan jawaban singkat mengenai pengetahuan, manfaat, dan harapan Anda terhadap program
                                MBG.
                                Tampilan ini dibuat seperti Google Form: bersih, rapi, dan mudah diisi di ponsel.
                            </p>
                        </div>

                        <div class="mb-8 grid gap-3 sm:grid-cols-3">
                            <div class="rounded-2xl border border-slate-200 bg-slate-50 p-4">
                                <p class="text-xs uppercase tracking-[0.2em] text-slate-500">Estimasi</p>
                                <p class="mt-2 text-lg font-semibold text-slate-900">3-5 menit</p>
                            </div>
                            <div class="rounded-2xl border border-slate-200 bg-slate-50 p-4">
                                <p class="text-xs uppercase tracking-[0.2em] text-slate-500">Pertanyaan</p>
                                <p class="mt-2 text-lg font-semibold text-slate-900">6 item</p>
                            </div>
                            <div class="rounded-2xl border border-slate-200 bg-slate-50 p-4">
                                <p class="text-xs uppercase tracking-[0.2em] text-slate-500">Sifat</p>
                                <p class="mt-2 text-lg font-semibold text-slate-900">Anonim</p>
                            </div>
                        </div>

                        <form method="POST" action="{{ route('questionnaire-responses.store') }}" class="space-y-5">
                            @csrf
                            <div class="rounded-3xl border border-slate-200 bg-white p-5 sm:p-6">
                                <p class="mb-4 text-sm font-medium text-emerald-600">Pertanyaan 1</p>
                                <h2 class="mb-4 text-xl font-semibold text-slate-900">Anda mengisi kuesioner ini sebagai
                                    siapa?
                                </h2>

                                <div class="grid gap-3 sm:grid-cols-2">
                                    <label
                                        class="flex cursor-pointer items-center gap-3 rounded-2xl border border-slate-200 bg-white px-4 py-3 transition hover:border-emerald-400/40 hover:bg-slate-50">
                                        <input type="radio" name="respondent_role" value="student"
                                            class="h-4 w-4 border-slate-500 text-emerald-500 focus:ring-emerald-400">
                                        <span class="text-sm text-slate-800">Siswa / pelajar</span>
                                    </label>

                                    <label
                                        class="flex cursor-pointer items-center gap-3 rounded-2xl border border-slate-200 bg-white px-4 py-3 transition hover:border-emerald-400/40 hover:bg-slate-50">
                                        <input type="radio" name="respondent_role" value="teacher"
                                            class="h-4 w-4 border-slate-500 text-emerald-500 focus:ring-emerald-400">
                                        <span class="text-sm text-slate-800">Guru / tenaga pendidik</span>
                                    </label>

                                    <label
                                        class="flex cursor-pointer items-center gap-3 rounded-2xl border border-slate-200 bg-white px-4 py-3 transition hover:border-emerald-400/40 hover:bg-slate-50">
                                        <input type="radio" name="respondent_role" value="parent"
                                            class="h-4 w-4 border-slate-500 text-emerald-500 focus:ring-emerald-400">
                                        <span class="text-sm text-slate-800">Orang tua</span>
                                    </label>

                                    <label
                                        class="flex cursor-pointer items-center gap-3 rounded-2xl border border-slate-200 bg-white px-4 py-3 transition hover:border-emerald-400/40 hover:bg-slate-50">
                                        <input type="radio" name="respondent_role" value="public"
                                            class="h-4 w-4 border-slate-500 text-emerald-500 focus:ring-emerald-400">
                                        <span class="text-sm text-slate-800">Masyarakat umum</span>
                                    </label>
                                </div>
                            </div>

                            <div class="rounded-3xl border border-slate-200 bg-white p-5 sm:p-6">
                                <p class="mb-4 text-sm font-medium text-emerald-600">Pertanyaan 2</p>
                                <h2 class="mb-4 text-xl font-semibold text-slate-900">Seberapa familiar Anda dengan program
                                    MBG?
                                </h2>

                                <div class="grid gap-3 sm:grid-cols-2">
                                    <label
                                        class="flex cursor-pointer items-center gap-3 rounded-2xl border border-slate-200 bg-white px-4 py-3 transition hover:border-emerald-400/40 hover:bg-slate-50">
                                        <input type="radio" name="familiarity" value="very_familiar"
                                            class="h-4 w-4 border-slate-500 text-emerald-500 focus:ring-emerald-400">
                                        <span class="text-sm text-slate-800">Sangat familiar</span>
                                    </label>

                                    <label
                                        class="flex cursor-pointer items-center gap-3 rounded-2xl border border-slate-200 bg-white px-4 py-3 transition hover:border-emerald-400/40 hover:bg-slate-50">
                                        <input type="radio" name="familiarity" value="heard_of_it"
                                            class="h-4 w-4 border-slate-500 text-emerald-500 focus:ring-emerald-400">
                                        <span class="text-sm text-slate-800">Pernah mendengar</span>
                                    </label>

                                    <label
                                        class="flex cursor-pointer items-center gap-3 rounded-2xl border border-slate-200 bg-white px-4 py-3 transition hover:border-emerald-400/40 hover:bg-slate-50">
                                        <input type="radio" name="familiarity" value="less_familiar"
                                            class="h-4 w-4 border-slate-500 text-emerald-500 focus:ring-emerald-400">
                                        <span class="text-sm text-slate-800">Kurang familiar</span>
                                    </label>

                                    <label
                                        class="flex cursor-pointer items-center gap-3 rounded-2xl border border-slate-200 bg-white px-4 py-3 transition hover:border-emerald-400/40 hover:bg-slate-50">
                                        <input type="radio" name="familiarity" value="first_time"
                                            class="h-4 w-4 border-slate-500 text-emerald-500 focus:ring-emerald-400">
                                        <span class="text-sm text-slate-800">Baru pertama kali tahu</span>
                                    </label>
                                </div>
                            </div>

                            <div class="rounded-3xl border border-slate-200 bg-white p-5 sm:p-6">
                                <p class="mb-4 text-sm font-medium text-emerald-300">Pertanyaan 3</p>
                                <h2 class="mb-4 text-xl font-semibold text-black">Menurut Anda, apa tujuan utama MBG?</h2>

                                <div class="space-y-3">
                                    <label
                                        class="flex cursor-pointer items-start gap-3 rounded-2xl border border-slate-200 bg-white px-4 py-3 transition hover:border-amber-400/40 hover:bg-slate-50">
                                        <input type="radio" name="purpose" value="improve_nutrition"
                                            class="mt-1 h-4 w-4 border-slate-500 text-amber-500 focus:ring-amber-300">
                                        <span class="text-sm text-black">Meningkatkan gizi anak dan remaja</span>
                                    </label>

                                    <label
                                        class="flex cursor-pointer items-start gap-3 rounded-2xl border border-slate-200 bg-white px-4 py-3 transition hover:border-amber-400/40 hover:bg-slate-50">
                                        <input type="radio" name="purpose" value="help_family_economy"
                                            class="mt-1 h-4 w-4 border-slate-500 text-amber-500 focus:ring-amber-300">
                                        <span class="text-sm text-black">Membantu ekonomi keluarga</span>
                                    </label>

                                    <label
                                        class="flex cursor-pointer items-start gap-3 rounded-2xl border border-slate-200 bg-white px-4 py-3 transition hover:border-amber-400/40 hover:bg-slate-50">
                                        <input type="radio" name="purpose" value="improve_learning"
                                            class="mt-1 h-4 w-4 border-slate-500 text-amber-500 focus:ring-amber-300">
                                        <span class="text-sm text-black">Menambah kualitas belajar peserta didik</span>
                                    </label>
                                </div>
                            </div>

                            <div class="rounded-3xl border border-slate-200 bg-white p-5 sm:p-6">
                                <p class="mb-4 text-sm font-medium text-emerald-600">Pertanyaan 4</p>
                                <h2 class="mb-4 text-xl font-semibold text-black">Sumber informasi MBG yang paling sering
                                    Anda lihat</h2>

                                <div class="grid gap-3 sm:grid-cols-2">
                                    <label
                                        class="flex cursor-pointer items-center gap-3 rounded-2xl border border-slate-200 bg-white px-4 py-3 transition hover:border-sky-400/40 hover:bg-slate-50">
                                        <input type="radio" name="information_source" value="social_media"
                                            class="h-4 w-4 border-slate-500 text-sky-500 focus:ring-sky-400">
                                        <span class="text-sm text-black">Media sosial</span>
                                    </label>

                                    <label
                                        class="flex cursor-pointer items-center gap-3 rounded-2xl border border-slate-200 bg-white px-4 py-3 transition hover:border-sky-400/40 hover:bg-slate-50">
                                        <input type="radio" name="information_source" value="online_news"
                                            class="h-4 w-4 border-slate-500 text-sky-500 focus:ring-sky-400">
                                        <span class="text-sm text-black">Berita online</span>
                                    </label>

                                    <label
                                        class="flex cursor-pointer items-center gap-3 rounded-2xl border border-slate-200 bg-white px-4 py-3 transition hover:border-sky-400/40 hover:bg-slate-50">
                                        <input type="radio" name="information_source" value="school_campus"
                                            class="h-4 w-4 border-slate-500 text-sky-500 focus:ring-sky-400">
                                        <span class="text-sm text-black">Sekolah / kampus</span>
                                    </label>

                                    <label
                                        class="flex cursor-pointer items-center gap-3 rounded-2xl border border-slate-200 bg-white px-4 py-3 transition hover:border-sky-400/40 hover:bg-slate-50">
                                        <input type="radio" name="information_source" value="family_friends"
                                            class="h-4 w-4 border-slate-500 text-sky-500 focus:ring-sky-400">
                                        <span class="text-sm text-black">Keluarga / teman</span>
                                    </label>
                                </div>
                            </div>

                            <div class="rounded-3xl border border-slate-200 bg-white p-5 sm:p-6">
                                <p class="mb-4 text-sm font-medium text-emerald-600">Pertanyaan 5</p>
                                <h2 class="mb-4 text-xl font-semibold text-black">Manfaat MBG yang paling Anda harapkan
                                    adalah?</h2>

                                <div class="grid gap-3 sm:grid-cols-2">
                                    <label
                                        class="flex cursor-pointer items-center gap-3 rounded-2xl border border-slate-200 bg-white px-4 py-3 transition hover:border-emerald-400/40 hover:bg-slate-50">
                                        <input type="radio" name="expected_benefit" value="better_nutrition"
                                            class="h-4 w-4 border-slate-500 text-emerald-500 focus:ring-emerald-400">
                                        <span class="text-sm text-black">Gizi lebih baik</span>
                                    </label>

                                    <label
                                        class="flex cursor-pointer items-center gap-3 rounded-2xl border border-slate-200 bg-white px-4 py-3 transition hover:border-emerald-400/40 hover:bg-slate-50">
                                        <input type="radio" name="expected_benefit" value="increased_learning"
                                            class="h-4 w-4 border-slate-500 text-emerald-500 focus:ring-emerald-400">
                                        <span class="text-sm text-black">Semangat belajar meningkat</span>
                                    </label>

                                    <label
                                        class="flex cursor-pointer items-center gap-3 rounded-2xl border border-slate-200 bg-white px-4 py-3 transition hover:border-emerald-400/40 hover:bg-slate-50">
                                        <input type="radio" name="expected_benefit" value="save_family_budget"
                                            class="h-4 w-4 border-slate-500 text-emerald-500 focus:ring-emerald-400">
                                        <span class="text-sm text-black">Membantu keluarga menghemat biaya</span>
                                    </label>

                                    <label
                                        class="flex cursor-pointer items-center gap-3 rounded-2xl border border-slate-200 bg-white px-4 py-3 transition hover:border-emerald-400/40 hover:bg-slate-50">
                                        <input type="radio" name="expected_benefit" value="equal_access"
                                            class="h-4 w-4 border-slate-500 text-emerald-500 focus:ring-emerald-400">
                                        <span class="text-sm text-black">Pemerataan akses makanan sehat</span>
                                    </label>
                                </div>
                            </div>

                            <div class="rounded-3xl border border-amber-200 bg-amber-50 p-5 sm:p-6">
                                <p class="mb-4 text-sm font-medium text-amber-700">Pertanyaan 6</p>
                                <h2 class="mb-4 text-xl font-semibold text-black">Perbaikan yang paling perlu didahulukan
                                    pada MBG adalah?</h2>

                                <div class="grid gap-3 sm:grid-cols-2">
                                    <label
                                        class="flex cursor-pointer items-center gap-3 rounded-2xl border border-slate-200 bg-white px-4 py-3 transition hover:border-amber-300/40 hover:bg-slate-50">
                                        <input type="radio" name="improvement_priority" value="menu_quality"
                                            class="h-4 w-4 border-slate-500 text-amber-500 focus:ring-amber-300">
                                        <span class="text-sm text-black">Kualitas menu</span>
                                    </label>

                                    <label
                                        class="flex cursor-pointer items-center gap-3 rounded-2xl border border-slate-200 bg-white px-4 py-3 transition hover:border-amber-300/40 hover:bg-slate-50">
                                        <input type="radio" name="improvement_priority" value="target_accuracy"
                                            class="h-4 w-4 border-slate-500 text-amber-500 focus:ring-amber-300">
                                        <span class="text-sm text-black">Ketepatan sasaran penerima</span>
                                    </label>

                                    <label
                                        class="flex cursor-pointer items-center gap-3 rounded-2xl border border-slate-200 bg-white px-4 py-3 transition hover:border-amber-300/40 hover:bg-slate-50">
                                        <input type="radio" name="improvement_priority" value="distribution_time"
                                            class="h-4 w-4 border-slate-500 text-amber-500 focus:ring-amber-300">
                                        <span class="text-sm text-black">Waktu distribusi</span>
                                    </label>

                                    <label
                                        class="flex cursor-pointer items-center gap-3 rounded-2xl border border-slate-200 bg-white px-4 py-3 transition hover:border-amber-300/40 hover:bg-slate-50">
                                        <input type="radio" name="improvement_priority" value="socialization"
                                            class="h-4 w-4 border-slate-500 text-amber-500 focus:ring-amber-300">
                                        <span class="text-sm text-black">Sosialisasi program</span>
                                    </label>
                                </div>
                            </div>

                            <div class="flex flex-col gap-3 sm:flex-row sm:items-center sm:justify-between">
                                <p class="text-sm text-slate-600">Jawaban Anda akan digunakan untuk kebutuhan survei dan
                                    evaluasi.</p>
                                <div class="flex gap-3">
                                    <button type="reset"
                                        class="inline-flex items-center justify-center rounded-full border border-slate-200 bg-white px-5 py-3 text-sm font-medium text-slate-700 transition hover:bg-slate-50">
                                        Reset
                                    </button>
                                    <button type="submit"
                                        class="inline-flex items-center justify-center rounded-full bg-linear-to-r from-emerald-400 to-amber-300 px-6 py-3 text-sm font-semibold text-slate-900 shadow-lg shadow-emerald-400/20 transition hover:scale-[1.02] hover:shadow-emerald-400/30">
                                        Kirim Jawaban
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>

                    <aside
                        class="space-y-5 self-start rounded-4xl border border-slate-200 bg-white/95 p-5 shadow-2xl shadow-slate-200/60 backdrop-blur-xl sm:p-6 lg:sticky lg:top-8">
                        <div>
                            <p class="text-sm font-medium text-slate-700">Ringkasan form</p>
                            <div class="mt-4 space-y-3">
                                <div class="rounded-2xl border border-slate-200 bg-slate-50 p-4">
                                    <p class="text-xs uppercase tracking-[0.18em] text-slate-500">Topik</p>
                                    <p class="mt-2 text-base font-semibold text-slate-900">Program Makan Bergizi Gratis</p>
                                </div>
                                <div class="rounded-2xl border border-slate-200 bg-slate-50 p-4">
                                    <p class="text-xs uppercase tracking-[0.18em] text-slate-500">Format</p>
                                    <p class="mt-2 text-base font-semibold text-slate-900">Pilihan ganda, checkbox, dan
                                        isian
                                        singkat</p>
                                </div>
                                <div class="rounded-2xl border border-slate-200 bg-slate-50 p-4">
                                    <p class="text-xs uppercase tracking-[0.18em] text-slate-500">Target responden</p>
                                    <p class="mt-2 text-base font-semibold text-slate-900">Pelajar, orang tua, dan
                                        masyarakat
                                        umum</p>
                                </div>
                            </div>
                        </div>

                        <div class="rounded-3xl border border-emerald-200 bg-emerald-50 p-5">
                            <p class="text-sm font-medium text-emerald-700">Tips pengisian</p>
                            <ul class="mt-3 space-y-2 text-sm leading-6 text-slate-700">
                                <li>• Pilih jawaban yang paling mendekati pendapat Anda.</li>
                                <li>• Jika belum tahu, pilih opsi yang paling aman menurut Anda.</li>
                                <li>• Gunakan kolom saran untuk masukan yang lebih detail.</li>
                            </ul>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </section>

    @push('script')
        {{-- Animasi AOS --}}
        <script>
            AOS.init({
                duration: 800,
                once: true,
                debounceDelay: 50,
                throttleDelay: 99,
            });
        </script>

        <script>
            function toggleSwiperAutoplayByVisibility(swiperInstance, selector, threshold = 0.2) {
                const target = document.querySelector(selector);

                if (!swiperInstance || !target || !swiperInstance.autoplay) {
                    return;
                }

                const observer = new IntersectionObserver((entries) => {
                    entries.forEach(entry => {
                        if (entry.isIntersecting) {
                            swiperInstance.autoplay.start();
                        } else {
                            swiperInstance.autoplay.stop();
                        }
                    });
                }, {
                    threshold,
                });

                observer.observe(target);
            }

            const isMobileDevice = window.matchMedia('(max-width: 768px)').matches;
        </script>

        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const queued = [];
                const queuedSet = new Set();
                let isLoading = false;

                const pendingImages = Array.from(document.querySelectorAll('img[data-seq-src]'))
                    .filter((img) => img.dataset.seqSrc && img.dataset.seqSrc.trim() !== '');

                if (pendingImages.length === 0) {
                    return;
                }

                const getAbsoluteTop = (el) => {
                    const rect = el.getBoundingClientRect();
                    return rect.top + window.scrollY;
                };

                const loadNext = () => {
                    if (isLoading || queued.length === 0) {
                        return;
                    }

                    const img = queued.shift();
                    const src = img.dataset.seqSrc;
                    if (!src) {
                        loadNext();
                        return;
                    }

                    isLoading = true;
                    const preloader = new Image();
                    preloader.decoding = 'async';

                    const finish = () => {
                        img.src = src;
                        img.removeAttribute('data-seq-src');
                        isLoading = false;
                        loadNext();
                    };

                    preloader.onload = finish;
                    preloader.onerror = finish;
                    preloader.src = src;
                };

                const enqueueImages = (images) => {
                    images.forEach((img) => {
                        if (!img.dataset.seqSrc || queuedSet.has(img)) {
                            return;
                        }

                        queuedSet.add(img);
                        queued.push(img);
                    });

                    loadNext();
                };

                const observer = new IntersectionObserver((entries) => {
                    const visible = entries
                        .filter((entry) => entry.isIntersecting)
                        .map((entry) => entry.target)
                        .sort((a, b) => getAbsoluteTop(a) - getAbsoluteTop(b));

                    visible.forEach((img) => observer.unobserve(img));
                    enqueueImages(visible);
                }, {
                    rootMargin: '300px 0px',
                    threshold: 0.01,
                });

                pendingImages
                    .sort((a, b) => getAbsoluteTop(a) - getAbsoluteTop(b))
                    .forEach((img) => observer.observe(img));
            });
        </script>

        <script>
            const heroEl = document.querySelector('.mySwiper');
            if (heroEl) {
                var heroSwiper = new Swiper(".mySwiper", {
                    slidesPerView: 1,
                    spaceBetween: 30,
                    loop: true,
                    speed: 520,
                    autoplay: isMobileDevice ? false : {
                        delay: 5000,
                        disableOnInteraction: false,
                    },
                    keyboard: {
                        enabled: true,
                    },
                    watchSlidesProgress: true,
                    pagination: {
                        el: ".mySwiper .swiper-pagination",
                        clickable: true,
                    },
                    navigation: {
                        nextEl: ".mySwiper .swiper-button-next",
                        prevEl: ".mySwiper .swiper-button-prev",
                    },
                });

                if (!isMobileDevice) {
                    toggleSwiperAutoplayByVisibility(heroSwiper, '.mySwiper', 0.15);
                }
            }
        </script>

        <script>
            const partnerEl = document.querySelector('.partner-swiper');
            if (partnerEl) {
                var partnerSwiper = new Swiper('.partner-swiper', {
                    slidesPerView: 'auto',
                    spaceBetween: 12,
                    loop: false,
                    speed: 500,
                    autoplay: false,
                    watchSlidesProgress: true,
                    watchOverflow: true,
                    centerInsufficientSlides: true,
                    slidesOffsetBefore: 8,
                    slidesOffsetAfter: 8,
                    navigation: {
                        nextEl: '.partner-next',
                        prevEl: '.partner-prev'
                    }
                });
            }
        </script>

        <script>
            const articleEl = document.querySelector('.articleSwiper');
            if (articleEl) {
                var articleSwiper = new Swiper('.articleSwiper', {
                    slidesPerView: 1,
                    spaceBetween: 16,
                    speed: 450,
                    autoplay: false,
                    watchSlidesProgress: true,
                    pagination: {
                        el: '.article-pagination',
                        clickable: true,
                    },
                    navigation: {
                        nextEl: '.article-next',
                        prevEl: '.article-prev',
                    },
                    grid: {
                        rows: 2,
                        fill: 'row',
                    },
                    breakpoints: {
                        768: {
                            slidesPerView: 2,
                            spaceBetween: 24,
                            grid: {
                                rows: 2,
                                fill: 'row',
                            },
                        },
                    },
                });
            }
        </script>

        <script>
            const categoryEl = document.querySelector('.categorySwiper');
            if (categoryEl) {
                var categorySwiper = new Swiper('.categorySwiper', {
                    slidesPerView: 1,
                    spaceBetween: 10,
                    loop: false,
                    cssMode: true,
                    watchOverflow: true,
                    preloadImages: false,
                    watchSlidesProgress: true,
                    resistanceRatio: 0.6,
                    longSwipesRatio: 0.15,
                    touchStartPreventDefault: false,
                    touchReleaseOnEdges: true,
                    simulateTouch: true,
                    threshold: 5,
                    lazy: {
                        loadPrevNext: true,
                        loadOnTransitionStart: true,
                    },
                    breakpoints: {
                        640: {
                            slidesPerView: 2,
                            spaceBetween: 12
                        },
                        768: {
                            slidesPerView: 3,
                            spaceBetween: 14
                        },
                        1024: {
                            slidesPerView: 5,
                            spaceBetween: 16
                        },
                        1280: {
                            slidesPerView: 5,
                            spaceBetween: 16
                        }
                    },
                    navigation: {
                        nextEl: '.category-next',
                        prevEl: '.category-prev'
                    }
                });
            }
        </script>

        {{-- Swiper: progress slide --}}
        <script>
            const progressEl = document.querySelector('.progress-slide-carousel');
            if (progressEl) {
                var swiper = new Swiper(".progress-slide-carousel", {
                    loop: true,
                    autoplay: isMobileDevice ? false : {
                        delay: 1500,
                        disableOnInteraction: false
                    },
                    pagination: {
                        el: ".progress-slide-carousel .swiper-pagination",
                        type: "progressbar"
                    },
                });
            }
        </script>



        {{-- Swiper: multiple slide --}}
        <script>
            const galleryEl = document.querySelector('.multiple-slide-carousel');
            if (galleryEl) {
                var gallerySwiper = new Swiper(".multiple-slide-carousel", {
                    slidesPerView: 1,
                    grabCursor: true,
                    spaceBetween: 10,
                    autoplay: false,
                    speed: 420,
                    navigation: {
                        nextEl: ".gallery-next",
                        prevEl: ".gallery-prev",
                    },
                    grid: {
                        rows: 2,
                        fill: 'row'
                    },
                    breakpoints: {
                        700: {
                            slidesPerView: 3,
                            spaceBetween: 0,
                            grid: {
                                rows: 2,
                                fill: 'row'
                            },
                        },
                        990: {
                            slidesPerView: 3,
                            spaceBetween: 10
                        },
                        1028: {
                            slidesPerView: 3,
                            spaceBetween: 10,
                            grid: {
                                rows: 2,
                                fill: 'row'
                            },
                        },
                        1920: {
                            slidesPerView: 3,
                            spaceBetween: 10,
                            grid: {
                                rows: 2,
                                fill: 'row'
                            },
                        },
                    },
                });
            }
        </script>

        {{-- Swiper: multiple slide --}}
        <script>
            const testimonialEl = document.querySelector('.testimonial-swiper');
            if (testimonialEl) {
                var testimonialSwiper = new Swiper(".testimonial-swiper", {
                    slidesPerView: 1,
                    grabCursor: true,
                    spaceBetween: 0,
                    loop: false,
                    autoplay: false,
                    speed: 420,
                    navigation: {
                        nextEl: ".testimonial-next",
                        prevEl: ".testimonial-prev",
                    },
                    breakpoints: {
                        700: {
                            slidesPerView: 1,
                            spaceBetween: 0
                        },
                        990: {
                            slidesPerView: 1,
                            spaceBetween: 0
                        },
                        1028: {
                            slidesPerView: 1,
                            spaceBetween: 0
                        },
                        1920: {
                            slidesPerView: 1,
                            spaceBetween: 0
                        },
                    },
                });
            }
        </script>

        <script>
            document.addEventListener("DOMContentLoaded", function() {
                const images = document.querySelectorAll(".gallery-image");
                const overlay = document.getElementById("imageOverlay");
                const overlayImage = document.getElementById("overlayImage");
                const closeBtn = document.getElementById("closeOverlay");

                images.forEach(img => {
                    img.addEventListener("click", () => {
                        overlayImage.src = img.src;
                        overlay.classList.remove("hidden");
                    });
                });

                closeBtn.addEventListener("click", () => {
                    overlay.classList.add("hidden");
                    overlayImage.src = "";
                });

                overlay.addEventListener("click", (e) => {
                    if (e.target === overlay) {
                        overlay.classList.add("hidden");
                        overlayImage.src = "";
                    }
                });

                document.addEventListener("keydown", (e) => {
                    if (e.key === "Escape" || e.key === "Esc") {
                        if (!overlay.classList.contains("hidden")) {
                            overlay.classList.add("hidden");
                            overlayImage.src = "";
                        }
                    }
                });
            });
        </script>

        <script>
            document.addEventListener("DOMContentLoaded", function() {
                const modal = document.getElementById("youtubeModal");
                const iframe = document.getElementById("youtubeIframe");
                const fallback = document.getElementById("youtubeFallback");
                const openButtons = document.querySelectorAll("[data-youtube-url]");
                const closeTargets = document.querySelectorAll("[data-youtube-close]");

                if (!modal || !iframe || openButtons.length === 0) {
                    return;
                }

                const buildEmbedUrl = (rawUrl) => {
                    if (!rawUrl) {
                        return "";
                    }

                    const trimmed = rawUrl.trim();
                    const sanitized = trimmed.replace(/^["']+|["']+$/g, "");
                    let url = sanitized;
                    let videoId = "";
                    let listId = "";

                    const directMatch = sanitized.match(
                        /(?:youtu\.be\/|youtube\.com\/(?:watch\?v=|embed\/|shorts\/|live\/|v\/))([A-Za-z0-9_-]{6,})/
                    );

                    if (directMatch) {
                        videoId = directMatch[1];
                    }

                    if (!/^https?:\/\//i.test(url)) {
                        url = "https://" + url;
                    }

                    try {
                        const parsed = new URL(url);
                        listId = parsed.searchParams.get("list") || "";

                        if (!videoId && parsed.hostname.includes("youtu.be")) {
                            videoId = parsed.pathname.replace("/", "");
                        }

                        if (!videoId && parsed.searchParams.get("v")) {
                            videoId = parsed.searchParams.get("v");
                        }

                        if (!videoId && parsed.pathname.includes("/embed/")) {
                            videoId = parsed.pathname.split("/embed/")[1] || "";
                        }

                        if (!videoId && parsed.pathname.includes("/shorts/")) {
                            videoId = parsed.pathname.split("/shorts/")[1] || "";
                        }

                        if (!videoId && parsed.pathname.includes("/live/")) {
                            videoId = parsed.pathname.split("/live/")[1] || "";
                        }
                    } catch (error) {
                        // Keep fallback values.
                    }

                    if (!videoId && /^[A-Za-z0-9_-]{11}$/.test(sanitized)) {
                        videoId = sanitized;
                    }

                    if (videoId) {
                        videoId = videoId.split(/[?&/]/)[0];
                    }

                    if (videoId) {
                        const listParam = listId ? "&list=" + listId : "";
                        return "https://www.youtube.com/embed/" + videoId + "?autoplay=1&rel=0" + listParam;
                    }

                    if (listId) {
                        return "https://www.youtube.com/embed/videoseries?list=" + listId + "&autoplay=1&rel=0";
                    }

                    return "";
                };

                const openModal = (url) => {
                    const embedUrl = buildEmbedUrl(url);

                    if (fallback) {
                        fallback.classList.add("hidden");
                    }

                    if (!embedUrl) {
                        iframe.src = "";
                        iframe.classList.add("hidden");
                        if (fallback) {
                            fallback.classList.remove("hidden");
                        }
                    } else {
                        iframe.classList.remove("hidden");
                        iframe.src = embedUrl;
                    }

                    modal.classList.remove("hidden");
                    modal.classList.add("flex");
                    document.body.classList.add("overflow-hidden");
                };

                const closeModal = () => {
                    iframe.src = "";
                    iframe.classList.remove("hidden");
                    if (fallback) {
                        fallback.classList.add("hidden");
                    }
                    modal.classList.add("hidden");
                    modal.classList.remove("flex");
                    document.body.classList.remove("overflow-hidden");
                };

                openButtons.forEach((button) => {
                    button.addEventListener("click", () => {
                        openModal(button.dataset.youtubeUrl);
                    });
                });

                closeTargets.forEach((target) => {
                    target.addEventListener("click", closeModal);
                });

                document.addEventListener("keydown", (e) => {
                    if ((e.key === "Escape" || e.key === "Esc") && !modal.classList.contains("hidden")) {
                        closeModal();
                    }
                });
            });
        </script>

        <script>
            document.addEventListener("DOMContentLoaded", function() {
                const readMoreBtns = document.querySelectorAll(".read-more-btn");

                readMoreBtns.forEach(btn => {
                    btn.addEventListener("click", function() {
                        const contentElement = this.previousElementSibling;
                        const isExpanded = contentElement.classList.contains("line-clamp-none");

                        if (isExpanded) {
                            contentElement.classList.remove("line-clamp-none");
                            contentElement.classList.add("line-clamp-4");
                            this.textContent = "Selengkapnya";
                        } else {
                            contentElement.classList.remove("line-clamp-4");
                            contentElement.classList.add("line-clamp-none");
                            this.textContent = "Sembunyikan";
                        }
                    });
                });
            });
        </script>

        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const filterButtons = Array.from(document.querySelectorAll('.achievement-filter-btn'));
                const categorySelect = document.getElementById('achievementCategorySelect');
                const cards = Array.from(document.querySelectorAll('[data-achievement-card]'));
                const emptyState = document.getElementById('achievementEmptyState');

                if (cards.length === 0) {
                    return;
                }

                const activeClasses = ['bg-[#7a4306]', 'text-white', 'border-[#7a4306]'];
                const inactiveClasses = ['bg-white', 'text-default-700', 'border-default-200'];

                const setActiveButton = (value) => {
                    filterButtons.forEach((button) => {
                        const isActive = button.dataset.achievementFilter === value;

                        activeClasses.forEach((className) => {
                            button.classList.toggle(className, isActive);
                        });

                        inactiveClasses.forEach((className) => {
                            button.classList.toggle(className, !isActive);
                        });
                    });
                };

                const applyFilter = (value) => {
                    let visibleCount = 0;

                    cards.forEach((card) => {
                        const categoryId = card.dataset.achievementCategory;
                        const isVisible = value === 'all' || categoryId === value;

                        card.classList.toggle('hidden', !isVisible);

                        if (isVisible) {
                            visibleCount += 1;
                        }
                    });

                    if (emptyState) {
                        emptyState.classList.toggle('hidden', visibleCount > 0);
                    }

                    setActiveButton(value);

                    if (categorySelect && categorySelect.value !== value) {
                        categorySelect.value = value;
                    }

                    document.dispatchEvent(new CustomEvent('achievement:filtered'));
                };

                filterButtons.forEach((button) => {
                    button.addEventListener('click', function() {
                        applyFilter(this.dataset.achievementFilter || 'all');
                    });
                });

                if (categorySelect) {
                    categorySelect.addEventListener('change', function() {
                        applyFilter(this.value || 'all');
                    });
                }

                applyFilter('all');
            });
        </script>

        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const filterButtons = Array.from(document.querySelectorAll('.certificate-filter-btn'));
                const categorySelect = document.getElementById('certificateCategorySelect');
                const cards = Array.from(document.querySelectorAll('[data-certificate-card]'));
                const emptyState = document.getElementById('certificateEmptyState');

                if (cards.length === 0) {
                    return;
                }

                const activeClasses = ['bg-amber-700', 'text-white', 'border-amber-700'];
                const inactiveClasses = ['bg-white', 'text-default-700', 'border-default-200'];

                const setActiveButton = (value) => {
                    filterButtons.forEach((button) => {
                        const isActive = button.dataset.certificateFilter === value;

                        activeClasses.forEach((className) => {
                            button.classList.toggle(className, isActive);
                        });

                        inactiveClasses.forEach((className) => {
                            button.classList.toggle(className, !isActive);
                        });
                    });
                };

                const applyFilter = (value) => {
                    let visibleCount = 0;

                    cards.forEach((card) => {
                        const category = card.dataset.certificateCategory;
                        const isVisible = value === 'all' || category === value;

                        card.classList.toggle('hidden', !isVisible);

                        if (isVisible) {
                            visibleCount += 1;
                        }
                    });

                    if (emptyState) {
                        emptyState.classList.toggle('hidden', visibleCount > 0);
                    }

                    setActiveButton(value);

                    if (categorySelect && categorySelect.value !== value) {
                        categorySelect.value = value;
                    }
                };

                filterButtons.forEach((button) => {
                    button.addEventListener('click', function() {
                        applyFilter(this.dataset.certificateFilter || 'all');
                    });
                });

                if (categorySelect) {
                    categorySelect.addEventListener('change', function() {
                        applyFilter(this.value || 'all');
                    });
                }

                applyFilter('all');
            });
        </script>

        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const isMobileViewport = () => window.matchMedia('(max-width: 767px)').matches;

                const createMobileClampController = ({
                    clampEl,
                    blurEl,
                    buttonEl,
                    getVisibleCards,
                }) => {
                    let isExpanded = false;

                    const setExpandedState = (expanded) => {
                        isExpanded = expanded;
                        if (buttonEl) {
                            buttonEl.textContent = expanded ? 'Show Less' : 'Show More';
                        }
                    };

                    const hideControls = () => {
                        if (buttonEl) {
                            buttonEl.classList.add('hidden');
                        }
                        if (blurEl) {
                            blurEl.classList.add('hidden');
                        }
                    };

                    const refresh = () => {
                        if (!clampEl) {
                            return;
                        }

                        const cards = getVisibleCards();
                        const isMobile = isMobileViewport();

                        if (!isMobile) {
                            setExpandedState(false);
                            clampEl.style.maxHeight = 'none';
                            clampEl.style.overflow = 'visible';
                            hideControls();
                            return;
                        }

                        clampEl.style.overflow = 'hidden';

                        if (cards.length <= 3) {
                            setExpandedState(false);
                            clampEl.style.maxHeight = 'none';
                            hideControls();
                            return;
                        }

                        if (buttonEl) {
                            buttonEl.classList.remove('hidden');
                        }

                        if (isExpanded) {
                            clampEl.style.maxHeight = `${clampEl.scrollHeight}px`;
                            if (blurEl) {
                                blurEl.classList.add('hidden');
                            }
                            return;
                        }

                        const fourthCard = cards[3];
                        const peekHeight = Math.max(52, Math.round(fourthCard.offsetHeight * 0.22));
                        const collapsedHeight = fourthCard.offsetTop + peekHeight;

                        clampEl.style.maxHeight = `${collapsedHeight}px`;
                        if (blurEl) {
                            blurEl.classList.remove('hidden');
                        }
                    };

                    if (buttonEl) {
                        buttonEl.addEventListener('click', function() {
                            setExpandedState(!isExpanded);
                            refresh();
                        });
                    }

                    return {
                        refresh,
                        collapse: () => {
                            setExpandedState(false);
                        },
                    };
                };

                const valuesClamp = createMobileClampController({
                    clampEl: document.getElementById('valuesMobileClamp'),
                    blurEl: document.getElementById('valuesBlurHint'),
                    buttonEl: document.getElementById('valuesShowMoreBtn'),
                    getVisibleCards: () => Array.from(document.querySelectorAll('.value-mobile-card')),
                });

                const achievementClamp = createMobileClampController({
                    clampEl: document.getElementById('achievementMobileClamp'),
                    blurEl: document.getElementById('achievementBlurHint'),
                    buttonEl: document.getElementById('achievementShowMoreBtn'),
                    getVisibleCards: () => Array.from(document.querySelectorAll('[data-achievement-card]'))
                        .filter((card) => !card.classList.contains('hidden')),
                });

                const refreshMobileClamps = () => {
                    valuesClamp?.refresh();
                    achievementClamp?.refresh();
                };

                window.addEventListener('resize', refreshMobileClamps);

                document.addEventListener('achievement:filtered', function() {
                    achievementClamp?.collapse();
                    achievementClamp?.refresh();
                });

                refreshMobileClamps();
            });
        </script>

        <script>
            // Animated Counter
            function animateCounter(element) {
                const target = parseInt(element.getAttribute('data-target'));
                const duration = 2000; // 2 seconds
                const increment = target / (duration / 16); // 60fps
                let current = 0;

                // Cancel any ongoing animation
                if (element.animationFrame) {
                    cancelAnimationFrame(element.animationFrame);
                }

                const updateCounter = () => {
                    current += increment;
                    if (current < target) {
                        element.textContent = Math.floor(current);
                        element.animationFrame = requestAnimationFrame(updateCounter);
                    } else {
                        element.textContent = target;
                        element.animationFrame = null;
                    }
                };

                updateCounter();
            }

            // Reset counter to 0
            function resetCounter(element) {
                if (element.animationFrame) {
                    cancelAnimationFrame(element.animationFrame);
                    element.animationFrame = null;
                }
                element.textContent = '0';
            }

            // Intersection Observer to trigger animation when in viewport (repeatable)
            document.addEventListener("DOMContentLoaded", function() {
                const counters = document.querySelectorAll('.counter');

                const observerOptions = {
                    threshold: 0.3,
                    rootMargin: '0px'
                };

                const observer = new IntersectionObserver((entries) => {
                    entries.forEach(entry => {
                        if (entry.isIntersecting) {
                            // Animate when entering viewport
                            counters.forEach(counter => {
                                animateCounter(counter);
                            });
                        } else {
                            // Reset when leaving viewport
                            counters.forEach(counter => {
                                resetCounter(counter);
                            });
                        }
                    });
                }, observerOptions);

                // Observe the stats section
                if (counters.length > 0) {
                    const statsSection = counters[0].closest('section');
                    if (statsSection) {
                        observer.observe(statsSection);
                    }
                }
            });
        </script>
    @endpush
@endsection
