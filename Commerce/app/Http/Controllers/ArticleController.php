<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        try {
            $articles = Article::with('scategorie')->get();
            return response()->json($articles, 200);
        } catch (\Exception $e) {
            return response()->json("Sélection impossible ({$e->getMessage()})");
        }
    }

    public function store(Request $request)
    {
        try {
            $article = new Article([
                "designation" => $request->input('designation'),
                "marque" => $request->input('marque'),
                "reference" => $request->input('reference'),
                "qtestock" => $request->input('qtestock'),
                "prix" => $request->input('prix'),
                "imageart" => $request->input('imageart'),
                "scategorieID" => $request->input('scategorieID'),
            ]);
            $article->save();
            return response()->json($article);
        } catch (\Exception $e) {
            return response()->json("Insertion impossible ({$e->getMessage()})");
        }
    }

    public function show($id)
    {
        try {
            $article = Article::findOrFail($id);
            return response()->json($article);
        } catch (\Exception $e) {
            return response()->json("Problème de récupération des données ({$e->getMessage()})");
        }
    }

    public function update(Request $request, $id)
    {
        try {
            $article = Article::findOrFail($id);
            $article->update($request->all());
            return response()->json($article);
        } catch (\Exception $e) {
            return response()->json("Problème de modification ({$e->getMessage()})");
        }
    }

    public function destroy($id)
    {
        try {
            $article = Article::findOrFail($id);
            $article->delete();
            return response()->json("Article supprimé avec succès");
        } catch (\Exception $e) {
            return response()->json("Problème de suppression d'article ({$e->getMessage()})");
        }
    }

    public function showArticlesBySCAT($idscat)
    {
        try {
            $articles = Article::where('scategorieID', $idscat)
                             ->with('scategorie')
                             ->get();
            return response()->json($articles);
        } catch (\Exception $e) {
            return response()->json("Sélection impossible ({$e->getMessage()})");
        }
    }

    public function paginationPaginate()
    {
        try {
            $perPage = request()->input('pageSize', 2);
            $filterDesignation = request()->input('filtre');

            $query = Article::with('scategorie');

            if ($filterDesignation) {
                $query->where('designation', 'like', '%'.$filterDesignation.'%');
            }

            $articles = $query->paginate($perPage);

            return response()->json([
                'products' => $articles->items(),
                'totalPages' => $articles->lastPage(),
            ]);
        } catch (\Exception $e) {
            return response()->json("Sélection impossible ({$e->getMessage()})");
        }
    }
}
