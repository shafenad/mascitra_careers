@extends('layouts.navguest')

@section('title', 'Mascitra Careers')

@section('content')
<div class="home-wrap">

    {{-- HERO --}}
    <section class="container py-5">
        <div class="row align-items-center g-4">
            <div class="col-12 col-lg-6">
                <h1 class="home-title mb-2">Mascitra Careers</h1>
                <p class="home-muted mb-0">
                    Mascitra.com is an IT consulting company focused on providing integrated solutions, planning, and strategies.
                    Join our team of passionate innovators and be part of a company that turns ideas into impactful digital solutions.
                    Let’s grow, create, and shape the future of technology together.
                </p>
            </div>

            <div class="col-12 col-lg-6">
                <div class="hero-photo">
                    <img src="{{ asset('jpg/mascitrafoto.jpg') }}" alt="Team Photo" class="w-100">
                </div>
            </div>
        </div>
    </section>

    {{-- OUR PARTNERS --}}
    <section class="container pb-5">
        <h2 class="section-title text-center mb-4">Our Partners</h2>

        <div class="marquee">
            <div class="marquee-track">

                <div class="partner-item">
                    <img src="{{ asset('png/3.png') }}" alt="Telkom Indonesia">
                </div>

                <div class="partner-item">
                    <img src="{{ asset('png/2.png') }}" alt="Pertamina">
                </div>

                <div class="partner-item">
                    <img src="{{ asset('png/7.png') }}" alt="Bank Jatim">
                </div>

                <div class="partner-item">
                    <img src="{{ asset('png/4.png') }}" alt="BUMN">
                </div>

                <div class="partner-item">
                    <img src="{{ asset('png/6.png') }}" alt="Kemensos">
                </div>

                <div class="partner-item">
                    <img src="{{ asset('png/1.png') }}" alt="PJB Services">
                </div>

                {{-- DUPLIKAT MARQUEE --}}
                <div class="partner-item">
                    <img src="{{ asset('png/3.png') }}">
                </div>
                <div class="partner-item">
                    <img src="{{ asset('png/2.png') }}">
                </div>
                <div class="partner-item">
                    <img src="{{ asset('png/7.png') }}">
                </div>
                <div class="partner-item">
                    <img src="{{ asset('png/4.png') }}">
                </div>
                <div class="partner-item">
                    <img src="{{ asset('png/6.png') }}">
                </div>
                <div class="partner-item">
                    <img src="{{ asset('png/1.png') }}">
                </div>
                

                </div>
            </div>
    </section>


    {{-- AVAILABLE POSITIONS --}}
    <section class="container py-5">
        <h2 class="section-title text-center mb-2">Available Positions</h2>

        <div class="position-tabs d-flex justify-content-center gap-3 mb-4">
            <button class="tab-btn active" type="button" data-filter="all">All</button>
            <button class="tab-btn" type="button" data-filter="fulltime">Full-Time</button>
            <button class="tab-btn" type="button" data-filter="internship">Internship</button>
        </div>

        @php
            $positions = [
                ['title'=>'System Analyst Intern','type'=>'internship','badge'=>'Internship','href'=>route('detailjob', 1) ?? '#'],
                ['title'=>'Backend Developer','type'=>'fulltime','badge'=>'Fulltime','href'=>'#'],
                ['title'=>'Frontend Developer','type'=>'fulltime','badge'=>'Fulltime','href'=>'#'],
                ['title'=>'Fullstack Developer','type'=>'fulltime','badge'=>'Fulltime','href'=>'#'],
                ['title'=>'Backend Developer Intern','type'=>'internship','badge'=>'Internship','href'=>'#'],
                ['title'=>'Frontend Developer Intern','type'=>'internship','badge'=>'Internship','href'=>'#'],
                ['title'=>'Mobile Analyst Intern','type'=>'internship','badge'=>'Internship','href'=>'#'],
                ['title'=>'Content Marketing Intern','type'=>'internship','badge'=>'Internship','href'=>'#'],
            ];
        @endphp

        <div class="row g-3" id="positionGrid">
            @foreach($positions as $pos)
                <div class="col-12 col-sm-6 col-lg-3 position-card-wrap" data-type="{{ $pos['type'] }}">
                    <a href="{{ $pos['href'] }}" class="position-card">
                        <div class="position-title">{{ $pos['title'] }}</div>
                        <div class="position-badge">{{ $pos['badge'] }}</div>
                    </a>
                </div>
            @endforeach
        </div>
    </section>

    {{-- SELECTION STAGES --}}
    <section class="container py-5">
        <h2 class="section-title text-center mb-4">Tahap Seleksi</h2>


        @php
            $stages = [
                [
                    'no' => '01',
                    'label' => 'Screening',
                    'title' => 'Screening',
                    'desc' => 'Lamaran yang sudah masuk otomatis akan tersimpan dalam database dan talent acquisition team akan mereview profilmu.'
                ],
                [
                    'no' => '02',
                    'label' => 'Interview',
                    'title' => 'Interview',
                    'desc' => 'Tahap perkenalan untuk mengenal motivasi, ekspektasi, dan kesesuaian budaya kerja.'
                ],
                [
                    'no' => '03',
                    'label' => 'Offering',
                    'title' => 'Offering',
                    'desc' => 'Jika lolos, kamu akan menerima penawaran resmi berisi detail posisi dan administrasi.'
                ],
            ];
        @endphp

        <div class="mc-accordion-wrap">
            <div class="mc-accordion" id="mcAccordion">
            @foreach($stages as $i => $s)
                <button type="button"
                class="mc-stage {{ $i === 0 ? 'is-active' : '' }}"
                data-index="{{ $i }}"
                aria-expanded="{{ $i === 0 ? 'true' : 'false' }}">

                <div class="mc-collapsed">
                    <div class="mc-no">{{ $s['no'] }}</div>
                    <div class="mc-vertical">{{ $s['label'] }}</div>
                </div>

                <div class="mc-expanded">
                    <div class="mc-expanded-no">{{ $s['no'] }}</div>
                    <div class="mc-expanded-title">{{ $s['title'] }}</div>
                    <div class="mc-expanded-desc">{{ $s['desc'] }}</div>
                </div>

                </button>
            @endforeach
            </div>
        </div>
    </section>





    {{-- HEAR FROM OUR TEAM --}}
    <section class="container py-5">
        <h2 class="section-title text-center mb-4">Hear from Our Team</h2>

        @php
            $testimonials = [
                ['initial'=>'A','name'=>'Ahmad Husein','text'=>'Magang di Mascitra seru banget. Banyak belajar langsung dari proyek nyata dan timnya supportive.'],
                ['initial'=>'S','name'=>'Shavira Feby','text'=>'Tempat magang yang sangat mendukung perkembangan skill, terutama komunikasi dan kerja tim.'],
                ['initial'=>'I','name'=>'Iskandar Muda','text'=>'Pengalaman magang yang berharga. Dapat ilmu baru dan insight tentang dunia kerja.'],
                ['initial'=>'R','name'=>'Rizky','text'=>'Brief jelas, mentoring enak, dan dapat exposure tools yang dipakai industri.'],
                ['initial'=>'N','name'=>'Nadia','text'=>'Lingkungan nyaman, dikasih kesempatan eksplorasi dan berkembang.'],
            ];
        @endphp

        <div class="marquee marquee-testimonial">
            <div class="marquee-track">
                @foreach($testimonials as $t)
                    <div class="testi-card">
                        <div class="testi-avatar">{{ $t['initial'] }}</div>
                        <div class="testi-name">{{ $t['name'] }}</div>
                        <div class="testi-stars">★★★★★</div>
                        <p class="testi-text mb-0">{{ $t['text'] }}</p>
                    </div>
                @endforeach

                {{-- duplicate --}}
                @foreach($testimonials as $t)
                    <div class="testi-card">
                        <div class="testi-avatar">{{ $t['initial'] }}</div>
                        <div class="testi-name">{{ $t['name'] }}</div>
                        <div class="testi-stars">★★★★★</div>
                        <p class="testi-text mb-0">{{ $t['text'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

</div>

<button id="themeToggle" class="theme-fab" type="button" aria-label="Toggle theme">
  <i id="themeIcon" class="bi bi-moon-fill"></i>
</button>


 @include('layouts.footer')

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function () {
    const tabs = document.querySelectorAll('.tab-btn');
    const cards = document.querySelectorAll('.position-card-wrap');

    tabs.forEach(btn => {
        btn.addEventListener('click', () => {
            tabs.forEach(b => b.classList.remove('active'));
            btn.classList.add('active');

            const filter = btn.dataset.filter;

            cards.forEach(card => {
                const type = card.dataset.type;
                const show = (filter === 'all') || (type === filter);
                card.style.display = show ? '' : 'none';
            });
        });
    });
    document.querySelectorAll('.marquee').forEach(m => {
        m.addEventListener('mouseenter', () => m.classList.add('pause'));
        m.addEventListener('mouseleave', () => m.classList.remove('pause'));
    });
});
</script>

<script>
    const html = document.documentElement;
    const toggleBtn = document.getElementById('themeToggle');
    const icon = document.getElementById('themeIcon');
    const savedTheme = localStorage.getItem('theme') || 'light';
    html.setAttribute('data-bs-theme', savedTheme);
    icon.className = savedTheme === 'dark'
        ? 'bi bi-sun-fill'
        : 'bi bi-moon-fill';

    toggleBtn.addEventListener('click', () => {
        const current = html.getAttribute('data-bs-theme');
        const next = current === 'dark' ? 'light' : 'dark';

        html.setAttribute('data-bs-theme', next);
        localStorage.setItem('theme', next);

        icon.className = next === 'dark'
            ? 'bi bi-sun-fill'
            : 'bi bi-moon-fill';
    });

</script>

<script>
document.addEventListener('DOMContentLoaded', () => {
  const wrap = document.getElementById('mcAccordion');
  if (!wrap) return;

  const items = wrap.querySelectorAll('.mc-stage');

  items.forEach(btn => {
    btn.addEventListener('click', () => {
      items.forEach(x => {
        x.classList.remove('is-active');
        x.setAttribute('aria-expanded', 'false');
      });

      btn.classList.add('is-active');
      btn.setAttribute('aria-expanded', 'true');
      btn.scrollIntoView({ behavior: 'smooth', inline: 'center', block: 'nearest' });
    });
  });
});
</script>



@endpush
@endsection

