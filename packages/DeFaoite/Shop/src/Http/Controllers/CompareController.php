<?php

namespace DeFaoite\Shop\Http\Controllers;

use Illuminate\View\View;
use DeFaoite\Attribute\Repositories\AttributeFamilyRepository;

class CompareController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(protected AttributeFamilyRepository $attributeFamilyRepository) {}

    /**
     * Address route index page.
     *
     * @return View
     */
    public function index()
    {
        $comparableAttributes = $this->attributeFamilyRepository->getComparableAttributesBelongsToFamily();

        return view('shop::compare.index', compact('comparableAttributes'));
    }
}
