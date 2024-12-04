<x-prezet::template>
    @seo([
    'title' => 'Ndyabagye Henry  | Lists',
    'description' => 'These are a few lists of things I am interested in.',
    'url' => route('lists')
    ])

    {{--    Left Sidebar--}}
    <x-slot name="left">
        <x-prezet::mobilesidebar :nav="$nav"/>
    </x-slot>

    <section>
        Lists Page
    </section>

</x-prezet::template>
