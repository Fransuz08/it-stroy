<section class="section directions" id="directions">
    <div class="container directions__inner">
        <x-section-label number="02" text="НАПРАВЛЕНИЯ РАБОТЫ" />

        <div class="directions__heading">
            <h2 class="section-title">
                ПОЛНОЕ УПРАВЛЕНИЕ<br class="desktop-only">
                СТАДИЯМИ СТРОИТЕЛЬСТВА
            </h2>

            <p>
                Мы зарекомендовали себя как надёжный поставщик строительных
                услуг — от разработки концепции до передачи объекта в эксплуатацию.
            </p>
        </div>

        @php
            $items = [
                ['01', 'ПРОЕКТИРОВАНИЕ', 'Разработка и сопровождение проектной документации для объектов любого уровня сложности.'],
                ['02', 'ОБЩЕСТРОИТЕЛЬНЫЕ РАБОТЫ', 'Полный цикл строительно-монтажных работ с контролем качества и сроков на каждом этапе.'],
                ['03', 'ИНЖЕНЕРНЫЕ СИСТЕМЫ', 'Проектирование и монтаж инженерных сетей — от электроснабжения до вентиляции и слаботочных систем.'],
                ['04', 'ОТДЕЛКА И FIT-OUT', 'Комплексная внутренняя отделка и подготовка помещений под ключ для любых типов объектов.'],
            ];
        @endphp

        <div class="directions__cards">
            @foreach ($items as $item)
                <article class="direction-card">
                    <span class="direction-card__number">{{ $item[0] }}</span>
                    <h3>{{ $item[1] }}</h3>
                    <p>{{ $item[2] }}</p>
                </article>
            @endforeach
        </div>
    </div>
</section>
