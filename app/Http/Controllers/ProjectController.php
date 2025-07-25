<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Page;
use App\Seo;
use App\Review;
use Storage;
use App\Project;

class ProjectController extends Controller {

    public function index() {
        $projects = Project::orderBy('position')->orderBy('created_at', 'desc')->paginate(20);
        return view('projects.index', [
            'projects' => $projects,
            'breadcrumbs' => [
                [
                    'name' => 'Projects',
                    'last' => true,
                    'url' => false
                ]
            ]
        ]);
    }

    public function show($slug) {
        $project = Project::whereSlug($slug)->firstOrFail();
        $projects = Project::orderBy('position')->orderBy('created_at', 'desc')->get();
        return view('projects.show', [
            'project' => $project,
            'projects' => $projects,
            'title' => $project->page_title,
            'keywords' => $project->meta_keywords,
            'description' => $project->meta_description,
            'breadcrumbs' => [
                [
                    'name' => 'Projects',
                    'last' => false,
                    'url' => route('projects')
                ],
                [
                    'name' => $project->name,
                    'last' => true,
                    'url' => false
                ]
            ]
        ]);
    }
    
    public function ajax_by_id($id) {
        $project = Project::whereId($id)->firstOrFail();
        return view('projects.ajax_by_id', [
            'project' => $project
        ]);
    }

}
