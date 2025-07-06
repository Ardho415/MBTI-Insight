<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MbtiQuestion;
use App\Models\MbtiResult;
use App\Models\MbtiTest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class MbtiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('mbti.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $questions = MbtiQuestion::active()->ordered()->get();
        return view('mbti.quiz', compact('questions'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'answers' => 'required|array',
            'answers.*' => 'required|in:A,B'
        ]);

        $mbtiTest = new MbtiTest();
        $mbtiTest->user_id = Auth::id();
        $mbtiTest->session_id = $request->session()->getId();
        $mbtiTest->answers = $request->answers;
        
        // Calculate result
        $resultType = $mbtiTest->calculateResult($request->answers);
        $mbtiTest->result_type = $resultType;
        
        $mbtiTest->save();

        return redirect()->route('mbti.show', $mbtiTest->id);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $test = MbtiTest::with('result')->findOrFail($id);
        
        // Check if user owns this test or if it's from the same session
        if (Auth::check() && $test->user_id !== Auth::id()) {
            abort(403);
        } elseif (!Auth::check() && $test->session_id !== session()->getId()) {
            abort(403);
        }

        return view('mbti.result', compact('test'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $test = MbtiTest::findOrFail($id);
        
        // Check if user owns this test
        if (Auth::check() && $test->user_id !== Auth::id()) {
            abort(403);
        } elseif (!Auth::check() && $test->session_id !== session()->getId()) {
            abort(403);
        }

        $questions = MbtiQuestion::active()->ordered()->get();
        return view('mbti.edit', compact('test', 'questions'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'answers' => 'required|array',
            'answers.*' => 'required|in:A,B'
        ]);

        $test = MbtiTest::findOrFail($id);
        
        // Check if user owns this test
        if (Auth::check() && $test->user_id !== Auth::id()) {
            abort(403);
        } elseif (!Auth::check() && $test->session_id !== session()->getId()) {
            abort(403);
        }

        $test->answers = $request->answers;
        
        // Recalculate result
        $resultType = $test->calculateResult($request->answers);
        $test->result_type = $resultType;
        
        $test->save();

        return redirect()->route('mbti.show', $test->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $test = MbtiTest::findOrFail($id);
        
        // Check if user owns this test
        if (Auth::check() && $test->user_id !== Auth::id()) {
            abort(403);
        } elseif (!Auth::check() && $test->session_id !== session()->getId()) {
            abort(403);
        }

        $test->delete();

        return redirect()->route('mbti.index')->with('success', 'Test berhasil dihapus.');
    }

    /**
     * Display user's test history
     */
    public function history()
    {
        if (!Auth::check()) {
            return redirect()->route('login');
        }

        $tests = MbtiTest::where('user_id', Auth::id())
                         ->with('result')
                         ->orderBy('created_at', 'desc')
                         ->paginate(10);

        return view('mbti.history', compact('tests'));
    }

    /**
     * Display all MBTI types
     */
    public function types()
    {
        $types = MbtiResult::all();
        return view('mbti.types', compact('types'));
    }

    /**
     * Display specific MBTI type
     */
    public function type(string $type)
    {
        $mbtiType = MbtiResult::where('type', strtoupper($type))->firstOrFail();
        return view('mbti.type-detail', compact('mbtiType'));
    }
}

