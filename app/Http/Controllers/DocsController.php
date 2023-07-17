<?php

namespace App\Http\Controllers;

use GrahamCampbell\GitHub\Facades\GitHub;
use GrahamCampbell\Markdown\Facades\Markdown;
use Illuminate\Support\Facades\Cache;

class DocsController extends Controller
{
    public function __invoke(string $version, string $page = null)
    {
        if (is_null($page)) {
            return to_route('docs', ['version' => $version, 'page' => 'introduction']);
        }

        try {
            $content = Cache::remember("docs.$version.$page", 5, function () use ($version, $page) {
                $fileContent = GitHub::api('repo')
                    ->contents()
                    ->show('milwad-dev', 'laravel-validate', "docs/$version/$page.md", $version);

                $markdownContent = base64_decode($fileContent['content']);

                return Markdown::convertToHtml($markdownContent);
            });

            return view('docs', compact('content', 'version', 'page'));
        } catch (\Exception $e) {
            return to_route('docs.not-found');
        }
    }
}
