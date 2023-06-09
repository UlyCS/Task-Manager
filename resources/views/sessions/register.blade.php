<head>
    <!-- Other meta tags and CSS files -->
    <link rel="stylesheet" href="{{ asset('resource/css/animation.css') }}">
</head>
<x-sub-section-panel sectionName="Register">
    <div class="area">
        <div class="animation-bg"></div>
        <ul class="circles">
            <li></li>
            <li></li>
            <!-- Add the rest of the li elements for circles -->
        </ul>
        <div class="w-full lg:w-1/2 my-6 pr-0 lg:pr-2">
            <div class="leading-loose">
                <form class="p-10 bg-white rounded shadow-xl" method="post" action="{{ route('sessions.store') }}">
                    @csrf
                    <x-form.input inputName="name"/>
                    <x-form.input inputName="email" type="email"/>
                    <x-form.input inputName="password" type="password"/>
                    <x-form.button buttonName="Register" />
                </form>
            </div>
        </div>
    </div>
</x-sub-section-panel>