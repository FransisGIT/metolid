<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="theme-color" content="#ffffff">
<meta name="color-scheme" content="light">
<meta name="csrf-token" content="{{ csrf_token() }}">

<link rel="shortcut icon" href="{{ asset('assets/media/favicon/favicon.ico') }}" type="image/x-icon" />

<!-- Primary Meta Tags -->
<meta name="keywords"
    content="KembangIn Digital Nusantara, Software House, IT Consultant, Konsultan IT, Pengembangan Software, Jasa Pembuatan Aplikasi, Pembuatan Website, Sistem Informasi, Solusi IT, Digital Transformation, Web Development, Internet of Things, IoT, IT Support, Teknologi Informasi, Perusahaan IT Terbaik, IT Solution Provider, Aplikasi Custom, Software Development Company, Konsultan Digital, Transformasi Digital, IT Services, Software Engineering, Enterprise Solution, Aplikasi Bisnis, Startup Development, IT Infrastructure, Konsultan IT Lumajang, Konsultan IT Jember, Software House Indonesia, CV Semangat Baru Raharja, Semangat Baru Raharja, Semangat Baru" />
<meta name="author" content="CV Semangat Baru Raharja" />
<meta name="title" content="{{ $title ?? '' }} — {{ config('app.name') }}" />
<meta name="description"
    content="CV Semangat Baru Raharja is a company that sells quality products" />

<!-- Open Graph / Facebook -->
<meta property="og:type" content="website" />
<meta property="og:url" content="https://sbrdistributor.com" />
<meta property="og:author" content="CV Semangat Baru Raharja" />
<meta property="og:title" content="{{ $title ?? '' }} — {{ config('app.name') }}" />
<meta property="og:description"
    content="CV Semangat Baru Raharja is a company that sells quality products" />
<meta property="og:image" content="{{ asset('assets/media/meta-thumb.png') }}" />

<!-- Twitter -->
<meta property="twitter:card" content="summary_large_image" />
<meta property="twitter:url" content="https://sbrdistributor.com" />
<meta property="twitter:title" content="{{ $title ?? '' }} — {{ config('app.name') }}" />
<meta property="twitter:description"
    content="CV Semangat Baru Raharja is a company that sells quality products" />
<meta property="twitter:image" content="{{ asset('assets/media/meta-thumb.png') }}" />
