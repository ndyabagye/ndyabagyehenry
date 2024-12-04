<?php

namespace App\Http\Controllers;

use BenBjurstrom\Prezet\Http\Controllers\ShowController as BaseShowController;
use BenBjurstrom\Prezet\Models\Document;
use BenBjurstrom\Prezet\Prezet;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PrezetShowController extends BaseShowController
{
    public function __invoke(Request $request, string $slug): View
    {
        $doc = Document::query()
            ->where('slug', $slug)
            ->when(config('app.env') !== 'local', function ($query) {
                return $query->where('draft', false);
            })
            ->firstOrFail();

//        $nav = Prezet::getNav();
        $md = Prezet::getMarkdown($doc->filepath);
        $fm = Prezet::getFrontmatter($doc->filepath);
        $html = Prezet::getContent($md);
        $headings = Prezet::getHeadings($html);
        $navItems = config('constants.navItems');

        return view('prezet::show', [
            'frontmatter' => $fm,
            'headings' => $headings,
            'body' => $html,
            'nav' => $navItems,
        ]);
    }
}
