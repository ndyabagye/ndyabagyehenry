<x-prezet::template>
    @seo([
    'title' => 'Ndyabagye Henry  | Now',
    'description' => 'This is a now page',
    'url' => route('now')
    ])

    {{--    Left Sidebar--}}
    <x-slot name="left">
        <x-prezet::mobilesidebar :nav="$nav"/>
    </x-slot>

    <section>
        This is a now Page
    </section>

</x-prezet::template>
