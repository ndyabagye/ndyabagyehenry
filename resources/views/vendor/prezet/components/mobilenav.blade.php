<nav class="text-base lg:text-sm">

{{--    {{dd($nav)}}--}}

    <ul role="list" class="space-y-9">
        @foreach ($nav as $link)
            <li>
{{--                <p class="font-display font-medium text-gray-900">--}}
{{--                    {{ $link['title'] }}--}}
{{--                </p>--}}
                <ul
                    role="list"
                    class="mt-2 space-y-2 border-l-2 border-gray-100 lg:mt-4 lg:space-y-4 lg:border-gray-200"
                >
{{--                    @foreach ($link['links'] as $link)--}}
                        <li class="relative">
                            <a
                                @class([
                                    'before:-trangray-y-1/2 block w-full pl-3.5 before:pointer-events-none before:absolute before:-left-1 before:top-1/2 before:h-1.5 before:w-1.5 before:rounded-full',
                                    'font-semibold text-primary-500 before:bg-primary-500' =>
                                        url()->current() === route($link['url']),
                                    'text-gray-500 before:hidden before:bg-gray-300 hover:text-gray-600 hover:before:block' =>
                                        url()->current() !== route($link['url']),
                                ])
                                href="{{ route($link['url']) }}"
                            >
                                {{ $link['title'] }}
                            </a>
                        </li>
{{--                    @endforeach--}}
                </ul>
            </li>
        @endforeach
    </ul>
</nav>
