<x-prezet::template>
    @seo([
    'title' => 'Ndyabagye Henry',
    'description' => 'Henry Ndyabagye',
    'url' => route('home')
    ])

    {{--    {{ dd($frontmatter, $headings, $body, $nav) }}--}}
    {{--    Left Sidebar--}}
    <x-slot name="left">
        <x-prezet::mobilesidebar :nav="$nav"/>
    </x-slot>

    {{--    Main Content--}}
    <section class="mx-auto max-w-3xl">
        <h1 class="font-display text-lg font-medium tracking-tight text-primary-900 dark:text-primary-500 mb-4">
            ABOUT ME
        </h1>

        <div
            class=" prose-headings:font-display prose prose-gray max-w-none prose-a:border-b prose-a:border-dashed prose-a:border-black/30 prose-a:font-semibold prose-a:no-underline hover:prose-a:border-solid prose-img:rounded"
        >
            {!! $body !!}
        </div>

    </section>
</x-prezet::template>
