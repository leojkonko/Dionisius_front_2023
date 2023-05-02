<?php
 
namespace App\Http\Controllers;
 
use App\Services\SiteService;
use Ellite\PageCompany\Services\PageCompanyService;
 
class EventController extends Controller
{
    public function index(SiteService $site, PageCompanyService $page)
    {
        $site->setAlternates('event')
            ->setTitle('Casamentos')
            ->setBreadTitle('Casamentos')
            ->pushBreadCrumb('Casamentos')
            ->setDescriptionIfNotEmpty($page->getPage()->description)
            ->setKeywordsIfNotEmpty($page->getPage()->keywords);
 
        return view('front.pages.event', [
            'page' => $page->getPage()
        ]);
    }
}

