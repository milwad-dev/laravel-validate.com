<?php

namespace App\Http\Controllers;

use GrahamCampbell\GitHub\Facades\GitHub;
use GrahamCampbell\Markdown\Facades\Markdown;

class DocsController extends Controller
{
    public function __invoke(string $version, string $page = null)
    {
        if (is_null($page)) {
            return to_route('docs', ['version' => $version, 'page' => 'introduction']);
        }

        $fileContent = GitHub::api('repo')->contents()->show('milwad-dev', 'laravel-validate', 'README.md', '1.x');
        $markdownContent = base64_decode($fileContent['content']);
        $processedContent = Markdown::convertToHtml($markdownContent);

        return view('docs', compact('processedContent'));
    }
}
