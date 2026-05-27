@extends('app', ['title' => 'Home'])
@section('content')
    <section class="relative pb-12 overflow-hidden">
        <div class="container relative z-10 px-4 sm:px-6 lg:px-10">

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
