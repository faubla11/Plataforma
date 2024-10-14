<x-app-layout>
     <!-- Portada -->
    <section class="bg-cover mb-12" style="background-image: url({{ asset('img/home/city_home.jpg') }})">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-32">
            <div class="w-full md:w-3/4 lg:w-1/2">
                <h1 class="text-white text-5xl tracking-wider">Bienvenido a MetaCursos</h1>
                <p class="text-white text-xl mt-2 pb-4">Aqui podras aprender de los mejores cursos que ofertamos para que puedas seguirlos a tu ritmo </p>
                <!-- component -->
                @livewire('search')
            </div>
        </div>

    </section>

    <section class="mt-24">
        <h1 class="text-gray-600 text-center space-x-2 text-3xl mb-8">CONTENIDO</h1>
        <div
            class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-x-6 gap-y-8">

            <article>
                <figure>
                    <img class="rounded-xl h-36 w-full object-cover" src="{{ asset('img/home/medicina.avif') }}" alt="">
                </figure>
                <header class="mt-2">
                    <h1 class="text-center text-xl text-gray-700">Medicina</h1>
                </header>
                <p class="text-sm text-gray-500 font-sans">Aprenderás los fundamentos de la anatomía, fisiología y patología, así como técnicas de evaluación y diagnóstico. Se abordarán principios éticos en la práctica médica.</p>
            </article>
            <article>
                <figure>
                    <img class="rounded-xl h-36 w-full object-cover" src="{{ asset('img/home/educacion.avif') }}"
                        alt="">
                </figure>
                <header class="mt-2">
                    <h1 class="text-center text-xl text-gray-700">Educación</h1>
                </header>
                <p class="text-sm text-gray-500 ">Explorarás teorías educativas y prácticas de enseñanza, incluyendo diseño curricular y evaluación, para convertirte en un educador que atienda las necesidades de todos los estudiantes.</p>
            </article>
            <article>
                <figure>
                    <img class="rounded-xl h-36 w-full object-cover" src="{{ asset('img/home/monitor.jpg') }}"
                        alt="">
                </figure>
                <header class="mt-2">
                    <h1 class="text-center text-xl text-gray-700">Tecnología</h1>
                </header>
                <p class="text-sm text-gray-500 ">Te introducirás en la programación y el desarrollo de aplicaciones, aprendiendo a usar metodologías ágiles y a gestionar bases de datos para crear soluciones tecnológicas.</p>
            </article>
            <article>
                <figure>
                    <img class="rounded-xl h-36 w-full object-cover" src="{{ asset('img/home/marketing.jpg') }}" alt="">
                </figure>
                <header class="mt-2">
                    <h1 class="text-center text-xl text-gray-700">Marketing</h1>
                </header>
                <p class="text-sm text-gray-500 ">Descubrirás estrategias para promocionar productos en el entorno digital, incluyendo SEO, publicidad en redes sociales y análisis de datos, para crear campañas efectivas.</p>
            </article>
        </div>
    </section>
    <section class="mt-24 bg-gray-700 py-12">
        <h1 class="text-center text-3xl text-yellow-50">¿Título?</h1>
        <p class="text-center text-yellow-50">Podrás encontar la mejor formación online en nuestra sección Cursos </p>
        <div class="flex justify-center">
            <a href="{{ route('courses.index') }}"
                class="mt-6 py-2 px-6 text-white rounded-lg bg-yellow-400 hover:bg-yellow-600 shadow-lg block md:inline-block">Cursos</a>
        </div>
    </section>
    <section class="mt-24 mb-12" >
        <h1 class="text-center text-3xl text-gray-600">Algunos Cursos que podrian interesarte </h1>
        <p class="text-center text-gray-500 text-sm mb-6">Vamos arriesgate y aprende uno..</p>

        <div
            class="container grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-x-6 gap-y-8">
            @foreach ($courses as $course)
            <x-course-card :course="$course" />

            @endforeach

        </div>
    </section>
    {{-- @include('components.footer') --}}
</x-app-layout>
