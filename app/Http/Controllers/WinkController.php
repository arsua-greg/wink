<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Wink\WinkPost;
use Wink\WinkPage;

class WinkController extends Controller
{
	public function index()
	{
		$posts = WinkPost::with('tags')
			->live()
			->orderBy('publish_date', 'DESC')
			->simplePaginate(12);

		return view('blog.index', compact('posts'));
	}

	public function show($slug)
	{
		$post = WinkPost::with('tags')
			->live()
			->whereSlug($slug)
			->firstOrFail();

		return view('blog.show', compact('post'));
	}

	public function page($slug)
	{
		$page = WinkPage::whereSlug($slug)
			->firstOrFail();

		return view('page.show', compact('page'));
	}
}