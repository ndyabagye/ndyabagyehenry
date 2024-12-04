<?php

namespace App\Http\Controllers;

use BenBjurstrom\Prezet\Models\Document;
use BenBjurstrom\Prezet\Prezet;
use Illuminate\Http\Request;
use Illuminate\View\View;

class HomeController extends Controller
{
    public function __invoke(Request $request): View
    {
        $doc = Document::query()
            ->where('slug', 'home')
            ->where('category', 'home')
            ->when(config('app.env') !== 'local', function ($query) {
                return $query->where('draft', true);
            })
            ->firstOrFail();

        $nav = Prezet::getNav();

        $navItems = config('constants.navItems');

        $md = Prezet::getMarkdown($doc->filepath);
        $fm = Prezet::getFrontmatter($doc->filepath);
        $html = Prezet::getContent($md);
        $headings = Prezet::getHeadings($html);

        return view('home', [
            'frontmatter' => $fm,
            'headings' => $headings,
            'body' => $html,
            'nav' => $navItems,
        ]);
    }
}
